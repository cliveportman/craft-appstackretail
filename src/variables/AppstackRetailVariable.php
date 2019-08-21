<?php
/**
 * Appstack Retail plugin for Craft CMS 3.x
 *
 * Provides an alternative admin area for retail stores using  Craft Commerce, based on the official Bootstrap Appstack classic theme.
 *
 * @link      https://clive.theportman.co
 * @copyright Copyright (c) 2019 Clive Portman
 */

namespace cliveportman\appstackretail\variables;

use cliveportman\appstackretail\AppstackRetail;

use Craft;

/**
 * Appstack Retail Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.appstackRetail }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Clive Portman
 * @package   AppstackRetail
 * @since     1.0.0
 */
class AppstackRetailVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.appstackRetail.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.appstackRetail.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
