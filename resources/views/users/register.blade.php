@extends('layout')

@section('register')
<main>
    <div class="form-wrapper">
        <h1>Sign-Up with Email</h1>
        <form method="POST" action="/users" class="form">
            @csrf

            <label for="name">Name</label>
            @error('name')
                <p class="form-err">{{$message}}</p>
            @enderror
            <input type="text" name="name" id="" value="{{ old('name')}}">


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


            <label for="password_confirmation">Confirm Password</label>
            @error('password_confirmation')
                <p class="form-err">{{$message}}</p>
            @enderror
            <input type="password" name="password_confirmation" id="" value="{{ old('password_confirmation')}}">

            <button>Sign-Up</button>
        </form>
        <div>
            Already a User ? <a href=""><span class="highlight-text">Login</span></a> using your email ID
        </div>
    </div>
    
</main>
@endsection