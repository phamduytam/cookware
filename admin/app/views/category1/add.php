
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
		'action'=>sslUrl('category1/add'),
		'id' => 'add-form',
		'htmlOptions'=>array('enctype' => 'multipart/form-data')
	));
?>

<div class="form-group">
			<?php echo $form->labelEx($model,'parent_id'); ?>
			<?php echo $form->dropDownList($model,'parent_id',array('0'=>'Chọn nếu là danh mục cấp 1') + CHtml::listData($category, 'id', 'name'), array('class' => 'form-control')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'name'); ?>
	<?php echo $form->textField($model,'name', array('class' => 'form-control', 'placeholder' => 'Vui lòng nhập tiêu đề')); ?>
</div>

<div class="form-group">
	<?php echo $form->labelEx($model,'status'); ?>
	<?php echo $form->checkBox($model,'status', array('checked' => 'checked')); ?>
</div>
<div class="form-group">
	<?php echo $form->labelEx($model,'hot'); ?>
	<?php echo $form->checkBox($model,'hot'); ?>
</div>

<div class="form-group">
	<?php echo $form->labelEx($model,'img_left'); ?>
	<?php echo $form->fileField($model,'img_left'); ?>
</div>

<div class="form-group">
	<?php echo $form->labelEx($model,'img_bottom'); ?>
	<?php echo $form->fileField($model,'img_bottom'); ?>
</div>

<div class="form-group">
	<?php echo $form->labelEx($model,'ordering'); ?>
	<?php echo $form->textField($model,'ordering', array('class' => 'form-control', 'placeholder' => 'Vui lòng nhập thứ tự')); ?>
</div>

<div class="form-group">
	<?php echo $form->labelEx($model,'title'); ?>
	<?php echo $form->textField($model,'title', array('class' => 'form-control', 'placeholder' => 'Vui lòng nhập title')); ?>
</div>

<div class="form-group">
	<?php echo $form->labelEx($model,'keyword'); ?>
	<?php echo $form->textArea($model,'keyword', array('class' => 'form-control', 'placeholder' => 'Vui lòng nhập description')); ?>
</div>

<div class="form-group">
	<?php echo $form->labelEx($model,'description'); ?>
	<?php echo $form->textArea($model,'description', array('class' => 'form-control', 'placeholder' => 'Vui lòng nhập description')); ?>
</div>

<button type="submit" class="btn btn-default">Save</button>
<button type="reset" class="btn btn-default">Cancel</button>

<?php
	$this->endWidget();
?>

</div>
</div>

