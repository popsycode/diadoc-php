<?php

namespace AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument;

/**
 * Class representing ConsigneesAType
 */
class ConsigneesAType
{

    /**
     * ГрузПолуч - грузополучатель
     *
     * @property \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[] $consignee
     */
    private $consignee = array(
        
    );

    /**
     * Adds as consignee
     *
     * ГрузПолуч - грузополучатель
     *
     * @return self
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $consignee
     */
    public function addToConsignee(\AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType $consignee)
    {
        $this->consignee[] = $consignee;
        return $this;
    }

    /**
     * isset consignee
     *
     * ГрузПолуч - грузополучатель
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConsignee($index)
    {
        return isset($this->consignee[$index]);
    }

    /**
     * unset consignee
     *
     * ГрузПолуч - грузополучатель
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConsignee($index)
    {
        unset($this->consignee[$index]);
    }

    /**
     * Gets as consignee
     *
     * ГрузПолуч - грузополучатель
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[]
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * Sets a new consignee
     *
     * ГрузПолуч - грузополучатель
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationInfoType[] $consignee
     * @return self
     */
    public function setConsignee(array $consignee)
    {
        $this->consignee = $consignee;
        return $this;
    }


}

