<?php
/**
 * oEmbed Model
 *
 * @author    HutSix
 * @copyright Copyright (c) 2017 HutSix
 * @link      https://hutsix.com.au
 * @package   OEmbed
 * @since     1.0.0
 */

namespace Craft;

class OEmbedModel extends BaseModel
{

    private $media;
    
    public function __construct($url)
    {
        $this->url = $url;
        $this->media = null;
    }

    public function __toString()
    {
        return $this->url;
    }

    protected function defineAttributes()
    {
        return array_merge(parent::defineAttributes(), array(
            'url'     => array(AttributeType::String, 'default' => ''),
        ));
    }

    public function validate()
    {
        if (!$this->getMedia()) {
            return array(
                Craft::t('Invalid or unsupported oEmbed URL.')
            );
        }

        return parent::validate();
    }

    public function getEmbed($options = array())
    {
        $media = $this->getMedia();

        return TemplateHelper::getRaw(isset($media->html) ? $media->html : "");
    }

    public function getMedia ($options = array()) {
        $this->media = $this->media ?: craft()->oEmbed->embed($this->url, $options);
        return $this->media;
    }
    
}
