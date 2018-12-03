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

<div class="container">
<div class="row tile_count">
<div class="col-md-12 col-sm-12 col-xs-12">
      
            <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
              <a href="{{ url('categorys') }}" target="_blank"><span class="count_top"> Total Categories</span></a>
              <div class="count"><?php echo 0; ?></div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
              <a href="{{ url('subCategorys') }}" target="_blank"><span class="count_top"> Total Sub Categories</span></a>
              <div class="count"><?php echo 0; ?></div>
            </div>

            <div class="col-md-3 col-sm-3col-xs-6 tile_stats_count">
              <a href="{{ url('products') }}" target="_blank"><span class="count_top"> Total Products</span></a>
              <div class="count"><?php echo 0; ?></div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
              <a href="{{ url('companys') }}" target="_blank"><span class="count_top"> Total Companies</span></a>
              <div class="count"><?php echo 0; ?></div>
            </div>
 
</div>      
</div>

</div>