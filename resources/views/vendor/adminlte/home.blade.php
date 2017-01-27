@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 ">
				<div class="panel panel-default">
					<div class="panel-heading">Notifications</div>

					<div class="panel-body">
					<p>Welcome to the SGE&MAK HEALTHCARE, INC. dashboard.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
