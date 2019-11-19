# Rupokify\SSLCommerz

SSLCommerz is a Laravel Package for the SSLCommerz Payment Gateway API

## Installation

You will need [composer](https://getcomposer.org/) to install SSLCommerz. Then publish assets and migrate the table for payment records.

```bash
composer require "rupokify/sslcommerz" --no-cache
php artisan vendor:publish
php artisan migrate
```

If you are using below Laravel 5.5 , you will need to edit **config/app.php** and add the following line in the providers section.

```php
Rupokify\SSLCommerz\SSLCommerzServiceProvider::class
```

Add the following constants in the **.env** file of your Laravel Project.

```bash
API_DOMAIN_URL=https://sandbox.sslcommerz.com
STORE_ID=PUT_YOUR_SANDBOX_STORE_ID
STORE_PASSWORD=PUT_YOUR_SANDBOX_STORE_PASSWORD
IS_LOCALHOST=true
```

Clear config cache if required.

```bash
php artisan config:cache
```

That's it! Enjoy!

## Usage

Go to *http://yourdomain/example1* for serving the Payment Modal on your own site.

Go to *http://yourdomain/example2* for serving the Payment Modal from SSLCommerz site.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## Nota Bene
* I don't have any live SSLCommerz store. So could not test that. Please open an issue if you face any problem with **LIVE** payments so I can test with you and fix that.
* I didn't refactor a single line of code from the [SSLCommerz Official Library](https://github.com/sslcommerz/Integration_in_Laravel-5.6-with-IPN). Don't blame/curse me for the coding of the Service Class, Abstract Class, Interface and the View Templates. Maybe someday I'll have some time and will refactor their code ;)

## License
[MIT](https://opensource.org/licenses/MIT)
