
<div class="row">
<div class="col-lg-12">


<?php echo CHtml::errorSummary($model, '<div class="alert alert-dismissable alert-warning"> Loi', '</div>'); ?>
<?php
	if (user()->hasFlash('messages'))
	{
		$messages = user()->getFlash('messages');
		echo '<div class="alert alert-dismissable alert-success">'. hsp($messages). '</div><br>';
	}
	?>
<?php
	$form = $this->beginWidget('TbActiveForm', array(
		'action'=>sslUrl('advertise/add'),
		'id' => 'add-form',
		'htmlOptions'=>array('enctype' => 'multipart/form-data')
	));
?>

<div class="form-group">
	<?php echo $form->labelEx($model,'cat_id'); ?>
	<?php echo $form->dropDownList($model,'cat_id', CHtml::listData($category, 'id', 'name'), array('class' => 'form-control')); ?>
</div>

<div class="form-group">
	<?php echo $form->labelEx($model,'name'); ?>
	<?php echo $form->textField($model,'name', array('class' => 'form-control', 'placeholder' => 'Vui lòng nhập tên')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'url'); ?>
	<?php echo $form->textField($model,'url', array('class' => 'form-control', 'placeholder' => 'Vui lòng nhập url')); ?>
</div>

<div class="form-group">
	<?php echo $form->labelEx($model,'image'); ?>
	<?php echo $form->fileField($model,'image'); ?>
</div>

<div class="form-group">
	<?php echo $form->labelEx($model,'status'); ?>
	<?php echo $form->checkBox($model,'status', array('checked' => 'checked')); ?>
</div>

<div class="form-group">
	<?php echo $form->labelEx($model,'order'); ?>
	<?php echo $form->textField($model,'order', array('class' => 'form-control', 'placeholder' => 'Vui lòng nhập thứ tự')); ?>
</div>

<button type="submit" class="btn btn-default">Save</button>
<button type="reset" class="btn btn-default">Cancel</button>

<?php
	$this->endWidget();
?>

</div>
</div>

