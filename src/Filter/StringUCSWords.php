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
 * A string filter to make all characters upper case (this
 * filter just proxies PHP's strtoupper function)
 * 
 * @author District5
 * @package District5\Filter
 */
class StringUCSWords implements I
{
	/**
	 * (non-PHPdoc)
	 * @see \District5\Filter\I::filter()
	 */
	public function filter($value)
	{
	    if (extension_loaded('mbstring')) {
            return mb_convert_case($value, MB_CASE_TITLE, "UTF-8");
        }

		return ucwords($value);
	}
}