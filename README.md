## Installation

```bash
$ composer require malikalichsan/dateindonesia
```

## Usage: 
```php
use Malikalichsan\DateIndonesia\DateIndonesia;
use Carbon\Carbon;

DateIndonesia::getFormatted(Carbon::now()->format('w d m Y H i T'));
```

## Test:
```bash
$ php test/test.php
```