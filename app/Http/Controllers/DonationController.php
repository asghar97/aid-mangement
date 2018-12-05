<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;
use App\Donar;
use App\Type;
use App\Currency;
use Session;
use Auth;
use Illuminate\Support\Facades\Input;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        $formModel = new Donation;
        $formModel->fill(Input::get());

        if(isset($_GET['submit'])){
            $models = Donation::Search();
        }else{
           $models =  Donation::paginate(10);
        }
        
                
        if (\Request::ajax()) {

            return view('donations.ajax',  compact('models'));
        }

    	
        return view('donations.index', compact('models', 'formModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $type = Type::pluck('name','name');
        $currency = Currency::pluck('currency_symbols','id');
        $currency_symbols = Currency::pluck('currency_symbols','id');
        return view('donations.create',compact('type','currency'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Donation::getValidationRules());

        $input = $request->all();
       
       
              
        $date = date('Y-m-d H:i:s');
        $input['created_by'] = Auth::user()->id;
        $input['status'] = 1;

         
      if(empty($input['donar_id'])){
        Session::flash('flash_message', 'Add donar first!');
        return redirect()->back();
       }
       else{
	    Donation::create($input);

	    Session::flash('flash_message', 'Successfully added!');

	    return redirect()->back();
}    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
       
        $model = Donation::findOrFail($id);
       
      	return view('donations.show', array('model' => $model));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $type = Type::pluck('name','name');
        $currency = Currency::pluck('currency_name','id');
        $model = Donation::findOrFail($id);

        return view('donations.edit',compact('type','currency','model'));
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
       $model = Donation::findOrFail($id);

	    $this->validate($request, Donation::getValidationRules());

	    $model->fill( $request->all() )->save();

	    Session::flash('flash_message', ' successfully updated!');

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
        $model = Donation::findOrFail($id);

	    $model->delete();

	    Session::flash('flash_message', ' successfully deleted!');

	    return redirect()->route('donations.index');
    }


    public function AutoCompleteDonarName(){
        
        $searched_word = $_GET['term'];
        
        $match = addcslashes($searched_word, '%_');

        $rows = Donar::where('fname','LIKE',"%$match%")->get();


        $json_data = array();
        $arr = array();
        foreach($rows as $row){
            
            $arr['label'] = htmlentities(stripslashes($row->fname." ".$row->lname." (".$row->identity_no.") "));
            $arr['id'] = (int)$row->id;
            $json_data[] = $arr;
            
        }
        
        echo json_encode($json_data);//format the array into json data
    }
}
