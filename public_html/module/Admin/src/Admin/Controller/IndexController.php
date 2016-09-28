<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Admin for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

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
//         $controllerName = $this->getEvent('dispatch')->getViewModel()->controller;
//         $actionName = $this->getEvent('dispatch')->getViewModel()->action;
//         $breadcrumbs = $controllerName;
//         $this->view->breadcrumbs = str_replace(array('_'), array(BC), $controllerName) . BC . $actionName;
//         $strController = strtolower(str_replace(array('_Controller_','\Controller','\\'), array(DS, '',DS), $controllerName));
//         $this->view->controller = $strController;
        $this->layout('layout/my-layout.phtml');
    }
    public function indexAction()
    {        
        $this->init();
        return $this->view;
    }
    public function crogAction()
    {
        $this->init();
        return $this->view;
    }
    public function addsAction()
    {
        $this->init();
        return $this->view;
    }
    public function saveAction()
    {
        $this->init();
        return $this->view;
    }
    public function warningAction()
    {
        $this->init();
        return $this->view;
    }
    public function deleteAction()
    {
        $this->init();
        return $this->view;
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /index/index/foo
        return array();
    }
}
