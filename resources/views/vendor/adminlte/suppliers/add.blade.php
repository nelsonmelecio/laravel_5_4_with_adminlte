@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'New Supplier Record',
				'indexes' => 'Suppliers, Add'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-left">
				<a href=" {{ url('suppliers') }}" class="btn btn-info btn-md"><i class="fa fa-arrow-circle-left"></i> Back </a>
			</div>
			<br>
			<div class="box" style="border-top: 0;">
				<div class="box-body">

					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Create a new category name.</h3>
						</div>
						<form role="form" action="{{ url('supplier/add') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.textv3', ['data' => array('Code', 'code', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Company Name', 'name', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Contact Person', 'supplier_person', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Supplier Address', 'supplier_address', null, null, $errors )])
								@include('macro.textv3', ['data' => array('City Address', 'city_address', null, null, $errors )])
								@include('macro.textv3', ['data' => array('State/Province', 'state_province', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Postal Code', 'postal', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Country', 'country', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Phone Number', 'phone_number', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Fax Number', 'fax_number', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Mobile Number', 'mobile_number', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Email', 'email', null, null, $errors )])
								@include('macro.select_tenant', ['data' => array('Tenant Name', 'tenant_id', $tenants, null, $errors )])
							</div>
							<div class="box-footer">
								<button class="btn btn-success" type="submit">Submit</button>
								<a href=" {{ url('suppliers') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
