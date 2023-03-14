

<?php $__env->startSection('title'); ?>
    
    Dosen
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    
    
    / Dosen PA / Breadcrumb
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    Dosen Pembimbing Akademik
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
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
            
            
        </div>
    </div>
    

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
                <td class="text-center"><?php echo e($no++); ?></td>
                <td><?php echo e($data->nim); ?></td>
                <td><?php echo e($data->nama); ?></td>
                <td><?php echo e($data->status_mahasiswa); ?></td>
                <td class="text-center">
                    <?php 
                            if($data->status_dosen == '' || $data->status_dosen == '0'){
                                echo "<span class='badge badge-danger'>Belum Disetujui</span>";
                            } else {
                                echo "<span class='badge badge-success'>Disetujui</span>";
                            }
                        ?>
                    
                </td>
                <td class="text-center" style="vertical-align: middle;">

                    <a href="<?php echo e(base_url('admin/master_data/bkal/edit/'. $data->id)); ?>" class="m-1 btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>

                    <a href="#" class="m-1 btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus-modal"><i class="mdi mdi-trash-can"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<!-- END BUTUH APPROVAL BEASISWA -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $(document).ready(function () {
        $('#penerima').DataTable();
    });

    $(document).ready(function () {
        $('#na_aktif').DataTable();
    });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simbea\application\modules\simbe\views/admin/master_data/dosenpa_index.blade.php ENDPATH**/ ?>