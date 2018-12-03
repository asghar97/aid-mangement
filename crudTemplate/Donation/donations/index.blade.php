 @include('donations._search')
<div class='ajax_content'>
@foreach($models as $model)
<p>
       						<a href="{{ route('donations.edit', $model->id) }}" class="btn btn-primary">{{$model->id}}</a>
    				 </p><p>
       						<a href="{{ route('donations.edit', $model->id) }}" class="btn btn-primary">{{$model->donar_id}}</a>
    				 </p><p>
       						<a href="{{ route('donations.edit', $model->id) }}" class="btn btn-primary">{{$model->amount}}</a>
    				 </p><p>
       						<a href="{{ route('donations.edit', $model->id) }}" class="btn btn-primary">{{$model->currency}}</a>
    				 </p><p>
       						<a href="{{ route('donations.edit', $model->id) }}" class="btn btn-primary">{{$model->type}}</a>
    				 </p><p>
       						<a href="{{ route('donations.edit', $model->id) }}" class="btn btn-primary">{{$model->comment}}</a>
    				 </p><p>
       						<a href="{{ route('donations.edit', $model->id) }}" class="btn btn-primary">{{$model->created_at}}</a>
    				 </p><p>
       						<a href="{{ route('donations.edit', $model->id) }}" class="btn btn-primary">{{$model->updated_at}}</a>
    				 </p><p>
       						<a href="{{ route('donations.edit', $model->id) }}" class="btn btn-primary">{{$model->status}}</a>
    				 </p><p>
       						<a href="{{ route('donations.edit', $model->id) }}" class="btn btn-primary">{{$model->created_by}}</a>
    				 </p><hr>
    <hr>
@endforeach
{{ $models->appends($_GET)->links() }}
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>



 @include('ajax_pagination')
