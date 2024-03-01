
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
    <x-job-listings :listings="$listings" />

    {{-- Pagination --}}
    {{-- <div class="pagination-wrapper">
        {{ $listings->links()}}
    </div> --}}
    
</main>

@endsection