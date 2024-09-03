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

use District5\Filters\StringTrimDoubleOrMoreWhitespace as StringTrimDoubleOrMoreWhitespaceFilter;
use PHPUnit\Framework\TestCase;

/**
 * StringTrimRightTest
 */
class StringTrimDoubleOrMoreWhitespaceTest extends TestCase
{
    public function testNoModifySimpleString()
    {
        $value = 'Already OK';

        $filter = new StringTrimDoubleOrMoreWhitespaceFilter();

        $this->assertEquals($value, $filter->filter($value));
    }

    public function testModifySimpleString()
    {
        $value = 'Not  OK';

        $filter = new StringTrimDoubleOrMoreWhitespaceFilter();

        $this->assertEquals('Not OK', $filter->filter($value));
    }

    public function testNoModifyComplexString()
    {
        $value = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

        $filter = new StringTrimDoubleOrMoreWhitespaceFilter();

        $this->assertEquals($value, $filter->filter($value));
    }

    public function testModifyComplexString()
    {
        $correctValue = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $value = "Lorem  Ipsum is   simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever   since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop   publishing software like Aldus  PageMaker including versions of Lorem Ipsum.";

        $filter = new StringTrimDoubleOrMoreWhitespaceFilter();

        $this->assertEquals($correctValue, $filter->filter($value));
    }
}
