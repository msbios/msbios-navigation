<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Navigation;

use Laminas\Navigation\Navigation;

/**
 * Trait NavigationAwareTrait
 *
 * @package MSBios\Navigation
 */
trait NavigationAwareTrait
{
    /** @var Navigation */
    protected $navigation;

    /**
     * @inheritDoc
     *
     * @return Navigation
     */
    public function getNavigation(): Navigation
    {
        return $this->navigation;
    }

    /**
     * @inheritDoc
     *
     * @param Navigation $navigation
     * @return $this
     */
    public function setNavigation(Navigation $navigation): self
    {
        $this->navigation = $navigation;
        return $this;
    }
}
