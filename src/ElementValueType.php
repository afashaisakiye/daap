<?php
/**
 * DigitalAudio - Digital Audio Access Protocol (DAAP) library
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/digital-audio
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\DigitalAudio;

abstract class ElementValueType
{
    const SHORT = 1;
    const INT = 2;
    const LONG = 4;
    const STRING = 8;
    const BYTE = 16;
    const MAP = 32;
}