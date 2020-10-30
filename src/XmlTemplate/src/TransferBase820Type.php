<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing TransferBase820Type
 *
 * 
 * XSD Type: TransferBase820
 */
class TransferBase820Type extends TransferBaseType
{

    /**
     * ИдентОсн - Идентификатор документа – основания
     *
     * @property string $baseDocumentId
     */
    private $baseDocumentId = null;

    /**
     * Gets as baseDocumentId
     *
     * ИдентОсн - Идентификатор документа – основания
     *
     * @return string
     */
    public function getBaseDocumentId()
    {
        return $this->baseDocumentId;
    }

    /**
     * Sets a new baseDocumentId
     *
     * ИдентОсн - Идентификатор документа – основания
     *
     * @param string $baseDocumentId
     * @return self
     */
    public function setBaseDocumentId($baseDocumentId)
    {
        $this->baseDocumentId = $baseDocumentId;
        return $this;
    }


}

