@extends('layout')

@section('listing')

<!-- Listing Detail -->
<main class="job-page-main">
    <header class="job-page-det-heading-wrapper">
        <div>
            <img src="{{ $listing->logo ? asset("storage/$listing->logo") : asset("images/no_image.jpg")}}" alt="">
        </div>
        <div>
            <h1>{{ $listing->title }}</h1>
            <h3>{{ $listing->company }}</h3>
        </div>
    </header>

    <section>
        <div class="job-page-det">
            <h3>Job Description</h3>
            <p>{{ $listing->description }}</p>
            <h3>Job Requirements</h3>
            <p>Bachelors degree in Computer Science or related field, 3+ years of software development experience</p>
            <h3>Benefits</h3>
            <p>Healthcare, 401(k) matching, flexible work hours</p>
            <h3>Posted</h3>
            <x-date-diff :listing="$listing" />
        </div>
    </section>

    <section class="job-listing-det-info-wrapper">
        <div class="job-page-det-info">
            <div class="job-page-det-info-el"><strong>Salary:</strong><span> &#8377; {{ $listing->salary }} LPA</span></div>
            <div class="job-page-det-info-el"><strong>Location:</strong><span> {{ $listing->location }}</span></div>
            <div class="job-page-det-info-el"><strong>Tags:</strong><span> {{ $listing->tags }}</span></div>
        </div>
        <div class="job-listing-update-wrapper">

            @auth

            @if(auth()->id() == $listing->user_id)
                {{-- Redirect to Edit Listing Form --}}
                <a href="/listings/{{ $listing->id }}/edit">
                    <button id="edit-listing-btn">Edit Listing</button>
                </a>


                {{-- Delete Listing Form --}}
                <form method="POST" action="/listings/{{ $listing->id }}">
                    @csrf
                    @method('DELETE')
                    <button id="delete-listing-btn">Delete Listing</button>
                </form>
            @endif
            @endauth
        </div>
        
    </section>

    <a href="mailto:razorjones90@gmail.com" class="job-apply-btn">
        <button >
            Apply Now
        </button>
    </a>
    
</main>


@endsection