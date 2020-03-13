<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Navigation;

use Laminas\Navigation\Navigation;

/**
 * Interface NavigationAwareInterface
 *
 * @package MSBios\Navigation
 */
interface NavigationAwareInterface
{
    /**
     * @return Navigation
     */
    public function getNavigation(): Navigation;

    /**
     * @param Navigation $navigation
     * @return $this
     */
    public function setNavigation(Navigation $navigation): self;
}
