<?php
$this->breadcrumbs=array(
	'Message'=>array('message/index'),
	'HelloWorld',
);?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>You may change the content of this page by modifying the file <tt><?php echo __FILE__; ?></tt>.</p>
<p>Hello World!</p>
<h3><?php echo $time; ?></h3>
<a href="/index.php?r=message/goodbye">Goodbye!</a>

<p><?php echo CHtml::link("Goodbye",array('message/goodbye')); ?></p>