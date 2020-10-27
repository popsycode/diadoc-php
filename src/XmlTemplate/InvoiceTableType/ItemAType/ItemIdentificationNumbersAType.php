<?php

namespace AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType;

/**
 * Class representing ItemIdentificationNumbersAType
 */
class ItemIdentificationNumbersAType
{

    /**
     * НомСредИдентТов - Номер средств идентификации товаров
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemIdentificationNumbersAType\ItemIdentificationNumberAType[] $itemIdentificationNumber
     */
    private $itemIdentificationNumber = [
        
    ];

    /**
     * Adds as itemIdentificationNumber
     *
     * НомСредИдентТов - Номер средств идентификации товаров
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemIdentificationNumbersAType\ItemIdentificationNumberAType $itemIdentificationNumber
     */
    public function addToItemIdentificationNumber(\AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemIdentificationNumbersAType\ItemIdentificationNumberAType $itemIdentificationNumber)
    {
        $this->itemIdentificationNumber[] = $itemIdentificationNumber;
        return $this;
    }

    /**
     * isset itemIdentificationNumber
     *
     * НомСредИдентТов - Номер средств идентификации товаров
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemIdentificationNumber($index)
    {
        return isset($this->itemIdentificationNumber[$index]);
    }

    /**
     * unset itemIdentificationNumber
     *
     * НомСредИдентТов - Номер средств идентификации товаров
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemIdentificationNumber($index)
    {
        unset($this->itemIdentificationNumber[$index]);
    }

    /**
     * Gets as itemIdentificationNumber
     *
     * НомСредИдентТов - Номер средств идентификации товаров
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemIdentificationNumbersAType\ItemIdentificationNumberAType[]
     */
    public function getItemIdentificationNumber()
    {
        return $this->itemIdentificationNumber;
    }

    /**
     * Sets a new itemIdentificationNumber
     *
     * НомСредИдентТов - Номер средств идентификации товаров
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType\ItemIdentificationNumbersAType\ItemIdentificationNumberAType[] $itemIdentificationNumber
     * @return self
     */
    public function setItemIdentificationNumber(array $itemIdentificationNumber)
    {
        $this->itemIdentificationNumber = $itemIdentificationNumber;
        return $this;
    }


}

