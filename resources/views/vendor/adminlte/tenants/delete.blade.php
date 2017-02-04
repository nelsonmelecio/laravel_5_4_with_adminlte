@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Delete Tenant Record',
				'indexes' => 'Tenants, Delete'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-left">
				<a href=" {{ url('tenants') }}" class="btn btn-info btn-md"><i class="fa fa-arrow-circle-left"></i> Back </a>
			</div>
			<br>
			<div class="box" style="border-top: 0;">
				<div class="box-body">

					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Are you sure you want to delete this category name?</h3>
						</div>
						<form role="form" action="{{ url('tenant/delete') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.text_disabled', ['data' => array('Code', 'code', $code, null )])
								@include('macro.text_disabled', ['data' => array('Compant Name', 'company_name', $company_name, null )])
								@include('macro.text_disabled', ['data' => array('Business Type', 'business_type', $business_type, null )])
								@include('macro.text_disabled', ['data' => array('Department Number', 'number_department', $number_department, null )])
								@include('macro.text_disabled', ['data' => array('Equipment Number', 'number_equipment', $number_equipment, null )])
								@include('macro.text_disabled', ['data' => array('License Number', 'license_number', $license_number, null )])
								@include('macro.text_disabled', ['data' => array('Permit Number', 'permit_number', $permit_number, null )])
								@include('macro.text_disabled', ['data' => array('ISO Number', 'ISO_Number', $ISO_Number, null )])
								@include('macro.text_disabled', ['data' => array('Phone Number 1', 'phone_number1', $phone_number1, null )])
								@include('macro.text_disabled', ['data' => array('Phone Number 2', 'phone_number2', $phone_number2, null )])
								@include('macro.text_disabled', ['data' => array('Email', 'email', $email, null )])
								@include('macro.text_disabled', ['data' => array('Website', 'website', $website, null )])
								@include('macro.text_disabled', ['data' => array('Country', 'country', $country, null )])
								@include('macro.text_disabled', ['data' => array('Date Registered', 'date_registered', $date_registered, null )])
								@include('macro.text_disabled', ['data' => array('Hospital Code', 'hospital_code', $hospital_code, null )])
								@include('macro.text_disabled', ['data' => array('Fax number', 'fax_number', $fax_number, null )])
								@include('macro.text_disabled', ['data' => array('Mobile Number 1', 'mobile_number1', $mobile_number1, null )])
								@include('macro.text_disabled', ['data' => array('Mobile Number 2', 'mobile_number2', $mobile_number2, null )])
								<input type="hidden" name="id" value="{{ $id }}">
							</div>
							<div class="box-footer">
								<button class="btn btn-danger" type="submit">Delete</button>
								<a href=" {{ url('tenants') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
