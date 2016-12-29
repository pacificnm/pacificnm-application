<?php
namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

class DeleteButton extends AbstractHelper
{
    /**
     * 
     * @param string $route
     * @param array $params
     */
    public function __invoke($route, $params = array())
    {
        $view = $this->getView();
         
        $partialHelper = $view->plugin('partial');
        
        $data = new \stdClass();
        
        $data->route = $route;
        
        $data->params = $params;
        
        return $partialHelper('partials/delete-button.phtml', $data);
    }
}

