@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Condition Categories',
				'indexes' => 'Conditions'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-right">
				<a href="{{ url('condition/add') }}" class="btn btn-success btn-md" style="min-width: 170px;"><i class="fa fa-plus"></i> Add New Condition </a>
			</div>
			<br>
			<div class="box">
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
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
						@foreach($conditions as $condition)
							<tr>
								<td style="vertical-align: middle;">{{ $condition->id }}</td>
								<td style="vertical-align: middle;">{{ $condition->code }}</td>
								<td style="vertical-align: middle;">{{ $condition->name }}</td>
								<td style="vertical-align: middle;">{{ $condition->color }}</td>
								<td style="vertical-align: middle;">
									<a href="{{ url('condition/edit/' . $condition->id) }}" class="btn btn-info btn-xs" style="width: 48%;"> Edit </a>
									<a href="{{ url('condition/delete/' . $condition->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
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
