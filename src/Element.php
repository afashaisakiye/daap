<?php
/**
 * DigitalAudio - Digital Audio Access Protocol (DAAP) library
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/digital-audio
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\DigitalAudio;

class Element
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $type;

    /**
     * @var string
     */
    protected $value = '';

    /**
     * @var \Panlatent\DigitalAudio\ElementStorage
     */
    protected $children;

    public function __construct($code, $description, $name, $type)
    {
        $this->code = $code;
        $this->description = $description;
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return \Panlatent\DigitalAudio\ElementStorage
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param \Panlatent\DigitalAudio\ElementStorage $children
     */
    public function setChildren(ElementStorage $children)
    {
        $this->children = $children;
    }
}