@extends("layouts.main")

@section("content")
    <h1>Detail Publisher</h1>
    <p>nama: {{$publisher->nama}}</p>
    <p>email : {{$publisher->email}}</p>
    <p>alamat : {{$publisher->alamat}}</p>            
    <a class="btn btn-primary" href="/publisher">back</a>
@endsection