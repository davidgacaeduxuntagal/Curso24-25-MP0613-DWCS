Jaxon View for Latte
====================

Render views with the [Latte template engine](https://latte.nette.org/) in Jaxon applications.

Installation
------------

Install this package with Composer.

```json
"require": {
    "jaxon-php/jaxon-latte": "~3.0"
}
```

Usage
-----

Foreach directory containing Latte templates, add an entry to the `app.views` section in the configuration.

```php
    'app' => [
        'views' => [
            'demo' => [
                'directory' => '/path/to/demo/views',
                'extension' => '.latte',
                'renderer' => 'latte',
            ],
        ],
    ],
```

In the application classes, this is how to render a view in this directory.

```php
class MyClass extends \Jaxon\CallableClass
{
    public function action()
    {
        $this->response->html('content-id', $this->view()->render('demo::/sub/dir/file'));
        return $this->response;
    }
}
```

Read the [documentation](https://www.jaxon-php.org/docs/v3x/advanced/views.html) to learn more about views in Jaxon applications.
