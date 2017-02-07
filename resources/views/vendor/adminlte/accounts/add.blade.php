@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Add New User Account',
				'indexes' => 'Accounts, Add'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-left">
				<a href=" {{ url('accounts') }}" class="btn btn-info btn-md"><i class="fa fa-arrow-circle-left"></i> Back </a>
			</div>
			<br>
			<div class="box" style="border-top: 0;">
				<div class="box-body">

					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Create a new user account.</h3>
						</div>
						<form role="form" action="{{ url('account/add') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.textv3', ['data' => array('Name', 'name', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Code', 'code', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Employee ID', 'employee_id', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Username', 'username', null, null, $errors )])
								@include('macro.textv3', ['data' => array('Email Address', 'email', null, null, $errors )])
								@include('macro.password', ['data' => array('Password', 'password', null, null, $errors )])
								@include('macro.textv3', ['data' => array('User Type Code', 'type', null, null, $errors )])
							</div>
							<div class="box-footer">
								<button class="btn btn-success" type="submit">Submit New User Account</button>
								<a href=" {{ url('accounts') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
