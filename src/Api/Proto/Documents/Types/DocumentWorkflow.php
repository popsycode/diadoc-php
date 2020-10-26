<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/Types/DocumentTypeDescription.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents\Types;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Documents.Types.DocumentWorkflow
 */
class DocumentWorkflow extends \Protobuf\AbstractMessage
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
     * Id required int32 = 1
     *
     * @var int
     */
    protected $Id = null;

    /**
     * IsDefault required bool = 2
     *
     * @var bool
     */
    protected $IsDefault = null;

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
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set 'Id' value
     *
     * @param int $value
     */
    public function setId($value)
    {
        $this->Id = $value;
    }

    /**
     * Check if 'IsDefault' has a value
     *
     * @return bool
     */
    public function hasIsDefault()
    {
        return $this->IsDefault !== null;
    }

    /**
     * Get 'IsDefault' value
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->IsDefault;
    }

    /**
     * Set 'IsDefault' value
     *
     * @param bool $value
     */
    public function setIsDefault($value)
    {
        $this->IsDefault = $value;
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

        if ( ! isset($values['IsDefault'])) {
            throw new \InvalidArgumentException('Field "IsDefault" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setId($values['Id']);
        $message->setIsDefault($values['IsDefault']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DocumentWorkflow',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'IsDefault',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
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

        if ($this->Id === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\Types\\DocumentWorkflow#Id" (tag 1) is required but has no value.');
        }

        if ($this->IsDefault === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\Types\\DocumentWorkflow#IsDefault" (tag 2) is required but has no value.');
        }

        if ($this->Id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->Id);
        }

        if ($this->IsDefault !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->IsDefault);
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
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->Id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsDefault = $reader->readBool($stream);

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
            $size += $calculator->computeVarintSize($this->Id);
        }

        if ($this->IsDefault !== null) {
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
        $this->Id = null;
        $this->IsDefault = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentWorkflow) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Id = ($message->Id !== null) ? $message->Id : $this->Id;
        $this->IsDefault = ($message->IsDefault !== null) ? $message->IsDefault : $this->IsDefault;
    }


}
