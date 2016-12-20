<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/DocumentInfo.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Docflow;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Docflow.SupplementaryAgreementDocumentInfo
 */
class SupplementaryAgreementDocumentInfo extends \Protobuf\AbstractMessage
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
     * Total optional string = 1
     *
     * @var string
     */
    protected $Total = null;

    /**
     * ContractType optional string = 2
     *
     * @var string
     */
    protected $ContractType = null;

    /**
     * ContractNumber optional string = 3
     *
     * @var string
     */
    protected $ContractNumber = null;

    /**
     * ContractDate optional string = 4
     *
     * @var string
     */
    protected $ContractDate = null;

    /**
     * Check if 'Total' has a value
     *
     * @return bool
     */
    public function hasTotal()
    {
        return $this->Total !== null;
    }

    /**
     * Get 'Total' value
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * Set 'Total' value
     *
     * @param string $value
     */
    public function setTotal($value = null)
    {
        $this->Total = $value;
    }

    /**
     * Check if 'ContractType' has a value
     *
     * @return bool
     */
    public function hasContractType()
    {
        return $this->ContractType !== null;
    }

    /**
     * Get 'ContractType' value
     *
     * @return string
     */
    public function getContractType()
    {
        return $this->ContractType;
    }

    /**
     * Set 'ContractType' value
     *
     * @param string $value
     */
    public function setContractType($value = null)
    {
        $this->ContractType = $value;
    }

    /**
     * Check if 'ContractNumber' has a value
     *
     * @return bool
     */
    public function hasContractNumber()
    {
        return $this->ContractNumber !== null;
    }

    /**
     * Get 'ContractNumber' value
     *
     * @return string
     */
    public function getContractNumber()
    {
        return $this->ContractNumber;
    }

    /**
     * Set 'ContractNumber' value
     *
     * @param string $value
     */
    public function setContractNumber($value = null)
    {
        $this->ContractNumber = $value;
    }

    /**
     * Check if 'ContractDate' has a value
     *
     * @return bool
     */
    public function hasContractDate()
    {
        return $this->ContractDate !== null;
    }

    /**
     * Get 'ContractDate' value
     *
     * @return string
     */
    public function getContractDate()
    {
        return $this->ContractDate;
    }

    /**
     * Set 'ContractDate' value
     *
     * @param string $value
     */
    public function setContractDate($value = null)
    {
        $this->ContractDate = $value;
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
            'Total' => null,
            'ContractType' => null,
            'ContractNumber' => null,
            'ContractDate' => null
        ], $values);

        $message->setTotal($values['Total']);
        $message->setContractType($values['ContractType']);
        $message->setContractNumber($values['ContractNumber']);
        $message->setContractDate($values['ContractDate']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'SupplementaryAgreementDocumentInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Total',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ContractType',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'ContractNumber',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'ContractDate',
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

        if ($this->Total !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Total);
        }

        if ($this->ContractType !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->ContractType);
        }

        if ($this->ContractNumber !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->ContractNumber);
        }

        if ($this->ContractDate !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->ContractDate);
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

                $this->Total = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ContractType = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ContractNumber = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ContractDate = $reader->readString($stream);

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

        if ($this->Total !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Total);
        }

        if ($this->ContractType !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ContractType);
        }

        if ($this->ContractNumber !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ContractNumber);
        }

        if ($this->ContractDate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ContractDate);
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
        $this->Total = null;
        $this->ContractType = null;
        $this->ContractNumber = null;
        $this->ContractDate = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Docflow\SupplementaryAgreementDocumentInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Total = ($message->Total !== null) ? $message->Total : $this->Total;
        $this->ContractType = ($message->ContractType !== null) ? $message->ContractType : $this->ContractType;
        $this->ContractNumber = ($message->ContractNumber !== null) ? $message->ContractNumber : $this->ContractNumber;
        $this->ContractDate = ($message->ContractDate !== null) ? $message->ContractDate : $this->ContractDate;
    }


}

