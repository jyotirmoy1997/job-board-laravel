@extends('layout')

@section('listings')

<!-- Main Page -->
<main>

    <section class="job-card-heading">
        <h1>Explore All Jobs</h1>
        <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative to</p>
    </section>

    <!-- Search Form -->
    <section class="search-form-wrapper">
        <form action="" class="search-form">
            <div class="input-wrapper">
                <i class="fa-solid fa-magnifying-glass fa-xl search-form-icons"></i>
                <input type="text" placeholder="Type Job Title, Keywords">
            </div>
            <div class="input-wrapper">
                <i class="fa-solid fa-location-dot fa-xl search-form-icons"></i>
                <input type="text" placeholder="Type Location">
            </div>
            <button class="search-form-btn">Search</button>
        </form>
    </section>

    <!-- Recent Jobs Section -->
    <section class="job-section-wrapper">

        <!-- Job Card 1-->
        <div class="job-card-wrapper">
            <div class="job-card-outer">
                <div class="job-card-inner">
                    <div>
                        <img src="{{ asset('images/airbnb.png')}}" alt="">
                    </div>
                    <div class="job-card-inner-info">
                        <h4>UI/UX Designer</h4>
                        <h6>Airbnb</h6>
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
                        <span>Bengaluru</span>
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

        <!-- Job Card 2-->
        <div class="job-card-wrapper">
            <div class="job-card-outer">
                <div class="job-card-inner">
                    <div>
                        <img src="{{ asset('images/apple.png')}}" alt="">
                    </div>
                    <div class="job-card-inner-info">
                        <h4>Software Engineer</h4>
                        <h6>Apple Inc</h6>
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
                    <span>&#8377;</span><span>12-14 LPA</span>
                </div>
                <div>
                    <a href="">
                        View Details
                    </a>
                </div>
                <div class="job-card-det">
                    <div>
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <span>Bengaluru</span>
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

        <!-- Job Card 3-->
        <div class="job-card-wrapper">
            <div class="job-card-outer">
                <div class="job-card-inner">
                    <div>
                        <img src="{{ asset('images/facebook.png')}}" alt="">
                    </div>
                    <div class="job-card-inner-info">
                        <h4>Lead System Engineer</h4>
                        <h6>Facebook</h6>
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
                    <span>&#8377;</span><span>25-35 LPA</span>
                </div>
                <div>
                    <a href="">
                        View Details
                    </a>
                </div>
                <div class="job-card-det">
                    <div>
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <span>Bengaluru</span>
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
    </section>
</main>

@endsection