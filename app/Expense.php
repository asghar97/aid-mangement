<?php 
namespace App;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Expense extends Model
{
    
	protected $table = 'expense';
	  
	protected $fillable = [
        'id','amount','currency','type','comment','location','date_added','status','created_at','updated_at','created_by'
    ];

	static function getValidationRules(){
    	$rules = [
		   'amount' => 'required','currency' => 'required','type' => 'required'
		];
		return $rules;
    }

	public function currencies()
    {
        return $this->belongsTo('App\Currency', 'currency');
    }

    static function Search(){
    	$pageSize = (isset($_GET['pageSize'])?$_GET['pageSize']:10);
    	$query = Expense::where('id','>',0);

			if(!empty(Input::get("id"))){
    			$query->where("id","=",Input::get("id"));
    			} 
if(!empty(Input::get("donar_id"))){
    			$query->where("donar_id","=",Input::get("donar_id"));
    			} 
if(!empty(Input::get("amount"))){
    			$query->where("amount","=",Input::get("amount"));
    			} 
if(!empty(Input::get("currency"))){
    			$query->where("currency","=",Input::get("currency"));
    			} 
if(!empty(Input::get("type"))){
    			$query->where("type","=",Input::get("type"));
    			} 
if(!empty(Input::get("comment"))){
    			$query->where("comment","=",Input::get("comment"));
    			} 
if(!empty(Input::get("location"))){
    			$query->where("location","=",Input::get("location"));
    			} 
if(!empty(Input::get("date_added"))){
    			$query->where("date_added","=",Input::get("date_added"));
    			} 
if(!empty(Input::get("status"))){
    			$query->where("status","=",Input::get("status"));
    			} 
if(!empty(Input::get("created_at"))){
    			$query->where("created_at","=",Input::get("created_at"));
    			} 
if(!empty(Input::get("updated_at"))){
    			$query->where("updated_at","=",Input::get("updated_at"));
    			} 
if(!empty(Input::get("created_by"))){
    			$query->where("created_by","=",Input::get("created_by"));
    			} 


    	
    	
		//$result = $query->get();
		$result = $query->paginate(2);
		//print_r($result);die();
		return $result;

    }
}
