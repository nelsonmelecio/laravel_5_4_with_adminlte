<!-- call include('macro.time', 0_label, 1_field, 2_value, 4_errors ) -->

<div class="bootstrap-timepicker">
	<div class="form-group">
		<label>{{ $data[0] }}</label>

		<div class="input-group"  >
			<input type="text" name="{{ $data[1] }}" class="form-control timepicker" style="color: #000 !important;">

			<div class="input-group-addon">
			<i class="fa fa-clock-o"></i>
			</div>
		</div>

	</div>
</div>