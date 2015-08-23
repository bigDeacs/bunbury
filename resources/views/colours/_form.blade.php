<div class="form-group row">
	<div class="col-md-12">
		<button class="btn btn-lg btn-success" style="float: right;"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Submit</button>
	</div>
</div>

<div class="form-group row">
	<div class="col-md-6 {{ $errors->has('name') ? 'has-error' : '' }}">
		<label for="name">Name</label>
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
		{!! errors_for('name', $errors) !!}
	</div>
	<div class="col-md-6 {{ $errors->has('hex') ? 'has-error' : '' }}">
		<label for="hex">Colour</label>
		{!! Form::text('hex', null, ['class' => 'pick-a-color form-control']) !!}
		{!! errors_for('hex', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-4">
		<label for="label_id">Label</label>
		{!! Form::select('label_id', $labels, Input::old('label_id'), ['class' => 'form-control', 'id' => 'label_id']) !!}
		{!! errors_for('label_id', $errors) !!}
	</div>
	<div class="col-md-4 {{ $errors->has('code') ? 'has-error' : '' }}">
		<label for="code">Code</label>
		{!! Form::text('code', null, ['class' => 'form-control']) !!}
		{!! errors_for('code', $errors) !!}
	</div>
	<div class="col-md-4">
		<label for="file">File<small> - pdf max size 2mb</small></label>
		<input type="file" class="form-control input-sm" name="file">
	</div>
</div>

<div class="form-group row">
	<div class="col-md-12 {{ $errors->has('description') ? 'has-error' : '' }}">
		<label for="description">Description</label>
		{!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
		{!! errors_for('description', $errors) !!}
	</div>
</div>