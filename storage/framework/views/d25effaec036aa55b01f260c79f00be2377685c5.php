<?php $__env->startSection('content'); ?>
    <div class="row-fluid">

        <!-- Session message -->
        <?php if(session('msg')): ?>
            <div class="alert alert-error">
                <button class="close" data-dismiss="alert">×</button>
                <strong><?php echo e(session('msg')); ?></strong>
            </div>
        <?php endif; ?>

        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5><?php echo e(__('backend.info_category')); ?></h5>
            </div>
            <div class="widget-content nopadding">
                <form class="form-horizontal" method="POST" action="<?php echo e(route('category.store')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="control-group">
                        <label class="control-label"><?php echo e(__('backend.parent_id')); ?></label>
                        <div class="controls ">
                            <select name="parent_id" class="span11">
                                <option value="0">NO.</option>
                                <option>Second option</option>
                                <option>Third option</option>
                                <option>Fourth option</option>
                                <option>Fifth option</option>
                                <option>Sixth option</option>
                                <option>Seventh option</option>
                                <option>Eighth option</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"><?php echo e(__('backend.name')); ?></label>
                        <div class="controls">
                            <input type="text" name="name" class="span11">
                            <?php if($errors->has('name')): ?>
                                <span class="help-inline block txt-red"><?php echo e(__('backend.required')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label"><?php echo e(__('backend.status')); ?></label>
                        <div class="controls">
                            <label >
                                <input type="radio" name="status" checked value="1"/>
                                <?php echo e(__('backend.active')); ?></label>
                            <label>
                                <input type="radio" name="status" value="0"/>
                                <?php echo e(__('backend.deactive')); ?></label>
                            <label>
                                <input type="radio" name="status" value="2"/>
                                <?php echo e(__('backend.special')); ?></label>
                        </div>
                    </div>

                    <div class="form-actions" style="border-top: 1px solid #e5e5e5 !important;">
                        <button type="submit" class="btn btn-success"><?php echo e(__('backend.create')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>