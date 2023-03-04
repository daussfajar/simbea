@extends('layouts.master')

@section('title')
    BKAL
@endsection

@section('breadcrumb')
    {{-- {!! empty($data['breadcrumb']) ? '' : $data['breadcrumb'] !!} --}}
    
    / BKAL
@endsection

@section('page-title')
    Biro Kemahasiswaan Alumni
@endsection

@section('css')
    
@endsection

@section('content')
    <div class="card-box table-responsive">
        <div class="header-title"><b>Data Penerima Beasiswa</b></div>
        <p class="sub-header">
            Mahasiswa yang mendapatkan beasiswa Universitas Pembangunan Jaya
        </p>
        {{-- <div class="float-right ">
            <a href="" class="btn btn-success btn-sm"><span><i class="mdi mdi-plus"></i></span>Tambah Penerima</a>
        </div> --}}

        <table id="penerima" class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th style="width: 20%">Nama Lengkap</th>
                    <th>Program</th>
                    <th>Prodi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php  
                    $no = 1;
                    foreach ($p_mahasiswa as $data) {
                ?>                
                <tr>
                    <td class="text-center">{{ $no++ }}</td>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->nama_program }}</td>
                    <td>{{ $data->nama_prodi }}</td>
                    <td>{{ $data->status }}</td>
                    <td class="text-center" style="vertical-align: middle;">
                        <a href="#" class="m-1 btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
                        <a href="#" class="m-1 btn btn-danger btn-sm"><i class="mdi mdi-trash-can"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    
    
@endsection

@section('script')

    

    <script>
        $(document).ready(function () {
    $('#penerima').DataTable();
    });
    </script>
@endsection