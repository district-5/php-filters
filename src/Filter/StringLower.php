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
namespace District5\Filter;

/**
 * StringLower
 * 
 * A string filter to make all characters lower case (this
 * filter just proxies PHP's strtolower function)
 * 
 * @author Mark Morgan <mark.morgan@district5.co.uk>
 */
class StringLower implements I
{
	
	/**
	 * (non-PHPdoc)
	 * @see \District5\Filter\I::filter()
	 */
	public function filter($value)
	{
        if (extension_loaded('mbstring'))
        {
            return mb_strtolower($value);
        }

		return strtolower($value);
	}
}