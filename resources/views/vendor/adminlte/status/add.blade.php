@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'New Status Category',
				'indexes' => 'Statuses, Add'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-left">
				<a href=" {{ url('statuses') }}" class="btn btn-info btn-md"><i class="fa fa-arrow-circle-left"></i> Back </a>
			</div>
			<br>
			<div class="box" style="border-top: 0;">
				<div class="box-body">

					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Create a new category name.</h3>
						</div>
						<form role="form" action="{{ url('status/add') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.text', ['data' => array('Code', 'code', null, 'code', $errors->has('code'), $errors->first('code') )])
								@include('macro.text', ['data' => array('Name', 'name', null, 'name', $errors->has('name'), $errors->first('name') )])
								@include('macro.colorpicker', ['data' => array('Color Code', 'color', null, 'color', $errors->has('color'), $errors->first('color') )])
							</div>
							<div class="box-footer">
								<button class="btn btn-success" type="submit">Submit</button>
								<a href=" {{ url('statuses') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
