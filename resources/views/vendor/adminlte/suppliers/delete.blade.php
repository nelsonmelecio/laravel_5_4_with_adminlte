@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Delete Supplier Record',
				'indexes' => 'Suppliers, Delete'
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
							<h3 class="box-title">Are you sure you want to delete this category name?</h3>
						</div>
						<form role="form" action="{{ url('supplier/delete') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.text_disabled', ['data' => array('Code', 'code', $supplier->code, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Company Name', 'name', $supplier->name, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Contact Person', 'supplier_person', $supplier->supplier_person, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Supplier Address', 'supplier_address', $supplier->supplier_address, null, $errors )])
								@include('macro.text_disabled', ['data' => array('City Address', 'city_address', $supplier->city_address, null, $errors )])
								@include('macro.text_disabled', ['data' => array('State/Province', 'state_province', $supplier->state_province, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Postal', 'postal', $supplier->postal, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Country', 'country', $supplier->country, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Phone Number', 'phone_number', $supplier->phone_number, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Fax Number', 'fax_number', $supplier->fax_number, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Mobile Number', 'mobile_number', $supplier->mobile_number, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Email Address', 'email', $supplier->email, null, $errors )])

								@include('macro.select_single_tenant_disabled', ['data' => array('Tenant Name', 'tenant_id', $supplier->tenant, null, $errors )])
								<input type="hidden" name="id" value="{{ $supplier->id }}">
							</div>
							<div class="box-footer">
								<button class="btn btn-danger" type="submit">Delete</button>
								<a href=" {{ url('suppliers') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
