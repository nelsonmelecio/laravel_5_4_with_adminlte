@extends('adminlte::layouts.dashboard')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">

				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Notifications</h3>
						<div class="box-tools pull-right">
			                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		              	</div>
	              	</div>
					<div class="box-body">
						<p>Welcome to the SGE&MAK HEALTHCARE, INC. dashboard.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
