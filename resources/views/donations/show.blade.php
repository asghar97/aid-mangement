<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
    .align-right{
      text-align: right;
    }
  </style>

	<title></title>
</head>
<body>

<body>
	<div class="container">
		<div class="row" style="border-bottom: 1px solid gray">
			<div class="col-md-6">
        <img class="responsive" src="http://localhost/Aidmangment/public/images/logo/AbdullahAid.png" width="250" style="margin: 15%">
      </div>
      <div class="col-md-6 align-right">
        <h1 style="margin-bottom: -9px">RECEIPT</h1>
        <p style="color: gray;font-size: 12px">Charity Reg No. 1165916</p>
        <h6 style="margin-bottom: 0">Abdullah Aid</h6>
        <p style="margin-bottom: 0">81 Upton Lane</p>
        <p style="margin-bottom: 0">Forest Gate</p>
        <p style="margin-bottom: 0">London, E7 9PB</p>
        <p>United Kingdom</p>
        <p>0208 279 0166<br>www.abdullahaid.org.uk</p>
      </div>
		</div>
    <div class="row">
      <div class="col-md-6">
        <h5 style="margin:5%;margin-bottom: 0;color: gray">BILL TO</h5>
        <h5 style="margin:5%;margin-top: 0"><b>{{$model->donar->fname." ".$model->donar->lname}}</b></h5>
      </div>
      <div class="col-md-6" style="margin-top:2%">
        <div class="row">
          <div class="col-md-6" style="text-align:left;">
            <h6><b>Invoice Number:</b></h6>
            <h6><b>Invoice Date:</b></h6>
        <!--<h6><b>Payment Due:</b></h6>
        <h6><b>Amount Due (GBP):</b></h6>-->
          </div>
          <div class="col-md-6">
            <h6>{{$model->id}}</h6>
        <h6>{{$model->created_at}}</h6>
        <!--<h6>October 18, 2018</h6>
        <h6><b>£0.00</b></h6>-->
          </div>
        </div>
      </div>
      
     
    </div>
    <div class="row" style="border-bottom: 1px solid gray">
      <?php //$donor_name = DB::table('donor')->where('id','donar_id');
      //print_r($donor_name);die();
       ?>
         <table class="table table-striped">
           <thead>
             <tr style="background-color: lightgreen">
               <th>Donar Name</th>
               <th style="text-align: right;">Donation Type</th>
               <th style="text-align: right;">Comments</th>
               <th style="text-align: right;">Amount</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td><b>{{$model->donar->fname." ".$model->donar->lname}}</b><br></td>
               <td style="text-align: right;">{{$model->type}}</td>
               <td style="text-align: right;">{{$model->comment}}</td>
               <td style="text-align: right;">{{$model->currencies->currency_symbols.' '.$model->amount}}</td>
             </tr>
           </tbody>
         </table>
      </div>
      <div class="row" style="float: right;">
        <div class="col-md-12"  style="border-bottom: 1px solid gray">
          <div class="row">
            <div class="col-md-8">
              <h6 style="text-align: right"><b>Total:</b></h6>
              <h6 style="text-align: left;">Payment on {{$m = $model->created_at}} using a bank payment:</h6>
            </div>
            <div class="col-md-4">
              <h6 style="text-align: right">{{$model->currencies->currency_symbols.' '.$model->amount}}</h6>
              <h6 style="text-align: right">{{$model->currencies->currency_symbols.' '.$model->amount}}</h6>
            </div>
          </div>
          
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-8">
             <!-- <h6 style="text-align: right"><b>Amount Due (GBP):</b></h6>-->
              
            </div>
            <!--<div class="col-md-4">
              <h6 style="text-align: right">£0.00</h6>
              -->
            </div>
          </div>
        </div>
      </div>
	</div>

</body>


</body>
</html>
<!--
<p> {{$model->id}} </p><p> {{$model->donar_id}} </p><p> {{$model->amount}} </p><p> {{$model->currency}} </p><p> {{$model->type}} </p><p> {{$model->comment}} </p><p> {{$model->created_at}} </p><p> {{$model->updated_at}} </p><p> {{$model->status}} </p><p> {{$model->created_by}} </p>
-->
