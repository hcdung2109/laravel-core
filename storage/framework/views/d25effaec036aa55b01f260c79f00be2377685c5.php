<?php $__env->startSection('content'); ?>
    <section id="widget-grid" class="">

        <!-- START ROW -->

        <div class="row">

            <!-- NEW COL START -->
            <article class="col-sm-12 col-md-12 col-lg-12">

                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                    <header>
                        <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                        <h2><?php echo e(__('backend.create_new')); ?></h2>

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

                            <form class="smart-form" method="POST" action="<?php echo e(route('category.store')); ?>">
                                <fieldset>

                                    <section>
                                        <label class="label">Select <?php echo e(__('backend.parent')); ?></label>
                                        <label class="select">
                                            <select>
                                                <option value="0">NO.</option>
                                                <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                                    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($child->id); ?>">--- <?php echo e($child->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select> <i></i> </label>
                                    </section>

                                </fieldset>

                                <fieldset>
                                    <section>
                                        <label class="label"><?php echo e(__('backend.name')); ?></label>
                                        <label class="input">
                                            <input type="text" maxlength="10" name="name">
                                        </label>
                                        <div class="note">
                                            <?php if($errors->has('name')): ?>
                                                <span class="help-inline block txt-red"><?php echo e(__('backend.required')); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </section>

                                    <section>
                                        <label class="label"><?php echo e(__('backend.status')); ?></label>
                                        <div class="inline-group">
                                            <label class="radio">
                                                <input type="radio" name="radio-inline" checked="checked">
                                                <i></i><?php echo e(__('backend.active')); ?></label>
                                            <label class="radio">
                                                <input type="radio" name="radio-inline">
                                                <i></i><?php echo e(__('backend.deactive')); ?></label>
                                        </div>
                                    </section>

                                    <section>
                                        <label class="label"><?php echo e(__('backend.show_on_top')); ?></label>
                                        <div class="inline-group">
                                            <label class="radio">
                                                <input type="radio" name="show_on_top" checked="checked">
                                                <i></i><?php echo e(__('backend.no')); ?></label>
                                            <label class="radio">
                                                <input type="radio" name="show_on_top">
                                                <i></i><?php echo e(__('backend.yes')); ?></label>
                                        </div>
                                        <div class="note">
                                            <strong>Maxlength</strong> is automatically added via the "maxlength='#'" attribute
                                        </div>

                                    </section>
                                </fieldset>

                                <footer>
                                    <button type="submit" class="btn btn-primary"><?php echo e(__('backend.create')); ?></button>
                                    <button type="button" class="btn btn-default" onclick="window.history.back();"><?php echo e(__('backend.back')); ?></button>
                                </footer>
                            </form>

                        </div>
                        <!-- end widget content -->

                    </div>
                    <!-- end widget div -->

                </div>
                <!-- end widget -->

            </article>
            <!-- END COL -->
        </div>

        <!-- END ROW -->

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>