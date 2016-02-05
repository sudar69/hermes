<?php

namespace Inventory\View\Helper;
use Zend\View\Helper\AbstractHelper;

use Inventory\Model\WidgetTable as WidgetTableModel;

class WidgetTable extends AbstractHelper
{
    public function __invoke(WidgetTableModel $widget)
    {
        $myWidget = $widget->getWidget();
        
        $myRoute = $this->getView()->getHelperPluginManager()->getServiceLocator()->get('application')->getMvcEvent()->getRouteMatch()->getMatchedRouteName();
        foreach ($myWidget['data'] as $element){
            
            $ref = '<a href="'
              .$this->getView()->url($myRoute, array('controller'=>$myRoute, 'action'=>'view', 'id' => $element->getId())).'">'.$element->getName().'</a>';
            
            $tr .= '<tr>'.'<td>'.$element->getId().'</td>'.'<td>'.$ref.'</td>'.'<td>'.$element->getDescription().'</td>'.'</tr>';
        }
        
        $paginator = $this->getView()->paginationControl($myWidget['data'], 'sliding', 'inventory/partial/paginator.phtml', array(/*'route' => 'admin',*/ 'name' => $myWidget['name']));
        
        $html = '<!-- Content Widget -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Task</th>
                  <th>Progress</th>
                </tr>'.$tr.'
              </tbody></table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">'.$paginator.'</div>
          </div>
      <!-- /.widget -->';
 
        return $html;
    }
}