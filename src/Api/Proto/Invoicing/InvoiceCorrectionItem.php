<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/InvoiceInfo.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Invoicing;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Invoicing.InvoiceCorrectionItem
 */
class InvoiceCorrectionItem extends \Protobuf\AbstractMessage
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
     * Product required string = 1
     *
     * @var string
     */
    protected $Product = null;

    /**
     * OriginalValues required message = 2
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields
     */
    protected $OriginalValues = null;

    /**
     * CorrectedValues required message = 3
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields
     */
    protected $CorrectedValues = null;

    /**
     * AmountsInc optional message = 4
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff
     */
    protected $AmountsInc = null;

    /**
     * AmountsDec optional message = 5
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff
     */
    protected $AmountsDec = null;

    /**
     * AdditionalInfo optional string = 6
     *
     * @var string
     */
    protected $AdditionalInfo = null;

    /**
     * AdditionalInfos repeated message = 7
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Invoicing\AdditionalInfo>
     */
    protected $AdditionalInfos = null;

    /**
     * Check if 'Product' has a value
     *
     * @return bool
     */
    public function hasProduct()
    {
        return $this->Product !== null;
    }

    /**
     * Get 'Product' value
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * Set 'Product' value
     *
     * @param string $value
     */
    public function setProduct($value)
    {
        $this->Product = $value;
    }

    /**
     * Check if 'OriginalValues' has a value
     *
     * @return bool
     */
    public function hasOriginalValues()
    {
        return $this->OriginalValues !== null;
    }

    /**
     * Get 'OriginalValues' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields
     */
    public function getOriginalValues()
    {
        return $this->OriginalValues;
    }

    /**
     * Set 'OriginalValues' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields $value
     */
    public function setOriginalValues(\AgentSIB\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields $value)
    {
        $this->OriginalValues = $value;
    }

    /**
     * Check if 'CorrectedValues' has a value
     *
     * @return bool
     */
    public function hasCorrectedValues()
    {
        return $this->CorrectedValues !== null;
    }

    /**
     * Get 'CorrectedValues' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields
     */
    public function getCorrectedValues()
    {
        return $this->CorrectedValues;
    }

    /**
     * Set 'CorrectedValues' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields $value
     */
    public function setCorrectedValues(\AgentSIB\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields $value)
    {
        $this->CorrectedValues = $value;
    }

    /**
     * Check if 'AmountsInc' has a value
     *
     * @return bool
     */
    public function hasAmountsInc()
    {
        return $this->AmountsInc !== null;
    }

    /**
     * Get 'AmountsInc' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff
     */
    public function getAmountsInc()
    {
        return $this->AmountsInc;
    }

    /**
     * Set 'AmountsInc' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff $value
     */
    public function setAmountsInc(\AgentSIB\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff $value = null)
    {
        $this->AmountsInc = $value;
    }

    /**
     * Check if 'AmountsDec' has a value
     *
     * @return bool
     */
    public function hasAmountsDec()
    {
        return $this->AmountsDec !== null;
    }

    /**
     * Get 'AmountsDec' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff
     */
    public function getAmountsDec()
    {
        return $this->AmountsDec;
    }

    /**
     * Set 'AmountsDec' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff $value
     */
    public function setAmountsDec(\AgentSIB\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff $value = null)
    {
        $this->AmountsDec = $value;
    }

    /**
     * Check if 'AdditionalInfo' has a value
     *
     * @return bool
     */
    public function hasAdditionalInfo()
    {
        return $this->AdditionalInfo !== null;
    }

    /**
     * Get 'AdditionalInfo' value
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }

    /**
     * Set 'AdditionalInfo' value
     *
     * @param string $value
     */
    public function setAdditionalInfo($value = null)
    {
        $this->AdditionalInfo = $value;
    }

    /**
     * Check if 'AdditionalInfos' has a value
     *
     * @return bool
     */
    public function hasAdditionalInfosList()
    {
        return $this->AdditionalInfos !== null;
    }

    /**
     * Get 'AdditionalInfos' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Invoicing\AdditionalInfo>
     */
    public function getAdditionalInfosList()
    {
        return $this->AdditionalInfos;
    }

    /**
     * Set 'AdditionalInfos' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Invoicing\AdditionalInfo> $value
     */
    public function setAdditionalInfosList(\Protobuf\Collection $value = null)
    {
        $this->AdditionalInfos = $value;
    }

    /**
     * Add a new element to 'AdditionalInfos'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Invoicing\AdditionalInfo $value
     */
    public function addAdditionalInfos(\AgentSIB\Diadoc\Api\Proto\Invoicing\AdditionalInfo $value)
    {
        if ($this->AdditionalInfos === null) {
            $this->AdditionalInfos = new \Protobuf\MessageCollection();
        }

        $this->AdditionalInfos->add($value);
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
        if ( ! isset($values['Product'])) {
            throw new \InvalidArgumentException('Field "Product" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['OriginalValues'])) {
            throw new \InvalidArgumentException('Field "OriginalValues" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['CorrectedValues'])) {
            throw new \InvalidArgumentException('Field "CorrectedValues" (tag 3) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'AmountsInc' => null,
            'AmountsDec' => null,
            'AdditionalInfo' => null,
            'AdditionalInfos' => []
        ], $values);

        $message->setProduct($values['Product']);
        $message->setOriginalValues($values['OriginalValues']);
        $message->setCorrectedValues($values['CorrectedValues']);
        $message->setAmountsInc($values['AmountsInc']);
        $message->setAmountsDec($values['AmountsDec']);
        $message->setAdditionalInfo($values['AdditionalInfo']);

        foreach ($values['AdditionalInfos'] as $item) {
            $message->addAdditionalInfos($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'InvoiceCorrectionItem',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Product',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'OriginalValues',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Invoicing.CorrectableInvoiceItemFields'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'CorrectedValues',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Invoicing.CorrectableInvoiceItemFields'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'AmountsInc',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Invoicing.InvoiceItemAmountsDiff'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'AmountsDec',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Invoicing.InvoiceItemAmountsDiff'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'AdditionalInfo',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'AdditionalInfos',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Invoicing.AdditionalInfo'
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

        if ($this->Product === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Invoicing\\InvoiceCorrectionItem#Product" (tag 1) is required but has no value.');
        }

        if ($this->OriginalValues === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Invoicing\\InvoiceCorrectionItem#OriginalValues" (tag 2) is required but has no value.');
        }

        if ($this->CorrectedValues === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Invoicing\\InvoiceCorrectionItem#CorrectedValues" (tag 3) is required but has no value.');
        }

        if ($this->Product !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Product);
        }

        if ($this->OriginalValues !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->OriginalValues->serializedSize($sizeContext));
            $this->OriginalValues->writeTo($context);
        }

        if ($this->CorrectedValues !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->CorrectedValues->serializedSize($sizeContext));
            $this->CorrectedValues->writeTo($context);
        }

        if ($this->AmountsInc !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->AmountsInc->serializedSize($sizeContext));
            $this->AmountsInc->writeTo($context);
        }

        if ($this->AmountsDec !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeVarint($stream, $this->AmountsDec->serializedSize($sizeContext));
            $this->AmountsDec->writeTo($context);
        }

        if ($this->AdditionalInfo !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->AdditionalInfo);
        }

        if ($this->AdditionalInfos !== null) {
            foreach ($this->AdditionalInfos as $val) {
                $writer->writeVarint($stream, 58);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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

                $this->Product = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields();

                $this->OriginalValues = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Invoicing\CorrectableInvoiceItemFields();

                $this->CorrectedValues = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff();

                $this->AmountsInc = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Invoicing\InvoiceItemAmountsDiff();

                $this->AmountsDec = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->AdditionalInfo = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Invoicing\AdditionalInfo();

                if ($this->AdditionalInfos === null) {
                    $this->AdditionalInfos = new \Protobuf\MessageCollection();
                }

                $this->AdditionalInfos->add($innerMessage);

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

        if ($this->Product !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Product);
        }

        if ($this->OriginalValues !== null) {
            $innerSize = $this->OriginalValues->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->CorrectedValues !== null) {
            $innerSize = $this->CorrectedValues->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->AmountsInc !== null) {
            $innerSize = $this->AmountsInc->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->AmountsDec !== null) {
            $innerSize = $this->AmountsDec->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->AdditionalInfo !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->AdditionalInfo);
        }

        if ($this->AdditionalInfos !== null) {
            foreach ($this->AdditionalInfos as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->Product = null;
        $this->OriginalValues = null;
        $this->CorrectedValues = null;
        $this->AmountsInc = null;
        $this->AmountsDec = null;
        $this->AdditionalInfo = null;
        $this->AdditionalInfos = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Invoicing\InvoiceCorrectionItem) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Product = ($message->Product !== null) ? $message->Product : $this->Product;
        $this->OriginalValues = ($message->OriginalValues !== null) ? $message->OriginalValues : $this->OriginalValues;
        $this->CorrectedValues = ($message->CorrectedValues !== null) ? $message->CorrectedValues : $this->CorrectedValues;
        $this->AmountsInc = ($message->AmountsInc !== null) ? $message->AmountsInc : $this->AmountsInc;
        $this->AmountsDec = ($message->AmountsDec !== null) ? $message->AmountsDec : $this->AmountsDec;
        $this->AdditionalInfo = ($message->AdditionalInfo !== null) ? $message->AdditionalInfo : $this->AdditionalInfo;
        $this->AdditionalInfos = ($message->AdditionalInfos !== null) ? $message->AdditionalInfos : $this->AdditionalInfos;
    }


}

