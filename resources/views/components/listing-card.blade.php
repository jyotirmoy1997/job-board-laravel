@props(['listing'])


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

        <x-job-tags :tags="$listing->tags" />

    </div>
    <div class="loc-det">
        <div class="job-card-salary">
            <span>&#8377;</span><span>{{ $listing->salary }} LPA</span>
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
            <x-date-diff :listing="$listing" />
        </div>
    </div >
</div>