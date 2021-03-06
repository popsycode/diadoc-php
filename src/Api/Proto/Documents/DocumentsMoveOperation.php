<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/DocumentsMoveOperation.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Documents.DocumentsMoveOperation
 */
class DocumentsMoveOperation extends \Protobuf\AbstractMessage
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
     * BoxId required string = 1
     *
     * @var string
     */
    protected $BoxId = null;

    /**
     * ToDepartmentId optional string = 2
     *
     * @var string
     */
    protected $ToDepartmentId = null;

    /**
     * DocumentIds repeated message = 3
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\DocumentId>
     */
    protected $DocumentIds = null;

    /**
     * Check if 'BoxId' has a value
     *
     * @return bool
     */
    public function hasBoxId()
    {
        return $this->BoxId !== null;
    }

    /**
     * Get 'BoxId' value
     *
     * @return string
     */
    public function getBoxId()
    {
        return $this->BoxId;
    }

    /**
     * Set 'BoxId' value
     *
     * @param string $value
     */
    public function setBoxId($value)
    {
        $this->BoxId = $value;
    }

    /**
     * Check if 'ToDepartmentId' has a value
     *
     * @return bool
     */
    public function hasToDepartmentId()
    {
        return $this->ToDepartmentId !== null;
    }

    /**
     * Get 'ToDepartmentId' value
     *
     * @return string
     */
    public function getToDepartmentId()
    {
        return $this->ToDepartmentId;
    }

    /**
     * Set 'ToDepartmentId' value
     *
     * @param string $value
     */
    public function setToDepartmentId($value = null)
    {
        $this->ToDepartmentId = $value;
    }

    /**
     * Check if 'DocumentIds' has a value
     *
     * @return bool
     */
    public function hasDocumentIdsList()
    {
        return $this->DocumentIds !== null;
    }

    /**
     * Get 'DocumentIds' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\DocumentId>
     */
    public function getDocumentIdsList()
    {
        return $this->DocumentIds;
    }

    /**
     * Set 'DocumentIds' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\DocumentId> $value
     */
    public function setDocumentIdsList(\Protobuf\Collection $value = null)
    {
        $this->DocumentIds = $value;
    }

    /**
     * Add a new element to 'DocumentIds'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\DocumentId $value
     */
    public function addDocumentIds(\AgentSIB\Diadoc\Api\Proto\DocumentId $value)
    {
        if ($this->DocumentIds === null) {
            $this->DocumentIds = new \Protobuf\MessageCollection();
        }

        $this->DocumentIds->add($value);
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
        if ( ! isset($values['BoxId'])) {
            throw new \InvalidArgumentException('Field "BoxId" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'ToDepartmentId' => null,
            'DocumentIds' => []
        ], $values);

        $message->setBoxId($values['BoxId']);
        $message->setToDepartmentId($values['ToDepartmentId']);

        foreach ($values['DocumentIds'] as $item) {
            $message->addDocumentIds($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DocumentsMoveOperation',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'BoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ToDepartmentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'DocumentIds',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
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

        if ($this->BoxId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\DocumentsMoveOperation#BoxId" (tag 1) is required but has no value.');
        }

        if ($this->BoxId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->BoxId);
        }

        if ($this->ToDepartmentId !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->ToDepartmentId);
        }

        if ($this->DocumentIds !== null) {
            foreach ($this->DocumentIds as $val) {
                $writer->writeVarint($stream, 26);
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

                $this->BoxId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ToDepartmentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\DocumentId();

                if ($this->DocumentIds === null) {
                    $this->DocumentIds = new \Protobuf\MessageCollection();
                }

                $this->DocumentIds->add($innerMessage);

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

        if ($this->BoxId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->BoxId);
        }

        if ($this->ToDepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ToDepartmentId);
        }

        if ($this->DocumentIds !== null) {
            foreach ($this->DocumentIds as $val) {
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
        $this->BoxId = null;
        $this->ToDepartmentId = null;
        $this->DocumentIds = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Documents\DocumentsMoveOperation) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->BoxId = ($message->BoxId !== null) ? $message->BoxId : $this->BoxId;
        $this->ToDepartmentId = ($message->ToDepartmentId !== null) ? $message->ToDepartmentId : $this->ToDepartmentId;
        $this->DocumentIds = ($message->DocumentIds !== null) ? $message->DocumentIds : $this->DocumentIds;
    }


}

