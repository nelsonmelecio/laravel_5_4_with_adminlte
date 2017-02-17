<!-- call include('macro.select_availability') -->

<div class="form-group">
	<label>Availability</label>
	<select class="form-control" name="availability" style="color: #000 !important;" >
		<option value="Available" {{ $data[0] == "Available" ?  'selected="selected"' : '' }}>Available</option>
		<option value="Not Available (Defect)" {{ $data[0] == "Not Available (Defect)" ?  'selected="selected"' : '' }}>Not Available (Defect)</option>
		<option value="In-Service" {{ $data[0] == "In-Service" ?  'selected="selected"' : '' }}>In-Service</option>
		<option value="Pending" {{ $data[0] == "Pending" ?  'selected="selected"' : '' }}>Pending</option>
	</select>
</div>