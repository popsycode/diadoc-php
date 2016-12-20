<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/DocumentList.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents;

/**
 * Protobuf message : AgentSIB.Diadoc.Api.Proto.Documents.DocumentList
 */
class DocumentList extends \Protobuf\AbstractMessage
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
     * TotalCount required int32 = 1
     *
     * @var int
     */
    protected $TotalCount = null;

    /**
     * Documents repeated message = 2
     *
     * @var \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Documents\Document>
     */
    protected $Documents = null;

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
     * Check if 'Documents' has a value
     *
     * @return bool
     */
    public function hasDocumentsList()
    {
        return $this->Documents !== null;
    }

    /**
     * Get 'Documents' value
     *
     * @return \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Documents\Document>
     */
    public function getDocumentsList()
    {
        return $this->Documents;
    }

    /**
     * Set 'Documents' value
     *
     * @param \Protobuf\Collection<\AgentSIB\Diadoc\Api\Proto\Documents\Document> $value
     */
    public function setDocumentsList(\Protobuf\Collection $value = null)
    {
        $this->Documents = $value;
    }

    /**
     * Add a new element to 'Documents'
     *
     * @param \AgentSIB\Diadoc\Api\Proto\Documents\Document $value
     */
    public function addDocuments(\AgentSIB\Diadoc\Api\Proto\Documents\Document $value)
    {
        if ($this->Documents === null) {
            $this->Documents = new \Protobuf\MessageCollection();
        }

        $this->Documents->add($value);
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
            throw new \InvalidArgumentException('Field "TotalCount" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'Documents' => []
        ], $values);

        $message->setTotalCount($values['TotalCount']);

        foreach ($values['Documents'] as $item) {
            $message->addDocuments($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'DocumentList',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'TotalCount',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'Documents',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.AgentSIB.Diadoc.Api.Proto.Documents.Document'
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
            throw new \UnexpectedValueException('Field "\\AgentSIB\\Diadoc\\Api\\Proto\\Documents\\DocumentList#TotalCount" (tag 1) is required but has no value.');
        }

        if ($this->TotalCount !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->TotalCount);
        }

        if ($this->Documents !== null) {
            foreach ($this->Documents as $val) {
                $writer->writeVarint($stream, 18);
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
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->TotalCount = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \AgentSIB\Diadoc\Api\Proto\Documents\Document();

                if ($this->Documents === null) {
                    $this->Documents = new \Protobuf\MessageCollection();
                }

                $this->Documents->add($innerMessage);

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

        if ($this->TotalCount !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->TotalCount);
        }

        if ($this->Documents !== null) {
            foreach ($this->Documents as $val) {
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
        $this->TotalCount = null;
        $this->Documents = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \AgentSIB\Diadoc\Api\Proto\Documents\DocumentList) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->TotalCount = ($message->TotalCount !== null) ? $message->TotalCount : $this->TotalCount;
        $this->Documents = ($message->Documents !== null) ? $message->Documents : $this->Documents;
    }


}

