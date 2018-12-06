<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\Type;
use App\Currency;
use Session;
use Auth;
use Illuminate\Support\Facades\Input;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        $formModel = new Expense;
        $formModel->fill(Input::get());

        if(isset($_GET['submit'])){
            $models = Expense::Search();
        }else{
           $models =  Expense::paginate(2);
        }
        
                
        if (\Request::ajax()) {

            return view('expenses.ajax',  compact('models'));
        }

    	 return view('expenses.index', compact('models', 'formModel'));
       
    }

    public function report()
    {
         $formModel = new Expense;
         $formModel->fill(Input::get());

         if(isset($_GET['submit'])){
            $models = Expense::Search();
        }else{
           $models =  Expense::paginate(2);
        }
        
        if (\Request::ajax()) {

            return view('expenses.ajax',  compact('models'));
        } 

         $models =  Expense::paginate(2);
 return view('expenses.report', compact('models', 'formModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $type = Type::pluck('name','name');
        $currency = Currency::pluck('currency_name','id');
        return view('expenses.create',compact('type','currency'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Expense::getValidationRules());

        $input = $request->all();

        $date = date('Y-m-d H:i:s');
        $input['created_by'] = Auth::user()->id;
        $input['status'] = 1;


	    Expense::create($input);

	    Session::flash('flash_message', 'Task successfully added!');

	    return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       
        $model = Expense::findOrFail($id);
       
      	return view('expenses.show', array('model' => $model));
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $model = Expense::findOrFail($id);
        $type = Type::pluck('name','name');
        $currency = Currency::pluck('currency_name','id');

        return view('expenses.edit',compact('type','currency','model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        //
       $model = Expense::findOrFail($id);

	    $this->validate($request, Expense::getValidationRules());

	    $model->fill( $request->all() )->save();

	    Session::flash('flash_message', 'Successfully updated!');

	    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $model = Expense::findOrFail($id);

	    $model->delete();

	    Session::flash('flash_message', ' successfully deleted!');

	    return redirect()->route('expenses.index');
    }

    public function ledger($id,$type){

    return view('expenses.ledger', array('user_id' => $id ,'type' =>$type));

    }


}
