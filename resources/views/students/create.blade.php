@extends('main')

@section('title','form tambah siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">form tambah data  siswa </h1>
           
            <form method="post" action="/students" >
            @csrf
  <div class="form-group">
    <label for="nama">nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama" placeholder="masukan nama" name="nama" value= "{{old('nama')}}">
    @error('nama')
    <div class = "invalid-feedback">{{ $message }}</div>
    @enderror
</div>
  <div class="form-group">
    <label for="nisn">nisn</label>
    <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="masukan nisn" name="nisn" value= "{{old('nisn')}}">
    @error('nisn')
    <div class = "invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="text" class="form-control" id="email" placeholder="masukan email" name="email" value= "{{old('email')}}">
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" class="form-control" id="jurusan" placeholder="masukan jurusan" name="jurusan" value= "{{old('jurusan')}}" >
  </div>
<button type="submit" class="btn btn-primary">tambah data </button>
</form>    
        
        </div>
      </div>
</div>

@endsection