<ul>
<?php foreach($this->getRecentPosts() as $post): ?>
<li>
<?php echo CHtml::link(CHtml::encode($post->title),array('post/view','id'=>$post->id)); ?>
&nbsp;on&nbsp;
<?php echo CHTml::link(date('M j', $post->create_time), array('post/PostedOnDate', 'time'=>$post->create_time)); ?>
</li>
<?php endforeach; ?>
</ul>
