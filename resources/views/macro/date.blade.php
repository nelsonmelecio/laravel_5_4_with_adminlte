<!-- call include('macro.date', 0_label, 1_field, 2_value, 4_errors ) -->

	<div class="form-group">
		<label>{{ $data[0] }}</label>
		<div class="input-group date">
			<div class="input-group-addon" style="color: #000 !important;" >
				<i class="fa fa-calendar"></i>
			</div>
			<input class="form-control pull-right" id="datepicker" name="{{ $data[1] }}" type="text" readonly='true' style="color: #000 !important;" value="{{ is_null($data[2]) ? date('m/d/Y') :  date('m/d/Y', strtotime($data[2])) }}">
		</div>
	</div>