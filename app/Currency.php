<?php 
namespace App;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Currency extends Model
{
    
	protected $table = 'domain_currency';
	  
	protected $fillable = [
        'id','currency_name','currency_symbols','currency_rate','status'
    ];

	static function getValidationRules(){
    	$rules = [
		    'currency_name' => 'required',
            'currency_symbols' => 'required',
            'currency_rate' => 'required',
            'status' => 'required'
		];
		return $rules;
    }

	public function donation()
    {
        return $this->hasMany('App\Donation');
    }

    public function expense()
    {
        return $this->hasMany('App\Expense');
    }

    static function Search(){
    	$pageSize = (isset($_GET['pageSize'])?$_GET['pageSize']:15);
    	$query = Currency::where('id','>',0);

			if(!empty(Input::get("id"))){
    			$query->where("id","=",Input::get("id"));
    			} 
if(!empty(Input::get("currency_name"))){
    			$query->where("currency_name","=",Input::get("currency_name"));
    			} 
if(!empty(Input::get("currency_symbols"))){
    			$query->where("currency_symbols","=",Input::get("currency_symbols"));
    			} 


    	
    	
		//$result = $query->get();
		$result = $query->paginate(2);
		//print_r($result);die();
		return $result;

    }
}
