<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">

</head>
<body>

    <h1>BeeFlix</h1>
    <div class="container d-flex flex-column justify-content-center align-items-center mt-3">
        <div class="row" style="width: 20rem; gap: 1rem; margin:8px;">
            <img src="{{asset('image\Screenshot 2024-11-25 225701.png')}}" alt="">
            <a href="{{ route('create') }}" class="btn btn-primary">Add New Movies</a>
        </div>
        <div class="row" style="gap: 1rem; margin: 1rem">
            @foreach ($movie as $movies)
                <div class="col bg-white" style="width: 300px; height: 500px; border: 1px solid black">
                    <img src="{{ asset($movies->photo) }}" style="width:100%; height: 50%; margin-top: 10px" alt="">
                    <h1>{{$movies->title}}</h1>
                    <h3>{{$movies->genre->name}}</h3>
                    <p>{{$movies->description}}</p>
                    <h4>{{$movies->publish_date}}</h4>
                    <form action="/deletemovie/{{$movies->id}}" method="POST" onsubmit="return confirm('apakah anda yakin mau menghapus movie ini?')">
                        @csrf
                        
                        <button class="btn btn-primary">Delete Film</button>
                    </form>
                </div>
            @endforeach
        </div>
        {{$movie->links()}}
    </div>
</body>
</html>