<div class="form-group row">
	<div class="col-md-12 {!! $errors->has('title') ? 'has-error' : '' !!}">
		<label for="title">Title</label>
		{!! Form::text('title', null, ['class' => 'form-control input-sm', 'id' => 'title']) !!}
		{!! errors_for('title', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-12 {!! $errors->has('body') ? 'has-error' : '' !!}">
		<label for="body">Body</label>
		{!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body']) !!}
		{!! errors_for('body', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-12 {!! $errors->has('published_at') ? 'has-error' : '' !!}">
		<label for="published_at">Publish On</label>
		{!! Form::input('date' ,'published_at', date('Y-m-d'), ['class' => 'form-control', 'id' => 'published_at']) !!}
		{!! errors_for('published_at', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-12 {!! $errors->has('tag_list') ? 'has-error' : '' !!}">
		<label for="tag_list">Tags</label>
		{!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'id' => 'tag_list', 'multiple']) !!}
		{!! errors_for('tag_list', $errors) !!}
	</div>
</div>

<br /><br />

<div class="form-group row">
	<div class="col-md-12">
		<button class="btn btn-sm btn-info">Submit</button>
	</div>
</div>