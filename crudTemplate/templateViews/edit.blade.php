 @include('flash_msgs')

{!! Form::model($model, [
    'method' => 'PATCH',
    'route' => ['{modelName}.update', $model->id]
]) !!}

{searchForm}



{!! Form::close() !!}