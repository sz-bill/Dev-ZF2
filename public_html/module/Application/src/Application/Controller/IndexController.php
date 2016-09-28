<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public $view;
    protected function init()
    {
        $view = new ViewModel();
        $this->view = $view;
        // $this->view->controller = __CLASS__;
        // 获取当前的空间名/控制器名称
        $controllerName = $this->getEvent('dispatch')->getViewModel()->controller;
        $actionName = $this->getEvent('dispatch')->getViewModel()->action;
        $breadcrumbs = $controllerName;
        $this->view->breadcrumbs = str_replace(array(
            '_'
        ), array(
            BC
        ), $controllerName) . BC . $actionName;
        
        $this->view->controller = strtolower(str_replace(array(
            '_Controller_'
        ), array(
            DS
        ), $controllerName));
    }
    public function indexAction()
    {
        $this->init();
        return $this->view;
//        return new ViewModel();
    }
}
