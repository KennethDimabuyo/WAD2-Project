@extends('layouts')

@section('head')
	<h1>Nekko Description</h1>
@stop

@section('body')
	<cat>
		<div class="showDesc">
			<a href="{{ URL::to('/uploads/'. $cat->image) }}" class="thumbnail">
				<img src="{{ URL::to('/uploads/'. $cat->image) }}" alt="CatPhoto" width="300" height="auto">
			</a>

			<div class="showDesc">	
				<h2>{{ $cat->catName }}</h2>

				<p> {{ $cat->desc }} </p>

				@if ($user == $cat->user_id)
					<div class="col-md-1 row edit-btn">
						<a href="/home/{{$cat->id}}/delete">
							<label>delete</label>
						</a>
					</div>

					<div class="col-md-1 row edit-btn">
						<a href="/home/{{$cat->id}}/edit">
							<label>edit</label>
						</a>
					</div>
				@else
					
				@endif

				<hr>
			</div>

			<div class="card">
				<div class="card-block">

					<form method="POST" action="/home/{{$cat->id}}/comments" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="form-group">
							<textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
						</div>

						<div class="form-group">
								<button type="submit" class="btn btn-primary">Add Comment</button>
						</div>
					</form>

				</div>

			</div>

			@forelse ($comments as $comment)
				<div class="col-md-13 for-border content thumbnail">
					<div class="for-name">
						<label>{{$comment->name}}</label>
					</div>

					<div class="comment-body">
						<p>{{ $comment->comment }}</p>
					</div>
										
				</div>
				<hr>

			@empty
				<div class="no-comment">
					<h4>No Comments</h4>
				</div>
			@endforelse



		</div>

		<div class="side-bar col-md-3">
			<div class="side-bar-content">
				<h2>You want to buy it?</h2>
				<hr>

				<div class="price_display row spacer-md-bottom">
					<div class="product-price">
						<span>Price: $100</span>
						<span>$90</span>
						<span>save 48%</span>
					</div>
				</div>

				<div class="pac_quantity row spacer-md-bottom">
					<div class="product-price">
						<span>Package Quantity: 2</span>
					</div>
				</div>

				<div class="sn row spacer-md-bottom">
					<div class="form-group">
						<label class="col-2 product-price">Qty</label>
						<span class="col-2"><input type="text" name="qty" class="abc" placeholder="1" size="1"></span>
						<span class="col-8 padding_left">In-Stock</span>

						<div class="product-price">
							<a href="">
								<button class="btn btn-primary btn-lg">add to cart</button>
							</a>
						</div>

					</div>
				</div>

			</div>
		</div>

	</cat>
@stop