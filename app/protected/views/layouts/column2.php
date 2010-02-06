<?php $this->beginContent('/layouts/main'); ?>
<div class="container">
	<div class="span-18">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span-6 last">
		<div id="sidebar">
			<?php Yii::app()->widgetCollapse->init(); ?>
			<?php Yii::app()->highslide->init(); ?>

			<?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>

			<?php $this->widget('Clock'); ?>

			<?php $this->widget('Calendar'); ?>

			<?php $this->widget('MonthlyArchives', array(
				'maxItems'=>Yii::app()->params['monthlyArchivesCount'],
			)); ?>

			<?php $this->widget('SiteSearch'); ?>

			<?php $this->widget('RecentPosts', array(
				'maxPosts'=>Yii::app()->params['recentPostCount'],
			)); ?>

			<?php $this->widget('RecentComments', array(
				'maxComments'=>Yii::app()->params['recentCommentCount'],
			)); ?>

			<?php $this->widget('TagCloud', array(
				'maxTags'=>Yii::app()->params['tagCloudCount'],
			)); ?>

			<?php $this->widget('Links'); ?>

		</div><!-- sidebar -->
	</div>
</div>
<?php $this->endContent(); ?>