<?php
/**
 * oEmbed plugin for Craft CMS 3.x
 *
 * A simple plugin to extract media information from websites, like youtube videos, twitter statuses or blog articles.
 *
 * @link      https://hutsix.com.au
 * @copyright Copyright (c) 2017 reganlawton
 */

namespace hut6\oembed\models;

use hut6\oembed\Oembed;
use craft\base\Model;

/**
 * OembedModel Model
 *
 * @author    reganlawton
 * @package   Oembed
 * @since     2.0.0
 */
class OembedModel extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some model attribute
     *
     * @var string
     */
    public $url = '';

    /**
     * OembedModel constructor.
     * @param string $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    // Public Methods
    // =========================================================================

    public function __toString()
    {
        return $this->url;
    }

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
            ['url', 'text'],
            ['url', 'default', 'value' => ''],
        ];
    }

    /**
     * @param array $options
     * @return string
     */
    public function render(array $options = [])
    {
        return Oembed::getInstance()->oembedService->render($this->url, $options);
    }

    /**
     * @todo Currently for CraftCMS version 2.5 template support, will be removed in future release
     *
     * @param array $options
     * @return string
     */
    public function embed(array $options = [])
    {
        return $this->render($options);
    }
}
