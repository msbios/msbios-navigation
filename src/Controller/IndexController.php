<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Navigation\Controller;

use MSBios\Navigation\NavigationAwareTrait;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Navigation\Navigation;
use Zend\View\Model\JsonModel;

/**
 * Class IndexController
 * @package MSBios\Navigation\Controller
 */
class IndexController extends AbstractActionController
{
    use NavigationAwareTrait;

    /**
     * IndexController constructor.
     *
     * @param Navigation $navigation
     */
    public function __construct(Navigation $navigation)
    {
        $this->setNavigation($navigation);
    }

    /**
     * @inheritdoc
     *
     * @return JsonModel|\Zend\View\Model\ViewModel
     */
    public function indexAction()
    {
        return new JsonModel([
            'default' => $this->getNavigation()->toArray()
        ]);
    }
}