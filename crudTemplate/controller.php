<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\;
use Session;
use Illuminate\Support\Facades\Input;

class Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        $formModel = new ;
        $formModel->fill(Input::get());

        if(isset($_GET['submit'])){
            $models = ::Search();
        }else{
           $models =  ::paginate(2);
        }
        
                
        if (\Request::ajax()) {

            return view('s.ajax',  compact('models'));
        }

    	
        return view('s.index', compact('models', 'formModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('s.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
        

        $this->validate($request, ::getValidationRules());

        $input = $request->all();
	    ::create($input);

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
       
        $model = ::findOrFail($id);
       
      	return view('s.show', array('model' => $model));
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
         $model = ::findOrFail($id);

    return view('s.edit')->withModel($model);
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
       $model = ::findOrFail($id);

	    $this->validate($request, ::getValidationRules());

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
        $model = ::findOrFail($id);

	    $model->delete();

	    Session::flash('flash_message', ' successfully deleted!');

	    return redirect()->route('s.index');
    }
}
