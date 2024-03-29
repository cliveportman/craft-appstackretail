<?php
/**
 * Appstack Retail plugin for Craft CMS 3.x
 *
 * Provides an alternative admin area for retail stores using  Craft Commerce, based on the official Bootstrap Appstack classic theme.
 *
 * @link      https://clive.theportman.co
 * @copyright Copyright (c) 2019 Clive Portman
 */

namespace cliveportman\appstackretail\models;

use cliveportman\appstackretail\AppstackRetail;

use Craft;
use craft\base\Model;

/**
 * AppstackRetail Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Clive Portman
 * @package   AppstackRetail
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $navName = 'Appstack Retail';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['navName', 'string'],
            ['navName', 'default', 'value' => 'Some Default'],
        ];
    }
}
