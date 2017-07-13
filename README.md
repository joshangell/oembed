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

    {{ entry.fieldType.embed }}
    
We also provide option to use as a Twig variable

    {{ craft.oembed.embed(url, options) }}
    
You can access additional media details using the examples below.

    field.media.type
    field.media.version
    field.media.url
    field.media.title
    field.media.description
    field.media.authorName
    field.media.authorUrl
    field.media.providerName
    field.media.providerUrl
    field.media.cacheAge
    field.media.thumbnailUrl
    field.media.thumbnailWidth
    field.media.thumbnailHeight
    field.media.html
    field.media.width
    field.media.height
    
Additional Essense information can be found [here](https://github.com/essence/essence)

## oEmbed Roadmap

* 1.0.4
	* Correct a typo - @joshangell
* 1.0.3
	* Fix Twig variable typo
	* Update README usages
* 1.0.2
	* Update README usages
* 1.0.1
	* Fix typo's
	* Refactor files
* 1.0.0
	* Initial release

Brought to you by [HutSix](https://hutsix.com.au)