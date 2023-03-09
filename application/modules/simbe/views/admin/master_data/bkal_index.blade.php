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

                    <a href="{{ base_url('admin/master_data/bkal/edit/'.$data->id) }}" class="m-1 btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>

                    <a href="#" class="m-1 btn btn-danger btn-sm" data-toggle="modal" data-target="#edit-modal"><i class="mdi mdi-trash-can"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- START MODAL EDIT -->
<div id="edit-modal<?= $data->id ?>" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0">Tambah Data Penerima</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nim" class="control-label">NIM</label>
                            <input type="text" class="form-control" id="nim" value="{{ $data->id }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_lengkap" class="control-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" placeholder="Doe">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="program" class="control-label">Program</label>
                            <select class="form-control" name="program" id="program">
                                @foreach ($program as $item)
                                    <option value="{{ $item['program_id'] }}" {{ $data->program_id == $item['program_id'] ? ' selected' : '' }}>{{ $item['nama'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="prodi" class="control-label">Program Studi</label>
                            <select class="form-control" name="prodi" id="prodi">
                                @foreach ($program_studi as $item)
                                    <option value="{{ $item['prodi_id'] }}" {{ $data->prodi_id == $item['prodi_id'] ? ' selected' : '' }}>{{ $item['nama'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tempat_lahir" class="control-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" placeholder="Doe">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="provinsi" class="control-label">Provinsi</label>
                            <select class="form-control" name="provinsi" id="provinsi">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kota" class="control-label">Kota</label>
                            <select class="form-control" name="kota" id="kota">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kelurahan" class="control-label">Kelurahan</label>
                            <select class="form-control" name="kelurahan" id="kelurahan">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kecamatan" class="control-label">Kecamatan</label>
                            <select class="form-control" name="kecamatan" id="kecamatan">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="alamat" class="control-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="status" class="control-label">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">Personal Info</label>
                            <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL EDIT -->

<!-- START MODAL ADD -->
<div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0">Tambah Data Penerima</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nim" class="control-label">NIM</label>
                            <input type="text" class="form-control" id="nim" placeholder="Cth : 2023001001">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama_lengkap" class="control-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" placeholder="Doe">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="program" class="control-label">Program</label>
                            <select class="form-control" name="program" id="program">
                                @foreach ($program as $item)
                                    <option value="{{ $item['program_id'] }}" {{ $data->program_id == $item['program_id'] ? ' selected' : '' }}>{{ $item['nama'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="prodi" class="control-label">Program Studi</label>
                            <select class="form-control" name="prodi" id="prodi">
                                @foreach ($program_studi as $item)
                                    <option value="{{ $item['prodi_id'] }}" {{ $data->prodi_id == $item['prodi_id'] ? ' selected' : '' }}>{{ $item['nama'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tempat_lahir" class="control-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" placeholder="Doe">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="provinsi" class="control-label">Provinsi</label>
                            <select class="form-control" name="provinsi" id="provinsi">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kota" class="control-label">Kota</label>
                            <select class="form-control" name="kota" id="kota">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kelurahan" class="control-label">Kelurahan</label>
                            <select class="form-control" name="kelurahan" id="kelurahan">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="kecamatan" class="control-label">Kecamatan</label>
                            <select class="form-control" name="kecamatan" id="kecamatan">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="alamat" class="control-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="status" class="control-label">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="Aktif">Aktif</option>
                                <option value="Tidak Aktif">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">Personal Info</label>
                            <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL ADD -->
    
    
@endsection

@section('script')

    

    <script>
        $(document).ready(function () {
    $('#penerima').DataTable();
    });
    </script>
@endsection