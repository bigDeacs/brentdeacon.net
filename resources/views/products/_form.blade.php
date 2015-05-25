<div class="form-group row">
	<div class="col-md-6 {!! $errors->has('name') ? 'has-error' : '' !!}">
		<label for="name">Name</label>
		{!! Form::text('name', null, ['class' => 'form-control input-sm', 'id' => 'name']) !!}
		{!! errors_for('name', $errors) !!}
	</div>
	<div class="col-md-6 {!! $errors->has('url') ? 'has-error' : '' !!}">
		<label for="url">Url</label>
		{!! Form::text('url', null, ['class' => 'form-control input-sm', 'id' => 'url']) !!}
		{!! errors_for('url', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-12 {!! $errors->has('description') ? 'has-error' : '' !!}">
		<label for="description">Description</label>
		{!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
		{!! errors_for('description', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-6 {!! $errors->has('file') ? 'has-error' : '' !!}">
		<label for="images">Images<small> - multiple can be uploaded at once</small></label>
		<input type="file" class="form-control input-sm" name="images[]" id="images" multiple>
	</div>
	<div class="col-md-6 {!! $errors->has('link') ? 'has-error' : '' !!}">
		<label for="link">Link</label>
		{!! Form::text('link', null, ['class' => 'form-control input-sm', 'id' => 'link']) !!}
		{!! errors_for('link', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-6 {!! $errors->has('type_id') ? 'has-error' : '' !!}">
		<label for="type_id">Type</label>
		{!! Form::select('type_id', $types, Input::old('type_id'), ['class' => 'form-control', 'id' => 'type_id']) !!}
	</div>
	<div class="col-md-6 {!! $errors->has('category_id') ? 'has-error' : '' !!}">
		<label for="category_id">Category</label>
		{!! Form::select('category_id', $categories, Input::old('category_id'), ['class' => 'form-control', 'id' => 'category_id']) !!}
	</div>
</div>

<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Developer Only
</button>
<div class="collapse" id="collapseExample">
  	<div class="well">
		<div class="form-group row">
			<div class="col-md-12 {!! $errors->has('meta') ? 'has-error' : '' !!}">
				<label for="meta">Meta Tags:</label>
				{!! Form::textarea('meta', null, ['class' => 'form-control', 'id' => 'meta', 'rows' => '4']) !!}
				{!! errors_for('meta', $errors) !!}
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-12 {!! $errors->has('head') ? 'has-error' : '' !!}">
				<label for="head">Head Tags:</label>
				{!! Form::textarea('head', null, ['class' => 'form-control', 'id' => 'head', 'rows' => '4']) !!}
				{!! errors_for('head', $errors) !!}
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-12 {!! $errors->has('scripts') ? 'has-error' : '' !!}">
				<label for="scripts">Script Tags:</label>
				{!! Form::textarea('scripts', null, ['class' => 'form-control', 'id' => 'scripts', 'rows' => '4']) !!}
				{!! errors_for('scripts', $errors) !!}
			</div>
		</div>
  	</div>
</div>
<br /><br />

<div class="form-group row">
	<div class="col-md-12">
		<button class="btn btn-sm btn-info">Submit</button>
	</div>
</div>