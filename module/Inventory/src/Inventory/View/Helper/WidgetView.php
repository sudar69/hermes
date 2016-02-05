<?php

namespace Inventory\View\Helper;
use Zend\View\Helper\AbstractHelper;

use Inventory\Model\WidgetView as WidgetViewModel;

class WidgetView extends AbstractHelper
{
    public function __invoke(WidgetViewModel $widget)
    {
        $form = $widget->getWidget()['form'];
        $mode = $widget->getWidget()['mode'];
        
        if ($mode == 'view') {
          foreach ($form->getElements() as $element){
    			  $element->setAttribute('style', 'border: none; outline: none; background-color: rgba(255,255,255,0.15); cursor: auto;');
    		  }
        }
        
        //var_dump($form);
$form->prepare();

$myRoute = $this->getView()->getHelperPluginManager()->getServiceLocator()->get('application')->getMvcEvent()->getRouteMatch()->getMatchedRouteName();

$html .= '<div class="box box-solid">
            <div class="box-header with-border">

              <h3 class="box-title">'.$widget->getName.'</h3>
              <a href="'.$this->getView()->url($myRoute, array('controller'=>$myRoute, 'action'=>'view', 'id'=>$widget->getId()), array('query' => array($widget->getWidget()['name'].'_mode' => 'edit'))).
                '" class="pull-right"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Редактировать</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">';




$html .= $this->getView()->form()->openTag ( $form );
if ($mode == 'view') {
  $html .= '<fieldset disabled>';
}
//$html .= $this->getView()->formCollection($form);

//$html .= $this->getView()->formRow($form->get('type'));
//$html .= $this->getView()->formRow($form->get('comment'));
//$html .= $this->getView()->formInput($form->get('submit'));

foreach ( $form as $element ) :
$html .= '<div class="form-group">'.$this->getView()->formRow($element).'</div>';

//$html .=  '<dt>'.$element->getLabel().'</dt><dd>'.$element->getValue().'</dd>';
endforeach;
if ($mode == 'view') {
  $html .= '</fieldset>';
}
$html .= $this->getView()->form ()->closeTag ( $form );
$html .= '</div>
            <!-- /.box-body -->
          </div>';
/*
    </div>
    <!-- /.box-body -->
</div>
*/
        
        /*$myWidget = $widget->getWidget();
        
        $myRoute = $this->getView()->getHelperPluginManager()->getServiceLocator()->get('application')->getMvcEvent()->getRouteMatch()->getMatchedRouteName();
        
        foreach ($myWidget as $element){
          
            $ref = '<a href="'
              .$this->getView()->url($myRoute, array('controller'=>$myRoute, 'action'=>'view', 'id' => $element->getId())).'">'.$element->getName().'</a>';
              
            $tr .= '<tr>'.'<td>'.$element->getId().'</td>'.'<td>'.$ref.'</td>'.'<td>'.$element->getDescription().'</td>'.'</tr>';
        }
        
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
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
              </ul>
            </div>
          </div>
      <!-- /.widget -->';*/
 
        return $html;
    }
}