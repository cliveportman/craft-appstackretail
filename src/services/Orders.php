<?php
/**
 * Appstack Retail plugin for Craft CMS 3.x
 *
 * Provides an alternative admin area for retail stores using  Craft Commerce, based on the official Bootstrap Appstack classic theme.
 *
 * @link      https://clive.theportman.co
 * @copyright Copyright (c) 2019 Clive Portman
 */

namespace cliveportman\appstackretail\services;

use cliveportman\appstackretail\AppstackRetail;

use Craft;
use craft\base\Component;

/**
 * Orders Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Clive Portman
 * @package   AppstackRetail
 * @since     1.0.0
 */
class Orders extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     AppstackRetail::$plugin->orders->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (AppstackRetail::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
