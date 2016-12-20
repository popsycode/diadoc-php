<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/InvoiceInfo.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Invoicing;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Invoicing.ShipperOrConsignee
 */
class ShipperOrConsignee extends \Protobuf\AbstractMessage
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
     * SameAsSellerOrBuyer optional bool = 1
     *
     * @var bool
     */
    protected $SameAsSellerOrBuyer = null;

    /**
     * OrgInfo optional message = 2
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\OrganizationInfo
     */
    protected $OrgInfo = null;

    /**
     * Check if 'SameAsSellerOrBuyer' has a value
     *
     * @return bool
     */
    public function hasSameAsSellerOrBuyer()
    {
        return $this->SameAsSellerOrBuyer !== null;
    }

    /**
     * Get 'SameAsSellerOrBuyer' value
     *
     * @return bool
     */
    public function getSameAsSellerOrBuyer()
    {
        return $this->SameAsSellerOrBuyer;
    }

    /**
     * Set 'SameAsSellerOrBuyer' value
     *
     * @param bool $value
     */
    public function setSameAsSellerOrBuyer($value = null)
    {
        $this->SameAsSellerOrBuyer = $value;
    }

    /**
     * Check if 'OrgInfo' has a value
     *
     * @return bool
     */
    public function hasOrgInfo()
    {
        return $this->OrgInfo !== null;
    }

    /**
     * Get 'OrgInfo' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\OrganizationInfo
     */
    public function getOrgInfo()
    {
        return $this->OrgInfo;
    }

    /**
     * Set 'OrgInfo' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Invoicing\OrganizationInfo $value
     */
    public function setOrgInfo(\AgentSIB\Diadoc\Api\Proto\Invoicing\OrganizationInfo $value = null)
    {
        $this->OrgInfo = $value;
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
            'SameAsSellerOrBuyer' => null,
            'OrgInfo' => null
        ], $values);

        $message->setSameAsSellerOrBuyer($values['SameAsSellerOrBuyer']);
        $message->setOrgInfo($values['OrgInfo']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ShipperOrConsignee',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'SameAsSellerOrBuyer',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'OrgInfo',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Invoicing.OrganizationInfo'
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

        if ($this->SameAsSellerOrBuyer !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->SameAsSellerOrBuyer);
        }

        if ($this->OrgInfo !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->OrgInfo->serializedSize($sizeContext));
            $this->OrgInfo->writeTo($context);
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->SameAsSellerOrBuyer = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Invoicing\OrganizationInfo();

                $this->OrgInfo = $innerMessage;

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

        if ($this->SameAsSellerOrBuyer !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->OrgInfo !== null) {
            $innerSize = $this->OrgInfo->serializedSize($context);

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
        $this->SameAsSellerOrBuyer = null;
        $this->OrgInfo = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Invoicing\ShipperOrConsignee) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->SameAsSellerOrBuyer = ($message->SameAsSellerOrBuyer !== null) ? $message->SameAsSellerOrBuyer : $this->SameAsSellerOrBuyer;
        $this->OrgInfo = ($message->OrgInfo !== null) ? $message->OrgInfo : $this->OrgInfo;
    }


}

