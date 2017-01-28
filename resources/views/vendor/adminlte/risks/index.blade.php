@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Risk Categories',
				'indexes' => 'Risks'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-right">
				<a href="{{ url('risk/add') }}" class="btn btn-success btn-md" style="width: 170px;"><i class="fa fa-plus"></i> Add New Risk </a>
			</div>
			<br>
			<div class="box">
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th width="5%">ID</th>
								<th width="auto">Name</th>
								<th width="160" class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($risks as $risk)
							<tr>
								<td style="vertical-align: middle;">{{ $risk->id }}</td>
								<td style="vertical-align: middle;">{{ $risk->name }}</td>
								<td style="vertical-align: middle;">
									<a href="{{ url('risk/edit/' . $risk->id) }}" class="btn btn-info btn-xs" style="width: 48%;"> Edit </a>
									<a href="{{ url('risk/delete/' . $risk->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
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