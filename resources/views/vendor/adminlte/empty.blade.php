@extends('adminlte::layouts.sge_layout')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('content-header-v2')

	@include('vendor.adminlte.layouts.partials.contentheader_v2', 
			[	
				'title' => 'Page Under Construction',
				'indexes' => 'Not implemented yet'
			])

@endsection

@section('main-content')

	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>A message from the developer</h4>
					</div>

					<div class="panel-body">
						<h3>This page is under construction. Please get back on this page very soon. </h3>
					</div>

					<div class="panel-footer">
						<h3>God Bless Us All</h3>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection
