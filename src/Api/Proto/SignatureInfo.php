<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : SignatureInfo.proto
 */


namespace AgentSIB\Diadoc\Api\Proto;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.SignatureInfo
 */
class SignatureInfo extends \Protobuf\AbstractMessage
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
     * SigningTime required message = 1
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Timestamp
     */
    protected $SigningTime = null;

    /**
     * SignatureVerificationTime optional message = 2
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Timestamp
     */
    protected $SignatureVerificationTime = null;

    /**
     * SignatureVerificationResult optional message = 3
     *
     * @var \AgentSIB\Diadoc\Api\Proto\SignatureVerificationResult
     */
    protected $SignatureVerificationResult = null;

    /**
     * Thumbprint required string = 4
     *
     * @var string
     */
    protected $Thumbprint = null;

    /**
     * SerialNumber required string = 5
     *
     * @var string
     */
    protected $SerialNumber = null;

    /**
     * Issuer optional string = 6
     *
     * @var string
     */
    protected $Issuer = null;

    /**
     * StartDate optional string = 7
     *
     * @var string
     */
    protected $StartDate = null;

    /**
     * EndDate optional string = 8
     *
     * @var string
     */
    protected $EndDate = null;

    /**
     * OrgName optional string = 9
     *
     * @var string
     */
    protected $OrgName = null;

    /**
     * OrgInn optional string = 10
     *
     * @var string
     */
    protected $OrgInn = null;

    /**
     * JobTitle optional string = 11
     *
     * @var string
     */
    protected $JobTitle = null;

    /**
     * FirstName optional string = 12
     *
     * @var string
     */
    protected $FirstName = null;

    /**
     * Surname optional string = 13
     *
     * @var string
     */
    protected $Surname = null;

    /**
     * Snils optional string = 14
     *
     * @var string
     */
    protected $Snils = null;

    /**
     * Email optional string = 15
     *
     * @var string
     */
    protected $Email = null;

    /**
     * Check if 'SigningTime' has a value
     *
     * @return bool
     */
    public function hasSigningTime()
    {
        return $this->SigningTime !== null;
    }

    /**
     * Get 'SigningTime' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Timestamp
     */
    public function getSigningTime()
    {
        return $this->SigningTime;
    }

    /**
     * Set 'SigningTime' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Timestamp $value
     */
    public function setSigningTime(\AgentSIB\Diadoc\Api\Proto\Timestamp $value)
    {
        $this->SigningTime = $value;
    }

    /**
     * Check if 'SignatureVerificationTime' has a value
     *
     * @return bool
     */
    public function hasSignatureVerificationTime()
    {
        return $this->SignatureVerificationTime !== null;
    }

    /**
     * Get 'SignatureVerificationTime' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Timestamp
     */
    public function getSignatureVerificationTime()
    {
        return $this->SignatureVerificationTime;
    }

    /**
     * Set 'SignatureVerificationTime' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Timestamp $value
     */
    public function setSignatureVerificationTime(\AgentSIB\Diadoc\Api\Proto\Timestamp $value = null)
    {
        $this->SignatureVerificationTime = $value;
    }

    /**
     * Check if 'SignatureVerificationResult' has a value
     *
     * @return bool
     */
    public function hasSignatureVerificationResult()
    {
        return $this->SignatureVerificationResult !== null;
    }

    /**
     * Get 'SignatureVerificationResult' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\SignatureVerificationResult
     */
    public function getSignatureVerificationResult()
    {
        return $this->SignatureVerificationResult;
    }

    /**
     * Set 'SignatureVerificationResult' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\SignatureVerificationResult $value
     */
    public function setSignatureVerificationResult(\AgentSIB\Diadoc\Api\Proto\SignatureVerificationResult $value = null)
    {
        $this->SignatureVerificationResult = $value;
    }

    /**
     * Check if 'Thumbprint' has a value
     *
     * @return bool
     */
    public function hasThumbprint()
    {
        return $this->Thumbprint !== null;
    }

    /**
     * Get 'Thumbprint' value
     *
     * @return string
     */
    public function getThumbprint()
    {
        return $this->Thumbprint;
    }

    /**
     * Set 'Thumbprint' value
     *
     * @param string $value
     */
    public function setThumbprint($value)
    {
        $this->Thumbprint = $value;
    }

    /**
     * Check if 'SerialNumber' has a value
     *
     * @return bool
     */
    public function hasSerialNumber()
    {
        return $this->SerialNumber !== null;
    }

    /**
     * Get 'SerialNumber' value
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->SerialNumber;
    }

    /**
     * Set 'SerialNumber' value
     *
     * @param string $value
     */
    public function setSerialNumber($value)
    {
        $this->SerialNumber = $value;
    }

    /**
     * Check if 'Issuer' has a value
     *
     * @return bool
     */
    public function hasIssuer()
    {
        return $this->Issuer !== null;
    }

    /**
     * Get 'Issuer' value
     *
     * @return string
     */
    public function getIssuer()
    {
        return $this->Issuer;
    }

    /**
     * Set 'Issuer' value
     *
     * @param string $value
     */
    public function setIssuer($value = null)
    {
        $this->Issuer = $value;
    }

    /**
     * Check if 'StartDate' has a value
     *
     * @return bool
     */
    public function hasStartDate()
    {
        return $this->StartDate !== null;
    }

    /**
     * Get 'StartDate' value
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * Set 'StartDate' value
     *
     * @param string $value
     */
    public function setStartDate($value = null)
    {
        $this->StartDate = $value;
    }

    /**
     * Check if 'EndDate' has a value
     *
     * @return bool
     */
    public function hasEndDate()
    {
        return $this->EndDate !== null;
    }

    /**
     * Get 'EndDate' value
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * Set 'EndDate' value
     *
     * @param string $value
     */
    public function setEndDate($value = null)
    {
        $this->EndDate = $value;
    }

    /**
     * Check if 'OrgName' has a value
     *
     * @return bool
     */
    public function hasOrgName()
    {
        return $this->OrgName !== null;
    }

    /**
     * Get 'OrgName' value
     *
     * @return string
     */
    public function getOrgName()
    {
        return $this->OrgName;
    }

    /**
     * Set 'OrgName' value
     *
     * @param string $value
     */
    public function setOrgName($value = null)
    {
        $this->OrgName = $value;
    }

    /**
     * Check if 'OrgInn' has a value
     *
     * @return bool
     */
    public function hasOrgInn()
    {
        return $this->OrgInn !== null;
    }

    /**
     * Get 'OrgInn' value
     *
     * @return string
     */
    public function getOrgInn()
    {
        return $this->OrgInn;
    }

    /**
     * Set 'OrgInn' value
     *
     * @param string $value
     */
    public function setOrgInn($value = null)
    {
        $this->OrgInn = $value;
    }

    /**
     * Check if 'JobTitle' has a value
     *
     * @return bool
     */
    public function hasJobTitle()
    {
        return $this->JobTitle !== null;
    }

    /**
     * Get 'JobTitle' value
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->JobTitle;
    }

    /**
     * Set 'JobTitle' value
     *
     * @param string $value
     */
    public function setJobTitle($value = null)
    {
        $this->JobTitle = $value;
    }

    /**
     * Check if 'FirstName' has a value
     *
     * @return bool
     */
    public function hasFirstName()
    {
        return $this->FirstName !== null;
    }

    /**
     * Get 'FirstName' value
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Set 'FirstName' value
     *
     * @param string $value
     */
    public function setFirstName($value = null)
    {
        $this->FirstName = $value;
    }

    /**
     * Check if 'Surname' has a value
     *
     * @return bool
     */
    public function hasSurname()
    {
        return $this->Surname !== null;
    }

    /**
     * Get 'Surname' value
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * Set 'Surname' value
     *
     * @param string $value
     */
    public function setSurname($value = null)
    {
        $this->Surname = $value;
    }

    /**
     * Check if 'Snils' has a value
     *
     * @return bool
     */
    public function hasSnils()
    {
        return $this->Snils !== null;
    }

    /**
     * Get 'Snils' value
     *
     * @return string
     */
    public function getSnils()
    {
        return $this->Snils;
    }

    /**
     * Set 'Snils' value
     *
     * @param string $value
     */
    public function setSnils($value = null)
    {
        $this->Snils = $value;
    }

    /**
     * Check if 'Email' has a value
     *
     * @return bool
     */
    public function hasEmail()
    {
        return $this->Email !== null;
    }

    /**
     * Get 'Email' value
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set 'Email' value
     *
     * @param string $value
     */
    public function setEmail($value = null)
    {
        $this->Email = $value;
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
        if ( ! isset($values['SigningTime'])) {
            throw new \InvalidArgumentException('Field "SigningTime" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['Thumbprint'])) {
            throw new \InvalidArgumentException('Field "Thumbprint" (tag 4) is required but has no value.');
        }

        if ( ! isset($values['SerialNumber'])) {
            throw new \InvalidArgumentException('Field "SerialNumber" (tag 5) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'SignatureVerificationTime' => null,
            'SignatureVerificationResult' => null,
            'Issuer' => null,
            'StartDate' => null,
            'EndDate' => null,
            'OrgName' => null,
            'OrgInn' => null,
            'JobTitle' => null,
            'FirstName' => null,
            'Surname' => null,
            'Snils' => null,
            'Email' => null
        ], $values);

        $message->setSigningTime($values['SigningTime']);
        $message->setSignatureVerificationTime($values['SignatureVerificationTime']);
        $message->setSignatureVerificationResult($values['SignatureVerificationResult']);
        $message->setThumbprint($values['Thumbprint']);
        $message->setSerialNumber($values['SerialNumber']);
        $message->setIssuer($values['Issuer']);
        $message->setStartDate($values['StartDate']);
        $message->setEndDate($values['EndDate']);
        $message->setOrgName($values['OrgName']);
        $message->setOrgInn($values['OrgInn']);
        $message->setJobTitle($values['JobTitle']);
        $message->setFirstName($values['FirstName']);
        $message->setSurname($values['Surname']);
        $message->setSnils($values['Snils']);
        $message->setEmail($values['Email']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'SignatureInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'SigningTime',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Timestamp'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'SignatureVerificationTime',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Timestamp'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'SignatureVerificationResult',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.SignatureVerificationResult'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Thumbprint',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'SerialNumber',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'Issuer',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'StartDate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'EndDate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'OrgName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'OrgInn',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'JobTitle',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'FirstName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'Surname',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'Snils',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 15,
                    'name' => 'Email',
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

        if ($this->SigningTime === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\SignatureInfo#SigningTime" (tag 1) is required but has no value.');
        }

        if ($this->Thumbprint === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\SignatureInfo#Thumbprint" (tag 4) is required but has no value.');
        }

        if ($this->SerialNumber === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\SignatureInfo#SerialNumber" (tag 5) is required but has no value.');
        }

        if ($this->SigningTime !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->SigningTime->serializedSize($sizeContext));
            $this->SigningTime->writeTo($context);
        }

        if ($this->SignatureVerificationTime !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->SignatureVerificationTime->serializedSize($sizeContext));
            $this->SignatureVerificationTime->writeTo($context);
        }

        if ($this->SignatureVerificationResult !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->SignatureVerificationResult->serializedSize($sizeContext));
            $this->SignatureVerificationResult->writeTo($context);
        }

        if ($this->Thumbprint !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->Thumbprint);
        }

        if ($this->SerialNumber !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->SerialNumber);
        }

        if ($this->Issuer !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->Issuer);
        }

        if ($this->StartDate !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->StartDate);
        }

        if ($this->EndDate !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->EndDate);
        }

        if ($this->OrgName !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeString($stream, $this->OrgName);
        }

        if ($this->OrgInn !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeString($stream, $this->OrgInn);
        }

        if ($this->JobTitle !== null) {
            $writer->writeVarint($stream, 90);
            $writer->writeString($stream, $this->JobTitle);
        }

        if ($this->FirstName !== null) {
            $writer->writeVarint($stream, 98);
            $writer->writeString($stream, $this->FirstName);
        }

        if ($this->Surname !== null) {
            $writer->writeVarint($stream, 106);
            $writer->writeString($stream, $this->Surname);
        }

        if ($this->Snils !== null) {
            $writer->writeVarint($stream, 114);
            $writer->writeString($stream, $this->Snils);
        }

        if ($this->Email !== null) {
            $writer->writeVarint($stream, 122);
            $writer->writeString($stream, $this->Email);
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
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Timestamp();

                $this->SigningTime = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Timestamp();

                $this->SignatureVerificationTime = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\SignatureVerificationResult();

                $this->SignatureVerificationResult = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Thumbprint = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->SerialNumber = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Issuer = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->StartDate = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->EndDate = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->OrgName = $reader->readString($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->OrgInn = $reader->readString($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->JobTitle = $reader->readString($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->FirstName = $reader->readString($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Surname = $reader->readString($stream);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Snils = $reader->readString($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Email = $reader->readString($stream);

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

        if ($this->SigningTime !== null) {
            $innerSize = $this->SigningTime->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->SignatureVerificationTime !== null) {
            $innerSize = $this->SignatureVerificationTime->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->SignatureVerificationResult !== null) {
            $innerSize = $this->SignatureVerificationResult->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->Thumbprint !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Thumbprint);
        }

        if ($this->SerialNumber !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->SerialNumber);
        }

        if ($this->Issuer !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Issuer);
        }

        if ($this->StartDate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->StartDate);
        }

        if ($this->EndDate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->EndDate);
        }

        if ($this->OrgName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->OrgName);
        }

        if ($this->OrgInn !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->OrgInn);
        }

        if ($this->JobTitle !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->JobTitle);
        }

        if ($this->FirstName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->FirstName);
        }

        if ($this->Surname !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Surname);
        }

        if ($this->Snils !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Snils);
        }

        if ($this->Email !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Email);
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
        $this->SigningTime = null;
        $this->SignatureVerificationTime = null;
        $this->SignatureVerificationResult = null;
        $this->Thumbprint = null;
        $this->SerialNumber = null;
        $this->Issuer = null;
        $this->StartDate = null;
        $this->EndDate = null;
        $this->OrgName = null;
        $this->OrgInn = null;
        $this->JobTitle = null;
        $this->FirstName = null;
        $this->Surname = null;
        $this->Snils = null;
        $this->Email = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\SignatureInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->SigningTime = ($message->SigningTime !== null) ? $message->SigningTime : $this->SigningTime;
        $this->SignatureVerificationTime = ($message->SignatureVerificationTime !== null) ? $message->SignatureVerificationTime : $this->SignatureVerificationTime;
        $this->SignatureVerificationResult = ($message->SignatureVerificationResult !== null) ? $message->SignatureVerificationResult : $this->SignatureVerificationResult;
        $this->Thumbprint = ($message->Thumbprint !== null) ? $message->Thumbprint : $this->Thumbprint;
        $this->SerialNumber = ($message->SerialNumber !== null) ? $message->SerialNumber : $this->SerialNumber;
        $this->Issuer = ($message->Issuer !== null) ? $message->Issuer : $this->Issuer;
        $this->StartDate = ($message->StartDate !== null) ? $message->StartDate : $this->StartDate;
        $this->EndDate = ($message->EndDate !== null) ? $message->EndDate : $this->EndDate;
        $this->OrgName = ($message->OrgName !== null) ? $message->OrgName : $this->OrgName;
        $this->OrgInn = ($message->OrgInn !== null) ? $message->OrgInn : $this->OrgInn;
        $this->JobTitle = ($message->JobTitle !== null) ? $message->JobTitle : $this->JobTitle;
        $this->FirstName = ($message->FirstName !== null) ? $message->FirstName : $this->FirstName;
        $this->Surname = ($message->Surname !== null) ? $message->Surname : $this->Surname;
        $this->Snils = ($message->Snils !== null) ? $message->Snils : $this->Snils;
        $this->Email = ($message->Email !== null) ? $message->Email : $this->Email;
    }


}

