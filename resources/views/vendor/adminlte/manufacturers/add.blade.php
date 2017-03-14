@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'New Manufacturer Record',
				'indexes' => 'Manufacturers, Add'
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
							<h3 class="box-title">Create a new category name.</h3>
						</div>
						<form role="form" action="{{ url('manufacturer/add') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.textv3', ['data' => array('Code', 'code', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Company Name', 'company_name', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Contact Person', 'contact_person', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Company Address', 'company_address', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Province', 'province', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Zip Code', 'zipcode', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Phone Number 1', 'phone_number1', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Phone Number 2', 'phone_number2', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Fax Number', 'fax_number', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Mobile Number 1', 'mobile_number1', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Mobile Number 2', 'mobile_number2', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Website', 'web_addess', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Country', 'country', null, null, $errors )])
								<!-- include('macro.select_tenant', ['data' => array('Tenant Name', 'tenant_id', $tenants, null, $errors )]) -->
								<input type="hidden" name="tenant_id" value="1">
							</div>
							<div class="box-footer">
								<button class="btn btn-success" type="submit">Submit</button>
								<a href=" {{ url('manufacturers') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
