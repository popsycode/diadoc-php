<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/DocflowApi.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Docflow;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Docflow.GetDocflowRequest
 */
class GetDocflowRequest extends \Protobuf\AbstractMessage
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
     * DocumentId required message = 1
     *
     * @var \AgentSIB\Diadoc\Api\Proto\DocumentId
     */
    protected $DocumentId = null;

    /**
     * LastEventId optional string = 2
     *
     * @var string
     */
    protected $LastEventId = null;

    /**
     * InjectEntityContent optional bool = 3
     *
     * @var bool
     */
    protected $InjectEntityContent = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->InjectEntityContent = false;

        parent::__construct($stream, $configuration);
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
     * Check if 'LastEventId' has a value
     *
     * @return bool
     */
    public function hasLastEventId()
    {
        return $this->LastEventId !== null;
    }

    /**
     * Get 'LastEventId' value
     *
     * @return string
     */
    public function getLastEventId()
    {
        return $this->LastEventId;
    }

    /**
     * Set 'LastEventId' value
     *
     * @param string $value
     */
    public function setLastEventId($value = null)
    {
        $this->LastEventId = $value;
    }

    /**
     * Check if 'InjectEntityContent' has a value
     *
     * @return bool
     */
    public function hasInjectEntityContent()
    {
        return $this->InjectEntityContent !== null;
    }

    /**
     * Get 'InjectEntityContent' value
     *
     * @return bool
     */
    public function getInjectEntityContent()
    {
        return $this->InjectEntityContent;
    }

    /**
     * Set 'InjectEntityContent' value
     *
     * @param bool $value
     */
    public function setInjectEntityContent($value = null)
    {
        $this->InjectEntityContent = $value;
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
        if ( ! isset($values['DocumentId'])) {
            throw new \InvalidArgumentException('Field "DocumentId" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'LastEventId' => null,
            'InjectEntityContent' => false
        ], $values);

        $message->setDocumentId($values['DocumentId']);
        $message->setLastEventId($values['LastEventId']);
        $message->setInjectEntityContent($values['InjectEntityContent']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GetDocflowRequest',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'DocumentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.DocumentId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'LastEventId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'InjectEntityContent',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
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

        if ($this->DocumentId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Docflow\\GetDocflowRequest#DocumentId" (tag 1) is required but has no value.');
        }

        if ($this->DocumentId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->DocumentId->serializedSize($sizeContext));
            $this->DocumentId->writeTo($context);
        }

        if ($this->LastEventId !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->LastEventId);
        }

        if ($this->InjectEntityContent !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->InjectEntityContent);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\DocumentId();

                $this->DocumentId = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->LastEventId = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->InjectEntityContent = $reader->readBool($stream);

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

        if ($this->DocumentId !== null) {
            $innerSize = $this->DocumentId->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->LastEventId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->LastEventId);
        }

        if ($this->InjectEntityContent !== null) {
            $size += 1;
            $size += 1;
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
        $this->DocumentId = null;
        $this->LastEventId = null;
        $this->InjectEntityContent = false;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Docflow\GetDocflowRequest) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->DocumentId = ($message->DocumentId !== null) ? $message->DocumentId : $this->DocumentId;
        $this->LastEventId = ($message->LastEventId !== null) ? $message->LastEventId : $this->LastEventId;
        $this->InjectEntityContent = ($message->InjectEntityContent !== null) ? $message->InjectEntityContent : $this->InjectEntityContent;
    }


}

