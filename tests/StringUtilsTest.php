<?php

namespace Tests\StringUtils;

require 'vendor/autoload.php';

use Webmozart\Assert\Assert;

use function App\StringUtils\capitalize;

Assert::eq(capitalize('hello'), 'Hello');

Assert::eq(capitalize(''), '');
