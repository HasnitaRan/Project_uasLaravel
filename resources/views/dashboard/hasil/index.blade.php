@extends('dashboard.layout')

@section('konten')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>4</h2>
            </div>
            <div class="pull-right">
                {{-- <a class="btn btn-success" href=""></a> --}}
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
            <th>NIM</th>
            <th>Nama Peserta</th>
            <th>Hasil</th>
            <th>Status</th>
            
        </tr>
        @foreach ($hasil as $h)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $h->nim }}</td>
            <td>{{ $h->nama }}</td>
            <td>{{ $h->hasil }}</td>
            <td>{{ $h->status }}</td>
            
        </tr>
        @endforeach
    </table>
    
    {{-- {!! $hasil->links() !!} --}}
        
@endsection