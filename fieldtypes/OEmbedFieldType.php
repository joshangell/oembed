<?php
/**
 * oEmbed FieldType
 *
 * @author    HutSix
 * @copyright Copyright (c) 2017 HutSix
 * @link      https://hutsix.com.au
 * @package   OEmbed
 * @since     1.0.0
 */

namespace Craft;

class OEmbedFieldType extends BaseFieldType
{
    public function getName()
    {
        return Craft::t('oEmbed');
    }

    public function defineContentAttribute()
    {
        return AttributeType::String;
    }

    public function getInputHtml($name, $value)
    {
        return craft()->templates->renderMacro('_includes/forms', 'text', array(
            array(
                'name'  => $name,
                'value' => $value,
            ),
        ));
    }

    public function validate($value)
    {
        return $this->prepValue($value)->validate();
    }

    public function prepValue($value)
    {
        if ($value)
        {
            return new OEmbedModel($value);
        }
    }
}