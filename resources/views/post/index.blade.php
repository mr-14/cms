@extends('layouts.app')

@section('stylesheets')
	@parent
	<link rel="stylesheet" href="js/datatables/dataTables.bootstrap.css">
@stop

@section('javascripts')
	@parent
	<script src="js/datatables/js/jquery.dataTables.min.js"></script>
	<script src="js/datatables/dataTables.bootstrap.js"></script>
	<script src="js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
	<script src="js/datatables/tabletools/dataTables.tableTools.min.js"></script>
@stop

@section('content')
<div class="page-title">

	<div class="title-env">
		<h1 class="title">资讯文章管理</h1>
		<p class="description">Dynamic table variants with pagination and other controls</p>
	</div>

	<div class="breadcrumb-env">
		<ol class="breadcrumb bc-1">
			<li>
				<a href="dashboard-1.html"><i class="fa-home"></i>Home</a>
			</li>
			<li>
				<a href="tables-basic.html">Tables</a>
			</li>
			<li class="active">
				<strong>Data Tables</strong>
			</li>
		</ol>
	</div>

</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Basic Setup</h3>
		
		<div class="panel-options">
			<a href="{{ url('posts/create') }}" class="btn btn-default">发布文章</a>
		</div>
	</div>
	<div class="panel-body">
		
		<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			$("#example-1").dataTable({
				aLengthMenu: [
					[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
				]
			});
		});
		</script>
		
		<table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Name</th>
					<th>Position</th>
					<th>Office</th>
					<th>Age</th>
					<th>Start date</th>
					<th>Salary</th>
				</tr>
			</thead>
		
			<tfoot>
				<tr>
					<th>Name</th>
					<th>Position</th>
					<th>Office</th>
					<th>Age</th>
					<th>Start date</th>
					<th>Salary</th>
				</tr>
			</tfoot>
		
			<tbody>
				<tr>
					<td>Tiger Nixon</td>
					<td>System Architect</td>
					<td>Edinburgh</td>
					<td>61</td>
					<td>2011/04/25</td>
					<td>$320,800</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@stop
