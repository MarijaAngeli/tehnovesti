@extends('layouts.app')
@section('content')
	
	<div class="panel panel-default">
		<div class="panel-heading">
			Create a New User
		</div>
		<div class="panel-body">
			<form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-group">
					<label for="name">User</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Add User</button>
					</div>
				</div>

				</div>
			</form>
			
		</div>
	</div>
@stop