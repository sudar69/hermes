<?php

namespace Inventory\View\Helper;
use Zend\View\Helper\AbstractHelper;

use Inventory\Model\Col as ColModel;

class Col extends AbstractHelper
{
    public function __invoke(ColModel $dashboard)
    {
        foreach ($dashboard->getWidgets() as $element){
            if (get_class($element) == 'Inventory\Model\WidgetTable'){
                $cols .= $this->getView()->widget_table_helper($element);
            } elseif (get_class($element) == 'Inventory\Model\WidgetView') {
                $cols .= $this->getView()->widget_view_helper($element);
            }
        }
        $html = '<!-- Content Col -->
      <div class="col-md-'.$dashboard->getClasssize().'">'.$cols.'</div>
      <!-- /.col -->';
 
        return $html;
    }
}