@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{route('halaman.index')}}" class="btn btn-secondary">
        << kembali</a>
    </div>
    <form action="{ {route('halaman.store')}}" method="POST">

        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text"
            class="form-control" name="nama" id="nama" aria-describedby="helpId" placeholder="Nama">  
        </div>
        <div class="mb-3">
            <strong>NIM:</strong>
            <input type="text" name="nim" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <strong>Tanggal Lahir:</strong>
            <input type="date" name="tanggal_lahir" class="form-control" placeholder="">
        </div>
        <div class="mb-3">
            <strong>NO HP:</strong>
            <input type="text" name="no_hp" class="form-control" >
        </div>
        <div class="mb-3">
            <strong>Email:</strong>
            <input type="text" name="email" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" rows="5"></textarea>  
        </div>
        <div class="mb-3">
            <strong>Image:</strong>
            <input type="file" name="image" class="form-control" >
        </div>

        <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>


    </form>
@endsection