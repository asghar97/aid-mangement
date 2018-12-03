<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Company;
use App\Product;
use Session;
use Hash;
use Illuminate\Support\Facades\Input;
use Auth;

class UsersController extends Controller
{

    public function index()
    {
        
        $formModel = new Users;
        $formModel->fill(Input::get());

        if(isset($_GET['submit'])){
            $models = Users::Search();
        }else{
           $models =  Users::orderBy('id', 'desc')->paginate(10);
        }
        
                
        if (\Request::ajax()) {

            return view('userss.ajax',  compact('models'));
        }

    	
        return view('userss.index', compact('models', 'formModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('userss.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, Users::getValidationRules());

        $date = date('Y-m-d H:i:s');

	    $users = new Users;
        $users->name = $request->name;
        $users->username = $request->username;
        $users->email = $request->email;
        $hashed = bcrypt($request->password);
        $users->password = $hashed;
        $users->user_type = $request->user_type;
        $users->created_by = Auth::id();
        $users->status = 1;
        $users->remember_token = $hashed;

        if($request->hasFile('image')){

            $photo = $request->file('image')->getClientOriginalName();
            $destination = public_path() . '/images/users';
            $request->file('image')->move($destination, $photo);
            $users->image = $photo;

        }

        $users->save();

	    Session::flash('flash_message', 'Users Successfully Created!');

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
       
        $model = Users::findOrFail($id);
       
      	return view('userss.show', array('model' => $model));
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
         $model = Users::findOrFail($id);

    return view('userss.edit')->withModel($model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
       $model = Users::findOrFail($id);
       $prev_image = $model->image;

	    //$this->validate($request, Users::getValidationRules());

    if($request->hasFile('image')){

        //File::delete(public_path().'/images/users/'.$prev_image);
        
        $image = $request->file('image');
        $photo = $image->getClientOriginalName();
        $destination = public_path() . '/images/users';
        $image->move($destination, $photo);
        $model->image = $photo;
        $model->save();

    }


	   $model->update($request->except('image'));

	   Session::flash('flash_message', 'Users successfully updated!');

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
        $model = Users::findOrFail($id);

	    $model->delete();

	    Session::flash('flash_message', 'Users successfully deleted!');

	    return redirect()->route('userss.index');
    }

    public function editpassword($id){

        $users = Users::findorfail($id);
        return view('userss.editpassword')->with('users', $users);

    }

    public function updatepassword(Request $request, $id){

        $this->validate($request, [
            'password' => 'required|confirmed',
           ]);

        $user = Users::findorfail($id);
        
        if(Hash::check($request->input('oldpassword'), $user->password))
        {
           
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('logout');

        }else{
            return "error";
        }

    }

}
