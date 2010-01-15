<?php

// this contains the application parameters that can be maintained via GUI
return array(
	// this is displayed in the header section
	'title'=>'My Yii Blog',
	// this is used in error pages
	'adminEmail'=>'webmaster@example.com',
	// number of posts displayed per page
	'postsPerPage'=>10,
	// maximum number of posts that can be displayed in recent posts portlet
	'recentPostCount'=>10,
	// maximum number of comments that can be displayed in recent comments portlet
	'recentCommentCount'=>10,
	// maximum number of items that can be displayed in monthly archives portlet
	'monthlyArchivesCount'=>10,
	// maximum number of tags that can be displayed in tag cloud portlet
	'tagCloudCount'=>20,
	// whether post comments need to be approved before published
	'commentNeedApproval'=>true,
	// the copyright information displayed in the footer section
	'copyrightInfo'=>'Copyright &copy; 2009 by My Company.',
        // configurations for highslide extension
        'imageHome'=>'images/',
        'imageHomeAbs'=>dirname(__FILE__).'/../../images/',
        'imageBoundingbox'=>'240',
        'imageParams'=>'style="float:left;margin:5px;"',
        'imageThumbnailBoundingBox'=>'120',
        'maxImageSize'=>512*1024, // 512KByte
        'profileImageBoundingbox'=>'60',
);
