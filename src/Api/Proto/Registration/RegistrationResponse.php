<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Registration/RegistrationRequest.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Registration;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Registration.RegistrationResponse
 */
class RegistrationResponse extends \Protobuf\AbstractMessage
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
     * RegistrationStatus required enum = 1
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Registration\RegistrationStatus
     */
    protected $RegistrationStatus = null;

    /**
     * BoxId optional string = 2
     *
     * @var string
     */
    protected $BoxId = null;

    /**
     * DataToSign optional bytes = 3
     *
     * @var \Protobuf\Stream
     */
    protected $DataToSign = null;

    /**
     * Check if 'RegistrationStatus' has a value
     *
     * @return bool
     */
    public function hasRegistrationStatus()
    {
        return $this->RegistrationStatus !== null;
    }

    /**
     * Get 'RegistrationStatus' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Registration\RegistrationStatus
     */
    public function getRegistrationStatus()
    {
        return $this->RegistrationStatus;
    }

    /**
     * Set 'RegistrationStatus' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Registration\RegistrationStatus $value
     */
    public function setRegistrationStatus(\AgentSIB\Diadoc\Api\Proto\Registration\RegistrationStatus $value)
    {
        $this->RegistrationStatus = $value;
    }

    /**
     * Check if 'BoxId' has a value
     *
     * @return bool
     */
    public function hasBoxId()
    {
        return $this->BoxId !== null;
    }

    /**
     * Get 'BoxId' value
     *
     * @return string
     */
    public function getBoxId()
    {
        return $this->BoxId;
    }

    /**
     * Set 'BoxId' value
     *
     * @param string $value
     */
    public function setBoxId($value = null)
    {
        $this->BoxId = $value;
    }

    /**
     * Check if 'DataToSign' has a value
     *
     * @return bool
     */
    public function hasDataToSign()
    {
        return $this->DataToSign !== null;
    }

    /**
     * Get 'DataToSign' value
     *
     * @return \Protobuf\Stream
     */
    public function getDataToSign()
    {
        return $this->DataToSign;
    }

    /**
     * Set 'DataToSign' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setDataToSign($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->DataToSign = $value;
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
        if ( ! isset($values['RegistrationStatus'])) {
            throw new \InvalidArgumentException('Field "RegistrationStatus" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'BoxId' => null,
            'DataToSign' => null
        ], $values);

        $message->setRegistrationStatus($values['RegistrationStatus']);
        $message->setBoxId($values['BoxId']);
        $message->setDataToSign($values['DataToSign']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'RegistrationResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'RegistrationStatus',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Registration.RegistrationStatus'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'BoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'DataToSign',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
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

        if ($this->RegistrationStatus === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Registration\\RegistrationResponse#RegistrationStatus" (tag 1) is required but has no value.');
        }

        if ($this->RegistrationStatus !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->RegistrationStatus->value());
        }

        if ($this->BoxId !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->BoxId);
        }

        if ($this->DataToSign !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeByteStream($stream, $this->DataToSign);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->RegistrationStatus = \AgentSIB\Diadoc\Api\Proto\Registration\RegistrationStatus::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->BoxId = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->DataToSign = $reader->readByteStream($stream);

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

        if ($this->RegistrationStatus !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->RegistrationStatus->value());
        }

        if ($this->BoxId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->BoxId);
        }

        if ($this->DataToSign !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->DataToSign);
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
        $this->RegistrationStatus = null;
        $this->BoxId = null;
        $this->DataToSign = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Registration\RegistrationResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->RegistrationStatus = ($message->RegistrationStatus !== null) ? $message->RegistrationStatus : $this->RegistrationStatus;
        $this->BoxId = ($message->BoxId !== null) ? $message->BoxId : $this->BoxId;
        $this->DataToSign = ($message->DataToSign !== null) ? $message->DataToSign : $this->DataToSign;
    }


}

