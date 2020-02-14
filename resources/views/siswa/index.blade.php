@extends('main')

@section('title','daftar siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-5">
            <h1 >Hallo,rio ramadan </h1>
            
            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nisn</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                 @foreach($siswa as $mhs) 
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->nisn}}</td>
                    <td>{{$mhs->email}}</td>
                    <td>{{$mhs->jurusan}}</td>
                    <td>
                        <a href="#" clxass="badge badge-succes">edit</a>
                        <br>
                        <a href="#" class="badge badge-danger">hapus</a>
                    </td>
                </tr>
                    @endforeach
            </tbody>
            </table>
            
        </div>
      </div>
</div>

@endsection