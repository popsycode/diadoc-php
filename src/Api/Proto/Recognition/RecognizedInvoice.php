<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Recognition/Recognition.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Recognition;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Recognition.RecognizedInvoice
 */
class RecognizedInvoice extends \Protobuf\AbstractMessage
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
     * MetadataJson required string = 1
     *
     * @var string
     */
    protected $MetadataJson = null;

    /**
     * ValidationErrorMessage optional string = 2
     *
     * @var string
     */
    protected $ValidationErrorMessage = null;

    /**
     * Check if 'MetadataJson' has a value
     *
     * @return bool
     */
    public function hasMetadataJson()
    {
        return $this->MetadataJson !== null;
    }

    /**
     * Get 'MetadataJson' value
     *
     * @return string
     */
    public function getMetadataJson()
    {
        return $this->MetadataJson;
    }

    /**
     * Set 'MetadataJson' value
     *
     * @param string $value
     */
    public function setMetadataJson($value)
    {
        $this->MetadataJson = $value;
    }

    /**
     * Check if 'ValidationErrorMessage' has a value
     *
     * @return bool
     */
    public function hasValidationErrorMessage()
    {
        return $this->ValidationErrorMessage !== null;
    }

    /**
     * Get 'ValidationErrorMessage' value
     *
     * @return string
     */
    public function getValidationErrorMessage()
    {
        return $this->ValidationErrorMessage;
    }

    /**
     * Set 'ValidationErrorMessage' value
     *
     * @param string $value
     */
    public function setValidationErrorMessage($value = null)
    {
        $this->ValidationErrorMessage = $value;
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
        if ( ! isset($values['MetadataJson'])) {
            throw new \InvalidArgumentException('Field "MetadataJson" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'ValidationErrorMessage' => null
        ], $values);

        $message->setMetadataJson($values['MetadataJson']);
        $message->setValidationErrorMessage($values['ValidationErrorMessage']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'RecognizedInvoice',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'MetadataJson',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ValidationErrorMessage',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
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

        if ($this->MetadataJson === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Recognition\\RecognizedInvoice#MetadataJson" (tag 1) is required but has no value.');
        }

        if ($this->MetadataJson !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->MetadataJson);
        }

        if ($this->ValidationErrorMessage !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->ValidationErrorMessage);
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

                $this->MetadataJson = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ValidationErrorMessage = $reader->readString($stream);

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

        if ($this->MetadataJson !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->MetadataJson);
        }

        if ($this->ValidationErrorMessage !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ValidationErrorMessage);
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
        $this->MetadataJson = null;
        $this->ValidationErrorMessage = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Recognition\RecognizedInvoice) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->MetadataJson = ($message->MetadataJson !== null) ? $message->MetadataJson : $this->MetadataJson;
        $this->ValidationErrorMessage = ($message->ValidationErrorMessage !== null) ? $message->ValidationErrorMessage : $this->ValidationErrorMessage;
    }


}

