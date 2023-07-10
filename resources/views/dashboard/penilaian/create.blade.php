@extends('dashboard.layout')

@section('konten')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Penilaian</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ url('dashboard/halaman') }}"> Back</a>
        </div>
    </div>
</div>
      
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="/storepenilaian" method="POST" enctype="multipart/form-data">
    @csrf
     
     <div class="row">
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIM:</strong>
                <select name="nim" id="" class="form-control">
                    @foreach ($anggota as $ang)
                        <option value="{{ $ang->nim }}">{{ $ang->nim }} - {{ $ang->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Berkas Lengkap:</strong>
                <input type="text" name="berkas_lengkap" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengetahuan:</strong>
                <input type="text" name="nilai_tes" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Interview:</strong>
                <input type="text" name="nilai_interview" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>IPK:</strong>
                <input type="text" name="ipk" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rangkap Jabatan:</strong>
                <input type="text" name="rangkap_jabatan" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>


    </div>
      
</form>
@endsection