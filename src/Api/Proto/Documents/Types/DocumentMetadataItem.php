<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/Types/DocumentTypeDescription.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents\Types;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Documents.Types.DocumentMetadataItem
 */
class DocumentMetadataItem extends \Protobuf\AbstractMessage
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
     * Id required string = 1
     *
     * @var string
     */
    protected $Id = null;

    /**
     * Type required enum = 2
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentMetadataItemType
     */
    protected $Type = null;

    /**
     * IsRequired required bool = 3
     *
     * @var bool
     */
    protected $IsRequired = null;

    /**
     * Source required enum = 4
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentMetadataSource
     */
    protected $Source = null;

    /**
     * Check if 'Id' has a value
     *
     * @return bool
     */
    public function hasId()
    {
        return $this->Id !== null;
    }

    /**
     * Get 'Id' value
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set 'Id' value
     *
     * @param string $value
     */
    public function setId($value)
    {
        $this->Id = $value;
    }

    /**
     * Check if 'Type' has a value
     *
     * @return bool
     */
    public function hasType()
    {
        return $this->Type !== null;
    }

    /**
     * Get 'Type' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentMetadataItemType
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set 'Type' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentMetadataItemType $value
     */
    public function setType(\AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentMetadataItemType $value)
    {
        $this->Type = $value;
    }

    /**
     * Check if 'IsRequired' has a value
     *
     * @return bool
     */
    public function hasIsRequired()
    {
        return $this->IsRequired !== null;
    }

    /**
     * Get 'IsRequired' value
     *
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->IsRequired;
    }

    /**
     * Set 'IsRequired' value
     *
     * @param bool $value
     */
    public function setIsRequired($value)
    {
        $this->IsRequired = $value;
    }

    /**
     * Check if 'Source' has a value
     *
     * @return bool
     */
    public function hasSource()
    {
        return $this->Source !== null;
    }

    /**
     * Get 'Source' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentMetadataSource
     */
    public function getSource()
    {
        return $this->Source;
    }

    /**
     * Set 'Source' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentMetadataSource $value
     */
    public function setSource(\AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentMetadataSource $value)
    {
        $this->Source = $value;
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
        if ( ! isset($values['Id'])) {
            throw new \InvalidArgumentException('Field "Id" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['Type'])) {
            throw new \InvalidArgumentException('Field "Type" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['IsRequired'])) {
            throw new \InvalidArgumentException('Field "IsRequired" (tag 3) is required but has no value.');
        }

        if ( ! isset($values['Source'])) {
            throw new \InvalidArgumentException('Field "Source" (tag 4) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setId($values['Id']);
        $message->setType($values['Type']);
        $message->setIsRequired($values['IsRequired']);
        $message->setSource($values['Source']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DocumentMetadataItem',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Documents.Types.DocumentMetadataItemType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'IsRequired',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Source',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Documents.Types.DocumentMetadataSource'
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

        if ($this->Id === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\Types\\DocumentMetadataItem#Id" (tag 1) is required but has no value.');
        }

        if ($this->Type === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\Types\\DocumentMetadataItem#Type" (tag 2) is required but has no value.');
        }

        if ($this->IsRequired === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\Types\\DocumentMetadataItem#IsRequired" (tag 3) is required but has no value.');
        }

        if ($this->Source === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\Types\\DocumentMetadataItem#Source" (tag 4) is required but has no value.');
        }

        if ($this->Id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Id);
        }

        if ($this->Type !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->Type->value());
        }

        if ($this->IsRequired !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->IsRequired);
        }

        if ($this->Source !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->Source->value());
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

                $this->Id = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->Type = \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentMetadataItemType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsRequired = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->Source = \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentMetadataSource::valueOf($reader->readVarint($stream));

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

        if ($this->Id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Id);
        }

        if ($this->Type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->Type->value());
        }

        if ($this->IsRequired !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->Source !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->Source->value());
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
        $this->Id = null;
        $this->Type = null;
        $this->IsRequired = null;
        $this->Source = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentMetadataItem) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Id = ($message->Id !== null) ? $message->Id : $this->Id;
        $this->Type = ($message->Type !== null) ? $message->Type : $this->Type;
        $this->IsRequired = ($message->IsRequired !== null) ? $message->IsRequired : $this->IsRequired;
        $this->Source = ($message->Source !== null) ? $message->Source : $this->Source;
    }


}
