<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Events;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Events.TemplateToPost
 */
class TemplateToPost extends \Protobuf\AbstractMessage
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
     * FromBoxId required string = 1
     *
     * @var string
     */
    protected $FromBoxId = null;

    /**
     * ToBoxId required string = 2
     *
     * @var string
     */
    protected $ToBoxId = null;

    /**
     * MessageFromBoxId required string = 3
     *
     * @var string
     */
    protected $MessageFromBoxId = null;

    /**
     * MessageToBoxId required string = 4
     *
     * @var string
     */
    protected $MessageToBoxId = null;

    /**
     * MessageToDepartmentId optional string = 5
     *
     * @var string
     */
    protected $MessageToDepartmentId = null;

    /**
     * DocumentAttachments repeated message = 6
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Events\TemplateDocumentAttachment>
     */
    protected $DocumentAttachments = null;

    /**
     * LockMode optional enum = 7
     *
     * @var \AgentSIB\Diadoc\Api\Proto\LockMode
     */
    protected $LockMode = null;

    /**
     * FromDepartmentId optional string = 8
     *
     * @var string
     */
    protected $FromDepartmentId = null;

    /**
     * ToDepartmentId optional string = 9
     *
     * @var string
     */
    protected $ToDepartmentId = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->LockMode = \AgentSIB\Diadoc\Api\Proto\LockMode::None();

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'FromBoxId' has a value
     *
     * @return bool
     */
    public function hasFromBoxId()
    {
        return $this->FromBoxId !== null;
    }

    /**
     * Get 'FromBoxId' value
     *
     * @return string
     */
    public function getFromBoxId()
    {
        return $this->FromBoxId;
    }

    /**
     * Set 'FromBoxId' value
     *
     * @param string $value
     */
    public function setFromBoxId($value)
    {
        $this->FromBoxId = $value;
    }

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
     * Check if 'MessageFromBoxId' has a value
     *
     * @return bool
     */
    public function hasMessageFromBoxId()
    {
        return $this->MessageFromBoxId !== null;
    }

    /**
     * Get 'MessageFromBoxId' value
     *
     * @return string
     */
    public function getMessageFromBoxId()
    {
        return $this->MessageFromBoxId;
    }

    /**
     * Set 'MessageFromBoxId' value
     *
     * @param string $value
     */
    public function setMessageFromBoxId($value)
    {
        $this->MessageFromBoxId = $value;
    }

    /**
     * Check if 'MessageToBoxId' has a value
     *
     * @return bool
     */
    public function hasMessageToBoxId()
    {
        return $this->MessageToBoxId !== null;
    }

    /**
     * Get 'MessageToBoxId' value
     *
     * @return string
     */
    public function getMessageToBoxId()
    {
        return $this->MessageToBoxId;
    }

    /**
     * Set 'MessageToBoxId' value
     *
     * @param string $value
     */
    public function setMessageToBoxId($value)
    {
        $this->MessageToBoxId = $value;
    }

    /**
     * Check if 'MessageToDepartmentId' has a value
     *
     * @return bool
     */
    public function hasMessageToDepartmentId()
    {
        return $this->MessageToDepartmentId !== null;
    }

    /**
     * Get 'MessageToDepartmentId' value
     *
     * @return string
     */
    public function getMessageToDepartmentId()
    {
        return $this->MessageToDepartmentId;
    }

    /**
     * Set 'MessageToDepartmentId' value
     *
     * @param string $value
     */
    public function setMessageToDepartmentId($value = null)
    {
        $this->MessageToDepartmentId = $value;
    }

    /**
     * Check if 'DocumentAttachments' has a value
     *
     * @return bool
     */
    public function hasDocumentAttachmentsList()
    {
        return $this->DocumentAttachments !== null;
    }

    /**
     * Get 'DocumentAttachments' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Events\TemplateDocumentAttachment>
     */
    public function getDocumentAttachmentsList()
    {
        return $this->DocumentAttachments;
    }

    /**
     * Set 'DocumentAttachments' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Events\TemplateDocumentAttachment> $value
     */
    public function setDocumentAttachmentsList(\Protobuf\Collection $value = null)
    {
        $this->DocumentAttachments = $value;
    }

    /**
     * Add a new element to 'DocumentAttachments'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Events\TemplateDocumentAttachment $value
     */
    public function addDocumentAttachments(\AgentSIB\Diadoc\Api\Proto\Events\TemplateDocumentAttachment $value)
    {
        if ($this->DocumentAttachments === null) {
            $this->DocumentAttachments = new \Protobuf\MessageCollection();
        }

        $this->DocumentAttachments->add($value);
    }

    /**
     * Check if 'LockMode' has a value
     *
     * @return bool
     */
    public function hasLockMode()
    {
        return $this->LockMode !== null;
    }

    /**
     * Get 'LockMode' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\LockMode
     */
    public function getLockMode()
    {
        return $this->LockMode;
    }

    /**
     * Set 'LockMode' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\LockMode $value
     */
    public function setLockMode(\AgentSIB\Diadoc\Api\Proto\LockMode $value = null)
    {
        $this->LockMode = $value;
    }

    /**
     * Check if 'FromDepartmentId' has a value
     *
     * @return bool
     */
    public function hasFromDepartmentId()
    {
        return $this->FromDepartmentId !== null;
    }

    /**
     * Get 'FromDepartmentId' value
     *
     * @return string
     */
    public function getFromDepartmentId()
    {
        return $this->FromDepartmentId;
    }

    /**
     * Set 'FromDepartmentId' value
     *
     * @param string $value
     */
    public function setFromDepartmentId($value = null)
    {
        $this->FromDepartmentId = $value;
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
        if ( ! isset($values['FromBoxId'])) {
            throw new \InvalidArgumentException('Field "FromBoxId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['ToBoxId'])) {
            throw new \InvalidArgumentException('Field "ToBoxId" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['MessageFromBoxId'])) {
            throw new \InvalidArgumentException('Field "MessageFromBoxId" (tag 3) is required but has no value.');
        }

        if ( ! isset($values['MessageToBoxId'])) {
            throw new \InvalidArgumentException('Field "MessageToBoxId" (tag 4) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'MessageToDepartmentId' => null,
            'DocumentAttachments' => [],
            'LockMode' => \AgentSIB\Diadoc\Api\Proto\LockMode::None(),
            'FromDepartmentId' => null,
            'ToDepartmentId' => null
        ], $values);

        $message->setFromBoxId($values['FromBoxId']);
        $message->setToBoxId($values['ToBoxId']);
        $message->setMessageFromBoxId($values['MessageFromBoxId']);
        $message->setMessageToBoxId($values['MessageToBoxId']);
        $message->setMessageToDepartmentId($values['MessageToDepartmentId']);
        $message->setLockMode($values['LockMode']);
        $message->setFromDepartmentId($values['FromDepartmentId']);
        $message->setToDepartmentId($values['ToDepartmentId']);

        foreach ($values['DocumentAttachments'] as $item) {
            $message->addDocumentAttachments($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'TemplateToPost',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'FromBoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ToBoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'MessageFromBoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'MessageToBoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'MessageToDepartmentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'DocumentAttachments',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Events.TemplateDocumentAttachment'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'LockMode',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.LockMode',
                    'default_value' => \AgentSIB\Diadoc\Api\Proto\LockMode::None()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'FromDepartmentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'ToDepartmentId',
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

        if ($this->FromBoxId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\TemplateToPost#FromBoxId" (tag 1) is required but has no value.');
        }

        if ($this->ToBoxId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\TemplateToPost#ToBoxId" (tag 2) is required but has no value.');
        }

        if ($this->MessageFromBoxId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\TemplateToPost#MessageFromBoxId" (tag 3) is required but has no value.');
        }

        if ($this->MessageToBoxId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\TemplateToPost#MessageToBoxId" (tag 4) is required but has no value.');
        }

        if ($this->FromBoxId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->FromBoxId);
        }

        if ($this->ToBoxId !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->ToBoxId);
        }

        if ($this->MessageFromBoxId !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->MessageFromBoxId);
        }

        if ($this->MessageToBoxId !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->MessageToBoxId);
        }

        if ($this->MessageToDepartmentId !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->MessageToDepartmentId);
        }

        if ($this->DocumentAttachments !== null) {
            foreach ($this->DocumentAttachments as $val) {
                $writer->writeVarint($stream, 50);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->LockMode !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->LockMode->value());
        }

        if ($this->FromDepartmentId !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->FromDepartmentId);
        }

        if ($this->ToDepartmentId !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeString($stream, $this->ToDepartmentId);
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

                $this->FromBoxId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ToBoxId = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->MessageFromBoxId = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->MessageToBoxId = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->MessageToDepartmentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Events\TemplateDocumentAttachment();

                if ($this->DocumentAttachments === null) {
                    $this->DocumentAttachments = new \Protobuf\MessageCollection();
                }

                $this->DocumentAttachments->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->LockMode = \AgentSIB\Diadoc\Api\Proto\LockMode::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->FromDepartmentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ToDepartmentId = $reader->readString($stream);

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

        if ($this->FromBoxId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->FromBoxId);
        }

        if ($this->ToBoxId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ToBoxId);
        }

        if ($this->MessageFromBoxId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->MessageFromBoxId);
        }

        if ($this->MessageToBoxId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->MessageToBoxId);
        }

        if ($this->MessageToDepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->MessageToDepartmentId);
        }

        if ($this->DocumentAttachments !== null) {
            foreach ($this->DocumentAttachments as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->LockMode !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->LockMode->value());
        }

        if ($this->FromDepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->FromDepartmentId);
        }

        if ($this->ToDepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ToDepartmentId);
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
        $this->FromBoxId = null;
        $this->ToBoxId = null;
        $this->MessageFromBoxId = null;
        $this->MessageToBoxId = null;
        $this->MessageToDepartmentId = null;
        $this->DocumentAttachments = null;
        $this->LockMode = \AgentSIB\Diadoc\Api\Proto\LockMode::None();
        $this->FromDepartmentId = null;
        $this->ToDepartmentId = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Events\TemplateToPost) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->FromBoxId = ($message->FromBoxId !== null) ? $message->FromBoxId : $this->FromBoxId;
        $this->ToBoxId = ($message->ToBoxId !== null) ? $message->ToBoxId : $this->ToBoxId;
        $this->MessageFromBoxId = ($message->MessageFromBoxId !== null) ? $message->MessageFromBoxId : $this->MessageFromBoxId;
        $this->MessageToBoxId = ($message->MessageToBoxId !== null) ? $message->MessageToBoxId : $this->MessageToBoxId;
        $this->MessageToDepartmentId = ($message->MessageToDepartmentId !== null) ? $message->MessageToDepartmentId : $this->MessageToDepartmentId;
        $this->DocumentAttachments = ($message->DocumentAttachments !== null) ? $message->DocumentAttachments : $this->DocumentAttachments;
        $this->LockMode = ($message->LockMode !== null) ? $message->LockMode : $this->LockMode;
        $this->FromDepartmentId = ($message->FromDepartmentId !== null) ? $message->FromDepartmentId : $this->FromDepartmentId;
        $this->ToDepartmentId = ($message->ToDepartmentId !== null) ? $message->ToDepartmentId : $this->ToDepartmentId;
    }


}

