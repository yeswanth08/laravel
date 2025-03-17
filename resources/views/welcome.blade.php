<h1>
    welcome {{ $name }} !!! 
</h1>

<form action="{{route('home')}}" method="get">
    <button type="submit">Home</button>
</form>

<button onclick="window.location.href='{{route('home')}}'">Home</button>