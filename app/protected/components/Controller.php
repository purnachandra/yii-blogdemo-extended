<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
  
  /**
   * Disables any active CWebLogRoute instances
   * (used during AJAX actions, to prevent output)
   */
  protected function disableWebLogRoutes()
  {
    foreach (Yii::app()->log->routes as $route)
    if ($route instanceof CWebLogRoute)
      $route->enabled = false;
  }
}
