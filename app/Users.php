<?php 
namespace App;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    
	protected $table = 'users';
	  
	protected $fillable = [
        'username','name','password','email','image','user_type','created_by','admin_id','status','date_added','date_modified'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

	static function getValidationRules(){
    	$rules = [
		    'username' => 'required|max:80|unique:users','password' => 'required','user_type' => 'required'
		];
		return $rules;
    }

	public function prepost()
    {
        return $this->hasMany('App\Prepost');
    }

    static function Search(){
    	$pageSize = (isset($_GET['pageSize'])?$_GET['pageSize']:20);
    	$query = Users::where('id','>',0);

			    if(!empty(Input::get("id"))){
    			$query->where("id","=",Input::get("id"));
    			} 
                
                if(!empty(Input::get("username"))){
    			$query->where("username","=",Input::get("username"));
    			} 
                
                if(!empty(Input::get("first_name"))){
    			$query->where("first_name","=",Input::get("first_name"));
    			} 
                
                if(!empty(Input::get("last_name"))){
    			$query->where("last_name","=",Input::get("last_name"));
    			} 
                
                if(!empty(Input::get("password"))){
    			$query->where("password","=",Input::get("password"));
    			} 
                
                if(!empty(Input::get("email"))){
    			$query->where("email","=",Input::get("email"));
    			} 
                
                if(!empty(Input::get("user_type"))){
    			$query->where("user_type","=",Input::get("user_type"));
    			} 
                
                if(!empty(Input::get("created_by"))){
    			$query->where("created_by","=",Input::get("created_by"));
    			} 
                
                if(!empty(Input::get("status"))){
    			$query->where("status","=",Input::get("status"));
    			} 
                
                if(!empty(Input::get("date_added"))){
    			$query->where("date_added","=",Input::get("date_added"));
    			} 
                
                if(!empty(Input::get("date_modified"))){
    			$query->where("date_modified","=",Input::get("date_modified"));
    			}

        		$result = $query->paginate(20);
        		return $result;
    }
}
