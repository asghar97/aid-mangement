<?php
use App\Currency;
use App\Donation;
use App\Donar;
 ?>
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

 <button class="btn btn-success printbtn" style="float:right;" id='print_out_this_page'>Print this page</button>
 <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Ledger</h2>
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
                          Date
                        </th>
                        <th scope="col" style="width: 20% !important">
                          Donar Name
                        </th>
                        <th scope="col" style="width: 20% !important">
                          Donation Type
                        </th>
                         
                        <th scope="col" style="width: 20% !important">
                          Amount
                        </th>
                        <th scope="col" style="width: 20% !important">
                          Total
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                          <?php 
                          
                         // echo $user_id;
                         // echo $type;
                           $models=DB::table('donation')->where('type','=',$type)->get();
                            $t = 0;
                          // echo "<pre>"; print_r($models); die();
                            ?>
                          @foreach($models as $model)
                          <?php 
                              $Donar = Donar::findOrFail($model->donar_id);
                              $Currency = Currency::findOrFail($model->currency);
                              //echo "<pre>"; print_r($Currency); die()
                              $total = $model->amount*$Currency->currency_rate;
                              //echo $total;
                             $t += $total;
                              
                           ?>

                           
                      <tr>
                          <td>
                            <strong style="color: #545454">{{$Donar->fname." ".$Donar->lname}}</strong>
                          </td> 
                          <td>
                            <strong style="color: #545454">{{$model->created_at}}</strong>
                          </td> 
                          <td>
                            <strong style="color: #545454">{{$model->type}}</strong>
                          </td> 
                          <td>
                            <strong style="color: #545454">{{$Currency->currency_symbols}}    {{$model->amount}}</strong>
                          </td> 
                          <td>
                            <strong style="color: #545454">{{$Currency->currency_symbols}}    {{$model->amount}} * {{$Currency->currency_rate}} = {{$model->amount*$Currency->currency_rate}}</strong>
                          </td> 
                            @endforeach
                    </tbody>
                         <td colspan="4" style="text-align: center;">
                            <strong style="color: #545454">Grand Total</strong>
                          </td>
                           <td>
                            <strong style="color: #545454"><?php echo $t ?></strong>
                          

                    

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