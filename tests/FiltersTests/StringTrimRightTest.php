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

use District5\Filters\StringTrimRight as StringTrimRightFilter;
use PHPUnit\Framework\TestCase;

/**
 * StringTrimRightTest
 */
class StringTrimRightTest extends TestCase
{
    public function testNoModifyNoLeadingTrailingSpaceString()
    {
        $value = 'AlreadyOK';

        $filter = new StringTrimRightFilter();

        $this->assertEquals('AlreadyOK', $filter->filter($value));
    }

    public function testNoModifyInternalSpaceString()
    {
        $value = 'Already OK';

        $filter = new StringTrimRightFilter();

        $this->assertEquals('Already OK', $filter->filter($value));
    }

    public function testNoModifyStringSingleWhitespaceFront()
    {
        $value = ' notOk';

        $filter = new StringTrimRightFilter();

        $this->assertEquals(' notOk', $filter->filter($value));
    }

    public function testNoModifyStringMoreThan1WhitespaceFront()
    {
        $value = '  notOk';

        $filter = new StringTrimRightFilter();

        $this->assertEquals('  notOk', $filter->filter($value));
    }

    public function testModifyStringSingleWhitespaceEnd()
    {
        $value = 'notOk ';

        $filter = new StringTrimRightFilter();

        $this->assertEquals('notOk', $filter->filter($value));
    }

    public function testModifyStringMoreThan1WhitespaceEnd()
    {
        $value = 'notOk  ';

        $filter = new StringTrimRightFilter();

        $this->assertEquals('notOk', $filter->filter($value));
    }

    public function testModifyStringSingleWhitespaceFrontEnd()
    {
        $value = ' notOk ';

        $filter = new StringTrimRightFilter();

        $this->assertEquals(' notOk', $filter->filter($value));
    }

    public function testModifyStringMoreThan1WhitespaceFrontEnd()
    {
        $value = '  notOk  ';

        $filter = new StringTrimRightFilter();

        $this->assertEquals('  notOk', $filter->filter($value));
    }

    public function testModifyStringCombination()
    {
        $value = '  not Ok  ';

        $filter = new StringTrimRightFilter();

        $this->assertEquals('  not Ok', $filter->filter($value));
    }
}