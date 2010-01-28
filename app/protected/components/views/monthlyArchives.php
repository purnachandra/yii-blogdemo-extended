<ul>
<?php foreach ($this->findAllPostDate() as $month=>$val): ?>
<li>
<?php echo CHtml::link("$month ($val)", array('post/PostedInMonth',
					      'time'=>strtotime($month),
					      'pnc'=>'c'));  ?>
</li>
<?php endforeach; ?>
</ul>
<!-- $Id$ -->
