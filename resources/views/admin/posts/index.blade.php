<x-admin-master>
	@section('content')

		<h1>All Posts</h1>

		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

						<thead>
							<tr>
								<th>ID</th>
								<th>Use Id</th>
								<th>Title</th>
								<th>Post Image</th>
								<th>Created by</th>
								<th>Created at</th>
								<th>Updated at</th>
							</tr>
						</thead>

						<tbody>
							@foreach($posts as $post)
							<tr>
								<th>{{$post->id}}</th>
								<th>{{$post->user_id}}</th>
								<th>{{$post->title}}</th>
								<th><img class="img_admin" src="/storage/{{$post->post_image}}" alt="Post image"></th>
								<th>{{$post->user->name}}</th>
								<th>{{$post->created_at->diffForHumans()}}</th>
								<th>{{$post->updated_at->diffForHumans()}}</th>
							</tr>
							@endforeach
						</tbody>

						<tfoot>
							<tr>
								<th>ID</th>
								<th>User Id</th>
								<th>Title</th>
								<th>Post Image</th>
								<th>Body</th>
								<th>Created at</th>
								<th>Updated at</th>
							</tr>
						</tfoot>
					</table>

				</div>
			</div>
		</div>

	@endsection


	@section('scripts')
		<!-- Page level plugins -->
	  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
	  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

	  <!-- Page level custom scripts -->
	  <script src="{{asset('js/datatables-demo.js')}}"></script>
	@endsection

</x-admin-master>

