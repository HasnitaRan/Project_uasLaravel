@extends('dashboard.layout')

@section('konten')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>1</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('createpenilaian') }}" > Tambah Penilaian</a>
            </div>
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
            <th>Nim</th>
            <th>Berkas Lengkap</th>
            <th>Nilai Tes</th>
            <th>Nilai Interview</th>
            <th>IPK</th>
            <th>Rangkap Jabatan</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($datanilai as $penilaian)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $penilaian->nim }}</td>
            <td>{{ $penilaian->berkas_lengkap }}</td>
            <td>{{ $penilaian->nilai_tes }}</td>
            <td>{{ $penilaian->nilai_interview }}</td>
            <td>{{ $penilaian->ipk }}</td>
            <td>{{ $penilaian->rangkap_jabatan }}</td>
            <td>
                <form action="/dashboard/penilaian/{{$penilaian->id}}" method="POST">
     
                    
      
                    <a class="btn btn-primary" href="/dashboard/penilaian/{{ $penilaian->id }}/edit">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {{-- {!! $penilaian->links() !!} --}}
        
@endsection