<?php
  // @version $Id$

class Links extends CPortlet
{
  public $title='Links';

  protected function renderContent()
  {
    $this->render('links');
  }
}
