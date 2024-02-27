
@extends('layout')

@section('listings')

<!-- Main Page -->
<main>

    <section class="job-card-heading">
        <h1>Explore All Jobs</h1>
        <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative to</p>
    </section>

    {{-- Including the Search Bar from Partials --}}
    @include('partials/_searchBar')
    
    <!-- Recent Jobs Section -->
    <section class="job-section-wrapper">

        @foreach($listings as $listing)
        <!-- Job Card 1-->
        <div class="job-card-wrapper">
            <div class="job-card-outer">
                <div class="job-card-inner">
                    <div>
                        <img src="{{ asset('images/airbnb.png')}}" alt="">
                    </div>
                    <div class="job-card-inner-info">
                        <h4>{{ $listing->title }}</h4>
                        <h6>{{ $listing->company }}</h6>
                    </div>
                </div>
                <div class="job-card-tags-wrapper">
                    <h6 class="job-card-tags">Visual Design</h6>
                    <h6 class="job-card-tags">Wireframe</h6>
                    <h6 class="job-card-tags">Scrum</h6>
                </div>
            </div>
            <div class="loc-det">
                <div class="job-card-salary">
                    <span>&#8377;</span><span>5-7 LPA</span>
                </div>
                <div>
                    <a href="/job-details.html">
                        View Details
                    </a>
                </div>
                <div class="job-card-det">
                    <div>
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <span>{{ $listing->location}}</span>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-briefcase"></i></span>
                        <span>Full-time</span>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-clock"></i></span>
                        <span>9d ago</span>
                    </div>
                </div>
            </div >
        </div>

        @endforeach
    </section>
</main>

@endsection