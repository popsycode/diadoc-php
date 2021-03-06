<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : User.proto
 */


namespace AgentSIB\Diadoc\Api\Proto;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.User
 */
class User extends \Protobuf\AbstractMessage
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
     * Id optional string = 1
     *
     * @var string
     */
    protected $Id = null;

    /**
     * LastName optional string = 2
     *
     * @var string
     */
    protected $LastName = null;

    /**
     * FirstName optional string = 3
     *
     * @var string
     */
    protected $FirstName = null;

    /**
     * MiddleName optional string = 4
     *
     * @var string
     */
    protected $MiddleName = null;

    /**
     * CloudCertificates repeated message = 5
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\CertificateInfo>
     */
    protected $CloudCertificates = null;

    /**
     * Check if 'Id' has a value
     *
     * @return bool
     */
    public function hasId()
    {
        return $this->Id !== null;
    }

    /**
     * Get 'Id' value
     *
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set 'Id' value
     *
     * @param string $value
     */
    public function setId($value = null)
    {
        $this->Id = $value;
    }

    /**
     * Check if 'LastName' has a value
     *
     * @return bool
     */
    public function hasLastName()
    {
        return $this->LastName !== null;
    }

    /**
     * Get 'LastName' value
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * Set 'LastName' value
     *
     * @param string $value
     */
    public function setLastName($value = null)
    {
        $this->LastName = $value;
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
     * Check if 'MiddleName' has a value
     *
     * @return bool
     */
    public function hasMiddleName()
    {
        return $this->MiddleName !== null;
    }

    /**
     * Get 'MiddleName' value
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * Set 'MiddleName' value
     *
     * @param string $value
     */
    public function setMiddleName($value = null)
    {
        $this->MiddleName = $value;
    }

    /**
     * Check if 'CloudCertificates' has a value
     *
     * @return bool
     */
    public function hasCloudCertificatesList()
    {
        return $this->CloudCertificates !== null;
    }

    /**
     * Get 'CloudCertificates' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\CertificateInfo>
     */
    public function getCloudCertificatesList()
    {
        return $this->CloudCertificates;
    }

    /**
     * Set 'CloudCertificates' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\CertificateInfo> $value
     */
    public function setCloudCertificatesList(\Protobuf\Collection $value = null)
    {
        $this->CloudCertificates = $value;
    }

    /**
     * Add a new element to 'CloudCertificates'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\CertificateInfo $value
     */
    public function addCloudCertificates(\AgentSIB\Diadoc\Api\Proto\CertificateInfo $value)
    {
        if ($this->CloudCertificates === null) {
            $this->CloudCertificates = new \Protobuf\MessageCollection();
        }

        $this->CloudCertificates->add($value);
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
            'Id' => null,
            'LastName' => null,
            'FirstName' => null,
            'MiddleName' => null,
            'CloudCertificates' => []
        ], $values);

        $message->setId($values['Id']);
        $message->setLastName($values['LastName']);
        $message->setFirstName($values['FirstName']);
        $message->setMiddleName($values['MiddleName']);

        foreach ($values['CloudCertificates'] as $item) {
            $message->addCloudCertificates($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'User',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'LastName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'FirstName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'MiddleName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'CloudCertificates',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.CertificateInfo'
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

        if ($this->Id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Id);
        }

        if ($this->LastName !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->LastName);
        }

        if ($this->FirstName !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->FirstName);
        }

        if ($this->MiddleName !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->MiddleName);
        }

        if ($this->CloudCertificates !== null) {
            foreach ($this->CloudCertificates as $val) {
                $writer->writeVarint($stream, 42);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Id = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->LastName = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->FirstName = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->MiddleName = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\CertificateInfo();

                if ($this->CloudCertificates === null) {
                    $this->CloudCertificates = new \Protobuf\MessageCollection();
                }

                $this->CloudCertificates->add($innerMessage);

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

        if ($this->Id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Id);
        }

        if ($this->LastName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->LastName);
        }

        if ($this->FirstName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->FirstName);
        }

        if ($this->MiddleName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->MiddleName);
        }

        if ($this->CloudCertificates !== null) {
            foreach ($this->CloudCertificates as $val) {
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
        $this->Id = null;
        $this->LastName = null;
        $this->FirstName = null;
        $this->MiddleName = null;
        $this->CloudCertificates = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\User) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Id = ($message->Id !== null) ? $message->Id : $this->Id;
        $this->LastName = ($message->LastName !== null) ? $message->LastName : $this->LastName;
        $this->FirstName = ($message->FirstName !== null) ? $message->FirstName : $this->FirstName;
        $this->MiddleName = ($message->MiddleName !== null) ? $message->MiddleName : $this->MiddleName;
        $this->CloudCertificates = ($message->CloudCertificates !== null) ? $message->CloudCertificates : $this->CloudCertificates;
    }


}

