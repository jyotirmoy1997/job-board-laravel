@props(['message'])

@if (Session::has('message'))
    <div class="flash-message-container" id="flash">
        <p>{{ $message }}</p>
    </div>
@endif
