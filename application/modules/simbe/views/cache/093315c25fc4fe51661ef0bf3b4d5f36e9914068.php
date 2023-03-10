

<?php $__env->startSection('title'); ?>
    BKAL
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    
    
    / BKAL
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    Biro Kemahasiswaan Alumni
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
            
            <a href="<?php echo e(base_url('admin/master_data/bkal/add')); ?>" class="btn btn-success btn-sm waves-effect waves-light"><i class="mdi mdi-plus"></i>Tambah Penerima</i></a>
        </div>
    </div>
    

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
                <td class="text-center"><?php echo e($no++); ?></td>
                <td><?php echo e($data->id); ?></td>
                <td><?php echo e($data->nama); ?></td>
                <td><?php echo e($data->nama_program); ?></td>
                <td><?php echo e($data->nama_prodi); ?></td>
                <td>
                    <span class="badge badge-primary">
                        <?php if($data->status == 'Aktif'): ?>
                            <?php echo e('Aktif'); ?>

                        <?php endif; ?>
                    </span>
                </td>
                <td><?php echo e($data->keterangan); ?></td>
                <td class="text-center" style="vertical-align: middle;">

                    <a href="<?php echo e(base_url('admin/master_data/bkal/edit/'. $data->id)); ?>" class="m-1 btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>

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
    

    <table id="na_aktif" class="table table-striped table-bordered dt-responsive " style="border-collapse: collapse; border-spacing: 0; width: 100%">
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
                foreach ($na_mahasiswa as $data) {
            ?>                
            <tr>
                <td class="text-center"><?php echo e($no++); ?></td>
                <td><?php echo e($data->id); ?></td>
                <td><?php echo e($data->nama); ?></td>
                <td><?php echo e($data->nama_program); ?></td>
                <td><?php echo e($data->nama_prodi); ?></td>
                <td class="text-center">
                    <span class="badge badge-success">
                        <?php if($data->status == 'Tidak Aktif'): ?>
                            <?php echo e('SELESAI'); ?>

                        <?php endif; ?>
                    </span>
                </td>
                <td><?php echo e($data->keterangan); ?></td>
                <td class="text-center" style="vertical-align: middle;">

                    <a href="<?php echo e(base_url('admin/master_data/bkal/edit/'. $data->id)); ?>" class="m-1 btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>

                    <a href="#" class="m-1 btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus-modal"><i class="mdi mdi-trash-can"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<!-- END TIDAK AKTIF BEASISWA -->
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <script>
        $(document).ready(function () {
        $('#penerima').DataTable();
    });
    
    $(document).ready(function () {
        $('#na_aktif').DataTable();
    });
    

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simbea\application\modules\simbe\views/admin/master_data/bkal_index.blade.php ENDPATH**/ ?>