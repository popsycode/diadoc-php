<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Employees/Employee.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Employees;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Employees.EmployeeList
 */
class EmployeeList extends \Protobuf\AbstractMessage
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
     * Employees repeated message = 1
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Employees\Employee>
     */
    protected $Employees = null;

    /**
     * TotalCount required int32 = 2
     *
     * @var int
     */
    protected $TotalCount = null;

    /**
     * Check if 'Employees' has a value
     *
     * @return bool
     */
    public function hasEmployeesList()
    {
        return $this->Employees !== null;
    }

    /**
     * Get 'Employees' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Employees\Employee>
     */
    public function getEmployeesList()
    {
        return $this->Employees;
    }

    /**
     * Set 'Employees' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Employees\Employee> $value
     */
    public function setEmployeesList(\Protobuf\Collection $value = null)
    {
        $this->Employees = $value;
    }

    /**
     * Add a new element to 'Employees'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Employees\Employee $value
     */
    public function addEmployees(\AgentSIB\Diadoc\Api\Proto\Employees\Employee $value)
    {
        if ($this->Employees === null) {
            $this->Employees = new \Protobuf\MessageCollection();
        }

        $this->Employees->add($value);
    }

    /**
     * Check if 'TotalCount' has a value
     *
     * @return bool
     */
    public function hasTotalCount()
    {
        return $this->TotalCount !== null;
    }

    /**
     * Get 'TotalCount' value
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->TotalCount;
    }

    /**
     * Set 'TotalCount' value
     *
     * @param int $value
     */
    public function setTotalCount($value)
    {
        $this->TotalCount = $value;
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
        if ( ! isset($values['TotalCount'])) {
            throw new \InvalidArgumentException('Field "TotalCount" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Employees' => [],
        ], $values);

        $message->setTotalCount($values['TotalCount']);

        foreach ($values['Employees'] as $item) {
            $message->addEmployees($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'EmployeeList',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Employees',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Employees.Employee'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'TotalCount',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
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

        if ($this->TotalCount === null) {
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Employees\\EmployeeList#TotalCount" (tag 2) is required but has no value.');
        }

        if ($this->Employees !== null) {
            foreach ($this->Employees as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->TotalCount !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->TotalCount);
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
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Employees\Employee();

                if ($this->Employees === null) {
                    $this->Employees = new \Protobuf\MessageCollection();
                }

                $this->Employees->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->TotalCount = $reader->readVarint($stream);

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

        if ($this->Employees !== null) {
            foreach ($this->Employees as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->TotalCount !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->TotalCount);
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
        $this->Employees = null;
        $this->TotalCount = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Employees\EmployeeList) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Employees = ($message->Employees !== null) ? $message->Employees : $this->Employees;
        $this->TotalCount = ($message->TotalCount !== null) ? $message->TotalCount : $this->TotalCount;
    }


}

