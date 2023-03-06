

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
                    <th style="width: 25%">Nama Lengkap</th>
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
                        <button class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal"><i class="mdi mdi-pencil"></i></button>
                        
                        <a href="#" class="m-1 btn btn-danger btn-sm"><i class="mdi mdi-trash-can"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- START MODAL EDIT -->
    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mt-0">Modal Content is Responsive</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Name</label>
                                <input type="text" class="form-control" id="field-1" placeholder="John">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Surname</label>
                                <input type="text" class="form-control" id="field-2" placeholder="Doe">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Address</label>
                                <input type="text" class="form-control" id="field-3" placeholder="Address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-4" class="control-label">City</label>
                                <input type="text" class="form-control" id="field-4" placeholder="Boston">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-5" class="control-label">Country</label>
                                <input type="text" class="form-control" id="field-5" placeholder="United States">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Zip</label>
                                <input type="text" class="form-control" id="field-6" placeholder="123456">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <label for="field-7" class="control-label">Personal Info</label>
                                <textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL EDIT -->
    
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    

    <script>
        $(document).ready(function () {
    $('#penerima').DataTable();
    });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simbea\application\modules\simbe\views/admin/master_data/index.blade.php ENDPATH**/ ?>