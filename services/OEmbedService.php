<?php
/**
 * oEmbed Service
 *
 * @author    HutSix
 * @copyright Copyright (c) 2017 HutSix
 * @link      https://hutsix.com.au
 * @package   OEmbed
 * @since     1.0.0
 */

namespace Craft;

class OEmbedService extends BaseApplicationComponent
{
    public function embed($url, $options = array())
    {
        array_multisort($options);

        $essence = new \Essence\Essence();
        $media = $essence->extract($url,$options);

        if ($media)
        {
            return $media;
        }

        return null;
    }
}
