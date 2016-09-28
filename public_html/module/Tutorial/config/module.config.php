<?php
/**
array(// 总配置

‘router’                     =>array(),// 路由

‘controllers’              =>array(),// 控制器

‘view_manager’       =>array(),// 视图管理器

‘service_manager’       =>array(),// 服务器管理器

‘translator’              =>array(),// 译码器或翻译器

‘navigation’              =>array(),// 页面导航

);
*/
return array(
    'controllers' => array(
        'invokables' => array(
            'Tutorial_Controller_T1' => 'Tutorial\Controller\T1Controller',
            'Tutorial_Controller_T2' => 'Tutorial\Controller\T2Controller'
        )
    ),
    'router' => array(
        'routes' => array(
            // 控制器1配置
            'tutorial1' => array(
                'type' => 'segment', // segment|Literal
                'options' => array(
                    'route' => '/tutorial/t1[/][:action][/:id]', // [空间名 / 控制器别名 / 函数名称 / 其它参数]
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+'
                    ),
                    'defaults' => array(
                        'controller' => 'Tutorial_Controller_T1', // 控制器所在路径及名称
                        'action' => 'index'
                    )
                )
            ),
            
            // 控制器2配置
            'tutorial2' => array(
                'type' => 'segment', // segment|Literal
                'options' => array(
                    'route' => '/tutorial/t2[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+'
                    ),
                    'defaults' => array(
                        'controller' => 'Tutorial_Controller_T2',
                        'action' => 'index'
                    )
                )
            )
        )
    ),
    'view_manager' => array(
        // 出现404时是否显示页面找不到的原因，比如没有配置路由，没有对应的Controller等
        'display_not_found_reason' => true,
        // 抛出异常时是否显示错误详细信息
        'display_exceptions' => true,
        // 指定输入页面HTML Doctype
        'doctype' => 'HTML5',
        // 指定404页面模板的key，需要与下面的template_map配合
        'not_found_template' => 'error/404',
        // 指定错误页模板，需要与下面的template_map配合
        'exception_template' => 'error/index',
        // 模板map
        'template_map' => array(
//            'layout/layout' => __DIR__ . '/../view/layout/t2layout.phtml'
        ),
        // 'account/account/index' => __DIR__ . '/../view/account/index/index.phtml',
        // 'error/404' => __DIR__ . '/../view/error/404.phtml',
        // 'error/index' => __DIR__ . '/../view/error/index.phtml'
        // Controller中查找模板的路径集合
        'template_path_stack' => array(
            'Tutorial' => __DIR__ . '/../view'
        )
    ),
    'service_manager' => array(
        'factories' => array(
             'translator' => 'Zend\I18n\Translator\TranslatorServiceFactory',
             'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory', // <-- add this
         ),
    ),
    'navigation' => array(
         'default' => array(
             array(
                 'label' => '我的菜单',
                 'route' => 'tutorial1',
                 'order' => '20',
                 'pages' => array(
                     array(
                         'label' => '菜单导航A',
                         'route' => 'home',
                         'action' => 'add',
                     ),
                     array(
                         'label' => '菜单导航B',
                         'route' => 'home',
                         'action' => 'edit',
                     ),
                     array(
                         'label' => '菜单导航C',
                         'route' => 'home',
                         'action' => 'delete',
                     ),
                 ),
             ),
         ),
    ),
);
