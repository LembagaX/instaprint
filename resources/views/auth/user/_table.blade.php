<table class="table table-hover">
	<thead class="thead-dark">
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Status</th>
			<th></th>
		</tr>
	</thead>

	<tbody>
		@foreach ($users as $i => $user)
		<tr>
			<td>{{ $i + $users->firstItem() }}</td>
			<td>{{ $user->name }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->role->name }}</td>
			<td>{{ $user->status() }}</td>
			<td>
				<div class="row">
					<div class="col-4">
						@include('auth.user._edit')
					</div>
					<div class="col-4">
						@include('auth.user._destroy')
					</div>
					<div class="col-4">
						@include('auth.user._block')
						@include('auth.user._unblock')
					</div>
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>