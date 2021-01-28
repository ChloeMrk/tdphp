@extends('layout')

@section('contenu')


<h1>Welcome {{$user->name}}  {{$user->surname}}!</h1>

<div class="profil">

        <img src="{{$user->profil_img}}" alt="profilImg">

        @if(auth()->check() AND auth()->user()->id)

        <h4>Inspirez Nous</h4>

        <form action="/new_img" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <input type="string" name="title" placeholder="Titre" value={{old('name')}}>

            <input type="file" class="" id="inputFile" name="file">

            <button class="btn btn-primary" type="submit">Créer</button>
        </form>

        @endif
</div>








@endsection