<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Forwarding/ForwardingApi.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Forwarding;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Forwarding.ForwardDocumentRequest
 */
class ForwardDocumentRequest extends \Protobuf\AbstractMessage
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
     * ToBoxId required string = 1
     *
     * @var string
     */
    protected $ToBoxId = null;

    /**
     * DocumentId required message = 2
     *
     * @var \AgentSIB\Diadoc\Api\Proto\DocumentId
     */
    protected $DocumentId = null;

    /**
     * Check if 'ToBoxId' has a value
     *
     * @return bool
     */
    public function hasToBoxId()
    {
        return $this->ToBoxId !== null;
    }

    /**
     * Get 'ToBoxId' value
     *
     * @return string
     */
    public function getToBoxId()
    {
        return $this->ToBoxId;
    }

    /**
     * Set 'ToBoxId' value
     *
     * @param string $value
     */
    public function setToBoxId($value)
    {
        $this->ToBoxId = $value;
    }

    /**
     * Check if 'DocumentId' has a value
     *
     * @return bool
     */
    public function hasDocumentId()
    {
        return $this->DocumentId !== null;
    }

    /**
     * Get 'DocumentId' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\DocumentId
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    /**
     * Set 'DocumentId' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\DocumentId $value
     */
    public function setDocumentId(\AgentSIB\Diadoc\Api\Proto\DocumentId $value)
    {
        $this->DocumentId = $value;
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
        if ( ! isset($values['ToBoxId'])) {
            throw new \InvalidArgumentException('Field "ToBoxId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['DocumentId'])) {
            throw new \InvalidArgumentException('Field "DocumentId" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setToBoxId($values['ToBoxId']);
        $message->setDocumentId($values['DocumentId']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ForwardDocumentRequest',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'ToBoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'DocumentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.DocumentId'
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

        if ($this->ToBoxId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Forwarding\\ForwardDocumentRequest#ToBoxId" (tag 1) is required but has no value.');
        }

        if ($this->DocumentId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Forwarding\\ForwardDocumentRequest#DocumentId" (tag 2) is required but has no value.');
        }

        if ($this->ToBoxId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->ToBoxId);
        }

        if ($this->DocumentId !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->DocumentId->serializedSize($sizeContext));
            $this->DocumentId->writeTo($context);
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

                $this->ToBoxId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\DocumentId();

                $this->DocumentId = $innerMessage;

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

        if ($this->ToBoxId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ToBoxId);
        }

        if ($this->DocumentId !== null) {
            $innerSize = $this->DocumentId->serializedSize($context);

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
        $this->ToBoxId = null;
        $this->DocumentId = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Forwarding\ForwardDocumentRequest) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->ToBoxId = ($message->ToBoxId !== null) ? $message->ToBoxId : $this->ToBoxId;
        $this->DocumentId = ($message->DocumentId !== null) ? $message->DocumentId : $this->DocumentId;
    }


}

