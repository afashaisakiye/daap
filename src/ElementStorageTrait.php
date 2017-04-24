<?php
/**
 * Daap - Digital Audio Access Protocol library for PHP
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/daap
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\Daap;

/**
 * Class ElementStorageTrait
 *
 * @package Panlatent\DigitalAudio
 * @property \Panlatent\Daap\ElementStorage $elements
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