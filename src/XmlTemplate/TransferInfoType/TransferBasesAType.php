<?php

namespace AgentSIB\Diadoc\XmlTemplate\TransferInfoType;

/**
 * Class representing TransferBasesAType
 */
class TransferBasesAType
{

    /**
     * ОснПер - Основание отгрузки
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\TransferBase820Type[] $transferBase
     */
    private $transferBase = [
        
    ];

    /**
     * Adds as transferBase
     *
     * ОснПер - Основание отгрузки
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\TransferBase820Type $transferBase
     */
    public function addToTransferBase(\AgentSIB\Diadoc\XmlTemplate\TransferBase820Type $transferBase)
    {
        $this->transferBase[] = $transferBase;
        return $this;
    }

    /**
     * isset transferBase
     *
     * ОснПер - Основание отгрузки
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransferBase($index)
    {
        return isset($this->transferBase[$index]);
    }

    /**
     * unset transferBase
     *
     * ОснПер - Основание отгрузки
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransferBase($index)
    {
        unset($this->transferBase[$index]);
    }

    /**
     * Gets as transferBase
     *
     * ОснПер - Основание отгрузки
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\TransferBase820Type[]
     */
    public function getTransferBase()
    {
        return $this->transferBase;
    }

    /**
     * Sets a new transferBase
     *
     * ОснПер - Основание отгрузки
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\TransferBase820Type[] $transferBase
     * @return self
     */
    public function setTransferBase(array $transferBase)
    {
        $this->transferBase = $transferBase;
        return $this;
    }


}

