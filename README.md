Yii 2 [mediaElement.js](https://github.com/johndyer/mediaelement) Asset Bundle
===========================================================================

This extension provides an assets bundle with [mediaelement.js and css](https://github.com/johndyer/mediaelement)
for [Yii framework 2.0](http://www.yiiframework.com/) applications.

For license information check the [LICENSE](https://github.com/dhiraj/yii2-mediaelementasset/blob/master/LICENSE)-file.

[![License](https://poser.pugx.org/dhiraj/yii2-mediaelementasset/license.svg)](https://packagist.org/packages/dhiraj/yii2-mediaelementasset)
[![Latest Stable Version](https://poser.pugx.org/dhiraj/yii2-mediaelementasset/v/stable.svg)](https://packagist.org/packages/dhiraj/yii2-mediaelementasset)
[![Latest Unstable Version](https://poser.pugx.org/dhiraj/yii2-mediaelementasset/v/unstable.svg)](https://packagist.org/packages/dhiraj/yii2-mediaelementasset)
[![Total Downloads](https://poser.pugx.org/dhiraj/yii2-mediaelementasset/downloads.svg)](https://packagist.org/packages/dhiraj/yii2-mediaelementasset)


Support
-------
* [GutHub issues](https://github.com/dhiraj/yii2-mediaelementasset/issues)

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run

```bash
composer require "dhiraj/yii2-mediaelementasset:~1.0"
```

or add

```
"dhiraj/yii2-mediaelementasset": "~1.0",
```

to the `require` section of your `composer.json` file.

Usage
-----

In view

```php
traversient\yii\pagepiling\AssetBundle::register($this);

```

or as dependency in your main application asset bundle

```php
class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'\traversient\yii\pagepiling\AssetBundle'
	];
}

```

and both the jquery.pipelining.js and css will be added to your page load.