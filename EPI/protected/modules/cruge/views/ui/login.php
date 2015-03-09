<div class="contenedor">
	<div id="principal">
		<div style="margin-left: 52px;margin-top: 59px;margin-bottom: 20px;">
			<!-- incluir jquery para validar el rut -->
			<?php  
			  $baseUrl = Yii::app()->baseUrl; 
			  $cs = Yii::app()->getClientScript();
			  $cs->registerScriptFile($baseUrl.'/js/jquery.Rut.js');
			  
			?>
			<h1 class="titulo"><?php echo CrugeTranslator::t('logon',"Login"); ?></h1>
			<?php if(Yii::app()->user->hasFlash('loginflash')): ?>
			<div class="flash-error">
				<?php echo Yii::app()->user->getFlash('loginflash'); ?>
			</div>
			<?php else: ?>
			<div class="form">
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'logon-form',
					'enableClientValidation'=>false,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
				)); ?>

				<div class="row">
					<?php //echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username',array('placeholder'=>'11.111.111-1')); ?>
					<?php echo $form->error($model,'username'); ?>
				</div>

				<div class="row">
					<?php //echo $form->labelEx($model,'password'); ?>
					<?php echo $form->passwordField($model,'password',array('placeholder'=>'Contraseña')); ?>
					<?php echo $form->error($model,'password'); ?>
				</div>

				<div class="row buttons">
					<?php Yii::app()->user->ui->tbutton(CrugeTranslator::t('logon', "Ingresar")); ?>			
				</div>

				<?php
					//	si el componente CrugeConnector existe lo usa:
					//
					if(Yii::app()->getComponent('crugeconnector') != null){
					if(Yii::app()->crugeconnector->hasEnabledClients){ 
				?>
				<div class='crugeconnector'>
					<span><?php echo CrugeTranslator::t('logon', 'You also can login with');?>:</span>
					<ul>
					<?php 
						$cc = Yii::app()->crugeconnector;
						foreach($cc->enabledClients as $key=>$config){
							$image = CHtml::image($cc->getClientDefaultImage($key));
							echo "<li>".CHtml::link($image,
								$cc->getClientLoginUrl($key))."</li>";
						}
					?>
					</ul>
				</div>
				<?php }} ?>
				

				<?php $this->endWidget(); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<script>
// $('#CrugeLogon_username').Rut({
//   format_on: 'keyup'
// });
</script>