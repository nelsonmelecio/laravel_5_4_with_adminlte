@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Edit Supplier Records',
				'indexes' => 'Suppliers, Edit'
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
							<h3 class="box-title">Modify a category name.</h3>
						</div>
						<form role="form" action="{{ url('supplier/update') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.textv3', ['data' => array('Code', 'code', $supplier->code, null, $errors )])
								@include('macro.textv3', ['data' => array('Company Name', 'name', $supplier->name, null, $errors )])
								@include('macro.textv3', ['data' => array('Contact Person', 'supplier_person', $supplier->supplier_person, null, $errors )])
								@include('macro.textv3', ['data' => array('Supplier Address', 'supplier_address', $supplier->supplier_address, null, $errors )])
								@include('macro.textv3', ['data' => array('City Address', 'city_address', $supplier->city_address, null, $errors )])
								@include('macro.textv3', ['data' => array('State/Province', 'state_province', $supplier->state_province, null, $errors )])
								@include('macro.textv3', ['data' => array('Postal', 'postal', $supplier->postal, null, $errors )])
								@include('macro.textv3', ['data' => array('Country', 'country', $supplier->country, null, $errors )])
								@include('macro.textv3', ['data' => array('Phone Number', 'phone_number', $supplier->phone_number, null, $errors )])
								@include('macro.textv3', ['data' => array('Fax Number', 'fax_number', $supplier->fax_number, null, $errors )])
								@include('macro.textv3', ['data' => array('Mobile Number', 'mobile_number', $supplier->mobile_number, null, $errors )])
								@include('macro.textv3', ['data' => array('Email Address', 'email', $supplier->email, null, $errors )])
								<!-- include('macro.select_tenant', ['data' => array('Tenant Name', 'tenant_id', $tenants, $supplier->tenant['id'], null, $errors )]) -->
								<input type="hidden" name="id" value="{{ $supplier->id }}">
								<input type="hidden" name="tenant_id" value="1">
							</div>
							<div class="box-footer">
								<button class="btn btn-success" type="submit">Update</button>
								<a href=" {{ url('suppliers') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
