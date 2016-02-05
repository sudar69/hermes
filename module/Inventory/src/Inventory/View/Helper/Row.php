<?php

namespace Inventory\View\Helper;
use Zend\View\Helper\AbstractHelper;

use Inventory\Model\Row as RowModel;

class Row extends AbstractHelper
{
    public function __invoke(RowModel $dashboard)
    {
        foreach ($dashboard->getCols() as $element){
            $cols .= $this->getView()->col_helper($element);
        }
        $html = '<!-- Content Row -->
      <div class="row">'.$cols.'</div>
      <!-- /.row -->';
 
        return $html;
    }
}