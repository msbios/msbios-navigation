<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Navigation\Controller;

use Zend\Json\Json;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Navigation\Navigation;
use Zend\View\Model\JsonModel;

/**
 * Class IndexController
 * @package MSBios\Navigation\Controller
 */
class IndexController extends AbstractActionController
{

    /** @var Navigation */
    protected $navigation;

    /**
     * IndexController constructor.
     *
     * @param Navigation $navigation
     */
    public function __construct(Navigation $navigation)
    {
        $this->navigation = $navigation;
    }

    /**
     * @inheritdoc
     *
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction()
    {
        return parent::indexAction();
    }

    /**
     * @return JsonModel
     */
    public function navigationAction()
    {

        return new JsonModel([
            'default' => $this->navigation->toArray()
        ]);
    }
}