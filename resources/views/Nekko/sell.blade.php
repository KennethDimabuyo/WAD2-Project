@extends('layouts')

@section('head')
	<h1>Nekko Shop</h1>
@stop

@section('body')
	<div class="content">
		<form method="POST" action="{{ url('home') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
			
			<div class="form-group">
				<label class="sellLabel">Name: </label>
				<div> <input class="form-control" type="text" name="fullName"> </div>
			</div>

			<div class="form-group">
				<label class="sellLabel">Address: </label>
				<div> <input class="form-control" type="text" name="address"> </div>
			</div>

			<div class="form-group">
				<label class="sellLabel">Name of the Cat: </label>
				<div> <input class="form-control" type="text" name="catName"> </div>
			</div>

			<div class="form-group">
				<label class="sellLabel">Contact Number: </label>
				<div> <input class="form-control" type="number" name="contactNumber"> </div>
			</div>

			<div class="form-group">
				<label class="sellLabel">Description: </label>
				<div> <input class="form-control" type="text" name="desc"> </div>
			</div>

			<div class="form-group">
				<label class="sellLabel">Picture</label>
				<img id="inputImage" style="max-width: 300px; max-height: auto; float: left;">
				<div class="row">
					<div class="col-md-12">
						<input type="file" name="file" id="file">
					</div>
				</div>
			</div>

			<br>
			<div class="form-group"> <input type="submit" name="submit" value="submit" class="btn btn-primary form-control"> </div>
		</form>
	</div>

@stop