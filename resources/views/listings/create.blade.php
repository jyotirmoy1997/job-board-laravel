@extends('layout')

@section('create')
    <main>
        <x-flash-message />
        <div class="form-wrapper">
            <h1>Create Job Listing</h1>
            <form method="POST" action="/listings" class="form" enctype="multipart/form-data">
                @csrf

                <label for="title">Job Title</label>
                @error('title')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="title" id="" value="{{ old('title') }}">

                <label for="description">Job Description</label>
                @error('description')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="description" id="" value="{{ old('description') }}">
                
                <label for="salary">Annual Salary (In &#8377; LPA)</label>
                @error('salary')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="salary" id="" value="{{ old('salary') }}">


                <label for="tags">Tags (Comma Separated Values)</label>
                @error('tags')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="tags" id="" value="{{ old('tags') }}">


                <label for="website">Website</label>
                @error('website')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="website" id="" value="{{ old('website') }}">

                <label for="company">Company</label>
                @error('company')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="company" id="" value="{{ old('company') }}">

                <label for="location">Location</label>
                @error('location')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="location" id="" value="{{ old('location') }}">


                {{-- <label for="jobPhone">Phone</label>
                <input type="text" name="jobPhone" id=""> --}}

                <label for="email">Job Email</label>
                @error('email')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="email" name="email" id="" value="{{ old('email') }}">

                <label for="logo">Upload Company Logo</label>
                @error('logo')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="file" name="logo" id="" value="{{ old('logo') }}">
                <button>Create Listing</button>
            </form>
            
        </div>
        
    </main>
@endsection

