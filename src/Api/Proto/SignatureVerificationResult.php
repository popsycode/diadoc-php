<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : SignatureVerificationResult.proto
 */


namespace AgentSIB\Diadoc\Api\Proto;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.SignatureVerificationResult
 */
class SignatureVerificationResult extends \Protobuf\AbstractMessage
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
     * IsValid required bool = 1
     *
     * @var bool
     */
    protected $IsValid = null;

    /**
     * CertificateStatus optional message = 2
     *
     * @var \AgentSIB\Diadoc\Api\Proto\CertificateVerificationResult
     */
    protected $CertificateStatus = null;

    /**
     * SignatureTimestamp optional message = 3
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Timestamp
     */
    protected $SignatureTimestamp = null;

    /**
     * Check if 'IsValid' has a value
     *
     * @return bool
     */
    public function hasIsValid()
    {
        return $this->IsValid !== null;
    }

    /**
     * Get 'IsValid' value
     *
     * @return bool
     */
    public function getIsValid()
    {
        return $this->IsValid;
    }

    /**
     * Set 'IsValid' value
     *
     * @param bool $value
     */
    public function setIsValid($value)
    {
        $this->IsValid = $value;
    }

    /**
     * Check if 'CertificateStatus' has a value
     *
     * @return bool
     */
    public function hasCertificateStatus()
    {
        return $this->CertificateStatus !== null;
    }

    /**
     * Get 'CertificateStatus' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\CertificateVerificationResult
     */
    public function getCertificateStatus()
    {
        return $this->CertificateStatus;
    }

    /**
     * Set 'CertificateStatus' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\CertificateVerificationResult $value
     */
    public function setCertificateStatus(\AgentSIB\Diadoc\Api\Proto\CertificateVerificationResult $value = null)
    {
        $this->CertificateStatus = $value;
    }

    /**
     * Check if 'SignatureTimestamp' has a value
     *
     * @return bool
     */
    public function hasSignatureTimestamp()
    {
        return $this->SignatureTimestamp !== null;
    }

    /**
     * Get 'SignatureTimestamp' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Timestamp
     */
    public function getSignatureTimestamp()
    {
        return $this->SignatureTimestamp;
    }

    /**
     * Set 'SignatureTimestamp' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Timestamp $value
     */
    public function setSignatureTimestamp(\AgentSIB\Diadoc\Api\Proto\Timestamp $value = null)
    {
        $this->SignatureTimestamp = $value;
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
        if ( ! isset($values['IsValid'])) {
            throw new \InvalidArgumentException('Field "IsValid" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'CertificateStatus' => null,
            'SignatureTimestamp' => null
        ], $values);

        $message->setIsValid($values['IsValid']);
        $message->setCertificateStatus($values['CertificateStatus']);
        $message->setSignatureTimestamp($values['SignatureTimestamp']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'SignatureVerificationResult',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'IsValid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'CertificateStatus',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.CertificateVerificationResult'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'SignatureTimestamp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Timestamp'
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

        if ($this->IsValid === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\SignatureVerificationResult#IsValid" (tag 1) is required but has no value.');
        }

        if ($this->IsValid !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->IsValid);
        }

        if ($this->CertificateStatus !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->CertificateStatus->serializedSize($sizeContext));
            $this->CertificateStatus->writeTo($context);
        }

        if ($this->SignatureTimestamp !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->SignatureTimestamp->serializedSize($sizeContext));
            $this->SignatureTimestamp->writeTo($context);
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsValid = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\CertificateVerificationResult();

                $this->CertificateStatus = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Timestamp();

                $this->SignatureTimestamp = $innerMessage;

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

        if ($this->IsValid !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->CertificateStatus !== null) {
            $innerSize = $this->CertificateStatus->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->SignatureTimestamp !== null) {
            $innerSize = $this->SignatureTimestamp->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->IsValid = null;
        $this->CertificateStatus = null;
        $this->SignatureTimestamp = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\SignatureVerificationResult) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->IsValid = ($message->IsValid !== null) ? $message->IsValid : $this->IsValid;
        $this->CertificateStatus = ($message->CertificateStatus !== null) ? $message->CertificateStatus : $this->CertificateStatus;
        $this->SignatureTimestamp = ($message->SignatureTimestamp !== null) ? $message->SignatureTimestamp : $this->SignatureTimestamp;
    }


}

