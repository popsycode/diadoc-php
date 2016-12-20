<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/UniversalTransferDocumentInfo.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Invoicing;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Invoicing.OtherIssuer
 */
class OtherIssuer extends \Protobuf\AbstractMessage
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
     * TransferEmployeePosition optional string = 1
     *
     * @var string
     */
    protected $TransferEmployeePosition = null;

    /**
     * TransferEmployeeInfo optional string = 2
     *
     * @var string
     */
    protected $TransferEmployeeInfo = null;

    /**
     * TransferOrganizationName optional string = 3
     *
     * @var string
     */
    protected $TransferOrganizationName = null;

    /**
     * TransferOrganizationBase optional string = 4
     *
     * @var string
     */
    protected $TransferOrganizationBase = null;

    /**
     * TransferEmployeeBase optional string = 5
     *
     * @var string
     */
    protected $TransferEmployeeBase = null;

    /**
     * TransferSurname required string = 6
     *
     * @var string
     */
    protected $TransferSurname = null;

    /**
     * TransferFirstName required string = 7
     *
     * @var string
     */
    protected $TransferFirstName = null;

    /**
     * TransferPatronymic optional string = 8
     *
     * @var string
     */
    protected $TransferPatronymic = null;

    /**
     * Check if 'TransferEmployeePosition' has a value
     *
     * @return bool
     */
    public function hasTransferEmployeePosition()
    {
        return $this->TransferEmployeePosition !== null;
    }

    /**
     * Get 'TransferEmployeePosition' value
     *
     * @return string
     */
    public function getTransferEmployeePosition()
    {
        return $this->TransferEmployeePosition;
    }

    /**
     * Set 'TransferEmployeePosition' value
     *
     * @param string $value
     */
    public function setTransferEmployeePosition($value = null)
    {
        $this->TransferEmployeePosition = $value;
    }

    /**
     * Check if 'TransferEmployeeInfo' has a value
     *
     * @return bool
     */
    public function hasTransferEmployeeInfo()
    {
        return $this->TransferEmployeeInfo !== null;
    }

    /**
     * Get 'TransferEmployeeInfo' value
     *
     * @return string
     */
    public function getTransferEmployeeInfo()
    {
        return $this->TransferEmployeeInfo;
    }

    /**
     * Set 'TransferEmployeeInfo' value
     *
     * @param string $value
     */
    public function setTransferEmployeeInfo($value = null)
    {
        $this->TransferEmployeeInfo = $value;
    }

    /**
     * Check if 'TransferOrganizationName' has a value
     *
     * @return bool
     */
    public function hasTransferOrganizationName()
    {
        return $this->TransferOrganizationName !== null;
    }

    /**
     * Get 'TransferOrganizationName' value
     *
     * @return string
     */
    public function getTransferOrganizationName()
    {
        return $this->TransferOrganizationName;
    }

    /**
     * Set 'TransferOrganizationName' value
     *
     * @param string $value
     */
    public function setTransferOrganizationName($value = null)
    {
        $this->TransferOrganizationName = $value;
    }

    /**
     * Check if 'TransferOrganizationBase' has a value
     *
     * @return bool
     */
    public function hasTransferOrganizationBase()
    {
        return $this->TransferOrganizationBase !== null;
    }

    /**
     * Get 'TransferOrganizationBase' value
     *
     * @return string
     */
    public function getTransferOrganizationBase()
    {
        return $this->TransferOrganizationBase;
    }

    /**
     * Set 'TransferOrganizationBase' value
     *
     * @param string $value
     */
    public function setTransferOrganizationBase($value = null)
    {
        $this->TransferOrganizationBase = $value;
    }

    /**
     * Check if 'TransferEmployeeBase' has a value
     *
     * @return bool
     */
    public function hasTransferEmployeeBase()
    {
        return $this->TransferEmployeeBase !== null;
    }

    /**
     * Get 'TransferEmployeeBase' value
     *
     * @return string
     */
    public function getTransferEmployeeBase()
    {
        return $this->TransferEmployeeBase;
    }

    /**
     * Set 'TransferEmployeeBase' value
     *
     * @param string $value
     */
    public function setTransferEmployeeBase($value = null)
    {
        $this->TransferEmployeeBase = $value;
    }

    /**
     * Check if 'TransferSurname' has a value
     *
     * @return bool
     */
    public function hasTransferSurname()
    {
        return $this->TransferSurname !== null;
    }

    /**
     * Get 'TransferSurname' value
     *
     * @return string
     */
    public function getTransferSurname()
    {
        return $this->TransferSurname;
    }

    /**
     * Set 'TransferSurname' value
     *
     * @param string $value
     */
    public function setTransferSurname($value)
    {
        $this->TransferSurname = $value;
    }

    /**
     * Check if 'TransferFirstName' has a value
     *
     * @return bool
     */
    public function hasTransferFirstName()
    {
        return $this->TransferFirstName !== null;
    }

    /**
     * Get 'TransferFirstName' value
     *
     * @return string
     */
    public function getTransferFirstName()
    {
        return $this->TransferFirstName;
    }

    /**
     * Set 'TransferFirstName' value
     *
     * @param string $value
     */
    public function setTransferFirstName($value)
    {
        $this->TransferFirstName = $value;
    }

    /**
     * Check if 'TransferPatronymic' has a value
     *
     * @return bool
     */
    public function hasTransferPatronymic()
    {
        return $this->TransferPatronymic !== null;
    }

    /**
     * Get 'TransferPatronymic' value
     *
     * @return string
     */
    public function getTransferPatronymic()
    {
        return $this->TransferPatronymic;
    }

    /**
     * Set 'TransferPatronymic' value
     *
     * @param string $value
     */
    public function setTransferPatronymic($value = null)
    {
        $this->TransferPatronymic = $value;
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
        if ( ! isset($values['TransferSurname'])) {
            throw new \InvalidArgumentException('Field "TransferSurname" (tag 6) is required but has no value.');
        }

        if ( ! isset($values['TransferFirstName'])) {
            throw new \InvalidArgumentException('Field "TransferFirstName" (tag 7) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'TransferEmployeePosition' => null,
            'TransferEmployeeInfo' => null,
            'TransferOrganizationName' => null,
            'TransferOrganizationBase' => null,
            'TransferEmployeeBase' => null,
            'TransferPatronymic' => null
        ], $values);

        $message->setTransferEmployeePosition($values['TransferEmployeePosition']);
        $message->setTransferEmployeeInfo($values['TransferEmployeeInfo']);
        $message->setTransferOrganizationName($values['TransferOrganizationName']);
        $message->setTransferOrganizationBase($values['TransferOrganizationBase']);
        $message->setTransferEmployeeBase($values['TransferEmployeeBase']);
        $message->setTransferSurname($values['TransferSurname']);
        $message->setTransferFirstName($values['TransferFirstName']);
        $message->setTransferPatronymic($values['TransferPatronymic']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'OtherIssuer',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'TransferEmployeePosition',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'TransferEmployeeInfo',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'TransferOrganizationName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'TransferOrganizationBase',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'TransferEmployeeBase',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'TransferSurname',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'TransferFirstName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'TransferPatronymic',
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

        if ($this->TransferSurname === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Invoicing\\OtherIssuer#TransferSurname" (tag 6) is required but has no value.');
        }

        if ($this->TransferFirstName === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Invoicing\\OtherIssuer#TransferFirstName" (tag 7) is required but has no value.');
        }

        if ($this->TransferEmployeePosition !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->TransferEmployeePosition);
        }

        if ($this->TransferEmployeeInfo !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->TransferEmployeeInfo);
        }

        if ($this->TransferOrganizationName !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->TransferOrganizationName);
        }

        if ($this->TransferOrganizationBase !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->TransferOrganizationBase);
        }

        if ($this->TransferEmployeeBase !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->TransferEmployeeBase);
        }

        if ($this->TransferSurname !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->TransferSurname);
        }

        if ($this->TransferFirstName !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->TransferFirstName);
        }

        if ($this->TransferPatronymic !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->TransferPatronymic);
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

                $this->TransferEmployeePosition = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TransferEmployeeInfo = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TransferOrganizationName = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TransferOrganizationBase = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TransferEmployeeBase = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TransferSurname = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TransferFirstName = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->TransferPatronymic = $reader->readString($stream);

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

        if ($this->TransferEmployeePosition !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TransferEmployeePosition);
        }

        if ($this->TransferEmployeeInfo !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TransferEmployeeInfo);
        }

        if ($this->TransferOrganizationName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TransferOrganizationName);
        }

        if ($this->TransferOrganizationBase !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TransferOrganizationBase);
        }

        if ($this->TransferEmployeeBase !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TransferEmployeeBase);
        }

        if ($this->TransferSurname !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TransferSurname);
        }

        if ($this->TransferFirstName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TransferFirstName);
        }

        if ($this->TransferPatronymic !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->TransferPatronymic);
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
        $this->TransferEmployeePosition = null;
        $this->TransferEmployeeInfo = null;
        $this->TransferOrganizationName = null;
        $this->TransferOrganizationBase = null;
        $this->TransferEmployeeBase = null;
        $this->TransferSurname = null;
        $this->TransferFirstName = null;
        $this->TransferPatronymic = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Invoicing\OtherIssuer) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->TransferEmployeePosition = ($message->TransferEmployeePosition !== null) ? $message->TransferEmployeePosition : $this->TransferEmployeePosition;
        $this->TransferEmployeeInfo = ($message->TransferEmployeeInfo !== null) ? $message->TransferEmployeeInfo : $this->TransferEmployeeInfo;
        $this->TransferOrganizationName = ($message->TransferOrganizationName !== null) ? $message->TransferOrganizationName : $this->TransferOrganizationName;
        $this->TransferOrganizationBase = ($message->TransferOrganizationBase !== null) ? $message->TransferOrganizationBase : $this->TransferOrganizationBase;
        $this->TransferEmployeeBase = ($message->TransferEmployeeBase !== null) ? $message->TransferEmployeeBase : $this->TransferEmployeeBase;
        $this->TransferSurname = ($message->TransferSurname !== null) ? $message->TransferSurname : $this->TransferSurname;
        $this->TransferFirstName = ($message->TransferFirstName !== null) ? $message->TransferFirstName : $this->TransferFirstName;
        $this->TransferPatronymic = ($message->TransferPatronymic !== null) ? $message->TransferPatronymic : $this->TransferPatronymic;
    }


}

