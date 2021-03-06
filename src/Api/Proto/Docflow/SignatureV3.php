<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/AttachmentV3.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Docflow;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Docflow.SignatureV3
 */
class SignatureV3 extends \Protobuf\AbstractMessage
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
     * Cms required message = 1
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\Entity
     */
    protected $Cms = null;

    /**
     * CadesT optional message = 2
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\Entity
     */
    protected $CadesT = null;

    /**
     * SignerBoxId required string = 3
     *
     * @var string
     */
    protected $SignerBoxId = null;

    /**
     * SignerDepartmentId required string = 4
     *
     * @var string
     */
    protected $SignerDepartmentId = null;

    /**
     * IsValid required bool = 5
     *
     * @var bool
     */
    protected $IsValid = null;

    /**
     * VerificationResult optional message = 6
     *
     * @var \AgentSIB\Diadoc\Api\Proto\SignatureVerificationResult
     */
    protected $VerificationResult = null;

    /**
     * DeliveredAt optional message = 7
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Timestamp
     */
    protected $DeliveredAt = null;

    /**
     * Check if 'Cms' has a value
     *
     * @return bool
     */
    public function hasCms()
    {
        return $this->Cms !== null;
    }

    /**
     * Get 'Cms' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\Entity
     */
    public function getCms()
    {
        return $this->Cms;
    }

    /**
     * Set 'Cms' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\Entity $value
     */
    public function setCms(\AgentSIB\Diadoc\Api\Proto\Docflow\Entity $value)
    {
        $this->Cms = $value;
    }

    /**
     * Check if 'CadesT' has a value
     *
     * @return bool
     */
    public function hasCadesT()
    {
        return $this->CadesT !== null;
    }

    /**
     * Get 'CadesT' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\Entity
     */
    public function getCadesT()
    {
        return $this->CadesT;
    }

    /**
     * Set 'CadesT' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\Entity $value
     */
    public function setCadesT(\AgentSIB\Diadoc\Api\Proto\Docflow\Entity $value = null)
    {
        $this->CadesT = $value;
    }

    /**
     * Check if 'SignerBoxId' has a value
     *
     * @return bool
     */
    public function hasSignerBoxId()
    {
        return $this->SignerBoxId !== null;
    }

    /**
     * Get 'SignerBoxId' value
     *
     * @return string
     */
    public function getSignerBoxId()
    {
        return $this->SignerBoxId;
    }

    /**
     * Set 'SignerBoxId' value
     *
     * @param string $value
     */
    public function setSignerBoxId($value)
    {
        $this->SignerBoxId = $value;
    }

    /**
     * Check if 'SignerDepartmentId' has a value
     *
     * @return bool
     */
    public function hasSignerDepartmentId()
    {
        return $this->SignerDepartmentId !== null;
    }

    /**
     * Get 'SignerDepartmentId' value
     *
     * @return string
     */
    public function getSignerDepartmentId()
    {
        return $this->SignerDepartmentId;
    }

    /**
     * Set 'SignerDepartmentId' value
     *
     * @param string $value
     */
    public function setSignerDepartmentId($value)
    {
        $this->SignerDepartmentId = $value;
    }

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
     * Check if 'VerificationResult' has a value
     *
     * @return bool
     */
    public function hasVerificationResult()
    {
        return $this->VerificationResult !== null;
    }

    /**
     * Get 'VerificationResult' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\SignatureVerificationResult
     */
    public function getVerificationResult()
    {
        return $this->VerificationResult;
    }

    /**
     * Set 'VerificationResult' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\SignatureVerificationResult $value
     */
    public function setVerificationResult(\AgentSIB\Diadoc\Api\Proto\SignatureVerificationResult $value = null)
    {
        $this->VerificationResult = $value;
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
        if ( ! isset($values['Cms'])) {
            throw new \InvalidArgumentException('Field "Cms" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['SignerBoxId'])) {
            throw new \InvalidArgumentException('Field "SignerBoxId" (tag 3) is required but has no value.');
        }

        if ( ! isset($values['SignerDepartmentId'])) {
            throw new \InvalidArgumentException('Field "SignerDepartmentId" (tag 4) is required but has no value.');
        }

        if ( ! isset($values['IsValid'])) {
            throw new \InvalidArgumentException('Field "IsValid" (tag 5) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'CadesT' => null,
            'VerificationResult' => null,
            'DeliveredAt' => null
        ], $values);

        $message->setCms($values['Cms']);
        $message->setCadesT($values['CadesT']);
        $message->setSignerBoxId($values['SignerBoxId']);
        $message->setSignerDepartmentId($values['SignerDepartmentId']);
        $message->setIsValid($values['IsValid']);
        $message->setVerificationResult($values['VerificationResult']);
        $message->setDeliveredAt($values['DeliveredAt']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'SignatureV3',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Cms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.Entity'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'CadesT',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.Entity'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'SignerBoxId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'SignerDepartmentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'IsValid',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'VerificationResult',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.SignatureVerificationResult'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'DeliveredAt',
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

        if ($this->Cms === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Docflow\\SignatureV3#Cms" (tag 1) is required but has no value.');
        }

        if ($this->SignerBoxId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Docflow\\SignatureV3#SignerBoxId" (tag 3) is required but has no value.');
        }

        if ($this->SignerDepartmentId === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Docflow\\SignatureV3#SignerDepartmentId" (tag 4) is required but has no value.');
        }

        if ($this->IsValid === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Docflow\\SignatureV3#IsValid" (tag 5) is required but has no value.');
        }

        if ($this->Cms !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->Cms->serializedSize($sizeContext));
            $this->Cms->writeTo($context);
        }

        if ($this->CadesT !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->CadesT->serializedSize($sizeContext));
            $this->CadesT->writeTo($context);
        }

        if ($this->SignerBoxId !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->SignerBoxId);
        }

        if ($this->SignerDepartmentId !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->SignerDepartmentId);
        }

        if ($this->IsValid !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->IsValid);
        }

        if ($this->VerificationResult !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeVarint($stream, $this->VerificationResult->serializedSize($sizeContext));
            $this->VerificationResult->writeTo($context);
        }

        if ($this->DeliveredAt !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeVarint($stream, $this->DeliveredAt->serializedSize($sizeContext));
            $this->DeliveredAt->writeTo($context);
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
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\Entity();

                $this->Cms = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\Entity();

                $this->CadesT = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->SignerBoxId = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->SignerDepartmentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsValid = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\SignatureVerificationResult();

                $this->VerificationResult = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Timestamp();

                $this->DeliveredAt = $innerMessage;

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

        if ($this->Cms !== null) {
            $innerSize = $this->Cms->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->CadesT !== null) {
            $innerSize = $this->CadesT->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->SignerBoxId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->SignerBoxId);
        }

        if ($this->SignerDepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->SignerDepartmentId);
        }

        if ($this->IsValid !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->VerificationResult !== null) {
            $innerSize = $this->VerificationResult->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->DeliveredAt !== null) {
            $innerSize = $this->DeliveredAt->serializedSize($context);

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
        $this->Cms = null;
        $this->CadesT = null;
        $this->SignerBoxId = null;
        $this->SignerDepartmentId = null;
        $this->IsValid = null;
        $this->VerificationResult = null;
        $this->DeliveredAt = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Docflow\SignatureV3) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Cms = ($message->Cms !== null) ? $message->Cms : $this->Cms;
        $this->CadesT = ($message->CadesT !== null) ? $message->CadesT : $this->CadesT;
        $this->SignerBoxId = ($message->SignerBoxId !== null) ? $message->SignerBoxId : $this->SignerBoxId;
        $this->SignerDepartmentId = ($message->SignerDepartmentId !== null) ? $message->SignerDepartmentId : $this->SignerDepartmentId;
        $this->IsValid = ($message->IsValid !== null) ? $message->IsValid : $this->IsValid;
        $this->VerificationResult = ($message->VerificationResult !== null) ? $message->VerificationResult : $this->VerificationResult;
        $this->DeliveredAt = ($message->DeliveredAt !== null) ? $message->DeliveredAt : $this->DeliveredAt;
    }


}

