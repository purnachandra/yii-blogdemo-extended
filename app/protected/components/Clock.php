<?php
  // @version $Id$
class Clock extends CPortlet
{
  public $title='Clock';

  protected function renderContent()
  {
    $this->render('analog-clock');
  }
}
