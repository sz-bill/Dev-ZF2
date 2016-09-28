<?php
namespace Tutorial\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * T2Controller
 *
 * @author
 *
 * @version
 *
 */
class T2Controller extends AbstractActionController
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

    /**
     * The default action - show the home page
     */
    public function indexAction()
    {
        $this->init();
        #$this->view->setTemplate('layout/t2layout.phtml');
        return $this->view;
    }

    public function t2layoutAction(){
        $this->init();
        $this->layout('layout/t2layout');
        return $this->view;
    }
    public function index_BAKAction()
    {
        // TODO Auto-generated T2Controller::indexAction() default action
        return new ViewModel();
    }
}