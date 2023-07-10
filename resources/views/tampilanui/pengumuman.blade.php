@include('layouts-mhs.header')

@include('layouts-mhs.navbar')
        
        <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-5">
                                <span class="section-heading-upper">Hasil Pengumuman Lolos Seleksi Penerimaan Anggota Baru </span>
                                <span class="section-heading-lower">HMPTI 2023</span>
                            </h2>
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


                            
                            <p class="address mb-5">
                                <em>
                                    <strong>Jl. Mataram No.9</strong>
                                    <br />
                                    Pesurungan Lor, Tegal, Jawa Tengah
                                </em>
                            </p>
                            <p class="mb-0">
                                <small><em>Contact Person</em></small>
                                <br />
                                (62) 876-6765-8468 (HasnitaRan)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        @include('layouts-mhs.footer')
