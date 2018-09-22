@extends('admin.layouts.app')
@section('title')
suppliers
@endsection

@section('content')

@if(!count($suppliers))
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h1 class="text-danger">There is no Items Here Yet! <i class="mdi mdi-emoticon-neutral"></i>
				</h1><br>
				<a href="{{ action('Admin\SupplierController@create', 'suppliers') }}"><h4><i class="mdi mdi-plus"></i> Add
				</h4></a>
			</div>
		</div>
	</div>
</div>
@else
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">All suppliers </h4>
				<h6 class="card-subtitle">you can edit question data from translations</h6>
				<div class="table-responsive">
					<table class="table" id="table_id">
						<thead>
							<tr>
								<th>#</th>
								<th>User name</th>
								<th>Description</th>
								<th>Location</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($suppliers as $supplier)
							<tr>
								<td>{{ $supplier->id }}</td>

								<td>{{ strip_tags($supplier->name) ?? 'No Title' }}</td>
								<td>{{ $supplier->description }}</td>
								<td>{{ $supplier->location }}</td>

								<td class="text-nowrap">

									<a class="btn default btn-outline " data-delete href="javascript:void(0);"><i
										class="fa fa-trash text-danger m-r-10" data-toggle="tooltip" data-placement="top" title="Delete Supplier"></i></a>

										<form action="{{ action('Admin\SupplierController@destroy', $supplier) }}"
										method="post" id="delete">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

									</form>
								</td>
								<td class="text-nowrap">
									<li><a class="btn default btn-outline" title="Edit Supplier" href="{{ action('Admin\SupplierController@edit', $supplier) }} "><i class="icon-pencil"></i></a></li>
								</td>
							</tr>
							@endforeach

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endif

@endsection
@section('script')
<script type="text/javascript">
	$(document).ready( function () {
		$('#table_id').DataTable();
	} );

</script>
@endsection