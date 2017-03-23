@extends('layouts')

@section('head')
	<h1>Edit Nekko</h1>
@stop

@section('body')
	<div class="content">
		<form method="POST" action="/home/edit/{{ $cat->id }}" enctype="multipart/form-data">
		{{ csrf_field() }}
			
			<div class="form-group">
				<label class="sellLabel">Name: </label>
				<div> <input class="form-control" type="text" name="fullName" value="@if (!old('fullName')){{$cat->fullName}}@endif{{old('fullName')}}" required="required"> </div>
			</div>

			<div class="form-group">
				<label class="sellLabel">Address: </label>
				<div> <input class="form-control" type="text" name="address" value="@if (!old('address')){{$cat->address}}@endif{{old('address')}}" required="required"> </div>
			</div>

			<div class="form-group">
				<label class="sellLabel">Name of the Cat: </label>
				<div> <input class="form-control" type="text" name="catName" value="@if (!old('catName')){{$cat->catName}}@endif{{old('catName')}}" required="required"> </div>
			</div>

			<div class="form-group">
				<label class="sellLabel">Contact Number: </label>
				<div> <input class="form-control" type="number" name="contactNumber" value="@if (!old('contactNumber')){{$cat->contactNumber}}@endif{{old('contactNumber')}}" required="required"> </div>
			</div>

			<div class="form-group">
				<label class="sellLabel">Description: </label>
				<div> <input class="form-control" type="text" name="desc" value="@if (!old('desc')){{$cat->desc}}@endif{{old('desc')}}" required="required"> </div>
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