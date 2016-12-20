<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/InvoiceInfo.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Invoicing;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Invoicing.PaymentDocumentInfo
 */
class PaymentDocumentInfo extends \Protobuf\AbstractMessage
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
     * DocumentDate required string = 1
     *
     * @var string
     */
    protected $DocumentDate = null;

    /**
     * DocumentNumber required string = 2
     *
     * @var string
     */
    protected $DocumentNumber = null;

    /**
     * Check if 'DocumentDate' has a value
     *
     * @return bool
     */
    public function hasDocumentDate()
    {
        return $this->DocumentDate !== null;
    }

    /**
     * Get 'DocumentDate' value
     *
     * @return string
     */
    public function getDocumentDate()
    {
        return $this->DocumentDate;
    }

    /**
     * Set 'DocumentDate' value
     *
     * @param string $value
     */
    public function setDocumentDate($value)
    {
        $this->DocumentDate = $value;
    }

    /**
     * Check if 'DocumentNumber' has a value
     *
     * @return bool
     */
    public function hasDocumentNumber()
    {
        return $this->DocumentNumber !== null;
    }

    /**
     * Get 'DocumentNumber' value
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * Set 'DocumentNumber' value
     *
     * @param string $value
     */
    public function setDocumentNumber($value)
    {
        $this->DocumentNumber = $value;
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
        if ( ! isset($values['DocumentDate'])) {
            throw new \InvalidArgumentException('Field "DocumentDate" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['DocumentNumber'])) {
            throw new \InvalidArgumentException('Field "DocumentNumber" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setDocumentDate($values['DocumentDate']);
        $message->setDocumentNumber($values['DocumentNumber']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'PaymentDocumentInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'DocumentDate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'DocumentNumber',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
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

        if ($this->DocumentDate === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Invoicing\\PaymentDocumentInfo#DocumentDate" (tag 1) is required but has no value.');
        }

        if ($this->DocumentNumber === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Invoicing\\PaymentDocumentInfo#DocumentNumber" (tag 2) is required but has no value.');
        }

        if ($this->DocumentDate !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->DocumentDate);
        }

        if ($this->DocumentNumber !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->DocumentNumber);
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

                $this->DocumentDate = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->DocumentNumber = $reader->readString($stream);

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

        if ($this->DocumentDate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->DocumentDate);
        }

        if ($this->DocumentNumber !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->DocumentNumber);
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
        $this->DocumentDate = null;
        $this->DocumentNumber = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Invoicing\PaymentDocumentInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->DocumentDate = ($message->DocumentDate !== null) ? $message->DocumentDate : $this->DocumentDate;
        $this->DocumentNumber = ($message->DocumentNumber !== null) ? $message->DocumentNumber : $this->DocumentNumber;
    }


}

