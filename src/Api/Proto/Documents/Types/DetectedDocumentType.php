<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/Types/DocumentTypeDescription.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents\Types;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Documents.Types.DetectedDocumentType
 */
class DetectedDocumentType extends \Protobuf\AbstractMessage
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
     * TypeNamedId required string = 1
     *
     * @var string
     */
    protected $TypeNamedId = null;

    /**
     * Function required string = 2
     *
     * @var string
     */
    protected $Function = null;

    /**
     * Version required string = 3
     *
     * @var string
     */
    protected $Version = null;

    /**
     * Check if 'TypeNamedId' has a value
     *
     * @return bool
     */
    public function hasTypeNamedId()
    {
        return $this->TypeNamedId !== null;
    }

    /**
     * Get 'TypeNamedId' value
     *
     * @return string
     */
    public function getTypeNamedId()
    {
        return $this->TypeNamedId;
    }

    /**
     * Set 'TypeNamedId' value
     *
     * @param string $value
     */
    public function setTypeNamedId($value)
    {
        $this->TypeNamedId = $value;
    }

    /**
     * Check if 'Function' has a value
     *
     * @return bool
     */
    public function hasFunction()
    {
        return $this->Function !== null;
    }

    /**
     * Get 'Function' value
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->Function;
    }

    /**
     * Set 'Function' value
     *
     * @param string $value
     */
    public function setFunction($value)
    {
        $this->Function = $value;
    }

    /**
     * Check if 'Version' has a value
     *
     * @return bool
     */
    public function hasVersion()
    {
        return $this->Version !== null;
    }

    /**
     * Get 'Version' value
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * Set 'Version' value
     *
     * @param string $value
     */
    public function setVersion($value)
    {
        $this->Version = $value;
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
        if ( ! isset($values['TypeNamedId'])) {
            throw new \InvalidArgumentException('Field "TypeNamedId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['Function'])) {
            throw new \InvalidArgumentException('Field "Function" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['Version'])) {
            throw new \InvalidArgumentException('Field "Version" (tag 3) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setTypeNamedId($values['TypeNamedId']);
        $message->setFunction($values['Function']);
        $message->setVersion($values['Version']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DetectedDocumentType',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'TypeNamedId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Function',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Version',
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

        if ($this->TypeNamedId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\Types\\DetectedDocumentType#TypeNamedId" (tag 1) is required but has no value.');
        }

        if ($this->Function === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\Types\\DetectedDocumentType#Function" (tag 2) is required but has no value.');
        }

        if ($this->Version === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\Types\\DetectedDocumentType#Version" (tag 3) is required but has no value.');
        }

        if ($this->TypeNamedId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->TypeNamedId);
        }

        if ($this->Function !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Function);
        }

        if ($this->Version !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->Version);
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

                $this->TypeNamedId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Function = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Version = $reader->readString($stream);

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

        if ($this->TypeNamedId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TypeNamedId);
        }

        if ($this->Function !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Function);
        }

        if ($this->Version !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Version);
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
        $this->TypeNamedId = null;
        $this->Function = null;
        $this->Version = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Documents\Types\DetectedDocumentType) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->TypeNamedId = ($message->TypeNamedId !== null) ? $message->TypeNamedId : $this->TypeNamedId;
        $this->Function = ($message->Function !== null) ? $message->Function : $this->Function;
        $this->Version = ($message->Version !== null) ? $message->Version : $this->Version;
    }


}

