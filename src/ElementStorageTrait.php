<?php
/**
 * DigitalAudio - Digital Audio Access Protocol (DAAP) library
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/digital-audio
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\DigitalAudio;

/**
 * Class ElementStorageTrait
 *
 * @package Panlatent\DigitalAudio
 * @property \Panlatent\DigitalAudio\ElementStorage $elements
 */
trait ElementStorageTrait
{
    public function at($pos)
    {
        return $this->elements->at($pos);
    }

    public function one($code)
    {
        return $this->elements->one($code);
    }

    public function find($code)
    {
        return $this->elements->find($code);
    }
}