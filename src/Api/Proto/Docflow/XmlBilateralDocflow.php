<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/XmlBilateralDocflow.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Docflow;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Docflow.XmlBilateralDocflow
 */
class XmlBilateralDocflow extends \Protobuf\AbstractMessage
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
     * IsFinished optional bool = 1
     *
     * @var bool
     */
    protected $IsFinished = null;

    /**
     * ReceiptDocflow optional message = 2
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\ReceiptDocflow
     */
    protected $ReceiptDocflow = null;

    /**
     * BuyerTitleDocflow optional message = 3
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\BuyerTitleDocflow
     */
    protected $BuyerTitleDocflow = null;

    /**
     * RecipientSignatureRejectionDocflow optional message = 4
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow
     */
    protected $RecipientSignatureRejectionDocflow = null;

    /**
     * IsReceiptRequested optional bool = 5
     *
     * @var bool
     */
    protected $IsReceiptRequested = null;

    /**
     * IsDocumentSignedByRecipient optional bool = 6
     *
     * @var bool
     */
    protected $IsDocumentSignedByRecipient = null;

    /**
     * IsDocumentRejectedByRecipient optional bool = 7
     *
     * @var bool
     */
    protected $IsDocumentRejectedByRecipient = null;

    /**
     * CanDocumentBeReceipted optional bool = 8
     *
     * @var bool
     */
    protected $CanDocumentBeReceipted = null;

    /**
     * CanDocumentBeSignedBySender optional bool = 9
     *
     * @var bool
     */
    protected $CanDocumentBeSignedBySender = null;

    /**
     * CanDocumentBeSignedOrRejectedByRecipient optional bool = 10
     *
     * @var bool
     */
    protected $CanDocumentBeSignedOrRejectedByRecipient = null;

    /**
     * Check if 'IsFinished' has a value
     *
     * @return bool
     */
    public function hasIsFinished()
    {
        return $this->IsFinished !== null;
    }

    /**
     * Get 'IsFinished' value
     *
     * @return bool
     */
    public function getIsFinished()
    {
        return $this->IsFinished;
    }

    /**
     * Set 'IsFinished' value
     *
     * @param bool $value
     */
    public function setIsFinished($value = null)
    {
        $this->IsFinished = $value;
    }

    /**
     * Check if 'ReceiptDocflow' has a value
     *
     * @return bool
     */
    public function hasReceiptDocflow()
    {
        return $this->ReceiptDocflow !== null;
    }

    /**
     * Get 'ReceiptDocflow' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\ReceiptDocflow
     */
    public function getReceiptDocflow()
    {
        return $this->ReceiptDocflow;
    }

    /**
     * Set 'ReceiptDocflow' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\ReceiptDocflow $value
     */
    public function setReceiptDocflow(\AgentSIB\Diadoc\Api\Proto\Docflow\ReceiptDocflow $value = null)
    {
        $this->ReceiptDocflow = $value;
    }

    /**
     * Check if 'BuyerTitleDocflow' has a value
     *
     * @return bool
     */
    public function hasBuyerTitleDocflow()
    {
        return $this->BuyerTitleDocflow !== null;
    }

    /**
     * Get 'BuyerTitleDocflow' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\BuyerTitleDocflow
     */
    public function getBuyerTitleDocflow()
    {
        return $this->BuyerTitleDocflow;
    }

    /**
     * Set 'BuyerTitleDocflow' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\BuyerTitleDocflow $value
     */
    public function setBuyerTitleDocflow(\AgentSIB\Diadoc\Api\Proto\Docflow\BuyerTitleDocflow $value = null)
    {
        $this->BuyerTitleDocflow = $value;
    }

    /**
     * Check if 'RecipientSignatureRejectionDocflow' has a value
     *
     * @return bool
     */
    public function hasRecipientSignatureRejectionDocflow()
    {
        return $this->RecipientSignatureRejectionDocflow !== null;
    }

    /**
     * Get 'RecipientSignatureRejectionDocflow' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow
     */
    public function getRecipientSignatureRejectionDocflow()
    {
        return $this->RecipientSignatureRejectionDocflow;
    }

    /**
     * Set 'RecipientSignatureRejectionDocflow' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow $value
     */
    public function setRecipientSignatureRejectionDocflow(\AgentSIB\Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow $value = null)
    {
        $this->RecipientSignatureRejectionDocflow = $value;
    }

    /**
     * Check if 'IsReceiptRequested' has a value
     *
     * @return bool
     */
    public function hasIsReceiptRequested()
    {
        return $this->IsReceiptRequested !== null;
    }

    /**
     * Get 'IsReceiptRequested' value
     *
     * @return bool
     */
    public function getIsReceiptRequested()
    {
        return $this->IsReceiptRequested;
    }

    /**
     * Set 'IsReceiptRequested' value
     *
     * @param bool $value
     */
    public function setIsReceiptRequested($value = null)
    {
        $this->IsReceiptRequested = $value;
    }

    /**
     * Check if 'IsDocumentSignedByRecipient' has a value
     *
     * @return bool
     */
    public function hasIsDocumentSignedByRecipient()
    {
        return $this->IsDocumentSignedByRecipient !== null;
    }

    /**
     * Get 'IsDocumentSignedByRecipient' value
     *
     * @return bool
     */
    public function getIsDocumentSignedByRecipient()
    {
        return $this->IsDocumentSignedByRecipient;
    }

    /**
     * Set 'IsDocumentSignedByRecipient' value
     *
     * @param bool $value
     */
    public function setIsDocumentSignedByRecipient($value = null)
    {
        $this->IsDocumentSignedByRecipient = $value;
    }

    /**
     * Check if 'IsDocumentRejectedByRecipient' has a value
     *
     * @return bool
     */
    public function hasIsDocumentRejectedByRecipient()
    {
        return $this->IsDocumentRejectedByRecipient !== null;
    }

    /**
     * Get 'IsDocumentRejectedByRecipient' value
     *
     * @return bool
     */
    public function getIsDocumentRejectedByRecipient()
    {
        return $this->IsDocumentRejectedByRecipient;
    }

    /**
     * Set 'IsDocumentRejectedByRecipient' value
     *
     * @param bool $value
     */
    public function setIsDocumentRejectedByRecipient($value = null)
    {
        $this->IsDocumentRejectedByRecipient = $value;
    }

    /**
     * Check if 'CanDocumentBeReceipted' has a value
     *
     * @return bool
     */
    public function hasCanDocumentBeReceipted()
    {
        return $this->CanDocumentBeReceipted !== null;
    }

    /**
     * Get 'CanDocumentBeReceipted' value
     *
     * @return bool
     */
    public function getCanDocumentBeReceipted()
    {
        return $this->CanDocumentBeReceipted;
    }

    /**
     * Set 'CanDocumentBeReceipted' value
     *
     * @param bool $value
     */
    public function setCanDocumentBeReceipted($value = null)
    {
        $this->CanDocumentBeReceipted = $value;
    }

    /**
     * Check if 'CanDocumentBeSignedBySender' has a value
     *
     * @return bool
     */
    public function hasCanDocumentBeSignedBySender()
    {
        return $this->CanDocumentBeSignedBySender !== null;
    }

    /**
     * Get 'CanDocumentBeSignedBySender' value
     *
     * @return bool
     */
    public function getCanDocumentBeSignedBySender()
    {
        return $this->CanDocumentBeSignedBySender;
    }

    /**
     * Set 'CanDocumentBeSignedBySender' value
     *
     * @param bool $value
     */
    public function setCanDocumentBeSignedBySender($value = null)
    {
        $this->CanDocumentBeSignedBySender = $value;
    }

    /**
     * Check if 'CanDocumentBeSignedOrRejectedByRecipient' has a value
     *
     * @return bool
     */
    public function hasCanDocumentBeSignedOrRejectedByRecipient()
    {
        return $this->CanDocumentBeSignedOrRejectedByRecipient !== null;
    }

    /**
     * Get 'CanDocumentBeSignedOrRejectedByRecipient' value
     *
     * @return bool
     */
    public function getCanDocumentBeSignedOrRejectedByRecipient()
    {
        return $this->CanDocumentBeSignedOrRejectedByRecipient;
    }

    /**
     * Set 'CanDocumentBeSignedOrRejectedByRecipient' value
     *
     * @param bool $value
     */
    public function setCanDocumentBeSignedOrRejectedByRecipient($value = null)
    {
        $this->CanDocumentBeSignedOrRejectedByRecipient = $value;
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
            'IsFinished' => null,
            'ReceiptDocflow' => null,
            'BuyerTitleDocflow' => null,
            'RecipientSignatureRejectionDocflow' => null,
            'IsReceiptRequested' => null,
            'IsDocumentSignedByRecipient' => null,
            'IsDocumentRejectedByRecipient' => null,
            'CanDocumentBeReceipted' => null,
            'CanDocumentBeSignedBySender' => null,
            'CanDocumentBeSignedOrRejectedByRecipient' => null
        ], $values);

        $message->setIsFinished($values['IsFinished']);
        $message->setReceiptDocflow($values['ReceiptDocflow']);
        $message->setBuyerTitleDocflow($values['BuyerTitleDocflow']);
        $message->setRecipientSignatureRejectionDocflow($values['RecipientSignatureRejectionDocflow']);
        $message->setIsReceiptRequested($values['IsReceiptRequested']);
        $message->setIsDocumentSignedByRecipient($values['IsDocumentSignedByRecipient']);
        $message->setIsDocumentRejectedByRecipient($values['IsDocumentRejectedByRecipient']);
        $message->setCanDocumentBeReceipted($values['CanDocumentBeReceipted']);
        $message->setCanDocumentBeSignedBySender($values['CanDocumentBeSignedBySender']);
        $message->setCanDocumentBeSignedOrRejectedByRecipient($values['CanDocumentBeSignedOrRejectedByRecipient']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'XmlBilateralDocflow',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'IsFinished',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ReceiptDocflow',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.ReceiptDocflow'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'BuyerTitleDocflow',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.BuyerTitleDocflow'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'RecipientSignatureRejectionDocflow',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.RecipientSignatureRejectionDocflow'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'IsReceiptRequested',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'IsDocumentSignedByRecipient',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'IsDocumentRejectedByRecipient',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'CanDocumentBeReceipted',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'CanDocumentBeSignedBySender',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'CanDocumentBeSignedOrRejectedByRecipient',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
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

        if ($this->IsFinished !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->IsFinished);
        }

        if ($this->ReceiptDocflow !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->ReceiptDocflow->serializedSize($sizeContext));
            $this->ReceiptDocflow->writeTo($context);
        }

        if ($this->BuyerTitleDocflow !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->BuyerTitleDocflow->serializedSize($sizeContext));
            $this->BuyerTitleDocflow->writeTo($context);
        }

        if ($this->RecipientSignatureRejectionDocflow !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->RecipientSignatureRejectionDocflow->serializedSize($sizeContext));
            $this->RecipientSignatureRejectionDocflow->writeTo($context);
        }

        if ($this->IsReceiptRequested !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeBool($stream, $this->IsReceiptRequested);
        }

        if ($this->IsDocumentSignedByRecipient !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->IsDocumentSignedByRecipient);
        }

        if ($this->IsDocumentRejectedByRecipient !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeBool($stream, $this->IsDocumentRejectedByRecipient);
        }

        if ($this->CanDocumentBeReceipted !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeBool($stream, $this->CanDocumentBeReceipted);
        }

        if ($this->CanDocumentBeSignedBySender !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeBool($stream, $this->CanDocumentBeSignedBySender);
        }

        if ($this->CanDocumentBeSignedOrRejectedByRecipient !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeBool($stream, $this->CanDocumentBeSignedOrRejectedByRecipient);
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

                $this->IsFinished = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\ReceiptDocflow();

                $this->ReceiptDocflow = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\BuyerTitleDocflow();

                $this->BuyerTitleDocflow = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\RecipientSignatureRejectionDocflow();

                $this->RecipientSignatureRejectionDocflow = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsReceiptRequested = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsDocumentSignedByRecipient = $reader->readBool($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsDocumentRejectedByRecipient = $reader->readBool($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->CanDocumentBeReceipted = $reader->readBool($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->CanDocumentBeSignedBySender = $reader->readBool($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->CanDocumentBeSignedOrRejectedByRecipient = $reader->readBool($stream);

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

        if ($this->IsFinished !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->ReceiptDocflow !== null) {
            $innerSize = $this->ReceiptDocflow->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->BuyerTitleDocflow !== null) {
            $innerSize = $this->BuyerTitleDocflow->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->RecipientSignatureRejectionDocflow !== null) {
            $innerSize = $this->RecipientSignatureRejectionDocflow->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->IsReceiptRequested !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->IsDocumentSignedByRecipient !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->IsDocumentRejectedByRecipient !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->CanDocumentBeReceipted !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->CanDocumentBeSignedBySender !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->CanDocumentBeSignedOrRejectedByRecipient !== null) {
            $size += 1;
            $size += 1;
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
        $this->IsFinished = null;
        $this->ReceiptDocflow = null;
        $this->BuyerTitleDocflow = null;
        $this->RecipientSignatureRejectionDocflow = null;
        $this->IsReceiptRequested = null;
        $this->IsDocumentSignedByRecipient = null;
        $this->IsDocumentRejectedByRecipient = null;
        $this->CanDocumentBeReceipted = null;
        $this->CanDocumentBeSignedBySender = null;
        $this->CanDocumentBeSignedOrRejectedByRecipient = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Docflow\XmlBilateralDocflow) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->IsFinished = ($message->IsFinished !== null) ? $message->IsFinished : $this->IsFinished;
        $this->ReceiptDocflow = ($message->ReceiptDocflow !== null) ? $message->ReceiptDocflow : $this->ReceiptDocflow;
        $this->BuyerTitleDocflow = ($message->BuyerTitleDocflow !== null) ? $message->BuyerTitleDocflow : $this->BuyerTitleDocflow;
        $this->RecipientSignatureRejectionDocflow = ($message->RecipientSignatureRejectionDocflow !== null) ? $message->RecipientSignatureRejectionDocflow : $this->RecipientSignatureRejectionDocflow;
        $this->IsReceiptRequested = ($message->IsReceiptRequested !== null) ? $message->IsReceiptRequested : $this->IsReceiptRequested;
        $this->IsDocumentSignedByRecipient = ($message->IsDocumentSignedByRecipient !== null) ? $message->IsDocumentSignedByRecipient : $this->IsDocumentSignedByRecipient;
        $this->IsDocumentRejectedByRecipient = ($message->IsDocumentRejectedByRecipient !== null) ? $message->IsDocumentRejectedByRecipient : $this->IsDocumentRejectedByRecipient;
        $this->CanDocumentBeReceipted = ($message->CanDocumentBeReceipted !== null) ? $message->CanDocumentBeReceipted : $this->CanDocumentBeReceipted;
        $this->CanDocumentBeSignedBySender = ($message->CanDocumentBeSignedBySender !== null) ? $message->CanDocumentBeSignedBySender : $this->CanDocumentBeSignedBySender;
        $this->CanDocumentBeSignedOrRejectedByRecipient = ($message->CanDocumentBeSignedOrRejectedByRecipient !== null) ? $message->CanDocumentBeSignedOrRejectedByRecipient : $this->CanDocumentBeSignedOrRejectedByRecipient;
    }


}

