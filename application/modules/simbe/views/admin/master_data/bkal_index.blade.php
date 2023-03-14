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
<!-- START PENERIMA BEASISWA -->
<div class="card-box table-responsive">
    <div class="row">
        <div class="col-md-9">
            <div class="header-title"><b>Data Penerima Beasiswa</b></div>
            <p class="sub-header">
                Mahasiswa yang mendapatkan beasiswa Universitas Pembangunan Jaya
            </p>
        </div>
        <div class="col-md-3">
            {{-- <button class="btn btn-success btn-sm waves-effect waves-light" data-toggle="modal" data-target="#add-modal"><span><i class="mdi mdi-plus"></i>Tambah Penerima</i></button> --}}
            <a href="{{ base_url('admin/master_data/bkal/add') }}" class="btn btn-success btn-sm waves-effect waves-light"><i class="mdi mdi-plus"></i>Tambah Penerima</i></a>
        </div>
    </div>
    {{-- <div class="float-right ">
    </div> --}}

    <table id="penerima" class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th style="width: 20%">Nama Lengkap</th>
                <th>Program</th>
                <th style="width: 15%">Prodi</th>
                <th>Status</th>
                <th style="width: 19%">Keterangan</th>
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
                <td>
                    <span class="badge badge-primary">
                        @if ($data->status == 'Aktif')
                            {{ 'Aktif' }}
                        @endif
                    </span>
                </td>
                <td>{{ $data->keterangan }}</td>
                <td class="text-center" style="vertical-align: middle;">

                    <a href="{{ base_url('admin/master_data/bkal/edit/'. $data->id) }}" class="m-1 btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>

                    <a href="#" class="m-1 btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus-modal"><i class="mdi mdi-trash-can"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<!-- END PENERIMA BEASISWA -->

<!-- START TIDAK AKTIF BEASISWA -->
<div class="card-box table-responsive">
    <div class="row">
        <div class="col-md-9">
            <div class="header-title"><b>Data Selesai Beasiswa</b></div>
            <p class="sub-header">
                Mahasiswa yang telah selesai mendapatkan beasiswa Universitas Pembangunan Jaya
            </p>
        </div>
    </div>
    {{-- <div class="float-right ">
    </div> --}}

    <table id="na_aktif" class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th style="width: 20%">Nama Lengkap</th>
                <th>Program</th>
                <th style="width: 15%">Prodi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php  
                $no = 1;
                foreach ($na_mahasiswa as $data) {
            ?>                
            <tr>
                <td class="text-center">{{ $no++ }}</td>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->nama_program }}</td>
                <td>{{ $data->nama_prodi }}</td>
                <td class="text-center">
                    <span class="badge badge-success">
                        @if ($data->status == 'Tidak Aktif')
                            {{ 'Selesai' }}
                        @endif
                    </span>
                </td>
                <td class="text-center" style="vertical-align: middle;">

                    <a href="{{ base_url('admin/master_data/bkal/edit/'. $data->id) }}" class="m-1 btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>

                    <a href="#" class="m-1 btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus-modal"><i class="mdi mdi-trash-can"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<!-- END TIDAK AKTIF BEASISWA -->
    
@endsection

@section('script')

    <script>
        $(document).ready(function () {
        $('#penerima').DataTable();
    });
    
    $(document).ready(function () {
        $('#na_aktif').DataTable();
    });
    

    </script>
@endsection