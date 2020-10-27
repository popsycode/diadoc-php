<?php

namespace AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType;

/**
 * Class representing CustomsDeclarationsAType
 */
class CustomsDeclarationsAType
{

    /**
     * Цифровой код страны происхождения товара (Графа 10
     *  счета-фактуры)
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\CustomsDeclarationType[] $customsDeclaration
     */
    private $customsDeclaration = [
        
    ];

    /**
     * Adds as customsDeclaration
     *
     * Цифровой код страны происхождения товара (Графа 10
     *  счета-фактуры)
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\CustomsDeclarationType $customsDeclaration
     */
    public function addToCustomsDeclaration(\AgentSIB\Diadoc\XmlTemplate\CustomsDeclarationType $customsDeclaration)
    {
        $this->customsDeclaration[] = $customsDeclaration;
        return $this;
    }

    /**
     * isset customsDeclaration
     *
     * Цифровой код страны происхождения товара (Графа 10
     *  счета-фактуры)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomsDeclaration($index)
    {
        return isset($this->customsDeclaration[$index]);
    }

    /**
     * unset customsDeclaration
     *
     * Цифровой код страны происхождения товара (Графа 10
     *  счета-фактуры)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomsDeclaration($index)
    {
        unset($this->customsDeclaration[$index]);
    }

    /**
     * Gets as customsDeclaration
     *
     * Цифровой код страны происхождения товара (Графа 10
     *  счета-фактуры)
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\CustomsDeclarationType[]
     */
    public function getCustomsDeclaration()
    {
        return $this->customsDeclaration;
    }

    /**
     * Sets a new customsDeclaration
     *
     * Цифровой код страны происхождения товара (Графа 10
     *  счета-фактуры)
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\CustomsDeclarationType[] $customsDeclaration
     * @return self
     */
    public function setCustomsDeclaration(array $customsDeclaration)
    {
        $this->customsDeclaration = $customsDeclaration;
        return $this;
    }


}

