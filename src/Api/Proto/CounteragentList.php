<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Counteragent.proto
 */


namespace AgentSIB\Diadoc\Api\Proto;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.CounteragentList
 */
class CounteragentList extends \Protobuf\AbstractMessage
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
     * TotalCount required int32 = 1
     *
     * @var int
     */
    protected $TotalCount = null;

    /**
     * Counteragents repeated message = 2
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Counteragent>
     */
    protected $Counteragents = null;

    /**
     * Check if 'TotalCount' has a value
     *
     * @return bool
     */
    public function hasTotalCount()
    {
        return $this->TotalCount !== null;
    }

    /**
     * Get 'TotalCount' value
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->TotalCount;
    }

    /**
     * Set 'TotalCount' value
     *
     * @param int $value
     */
    public function setTotalCount($value)
    {
        $this->TotalCount = $value;
    }

    /**
     * Check if 'Counteragents' has a value
     *
     * @return bool
     */
    public function hasCounteragentsList()
    {
        return $this->Counteragents !== null;
    }

    /**
     * Get 'Counteragents' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Counteragent>
     */
    public function getCounteragentsList()
    {
        return $this->Counteragents;
    }

    /**
     * Set 'Counteragents' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Counteragent> $value
     */
    public function setCounteragentsList(\Protobuf\Collection $value = null)
    {
        $this->Counteragents = $value;
    }

    /**
     * Add a new element to 'Counteragents'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Counteragent $value
     */
    public function addCounteragents(\AgentSIB\Diadoc\Api\Proto\Counteragent $value)
    {
        if ($this->Counteragents === null) {
            $this->Counteragents = new \Protobuf\MessageCollection();
        }

        $this->Counteragents->add($value);
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
        if ( ! isset($values['TotalCount'])) {
            throw new \InvalidArgumentException('Field "TotalCount" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Counteragents' => []
        ], $values);

        $message->setTotalCount($values['TotalCount']);

        foreach ($values['Counteragents'] as $item) {
            $message->addCounteragents($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CounteragentList',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'TotalCount',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Counteragents',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Counteragent'
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

        if ($this->TotalCount === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\CounteragentList#TotalCount" (tag 1) is required but has no value.');
        }

        if ($this->TotalCount !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->TotalCount);
        }

        if ($this->Counteragents !== null) {
            foreach ($this->Counteragents as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
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
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->TotalCount = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Counteragent();

                if ($this->Counteragents === null) {
                    $this->Counteragents = new \Protobuf\MessageCollection();
                }

                $this->Counteragents->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->TotalCount !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->TotalCount);
        }

        if ($this->Counteragents !== null) {
            foreach ($this->Counteragents as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
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
        $this->TotalCount = null;
        $this->Counteragents = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\CounteragentList) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->TotalCount = ($message->TotalCount !== null) ? $message->TotalCount : $this->TotalCount;
        $this->Counteragents = ($message->Counteragents !== null) ? $message->Counteragents : $this->Counteragents;
    }


}

