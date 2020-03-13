<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Navigation\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\Navigation\Navigation;
use Laminas\View\Model\FeedModel;
use Laminas\View\Model\JsonModel;
use Laminas\View\Model\ModelInterface;
use MSBios\Navigation\NavigationAwareTrait;

/**
 * Class IndexController
 *
 * @package MSBios\Navigation\Controller
 */
class IndexController extends AbstractActionController
{
    use NavigationAwareTrait;

    /** @var array */
    protected $acceptCriteria = [
        JsonModel::class => [
            'application/json',
            'application/javascript',
        ],
        FeedModel::class => [
            'application/rss+xml',
            'application/atom+xml',
        ],
    ];

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
        return $this
            ->acceptableViewModelSelector($this->acceptCriteria)
            ->setVariable('default', $this->getNavigation()->toArray());
    }
}