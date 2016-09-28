<?php
namespace Tutorial\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class T1Controller extends AbstractActionController
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
     * 在不影响原有的布局控制下， 使用自定的布局页面
     */
    public function clayoutAction()
    {
        $this->init();
        return $this->view;
    }

    /**
     * 首页
     *
     * {@inheritDoc}
     *
     * @see \Zend\Mvc\Controller\AbstractActionController::indexAction()
     */
    public function indexAction()
    {
        $this->init();
        return $this->view;
    }

    /**
     * 添加记录
     */
    public function addsAction()
    {
        $this->init();
        return $this->view;
    }

    /**
     * 记录详情页面
     */
    public function viewAction()
    {
        $this->init();
        return $this->view;
    }

    /**
     * 保存更新数据
     */
    public function saveAction()
    {
        $this->init();
        return $this->view;
    }

    /**
     * 删除记录
     */
    public function deleteAction()
    {
        $this->init();
        return $this->view;
    }

    /**
     * 警告操作
     */
    public function warningAction()
    {
        $this->init();
        return $this->view;
    }

    /**
     * 模块配置
     */
    public function crogAction()
    {
        $this->init();
        return $this->view;
    }

    /**
     * 演示页面
     */
    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /t1/t1/foo
        return array();
    }
}
