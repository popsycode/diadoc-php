<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/DocflowV3.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Docflow;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Docflow.SignatureRejectionDocflow
 */
class SignatureRejectionDocflow extends \Protobuf\AbstractMessage
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
     * SignatureRejection required message = 1
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\SignedAttachmentV3
     */
    protected $SignatureRejection = null;

    /**
     * IsFormal required bool = 2
     *
     * @var bool
     */
    protected $IsFormal = null;

    /**
     * DeliveredAt optional message = 3
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Timestamp
     */
    protected $DeliveredAt = null;

    /**
     * PlainText optional string = 4
     *
     * @var string
     */
    protected $PlainText = null;

    /**
     * Check if 'SignatureRejection' has a value
     *
     * @return bool
     */
    public function hasSignatureRejection()
    {
        return $this->SignatureRejection !== null;
    }

    /**
     * Get 'SignatureRejection' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\SignedAttachmentV3
     */
    public function getSignatureRejection()
    {
        return $this->SignatureRejection;
    }

    /**
     * Set 'SignatureRejection' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\SignedAttachmentV3 $value
     */
    public function setSignatureRejection(\AgentSIB\Diadoc\Api\Proto\Docflow\SignedAttachmentV3 $value)
    {
        $this->SignatureRejection = $value;
    }

    /**
     * Check if 'IsFormal' has a value
     *
     * @return bool
     */
    public function hasIsFormal()
    {
        return $this->IsFormal !== null;
    }

    /**
     * Get 'IsFormal' value
     *
     * @return bool
     */
    public function getIsFormal()
    {
        return $this->IsFormal;
    }

    /**
     * Set 'IsFormal' value
     *
     * @param bool $value
     */
    public function setIsFormal($value)
    {
        $this->IsFormal = $value;
    }

    /**
     * Check if 'DeliveredAt' has a value
     *
     * @return bool
     */
    public function hasDeliveredAt()
    {
        return $this->DeliveredAt !== null;
    }

    /**
     * Get 'DeliveredAt' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Timestamp
     */
    public function getDeliveredAt()
    {
        return $this->DeliveredAt;
    }

    /**
     * Set 'DeliveredAt' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Timestamp $value
     */
    public function setDeliveredAt(\AgentSIB\Diadoc\Api\Proto\Timestamp $value = null)
    {
        $this->DeliveredAt = $value;
    }

    /**
     * Check if 'PlainText' has a value
     *
     * @return bool
     */
    public function hasPlainText()
    {
        return $this->PlainText !== null;
    }

    /**
     * Get 'PlainText' value
     *
     * @return string
     */
    public function getPlainText()
    {
        return $this->PlainText;
    }

    /**
     * Set 'PlainText' value
     *
     * @param string $value
     */
    public function setPlainText($value = null)
    {
        $this->PlainText = $value;
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
        if ( ! isset($values['SignatureRejection'])) {
            throw new \InvalidArgumentException('Field "SignatureRejection" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['IsFormal'])) {
            throw new \InvalidArgumentException('Field "IsFormal" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'DeliveredAt' => null,
            'PlainText' => null
        ], $values);

        $message->setSignatureRejection($values['SignatureRejection']);
        $message->setIsFormal($values['IsFormal']);
        $message->setDeliveredAt($values['DeliveredAt']);
        $message->setPlainText($values['PlainText']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'SignatureRejectionDocflow',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'SignatureRejection',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.SignedAttachmentV3'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'IsFormal',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'DeliveredAt',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Timestamp'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'PlainText',
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

        if ($this->SignatureRejection === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Docflow\\SignatureRejectionDocflow#SignatureRejection" (tag 1) is required but has no value.');
        }

        if ($this->IsFormal === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Docflow\\SignatureRejectionDocflow#IsFormal" (tag 2) is required but has no value.');
        }

        if ($this->SignatureRejection !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->SignatureRejection->serializedSize($sizeContext));
            $this->SignatureRejection->writeTo($context);
        }

        if ($this->IsFormal !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->IsFormal);
        }

        if ($this->DeliveredAt !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->DeliveredAt->serializedSize($sizeContext));
            $this->DeliveredAt->writeTo($context);
        }

        if ($this->PlainText !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->PlainText);
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
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\SignedAttachmentV3();

                $this->SignatureRejection = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsFormal = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Timestamp();

                $this->DeliveredAt = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->PlainText = $reader->readString($stream);

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

        if ($this->SignatureRejection !== null) {
            $innerSize = $this->SignatureRejection->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->IsFormal !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->DeliveredAt !== null) {
            $innerSize = $this->DeliveredAt->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->PlainText !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->PlainText);
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
        $this->SignatureRejection = null;
        $this->IsFormal = null;
        $this->DeliveredAt = null;
        $this->PlainText = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Docflow\SignatureRejectionDocflow) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->SignatureRejection = ($message->SignatureRejection !== null) ? $message->SignatureRejection : $this->SignatureRejection;
        $this->IsFormal = ($message->IsFormal !== null) ? $message->IsFormal : $this->IsFormal;
        $this->DeliveredAt = ($message->DeliveredAt !== null) ? $message->DeliveredAt : $this->DeliveredAt;
        $this->PlainText = ($message->PlainText !== null) ? $message->PlainText : $this->PlainText;
    }


}
