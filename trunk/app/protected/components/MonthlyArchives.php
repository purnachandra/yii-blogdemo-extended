<?php
  // @version $Id$

class MonthlyArchives extends Portlet
{
  public $title='Monthly Archives';
  public $maxItems=10;

  public function findAllPostDate()
  {
    $yearmonth = array();
    $posts = Post::model()->findRecentPosts(PHP_INT_MAX);

    $count = 0;
    foreach ($posts as $post) {
      $ym = date('F Y', $post->create_time);
      if (!isset($yearmonth[$ym])) {
	if (++$count > $this->maxItems) break;
	$yearmonth[$ym] = 1;
      } else {
	$yearmonth[$ym]++;
      }
    }
    return $yearmonth;
  }

  protected function renderContent()
  {
    $this->render('monthlyArchives');
  }

}
