<!-- call include('macro.select_required_pm', 0_value) -->

<div class="form-group">
	<label>Required PM</label>
	<select class="form-control input-sm select2" name="required_pm" style="color: #000 !important; width: 100%;" >
		<option value="Yes" {{ $data[0] == "Yes" ?  'selected="selected"' : '' }}>Yes</option>
		<option value="No" {{ $data[0] == "No" ?  'selected="selected"' : '' }}>No</option>
	</select>
</div>