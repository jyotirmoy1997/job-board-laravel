@extends('layout')


@section('home')

<!-- Main Page -->
<main>
    <!-- Banner -->
    <section class="banner">
        <div class="banner-heading">
            <h1>Find the Most Exciting Jobs</h1>
            <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative to</p>
        </div>
        <div class="banner-image">
            <img src="{{asset('images/background.png')}}" alt="" srcset="">
        </div>
    </section>

    <!-- Categories -->
    <section class="category_wrapper">
        <div class="category-heading">
            <h1>Explore jobs by Category</h1>
            <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative to</p>
        </div>
        <div class="category-card-wrapper">

            <!-- Category 1 -->
            <div class="category-card">
                <div class="category-icon-wrapper" id="cat1">
                    <i class="fa-solid fa-briefcase fa-xl" style="color: #ffffff;"></i>
                </div>
                <h2>Business Development</h2>
            </div>

             <!-- Category 2 -->
             <div class="category-card">
                <div class="category-icon-wrapper" id="cat2">
                    <i class="fa-solid fa-headset fa-xl" style="color: #ffffff;"></i>
                </div>
                <h2>Customer Service</h2>
            </div>

             <!-- Category 3 -->
             <div class="category-card">
                <div class="category-icon-wrapper" id="cat3">
                    <i class="fa-solid fa-layer-group fa-xl" style="color: #ffffff;"></i>
                </div>
                <h2>Development</h2>
            </div>
            
            <!-- Category 4 -->
            <div class="category-card">
                <div class="category-icon-wrapper" id="cat4">
                    <i class="fa-solid fa-pen-nib fa-xl" style="color: #ffffff;"></i>
                </div>
                <h2>Design</h2>
            </div>

            <!-- Category 5 -->
            <div class="category-card">
                <div class="category-icon-wrapper" id="cat5">
                    <i class="fa-solid fa-rocket fa-xl" style="color: #ffffff;"></i>
                </div>
                <h2>Marketing & Sales</h2>
            </div>

            <!-- Category 6 -->
            <div class="category-card">
                <div class="category-icon-wrapper" id="cat6">
                    <i class="fa-solid fa-user fa-xl" style="color: #ffffff;"></i>
                </div>
                <h2>Human Resource</h2>
            </div>
        </div>
    </section>

    {{-- Recent Jobs --}}
    <div class="job-section-outer">
        <section class="job-card-heading">
            <h1>Recent Jobs</h1>
            <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative to</p>
        </section>
    
        <x-job-listings :listings="$listings" />
    
        <a href="/listings" class="job-section-btn">
            <button >
                <span>See all Jobs</span>
                <span><i class="fa-solid fa-arrow-right"></i></span>
            </button>
        </a>
    </div>
    

    <!-- Job Posting Banner -->
    <section class="job-posting-wrapper">
        <div class="job-posting-outer">
            <div class="job-posting-inner">
                <h1>
                    Get applications from the world best talents.
                </h1>
                <p>
                    Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. 
                </p>
                <a href="/listings/create">
                    <button>
                        Post a Job
                    </button>
                </a>
            </div>
            
        </div>
        <div class="job-posting-img-wrapper">
            <img src="{{asset('images/domains.jpg')}}" alt="" srcset="">
        </div>
    </section>
</main>

@endsection