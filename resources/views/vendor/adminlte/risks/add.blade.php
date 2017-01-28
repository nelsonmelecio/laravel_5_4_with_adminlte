@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="text-right">
			<button class="btn btn-success" style="width: 170px;"> Add New Risk </button>
		</div>
		<br>
		<div class="box">
			<!-- /.box-header -->
			<div class="box-body">
				<table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="5%">ID</th>
							<th width="auto">Name</th>
							<th width="160">Action</th>
						</tr>
					</thead>
					<tbody>
					@foreach($risks as $risk)
						<tr>
							<td style="vertical-align: middle;">{{ $risk->id }}</td>
							<td style="vertical-align: middle;">{{ $risk->name }}</td>
							<td style="vertical-align: middle;">
								<button class="btn btn-info btn-xs" style="width: 48%;"> Edit </button>
								<button class="btn btn-danger btn-xs" style="width: 48%;"> Delete </button>
							</td>
						</tr>
					@endforeach
					</tbody>
					</tfoot>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->

@endsection
