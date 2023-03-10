

<?php $__env->startSection('title'); ?>
    Data Diri
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    
    
    / Data Diri
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    Data Diri
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo form_open(base_url() . 'user/data_diri/bkal/add/simpan'); ?>

    <input type="hidden" id="nik" name="nik" value="<?= $CI->uri->segment(5) ?>">
    <div class="row">
        <div class="col md-12">
            <div class="card">
                <div class="card-header bg-primary text-light">Form Data Penerima</div>

                <div class="card-body">
                            
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="nim" class="control-label">NIM</label>
                                <input type="text" class="form-control" id="nim" name="nim" placeholder="Cth : 2017888777">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama_lengkap" class="control-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="program" class="control-label">Program</label>
                                <select class="form-control" name="program" id="program">
                                    <option value="">-- Silahkan Pilih Program --</option>
                                    <?php $__currentLoopData = $program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item['program_id']); ?>" <?php echo e($item['program_id'] == $item['program_id']); ?>><?php echo e($item['nama']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="prodi" class="control-label">Program Studi</label>
                                <select class="form-control" name="prodi" id="prodi">
                                    <option value="">-- Silahkan Pilih Program Studi --</option>
                                    <?php $__currentLoopData = $program_studi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item['prodi_id']); ?>" <?php echo e($item['prodi_id'] == $item['prodi_id']); ?>><?php echo e($item['nama']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat_lahir" class="control-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="">
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
                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="">
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="status" class="control-label">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="">-- Silahkan Pilih Status --</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group text-right mb-0">
        <button class="btn btn-primary waves-effect waves-light" type="submit">
            Simpan
        </button>
        <button href="<?php echo e(base_url('admin/master_data/bkal')); ?>" class="btn btn-secondary waves-effect ml-1">
            Batal
        </button>
    </div>
<?php echo form_close(); ?>

    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simbea\application\modules\simbe\views/user/data_diri/data_diri.blade.php ENDPATH**/ ?>