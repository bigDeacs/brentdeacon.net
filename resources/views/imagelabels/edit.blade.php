@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Edit {!! $label->name !!}<a href="{{ url('/home/imagelabels') }}" class="btn btn-primary btn-lg" style="float: right;"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Back</a></h1></div>

				<div class="panel-body">
					{!! Form::model($label, ['files'=> true, 'route' => ['home.imagelabels.show', $label->id], 'method' => 'PATCH']) !!}
					    {!! Form::hidden('id', null) !!}
					    {!! Form::hidden('type', 'Image') !!}
					    @include('imagelabels._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
