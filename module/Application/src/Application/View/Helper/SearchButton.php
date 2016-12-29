<?php
namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

class SearchButton extends AbstractHelper
{
    /**
     * 
     * @param string $dataToggle
     */
    public function __invoke($dataToggle)
    {
        $view = $this->getView();
        
        $partialHelper = $view->plugin('partial');
        
        $data = new \stdClass();
        
        $data->dataToggle = $dataToggle;
        
        return $partialHelper('partials/search-button.phtml', $data);
    }
}


