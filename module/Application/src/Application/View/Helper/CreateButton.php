<?php
namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper;

class CreateButton extends AbstractHelper
{

    /**
     *
     * @param string $route            
     * @param array $params            
     */
    public function __invoke($route, $params = array(), $options = array())
    {
        $view = $this->getView();
        
        $partialHelper = $view->plugin('partial');
        
        $data = new \stdClass();
        
        $data->route = $route;
        
        $data->params = $params;
        
        $data->options = $options;
        
        return $partialHelper('partials/create-button.phtml', $data);
    }
}

