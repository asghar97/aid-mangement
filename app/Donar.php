<?php 
namespace App;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Donar extends Model
{
    
	protected $table = 'donar';
	  
	protected $fillable = [
        'id','identity_no','fname','lname','address','city','country','phone','email','company','image','created_at','updated_at','status','created_by'
    ];

	static function getValidationRules(){
    	$rules = [
		    'fname' => 'required','identity_no' => 'required','address' => 'required','city' => 'required','country' => 'required','phone' => 'required'
		];
		return $rules;
    }

    public function donation()
    {
        return $this->hasMany('App\Donation');
    }

	static function Search(){

    	$pageSize = (isset($_GET['pageSize'])?$_GET['pageSize']:10);
    	
        $query = Donar::where('id','>',0);

			if(!empty(Input::get("id"))){
    			$query->where("id","=",Input::get("id"));
    			} 
            if(!empty(Input::get("identity_no"))){
                $query->where("identity_no","=",Input::get("identity_no"));
                } 
if(!empty(Input::get("fname"))){
    			$query->where("fname","=",Input::get("fname"));
    			} 
if(!empty(Input::get("lname"))){
    			$query->where("lname","=",Input::get("lname"));
    			} 
if(!empty(Input::get("address"))){
    			$query->where("address","=",Input::get("address"));
    			} 
if(!empty(Input::get("city"))){
    			$query->where("city","=",Input::get("city"));
    			} 
if(!empty(Input::get("country"))){
    			$query->where("country","=",Input::get("country"));
    			} 
if(!empty(Input::get("phone"))){
    			$query->where("phone","=",Input::get("phone"));
    			} 
if(!empty(Input::get("email"))){
    			$query->where("email","=",Input::get("email"));
    			} 
if(!empty(Input::get("company"))){
    			$query->where("company","=",Input::get("company"));
    			} 
if(!empty(Input::get("image"))){
    			$query->where("image","=",Input::get("image"));
    			} 
if(!empty(Input::get("created_at"))){
    			$query->where("created_at","=",Input::get("created_at"));
    			} 
if(!empty(Input::get("updated_at"))){
    			$query->where("updated_at","=",Input::get("updated_at"));
    			} 
if(!empty(Input::get("status"))){
    			$query->where("status","=",Input::get("status"));
    			} 
if(!empty(Input::get("created_by"))){
    			$query->where("created_by","=",Input::get("created_by"));
    			} 


		$result = $query->paginate(10);

		return $result;

    }
}
