@extends('layouts.master')

@section('title')
    BKAL
@endsection

@section('breadcrumb')
    {{-- {!! empty($data['breadcrumb']) ? '' : $data['breadcrumb'] !!} --}}
    
    / BKAL / Edit
@endsection

@section('page-title')
    Biro Kemahasiswaan Alumni
@endsection

@section('css')
    
@endsection

@section('content')

{!! form_open(base_url() . 'admin/master_data/bkal/edit/' . $CI->uri->segment(5) . '/simpan') !!}
<input type="hidden" id="nik" name="nik" value="<?= $CI->uri->segment(5) ?>">
     <div class="row">
          <div class="col md-12">
               <div class="card">
                    <div class="card-header bg-primary text-light">Ubah Data Penerima</div>

                    <div class="card-body">
                         @foreach ($e_mahasiswa as $d)
                             
                         <div class="row">
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label for="nim" class="control-label">NIM</label>
                                   <input type="text" class="form-control" id="nim" name="nim" value="{{ $d->id }}">
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label for="nama_lengkap" class="control-label">Nama Lengkap</label>
                                   <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{ $d->nama }}" style="text-transform: uppercase;">
                              </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label for="program" class="control-label">Program</label>
                                   <select class="form-control" name="program" id="program">
                                        @foreach ($program as $item)
                                             <option value="{{ $item['program_id'] }}" {{ $d->program_id == $item['program_id'] ? ' selected' : '' }}>{{ $item['nama'] }}</option>
                                        @endforeach
                                   </select>
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label for="prodi" class="control-label">Program Studi</label>
                                   <select class="form-control" name="prodi" id="prodi">
                                        @foreach ($program_studi as $item)
                                             <option value="{{ $item['prodi_id'] }}" {{ $d->prodi_id == $item['prodi_id'] ? ' selected' : '' }}>{{ $item['nama'] }}</option>
                                        @endforeach
                                   </select>
                              </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label for="tempat_lahir" class="control-label">Tempat Lahir</label>
                                   <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{ $d->tempat_lahir }}">
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                                   <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $d->tanggal_lahir }}">
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
                                   <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $d->alamat }}">
                              </div>
                              </div>
                              <div class="col-md-3">
                              <div class="form-group">
                                   <label for="status" class="control-label">Status</label>
                                   <select class="form-control" name="status" id="status">
                                        <option value="Aktif"<?= $d->status == 'Aktif' ? ' selected' : '' ?>>Aktif</option>
                                        <option value="Tidak Aktif"<?= $d->status == 'Tidak Aktif' ? ' selected' : '' ?>>Tidak Aktif</option>
                                   </select>
                              </div>
                              </div>
                         </div>
                         @endforeach
                    </div>
               </div>
          </div>
     </div>

     <div class="form-group text-right mb-0">
          <button class="btn btn-primary waves-effect waves-light" type="submit">
              Simpan
          </button>
          <button href="{{ base_url('admin/master_data/bkal') }}" class="btn btn-secondary waves-effect ml-1">
              Batal
          </button>
     </div>
{!! form_close(); !!}

@endsection

@section('script')

@endsection