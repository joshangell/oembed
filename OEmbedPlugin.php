<?php
/**
 * oEmbed plugin for Craft CMS
 *
 * A simple plugin to extract media information from websites, like youtube videos, twitter statuses or blog articles.
 *
 * @author    HutSix
 * @copyright Copyright (c) 2017 HutSix
 * @link      https://hutsix.com.au
 * @package   OEmbed
 * @since     1.0.0
 */

namespace Craft;

class OEmbedPlugin extends BasePlugin
{
    public function init()
    {
        require_once __DIR__ . '/vendor/autoload.php';

        parent::init();
    }

    public function getName()
    {
         return Craft::t('oEmbed');
    }

    public function getDescription()
    {
        return Craft::t('A simple plugin to extract media information from websites, like youtube videos, twitter statuses or blog articles.');
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/hut6/oembed/blob/master/README.md';
    }

    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/hut6/oembed/master/releases.json';
    }

    public function getVersion()
    {
        return '1.0.1';
    }

    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    public function getDeveloper()
    {
        return 'HutSix';
    }

    public function getDeveloperUrl()
    {
        return 'https://hutsix.com.au';
    }

    public function hasCpSection()
    {
        return false;
    }
}