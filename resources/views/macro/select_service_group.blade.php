<!-- call include('macro.select_service_group') -->

<div class="form-group">
	<label>Service Group</label>
	<select class="form-control" name="service_group" style="color: #000 !important;" >
		<option value="Hospital" {{ $data[0] == "Hospital" ?  'selected="selected"' : '' }}>Hospital</option>
		<option value="Loan" {{ $data[0] == "Loan" ?  'selected="selected"' : '' }}>Loan</option>
		<option value="Donated" {{ $data[0] == "Donated" ?  'selected="selected"' : '' }}>Donated</option>
	</select>
</div>