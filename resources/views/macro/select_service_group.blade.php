<!-- call include('macro.select_service_group') -->

<div class="form-group">
	<label>Service Group</label>
	<select class="form-control input-sm select2" name="service_group" id="service_group" style="color: #000 !important; width: 100%;" >
		<option value="Hospital" {{ $data[0] == "Hospital" ?  'selected="selected"' : '' }}>Hospital</option>
		<option value="Loan" {{ $data[0] == "Loan" ?  'selected="selected"' : '' }}>Loan</option>
		<option value="Donated" {{ $data[0] == "Donated" ?  'selected="selected"' : '' }}>Donated</option>
	</select>
</div>