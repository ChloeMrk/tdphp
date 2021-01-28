@extends('layout')

@section('contenu')

        @foreach{{$images as $image}}

                <div>

                <h4>{{$image->title}}</h4>
                
                        <div><img src="{{$image->url_image}}" alt="image"></div></a>
                
                </div>

        
        @endforeach

@endsection