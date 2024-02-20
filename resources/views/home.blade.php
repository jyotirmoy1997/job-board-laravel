<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$heading}}</h1>
    @if (count($listings) > 0)
        @foreach ($listings as $listing)
            <h2>{{$listing['title']}}</h2>
            <p>{{$listing['description']}}</p>
            <p>{{$listing['salary']}}</p>
        @endforeach
    @else
        <h2>No Listing</h2>
    @endif
    
    {{-- <script type="text/javascript" src="{{asset('home.js')}}"></script> --}}
</body>
</html>