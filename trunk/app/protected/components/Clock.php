<?php
  // @version $Id: Clock.php 5 2009-02-22 11:37:40Z choco.moca.colon $
class Clock extends Portlet
{
  public $title='Clock';

  protected function renderContent()
  {
    $this->render('clock');
  }
}
