# PHP Filters
A collection of filters implementing the [District5 Filter](https://github.com/district-5/php-filter) interface.

## Installation
Install using composer: 
```bash
composer require district5/filters
```

## Usage
All filters in this library conform to the [District5 Filter](https://github.com/district-5/php-filter) interface. All can be used in the same way:

```php
$value = 'Hello';

$filter = new \District5\Filters\StringLower();
$filteredValue = $filter->filter($value);   // 'hello'
```

These filters do not guarantee consistent return filtered items if the input has not been validated first, for example `ArrayOfStringToInt` relies on the strings being a value that can be converted as `intval` is utilised.

You should validate input first; these filters can then be used to add business logic to the validated data.
If for example you wanted to store hex colour codes but allow users the flexibility of either including or omitting the #, you would need to validate that the string is indeed a hex code,
and then run it through the filter to make sure you always utilise / persist the codes consistently.
