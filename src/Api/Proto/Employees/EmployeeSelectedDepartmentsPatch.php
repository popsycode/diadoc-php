<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Employees/EmployeeToUpdate.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Employees;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Employees.EmployeeSelectedDepartmentsPatch
 */
class EmployeeSelectedDepartmentsPatch extends \Protobuf\AbstractMessage
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
     * SelectedDepartmentIds repeated string = 1
     *
     * @var \Protobuf\Collection
     */
    protected $SelectedDepartmentIds = null;

    /**
     * Check if 'SelectedDepartmentIds' has a value
     *
     * @return bool
     */
    public function hasSelectedDepartmentIdsList()
    {
        return $this->SelectedDepartmentIds !== null;
    }

    /**
     * Get 'SelectedDepartmentIds' value
     *
     * @return \Protobuf\Collection
     */
    public function getSelectedDepartmentIdsList()
    {
        return $this->SelectedDepartmentIds;
    }

    /**
     * Set 'SelectedDepartmentIds' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setSelectedDepartmentIdsList(\Protobuf\Collection $value = null)
    {
        $this->SelectedDepartmentIds = $value;
    }

    /**
     * Add a new element to 'SelectedDepartmentIds'
     *
     * @param string $value
     */
    public function addSelectedDepartmentIds($value)
    {
        if ($this->SelectedDepartmentIds === null) {
            $this->SelectedDepartmentIds = new \Protobuf\ScalarCollection();
        }

        $this->SelectedDepartmentIds->add($value);
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
            'SelectedDepartmentIds' => []
        ], $values);

        foreach ($values['SelectedDepartmentIds'] as $item) {
            $message->addSelectedDepartmentIds($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'EmployeeSelectedDepartmentsPatch',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'SelectedDepartmentIds',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->SelectedDepartmentIds !== null) {
            foreach ($this->SelectedDepartmentIds as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeString($stream, $val);
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

                if ($this->SelectedDepartmentIds === null) {
                    $this->SelectedDepartmentIds = new \Protobuf\ScalarCollection();
                }

                $this->SelectedDepartmentIds->add($reader->readString($stream));

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

        if ($this->SelectedDepartmentIds !== null) {
            foreach ($this->SelectedDepartmentIds as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
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
        $this->SelectedDepartmentIds = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Employees\EmployeeSelectedDepartmentsPatch) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->SelectedDepartmentIds = ($message->SelectedDepartmentIds !== null) ? $message->SelectedDepartmentIds : $this->SelectedDepartmentIds;
    }


}

