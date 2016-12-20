<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/BilateralDocument.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Documents.BilateralDocument.PriceListMetadata
 */
class PriceListMetadata extends \Protobuf\AbstractMessage
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
     * DocumentStatus optional enum = 1
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    protected $DocumentStatus = null;

    /**
     * PriceListEffectiveDate optional string = 2
     *
     * @var string
     */
    protected $PriceListEffectiveDate = null;

    /**
     * ContractDocumentDate optional string = 3
     *
     * @var string
     */
    protected $ContractDocumentDate = null;

    /**
     * ContractDocumentNumber optional string = 4
     *
     * @var string
     */
    protected $ContractDocumentNumber = null;

    /**
     * ReceiptStatus optional enum = 5
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\ReceiptStatus
     */
    protected $ReceiptStatus = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->DocumentStatus = \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus::UnknownBilateralDocumentStatus();
        $this->ReceiptStatus = \AgentSIB\Diadoc\Api\Proto\Documents\ReceiptStatus::UnknownReceiptStatus();

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'DocumentStatus' has a value
     *
     * @return bool
     */
    public function hasDocumentStatus()
    {
        return $this->DocumentStatus !== null;
    }

    /**
     * Get 'DocumentStatus' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus
     */
    public function getDocumentStatus()
    {
        return $this->DocumentStatus;
    }

    /**
     * Set 'DocumentStatus' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus $value
     */
    public function setDocumentStatus(\AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus $value = null)
    {
        $this->DocumentStatus = $value;
    }

    /**
     * Check if 'PriceListEffectiveDate' has a value
     *
     * @return bool
     */
    public function hasPriceListEffectiveDate()
    {
        return $this->PriceListEffectiveDate !== null;
    }

    /**
     * Get 'PriceListEffectiveDate' value
     *
     * @return string
     */
    public function getPriceListEffectiveDate()
    {
        return $this->PriceListEffectiveDate;
    }

    /**
     * Set 'PriceListEffectiveDate' value
     *
     * @param string $value
     */
    public function setPriceListEffectiveDate($value = null)
    {
        $this->PriceListEffectiveDate = $value;
    }

    /**
     * Check if 'ContractDocumentDate' has a value
     *
     * @return bool
     */
    public function hasContractDocumentDate()
    {
        return $this->ContractDocumentDate !== null;
    }

    /**
     * Get 'ContractDocumentDate' value
     *
     * @return string
     */
    public function getContractDocumentDate()
    {
        return $this->ContractDocumentDate;
    }

    /**
     * Set 'ContractDocumentDate' value
     *
     * @param string $value
     */
    public function setContractDocumentDate($value = null)
    {
        $this->ContractDocumentDate = $value;
    }

    /**
     * Check if 'ContractDocumentNumber' has a value
     *
     * @return bool
     */
    public function hasContractDocumentNumber()
    {
        return $this->ContractDocumentNumber !== null;
    }

    /**
     * Get 'ContractDocumentNumber' value
     *
     * @return string
     */
    public function getContractDocumentNumber()
    {
        return $this->ContractDocumentNumber;
    }

    /**
     * Set 'ContractDocumentNumber' value
     *
     * @param string $value
     */
    public function setContractDocumentNumber($value = null)
    {
        $this->ContractDocumentNumber = $value;
    }

    /**
     * Check if 'ReceiptStatus' has a value
     *
     * @return bool
     */
    public function hasReceiptStatus()
    {
        return $this->ReceiptStatus !== null;
    }

    /**
     * Get 'ReceiptStatus' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\ReceiptStatus
     */
    public function getReceiptStatus()
    {
        return $this->ReceiptStatus;
    }

    /**
     * Set 'ReceiptStatus' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Documents\ReceiptStatus $value
     */
    public function setReceiptStatus(\AgentSIB\Diadoc\Api\Proto\Documents\ReceiptStatus $value = null)
    {
        $this->ReceiptStatus = $value;
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
        $message = new self();
        $values  = array_merge([
            'DocumentStatus' => \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus::UnknownBilateralDocumentStatus(),
            'PriceListEffectiveDate' => null,
            'ContractDocumentDate' => null,
            'ContractDocumentNumber' => null,
            'ReceiptStatus' => \AgentSIB\Diadoc\Api\Proto\Documents\ReceiptStatus::UnknownReceiptStatus()
        ], $values);

        $message->setDocumentStatus($values['DocumentStatus']);
        $message->setPriceListEffectiveDate($values['PriceListEffectiveDate']);
        $message->setContractDocumentDate($values['ContractDocumentDate']);
        $message->setContractDocumentNumber($values['ContractDocumentNumber']);
        $message->setReceiptStatus($values['ReceiptStatus']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PriceListMetadata',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'DocumentStatus',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Documents.BilateralDocument.BilateralDocumentStatus',
                    'default_value' => \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus::UnknownBilateralDocumentStatus()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'PriceListEffectiveDate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'ContractDocumentDate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'ContractDocumentNumber',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'ReceiptStatus',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Documents.ReceiptStatus',
                    'default_value' => \AgentSIB\Diadoc\Api\Proto\Documents\ReceiptStatus::UnknownReceiptStatus()
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

        if ($this->DocumentStatus !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->DocumentStatus->value());
        }

        if ($this->PriceListEffectiveDate !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->PriceListEffectiveDate);
        }

        if ($this->ContractDocumentDate !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->ContractDocumentDate);
        }

        if ($this->ContractDocumentNumber !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->ContractDocumentNumber);
        }

        if ($this->ReceiptStatus !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->ReceiptStatus->value());
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->DocumentStatus = \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->PriceListEffectiveDate = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ContractDocumentDate = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ContractDocumentNumber = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->ReceiptStatus = \AgentSIB\Diadoc\Api\Proto\Documents\ReceiptStatus::valueOf($reader->readVarint($stream));

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

        if ($this->DocumentStatus !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->DocumentStatus->value());
        }

        if ($this->PriceListEffectiveDate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->PriceListEffectiveDate);
        }

        if ($this->ContractDocumentDate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ContractDocumentDate);
        }

        if ($this->ContractDocumentNumber !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ContractDocumentNumber);
        }

        if ($this->ReceiptStatus !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->ReceiptStatus->value());
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
        $this->DocumentStatus = \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\BilateralDocumentStatus::UnknownBilateralDocumentStatus();
        $this->PriceListEffectiveDate = null;
        $this->ContractDocumentDate = null;
        $this->ContractDocumentNumber = null;
        $this->ReceiptStatus = \AgentSIB\Diadoc\Api\Proto\Documents\ReceiptStatus::UnknownReceiptStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Documents\BilateralDocument\PriceListMetadata) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->DocumentStatus = ($message->DocumentStatus !== null) ? $message->DocumentStatus : $this->DocumentStatus;
        $this->PriceListEffectiveDate = ($message->PriceListEffectiveDate !== null) ? $message->PriceListEffectiveDate : $this->PriceListEffectiveDate;
        $this->ContractDocumentDate = ($message->ContractDocumentDate !== null) ? $message->ContractDocumentDate : $this->ContractDocumentDate;
        $this->ContractDocumentNumber = ($message->ContractDocumentNumber !== null) ? $message->ContractDocumentNumber : $this->ContractDocumentNumber;
        $this->ReceiptStatus = ($message->ReceiptStatus !== null) ? $message->ReceiptStatus : $this->ReceiptStatus;
    }


}

