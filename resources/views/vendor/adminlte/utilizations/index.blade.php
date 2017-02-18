@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Utilization Categories',
				'indexes' => 'Utilizations'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-right">
				<a href="{{ url('utilization/add') }}" class="btn btn-success btn-md" style="min-width: 170px;"><i class="fa fa-plus"></i> Add New Utilization </a>
			</div>
			<br>
			<table id="tbldatas" class="table table-striped table-bordered row-border table-hover table-compact"  style="table-layout: fixed;">
				<thead>
					<tr>
						<th width="5%">ID</th>
						<th width="auto">Code</th>
						<th width="auto">Name</th>
						<th width="auto">Color</th>
						<th width="160" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
				@foreach($utilizations as $utilization)
					<tr>
						<td style="vertical-align: middle;">{{ $utilization->id }}</td>
						<td style="vertical-align: middle;">{{ $utilization->code }}</td>
						<td style="vertical-align: middle;">{{ $utilization->name }}</td>
						<td style="vertical-align: middle;">{{ $utilization->color }}</td>
						<td style="vertical-align: middle;">
							<a href="{{ url('utilization/edit/' . $utilization->id) }}" class="btn btn-info btn-xs" style="width: 48%;"> Edit </a>
							<a href="{{ url('utilization/delete/' . $utilization->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
						</td>
					</tr>
				@endforeach
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>

@endsection
