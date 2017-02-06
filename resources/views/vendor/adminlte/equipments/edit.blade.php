@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Edit Department Records',
				'indexes' => 'Departments, Edit'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-left">
				<a href=" {{ url('departments') }}" class="btn btn-info btn-md"><i class="fa fa-arrow-circle-left"></i> Back </a>
			</div>
			<br>
			<div class="box" style="border-top: 0;">
				<div class="box-body">

					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Modify a category name.</h3>
						</div>
						<form role="form" action="{{ url('department/update') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.textv3', ['data' => array('Code', 'code', $department->code, null, $errors )])
								@include('macro.textv3', ['data' => array('Company Name', 'name', $department->name, null, $errors )])
								@include('macro.textv3', ['data' => array('Department Section', 'section', $department->section, null, $errors )])
								@include('macro.textv3', ['data' => array('Department Building', 'building', $department->building, null, $errors )])
								@include('macro.textv3', ['data' => array('Building Number', 'building_number', $department->building_number, null, $errors )])
								@include('macro.textv3', ['data' => array('Building Floor', 'building_floor', $department->building_floor, null, $errors )])
								@include('macro.textv3', ['data' => array('Building Address', 'building_address', $department->building_address, null, $errors )])
								@include('macro.select_tenant', ['data' => array('Tenant Name', 'tenant_id', $tenants, $department->tenant['id'], null, $errors )])
								<input type="hidden" name="id" value="{{ $department->id }}">
							</div>
							<div class="box-footer">
								<button class="btn btn-success" type="submit">Update</button>
								<a href=" {{ url('departments') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
