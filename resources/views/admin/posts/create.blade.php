<x-admin-master>
	@section('content')
		<h1>Create Post</h1>

		<form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="title">Title</label>
				<input class="form-control" id="title" name="title" placeholder="Enter title"></input>				
			</div>

			<div class="form-group">
				<label for="post_image">File</label>
				<input class="form-control-file" type="file" name="post_image" id="post_image"></input>
			</div>

			<div class="form-group">
				<label for="body">Content</label>
				<textarea class="form-control" id="body" name="body"></textarea>
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>

		</form>
	@endsection
</x-admin-master>