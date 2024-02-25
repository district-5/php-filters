<?php

/**
 * District5 - Filters
 *
 * @copyright District5
 *
 * @author District5 Digital
 * @link https://www.district5.co.uk
 *
 * @license This software and associated documentation (the "Software") may not be
 * used, copied, modified, distributed, published or licensed to any 3rd party
 * without the written permission of District5 or its author.
 *
 * The above copyright notice and this permission notice shall be included in
 * all licensed copies of the Software.
 */
namespace District5Tests\FiltersTests;

use District5\Filters\StringLower as StringLowerFilter;
use PHPUnit\Framework\TestCase;

/**
 * Class StringLowerTest
 * @package District5Tests\FilterTests
 */
class StringLowerTest extends TestCase
{
    public function testNoModifyStringAlreadyLowercase()
    {
        $value = 'nomodify';

        $filter = new StringLowerFilter();

        $this->assertEquals('nomodify', $filter->filter($value));
    }

    public function testCheckStringWithMultipleUppercase()
    {
        $value = 'ToModify';

        $filter = new StringLowerFilter();

        $this->assertEquals('tomodify', $filter->filter($value));
    }
}