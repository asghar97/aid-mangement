 @include('currencys._search')
<div class='ajax_content'>
@foreach($models as $model)
<p>
       						<a href="{{ route('currencys.edit', $model->id) }}" class="btn btn-primary">{{$model->id}}</a>
    				 </p><p>
       						<a href="{{ route('currencys.edit', $model->id) }}" class="btn btn-primary">{{$model->currency_name}}</a>
    				 </p><p>
       						<a href="{{ route('currencys.edit', $model->id) }}" class="btn btn-primary">{{$model->currency_symbols}}</a>
    				 </p><hr>
    <hr>
@endforeach
{{ $models->appends($_GET)->links() }}
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>



 @include('ajax_pagination')
