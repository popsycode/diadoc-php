<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-PostApi.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Events;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Events.TemplateRefusalAttachment
 */
class TemplateRefusalAttachment extends \Protobuf\AbstractMessage
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
     * DocumentId required string = 1
     *
     * @var string
     */
    protected $DocumentId = null;

    /**
     * Comment optional string = 2
     *
     * @var string
     */
    protected $Comment = null;

    /**
     * Labels repeated string = 3
     *
     * @var \Protobuf\Collection
     */
    protected $Labels = null;

    /**
     * Check if 'DocumentId' has a value
     *
     * @return bool
     */
    public function hasDocumentId()
    {
        return $this->DocumentId !== null;
    }

    /**
     * Get 'DocumentId' value
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    /**
     * Set 'DocumentId' value
     *
     * @param string $value
     */
    public function setDocumentId($value)
    {
        $this->DocumentId = $value;
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
     * Check if 'Labels' has a value
     *
     * @return bool
     */
    public function hasLabelsList()
    {
        return $this->Labels !== null;
    }

    /**
     * Get 'Labels' value
     *
     * @return \Protobuf\Collection
     */
    public function getLabelsList()
    {
        return $this->Labels;
    }

    /**
     * Set 'Labels' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setLabelsList(\Protobuf\Collection $value = null)
    {
        $this->Labels = $value;
    }

    /**
     * Add a new element to 'Labels'
     *
     * @param string $value
     */
    public function addLabels($value)
    {
        if ($this->Labels === null) {
            $this->Labels = new \Protobuf\ScalarCollection();
        }

        $this->Labels->add($value);
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
        if ( ! isset($values['DocumentId'])) {
            throw new \InvalidArgumentException('Field "DocumentId" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Comment' => null,
            'Labels' => []
        ], $values);

        $message->setDocumentId($values['DocumentId']);
        $message->setComment($values['Comment']);

        foreach ($values['Labels'] as $item) {
            $message->addLabels($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'TemplateRefusalAttachment',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'DocumentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Comment',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Labels',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->DocumentId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\TemplateRefusalAttachment#DocumentId" (tag 1) is required but has no value.');
        }

        if ($this->DocumentId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->DocumentId);
        }

        if ($this->Comment !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Comment);
        }

        if ($this->Labels !== null) {
            foreach ($this->Labels as $val) {
                $writer->writeVarint($stream, 26);
                $writer->writeString($stream, $val);
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

                $this->DocumentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Comment = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->Labels === null) {
                    $this->Labels = new \Protobuf\ScalarCollection();
                }

                $this->Labels->add($reader->readString($stream));

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

        if ($this->DocumentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->DocumentId);
        }

        if ($this->Comment !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Comment);
        }

        if ($this->Labels !== null) {
            foreach ($this->Labels as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
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
        $this->DocumentId = null;
        $this->Comment = null;
        $this->Labels = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Events\TemplateRefusalAttachment) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->DocumentId = ($message->DocumentId !== null) ? $message->DocumentId : $this->DocumentId;
        $this->Comment = ($message->Comment !== null) ? $message->Comment : $this->Comment;
        $this->Labels = ($message->Labels !== null) ? $message->Labels : $this->Labels;
    }


}

