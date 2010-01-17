<?php

class ImageController extends Controller
{
  public function actionTest()
  {
    // this is a simple demonstration of the image manager.
    // collections and transformations are defined in the main configuration file.
    
    $name = 'test.jpg';
    
    // load the image 'test.jpg' from the configured collection named 'full':
    $image = Yii::app()->images->full->load($name);
    
    // apply the transformation named 'thumbnail' and save the image:
    $image->thumbnail()->saveJPEG('images/thumbs/'.$name);
    
    echo '<img src="/images/thumbs/'.$name.'" width="'.$image->width.'" height="'.$image->height.'"/>';
  }
}
