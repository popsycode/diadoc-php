<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/ResolutionInfo.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Events;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Events.ResolutionInfo
 */
class ResolutionInfo extends \Protobuf\AbstractMessage
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
     * ResolutionType optional enum = 1
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType
     */
    protected $ResolutionType = null;

    /**
     * Author required string = 2
     *
     * @var string
     */
    protected $Author = null;

    /**
     * InitialRequestId optional string = 3
     *
     * @var string
     */
    protected $InitialRequestId = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->ResolutionType = \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType::UnknownResolutionType();

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'ResolutionType' has a value
     *
     * @return bool
     */
    public function hasResolutionType()
    {
        return $this->ResolutionType !== null;
    }

    /**
     * Get 'ResolutionType' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType
     */
    public function getResolutionType()
    {
        return $this->ResolutionType;
    }

    /**
     * Set 'ResolutionType' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType $value
     */
    public function setResolutionType(\AgentSIB\Diadoc\Api\Proto\Events\ResolutionType $value = null)
    {
        $this->ResolutionType = $value;
    }

    /**
     * Check if 'Author' has a value
     *
     * @return bool
     */
    public function hasAuthor()
    {
        return $this->Author !== null;
    }

    /**
     * Get 'Author' value
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->Author;
    }

    /**
     * Set 'Author' value
     *
     * @param string $value
     */
    public function setAuthor($value)
    {
        $this->Author = $value;
    }

    /**
     * Check if 'InitialRequestId' has a value
     *
     * @return bool
     */
    public function hasInitialRequestId()
    {
        return $this->InitialRequestId !== null;
    }

    /**
     * Get 'InitialRequestId' value
     *
     * @return string
     */
    public function getInitialRequestId()
    {
        return $this->InitialRequestId;
    }

    /**
     * Set 'InitialRequestId' value
     *
     * @param string $value
     */
    public function setInitialRequestId($value = null)
    {
        $this->InitialRequestId = $value;
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
        if ( ! isset($values['Author'])) {
            throw new \InvalidArgumentException('Field "Author" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'ResolutionType' => \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType::UnknownResolutionType(),
            'InitialRequestId' => null
        ], $values);

        $message->setResolutionType($values['ResolutionType']);
        $message->setAuthor($values['Author']);
        $message->setInitialRequestId($values['InitialRequestId']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ResolutionInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'ResolutionType',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Events.ResolutionType',
                    'default_value' => \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType::UnknownResolutionType()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Author',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'InitialRequestId',
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

        if ($this->Author === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\ResolutionInfo#Author" (tag 2) is required but has no value.');
        }

        if ($this->ResolutionType !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->ResolutionType->value());
        }

        if ($this->Author !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Author);
        }

        if ($this->InitialRequestId !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->InitialRequestId);
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

                $this->ResolutionType = \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Author = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->InitialRequestId = $reader->readString($stream);

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

        if ($this->ResolutionType !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->ResolutionType->value());
        }

        if ($this->Author !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Author);
        }

        if ($this->InitialRequestId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->InitialRequestId);
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
        $this->ResolutionType = \AgentSIB\Diadoc\Api\Proto\Events\ResolutionType::UnknownResolutionType();
        $this->Author = null;
        $this->InitialRequestId = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Events\ResolutionInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->ResolutionType = ($message->ResolutionType !== null) ? $message->ResolutionType : $this->ResolutionType;
        $this->Author = ($message->Author !== null) ? $message->Author : $this->Author;
        $this->InitialRequestId = ($message->InitialRequestId !== null) ? $message->InitialRequestId : $this->InitialRequestId;
    }


}

