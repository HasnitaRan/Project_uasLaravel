@extends('app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Anggota Baru Penerimaan Calon Anggota HMPTI 2023 </h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-success" href="{{ url('create') }}"> Create New Anggota</a>
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
            <th>Nama</th>
            <th>NIM</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>No HP</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Nilai Tes</th>
            <th>Nilai Interview</th>
            <th>IPK</th>
            <th>Rangkap Jabatan</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($anggotas as $anggota)
        <tr>
            <td>{{ ++$i }}</td> 
            <td>{{ $anggota->nama }}</td>
			<td>{{ $anggota->nim }}</td>
			<td>{{ $anggota->jenis_kelamin }}</td>
			<td>{{ $anggota->tanggal_lahir }}</td>
			<td>{{ $anggota->no_hp }}</td>
            <td>{{ $anggota->email }}</td>
			<td>{{ $anggota->alamat }}</td>
            <td>{{ $anggota->nilai_tes }}</td>
            <td>{{ $anggota->nilai_interview }}</td>
            <td>{{ $anggota->ipk }}</td>
            <td>{{ $anggota->rangkap_jabatan }}</td>
            <td><img src="/images/{{ $anggota->image }}" width="100px"></td>
            <td>
                <form action="{{ route('destroy',$anggota->id) }}" method="POST">
      
                    <a class="btn btn-info" href="{{ route('show',$anggota->id) }}">Show</a>
       
                    <a class="btn btn-primary" href="{{ route('edit',$anggota->id) }}">Edit</a>
      
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
     
    {!! $anggotas->links() !!}
 
@endsection