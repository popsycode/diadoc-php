<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Docflow/InvoiceDocflow.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Docflow;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Docflow.InboundInvoiceDocflow
 */
class InboundInvoiceDocflow extends \Protobuf\AbstractMessage
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
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\InboundInvoiceReceiptDocflow
     */
    protected $ReceiptDocflow = null;

    /**
     * ConfirmationDocflow optional message = 3
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow
     */
    protected $ConfirmationDocflow = null;

    /**
     * CorrectionRequestDocflow optional message = 4
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow
     */
    protected $CorrectionRequestDocflow = null;

    /**
     * ConfirmationTimestamp optional message = 5
     *
     * @var \AgentSIB\Diadoc\Api\Proto\Timestamp
     */
    protected $ConfirmationTimestamp = null;

    /**
     * IsAmendmentRequested optional bool = 6
     *
     * @var bool
     */
    protected $IsAmendmentRequested = null;

    /**
     * IsRevised optional bool = 7
     *
     * @var bool
     */
    protected $IsRevised = null;

    /**
     * IsCorrected optional bool = 8
     *
     * @var bool
     */
    protected $IsCorrected = null;

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
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\InboundInvoiceReceiptDocflow
     */
    public function getReceiptDocflow()
    {
        return $this->ReceiptDocflow;
    }

    /**
     * Set 'ReceiptDocflow' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\InboundInvoiceReceiptDocflow $value
     */
    public function setReceiptDocflow(\AgentSIB\Diadoc\Api\Proto\Docflow\InboundInvoiceReceiptDocflow $value = null)
    {
        $this->ReceiptDocflow = $value;
    }

    /**
     * Check if 'ConfirmationDocflow' has a value
     *
     * @return bool
     */
    public function hasConfirmationDocflow()
    {
        return $this->ConfirmationDocflow !== null;
    }

    /**
     * Get 'ConfirmationDocflow' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow
     */
    public function getConfirmationDocflow()
    {
        return $this->ConfirmationDocflow;
    }

    /**
     * Set 'ConfirmationDocflow' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow $value
     */
    public function setConfirmationDocflow(\AgentSIB\Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow $value = null)
    {
        $this->ConfirmationDocflow = $value;
    }

    /**
     * Check if 'CorrectionRequestDocflow' has a value
     *
     * @return bool
     */
    public function hasCorrectionRequestDocflow()
    {
        return $this->CorrectionRequestDocflow !== null;
    }

    /**
     * Get 'CorrectionRequestDocflow' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow
     */
    public function getCorrectionRequestDocflow()
    {
        return $this->CorrectionRequestDocflow;
    }

    /**
     * Set 'CorrectionRequestDocflow' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow $value
     */
    public function setCorrectionRequestDocflow(\AgentSIB\Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow $value = null)
    {
        $this->CorrectionRequestDocflow = $value;
    }

    /**
     * Check if 'ConfirmationTimestamp' has a value
     *
     * @return bool
     */
    public function hasConfirmationTimestamp()
    {
        return $this->ConfirmationTimestamp !== null;
    }

    /**
     * Get 'ConfirmationTimestamp' value
     *
     * @return \AgentSIB\Diadoc\Api\Proto\Timestamp
     */
    public function getConfirmationTimestamp()
    {
        return $this->ConfirmationTimestamp;
    }

    /**
     * Set 'ConfirmationTimestamp' value
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Timestamp $value
     */
    public function setConfirmationTimestamp(\AgentSIB\Diadoc\Api\Proto\Timestamp $value = null)
    {
        $this->ConfirmationTimestamp = $value;
    }

    /**
     * Check if 'IsAmendmentRequested' has a value
     *
     * @return bool
     */
    public function hasIsAmendmentRequested()
    {
        return $this->IsAmendmentRequested !== null;
    }

    /**
     * Get 'IsAmendmentRequested' value
     *
     * @return bool
     */
    public function getIsAmendmentRequested()
    {
        return $this->IsAmendmentRequested;
    }

    /**
     * Set 'IsAmendmentRequested' value
     *
     * @param bool $value
     */
    public function setIsAmendmentRequested($value = null)
    {
        $this->IsAmendmentRequested = $value;
    }

    /**
     * Check if 'IsRevised' has a value
     *
     * @return bool
     */
    public function hasIsRevised()
    {
        return $this->IsRevised !== null;
    }

    /**
     * Get 'IsRevised' value
     *
     * @return bool
     */
    public function getIsRevised()
    {
        return $this->IsRevised;
    }

    /**
     * Set 'IsRevised' value
     *
     * @param bool $value
     */
    public function setIsRevised($value = null)
    {
        $this->IsRevised = $value;
    }

    /**
     * Check if 'IsCorrected' has a value
     *
     * @return bool
     */
    public function hasIsCorrected()
    {
        return $this->IsCorrected !== null;
    }

    /**
     * Get 'IsCorrected' value
     *
     * @return bool
     */
    public function getIsCorrected()
    {
        return $this->IsCorrected;
    }

    /**
     * Set 'IsCorrected' value
     *
     * @param bool $value
     */
    public function setIsCorrected($value = null)
    {
        $this->IsCorrected = $value;
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
            'ConfirmationDocflow' => null,
            'CorrectionRequestDocflow' => null,
            'ConfirmationTimestamp' => null,
            'IsAmendmentRequested' => null,
            'IsRevised' => null,
            'IsCorrected' => null
        ], $values);

        $message->setIsFinished($values['IsFinished']);
        $message->setReceiptDocflow($values['ReceiptDocflow']);
        $message->setConfirmationDocflow($values['ConfirmationDocflow']);
        $message->setCorrectionRequestDocflow($values['CorrectionRequestDocflow']);
        $message->setConfirmationTimestamp($values['ConfirmationTimestamp']);
        $message->setIsAmendmentRequested($values['IsAmendmentRequested']);
        $message->setIsRevised($values['IsRevised']);
        $message->setIsCorrected($values['IsCorrected']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'InboundInvoiceDocflow',
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
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.InboundInvoiceReceiptDocflow'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'ConfirmationDocflow',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.InvoiceConfirmationDocflow'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'CorrectionRequestDocflow',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Docflow.InvoiceCorrectionRequestDocflow'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'ConfirmationTimestamp',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Timestamp'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'IsAmendmentRequested',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'IsRevised',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'IsCorrected',
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

        if ($this->ConfirmationDocflow !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->ConfirmationDocflow->serializedSize($sizeContext));
            $this->ConfirmationDocflow->writeTo($context);
        }

        if ($this->CorrectionRequestDocflow !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->CorrectionRequestDocflow->serializedSize($sizeContext));
            $this->CorrectionRequestDocflow->writeTo($context);
        }

        if ($this->ConfirmationTimestamp !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeVarint($stream, $this->ConfirmationTimestamp->serializedSize($sizeContext));
            $this->ConfirmationTimestamp->writeTo($context);
        }

        if ($this->IsAmendmentRequested !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->IsAmendmentRequested);
        }

        if ($this->IsRevised !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeBool($stream, $this->IsRevised);
        }

        if ($this->IsCorrected !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeBool($stream, $this->IsCorrected);
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
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\InboundInvoiceReceiptDocflow();

                $this->ReceiptDocflow = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\InvoiceConfirmationDocflow();

                $this->ConfirmationDocflow = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Docflow\InvoiceCorrectionRequestDocflow();

                $this->CorrectionRequestDocflow = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Timestamp();

                $this->ConfirmationTimestamp = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsAmendmentRequested = $reader->readBool($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsRevised = $reader->readBool($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->IsCorrected = $reader->readBool($stream);

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

        if ($this->ConfirmationDocflow !== null) {
            $innerSize = $this->ConfirmationDocflow->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->CorrectionRequestDocflow !== null) {
            $innerSize = $this->CorrectionRequestDocflow->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->ConfirmationTimestamp !== null) {
            $innerSize = $this->ConfirmationTimestamp->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->IsAmendmentRequested !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->IsRevised !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->IsCorrected !== null) {
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
        $this->ConfirmationDocflow = null;
        $this->CorrectionRequestDocflow = null;
        $this->ConfirmationTimestamp = null;
        $this->IsAmendmentRequested = null;
        $this->IsRevised = null;
        $this->IsCorrected = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Docflow\InboundInvoiceDocflow) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->IsFinished = ($message->IsFinished !== null) ? $message->IsFinished : $this->IsFinished;
        $this->ReceiptDocflow = ($message->ReceiptDocflow !== null) ? $message->ReceiptDocflow : $this->ReceiptDocflow;
        $this->ConfirmationDocflow = ($message->ConfirmationDocflow !== null) ? $message->ConfirmationDocflow : $this->ConfirmationDocflow;
        $this->CorrectionRequestDocflow = ($message->CorrectionRequestDocflow !== null) ? $message->CorrectionRequestDocflow : $this->CorrectionRequestDocflow;
        $this->ConfirmationTimestamp = ($message->ConfirmationTimestamp !== null) ? $message->ConfirmationTimestamp : $this->ConfirmationTimestamp;
        $this->IsAmendmentRequested = ($message->IsAmendmentRequested !== null) ? $message->IsAmendmentRequested : $this->IsAmendmentRequested;
        $this->IsRevised = ($message->IsRevised !== null) ? $message->IsRevised : $this->IsRevised;
        $this->IsCorrected = ($message->IsCorrected !== null) ? $message->IsCorrected : $this->IsCorrected;
    }


}

