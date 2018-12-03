<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>
<body>
	<div align="center" class="container">
		<h1 style="color: #333399;">Abdullah Aid Tanzania</h1>
		<p style="color: #0066ff; font-family: times new roman; font-size:20px; margin-bottom: 0">
			www.abdullahaid.org, Email: tanzania@abdullahaid.org
		</p>
		<p style="font-family: times new roman; font-size:20px; margin-bottom: 0">
			Plot 1D KIWALANI STREET, ILALA P.O BOX 3223 DAR ES SALEEM
		</p>
		<p style="font-family: times new roman; font-size:20px; word-spacing:40px;">
			+255788096617 +255788533688 +255784151773 +25577848381
		</p>

		<div class="row">
			<div style="text-align: left;" class="col-md-6">
				TIN NO: <b>133-563-490</b>
			</div>
			<div style="text-align: right;" class="col-md-6">
				<b>{{$model->created_at}}</b>
			</div>
		</div>


		<div class="row">
			<div style="text-align: left; font-size: 28px; margin-top: 5%; " class="col-md-6">
				 <b>M/s:ABDULLAH AID UK</b>
			</div>
			<div style="text-align: right; font-size: 28px; margin-top: 5%; " class="col-md-6">
				<b>INVOICE NO: {{$model->id}}</b>
			</div>
		</div>

	  <table style="width:100%">
 		 <tr>
  			<th style="text-align: center;">S.NO</th>
   		    <th style="text-align: center;">DETAILS</th>
    		<th style="text-align: center; width: 220px">Amount</th>
 		</tr>

  			<td style="text-align: center;"><b>01</b></td>
   		    <td><b>{{$model->type}}</b></td>
   		    <td style="text-align: center;"><b>{{$model->amount}}</b></td>
  		
  		<tr style="height: 30px">
  			<td></td>
  			<td style="text-align: center; font-size: 22px;"><b>TOTAL</b></td>
  			<td style="text-align: center; font-size: 22px;"><b>{{$model->amount}}</b></td>	
  		</tr>
	  </table>
	  <br><br>
	  <div class="row">
	  	<div align="left" style="margin-top: 45px; text-align: center;" class="col-md-12">
	  		<p style="border-top: 1px solid; width: 180px; ">
	  			FAISAL ABDULLAH<br> HEAD OF OPERTIONS
	  		 </p>
	  	</div>
	  
	  </div>
	  <br><br><br>

	  <div>
	  	<p style="color: #333399; font-size: 18px; margin-bottom: 0">
	  		A KIND GESTURE CAN REACH A WOUND THAT ONLY COMPASSION CAN HEAL
	  	</p>
	  </div>

	  <div>
	  		<h1 style="color: green; font-size:; font-family: Pristina; margin-top: 0">
	  			Serving Humanity
	  		</h1>
	  </div>

    </div>
</body>
</html>
<!--
<p> {{$model->id}} </p><p> {{$model->donar_id}} </p><p> {{$model->amount}} </p><p> {{$model->currency}} </p><p> {{$model->type}} </p><p> {{$model->comment}} </p><p> {{$model->location}} </p><p> {{$model->date_added}} </p><p> {{$model->status}} </p><p> {{$model->created_at}} </p><p> {{$model->updated_at}} </p><p> {{$model->created_by}} </p>
-->