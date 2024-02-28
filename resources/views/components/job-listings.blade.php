@props(['listings'])

<section class="job-section-wrapper">

    @if(count($listings->toArray()) === 0)
        <h1>No Jobs Found...</h1>

    @else

        @foreach($listings as $listing)
        
        <x-listing-card :listing="$listing" />

        @endforeach

    @endif
</section>