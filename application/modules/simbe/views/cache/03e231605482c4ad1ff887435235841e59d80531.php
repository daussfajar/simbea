

<?php $__env->startSection('title'); ?>
    BKAL
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    
    
    / BKAL / Edit
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    Biro Kemahasiswaan Alumni
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php echo form_open(base_url() . $CI->uri->segment(1) . '/buku-induk-edit/' . $CI->uri->segment(3) . '/simpan'); ?>

<input type="hidden" id="nik" name="nik" value="<?= $CI->uri->segment(5) ?>">
     <div class="row">
          <div class="col md-12">
               <div class="card">
                    <div class="card-header bg-primary text-light">Ubah Data Penerima</div>

                    <div class="card-body">
                         <?php $__currentLoopData = $e_mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             
                         <div class="row">
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label for="nim" class="control-label">NIM</label>
                                   <input type="text" class="form-control" id="nim" value="<?php echo e($d->id); ?>">
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label for="nama_lengkap" class="control-label">Nama Lengkap</label>
                                   <input type="text" class="form-control" id="nama_lengkap" value="<?php echo e($d->nama); ?>">
                              </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label for="program" class="control-label">Program</label>
                                   <select class="form-control" name="program" id="program">
                                        <?php $__currentLoopData = $program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option value="<?php echo e($item['program_id']); ?>" <?php echo e($d->program_id == $item['program_id'] ? ' selected' : ''); ?>><?php echo e($item['nama']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </select>
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label for="prodi" class="control-label">Program Studi</label>
                                   <select class="form-control" name="prodi" id="prodi">
                                        <?php $__currentLoopData = $program_studi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option value="<?php echo e($item['prodi_id']); ?>" <?php echo e($d->prodi_id == $item['prodi_id'] ? ' selected' : ''); ?>><?php echo e($item['nama']); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </select>
                              </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label for="tempat_lahir" class="control-label">Tempat Lahir</label>
                                   <input type="text" class="form-control" id="tempat_lahir" value="<?php echo e($d->tempat_lahir); ?>">
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                   <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                                   <input type="date" class="form-control" id="tanggal_lahir" value="<?php echo e($d->tanggal_lahir); ?>">
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
                                        
                                        
                                   </select>
                              </div>
                              </div>
                         </div>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
               </div>
          </div>
     </div>

     <div class="form-group text-right mb-0">
          <button class="btn btn-primary waves-effect waves-light" type="submit">
              Simpan
          </button>
          <button type="reset" class="btn btn-secondary waves-effect ml-1">
              Batal
          </button>
     </div>
<?php echo form_close(); ?>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simbea\application\modules\simbe\views/admin/master_data/bkal_edit.blade.php ENDPATH**/ ?>