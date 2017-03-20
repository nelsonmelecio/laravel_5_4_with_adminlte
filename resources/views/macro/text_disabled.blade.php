<!-- call include('macro.text_disabled', 0_label, 1_field, 2_value, 3_placeholder ) -->

<div class="form-group">
	<label for="{{ $data[1] }}">{{ $data[0] }}</label>
	<input class="form-control input-sm" name="{{ $data[1] }}" placeholder="{{ $data[0] }}" type="text" value="{{ $data[2] }}"  style="color: #000 !important;" disabled>
</div>