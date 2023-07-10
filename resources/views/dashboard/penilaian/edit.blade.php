@extends('dashboard.layout')

@section('konten')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Penilaian</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/penilaian"> Back</a>
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
    
    <form action="/dashboard/penilaian/{{$penilaian->id}}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $penilaian->nama }}" class="form-control" >
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nim:</strong>
                    <input type="text" name="nim" value="{{ $penilaian->nim }}" class="form-control" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Berkas Lengkap:</strong>
                    <input type="text" name="berkas_lengkap" value="{{ $penilaian->berkas_lengkap }}" class="form-control" >
                   
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nilai Tes:</strong>
                    <input type="text" name="nilai_tes" value="{{ $penilaian->nilai_tes }}" class="form-control" >
                   
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nilai Interview:</strong>
                    <input type="text" name="nilai_interview" value="{{ $penilaian->nilai_interview }}" class="form-control" >
                   
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>IPK:</strong>
                    <input type="text" name="ipk" value="{{ $penilaian->ipk }}" class="form-control">
                  
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rangkap Jabatan:</strong>
                    <input type="text" name="rangkap_jabatan" value="{{ $penilaian->rangkap_jabatan }}" class="form-control" >
                   
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
@endsection