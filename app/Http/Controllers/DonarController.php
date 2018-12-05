<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donar;
use Session;
use Auth;
use Illuminate\Support\Facades\Input;

class DonarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        $formModel = new Donar;
        $formModel->fill(Input::get());

        if(isset($_GET['submit'])){
            $models = Donar::Search();
        }else{
           $models =  Donar::paginate(10);
        }
        
                
        if (\Request::ajax()) {

            return view('donars.ajax',  compact('models'));
        }

    	
        return view('donars.index', compact('models', 'formModel'));
    }


    public function create()
    {
        
        return view('donars.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, Donar::getValidationRules());

        $input = $request->all();
        $date = date('Y-m-d H:i:s');
        $input['created_by'] = Auth::user()->id;
        $input['status'] = 1;

        if($request->hasFile('image')){

            $photo = $request->file('image')->getClientOriginalName();
            $destination = public_path() . '/images/donar';
            $request->file('image')->move($destination, $photo);
            $input['image'] = $photo;

        }

	    Donar::create($input);

	    Session::flash('flash_message', 'Successfully added!');

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
       
        $model = Donar::findOrFail($id);
       
      	return view('donars.show', array('model' => $model));
        //return view('donations.index', array('model' => $model));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
         $model = Donar::findOrFail($id);

        return view('donars.edit')->withModel($model);
    }

    public function update($id, Request $request)
    {
       $model = Donar::findOrFail($id);
       $prev_image = $model->image;


        if($request->hasFile('image')){
            
            $image = $request->file('image');
            $photo = $image->getClientOriginalName();
            $destination = public_path() . '/images/donar';
            $image->move($destination, $photo);
            $model->image = $photo;
            $model->save();

        }


       $model->update($request->except('image'));

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
        $model = Donar::findOrFail($id);

	    $model->delete();

	    Session::flash('flash_message', ' successfully deleted!');

	    return redirect()->route('donars.index');
    }
}
