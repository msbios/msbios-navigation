<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Navigation;

use Zend\Navigation\Navigation;

/**
 * Interface NavigationAwareInterface
 * @package MSBios\Navigation
 */
trait NavigationAwareTrait
{
    /** @var Navigation */
    protected $navigation;

    /**
     * @return Navigation
     */
    public function getNavigation()
    {
        return $this->navigation;
    }

    /**
     * @param Navigation $navigation
     * @return $this
     */
    public function setNavigation(Navigation $navigation): self
    {
        $this->navigation = $navigation;
        return $this;
    }
}