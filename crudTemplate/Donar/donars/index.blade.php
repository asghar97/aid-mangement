 @include('donars._search')
<div class='ajax_content'>
@foreach($models as $model)
<p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->id}}</a>
    				 </p><p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->fname}}</a>
    				 </p><p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->lname}}</a>
    				 </p><p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->address}}</a>
    				 </p><p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->city}}</a>
    				 </p><p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->country}}</a>
    				 </p><p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->phone}}</a>
    				 </p><p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->email}}</a>
    				 </p><p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->company}}</a>
    				 </p><p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->image}}</a>
    				 </p><p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->created_at}}</a>
    				 </p><p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->updated_at}}</a>
    				 </p><p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->status}}</a>
    				 </p><p>
       						<a href="{{ route('donars.edit', $model->id) }}" class="btn btn-primary">{{$model->created_by}}</a>
    				 </p><hr>
    <hr>
@endforeach
{{ $models->appends($_GET)->links() }}
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>



 @include('ajax_pagination')
