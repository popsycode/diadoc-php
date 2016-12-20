<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Forwarding/ForwardingApi.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Forwarding;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Forwarding.GetForwardedDocumentsRequest
 */
class GetForwardedDocumentsRequest extends \Protobuf\AbstractMessage
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
     * ForwardedDocumentIds repeated message = 1
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Forwarding\ForwardedDocumentId>
     */
    protected $ForwardedDocumentIds = null;

    /**
     * InjectEntityContent optional bool = 2
     *
     * @var bool
     */
    protected $InjectEntityContent = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->InjectEntityContent = false;

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'ForwardedDocumentIds' has a value
     *
     * @return bool
     */
    public function hasForwardedDocumentIdsList()
    {
        return $this->ForwardedDocumentIds !== null;
    }

    /**
     * Get 'ForwardedDocumentIds' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Forwarding\ForwardedDocumentId>
     */
    public function getForwardedDocumentIdsList()
    {
        return $this->ForwardedDocumentIds;
    }

    /**
     * Set 'ForwardedDocumentIds' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Forwarding\ForwardedDocumentId> $value
     */
    public function setForwardedDocumentIdsList(\Protobuf\Collection $value = null)
    {
        $this->ForwardedDocumentIds = $value;
    }

    /**
     * Add a new element to 'ForwardedDocumentIds'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Forwarding\ForwardedDocumentId $value
     */
    public function addForwardedDocumentIds(\AgentSIB\Diadoc\Api\Proto\Forwarding\ForwardedDocumentId $value)
    {
        if ($this->ForwardedDocumentIds === null) {
            $this->ForwardedDocumentIds = new \Protobuf\MessageCollection();
        }

        $this->ForwardedDocumentIds->add($value);
    }

    /**
     * Check if 'InjectEntityContent' has a value
     *
     * @return bool
     */
    public function hasInjectEntityContent()
    {
        return $this->InjectEntityContent !== null;
    }

    /**
     * Get 'InjectEntityContent' value
     *
     * @return bool
     */
    public function getInjectEntityContent()
    {
        return $this->InjectEntityContent;
    }

    /**
     * Set 'InjectEntityContent' value
     *
     * @param bool $value
     */
    public function setInjectEntityContent($value = null)
    {
        $this->InjectEntityContent = $value;
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
            'ForwardedDocumentIds' => [],
            'InjectEntityContent' => false
        ], $values);

        $message->setInjectEntityContent($values['InjectEntityContent']);

        foreach ($values['ForwardedDocumentIds'] as $item) {
            $message->addForwardedDocumentIds($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GetForwardedDocumentsRequest',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'ForwardedDocumentIds',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Forwarding.ForwardedDocumentId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'InjectEntityContent',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
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

        if ($this->ForwardedDocumentIds !== null) {
            foreach ($this->ForwardedDocumentIds as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->InjectEntityContent !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->InjectEntityContent);
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
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Forwarding\ForwardedDocumentId();

                if ($this->ForwardedDocumentIds === null) {
                    $this->ForwardedDocumentIds = new \Protobuf\MessageCollection();
                }

                $this->ForwardedDocumentIds->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->InjectEntityContent = $reader->readBool($stream);

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

        if ($this->ForwardedDocumentIds !== null) {
            foreach ($this->ForwardedDocumentIds as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->InjectEntityContent !== null) {
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
        $this->ForwardedDocumentIds = null;
        $this->InjectEntityContent = false;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Forwarding\GetForwardedDocumentsRequest) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->ForwardedDocumentIds = ($message->ForwardedDocumentIds !== null) ? $message->ForwardedDocumentIds : $this->ForwardedDocumentIds;
        $this->InjectEntityContent = ($message->InjectEntityContent !== null) ? $message->InjectEntityContent : $this->InjectEntityContent;
    }


}

