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
namespace District5Tests\FilterTests;

use District5\Filter\StringTrim as StringTrimFilter;
use PHPUnit\Framework\TestCase;

/**
 * Class StringTrimTest
 * @package District5Tests\FilterTests
 */
class StringTrimTest extends TestCase
{
    public function testNoModifyNoLeadingTrailingSpaceString()
    {
        $value = 'AlreadyOK';

        $filter = new StringTrimFilter();

        $this->assertEquals('AlreadyOK', $filter->filter($value));
    }

    public function testNoModifyInternalSpaceString()
    {
        $value = 'Already OK';

        $filter = new StringTrimFilter();

        $this->assertEquals('Already OK', $filter->filter($value));
    }

    public function testModifyStringSingleWhitespaceFront()
    {
        $value = ' notOk';

        $filter = new StringTrimFilter();

        $this->assertEquals('notOk', $filter->filter($value));
    }

    public function testModifyStringMoreThan1WhitespaceFront()
    {
        $value = '  notOk';

        $filter = new StringTrimFilter();

        $this->assertEquals('notOk', $filter->filter($value));
    }

    public function testModifyStringSingleWhitespaceEnd()
    {
        $value = 'notOk ';

        $filter = new StringTrimFilter();

        $this->assertEquals('notOk', $filter->filter($value));
    }

    public function testModifyStringMoreThan1WhitespaceEnd()
    {
        $value = 'notOk  ';

        $filter = new StringTrimFilter();

        $this->assertEquals('notOk', $filter->filter($value));
    }

    public function testModifyStringSingleWhitespaceFrontEnd()
    {
        $value = ' notOk ';

        $filter = new StringTrimFilter();

        $this->assertEquals('notOk', $filter->filter($value));
    }

    public function testModifyStringMoreThan1WhitespaceFrontEnd()
    {
        $value = '  notOk  ';

        $filter = new StringTrimFilter();

        $this->assertEquals('notOk', $filter->filter($value));
    }

    public function testModifyStringCombination()
    {
        $value = '  not Ok  ';

        $filter = new StringTrimFilter();

        $this->assertEquals('not Ok', $filter->filter($value));
    }
}