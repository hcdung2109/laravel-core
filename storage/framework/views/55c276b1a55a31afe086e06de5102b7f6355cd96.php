<?php $__env->startSection('content'); ?>
    <ul class="demo-btns">
        <li>
            <a href="<?php echo e(route('category.create')); ?>" class="btn btn-labeled bg-color-magenta txt-color-white">
                <span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span>
                <?php echo e(__('backend.create_new')); ?>

            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="btn btn-labeled btn-info"> <span class="btn-label"><i class="glyphicon glyphicon-refresh"></i></span>Refresh </a>
        </li>
    </ul>
    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-table"></i> </span>
            <h2><?php echo e(__('backend.table_category')); ?></h2>

        </header>

        <!-- widget div-->
        <div>

            <!-- widget edit box -->
            <div class="jarviswidget-editbox">
                <!-- This area used as dropdown edit box -->

            </div>
            <!-- end widget edit box -->

            <!-- widget content -->
            <div class="widget-body no-padding">

                <table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">

                    <thead>
                    <tr>
                        <th class="hasinput" style="width:17%">
                            <input type="text" class="form-control" placeholder="<?php echo e(__('backend.search')); ?>" />
                        </th>
                        <th class="hasinput" style="width:16%">
                            <input type="text" class="form-control" placeholder="<?php echo e(__('backend.search')); ?>" />
                        </th>
                        <th class="hasinput" style="width:17%">
                            <input type="text" class="form-control" placeholder="<?php echo e(__('backend.search')); ?>" />
                        </th>
                        <th class="hasinput" style="width:16%">
                            <input type="text" class="form-control" placeholder="<?php echo e(__('backend.search')); ?>" />
                        </th>
                    </tr>

                    <th class="text-center"><?php echo e(__('backend.name')); ?></th>
                    <th class="text-center"><?php echo e(__('backend.parent')); ?></th>
                    <th class="text-center"><?php echo e(__('backend.status')); ?></th>
                    <th class="text-center"><?php echo e(__('backend.action')); ?></th>
                    </thead>

                    <tbody class="smart-form">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->name); ?></td>
                            <td>
                                <?php if($item->parent): ?>
                                    <?php echo e($item->parent->name); ?>

                                <?php else: ?>
                                    Null
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <label class="toggle">
                                    <input type="checkbox" name="checkbox-toggle" checked="checked">
                                    <i data-swchon-text="ON" data-swchoff-text="OFF"></i>
                                </label>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-success btn-sm">
                                    <i class="fa fa-paper-plane"></i>
                                    <?php echo e(__('backend.to_top')); ?>

                                </button>
                                <a href="<?php echo e(route('category.edit',$item)); ?>" class="btn btn-info btn-sm">
                                    <i class="fa fa-gear fa-spin"></i>
                                    <?php echo e(__('backend.edit')); ?>

                                </a>
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash-o"></i>
                                    <?php echo e(__('backend.delete')); ?>

                                </button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>

                </table>

            </div>
            <!-- end widget content -->

        </div>
        <!-- end widget div -->

    </div>
    <div class="pagination ">
        <?php echo e($categories->links()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>