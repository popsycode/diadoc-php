<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/FnsRegistrationMessageInfo.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Invoicing;

/**
 * Protobuf message :
 * AgentSIB.Diadoc.Api.Proto.Invoicing.FnsRegistrationMessageInfo
 */
class FnsRegistrationMessageInfo extends \Protobuf\AbstractMessage
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
     * Certificates repeated bytes = 1
     *
     * @var \Protobuf\Collection
     */
    protected $Certificates = null;

    /**
     * Check if 'Certificates' has a value
     *
     * @return bool
     */
    public function hasCertificatesList()
    {
        return $this->Certificates !== null;
    }

    /**
     * Get 'Certificates' value
     *
     * @return \Protobuf\Collection
     */
    public function getCertificatesList()
    {
        return $this->Certificates;
    }

    /**
     * Set 'Certificates' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setCertificatesList(\Protobuf\Collection $value = null)
    {
        $this->Certificates = $value;
    }

    /**
     * Add a new element to 'Certificates'
     *
     * @param \Protobuf\Stream $value
     */
    public function addCertificates($value)
    {
        if ($this->Certificates === null) {
            $this->Certificates = new \Protobuf\StreamCollection();
        }

        $this->Certificates->add(\Protobuf\Stream::wrap($value));
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
            'Certificates' => []
        ], $values);

        foreach ($values['Certificates'] as $item) {
            $message->addCertificates($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'FnsRegistrationMessageInfo',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'Certificates',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
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

        if ($this->Certificates !== null) {
            foreach ($this->Certificates as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeByteStream($stream, $val);
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
                \Protobuf\WireFormat::assertWireType($wire, 12);

                if ($this->Certificates === null) {
                    $this->Certificates = new \Protobuf\StreamCollection();
                }

                $this->Certificates->add($reader->readByteStream($stream));

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

        if ($this->Certificates !== null) {
            foreach ($this->Certificates as $val) {
                $size += 1;
                $size += $calculator->computeByteStreamSize($val);
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
        $this->Certificates = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Invoicing\FnsRegistrationMessageInfo) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->Certificates = ($message->Certificates !== null) ? $message->Certificates : $this->Certificates;
    }


}

