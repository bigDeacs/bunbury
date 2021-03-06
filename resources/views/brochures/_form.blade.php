<div class="form-group row">
	<div class="col-md-12">
		<button class="btn btn-lg btn-success" style="float: right;"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Submit</button>
	</div>
</div>

<div class="form-group row">
	<div class="col-md-4">
		<label for="name">Name</label>
		{!! Form::text('name', null, ['class' => 'form-control input-sm']) !!}
		{!! errors_for('name', $errors) !!}
	</div>
	<div class="col-md-4">
		<label for="label_id">Label</label>
		{!! Form::select('label_id', $labels, Input::old('label_id'), ['class' => 'form-control', 'id' => 'label_id']) !!}
		{!! errors_for('label_id', $errors) !!}
	</div>
	<div class="col-md-4">
		<label for="icon">Icon</label>
		<select class="selectpicker form-control" id="icon" name="icon">
		    <option value="null">None</option>
		    <option data-icon="icon-fire" value="icon-fire" <?php if(isset($brochure)) { if($brochure->icon == 'icon-fire') { echo "selected"; } } ?>>Fire</option>
		    <option data-icon="icon-sun" value="icon-sun" <?php if(isset($brochure)) { if($brochure->icon == 'icon-sun') { echo "selected"; } } ?>>Sun</option>
		    <option data-icon="icon-volume-up" value="icon-volume-up" <?php if(isset($brochure)) { if($brochure->icon == 'icon-volume-up') { echo "selected"; } } ?>>Volume Up</option>
		</select>
		{!! errors_for('icon', $errors) !!}
	</div>
</div>

<div class="form-group row">
	<div class="col-md-6">
		<label for="image">Thumbnail<small> - jpg/png/gif max size 200kb</small></label>
		<input type="file" class="form-control input-sm" name="image">
	</div>
	<div class="col-md-6">
		<label for="file">File<small> - pdf max size 2mb</small></label>
		<input type="file" class="form-control input-sm" name="file">
	</div>
</div>

<div class="form-group row">
	<div class="col-md-12 {!! $errors->has('description') ? 'has-error' : '' !!}">
		<label for="description">Description</label>
		{!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description']) !!}
		{!! errors_for('description', $errors) !!}
	</div>
</div>
