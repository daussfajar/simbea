

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
    <div class="card-box table-responsive">
        <div class="header-title"><b>Data Penerima Beasiswa</b></div>
        <p class="sub-header">
            Mahasiswa yang mendapatkan beasiswa Universitas Pembangunan Jaya
        </p>
        

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
                    <td class="text-center"><?php echo e($no++); ?></td>
                    <td><?php echo e($data->id); ?></td>
                    <td><?php echo e($data->nama); ?></td>
                    <td><?php echo e($data->nama_program); ?></td>
                    <td><?php echo e($data->nama_prodi); ?></td>
                    <td><?php echo e($data->status); ?></td>
                    <td class="text-center" style="vertical-align: middle;">
                        <a href="#" class="m-1 btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
                        <a href="#" class="m-1 btn btn-danger btn-sm"><i class="mdi mdi-trash-can"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    

    <script>
        $(document).ready(function () {
    $('#penerima').DataTable();
    });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simbea\application\modules\simbe\views/admin/master_data/index.blade.php ENDPATH**/ ?>