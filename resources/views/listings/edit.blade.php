@extends('layout')

@section('edit')
    <main>
        <x-flash-message :message="'Listing Updated Successfully'" />
        <div class="form-wrapper">
            <h1>Update Job Listing</h1>
            <form method="POST" action="/listings/{{$listing->id}}" class="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="title">Job Title</label>
                @error('title')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="title" id="" value="{{ $listing->title }}">

                <label for="description">Job Description</label>
                @error('description')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="description" id="" value="{{ $listing->description }}">
                
                <label for="salary">Annual Salary (In &#8377; LPA)</label>
                @error('salary')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="salary" id="" value="{{ $listing->salary }}">


                <label for="tags">Tags (Comma Separated Values)</label>
                @error('tags')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="tags" id="" value="{{ $listing->tags }}">


                <label for="website">Website</label>
                @error('website')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="website" id="" value="{{ $listing->website }}">

                <label for="company">Company</label>
                @error('company')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="company" id="" value="{{ $listing->company }}">

                <label for="location">Location</label>
                @error('location')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="text" name="location" id="" value="{{ $listing->location }}">


                {{-- <label for="jobPhone">Phone</label>
                <input type="text" name="jobPhone" id=""> --}}

                <label for="email">Job Email</label>
                @error('email')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="email" name="email" id="" value="{{ $listing->email }}">

                <label for="logo">Upload Company Logo</label>
                @error('logo')
                    <p class="form-err">{{$message}}</p>
                @enderror
                <input type="file" name="logo" id="" value="{{ $listing->logo }}">
                <button>Update Listing</button>
            </form>
            
        </div>
        
    </main>
@endsection

