@extends('layout')

@section('login')

<main>
    <div class="form-wrapper">
        <h1>Login with Email</h1>
        <form method="POST" action="/users/auth" class="form">
            @csrf

            <label for="email">Email</label>
            @error('email')
                <p class="form-err">{{$message}}</p>
            @enderror
            <input type="email" name="email" id="" value="{{ old('email')}}">


            <label for="password">Password</label>
            @error('password')
                <p class="form-err">{{$message}}</p>
            @enderror
            <input type="password" name="password" id="" value="{{ old('password')}}">
            <button>Login</button>
        </form>
        <div>
            New User ? <a href=""><span class="highlight-text">Sign-Up</span></a>  using your email ID
        </div>
    </div>
    
</main>

@endsection