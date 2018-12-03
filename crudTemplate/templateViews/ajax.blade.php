@foreach($model as $task)
    <h3>{{ $task->title }}</h3>
    <p>{{ $task->description}}</p>
    <p>
        <a href="{{ route('articles.show', $task->id) }}" class="btn btn-info">View Task</a>
        <a href="{{ route('articles.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
    </p>
    <hr>
@endforeach

{{ $model->appends($_GET)->links() }}