<?php
/**
 * oEmbed plugin for Craft CMS 3.x
 *
 * A simple plugin to extract media information from websites, like youtube videos, twitter statuses or blog articles.
 *
 * @link      https://hutsix.com.au
 * @copyright Copyright (c) 2017 reganlawton
 */

namespace hut6\oembed\variables;

use hut6\oembed\Oembed;

/**
 * OembedVariable Variable
 *
 * @author    reganlawton
 * @package   Oembed
 * @since     2.0.0
 */
class OembedVariable
{
    /**
     * Call it like this:
     *
     *     {{ craft.oembed.render(url, options) }}
     *
     * @param $url
     * @param array $options
     * @return string
     */
    public function render($url, array $options = [])
    {
        return Oembed::getInstance()->oembedService->render($url, $options);
    }
}
