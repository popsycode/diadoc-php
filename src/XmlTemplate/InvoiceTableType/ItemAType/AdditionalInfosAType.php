<?php

namespace AgentSIB\Diadoc\XmlTemplate\InvoiceTableType\ItemAType;

/**
 * Class representing AdditionalInfosAType
 */
class AdditionalInfosAType
{

    /**
     * Информационное поле факта хозяйственной жизни 1
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\AdditionalInfoType[] $additionalInfo
     */
    private $additionalInfo = [
        
    ];

    /**
     * Adds as additionalInfo
     *
     * Информационное поле факта хозяйственной жизни 1
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
     * Информационное поле факта хозяйственной жизни 1
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalInfo($index)
    {
        return isset($this->additionalInfo[$index]);
    }

    /**
     * unset additionalInfo
     *
     * Информационное поле факта хозяйственной жизни 1
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalInfo($index)
    {
        unset($this->additionalInfo[$index]);
    }

    /**
     * Gets as additionalInfo
     *
     * Информационное поле факта хозяйственной жизни 1
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
     * Информационное поле факта хозяйственной жизни 1
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

