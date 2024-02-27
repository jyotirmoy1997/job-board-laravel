@props(['tags'])

<?php

    $jobTags = explode(', ', $tags)

?>

<div class="job-card-tags-wrapper">

    @foreach($jobTags as $jobTag)
        <h6 class="job-card-tags">{{ $jobTag }}</h6>
    @endforeach

</div>