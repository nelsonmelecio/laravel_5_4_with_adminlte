@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Delete Manufacturer Record',
				'indexes' => 'Manufacturers, Delete'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-left">
				<a href=" {{ url('manufacturers') }}" class="btn btn-info btn-md"><i class="fa fa-arrow-circle-left"></i> Back </a>
			</div>
			<br>
			<div class="box" style="border-top: 0;">
				<div class="box-body">

					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Are you sure you want to delete this category name?</h3>
						</div>
						<form role="form" action="{{ url('manufacturer/delete') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.text_disabled', ['data' => array('Code', 'code', $manufacturer->code, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Company Name', 'company_name', $manufacturer->company_name, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Contact Person', 'contact_person', $manufacturer->contact_person, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Company Address', 'company_address', $manufacturer->company_address, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Province', 'province', $manufacturer->province, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Zip Code', 'zipcode', $manufacturer->zipcode, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Phone Number 1', 'phone_number1', $manufacturer->phone_number1, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Phone Number 2', 'phone_number2', $manufacturer->phone_number2, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Fax Number', 'fax_number', $manufacturer->fax_number, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Mobile Number 1', 'mobile_number1', $manufacturer->mobile_number1, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Mobile Number 2', 'mobile_number2', $manufacturer->mobile_number2, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Website', 'web_addess', $manufacturer->web_addess, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Country', 'country', $manufacturer->country, null, $errors )])

								@include('macro.select_single_tenant_disabled', ['data' => array('Tenant Name', 'tenant_id', $manufacturer->tenant, null, $errors )])
								<input type="hidden" name="id" value="{{ $manufacturer->id }}">
							</div>
							<div class="box-footer">
								<button class="btn btn-danger" type="submit">Delete</button>
								<a href=" {{ url('manufacturers') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
