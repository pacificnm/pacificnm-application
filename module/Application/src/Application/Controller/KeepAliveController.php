<?php
namespace Application\Controller;

use Zend\View\Model\JsonModel;

class KeepAliveController extends AbstractApplicationController
{
    
    /**
     * 
     * @return \Zend\View\Model\JsonModel
     */
    public function indexAction()
    {
        parent::indexAction();
        
        return new JsonModel(array(
            'status' => 'OK',
            'name' => $this->identity()->getAuthName()
        ));
    }
}

