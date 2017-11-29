@extends('layouts.app')
@section('content')
	
	<div class="panel panel-default">
		<div class="panel-heading">
			Update Post: {{$post->name}}
		</div>
		<div class="panel-body">
			<form action="{{ route('post.update',['id'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" value="{{$post->title}}" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label for="featured">Featured image</label>
					<input type="file" name="featured" class="form-control">
				</div>
				<div class="form-group">
					<label for="category">Select a Category</label>
					<select name="category_id" id="category_id" class="form-control">
						@foreach($categories as $category)
							<option value="{{$category->id}}"
								@if($post->category->id == $category->id)
									selected
								@endif
							>{{$category->name}}</option>
						@endforeach
					</select>
				</div>
				<label for="tags">Select tags</label>
				<div class="form-group">
					@foreach($tags as $tag)
						<div class="checkbox">
							<label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
								@foreach ($post->tags as $t)
									@if ($tag->id == $t->id)
										checked 
									@endif
								@endforeach

							>{{ $tag->tag }}</label>
						</div>
					@endforeach			
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea class="form-control" name="content" id="content" cols="5" rows="5">{{$post->content}}</textarea>
				</div>
				
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Update Post</button>
					</div>
				</div>

				</div>
			</form>
			
		</div>
	</div>
@stop
<!-- include summernote css/js-->
@section('styles')
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
@stop
@section('scripts')
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
	<script>
		$(document).ready(function() {
        	$('#content').summernote();
    	});
	</script>
@stop