# Currency Formatter

Tiny Laravel worldwide currency formatter

## Install
```sh
composer require tal7aouy/laracurrency
```

## Usage

```php
use Tal7aouy\LaraCurrency\Facades\Currency

Currency::currency("EUR")->format(256)          // 256,00 €
Currency::currency("EUR")->format(256, true)    // 256 €
Currency::currency("USD")->format(256)          // $256,00
Currency::currency("USD")->format(256, true)    // $256

Currency::currency("GBP")->format(256)          // £256.00
Currency::currency("BTC")->format(256)          // 256.00000000Ƀ

Currency::currency("USD")->format(123456789)    // $123,456,789.00
Currency::currency("EUR")->format(123456789)    // 123.456.789,00 €
```

**Use custom currency Symbol**
```php
Currency::currency("RSD")->setSymbol("Din")->format(123456789)  // 123.456.789,00 Din
```

Available Currencies:
[CURRENCIES](CURRENCIES.md) 

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Security
If you discover any security-related issues, use the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
