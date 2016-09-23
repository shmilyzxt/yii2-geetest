yii2-geetest
============
a yii2 extendsion for geetest

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require shmilyzxt/yii2-geetest "dev-master"
```

or add

```
"shmilyzxt/yii2-geetest": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

configure module like this:

```php
'geetest' => [
            "class" => 'shmilyzxt\geetest\Module',
            'geetestId' => '42d37cd46fade3f33b516f3f9e50f359',
            'geetestKey' => '05c0570759b50e05e14a2cbd15a5c307',
        ],
```

```php
<?= \shmilyzxt\geetest\GeetestWidget::widget(['type'=>'popup']); ?>
```

Note
-----

you may need modify `shmilyzxt/yii2-geetest/assets/*.js` and `shmilyzxt/yii2-geetest/controller/GeetestController` `actionVerifyloginservlet` to deal your validate action.