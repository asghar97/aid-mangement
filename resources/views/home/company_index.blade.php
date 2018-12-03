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

            $company = DB::table('company')->where('user_id', $id)->first();
            $total_batch = array();
            $total_sms = array();

            if(!empty($company)){
            
                $total_batch = DB::table('prepost')->where('company_id','=',$company->id)->get();
            
            }
            
            
            if(!empty($company)){
            
                $total_sms = DB::table('sms_management')->where('prefix','=',$company->org_code)->get();
            
            }


          // For Random Numbers Count
          $condition = 0;
          $number = 0;

          if(!empty($company)){
        
            $prepost = DB::table('prepost')->where('company_id','=',$company->id)->get();
            
            if(!empty($prepost)){
            
                $arr = array();
                foreach ($prepost as $value){
                  $arr[] = $value->id;
                }
                
                $condition = implode("," ,$arr);
            }
          }
          
          $n = DB::table('random_numbers')->whereIn('prepost_id', [$condition])->count();

            if($n > 0){
            
                    $n = (0+str_replace(",", "", $n));
                    
                    
                    if ($n > 1000000000000)
                    { 
                        $number = round(($n/1000000000000), 2).' T';
                    }
                    else if ($n > 1000000000)
                    { 
                        $number = round(($n/1000000000), 2).' B';
                    }
                    else if ($n > 1000000)
                    { 
                        $number = round(($n/1000000), 2).' M';
                    }
                    else if ($n > 1000)
                    { 
                        $number = round(($n/1000), 2).' T';
                    }
                    
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

            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> Total Pins</span>
              <div class="count"><?php echo $number; ?></div>
            </div>
       
</div>      
</div>
</div>