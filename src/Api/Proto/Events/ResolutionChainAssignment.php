<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Events;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Events.ResolutionChainAssignment
 */
class ResolutionChainAssignment extends \Protobuf\AbstractMessage
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
     * InitialDocumentId required string = 1
     *
     * @var string
     */
    protected $InitialDocumentId = null;

    /**
     * ChainId required string = 2
     *
     * @var string
     */
    protected $ChainId = null;

    /**
     * Comment optional string = 3
     *
     * @var string
     */
    protected $Comment = null;

    /**
     * Check if 'InitialDocumentId' has a value
     *
     * @return bool
     */
    public function hasInitialDocumentId()
    {
        return $this->InitialDocumentId !== null;
    }

    /**
     * Get 'InitialDocumentId' value
     *
     * @return string
     */
    public function getInitialDocumentId()
    {
        return $this->InitialDocumentId;
    }

    /**
     * Set 'InitialDocumentId' value
     *
     * @param string $value
     */
    public function setInitialDocumentId($value)
    {
        $this->InitialDocumentId = $value;
    }

    /**
     * Check if 'ChainId' has a value
     *
     * @return bool
     */
    public function hasChainId()
    {
        return $this->ChainId !== null;
    }

    /**
     * Get 'ChainId' value
     *
     * @return string
     */
    public function getChainId()
    {
        return $this->ChainId;
    }

    /**
     * Set 'ChainId' value
     *
     * @param string $value
     */
    public function setChainId($value)
    {
        $this->ChainId = $value;
    }

    /**
     * Check if 'Comment' has a value
     *
     * @return bool
     */
    public function hasComment()
    {
        return $this->Comment !== null;
    }

    /**
     * Get 'Comment' value
     *
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * Set 'Comment' value
     *
     * @param string $value
     */
    public function setComment($value = null)
    {
        $this->Comment = $value;
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
        if ( ! isset($values['InitialDocumentId'])) {
            throw new \InvalidArgumentException('Field "InitialDocumentId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['ChainId'])) {
            throw new \InvalidArgumentException('Field "ChainId" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Comment' => null
        ], $values);

        $message->setInitialDocumentId($values['InitialDocumentId']);
        $message->setChainId($values['ChainId']);
        $message->setComment($values['Comment']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ResolutionChainAssignment',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'InitialDocumentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ChainId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Comment',
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

        if ($this->InitialDocumentId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\ResolutionChainAssignment#InitialDocumentId" (tag 1) is required but has no value.');
        }

        if ($this->ChainId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\ResolutionChainAssignment#ChainId" (tag 2) is required but has no value.');
        }

        if ($this->InitialDocumentId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->InitialDocumentId);
        }

        if ($this->ChainId !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->ChainId);
        }

        if ($this->Comment !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->Comment);
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

                $this->InitialDocumentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ChainId = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Comment = $reader->readString($stream);

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

        if ($this->InitialDocumentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->InitialDocumentId);
        }

        if ($this->ChainId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ChainId);
        }

        if ($this->Comment !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Comment);
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
        $this->InitialDocumentId = null;
        $this->ChainId = null;
        $this->Comment = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Events\ResolutionChainAssignment) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->InitialDocumentId = ($message->InitialDocumentId !== null) ? $message->InitialDocumentId : $this->InitialDocumentId;
        $this->ChainId = ($message->ChainId !== null) ? $message->ChainId : $this->ChainId;
        $this->Comment = ($message->Comment !== null) ? $message->Comment : $this->Comment;
    }


}
