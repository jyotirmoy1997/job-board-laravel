@props(['listing'])

<?php

    $postDate = new DateTime($listing->created_at->toDateTimeString());
    $currentDate = new DateTime();

    $dayDiff = $currentDate->diff($postDate)->days;

?>

<div>
    <span><i class="fa-solid fa-clock"></i></span>
    <span>
        @if($dayDiff === 0)
            Today
        @else
            {{$dayDiff}}d ago
        @endif
    </span>
</div>