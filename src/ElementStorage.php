<?php
/**
 * DigitalAudio - Digital Audio Access Protocol (DAAP) library
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/digital-audio
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\DigitalAudio;

class ElementStorage implements \Countable, \Iterator
{
    /**
     * @var \Panlatent\DigitalAudio\Element[]
     */
    protected $elements = [];

    public function __construct()
    {
    }

    public function add(Element $element)
    {
        $this->elements[] = $element;
    }

    public function at($pos)
    {
        return $this->elements[$pos];
    }

    public function one($code)
    {
        foreach ($this->elements as $element) {
            if ($code === $element->getCode()) {
                return $element;
            }
        }

        return false;
    }

    public function find($code)
    {
        $result = [];
        foreach ($this->elements as $element) {
            if ($code === $element->getCode()) {
                $result[] = $element;
            }
        }

        return $result;
    }

    public function count()
    {
        return count($this->elements);
    }

    public function current()
    {
        return current($this->elements);
    }

    public function next()
    {
        next($this->elements);
    }

    public function key()
    {
        return key($this->elements);
    }

    public function valid()
    {
        return key($this->elements) != null;
    }

    public function rewind()
    {
        reset($this->elements);
    }
}