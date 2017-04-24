<?php
/**
 * Daap - Digital Audio Access Protocol library for PHP
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/daap
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\Daap;

abstract class ElementValueType
{
    const SHORT = 1;
    const INT = 2;
    const LONG = 4;
    const STRING = 8;
    const BYTE = 16;
    const MAP = 32;
}