

<div class="header">

<h1>Universe</h1>

    @if(auth()->check())
    
        <a href="{{url('/signout')}}">Sign out</a>
        <a href="{{url('/password_modification')}}">Change Password</a>

    @else
        <a href="{{url('/connexion')}}">log in</a>
        <a href="{{url('/inscription')}}">Sign in</a>
        
        
        
    @endif

</div>
