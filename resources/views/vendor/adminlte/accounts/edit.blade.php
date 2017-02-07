@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Edit User Account',
				'indexes' => 'Accounts, Edit'
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
							<h3 class="box-title">Modify a category name.</h3>
						</div>
						<form role="form" action="{{ url('account/update') }}" method="POST">
                    		{{ csrf_field() }}
							<div class="box-body">
								@include('macro.textv3', ['data' => array('Name', 'name', $account->name, null, $errors )])
								@include('macro.textv3', ['data' => array('Code', 'code', $account->code, null, $errors )])
								@include('macro.textv3', ['data' => array('Employee ID', 'employee_id', $account->employee_id, null, $errors )])
								@include('macro.textv3', ['data' => array('Username', 'username', $account->username, null, $errors )])
								@include('macro.email', ['data' => array('Email Address', 'email', $account->email, null, $errors )])
								<!-- include('macro.repassword', ['data' => array('Update Password', 'password', null, null, $errors )]) -->
								@include('macro.textv3', ['data' => array('User Type Code', 'type', $account->type, null, $errors )])

								<input type="hidden" name="id" value="{{ $account->id }}">
							</div>
							<div class="box-footer">
								<button class="btn btn-success" type="submit">Update User Account</button>
								<a href=" {{ url('accounts') }}" class="btn btn-info btn-md"> Cancel </a>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


@endsection
