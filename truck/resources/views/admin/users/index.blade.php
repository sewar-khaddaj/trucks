@extends('admin.layouts.app')
@section('title')
users
@endsection

@section('content')

@if(!count($users))
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h1 class="text-danger">There is no Items Here Yet! <i class="mdi mdi-emoticon-neutral"></i>
				</h1><br>
				<a href="{{ action('Admin\UserController@create', 'users') }}"><h4><i class="mdi mdi-plus"></i> Add
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
				<h4 class="card-title">All users </h4>
				<h6 class="card-subtitle">you can edit question data from translations</h6>
				<div class="table-responsive">
					<table class="table" id="table_id">
						<thead>
							<tr>
								<th>#</th>
								<th>User name</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
							<tr>
								<td>{{ $user->id }}</td>

								<td>{{ strip_tags($user->name) ?? 'No Title' }}</td>

								<td class="text-nowrap">
									 <a class="btn default btn-outline" title="Edit User" data-placement="top" href="{{ action('Admin\UserController@edit', $user) }} "><i class="icon-pencil"></i></a>

								    	<a class="btn default btn-outline " data-delete href="javascript:void(0);"><i
										class="fa fa-trash text-danger m-r-10" data-toggle="tooltip" data-placement="top" title="Delete User"></i></a>

										<form action="{{ action('Admin\UserController@destroy', $user) }}"
										method="post" id="delete">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

									 </form>
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