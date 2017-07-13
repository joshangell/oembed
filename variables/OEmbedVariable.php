<?php
/**
 * oEmbed Variable
 *
 * @author    HutSix
 * @copyright Copyright (c) 2017 HutSix
 * @link      https://hutsix.com.au
 * @package   OEmbed
 * @since     1.0.0
 */

namespace Craft;

class OEmbedVariable
{
    public function embed($url, $options = array())
    {
        $media = craft()->oEmbed->embed($url, $options);

        return TemplateHelper::getRaw(isset($media->html) ? $media->html : "");
    }
}
