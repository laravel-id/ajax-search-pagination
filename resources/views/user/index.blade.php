@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="col-md-12">

			<div class="row">

				<div class="panel panel-default">
					<div class="panel-heading">Users</div>

					<div class="panel-body">
						<div class="row">
							<search url="{{ route('user.search') }}" label="Search" placeholder="Type a keyword..." v-on:search="searchUser"></search>
						</div>

						<hr>

						<div v-if="keyword">
							<p>Search results for "@{{ keyword }}"</p>
						</div>

						<div class="tabel-responsive">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No.</th>
										<th>Email</th>
										<th>Created</th>
										<th>Updated</th>
										<th>Actions</th>
									</tr>
								</thead>

								<tbody>
									<tr v-for="(user, index) in users.data">
										<td>@{{ users.from + index }}.</td>
										<td>@{{ user.email }}</td>
										<td>@{{ user.created_at }}</td>
										<td>@{{ user.updated_at }}</td>
										<td>
											<a href="#" class="btn btn-info btn-xs">Edit</a>
											<a href="#" class="btn btn-danger btn-xs">Delete</a>
										</td>
									</tr>
								</tbody>
							</table>

							<ul class="pagination">
								<li v-if="users.prev_page_url"><a @click.prevent="getUser(users.prev_page_url)" href="#">Previous</a></li>
								<li v-if="users.next_page_url"><a @click.prevent="getUser(users.next_page_url)" href="#">Next</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>

		</div>	
	</div>

@endsection