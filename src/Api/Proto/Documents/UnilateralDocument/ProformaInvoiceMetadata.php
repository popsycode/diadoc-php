<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/UnilateralDocument.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents\UnilateralDocument;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Documents.UnilateralDocument.ProformaInvoiceMetadata
 */
class ProformaInvoiceMetadata extends \Protobuf\AbstractMessage
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
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\UnilateralDocument\UnilateralDocumentStatus
     */
    protected $DocumentStatus = null;

    /**
     * Total required string = 2
     *
     * @var string
     */
    protected $Total = null;

    /**
     * Vat optional string = 3
     *
     * @var string
     */
    protected $Vat = null;

    /**
     * Grounds optional string = 4
     *
     * @var string
     */
    protected $Grounds = null;

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
        $this->DocumentStatus = \AgentSIB\Diadoc\Api\Proto\Documents\UnilateralDocument\UnilateralDocumentStatus::UnknownUnilateralDocumentStatus();
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
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\UnilateralDocument\UnilateralDocumentStatus
     */
    public function getDocumentStatus()
    {
        return $this->DocumentStatus;
    }

    /**
     * Set 'DocumentStatus' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Documents\UnilateralDocument\UnilateralDocumentStatus $value
     */
    public function setDocumentStatus(\AgentSIB\Diadoc\Api\Proto\Documents\UnilateralDocument\UnilateralDocumentStatus $value = null)
    {
        $this->DocumentStatus = $value;
    }

    /**
     * Check if 'Total' has a value
     *
     * @return bool
     */
    public function hasTotal()
    {
        return $this->Total !== null;
    }

    /**
     * Get 'Total' value
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * Set 'Total' value
     *
     * @param string $value
     */
    public function setTotal($value)
    {
        $this->Total = $value;
    }

    /**
     * Check if 'Vat' has a value
     *
     * @return bool
     */
    public function hasVat()
    {
        return $this->Vat !== null;
    }

    /**
     * Get 'Vat' value
     *
     * @return string
     */
    public function getVat()
    {
        return $this->Vat;
    }

    /**
     * Set 'Vat' value
     *
     * @param string $value
     */
    public function setVat($value = null)
    {
        $this->Vat = $value;
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
        if ( ! isset($values['Total'])) {
            throw new \InvalidArgumentException('Field "Total" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'DocumentStatus' => \AgentSIB\Diadoc\Api\Proto\Documents\UnilateralDocument\UnilateralDocumentStatus::UnknownUnilateralDocumentStatus(),
            'Vat' => null,
            'Grounds' => null,
            'ReceiptStatus' => \AgentSIB\Diadoc\Api\Proto\Documents\ReceiptStatus::UnknownReceiptStatus()
        ], $values);

        $message->setDocumentStatus($values['DocumentStatus']);
        $message->setTotal($values['Total']);
        $message->setVat($values['Vat']);
        $message->setGrounds($values['Grounds']);
        $message->setReceiptStatus($values['ReceiptStatus']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ProformaInvoiceMetadata',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'DocumentStatus',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Documents.UnilateralDocument.UnilateralDocumentStatus',
                    'default_value' => \AgentSIB\Diadoc\Api\Proto\Documents\UnilateralDocument\UnilateralDocumentStatus::UnknownUnilateralDocumentStatus()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Total',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Vat',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Grounds',
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

        if ($this->Total === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\UnilateralDocument\\ProformaInvoiceMetadata#Total" (tag 2) is required but has no value.');
        }

        if ($this->DocumentStatus !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->DocumentStatus->value());
        }

        if ($this->Total !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Total);
        }

        if ($this->Vat !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->Vat);
        }

        if ($this->Grounds !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->Grounds);
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

                $this->DocumentStatus = \AgentSIB\Diadoc\Api\Proto\Documents\UnilateralDocument\UnilateralDocumentStatus::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Total = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Vat = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Grounds = $reader->readString($stream);

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

        if ($this->Total !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Total);
        }

        if ($this->Vat !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Vat);
        }

        if ($this->Grounds !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Grounds);
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
        $this->DocumentStatus = \AgentSIB\Diadoc\Api\Proto\Documents\UnilateralDocument\UnilateralDocumentStatus::UnknownUnilateralDocumentStatus();
        $this->Total = null;
        $this->Vat = null;
        $this->Grounds = null;
        $this->ReceiptStatus = \AgentSIB\Diadoc\Api\Proto\Documents\ReceiptStatus::UnknownReceiptStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Documents\UnilateralDocument\ProformaInvoiceMetadata) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->DocumentStatus = ($message->DocumentStatus !== null) ? $message->DocumentStatus : $this->DocumentStatus;
        $this->Total = ($message->Total !== null) ? $message->Total : $this->Total;
        $this->Vat = ($message->Vat !== null) ? $message->Vat : $this->Vat;
        $this->Grounds = ($message->Grounds !== null) ? $message->Grounds : $this->Grounds;
        $this->ReceiptStatus = ($message->ReceiptStatus !== null) ? $message->ReceiptStatus : $this->ReceiptStatus;
    }


}

