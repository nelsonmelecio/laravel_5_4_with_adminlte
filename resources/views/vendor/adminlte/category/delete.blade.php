@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Delete a Asset Caterory',
				'indexes' => 'Categories, Delete'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-left">
				<a href=" {{ url('categories') }}" class="btn btn-info btn-md"><i class="fa fa-arrow-circle-left"></i> Back </a>
			</div>
			<br>
			<div class="box" style="border-top: 0;">
				<div class="box-body">

					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Are you sure you want to delete this category name?</h3>
						</div>
						<form role="form" action="{{ url('category/delete') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.text_disabled', ['data' => array('Ecri Code', 'ecri_code', $category->ecri_code, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Description', 'description', $category->description, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Asset Definition', 'asset_definition', $category->asset_definition, null, $errors )])
								@include('macro.text_disabled', ['data' => array('Life Service', 'life_service', $category->life_service, null, $errors )])
								@include('macro.select_single_name_disabled', ['data' => array('Critical Level', 'critical_id', $category->critical, null, $errors )])
								@include('macro.select_single_name_disabled', ['data' => array('Classification Level', 'classification_id', $category->classification, null, $errors )])
								@include('macro.select_single_name_disabled', ['data' => array('Frequency Level', 'frequency_id', $category->frequency, null, $errors )])
								@include('macro.select_single_name_disabled', ['data' => array('Risk Level', 'risk_id', $category->risk, null, $errors )])
								@include('macro.select_single_name_disabled', ['data' => array('Proficiency Level', 'proficiency_id', $category->proficiency, null, $errors )])
								@include('macro.select_single_tenant_disabled', ['data' => array('Tenant Name', 'tenant_id', $category->tenant, null, $errors )])
								<input type="hidden" name="id" value="{{ $category->id }}">
							</div>
							<div class="box-footer">
								<button class="btn btn-danger" type="submit">Delete</button>
								<a href=" {{ url('categories') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
