# oEmbed plugin for Craft CMS

A simple plugin to extract media information from websites, like youtube videos, twitter statuses or blog articles.

## Installation

To install oEmbed, follow these steps:

1. Download & unzip the file and place the `oembed` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/hut6/oembed.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require hut6/oembed`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `oembed` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

oEmbed works on Craft 2.4.x and Craft 2.5.x.

## Using oEmbed

To use simply call the `embed` method on your field type

    {{ entry.mediaUrl.embed }}
    
We also provide option to use as a Twig variable

    {{ craft.oembed.embed(url, options) }}

## oEmbed Roadmap

Some things to do, and ideas for potential features:

* 1.0.1
	* Fix typo's
	* Refactor files
* 1.0.0
	* Initial release

Brought to you by [HutSix](https://hutsix.com.au)
