<?php

namespace Inventory\View\Helper;
use Zend\View\Helper\AbstractHelper;

use Inventory\Model\Page as PageModel;
use Inventory\Model\Row;

class Page extends AbstractHelper
{
    public function __invoke(PageModel $page)
    {
        $myRoute = $this->getView()->getHelperPluginManager()->getServiceLocator()->get('application')->getMvcEvent()->getRouteMatch()->getMatchedRouteName();
        
        /*foreach ($page->getDashboards() as $key => $element){
            if ($key == $page->getActiveDashboard()) {
                $activeDashboard = ' btn-primary';
            } else {
                $activeDashboard = '';
            }
            $dashboards .= '<!-- Content Col --><div class="btn-group"><a class="btn btn-default btn-sm'.$activeDashboard.'" style="border-radius: 25px!important;" href="'
            .$this->getView()->url($myRoute, array('controller'=>$myRoute, 'action'=>$element->geturl()), array('query' => array($this->name.'ad_page' => $element->getId()))).'">'.$element->getName().'</a></div>
      <!-- /.col -->';
        }*/
        
        foreach ($page->getUrls() as $key => $element){
            if ($key == $page->getActivePage()) {
                $activeDashboard = ' btn-primary';
            } else {
                $activeDashboard = '';
            }
            $dashboards .= '<!-- Content Col --><div class="btn-group"><a class="btn btn-default btn-sm'.$activeDashboard.'" style="border-radius: 25px!important;" href="'
            .$this->getView()->url($myRoute, array('controller'=>$myRoute, 'action'=>$element->getUrl())/*, array('query' => array($this->name.'ad_page' => $element->getId()))*/).'">'.$element->getName().'</a></div>
      <!-- /.col -->';
        }
        
        foreach ($page->getDashboard()->getRows() as $element){
            $rows .= $this->getView()->row_helper($element);
        }
        

        
        $html .= '<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        '.$page->getName().'
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
        <div class="row">
            <div class="col-xs-12">'.$dashboards.'</div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">'.$rows.'</section>
    <!-- /.content -->';
 
        return $html;
    }
}