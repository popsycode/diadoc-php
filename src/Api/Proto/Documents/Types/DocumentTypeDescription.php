<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/Types/DocumentTypeDescription.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents\Types;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Documents.Types.DocumentTypeDescription
 */
class DocumentTypeDescription extends \Protobuf\AbstractMessage
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
     * Name required string = 1
     *
     * @var string
     */
    protected $Name = null;

    /**
     * Title required string = 2
     *
     * @var string
     */
    protected $Title = null;

    /**
     * SupportedDocflows repeated enum = 3
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentDocflow>
     */
    protected $SupportedDocflows = null;

    /**
     * RequiresFnsRegistration required bool = 4
     *
     * @var bool
     */
    protected $RequiresFnsRegistration = null;

    /**
     * Functions repeated message = 9
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentFunction>
     */
    protected $Functions = null;

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
     * Check if 'Title' has a value
     *
     * @return bool
     */
    public function hasTitle()
    {
        return $this->Title !== null;
    }

    /**
     * Get 'Title' value
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Set 'Title' value
     *
     * @param string $value
     */
    public function setTitle($value)
    {
        $this->Title = $value;
    }

    /**
     * Check if 'SupportedDocflows' has a value
     *
     * @return bool
     */
    public function hasSupportedDocflowsList()
    {
        return $this->SupportedDocflows !== null;
    }

    /**
     * Get 'SupportedDocflows' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentDocflow>
     */
    public function getSupportedDocflowsList()
    {
        return $this->SupportedDocflows;
    }

    /**
     * Set 'SupportedDocflows' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentDocflow> $value
     */
    public function setSupportedDocflowsList(\Protobuf\Collection $value = null)
    {
        $this->SupportedDocflows = $value;
    }

    /**
     * Add a new element to 'SupportedDocflows'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentDocflow $value
     */
    public function addSupportedDocflows(\AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentDocflow $value)
    {
        if ($this->SupportedDocflows === null) {
            $this->SupportedDocflows = new \Protobuf\EnumCollection();
        }

        $this->SupportedDocflows->add($value);
    }

    /**
     * Check if 'RequiresFnsRegistration' has a value
     *
     * @return bool
     */
    public function hasRequiresFnsRegistration()
    {
        return $this->RequiresFnsRegistration !== null;
    }

    /**
     * Get 'RequiresFnsRegistration' value
     *
     * @return bool
     */
    public function getRequiresFnsRegistration()
    {
        return $this->RequiresFnsRegistration;
    }

    /**
     * Set 'RequiresFnsRegistration' value
     *
     * @param bool $value
     */
    public function setRequiresFnsRegistration($value)
    {
        $this->RequiresFnsRegistration = $value;
    }

    /**
     * Check if 'Functions' has a value
     *
     * @return bool
     */
    public function hasFunctionsList()
    {
        return $this->Functions !== null;
    }

    /**
     * Get 'Functions' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentFunction>
     */
    public function getFunctionsList()
    {
        return $this->Functions;
    }

    /**
     * Set 'Functions' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentFunction> $value
     */
    public function setFunctionsList(\Protobuf\Collection $value = null)
    {
        $this->Functions = $value;
    }

    /**
     * Add a new element to 'Functions'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentFunction $value
     */
    public function addFunctions(\AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentFunction $value)
    {
        if ($this->Functions === null) {
            $this->Functions = new \Protobuf\MessageCollection();
        }

        $this->Functions->add($value);
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
            throw new \InvalidArgumentException('Field "Name" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['Title'])) {
            throw new \InvalidArgumentException('Field "Title" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['RequiresFnsRegistration'])) {
            throw new \InvalidArgumentException('Field "RequiresFnsRegistration" (tag 4) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'SupportedDocflows' => [],
            'Functions' => []
        ], $values);

        $message->setName($values['Name']);
        $message->setTitle($values['Title']);
        $message->setRequiresFnsRegistration($values['RequiresFnsRegistration']);

        foreach ($values['SupportedDocflows'] as $item) {
            $message->addSupportedDocflows($item);
        }

        foreach ($values['Functions'] as $item) {
            $message->addFunctions($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DocumentTypeDescription',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Title',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'SupportedDocflows',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Documents.Types.DocumentDocflow'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'RequiresFnsRegistration',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'Functions',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Documents.Types.DocumentFunction'
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
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\Types\\DocumentTypeDescription#Name" (tag 1) is required but has no value.');
        }

        if ($this->Title === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\Types\\DocumentTypeDescription#Title" (tag 2) is required but has no value.');
        }

        if ($this->RequiresFnsRegistration === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\Types\\DocumentTypeDescription#RequiresFnsRegistration" (tag 4) is required but has no value.');
        }

        if ($this->Name !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Name);
        }

        if ($this->Title !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Title);
        }

        if ($this->SupportedDocflows !== null) {
            foreach ($this->SupportedDocflows as $val) {
                $writer->writeVarint($stream, 24);
                $writer->writeVarint($stream, $val->value());
            }
        }

        if ($this->RequiresFnsRegistration !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->RequiresFnsRegistration);
        }

        if ($this->Functions !== null) {
            foreach ($this->Functions as $val) {
                $writer->writeVarint($stream, 74);
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

                $this->Name = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Title = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                if ($this->SupportedDocflows === null) {
                    $this->SupportedDocflows = new \Protobuf\EnumCollection();
                }

                $this->SupportedDocflows->add(\AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentDocflow::valueOf($reader->readVarint($stream)));

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->RequiresFnsRegistration = $reader->readBool($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentFunction();

                if ($this->Functions === null) {
                    $this->Functions = new \Protobuf\MessageCollection();
                }

                $this->Functions->add($innerMessage);

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

        if ($this->Name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Name);
        }

        if ($this->Title !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Title);
        }

        if ($this->SupportedDocflows !== null) {
            foreach ($this->SupportedDocflows as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val->value());
            }
        }

        if ($this->RequiresFnsRegistration !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->Functions !== null) {
            foreach ($this->Functions as $val) {
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
        $this->Name = null;
        $this->Title = null;
        $this->SupportedDocflows = null;
        $this->RequiresFnsRegistration = null;
        $this->Functions = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Documents\Types\DocumentTypeDescription) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Name = ($message->Name !== null) ? $message->Name : $this->Name;
        $this->Title = ($message->Title !== null) ? $message->Title : $this->Title;
        $this->SupportedDocflows = ($message->SupportedDocflows !== null) ? $message->SupportedDocflows : $this->SupportedDocflows;
        $this->RequiresFnsRegistration = ($message->RequiresFnsRegistration !== null) ? $message->RequiresFnsRegistration : $this->RequiresFnsRegistration;
        $this->Functions = ($message->Functions !== null) ? $message->Functions : $this->Functions;
    }


}

