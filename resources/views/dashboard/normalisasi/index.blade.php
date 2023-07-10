@extends('dashboard.layout')

@section('konten')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>3</h2>
            </div>
            {{-- <div class="pull-right">
                <a class="btn btn-success" > Tambah Normalisasi</a>
            </div> --}}
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Berkas Lengkap</th>
            <th>Nilai Tes</th>
            <th>Nilai Interview</th>
            <th>IPK</th>
            <th>Rangkap Jabatan</th>

            
        </tr>
        @foreach ($normalisasi as $norm)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $norm->nim }}</td>
            <td>{{ $norm->berkas_lengkap }}</td>
            <td>{{ $norm->nilai_tes }}</td>
            <td>{{ $norm->nilai_interview }}</td>
            <td>{{ $norm->ipk }}</td>
            <td>{{ $norm->rangkap_jabatan }}</td>
           
        </tr>
        @endforeach
    </table>
    
    {{-- {!! $normalisasi->links() !!} --}}
        
@endsection