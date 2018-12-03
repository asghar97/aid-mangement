<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;
use Illuminate\Support\Facades\Input;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $formModel = new Currency;
        $formModel->fill(Input::get());

        if(isset($_GET['submit'])){
            $models = Currency::Search();
        }else{
           $models = Currency::paginate(10);
        }
        
                
        if (\Request::ajax()) {

            return view('currencys.ajax',  compact('models'));
        }

    	
        return view('currencys.index', compact('models', 'formModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('currencys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Currency::getValidationRules());
      
        $input = $request->all();

       $status = $input['status'];
        
        if($status == 0){

          Currency::create($input);

        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();  
        }

        else {

           // $UpdateDetails = Currency::where('status', 1)->first();
            DB::table('domain_currency')
                                ->where('status', 1)
                                ->update(['status' => 0]);

            $input = $request->all();
            Currency::create($input);
            Session::flash('flash_message', 'Task successfully added!');
            return redirect()->back();

        }

    

        
        //$myquery = DB::table('domain_currency')->select('status')->where('status', '=', 0);        
        
        //if(count($myquery) > 0){


          //  return 'error';
        //}

        //else{

        

          //  }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       
        $model = Currency::findOrFail($id);
       
      	return view('currencys.show', array('model' => $model));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
         $model = Currency::findOrFail($id);
         

    return view('currencys.edit')->withModel($model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
    
       $model = Currency::findOrFail($id);

       
	    $this->validate($request, Currency::getValidationRules());

	    $model->fill( $request->all() );

        if($model['status'] == 0){
        
                $model->fill( $request->all() )->save();
                Session::flash('flash_message', 'Successfully updated!');

                return redirect()->back();
            }

            else {
            $input = $request->all();
                DB::table('domain_currency')
                                ->where('status', 1)
                                ->update(['status' => 0]);
            DB::table('domain_currency')
                                ->where('id', $id)
                                ->update(['status' => $model['status']]);

            Session::flash('flash_message', 'Task successfully Update!');
            return redirect()->back();
            }

	    
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
        $model = Currency::findOrFail($id);

	    $model->delete();

	    Session::flash('flash_message', 'Successfully deleted!');

	    return redirect()->route('currencys.index');
    }
}
