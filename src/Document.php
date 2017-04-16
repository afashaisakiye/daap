<?php
/**
 * DigitalAudio - Digital Audio Access Protocol (DAAP) library
 *
 * @author  panlatent@gmail.com
 * @link    https://github.com/panlatent/digital-audio
 * @license https://opensource.org/licenses/MIT
 */

namespace Panlatent\DigitalAudio;

class Document
{
    /**
     * @var \Panlatent\DigitalAudio\ElementFactory
     */
    protected $elementFactory;

    /**
     * @var \Panlatent\DigitalAudio\Element[]
     */
    protected $elements = [];

    public function __construct(ElementFactory $elementFactory, $binaryData)
    {
        $this->elementFactory = $elementFactory;
        $this->elements = $this->parseBinaryData($binaryData);
    }

    public static function create($binaryData)
    {
        return new static(new ElementFactory(), $binaryData);
    }

    /**
     * @return \Panlatent\DigitalAudio\Element[]
     */
    public function getElements()
    {
        return $this->elements;
    }

    protected function parseBinaryData($binaryData)
    {
        $elements = [];
        for ($value = null; strlen($binaryData) > 8; $value = null) {
            $code = substr($binaryData, 0, 4); //$tag
            $arr = unpack('Ni', substr($binaryData, 4, 4));
            $dataLength = $arr['i'];

            if (false === ($element = $this->elementFactory->create($code))) {
                throw new Exception("Not found code definition $code");
            }
            switch ($element->getType()) {
                case ElementValueType::MAP:
                    $subCode = substr($binaryData, 8, 4);
                    if (false === $this->elementFactory->find($subCode)) { // if empty map
                        $value = substr($binaryData, 8, $dataLength);
                    } else {
                        $children = $this->parseBinaryData(substr($binaryData, 8, $dataLength));
                        $element->setChildren($children);
                        $value = substr($binaryData, 16, 4);
                    }
                    break;
                case ElementValueType::SHORT:
                    $arr = unpack('c', substr($binaryData, 8 + 1, 2));
                    $value = $arr[1];
                    break;
                case ElementValueType::INT:
                case ElementValueType::LONG:
                    $arr = unpack('Ni', substr($binaryData, 8, $dataLength));
                    $value = $arr['i'];
                    break;
                case ElementValueType::BYTE:
                    $value = substr($binaryData, 8, $dataLength);
                    break;
                case ElementValueType::STRING:
                    $arr = unpack('c', substr($binaryData, 8, $dataLength));
                    $value = $arr[1];
                    break;
            }
            $binaryData = substr($binaryData, 8 + $dataLength, strlen($binaryData) - (8 + $dataLength));

            $element->setValue($value);
            $elements[] = $element;
        }

        return $elements;
    }
}