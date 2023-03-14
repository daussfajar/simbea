@extends('layouts.master')

@section('title')
    {{-- {{ empty($data['title']) ? '' : $data['title'] }} --}}
    Dosen
@endsection

@section('breadcrumb')
    {{-- {!! empty($data['breadcrumb']) ? '' : $data['breadcrumb'] !!} --}}
    
    / Dosen PA / Breadcrumb
@endsection

@section('page-title')
    Dosen Pembimbing Akademik
@endsection

@section('css')
    
@endsection

@section('content')
<!-- START BUTUH APPROVAL BEASISWA -->
<div class="card-box table-responsive">
    <div class="row">
        <div class="col-md-9">
            <div class="header-title"><b>Data Approval Beasiswa</b></div>
            <p class="sub-header">
                Mahasiswa yang membutuhkan approval Dosen Universitas Pembangunan Jaya
            </p>
        </div>
        <div class="col-md-3">
            {{-- <button class="btn btn-success btn-sm waves-effect waves-light" data-toggle="modal" data-target="#add-modal"><span><i class="mdi mdi-plus"></i>Tambah Penerima</i></button> --}}
            {{-- <a href="{{ base_url('admin/master_data/bkal/add') }}" class="btn btn-success btn-sm waves-effect waves-light"><i class="mdi mdi-plus"></i>Tambah Penerima</i></a> --}}
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
                <th style="width: 15%">Status Approval</th>
                <th>Status</th>
                <th style="width: 18%">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php  
                $no = 1;
                foreach ($d_approval as $data) {
            ?>                
            <tr>
                <td class="text-center">{{ $no++ }}</td>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->status_mahasiswa }}</td>
                <td class="text-center">
                    <?php 
                            if($data->status_dosen == '' || $data->status_dosen == '0'){
                                echo "<span class='badge badge-danger'>Belum Disetujui</span>";
                            } else {
                                echo "<span class='badge badge-success'>Disetujui</span>";
                            }
                        ?>
                    {{-- <span class="badge badge-success">
                        @if ($data->status_dosen == '' || '0')
                            {{ 'Belum Disetujui', 'Disetujui' }}
                        @endif
                        
                    </span> --}}
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
<!-- END BUTUH APPROVAL BEASISWA -->

@endsection

@section('js')
    <script>
        $(document).ready(function () {
        $('#penerima').DataTable();
    });

    $(document).ready(function () {
        $('#na_aktif').DataTable();
    });
    </script>
@endsection