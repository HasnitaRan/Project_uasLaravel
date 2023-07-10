@extends('layouts-admin.master')
@include('layouts-admin.navbar')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Calon Anggota HMPTI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Calon Anggota</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Calon Anggota</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                
                <a href="/dashboard/mahasiswa/create" class="btn btn-success mb-3">Tambah Data</a>
                <table class="table table-bordered">
                <thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Nomer</th>
						<th>Nama</th>
						<th>NIM</th>
						<th>Jenis Kelamin</th>
						<th>Tanggal Lahir</th>
						<th>Nomer Handphone</th>
						<th>Alamat</th>
            <th>Nilai Tes</th>
            <th>Nilai Interview</th>
            <th>IPK</th>
            <th>Rangkap Jabatan</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($mahasiswas as $mahasiswa)
					<tr>
						<td>
							<span class="customaha$mahasiswa-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $mahasiswa->nama }}</td>
						<td>{{ $mahasiswa->nim }}</td>
						<td>{{ $mahasiswa->jenis_kelamin }}</td>
						<td>{{ $mahasiswa->tanggal_lahir }}</td>
						<td>{{ $mahasiswa->no_hp }}</td>
						<td>{{ $mahasiswa->alamat }}</td>
            <td>{{ $mahasiswa->nilai_tes }}</td>
            <td>{{ $mahasiswa->nilai_interview }}</td>
            <td>{{ $mahasiswa->ipk }}</td>
            <td>{{ $mahasiswa->rangkap_jabatan }}</td>
						
						<td>
							<a href="/dashboard/mahasiswa/{{ $mahasiswa->id }}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                            <form action="/dashboard/mahasiswa/{{ $mahasiswa->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin akan dihapus?')"><i class="bi bi-trash"></i> Delete</button>
                            </form>
                        </td>
					</tr>
					
					 @endforeach
				</tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>
@section('title', 'ADMIN HMPTI')