<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/ResolutionRouteInfo.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Events;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Events.ResolutionRouteRemovalInfo
 */
class ResolutionRouteRemovalInfo extends \Protobuf\AbstractMessage
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
     * RouteId required string = 1
     *
     * @var string
     */
    protected $RouteId = null;

    /**
     * Author required string = 2
     *
     * @var string
     */
    protected $Author = null;

    /**
     * Check if 'RouteId' has a value
     *
     * @return bool
     */
    public function hasRouteId()
    {
        return $this->RouteId !== null;
    }

    /**
     * Get 'RouteId' value
     *
     * @return string
     */
    public function getRouteId()
    {
        return $this->RouteId;
    }

    /**
     * Set 'RouteId' value
     *
     * @param string $value
     */
    public function setRouteId($value)
    {
        $this->RouteId = $value;
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
    public function setAuthor($value)
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
        if ( ! isset($values['RouteId'])) {
            throw new \InvalidArgumentException('Field "RouteId" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['Author'])) {
            throw new \InvalidArgumentException('Field "Author" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setRouteId($values['RouteId']);
        $message->setAuthor($values['Author']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ResolutionRouteRemovalInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'RouteId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Author',
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

        if ($this->RouteId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\ResolutionRouteRemovalInfo#RouteId" (tag 1) is required but has no value.');
        }

        if ($this->Author === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Events\\ResolutionRouteRemovalInfo#Author" (tag 2) is required but has no value.');
        }

        if ($this->RouteId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->RouteId);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->RouteId = $reader->readString($stream);

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

        if ($this->RouteId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->RouteId);
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
        $this->RouteId = null;
        $this->Author = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Events\ResolutionRouteRemovalInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->RouteId = ($message->RouteId !== null) ? $message->RouteId : $this->RouteId;
        $this->Author = ($message->Author !== null) ? $message->Author : $this->Author;
    }


}

