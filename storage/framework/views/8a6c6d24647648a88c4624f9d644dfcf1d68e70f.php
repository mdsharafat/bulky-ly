<?php $__env->startSection('header-script'); ?>
    <link href="<?php echo e(asset('css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('css/dataTables.foundation.min.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('css/jquery.dataTables.min.css')); ?>" rel="stylesheet"/>

    <style>
        .custom_row_css{
            position: absolute;
            left: 24%;
            top: 18%;
            width: 78%;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row custom_row_css">
            <div class="col-md-12">
                <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">


                        <ul class="list-inline">
                            <li>
                                <a class="btn btn-primary" href="/admin/manage-user/create"> Create Account</a>
                            </li>
                            <li>
                                <form>
                                    <input class="form-control" type="text" name="search" placeholder="Search">
                                    <button class="pull-right" style=" position: relative; margin-top: -27px; border: 0px; background: 0px;  padding-right: 12px; outline: none !important;"> <i class="glyphicon glyphicon-search"></i> </button>
                                </form>
                            </li>
                        </ul>

                        <table class="table table-bordered" id="bufferPosting">
                            <thead>
                                <tr>
                                    <th>Group Name</th>
                                    <th>Group Type</th>
                                    <th>Account Name</th>
                                    <th>Post Text</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($row->groupInfo->name); ?></td>
                                        <td><?php echo e($row->groupInfo->type); ?></td>
                                        <td><?php echo e($row->accountInfo->user->name); ?></td>
                                        <td><?php echo e($row->post_text); ?></td>
                                        <td><?php echo e($row->sent_at); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                            <?php echo e($data->links()); ?>



                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer-script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('/js/jquery-1.12.3.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('/js/jquery.dataTables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bufferPosting').DataTable({
                "searching": true,
                "paging": false,
                "ordering": true
            });
        } );
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>