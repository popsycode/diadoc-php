<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/DocumentInfoV3.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Docflow;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Docflow.TemplateTransformationInfo
 */
class TemplateTransformationInfo extends \Protobuf\AbstractMessage
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
     * TransformationId required string = 1
     *
     * @var string
     */
    protected $TransformationId = null;

    /**
     * TransformedToDocumentId optional message = 2
     *
     * @var \AgentSIB\Diadoc\Api\Proto\DocumentId
     */
    protected $TransformedToDocumentId = null;

    /**
     * AuthorUserId optional string = 3
     *
     * @var string
     */
    protected $AuthorUserId = null;

    /**
     * Check if 'TransformationId' has a value
     *
     * @return bool
     */
    public function hasTransformationId()
    {
        return $this->TransformationId !== null;
    }

    /**
     * Get 'TransformationId' value
     *
     * @return string
     */
    public function getTransformationId()
    {
        return $this->TransformationId;
    }

    /**
     * Set 'TransformationId' value
     *
     * @param string $value
     */
    public function setTransformationId($value)
    {
        $this->TransformationId = $value;
    }

    /**
     * Check if 'TransformedToDocumentId' has a value
     *
     * @return bool
     */
    public function hasTransformedToDocumentId()
    {
        return $this->TransformedToDocumentId !== null;
    }

    /**
     * Get 'TransformedToDocumentId' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\DocumentId
     */
    public function getTransformedToDocumentId()
    {
        return $this->TransformedToDocumentId;
    }

    /**
     * Set 'TransformedToDocumentId' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\DocumentId $value
     */
    public function setTransformedToDocumentId(\AgentSIB\Diadoc\Api\Proto\DocumentId $value = null)
    {
        $this->TransformedToDocumentId = $value;
    }

    /**
     * Check if 'AuthorUserId' has a value
     *
     * @return bool
     */
    public function hasAuthorUserId()
    {
        return $this->AuthorUserId !== null;
    }

    /**
     * Get 'AuthorUserId' value
     *
     * @return string
     */
    public function getAuthorUserId()
    {
        return $this->AuthorUserId;
    }

    /**
     * Set 'AuthorUserId' value
     *
     * @param string $value
     */
    public function setAuthorUserId($value = null)
    {
        $this->AuthorUserId = $value;
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
        if ( ! isset($values['TransformationId'])) {
            throw new \InvalidArgumentException('Field "TransformationId" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'TransformedToDocumentId' => null,
            'AuthorUserId' => null
        ], $values);

        $message->setTransformationId($values['TransformationId']);
        $message->setTransformedToDocumentId($values['TransformedToDocumentId']);
        $message->setAuthorUserId($values['AuthorUserId']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'TemplateTransformationInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'TransformationId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'TransformedToDocumentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.DocumentId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'AuthorUserId',
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

        if ($this->TransformationId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Docflow\\TemplateTransformationInfo#TransformationId" (tag 1) is required but has no value.');
        }

        if ($this->TransformationId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->TransformationId);
        }

        if ($this->TransformedToDocumentId !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->TransformedToDocumentId->serializedSize($sizeContext));
            $this->TransformedToDocumentId->writeTo($context);
        }

        if ($this->AuthorUserId !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->AuthorUserId);
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

                $this->TransformationId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\DocumentId();

                $this->TransformedToDocumentId = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->AuthorUserId = $reader->readString($stream);

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

        if ($this->TransformationId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TransformationId);
        }

        if ($this->TransformedToDocumentId !== null) {
            $innerSize = $this->TransformedToDocumentId->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->AuthorUserId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->AuthorUserId);
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
        $this->TransformationId = null;
        $this->TransformedToDocumentId = null;
        $this->AuthorUserId = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Docflow\TemplateTransformationInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->TransformationId = ($message->TransformationId !== null) ? $message->TransformationId : $this->TransformationId;
        $this->TransformedToDocumentId = ($message->TransformedToDocumentId !== null) ? $message->TransformedToDocumentId : $this->TransformedToDocumentId;
        $this->AuthorUserId = ($message->AuthorUserId !== null) ? $message->AuthorUserId : $this->AuthorUserId;
    }


}

