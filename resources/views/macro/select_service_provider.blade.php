<!-- call include('macro.select_service_provider') -->

<div class="form-group">
	<label>Service Provider</label>
	<select class="form-control" name="service_provider" style="color: #000 !important;" >
		<option value="Hospital-BIOMED" {{ $data[0] == "Hospital-BIOMED" ?  'selected="selected"' : '' }}>Hospital-BIOMED</option>
		<option value="SGE-BIOMED (PM)" {{ $data[0] == "SGE-BIOMED (PM)" ?  'selected="selected"' : '' }}>SGE-BIOMED (PM)</option>
		<option value="SGE-BIOMED (PM/CM)" {{ $data[0] == "SGE-BIOMED (PM/CM)" ?  'selected="selected"' : '' }}>SGE-BIOMED (PM/CM)</option>
		<option value="Outsourced" {{ $data[0] == "Outsourced" ?  'selected="selected"' : '' }}>Outsourced</option>
	</select>
</div>