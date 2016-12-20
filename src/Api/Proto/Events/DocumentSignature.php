<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Events;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Events.DocumentSignature
 */
class DocumentSignature extends \Protobuf\AbstractMessage
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
     * ParentEntityId required string = 1
     *
     * @var string
     */
    protected $ParentEntityId = null;

    /**
     * Signature optional bytes = 2
     *
     * @var \Protobuf\Stream
     */
    protected $Signature = null;

    /**
     * SignWithTestSignature optional bool = 4
     *
     * @var bool
     */
    protected $SignWithTestSignature = null;

    /**
     * IsApprovementSignature optional bool = 5
     *
     * @var bool
     */
    protected $IsApprovementSignature = null;

    /**
     * SignatureNameOnShelf optional string = 6
     *
     * @var string
     */
    protected $SignatureNameOnShelf = null;

    /**
     * PatchedContentId optional string = 7
     *
     * @var string
     */
    protected $PatchedContentId = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->SignWithTestSignature = false;
        $this->IsApprovementSignature = false;

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'ParentEntityId' has a value
     *
     * @return bool
     */
    public function hasParentEntityId()
    {
        return $this->ParentEntityId !== null;
    }

    /**
     * Get 'ParentEntityId' value
     *
     * @return string
     */
    public function getParentEntityId()
    {
        return $this->ParentEntityId;
    }

    /**
     * Set 'ParentEntityId' value
     *
     * @param string $value
     */
    public function setParentEntityId($value)
    {
        $this->ParentEntityId = $value;
    }

    /**
     * Check if 'Signature' has a value
     *
     * @return bool
     */
    public function hasSignature()
    {
        return $this->Signature !== null;
    }

    /**
     * Get 'Signature' value
     *
     * @return \Protobuf\Stream
     */
    public function getSignature()
    {
        return $this->Signature;
    }

    /**
     * Set 'Signature' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setSignature($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->Signature = $value;
    }

    /**
     * Check if 'SignWithTestSignature' has a value
     *
     * @return bool
     */
    public function hasSignWithTestSignature()
    {
        return $this->SignWithTestSignature !== null;
    }

    /**
     * Get 'SignWithTestSignature' value
     *
     * @return bool
     */
    public function getSignWithTestSignature()
    {
        return $this->SignWithTestSignature;
    }

    /**
     * Set 'SignWithTestSignature' value
     *
     * @param bool $value
     */
    public function setSignWithTestSignature($value = null)
    {
        $this->SignWithTestSignature = $value;
    }

    /**
     * Check if 'IsApprovementSignature' has a value
     *
     * @return bool
     */
    public function hasIsApprovementSignature()
    {
        return $this->IsApprovementSignature !== null;
    }

    /**
     * Get 'IsApprovementSignature' value
     *
     * @return bool
     */
    public function getIsApprovementSignature()
    {
        return $this->IsApprovementSignature;
    }

    /**
     * Set 'IsApprovementSignature' value
     *
     * @param bool $value
     */
    public function setIsApprovementSignature($value = null)
    {
        $this->IsApprovementSignature = $value;
    }

    /**
     * Check if 'SignatureNameOnShelf' has a value
     *
     * @return bool
     */
    public function hasSignatureNameOnShelf()
    {
        return $this->SignatureNameOnShelf !== null;
    }

    /**
     * Get 'SignatureNameOnShelf' value
     *
     * @return string
     */
    public function getSignatureNameOnShelf()
    {
        return $this->SignatureNameOnShelf;
    }

    /**
     * Set 'SignatureNameOnShelf' value
     *
     * @param string $value
     */
    public function setSignatureNameOnShelf($value = null)
    {
        $this->SignatureNameOnShelf = $value;
    }

    /**
     * Check if 'PatchedContentId' has a value
     *
     * @return bool
     */
    public function hasPatchedContentId()
    {
        return $this->PatchedContentId !== null;
    }

    /**
     * Get 'PatchedContentId' value
     *
     * @return string
     */
    public function getPatchedContentId()
    {
        return $this->PatchedContentId;
    }

    /**
     * Set 'PatchedContentId' value
     *
     * @param string $value
     */
    public function setPatchedContentId($value = null)
    {
        $this->PatchedContentId = $value;
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
        if ( ! isset($values['ParentEntityId'])) {
            throw new \InvalidArgumentException('Field "ParentEntityId" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Signature' => null,
            'SignWithTestSignature' => false,
            'IsApprovementSignature' => false,
            'SignatureNameOnShelf' => null,
            'PatchedContentId' => null
        ], $values);

        $message->setParentEntityId($values['ParentEntityId']);
        $message->setSignature($values['Signature']);
        $message->setSignWithTestSignature($values['SignWithTestSignature']);
        $message->setIsApprovementSignature($values['IsApprovementSignature']);
        $message->setSignatureNameOnShelf($values['SignatureNameOnShelf']);
        $message->setPatchedContentId($values['PatchedContentId']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DocumentSignature',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'ParentEntityId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Signature',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'SignWithTestSignature',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'IsApprovementSignature',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'SignatureNameOnShelf',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'PatchedContentId',
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

        if ($this->ParentEntityId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\DocumentSignature#ParentEntityId" (tag 1) is required but has no value.');
        }

        if ($this->ParentEntityId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->ParentEntityId);
        }

        if ($this->Signature !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeByteStream($stream, $this->Signature);
        }

        if ($this->SignWithTestSignature !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->SignWithTestSignature);
        }

        if ($this->IsApprovementSignature !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->IsApprovementSignature);
        }

        if ($this->SignatureNameOnShelf !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->SignatureNameOnShelf);
        }

        if ($this->PatchedContentId !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->PatchedContentId);
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

                $this->ParentEntityId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->Signature = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->SignWithTestSignature = $reader->readBool($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsApprovementSignature = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->SignatureNameOnShelf = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->PatchedContentId = $reader->readString($stream);

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

        if ($this->ParentEntityId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ParentEntityId);
        }

        if ($this->Signature !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->Signature);
        }

        if ($this->SignWithTestSignature !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->IsApprovementSignature !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->SignatureNameOnShelf !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->SignatureNameOnShelf);
        }

        if ($this->PatchedContentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->PatchedContentId);
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
        $this->ParentEntityId = null;
        $this->Signature = null;
        $this->SignWithTestSignature = false;
        $this->IsApprovementSignature = false;
        $this->SignatureNameOnShelf = null;
        $this->PatchedContentId = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Events\DocumentSignature) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->ParentEntityId = ($message->ParentEntityId !== null) ? $message->ParentEntityId : $this->ParentEntityId;
        $this->Signature = ($message->Signature !== null) ? $message->Signature : $this->Signature;
        $this->SignWithTestSignature = ($message->SignWithTestSignature !== null) ? $message->SignWithTestSignature : $this->SignWithTestSignature;
        $this->IsApprovementSignature = ($message->IsApprovementSignature !== null) ? $message->IsApprovementSignature : $this->IsApprovementSignature;
        $this->SignatureNameOnShelf = ($message->SignatureNameOnShelf !== null) ? $message->SignatureNameOnShelf : $this->SignatureNameOnShelf;
        $this->PatchedContentId = ($message->PatchedContentId !== null) ? $message->PatchedContentId : $this->PatchedContentId;
    }


}

