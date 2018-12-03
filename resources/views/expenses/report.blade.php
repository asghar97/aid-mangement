<?php use App\Currency; ?>
@extends('home')
@section('content')

<style type="text/css">
  .btn {
    padding: 6px 12px !important;
    height: 35px !important;
  }

  .pagination {
    padding-left: 0;
    margin: 0 !important;
    border-radius: 4px;
</style>

<div class="content">
  <div class="row">
    <form method="get" class="form"="form">
      <div class="form-group col-md-6">
        <label>Form</label>
        <input name="from_date" class="form-control datepicker1" required="" value="<?php echo date('Y-m-d') ?>">
      </div>

      <div class="form-group col-md-6">
        <label>To</label>
        <input required="" name="to_date" class="form-control datepicker1" value="<?php echo date('Y-m-d') ?>">
      </div>
      <button class="btn btn-success printbtn" style="float:right;" id='print_out_this_page'>Print this page</button>
      <button type="submit" style="margin-left: 1%" name="btn" class="btn btn-primary">Submit</button>
      </fieldset>
    </form>
  </div>





  <?php if(!empty($_GET)){ ?>

  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Manage Expenses Report</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_content">
                <div class="table-responsive">
                  <table id="datatable" class="table table-striped table-bordered table-hover">
                    <thead>

                      <tr>

                        <th scope="col" style="width: 10% !important">
                          Serial No
                        </th>

                        <th scope="col" style="width: 20% !important">
                          Details
                        </th>
                        <th scope="col" style="width: 20% !important">
                          Currency Name
                        </th>
                        <th scope="col" style="width: 20% !important">
                          Amount
                        </th>
                        <th scope="col" style="width: 20% !important">
                          Conversion Rate
                        </th>
                        <th scope="col" style="width: 20% !important">
                          Total
                        </th>
                    </thead>



                    <tbody>
                      <?php 
                     if(isset($_GET['btn'])){
                     
                     $from_date = $_GET['from_date'];
                     $to_date = $_GET['to_date'];
               
                     $dates = DB::table('expense')->where('created_at','>=',$from_date)->where('created_at','<=',$to_date)->get();
                       $totall = 0;
                     ?>
                      
                      @foreach ($dates as $date)

                      <?php
                       $cur_name = DB::table('domain_currency')->where('id','=',$date->currency)->first();
                       $t = $date->amount*$cur_name->currency_rate;
                       $totall += $t;
                      ?>

                      <tr>
                        <td>
                          <strong style="color: #545454;"></strong><b>
                            {{$date->id}}</b>
                        </td>
                        <td>
                          <strong style="color: #545454"></strong>
                          {{$date->type}}
                        </td>

                        <td>
                          <strong style="color: #545454"></strong>
                          
                          {{$cur_name->currency_name}}
                         </td>
                       
                        <td style="color: black;">

                         {{$cur_name->currency_symbols}} {{$date->amount}}
                        </td>

                        </td><strong>
                        <td style="color: black">
                        1 {{$cur_name->currency_symbols}} = {{$cur_name->currency_rate}}
                        </strong></td>
                        <td style="color: black;">
                        Rs {{$date->amount*$cur_name->currency_rate}}
                        </td>
                      </tr>

                          @endforeach
                    

                        <tr>
                        <td colspan="5" style="text-align: center;">Grand Total</td>
                        <td style="color: black">Rs {{$totall}}</td>
                        </tr> 
                        <?php  }  ?>
                    </tbody>
                    

                  </table>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>


    </div>
  </div>


</div>
</div>


<?php }?>

<script>
  $(document).on('focusin', '.datepicker1', function () {
    $(this).datepicker({
      format: 'yyyy-mm-dd',
      changeMonth: true,
      changeYear: true,
      yearRange: '1990:<?php echo date('
      Y '); ?>'
    });
  });
</script>

<script>
  $("#print_out_this_page").click(function () {
    $("#printableArea").css('font-size', '10px');
    $(".print_footer").css('display', 'block');
    $(".print_header").css('display', 'block');
    $(".hideeee").css('display', 'none');

    <?php 
  $data['hide_element_classes'] = "printbtn,nav_menu,form,leftpanel,mainpanel,dropdown,collapse-link,close-link";
  $data['printable_area_id'] = "printableArea";
   //view('\danish\print_script',['data' =>$data]); 
  ?>
    @include('danish.print_script')
    // $this->renderPartial('application.components.danish.print_script',array(
    // 'data'=>$data,

    // ));

    setTimeout(function () {
      $(".mainCategory.active").click();
    }, 1100);



    location.reload();


  });
</script>

@endsection