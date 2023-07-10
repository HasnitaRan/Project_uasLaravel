@extends('dashboard.layout')

@section('konten')

    <p class="card-title">Recent Purchases</p>
    <div class="pb-3"><a href="{{ url('create') }}" class="btn btn-primary">+ Tambah Data</a></div>
    <div class="table-responsive">
        <table class="table table-striped" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    {{-- <th>Nilai Tes</th>
                    <th>Nilai Interview</th>
                    <th>IPK</th>
                    <th>Rangkap Jabatan</th> --}}
                    <th>Image</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($anggotas as $anggota)
        <tr>
            <td>{{ $loop->iteration }}</td> 
            <td>{{ $anggota->nama }}</td>
			<td>{{ $anggota->nim }}</td>
			<td>{{ $anggota->jenis_kelamin }}</td>
			<td>{{ $anggota->tanggal_lahir }}</td>
			<td>{{ $anggota->no_hp }}</td>
            <td>{{ $anggota->email }}</td>
			<td>{{ $anggota->alamat }}</td>
            {{-- <td>{{ $anggota->nilai_tes }}</td>
            <td>{{ $anggota->nilai_interview }}</td>
            <td>{{ $anggota->ipk }}</td>
            <td>{{ $anggota->rangkap_jabatan }}</td> --}}
            <td><img src="/images/{{ $anggota->image }}" width="100px"></td>
            <td>
                <a class="btn btn-primary" href="{{ route('edit',$anggota->id) }}">Edit</a>
                <form action="{{ route('destroy',$anggota->id) }}" method="POST">
      
                    <a class="btn btn-info" href="{{ route('show',$anggota->id) }}" >Show</a>
       
                    
      
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
            </thead>
        </table>
        {!! $anggotas->links() !!}
    </div>
@endsection