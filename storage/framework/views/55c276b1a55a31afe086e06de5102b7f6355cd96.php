<?php $__env->startSection('content'); ?>
<div class="row-fluid">

    <div class="span12">
        <div class="widget-box">
            <div class="widget-content nopadding">
                <table class="table table-bordered table-striped with-check">
                <thead>
                <tr>
                    <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox" /></th>
                    <th><?php echo e(__('backend.name')); ?></th>
                    <th><?php echo e(__('backend.status')); ?></th>
                    <th><?php echo e(__('backend.parent')); ?></th>
                    <th class="taskOptions"><?php echo e(__('backend.action')); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td><?php echo e($item->name); ?></td>
                        <td>Row 2</td>
                        <td>Row 3</td>
                        <td class="taskOptions">
                            <a href="#" class="tip-top" data-original-title="Update">
                                <i class="icon-wrench"></i>
                            </a>
                            <a href="#" class="tip-top" data-original-title="Delete">
                                <i class="icon-remove"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
            </div>
        </div>
        <div class="pagination">
            <ul>
                <li><a href="#">Prev</a></li>
                <li class="active"> <a href="#">1</a> </li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>