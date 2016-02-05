<?php
namespace Inventory;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface,
    Zend\ModuleManager\Feature\ConfigProviderInterface,
    Zend\ModuleManager\Feature\ViewHelperProviderInterface; 

class Module implements
    AutoloaderProviderInterface, 
    ConfigProviderInterface, 
    ViewHelperProviderInterface
{
  public function getAutoloaderConfig()
  {
    return array(
      'Zend\Loader\StandardAutoloader' => array(
        'namespaces' => array(
          __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
        ),
      ),
    );
  }
  public function getConfig()
  {
    return include __DIR__ . '/config/module.config.php';
  }
  
  public function getViewHelperConfig()
    {
        return array(
            'factories' => array(
                'page_helper' => function($sm) {
                    $helper = new View\Helper\Page;
                    return $helper;
                },
                'dashboard_helper' => function($sm) {
                    $helper = new View\Helper\Dashboard;
                    return $helper;
                },
                'row_helper' => function($sm) {
                    $helper = new View\Helper\Row;
                    return $helper;
                },
                'col_helper' => function($sm) {
                    $helper = new View\Helper\Col;
                    return $helper;
                },
                'widget_table_helper' => function($sm) {
                    $helper = new View\Helper\WidgetTable;
                    return $helper;
                },
                'widget_view_helper' => function($sm) {
                    $helper = new View\Helper\WidgetView;
                    return $helper;
                }
            )
        );   
   }
}