@extends('main')

@section('title','daftar siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 >Daftar siswa </h1>

            <a href="/students/create" class="btn btn-primary my-3">tambah siswa</a>

            @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<ul class="list-group">
    @foreach( $students as $student)    
        <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $student->nama}}
        <a href="/students/{{$student->id}}" class="badge badge-info">detail</a>
         </li>
    @endforeach
</ul>
        </div>
      </div>
</div>

@endsection