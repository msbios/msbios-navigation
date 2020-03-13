<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Navigation\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\Navigation\Navigation;
use Laminas\View\Model\JsonModel;
use Laminas\View\Model\ModelInterface;
use Laminas\View\Model\ViewModel;
use MSBios\Navigation\NavigationAwareTrait;
// use Zend\Mvc\Controller\AbstractActionController;
// use Zend\Navigation\Navigation;
// use Zend\View\Model\JsonModel;

/**
 * Class IndexController
 *
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
     * @inheritDoc
     *
     * @return ModelInterface
     */
    public function indexAction(): ModelInterface
    {
        return new JsonModel([
            'default' => $this
                ->getNavigation()
                ->toArray()
        ]);
    }
}