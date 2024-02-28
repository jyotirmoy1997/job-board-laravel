@extends('layout')

@section('create')
    <main>
        <div class="form-wrapper">
            <h1>Create Job Listing</h1>
            <form method="POST" action="/listings" class="form">
                @csrf

                <label for="title">Job Title</label>
                @error('title')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="title" id="">

                <label for="description">Job Description</label>
                @error('description')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="description" id="">
                
                <label for="salary">Annual Salary (In &#8377; LPA)</label>
                @error('salary')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="number" name="salary" id="">


                <label for="tags">Tags (Comma Separated Values)</label>
                @error('tags')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="tags" id="">


                <label for="website">Website</label>
                @error('website')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="website" id="">

                <label for="company">Company</label>
                @error('company')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="company" id="">

                <label for="location">Location</label>
                @error('location')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="location" id="">


                {{-- <label for="jobPhone">Phone</label>
                <input type="text" name="jobPhone" id=""> --}}

                <label for="email">Job Email</label>
                @error('email')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="email" name="email" id="">
                <button>Create Listing</button>
            </form>
        </div>
        
    </main>
@endsection

