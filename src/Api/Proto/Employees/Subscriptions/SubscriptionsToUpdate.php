<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Employees/Subscriptions/Subscription.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Employees\Subscriptions;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Employees.Subscriptions.SubscriptionsToUpdate
 */
class SubscriptionsToUpdate extends \Protobuf\AbstractMessage
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
     * Subscriptions repeated message = 1
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Employees\Subscriptions\Subscription>
     */
    protected $Subscriptions = null;

    /**
     * Check if 'Subscriptions' has a value
     *
     * @return bool
     */
    public function hasSubscriptionsList()
    {
        return $this->Subscriptions !== null;
    }

    /**
     * Get 'Subscriptions' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Employees\Subscriptions\Subscription>
     */
    public function getSubscriptionsList()
    {
        return $this->Subscriptions;
    }

    /**
     * Set 'Subscriptions' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Employees\Subscriptions\Subscription> $value
     */
    public function setSubscriptionsList(\Protobuf\Collection $value = null)
    {
        $this->Subscriptions = $value;
    }

    /**
     * Add a new element to 'Subscriptions'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Employees\Subscriptions\Subscription $value
     */
    public function addSubscriptions(\AgentSIB\Diadoc\Api\Proto\Employees\Subscriptions\Subscription $value)
    {
        if ($this->Subscriptions === null) {
            $this->Subscriptions = new \Protobuf\MessageCollection();
        }

        $this->Subscriptions->add($value);
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
            'Subscriptions' => []
        ], $values);

        foreach ($values['Subscriptions'] as $item) {
            $message->addSubscriptions($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'SubscriptionsToUpdate',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Subscriptions',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Employees.Subscriptions.Subscription'
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

        if ($this->Subscriptions !== null) {
            foreach ($this->Subscriptions as $val) {
                $writer->writeVarint($stream, 10);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Employees\Subscriptions\Subscription();

                if ($this->Subscriptions === null) {
                    $this->Subscriptions = new \Protobuf\MessageCollection();
                }

                $this->Subscriptions->add($innerMessage);

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

        if ($this->Subscriptions !== null) {
            foreach ($this->Subscriptions as $val) {
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
        $this->Subscriptions = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Employees\Subscriptions\SubscriptionsToUpdate) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Subscriptions = ($message->Subscriptions !== null) ? $message->Subscriptions : $this->Subscriptions;
    }


}

