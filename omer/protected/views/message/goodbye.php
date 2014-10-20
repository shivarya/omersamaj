<?php
/* @var $this MessageController */

$this->breadcrumbs=array(
	'Message'=>array('/message'),
	'Hello',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<h3><?php echo date("D M j G:i:s T Y"); ?></h3>
<h2>Hello World</h2>
<p><?php echo CHtml::link('Hello',array('message/hello')); ?></p>
