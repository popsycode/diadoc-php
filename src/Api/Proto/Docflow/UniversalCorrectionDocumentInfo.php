<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/DocumentInfo.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Docflow;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Docflow.UniversalCorrectionDocumentInfo
 */
class UniversalCorrectionDocumentInfo extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * TotalInc optional string = 1
     *
     * @var string
     */
    protected $TotalInc = null;

    /**
     * TotalDec optional string = 2
     *
     * @var string
     */
    protected $TotalDec = null;

    /**
     * VatInc optional string = 3
     *
     * @var string
     */
    protected $VatInc = null;

    /**
     * VatDec optional string = 4
     *
     * @var string
     */
    protected $VatDec = null;

    /**
     * CurrencyCode optional int32 = 5
     *
     * @var int
     */
    protected $CurrencyCode = null;

    /**
     * Grounds optional string = 6
     *
     * @var string
     */
    protected $Grounds = null;

    /**
     * Function required enum = 7
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\FunctionType
     */
    protected $Function = null;

    /**
     * OriginalDocumentDateAndNumber optional message = 8
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    protected $OriginalDocumentDateAndNumber = null;

    /**
     * OriginalDocumentRevisionDateAndNumber optional message = 9
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    protected $OriginalDocumentRevisionDateAndNumber = null;

    /**
     * OriginalDocumentCorrectionDateAndNumber optional message = 10
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    protected $OriginalDocumentCorrectionDateAndNumber = null;

    /**
     * Check if 'TotalInc' has a value
     *
     * @return bool
     */
    public function hasTotalInc()
    {
        return $this->TotalInc !== null;
    }

    /**
     * Get 'TotalInc' value
     *
     * @return string
     */
    public function getTotalInc()
    {
        return $this->TotalInc;
    }

    /**
     * Set 'TotalInc' value
     *
     * @param string $value
     */
    public function setTotalInc($value = null)
    {
        $this->TotalInc = $value;
    }

    /**
     * Check if 'TotalDec' has a value
     *
     * @return bool
     */
    public function hasTotalDec()
    {
        return $this->TotalDec !== null;
    }

    /**
     * Get 'TotalDec' value
     *
     * @return string
     */
    public function getTotalDec()
    {
        return $this->TotalDec;
    }

    /**
     * Set 'TotalDec' value
     *
     * @param string $value
     */
    public function setTotalDec($value = null)
    {
        $this->TotalDec = $value;
    }

    /**
     * Check if 'VatInc' has a value
     *
     * @return bool
     */
    public function hasVatInc()
    {
        return $this->VatInc !== null;
    }

    /**
     * Get 'VatInc' value
     *
     * @return string
     */
    public function getVatInc()
    {
        return $this->VatInc;
    }

    /**
     * Set 'VatInc' value
     *
     * @param string $value
     */
    public function setVatInc($value = null)
    {
        $this->VatInc = $value;
    }

    /**
     * Check if 'VatDec' has a value
     *
     * @return bool
     */
    public function hasVatDec()
    {
        return $this->VatDec !== null;
    }

    /**
     * Get 'VatDec' value
     *
     * @return string
     */
    public function getVatDec()
    {
        return $this->VatDec;
    }

    /**
     * Set 'VatDec' value
     *
     * @param string $value
     */
    public function setVatDec($value = null)
    {
        $this->VatDec = $value;
    }

    /**
     * Check if 'CurrencyCode' has a value
     *
     * @return bool
     */
    public function hasCurrencyCode()
    {
        return $this->CurrencyCode !== null;
    }

    /**
     * Get 'CurrencyCode' value
     *
     * @return int
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * Set 'CurrencyCode' value
     *
     * @param int $value
     */
    public function setCurrencyCode($value = null)
    {
        $this->CurrencyCode = $value;
    }

    /**
     * Check if 'Grounds' has a value
     *
     * @return bool
     */
    public function hasGrounds()
    {
        return $this->Grounds !== null;
    }

    /**
     * Get 'Grounds' value
     *
     * @return string
     */
    public function getGrounds()
    {
        return $this->Grounds;
    }

    /**
     * Set 'Grounds' value
     *
     * @param string $value
     */
    public function setGrounds($value = null)
    {
        $this->Grounds = $value;
    }

    /**
     * Check if 'Function' has a value
     *
     * @return bool
     */
    public function hasFunction()
    {
        return $this->Function !== null;
    }

    /**
     * Get 'Function' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\FunctionType
     */
    public function getFunction()
    {
        return $this->Function;
    }

    /**
     * Set 'Function' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Invoicing\FunctionType $value
     */
    public function setFunction(\AgentSIB\Diadoc\Api\Proto\Invoicing\FunctionType $value)
    {
        $this->Function = $value;
    }

    /**
     * Check if 'OriginalDocumentDateAndNumber' has a value
     *
     * @return bool
     */
    public function hasOriginalDocumentDateAndNumber()
    {
        return $this->OriginalDocumentDateAndNumber !== null;
    }

    /**
     * Get 'OriginalDocumentDateAndNumber' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getOriginalDocumentDateAndNumber()
    {
        return $this->OriginalDocumentDateAndNumber;
    }

    /**
     * Set 'OriginalDocumentDateAndNumber' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value
     */
    public function setOriginalDocumentDateAndNumber(\AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value = null)
    {
        $this->OriginalDocumentDateAndNumber = $value;
    }

    /**
     * Check if 'OriginalDocumentRevisionDateAndNumber' has a value
     *
     * @return bool
     */
    public function hasOriginalDocumentRevisionDateAndNumber()
    {
        return $this->OriginalDocumentRevisionDateAndNumber !== null;
    }

    /**
     * Get 'OriginalDocumentRevisionDateAndNumber' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getOriginalDocumentRevisionDateAndNumber()
    {
        return $this->OriginalDocumentRevisionDateAndNumber;
    }

    /**
     * Set 'OriginalDocumentRevisionDateAndNumber' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value
     */
    public function setOriginalDocumentRevisionDateAndNumber(\AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value = null)
    {
        $this->OriginalDocumentRevisionDateAndNumber = $value;
    }

    /**
     * Check if 'OriginalDocumentCorrectionDateAndNumber' has a value
     *
     * @return bool
     */
    public function hasOriginalDocumentCorrectionDateAndNumber()
    {
        return $this->OriginalDocumentCorrectionDateAndNumber !== null;
    }

    /**
     * Get 'OriginalDocumentCorrectionDateAndNumber' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber
     */
    public function getOriginalDocumentCorrectionDateAndNumber()
    {
        return $this->OriginalDocumentCorrectionDateAndNumber;
    }

    /**
     * Set 'OriginalDocumentCorrectionDateAndNumber' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value
     */
    public function setOriginalDocumentCorrectionDateAndNumber(\AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber $value = null)
    {
        $this->OriginalDocumentCorrectionDateAndNumber = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        if ( ! isset($values['Function'])) {
            throw new \InvalidArgumentException('Field "Function" (tag 7) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'TotalInc' => null,
            'TotalDec' => null,
            'VatInc' => null,
            'VatDec' => null,
            'CurrencyCode' => null,
            'Grounds' => null,
            'OriginalDocumentDateAndNumber' => null,
            'OriginalDocumentRevisionDateAndNumber' => null,
            'OriginalDocumentCorrectionDateAndNumber' => null
        ], $values);

        $message->setTotalInc($values['TotalInc']);
        $message->setTotalDec($values['TotalDec']);
        $message->setVatInc($values['VatInc']);
        $message->setVatDec($values['VatDec']);
        $message->setCurrencyCode($values['CurrencyCode']);
        $message->setGrounds($values['Grounds']);
        $message->setFunction($values['Function']);
        $message->setOriginalDocumentDateAndNumber($values['OriginalDocumentDateAndNumber']);
        $message->setOriginalDocumentRevisionDateAndNumber($values['OriginalDocumentRevisionDateAndNumber']);
        $message->setOriginalDocumentCorrectionDateAndNumber($values['OriginalDocumentCorrectionDateAndNumber']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'UniversalCorrectionDocumentInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'TotalInc',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'TotalDec',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'VatInc',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'VatDec',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'CurrencyCode',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'Grounds',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'Function',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Invoicing.FunctionType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'OriginalDocumentDateAndNumber',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.DocumentDateAndNumber'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'OriginalDocumentRevisionDateAndNumber',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.DocumentDateAndNumber'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'OriginalDocumentCorrectionDateAndNumber',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.DocumentDateAndNumber'
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->Function === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Docflow\\UniversalCorrectionDocumentInfo#Function" (tag 7) is required but has no value.');
        }

        if ($this->TotalInc !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->TotalInc);
        }

        if ($this->TotalDec !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->TotalDec);
        }

        if ($this->VatInc !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->VatInc);
        }

        if ($this->VatDec !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->VatDec);
        }

        if ($this->CurrencyCode !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->CurrencyCode);
        }

        if ($this->Grounds !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->Grounds);
        }

        if ($this->Function !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->Function->value());
        }

        if ($this->OriginalDocumentDateAndNumber !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeVarint($stream, $this->OriginalDocumentDateAndNumber->serializedSize($sizeContext));
            $this->OriginalDocumentDateAndNumber->writeTo($context);
        }

        if ($this->OriginalDocumentRevisionDateAndNumber !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeVarint($stream, $this->OriginalDocumentRevisionDateAndNumber->serializedSize($sizeContext));
            $this->OriginalDocumentRevisionDateAndNumber->writeTo($context);
        }

        if ($this->OriginalDocumentCorrectionDateAndNumber !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeVarint($stream, $this->OriginalDocumentCorrectionDateAndNumber->serializedSize($sizeContext));
            $this->OriginalDocumentCorrectionDateAndNumber->writeTo($context);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TotalInc = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TotalDec = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->VatInc = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->VatDec = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->CurrencyCode = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Grounds = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->Function = \AgentSIB\Diadoc\Api\Proto\Invoicing\FunctionType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber();

                $this->OriginalDocumentDateAndNumber = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber();

                $this->OriginalDocumentRevisionDateAndNumber = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\DocumentDateAndNumber();

                $this->OriginalDocumentCorrectionDateAndNumber = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->TotalInc !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TotalInc);
        }

        if ($this->TotalDec !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TotalDec);
        }

        if ($this->VatInc !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->VatInc);
        }

        if ($this->VatDec !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->VatDec);
        }

        if ($this->CurrencyCode !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->CurrencyCode);
        }

        if ($this->Grounds !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Grounds);
        }

        if ($this->Function !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->Function->value());
        }

        if ($this->OriginalDocumentDateAndNumber !== null) {
            $innerSize = $this->OriginalDocumentDateAndNumber->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->OriginalDocumentRevisionDateAndNumber !== null) {
            $innerSize = $this->OriginalDocumentRevisionDateAndNumber->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->OriginalDocumentCorrectionDateAndNumber !== null) {
            $innerSize = $this->OriginalDocumentCorrectionDateAndNumber->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->TotalInc = null;
        $this->TotalDec = null;
        $this->VatInc = null;
        $this->VatDec = null;
        $this->CurrencyCode = null;
        $this->Grounds = null;
        $this->Function = null;
        $this->OriginalDocumentDateAndNumber = null;
        $this->OriginalDocumentRevisionDateAndNumber = null;
        $this->OriginalDocumentCorrectionDateAndNumber = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Docflow\UniversalCorrectionDocumentInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->TotalInc = ($message->TotalInc !== null) ? $message->TotalInc : $this->TotalInc;
        $this->TotalDec = ($message->TotalDec !== null) ? $message->TotalDec : $this->TotalDec;
        $this->VatInc = ($message->VatInc !== null) ? $message->VatInc : $this->VatInc;
        $this->VatDec = ($message->VatDec !== null) ? $message->VatDec : $this->VatDec;
        $this->CurrencyCode = ($message->CurrencyCode !== null) ? $message->CurrencyCode : $this->CurrencyCode;
        $this->Grounds = ($message->Grounds !== null) ? $message->Grounds : $this->Grounds;
        $this->Function = ($message->Function !== null) ? $message->Function : $this->Function;
        $this->OriginalDocumentDateAndNumber = ($message->OriginalDocumentDateAndNumber !== null) ? $message->OriginalDocumentDateAndNumber : $this->OriginalDocumentDateAndNumber;
        $this->OriginalDocumentRevisionDateAndNumber = ($message->OriginalDocumentRevisionDateAndNumber !== null) ? $message->OriginalDocumentRevisionDateAndNumber : $this->OriginalDocumentRevisionDateAndNumber;
        $this->OriginalDocumentCorrectionDateAndNumber = ($message->OriginalDocumentCorrectionDateAndNumber !== null) ? $message->OriginalDocumentCorrectionDateAndNumber : $this->OriginalDocumentCorrectionDateAndNumber;
    }


}
