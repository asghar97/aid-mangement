<?php  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use Session;
use Illuminate\Support\Facades\Input;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        $formModel = new Type;
        $formModel->fill(Input::get());

        if(isset($_GET['submit'])){
            $models = Type::Search();
        }else{
           $models =  Type::paginate(10);
        }
        
                
        if (\Request::ajax()) {

            return view('types.ajax',  compact('models'));
        }

    	
        return view('types.index', compact('models', 'formModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('types.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, Type::getValidationRules());

        $input = $request->all();

        $date = date('Y-m-d H:i:s');
        $input['status'] = 1;
        $input['date_added'] = $date;

	    Type::create($input);

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
       
        $model = Type::findOrFail($id);
       
      	return view('types.show', array('model' => $model));
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
         $model = Type::findOrFail($id);

    return view('types.edit')->withModel($model);
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
       $model = Type::findOrFail($id);

	    $this->validate($request, Type::getValidationRules());

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
        $model = Type::findOrFail($id);

	    $model->delete();

	    Session::flash('flash_message', ' successfully deleted!');

	    return redirect()->route('types.index');
    }
}
