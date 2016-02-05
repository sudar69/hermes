<?php

namespace Inventory\View\Helper;
use Zend\View\Helper\AbstractHelper;

use Inventory\Model\Dashboard as DashboardModel;
use Inventory\Model\Row;

class Dashboard extends AbstractHelper
{
    public function __invoke(DashboardModel $dashboard)
    {
        foreach ($dashboard->getRows() as $element){
            $rows .= $this->getView()->row_helper($element);
        }
        $html = '<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        '.$dashboard->getName().'
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">'.$rows.'</section>
    <!-- /.content -->';
 
        return $html;
    }
}