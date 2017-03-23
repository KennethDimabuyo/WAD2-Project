@extends('layouts')

@section('head')
    <h1>Nekko Shop</h1>
@endsection

@section('body')
    
    <div class="container">
        <div class="row">
            <div class="col-md-3 row1">
                
                <cat>
                   @foreach ($cats as $cat)
                        <div id="list-view-2">
                            <h2>
                                <a href="{{ url ('home' , $cat->id) }}">
                                    {{ $cat->catName }}
                                </a>
                            </h2>
                        </div>
                        <div class="thumbnail thumbnail1">
                            <a href="{{ url('home', $cat->id) }}">
                                <img alt="{{ $cat->image }}" src="{{ URL::to('/uploads/'. $cat->image) }}" width="400" height="auto">
                            </a>
                        </div>

                        <hr>

                   @endforeach
                </cat>

            </div>
        </div>
    </div>

@stop
