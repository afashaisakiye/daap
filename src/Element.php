<?php
/**
 * Daap - Digital Audio Access Protocol library for PHP
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/daap
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\Daap;

class Element
{
    use ElementStorageTrait;

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
     * @var \Panlatent\Daap\ElementStorage
     */
    protected $elements;

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
     * @return \Panlatent\Daap\ElementStorage
     */
    public function getChildren()
    {
        return $this->elements;
    }

    /**
     * @param \Panlatent\Daap\ElementStorage $elements
     */
    public function setChildren(ElementStorage $elements)
    {
        $this->elements = $elements;
    }
}