<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-GetApi.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Events;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Events.TemplateTransformationInfo
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
     * TransformedToDocumentId optional message = 1
     *
     * @var \AgentSIB\Diadoc\Api\Proto\DocumentId
     */
    protected $TransformedToDocumentId = null;

    /**
     * Author optional string = 2
     *
     * @var string
     */
    protected $Author = null;

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
    public function setAuthor($value = null)
    {
        $this->Author = $value;
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
        $message = new self();
        $values  = array_merge([
            'TransformedToDocumentId' => null,
            'Author' => null
        ], $values);

        $message->setTransformedToDocumentId($values['TransformedToDocumentId']);
        $message->setAuthor($values['Author']);

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
                    'name' => 'TransformedToDocumentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.DocumentId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Author',
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

        if ($this->TransformedToDocumentId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->TransformedToDocumentId->serializedSize($sizeContext));
            $this->TransformedToDocumentId->writeTo($context);
        }

        if ($this->Author !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Author);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\DocumentId();

                $this->TransformedToDocumentId = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Author = $reader->readString($stream);

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

        if ($this->TransformedToDocumentId !== null) {
            $innerSize = $this->TransformedToDocumentId->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->Author !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Author);
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
        $this->TransformedToDocumentId = null;
        $this->Author = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Events\TemplateTransformationInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->TransformedToDocumentId = ($message->TransformedToDocumentId !== null) ? $message->TransformedToDocumentId : $this->TransformedToDocumentId;
        $this->Author = ($message->Author !== null) ? $message->Author : $this->Author;
    }


}

