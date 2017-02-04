@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'New Tenant Record',
				'indexes' => 'Tenants, Add'
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
							<h3 class="box-title">Create a new category name.</h3>
						</div>
						<form role="form" action="{{ url('tenant/add') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.textv3', ['data' => array('Code', 'code', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Compant Name', 'company_name', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Business Type', 'business_type', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Department Number', 'number_department', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Equipment Number', 'number_equipment', null, null, $errors )])
								@include('macro.textv3', ['data' => array('License Number', 'license_number', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Permit Number', 'permit_number', null, null, $errors )])
								@include('macro.textv3', ['data' => array('ISO Number', 'ISO_Number', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Phone Number 1', 'phone_number1', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Phone Number 2', 'phone_number2', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Email', 'email', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Website', 'website', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Country', 'country', null, null, $errors )])

								@include('macro.date', ['data' => array('Date Registered', 'date_registered', null, $errors )])

								@include('macro.textv3', ['data' => array('Hospital Code', 'hospital_code', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Fax number', 'fax_number', null, null, $errors)])
								@include('macro.textv3', ['data' => array('Mobile Number 1', 'mobile_number1', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Mobile Number 2', 'mobile_number2', null, null, $errors )])

							</div>
							<div class="box-footer">
								<button class="btn btn-success" type="submit">Submit</button>
								<a href=" {{ url('tenants') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
