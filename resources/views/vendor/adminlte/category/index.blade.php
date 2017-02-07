@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Manage Categories',
				'indexes' => 'Categories'
			])

@endsection

@section('main-content')

	<div class="row">
		<div class="col-sm-12">
			<div class="text-right">
				<a href="{{ url('category/add') }}" class="btn btn-success btn-md" style="min-width: 170px;"><i class="fa fa-plus"></i> Add New Category </a>
			</div>
			<br>
			<div class="box">
				<div class="box-body table-responsive" style="min-height: 150px; overflow: auto;">
					<table class="table table-bordered table-hover" style="table-layout: fixed; ">
						<thead class="thead-inverse">
							<tr>
								<th width="40">ID</th>
								<th width="150">Ecri Code</th>
								<th width="200">Description</th>
								<th width="200">Asset Definition</th>
								<th width="200">Department Building</th>
								<th width="200">Critical Level</th>
								<th width="200">Classsification level</th>
								<th width="200">Frequency Level</th>
								<th width="200">Risk Level</th>
								<th width="200">Proficiency Level</th>
								<th width="200">Tenant</th>
								<th width="160" class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($categories as $category)
							<tr>
								<td style="vertical-align: middle;">{{ $category->id }}</td>
								<td style="vertical-align: middle;">{{ $category->ecri_code }}</td>
								<td style="vertical-align: middle;">{{ $category->description }}</td>
								<td style="vertical-align: middle;">{{ $category->asset_definition }}</td>
								<td style="vertical-align: middle;">{{ $category->life_service }}</td>
								<td style="vertical-align: middle;">{{ $category->critical['name'] }}</td>
								<td style="vertical-align: middle;">{{ $category->classification['name'] }}</td>
								<td style="vertical-align: middle;">{{ $category->frequency['name'] }}</td>
								<td style="vertical-align: middle;">{{ $category->risk['name'] }}</td>
								<td style="vertical-align: middle;">{{ $category->proficiency['name'] }}</td>
								<td style="vertical-align: middle;">{{ $category->tenant['company_name'] }}</td>
								<td style="vertical-align: middle;">
									<a href="{{ url('category/edit/' . $category->id) }}" class="btn btn-info btn-xs" style="width: 48%;"> Edit </a>
									<a href="{{ url('category/delete/' . $category->id) }}" class="btn btn-danger btn-xs" style="width: 48%;"> Delete </a>
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
