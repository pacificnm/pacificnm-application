<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Application\Controller;

use Zend\View\Model\ViewModel;

class IndexController extends AbstractApplicationController
{

    public function __construct()
    {}

    public function indexAction()
    {
        parent::indexAction();
        
        return new ViewModel(array());
    }
}
