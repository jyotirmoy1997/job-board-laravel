<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listing Page</h1>
    @if (isset($listing))
        <h2>{{$listing['title']}}</h2>
        <p>{{$listing['description']}}</p>
        <p>{{$listing['salary']}}</p>
    @else
        <h2>Listing Not Found</h2>
    @endif
    
    {{-- <script type="text/javascript" src="{{asset('home.js')}}"></script> --}}
</body>
</html>