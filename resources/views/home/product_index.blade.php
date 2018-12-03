            <style>
                .tile_count .tile_stats_count .count{
                    font-size: 28px !important;
                    color: blue;
                }
                .tile_count .tile_stats_count span{
                  font-size: 15px !important;
                  font-weight: 700 !important;
                }
            </style>

            <?php

            $id = Auth::user()->id;
            $cid = Auth::user()->admin_id;
            $product = DB::table('product')->where('user_id', $id)->first();

            if(!empty($product)){
            
                $total_batch = DB::table('prepost')->where('company_id','=',$cid)->where('product_id','=',$id)->get();
            
            }
            
            
            if(!empty($product)){
            
                $total_sms = DB::table('sms_management')->where('company_id','=',$cid)->where('product_id','=',$id)->get();
            
            }
            
        ?>

<div class="container">
<div class="row tile_count">
<div class="col-md-12 col-sm-12 col-xs-12">
      
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> Total Batch</span>
              <div class="count"><?php echo count($total_batch); ?></div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> Total SMS</span>
              <div class="count"><?php echo count($total_sms); ?></div>
            </div>
       
</div>      
</div>
</div>