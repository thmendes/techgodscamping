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
                    <div class="x_content">
                        <a href="/acampamento/modalidade/cadastrar"><button type="button" class="btn btn-success">Adicionar Nova Modalidade</button></a>
                    </div>
                    <div class="x_title">
                    	<h2>Pesquisa<small>Modalidade</small></h2>
                    	<div class="clearfix"></div>
                  	</div>
                  	<div class="x_content">
                    	<form id="pesquisa" data-parsley-validate class="form-horizontal form-label-left">
		                  	<div class="form-group">
	           					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nome</label>
	                        	<div class="col-md-6 col-sm-6 col-xs-12">
		                        	<input type="text" id="nome" class="form-control col-md-7 col-xs-12">
	                        	</div>
		                  	</div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Pesquisar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="x_title">
                        <h2>Modalidades<small>Cadastradas</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Descrição</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php if(count($modalities)): ?>
                            <?php $__currentLoopData = $modalities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modality): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($modality['name']); ?></td>
                                <td><?php echo e($modality['description']); ?></td>
                            </tr>   
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.blank', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>