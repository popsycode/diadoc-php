<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/AcceptanceCertificate552Info.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Invoicing;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Invoicing.AcceptanceCertificate552WorkItem
 */
class AcceptanceCertificate552WorkItem extends \Protobuf\AbstractMessage
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
     * Name optional string = 1
     *
     * @var string
     */
    protected $Name = null;

    /**
     * Description optional string = 2
     *
     * @var string
     */
    protected $Description = null;

    /**
     * UnitCode optional string = 3
     *
     * @var string
     */
    protected $UnitCode = null;

    /**
     * UnitName optional string = 4
     *
     * @var string
     */
    protected $UnitName = null;

    /**
     * Price optional string = 5
     *
     * @var string
     */
    protected $Price = null;

    /**
     * Quantity optional string = 6
     *
     * @var string
     */
    protected $Quantity = null;

    /**
     * SubtotalWithVatExcluded optional string = 7
     *
     * @var string
     */
    protected $SubtotalWithVatExcluded = null;

    /**
     * Vat optional string = 8
     *
     * @var string
     */
    protected $Vat = null;

    /**
     * Subtotal optional string = 9
     *
     * @var string
     */
    protected $Subtotal = null;

    /**
     * AdditionalInfos repeated message = 10
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Invoicing\AdditionalInfo>
     */
    protected $AdditionalInfos = null;

    /**
     * TaxRate optional enum = 11
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    protected $TaxRate = null;

    /**
     * ItemAccountDebit optional string = 12
     *
     * @var string
     */
    protected $ItemAccountDebit = null;

    /**
     * ItemAccountCredit optional string = 13
     *
     * @var string
     */
    protected $ItemAccountCredit = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->TaxRate = \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate::Percent_18();

        parent::__construct($stream, $configuration);
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
    public function setName($value = null)
    {
        $this->Name = $value;
    }

    /**
     * Check if 'Description' has a value
     *
     * @return bool
     */
    public function hasDescription()
    {
        return $this->Description !== null;
    }

    /**
     * Get 'Description' value
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Set 'Description' value
     *
     * @param string $value
     */
    public function setDescription($value = null)
    {
        $this->Description = $value;
    }

    /**
     * Check if 'UnitCode' has a value
     *
     * @return bool
     */
    public function hasUnitCode()
    {
        return $this->UnitCode !== null;
    }

    /**
     * Get 'UnitCode' value
     *
     * @return string
     */
    public function getUnitCode()
    {
        return $this->UnitCode;
    }

    /**
     * Set 'UnitCode' value
     *
     * @param string $value
     */
    public function setUnitCode($value = null)
    {
        $this->UnitCode = $value;
    }

    /**
     * Check if 'UnitName' has a value
     *
     * @return bool
     */
    public function hasUnitName()
    {
        return $this->UnitName !== null;
    }

    /**
     * Get 'UnitName' value
     *
     * @return string
     */
    public function getUnitName()
    {
        return $this->UnitName;
    }

    /**
     * Set 'UnitName' value
     *
     * @param string $value
     */
    public function setUnitName($value = null)
    {
        $this->UnitName = $value;
    }

    /**
     * Check if 'Price' has a value
     *
     * @return bool
     */
    public function hasPrice()
    {
        return $this->Price !== null;
    }

    /**
     * Get 'Price' value
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Set 'Price' value
     *
     * @param string $value
     */
    public function setPrice($value = null)
    {
        $this->Price = $value;
    }

    /**
     * Check if 'Quantity' has a value
     *
     * @return bool
     */
    public function hasQuantity()
    {
        return $this->Quantity !== null;
    }

    /**
     * Get 'Quantity' value
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * Set 'Quantity' value
     *
     * @param string $value
     */
    public function setQuantity($value = null)
    {
        $this->Quantity = $value;
    }

    /**
     * Check if 'SubtotalWithVatExcluded' has a value
     *
     * @return bool
     */
    public function hasSubtotalWithVatExcluded()
    {
        return $this->SubtotalWithVatExcluded !== null;
    }

    /**
     * Get 'SubtotalWithVatExcluded' value
     *
     * @return string
     */
    public function getSubtotalWithVatExcluded()
    {
        return $this->SubtotalWithVatExcluded;
    }

    /**
     * Set 'SubtotalWithVatExcluded' value
     *
     * @param string $value
     */
    public function setSubtotalWithVatExcluded($value = null)
    {
        $this->SubtotalWithVatExcluded = $value;
    }

    /**
     * Check if 'Vat' has a value
     *
     * @return bool
     */
    public function hasVat()
    {
        return $this->Vat !== null;
    }

    /**
     * Get 'Vat' value
     *
     * @return string
     */
    public function getVat()
    {
        return $this->Vat;
    }

    /**
     * Set 'Vat' value
     *
     * @param string $value
     */
    public function setVat($value = null)
    {
        $this->Vat = $value;
    }

    /**
     * Check if 'Subtotal' has a value
     *
     * @return bool
     */
    public function hasSubtotal()
    {
        return $this->Subtotal !== null;
    }

    /**
     * Get 'Subtotal' value
     *
     * @return string
     */
    public function getSubtotal()
    {
        return $this->Subtotal;
    }

    /**
     * Set 'Subtotal' value
     *
     * @param string $value
     */
    public function setSubtotal($value = null)
    {
        $this->Subtotal = $value;
    }

    /**
     * Check if 'AdditionalInfos' has a value
     *
     * @return bool
     */
    public function hasAdditionalInfosList()
    {
        return $this->AdditionalInfos !== null;
    }

    /**
     * Get 'AdditionalInfos' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Invoicing\AdditionalInfo>
     */
    public function getAdditionalInfosList()
    {
        return $this->AdditionalInfos;
    }

    /**
     * Set 'AdditionalInfos' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Invoicing\AdditionalInfo> $value
     */
    public function setAdditionalInfosList(\Protobuf\Collection $value = null)
    {
        $this->AdditionalInfos = $value;
    }

    /**
     * Add a new element to 'AdditionalInfos'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Invoicing\AdditionalInfo $value
     */
    public function addAdditionalInfos(\AgentSIB\Diadoc\Api\Proto\Invoicing\AdditionalInfo $value)
    {
        if ($this->AdditionalInfos === null) {
            $this->AdditionalInfos = new \Protobuf\MessageCollection();
        }

        $this->AdditionalInfos->add($value);
    }

    /**
     * Check if 'TaxRate' has a value
     *
     * @return bool
     */
    public function hasTaxRate()
    {
        return $this->TaxRate !== null;
    }

    /**
     * Get 'TaxRate' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }

    /**
     * Set 'TaxRate' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate $value
     */
    public function setTaxRate(\AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate $value = null)
    {
        $this->TaxRate = $value;
    }

    /**
     * Check if 'ItemAccountDebit' has a value
     *
     * @return bool
     */
    public function hasItemAccountDebit()
    {
        return $this->ItemAccountDebit !== null;
    }

    /**
     * Get 'ItemAccountDebit' value
     *
     * @return string
     */
    public function getItemAccountDebit()
    {
        return $this->ItemAccountDebit;
    }

    /**
     * Set 'ItemAccountDebit' value
     *
     * @param string $value
     */
    public function setItemAccountDebit($value = null)
    {
        $this->ItemAccountDebit = $value;
    }

    /**
     * Check if 'ItemAccountCredit' has a value
     *
     * @return bool
     */
    public function hasItemAccountCredit()
    {
        return $this->ItemAccountCredit !== null;
    }

    /**
     * Get 'ItemAccountCredit' value
     *
     * @return string
     */
    public function getItemAccountCredit()
    {
        return $this->ItemAccountCredit;
    }

    /**
     * Set 'ItemAccountCredit' value
     *
     * @param string $value
     */
    public function setItemAccountCredit($value = null)
    {
        $this->ItemAccountCredit = $value;
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
            'Name' => null,
            'Description' => null,
            'UnitCode' => null,
            'UnitName' => null,
            'Price' => null,
            'Quantity' => null,
            'SubtotalWithVatExcluded' => null,
            'Vat' => null,
            'Subtotal' => null,
            'AdditionalInfos' => [],
            'TaxRate' => \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate::Percent_18(),
            'ItemAccountDebit' => null,
            'ItemAccountCredit' => null
        ], $values);

        $message->setName($values['Name']);
        $message->setDescription($values['Description']);
        $message->setUnitCode($values['UnitCode']);
        $message->setUnitName($values['UnitName']);
        $message->setPrice($values['Price']);
        $message->setQuantity($values['Quantity']);
        $message->setSubtotalWithVatExcluded($values['SubtotalWithVatExcluded']);
        $message->setVat($values['Vat']);
        $message->setSubtotal($values['Subtotal']);
        $message->setTaxRate($values['TaxRate']);
        $message->setItemAccountDebit($values['ItemAccountDebit']);
        $message->setItemAccountCredit($values['ItemAccountCredit']);

        foreach ($values['AdditionalInfos'] as $item) {
            $message->addAdditionalInfos($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'AcceptanceCertificate552WorkItem',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Description',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'UnitCode',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'UnitName',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'Price',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'Quantity',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'SubtotalWithVatExcluded',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'Vat',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'Subtotal',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'AdditionalInfos',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Invoicing.AdditionalInfo'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'TaxRate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Invoicing.TaxRate',
                    'default_value' => \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate::Percent_18()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'ItemAccountDebit',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'ItemAccountCredit',
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

        if ($this->Name !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->Name);
        }

        if ($this->Description !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->Description);
        }

        if ($this->UnitCode !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->UnitCode);
        }

        if ($this->UnitName !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->UnitName);
        }

        if ($this->Price !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->Price);
        }

        if ($this->Quantity !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->Quantity);
        }

        if ($this->SubtotalWithVatExcluded !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->SubtotalWithVatExcluded);
        }

        if ($this->Vat !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->Vat);
        }

        if ($this->Subtotal !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeString($stream, $this->Subtotal);
        }

        if ($this->AdditionalInfos !== null) {
            foreach ($this->AdditionalInfos as $val) {
                $writer->writeVarint($stream, 82);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->TaxRate !== null) {
            $writer->writeVarint($stream, 88);
            $writer->writeVarint($stream, $this->TaxRate->value());
        }

        if ($this->ItemAccountDebit !== null) {
            $writer->writeVarint($stream, 98);
            $writer->writeString($stream, $this->ItemAccountDebit);
        }

        if ($this->ItemAccountCredit !== null) {
            $writer->writeVarint($stream, 106);
            $writer->writeString($stream, $this->ItemAccountCredit);
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

                $this->Description = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->UnitCode = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->UnitName = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Price = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Quantity = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->SubtotalWithVatExcluded = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Vat = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->Subtotal = $reader->readString($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Invoicing\AdditionalInfo();

                if ($this->AdditionalInfos === null) {
                    $this->AdditionalInfos = new \Protobuf\MessageCollection();
                }

                $this->AdditionalInfos->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->TaxRate = \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ItemAccountDebit = $reader->readString($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ItemAccountCredit = $reader->readString($stream);

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

        if ($this->Description !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Description);
        }

        if ($this->UnitCode !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->UnitCode);
        }

        if ($this->UnitName !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->UnitName);
        }

        if ($this->Price !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Price);
        }

        if ($this->Quantity !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Quantity);
        }

        if ($this->SubtotalWithVatExcluded !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->SubtotalWithVatExcluded);
        }

        if ($this->Vat !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Vat);
        }

        if ($this->Subtotal !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->Subtotal);
        }

        if ($this->AdditionalInfos !== null) {
            foreach ($this->AdditionalInfos as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->TaxRate !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->TaxRate->value());
        }

        if ($this->ItemAccountDebit !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ItemAccountDebit);
        }

        if ($this->ItemAccountCredit !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ItemAccountCredit);
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
        $this->Description = null;
        $this->UnitCode = null;
        $this->UnitName = null;
        $this->Price = null;
        $this->Quantity = null;
        $this->SubtotalWithVatExcluded = null;
        $this->Vat = null;
        $this->Subtotal = null;
        $this->AdditionalInfos = null;
        $this->TaxRate = \AgentSIB\Diadoc\Api\Proto\Invoicing\TaxRate::Percent_18();
        $this->ItemAccountDebit = null;
        $this->ItemAccountCredit = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Invoicing\AcceptanceCertificate552WorkItem) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Name = ($message->Name !== null) ? $message->Name : $this->Name;
        $this->Description = ($message->Description !== null) ? $message->Description : $this->Description;
        $this->UnitCode = ($message->UnitCode !== null) ? $message->UnitCode : $this->UnitCode;
        $this->UnitName = ($message->UnitName !== null) ? $message->UnitName : $this->UnitName;
        $this->Price = ($message->Price !== null) ? $message->Price : $this->Price;
        $this->Quantity = ($message->Quantity !== null) ? $message->Quantity : $this->Quantity;
        $this->SubtotalWithVatExcluded = ($message->SubtotalWithVatExcluded !== null) ? $message->SubtotalWithVatExcluded : $this->SubtotalWithVatExcluded;
        $this->Vat = ($message->Vat !== null) ? $message->Vat : $this->Vat;
        $this->Subtotal = ($message->Subtotal !== null) ? $message->Subtotal : $this->Subtotal;
        $this->AdditionalInfos = ($message->AdditionalInfos !== null) ? $message->AdditionalInfos : $this->AdditionalInfos;
        $this->TaxRate = ($message->TaxRate !== null) ? $message->TaxRate : $this->TaxRate;
        $this->ItemAccountDebit = ($message->ItemAccountDebit !== null) ? $message->ItemAccountDebit : $this->ItemAccountDebit;
        $this->ItemAccountCredit = ($message->ItemAccountCredit !== null) ? $message->ItemAccountCredit : $this->ItemAccountCredit;
    }


}

