@extends("layouts.main")

@section("content")
    <h1>Detail Buku</h1>
    <p>Judul buku: {{$book->nama}}</p>
    <p>Pengarang Buku : {{$book->merk}}</p>
    <p>Harga Buku : {{$book->harga}}</p>        
    <p>Release : {{$book->release}}</p>        
    <a class="btn btn-primary" href="/book">back</a>
@endsection