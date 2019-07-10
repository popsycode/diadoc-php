<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-GetApi.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Events;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Events.TemplateToLetterTransformationInfo
 */
class TemplateToLetterTransformationInfo extends \Protobuf\AbstractMessage
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
     * LetterFromBoxId required string = 1
     *
     * @var string
     */
    protected $LetterFromBoxId = null;

    /**
     * LetterToBoxId required string = 2
     *
     * @var string
     */
    protected $LetterToBoxId = null;

    /**
     * LetterFromDepartmentId optional string = 3
     *
     * @var string
     */
    protected $LetterFromDepartmentId = null;

    /**
     * LetterToDepartmentId optional string = 4
     *
     * @var string
     */
    protected $LetterToDepartmentId = null;

    /**
     * Check if 'LetterFromBoxId' has a value
     *
     * @return bool
     */
    public function hasLetterFromBoxId()
    {
        return $this->LetterFromBoxId !== null;
    }

    /**
     * Get 'LetterFromBoxId' value
     *
     * @return string
     */
    public function getLetterFromBoxId()
    {
        return $this->LetterFromBoxId;
    }

    /**
     * Set 'LetterFromBoxId' value
     *
     * @param string $value
     */
    public function setLetterFromBoxId($value)
    {
        $this->LetterFromBoxId = $value;
    }

    /**
     * Check if 'LetterToBoxId' has a value
     *
     * @return bool
     */
    public function hasLetterToBoxId()
    {
        return $this->LetterToBoxId !== null;
    }

    /**
     * Get 'LetterToBoxId' value
     *
     * @return string
     */
    public function getLetterToBoxId()
    {
        return $this->LetterToBoxId;
    }

    /**
     * Set 'LetterToBoxId' value
     *
     * @param string $value
     */
    public function setLetterToBoxId($value)
    {
        $this->LetterToBoxId = $value;
    }

    /**
     * Check if 'LetterFromDepartmentId' has a value
     *
     * @return bool
     */
    public function hasLetterFromDepartmentId()
    {
        return $this->LetterFromDepartmentId !== null;
    }

    /**
     * Get 'LetterFromDepartmentId' value
     *
     * @return string
     */
    public function getLetterFromDepartmentId()
    {
        return $this->LetterFromDepartmentId;
    }

    /**
     * Set 'LetterFromDepartmentId' value
     *
     * @param string $value
     */
    public function setLetterFromDepartmentId($value = null)
    {
        $this->LetterFromDepartmentId = $value;
    }

    /**
     * Check if 'LetterToDepartmentId' has a value
     *
     * @return bool
     */
    public function hasLetterToDepartmentId()
    {
        return $this->LetterToDepartmentId !== null;
    }

    /**
     * Get 'LetterToDepartmentId' value
     *
     * @return string
     */
    public function getLetterToDepartmentId()
    {
        return $this->LetterToDepartmentId;
    }

    /**
     * Set 'LetterToDepartmentId' value
     *
     * @param string $value
     */
    public function setLetterToDepartmentId($value = null)
    {
        $this->LetterToDepartmentId = $value;
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
        if ( ! isset($values['LetterFromBoxId'])) {
            throw new \InvalidArgumentException('Field "LetterFromBoxId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['LetterToBoxId'])) {
            throw new \InvalidArgumentException('Field "LetterToBoxId" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'LetterFromDepartmentId' => null,
            'LetterToDepartmentId' => null
        ], $values);

        $message->setLetterFromBoxId($values['LetterFromBoxId']);
        $message->setLetterToBoxId($values['LetterToBoxId']);
        $message->setLetterFromDepartmentId($values['LetterFromDepartmentId']);
        $message->setLetterToDepartmentId($values['LetterToDepartmentId']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'TemplateToLetterTransformationInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'LetterFromBoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'LetterToBoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'LetterFromDepartmentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'LetterToDepartmentId',
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

        if ($this->LetterFromBoxId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\TemplateToLetterTransformationInfo#LetterFromBoxId" (tag 1) is required but has no value.');
        }

        if ($this->LetterToBoxId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\TemplateToLetterTransformationInfo#LetterToBoxId" (tag 2) is required but has no value.');
        }

        if ($this->LetterFromBoxId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->LetterFromBoxId);
        }

        if ($this->LetterToBoxId !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->LetterToBoxId);
        }

        if ($this->LetterFromDepartmentId !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->LetterFromDepartmentId);
        }

        if ($this->LetterToDepartmentId !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->LetterToDepartmentId);
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

                $this->LetterFromBoxId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->LetterToBoxId = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->LetterFromDepartmentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->LetterToDepartmentId = $reader->readString($stream);

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

        if ($this->LetterFromBoxId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->LetterFromBoxId);
        }

        if ($this->LetterToBoxId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->LetterToBoxId);
        }

        if ($this->LetterFromDepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->LetterFromDepartmentId);
        }

        if ($this->LetterToDepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->LetterToDepartmentId);
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
        $this->LetterFromBoxId = null;
        $this->LetterToBoxId = null;
        $this->LetterFromDepartmentId = null;
        $this->LetterToDepartmentId = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Events\TemplateToLetterTransformationInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->LetterFromBoxId = ($message->LetterFromBoxId !== null) ? $message->LetterFromBoxId : $this->LetterFromBoxId;
        $this->LetterToBoxId = ($message->LetterToBoxId !== null) ? $message->LetterToBoxId : $this->LetterToBoxId;
        $this->LetterFromDepartmentId = ($message->LetterFromDepartmentId !== null) ? $message->LetterFromDepartmentId : $this->LetterFromDepartmentId;
        $this->LetterToDepartmentId = ($message->LetterToDepartmentId !== null) ? $message->LetterToDepartmentId : $this->LetterToDepartmentId;
    }


}

