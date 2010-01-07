<?php

Yii::import('zii.widgets.CPortlet');

class Portlet extends CPortlet
{
	/**
	 * Add the portlet-type to the class-tag.
	 */
	public function init()
	{
    $this->htmlOptions['class'] .= ' '.strtolower(get_class($this)).'-portlet';
    parent::init();
	}
  
	/**
	 * Renders the decoration for the portlet.
	 * Overrides the default implementation to improve semantics.
	 */
	protected function renderDecoration()
	{
		if($this->title!==null)
		{
			echo "<div class=\"{$this->decorationCssClass}\">\n";
			echo "<span>{$this->title}</span>\n";
			echo "</div>\n";
		}
	}
}
