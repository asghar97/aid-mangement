<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CrudController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

	public function create()
    {
    	return view("crud.create");
    }

    
    public function store(Request $request){

    		$this->createController($_POST);
    		$this->createModel($_POST);
    		$this->createViews($_POST);
    		die('end');
    	

    }

    public function getTBname(){
    	


    }


    private function createController($data){
    	
    	
    	
    	$modelName = $data['modelname'] ;
    	$ControllerName = $modelName  ."Controller";
		$viewFolderName = lcfirst($modelName) ."s";
    	$root = base_path();
    	$templateFolder = $root ."/crudTemplate";
    	$newDir = $templateFolder ."/".$modelName;

    	$modelFile = file_get_contents($templateFolder."/controller.php");
    	$str1 = str_replace('{modelName}', $modelName, $modelFile);
    	$str1 = str_replace('{viewFolderName}', $viewFolderName, $str1);
    	$str1 = str_replace('{ControllerName}', $ControllerName, $str1);
    	    	
       if(!is_dir($newDir)){
			mkdir($newDir);
		}

		
		
		$ext = ".php";
		$str1  = "<?php \n". $str1;
		$this->createFile($newDir , $ControllerName , $ext , $str1);

		echo "Controller Successfully Created at ".$templateFolder ."/". $ControllerName ."<BR>";




    }

    

    private function createModel($data){
    	
    	$modelName = $data['modelname'];
		$table_name = $data['tbname'];
    	$root = base_path();
    	$templateFolder = $root ."/crudTemplate";
    	$newDir = $templateFolder ."/".$modelName;

    	$modelFile = file_get_contents($templateFolder."/model.php");
    	$str1 = str_replace('{modelName}', $modelName, $modelFile);
    	$str1 = str_replace('{tableName}', $table_name, $str1);
    	
    	    	
        $columns = \DB::select('show columns from ' . $table_name);
		$temp  = array();
		$temp2 = array();
		$conditions  = "";
		foreach ($columns as $value) {
			 $temp[] = $value->Field;
			 if($value->Null == "NO"){
			 	$temp2[] .=  "'".$value->Field . "' => 'required'" ; 	
			 }
			 $conditions .='if(!empty(Input::get("'.$value->Field.'"))){
    			$query->where("'.$value->Field.'","=",Input::get("'.$value->Field.'"));
    			} ' ."\n";
			 
		   //echo "'" . $value->Field . "' => '" . $value->Type . "|" . ( $value->Null == "NO" ? 'required' : '' ) ."', <br/>" ;
		}

		$fieldsName = "'".implode("','", $temp) ."'";
		$rules = implode(",", $temp2);
		$str1 = str_replace('{fieldsNameOnly}', $fieldsName, $str1);
		$str1 = str_replace('{rules}', $rules, $str1);
		$str1 = str_replace('{conditions}', $conditions, $str1);
		if(!is_dir($newDir)){
			mkdir($newDir);
		}

		
		
		$ext = ".php";
		$str1  = "<?php \n". $str1;
		$this->createFile($newDir , $modelName , $ext , $str1);

		echo "Model Successfully Created at ".$templateFolder ."/". $modelName ."<BR>";



    }

    private function createViews($data){
    	
    	$table_name = $data['tbname'];
    	$modelName = $data['modelname'] ;
    	$viewFolderName = lcfirst($modelName) ."s";
    	$root = base_path();
    	$templateFolder = $root ."/crudTemplate";
    	$newDir = $templateFolder ."/".$modelName;
    	$newViewDir = $newDir ."/". $viewFolderName; 

    	$searchFile = file_get_contents($templateFolder."/templateViews/_search.blade.php");
    	$createFile = file_get_contents($templateFolder."/templateViews/create.blade.php");
    	$editFile = file_get_contents($templateFolder."/templateViews/edit.blade.php");
    	$indexFile = file_get_contents($templateFolder."/templateViews/index.blade.php");
    	$showFile = file_get_contents($templateFolder."/templateViews/show.blade.php");

    	$searchFile = str_replace('{modelName}', $viewFolderName, $searchFile);
    	$createFile = str_replace('{modelName}', $viewFolderName, $createFile);
    	$editFile = str_replace('{modelName}', $viewFolderName, $editFile);
    	$indexFile = str_replace('{modelName}', $viewFolderName, $indexFile);
    	$showFile = str_replace('{modelName}', $viewFolderName, $showFile);

    	
    	$form = '';
    	$index = "";
    	$show  = "";
    	$columns = \DB::select('show columns from ' . $table_name);
    	foreach ($columns as $value) {
			 $form .= '<div class="form-group">' ."\n";
			 $form .= '{!! Form::label("'.$value->Field.'", "'.ucfirst($value->Field).':", ["class" => "control-label"]) !!}'."\n".'{!! Form::text("'.$value->Field.'", null, ["class" => "form-control"]) !!}';
    		$form .= '</div>' ."\n";

    		$index .= '<p>
       						<a href="{{ route(\''.$viewFolderName.'.edit\', $model->id) }}" class="btn btn-primary">{{$model->'.$value->Field.'}}</a>
    				 </p>';

    		$show .= '<p> {{$model->'.$value->Field.'}} </p>';		  				
			 
		}
		$index .="<hr>";

		$createForm = $form;
		$createForm .= "<div class='form-group'>{!! Form::submit('Create New ".$modelName."', ['class' => 'btn btn-primary']) !!}</div>"; 
		$createForm = str_replace('{searchForm}', $createForm, $createFile);

		$updateForm = $form;
		$updateForm .= "<div class='form-group'>{!! Form::submit('Update ".$modelName."', ['class' => 'btn btn-primary']) !!}</div>";
		$updateForm = str_replace('{searchForm}', $updateForm, $editFile);

		$searchForm = $form;
		$searchForm .= "<div class='form-group'>{!! Form::submit('Search', ['class' => 'btn btn-primary','name'=>'submit']) !!}</div>";
		$searchForm = str_replace('{searchForm}', $searchForm, $searchFile);

		
		$index = str_replace('{index}', $index, $indexFile);
		$show = str_replace('{show}', $show, $showFile);


    	    	
       if(!is_dir($newDir)){
			mkdir($newDir);
		}

		if(!is_dir($newViewDir)){
			mkdir($newViewDir);
		}

		$files = array();
		$files["_search"] = $searchForm;
		$files["create"] = $createForm;
		$files["edit"] = $updateForm;
		$files["index"] = $index;
		$files["show"] = $show;
		
		foreach($files as $filename => $content){
			$ext = ".blade.php";
		
			$this->createFile($newViewDir , $filename , $ext , $content);

			echo "Controller Successfully Created at ".$templateFolder ."/views/". $filename.$ext ."<BR>";
		}
    





		

    }

    private function createFile($dir , $fileName ,  $ext , $content){
    	$myfile = fopen($dir."/".$fileName. $ext, "w") or die("Unable to open file!");

		$txt = $content;
		fwrite($myfile, $txt);
		fclose($myfile);
    }
}
