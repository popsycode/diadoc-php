<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing AdditionalInfoIdType
 *
 * 
 * XSD Type: AdditionalInfoId
 */
class AdditionalInfoIdType
{

    /**
     * ИдФайлИнфПол (GUID) - идентификатор файла информационного поля
     *
     * @property string $infoFileId
     */
    private $infoFileId = null;

    /**
     * ТекстИнф - текстовая информация
     *
     * @property \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType[] $additionalInfo
     */
    private $additionalInfo = array(
        
    );

    /**
     * Gets as infoFileId
     *
     * ИдФайлИнфПол (GUID) - идентификатор файла информационного поля
     *
     * @return string
     */
    public function getInfoFileId()
    {
        return $this->infoFileId;
    }

    /**
     * Sets a new infoFileId
     *
     * ИдФайлИнфПол (GUID) - идентификатор файла информационного поля
     *
     * @param string $infoFileId
     * @return self
     */
    public function setInfoFileId($infoFileId)
    {
        $this->infoFileId = $infoFileId;
        return $this;
    }

    /**
     * Adds as additionalInfo
     *
     * ТекстИнф - текстовая информация
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType $additionalInfo
     */
    public function addToAdditionalInfo(\AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType $additionalInfo)
    {
        $this->additionalInfo[] = $additionalInfo;
        return $this;
    }

    /**
     * isset additionalInfo
     *
     * ТекстИнф - текстовая информация
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalInfo($index)
    {
        return isset($this->additionalInfo[$index]);
    }

    /**
     * unset additionalInfo
     *
     * ТекстИнф - текстовая информация
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalInfo($index)
    {
        unset($this->additionalInfo[$index]);
    }

    /**
     * Gets as additionalInfo
     *
     * ТекстИнф - текстовая информация
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType[]
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * ТекстИнф - текстовая информация
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType[] $additionalInfo
     * @return self
     */
    public function setAdditionalInfo(array $additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }


}

