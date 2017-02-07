@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Manage User Accounts',
				'indexes' => 'Accounts'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-right">
				<a href="{{ url('account/add') }}" class="btn btn-success btn-md" style="min-width: 170px;"><i class="fa fa-plus"></i> Add New Account </a>
			</div>
			<br>
			<div class="box">
				<div class="box-body table-responsive" style="min-height: 150px; overflow: auto;">
					<table class="table table-bordered table-hover" style="table-layout: fixed; ">
						<thead class="thead-inverse">
							<tr>
								<th width="40">ID</th>
								<th width="200">Name</th>
								<th width="200">Code</th>
								<th width="200">Employee ID</th>
								<th width="200">Username</th>
								<th width="200">Email Address</th>
								<th width="200">Type</th>
								<th width="160" class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($accounts as $account)
							<tr>
								<td style="vertical-align: middle;">{{ $account->id }}</td>
								<td style="vertical-align: middle;">{{ $account->name }}</td>
								<td style="vertical-align: middle;">{{ $account->code }}</td>
								<td style="vertical-align: middle;">{{ $account->employee_id }}</td>
								<td style="vertical-align: middle;">{{ $account->username }}</td>
								<td style="vertical-align: middle;">{{ $account->email }}</td>
								<td style="vertical-align: middle;">{{ $account->type }}</td>
								<td style="vertical-align: middle;">
									<a href="{{ url('account/edit/' . $account->id) }}" class="btn btn-info btn-xs" style="width: 48%;"> Edit </a>
									<a href="{{ url('account/delete/' . $account->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
								</td>
							</tr>
						@endforeach
						</tbody>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>

@endsection
