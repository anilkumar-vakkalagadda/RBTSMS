RBT SMS
=======
RBT SMS Component

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist rbt/yii2-rbtsms "*"
```

or add

```
"rbt/yii2-rbtsms": "*"
```

to the require section of your `composer.json` file.


Configuration
---------------
To use this extension, you have to configure the Connection class in your application configuration:

return [
    //....
    'components' => [
        'sms'	=> [
    		'class' => '\rbt\sms\Sms',
    		'APIKEY' => 'apikey',
    		'SENDER_NAME' => 'sms sender name',
    		'SMS_URL'=>'sms service url'    		
    	],
    ]
];


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \rbt\sms\Sms::SmsSend($phone_number,$message); ?>```


