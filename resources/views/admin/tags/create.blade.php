@extends('layouts.app')
@section('content')
	
	<div class="panel panel-default">
		<div class="panel-heading">
			Create a New Tag
		</div>
		<div class="panel-body">
			<form action="{{ route('tag.store') }}" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label for="tag">Tag</label>
					<input type="text" name="tag" class="form-control">
				</div>
				
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Store a Tag</button>
					</div>
				</div>

				</div>
			</form>
			
		</div>
	</div>
@stop