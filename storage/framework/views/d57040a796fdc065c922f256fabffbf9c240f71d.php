<?php $__env->startPush('stylesheets'); ?>
    <!-- Example -->
    <!--<link href=" <link href="<?php echo e(asset("css/myFile.min.css")); ?>" rel="stylesheet">" rel="stylesheet">-->
<?php $__env->stopPush(); ?>
<?php $__env->startSection('main_container'); ?>
    <div class="right_col" role="main">
		<div class="row">
          	<div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="x_panel">
                    <div class="x_title">
                        <h2>Cadastro<small>Modalidade</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <br />
                    	<form id="modality" action="cadastrar" method="POST" class="form-horizontal form-label-left">
		                  	<?php echo e(csrf_field()); ?>

                            <div class="form-group">
	           					<label class="control-label col-md-2 col-sm-3 col-xs-12" for="name">Nome</label>
	                        	<div class="col-md-6 col-sm-6 col-xs-12">
		                        	<input type="text" id="name" name="name" class="form-control col-md-7 col-xs-12">
	                        	</div>
		                  	</div>
                            <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-12" for="description">Descrição</label>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                </div>
                            </div>	                  
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-3 col-xs-12 col-md-offset-2">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                            <?php echo $__env->make('layouts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blank', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>