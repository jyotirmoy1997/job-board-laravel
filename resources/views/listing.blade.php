@extends('layout')

@section('listing')

<!-- Listing Detail -->
<main class="job-page-main">
    <header class="job-page-det-heading-wrapper">
        <div>
            <img src="{{ asset('images/apple.png')}}" alt="">
        </div>
        <div>
            <h1>Software Engineer</h1>
            <h3>Apple Inc</h3>
        </div>
    </header>

    <section>
        <div class="job-page-det">
            <h3>Job Description</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, id quis magnam excepturi neque voluptatibus nobis totam vitae placeat nesciunt distinctio dolorem at natus quam dolorum autem facilis. Illum, eligendi?</p>
            <h3>Job Requirements</h3>
            <p>Bachelors degree in Computer Science or related field, 3+ years of software development experience</p>
            <h3>Benefits</h3>
            <p>Healthcare, 401(k) matching, flexible work hours</p>
        </div>
    </section>

    <section class="job-listing-det-info-wrapper">
        <div class="job-page-det-info">
            <div class="job-page-det-info-el"><strong>Salary:</strong><span> &#8377; 10-12 LPA</span></div>
            <div class="job-page-det-info-el"><strong>Location:</strong><span> Bengaluru</span></div>
            <div class="job-page-det-info-el"><strong>Tags:</strong><span> React.js Next.js, JavaScript</span></div>
        </div>
        <div class="job-listing-update-wrapper">
            <button id="edit-listing-btn">Edit Listing</button>
            <button id="delete-listing-btn">Delete Listing</button>
        </div>
        
    </section>

    <a href="mailto:razorjones90@gmail.com" class="job-apply-btn">
        <button >
            Apply Now
        </button>
    </a>
    
</main>


@endsection