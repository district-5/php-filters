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

use District5\Filters\StringUpper as StringUpperFilter;
use PHPUnit\Framework\TestCase;

/**
 * StringUpperTest
 */
class StringUpperTest extends TestCase
{
    public function testNoModifyStringAlreadyUppercase()
    {
        $value = 'NOMODIFY';

        $filter = new StringUpperFilter();

        $this->assertEquals('NOMODIFY', $filter->filter($value));
    }

    public function testCheckStringWithMultipleLowercase()
    {
        $value = 'ToModify';

        $filter = new StringUpperFilter();

        $this->assertEquals('TOMODIFY', $filter->filter($value));
    }
}