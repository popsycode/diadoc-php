<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Departments/DepartmentToCreate.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Departments;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Departments.DepartmentToCreate
 */
class DepartmentToCreate extends \Protobuf\AbstractMessage
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
     * ParentDepartmentId optional string = 1
     *
     * @var string
     */
    protected $ParentDepartmentId = null;

    /**
     * Name required string = 2
     *
     * @var string
     */
    protected $Name = null;

    /**
     * Abbreviation required string = 3
     *
     * @var string
     */
    protected $Abbreviation = null;

    /**
     * Kpp optional string = 4
     *
     * @var string
     */
    protected $Kpp = null;

    /**
     * Address optional message = 5
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Address
     */
    protected $Address = null;

    /**
     * Routing required message = 6
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Departments\Routing
     */
    protected $Routing = null;

    /**
     * Check if 'ParentDepartmentId' has a value
     *
     * @return bool
     */
    public function hasParentDepartmentId()
    {
        return $this->ParentDepartmentId !== null;
    }

    /**
     * Get 'ParentDepartmentId' value
     *
     * @return string
     */
    public function getParentDepartmentId()
    {
        return $this->ParentDepartmentId;
    }

    /**
     * Set 'ParentDepartmentId' value
     *
     * @param string $value
     */
    public function setParentDepartmentId($value = null)
    {
        $this->ParentDepartmentId = $value;
    }

    /**
     * Check if 'Name' has a value
     *
     * @return bool
     */
    public function hasName()
    {
        return $this->Name !== null;
    }

    /**
     * Get 'Name' value
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set 'Name' value
     *
     * @param string $value
     */
    public function setName($value)
    {
        $this->Name = $value;
    }

    /**
     * Check if 'Abbreviation' has a value
     *
     * @return bool
     */
    public function hasAbbreviation()
    {
        return $this->Abbreviation !== null;
    }

    /**
     * Get 'Abbreviation' value
     *
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->Abbreviation;
    }

    /**
     * Set 'Abbreviation' value
     *
     * @param string $value
     */
    public function setAbbreviation($value)
    {
        $this->Abbreviation = $value;
    }

    /**
     * Check if 'Kpp' has a value
     *
     * @return bool
     */
    public function hasKpp()
    {
        return $this->Kpp !== null;
    }

    /**
     * Get 'Kpp' value
     *
     * @return string
     */
    public function getKpp()
    {
        return $this->Kpp;
    }

    /**
     * Set 'Kpp' value
     *
     * @param string $value
     */
    public function setKpp($value = null)
    {
        $this->Kpp = $value;
    }

    /**
     * Check if 'Address' has a value
     *
     * @return bool
     */
    public function hasAddress()
    {
        return $this->Address !== null;
    }

    /**
     * Get 'Address' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Set 'Address' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Address $value
     */
    public function setAddress(\AgentSIB\Diadoc\Api\Proto\Address $value = null)
    {
        $this->Address = $value;
    }

    /**
     * Check if 'Routing' has a value
     *
     * @return bool
     */
    public function hasRouting()
    {
        return $this->Routing !== null;
    }

    /**
     * Get 'Routing' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Departments\Routing
     */
    public function getRouting()
    {
        return $this->Routing;
    }

    /**
     * Set 'Routing' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Departments\Routing $value
     */
    public function setRouting(\AgentSIB\Diadoc\Api\Proto\Departments\Routing $value)
    {
        $this->Routing = $value;
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
        if ( ! isset($values['Name'])) {
            throw new \InvalidArgumentException('Field "Name" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['Abbreviation'])) {
            throw new \InvalidArgumentException('Field "Abbreviation" (tag 3) is required but has no value.');
        }

        if ( ! isset($values['Routing'])) {
            throw new \InvalidArgumentException('Field "Routing" (tag 6) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'ParentDepartmentId' => null,
            'Kpp' => null,
            'Address' => null,
        ], $values);

        $message->setParentDepartmentId($values['ParentDepartmentId']);
        $message->setName($values['Name']);
        $message->setAbbreviation($values['Abbreviation']);
        $message->setKpp($values['Kpp']);
        $message->setAddress($values['Address']);
        $message->setRouting($values['Routing']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DepartmentToCreate',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'ParentDepartmentId',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'Abbreviation',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'Kpp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'Address',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Address'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'Routing',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Departments.Routing'
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

        if ($this->Name === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Departments\\DepartmentToCreate#Name" (tag 2) is required but has no value.');
        }

        if ($this->Abbreviation === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Departments\\DepartmentToCreate#Abbreviation" (tag 3) is required but has no value.');
        }

        if ($this->Routing === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Departments\\DepartmentToCreate#Routing" (tag 6) is required but has no value.');
        }

        if ($this->ParentDepartmentId !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->ParentDepartmentId);
        }

        if ($this->Name !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Name);
        }

        if ($this->Abbreviation !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->Abbreviation);
        }

        if ($this->Kpp !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->Kpp);
        }

        if ($this->Address !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeVarint($stream, $this->Address->serializedSize($sizeContext));
            $this->Address->writeTo($context);
        }

        if ($this->Routing !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeVarint($stream, $this->Routing->serializedSize($sizeContext));
            $this->Routing->writeTo($context);
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

                $this->ParentDepartmentId = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Name = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Abbreviation = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Kpp = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Address();

                $this->Address = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Departments\Routing();

                $this->Routing = $innerMessage;

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

        if ($this->ParentDepartmentId !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ParentDepartmentId);
        }

        if ($this->Name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Name);
        }

        if ($this->Abbreviation !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Abbreviation);
        }

        if ($this->Kpp !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Kpp);
        }

        if ($this->Address !== null) {
            $innerSize = $this->Address->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->Routing !== null) {
            $innerSize = $this->Routing->serializedSize($context);

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
        $this->ParentDepartmentId = null;
        $this->Name = null;
        $this->Abbreviation = null;
        $this->Kpp = null;
        $this->Address = null;
        $this->Routing = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Departments\DepartmentToCreate) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->ParentDepartmentId = ($message->ParentDepartmentId !== null) ? $message->ParentDepartmentId : $this->ParentDepartmentId;
        $this->Name = ($message->Name !== null) ? $message->Name : $this->Name;
        $this->Abbreviation = ($message->Abbreviation !== null) ? $message->Abbreviation : $this->Abbreviation;
        $this->Kpp = ($message->Kpp !== null) ? $message->Kpp : $this->Kpp;
        $this->Address = ($message->Address !== null) ? $message->Address : $this->Address;
        $this->Routing = ($message->Routing !== null) ? $message->Routing : $this->Routing;
    }


}

