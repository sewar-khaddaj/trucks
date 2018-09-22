@extends('admin.layouts.app')
@section('title')
Trucks
@endsection

@section('content')

@if(!count($trucks))
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h1 class="text-danger">There is no Items Here Yet! <i class="mdi mdi-emoticon-neutral"></i>
				</h1><br>
				<a href="{{ action('Admin\TruckController@create', 'trucks') }}"><h4><i class="mdi mdi-plus"></i> Add
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
				<h4 class="card-title">All trucks </h4>
				<h6 class="card-subtitle">you can edit question data from translations</h6>
				<div class="table-responsive">
					<table class="table" id="table_id">
						<thead>
							<tr>
								<th>#</th>
								<th>Driver Name</th>
								<th>Capacity</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($trucks as $truck)
							<tr>
								<td>{{ $truck->id }}</td>

								<td>{{ strip_tags($truck->driver_name) ?? 'No Title' }}</td>
								<td>{{ $truck->capacity }}</td>


								<td class="text-nowrap">

									<a class="btn default btn-outline " data-delete href="javascript:void(0);"><i
										class="fa fa-trash text-danger m-r-10" data-toggle="tooltip" data-placement="top" title="Delete Truck"></i></a>

										<form action="{{ action('Admin\TruckController@destroy', $truck) }}"
										method="post" id="delete">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

									</form>
								</td>
								<td class="text-nowrap">
									<li><a class="btn default btn-outline" title="Edit Truck" href="{{ action('Admin\TruckController@edit', $truck) }} "><i class="fas fa-eye"></i></a></li>
								</td>
										<td class="text-nowrap">
									<li><a class="btn default btn-outline" title="Show More Detailes" href="{{ action('Admin\TruckController@show', $truck) }} "><i class="icon-pencil"></i></a></li>
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