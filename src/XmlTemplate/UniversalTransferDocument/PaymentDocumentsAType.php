<?php

namespace AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument;

/**
 * Class representing PaymentDocumentsAType
 */
class PaymentDocumentsAType
{

    /**
     * СвПРД - платежно-расчетные документы
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\PaymentDocumentInfoType[] $document
     */
    private $document = [
        
    ];

    /**
     * Adds as document
     *
     * СвПРД - платежно-расчетные документы
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\PaymentDocumentInfoType $document
     */
    public function addToDocument(\AgentSIB\Diadoc\XmlTemplate\PaymentDocumentInfoType $document)
    {
        $this->document[] = $document;
        return $this;
    }

    /**
     * isset document
     *
     * СвПРД - платежно-расчетные документы
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocument($index)
    {
        return isset($this->document[$index]);
    }

    /**
     * unset document
     *
     * СвПРД - платежно-расчетные документы
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocument($index)
    {
        unset($this->document[$index]);
    }

    /**
     * Gets as document
     *
     * СвПРД - платежно-расчетные документы
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\PaymentDocumentInfoType[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * СвПРД - платежно-расчетные документы
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\PaymentDocumentInfoType[] $document
     * @return self
     */
    public function setDocument(array $document)
    {
        $this->document = $document;
        return $this;
    }


}

