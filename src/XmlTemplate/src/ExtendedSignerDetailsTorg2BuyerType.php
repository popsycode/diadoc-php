<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ExtendedSignerDetailsTorg2BuyerType
 *
 * 
 * XSD Type: ExtendedSignerDetails_Torg2Buyer
 */
class ExtendedSignerDetailsTorg2BuyerType extends ExtendedSignerDetailsBaseType
{

    /**
     * ОблПолн - Область полномочий
     *  1 - лицо, принявшее ценности
     *  2 - лицо, принявшее ценности и ответственное за оформление события (операции)
     *  3 - лицо, ответственное за оформление события (операции)
     *  7 - председатель комиссии
     *  8 - член комиссии
     *
     * @property integer $signerPowers
     */
    private $signerPowers = null;

    /**
     * Статус
     *  3 - работник иной уполномоченной организации;
     *  4 - уполномоченное физическое лицо, в том числе индивидуальный предприниматель;
     *  5 - работник организации – покупателя;
     *  6 - работник организации – составителя файла обмена информации покупателя, если составитель файла обмена информации покупателя не является покупателем.
     *
     * @property integer $signerStatus
     */
    private $signerStatus = null;

    /**
     * Gets as signerPowers
     *
     * ОблПолн - Область полномочий
     *  1 - лицо, принявшее ценности
     *  2 - лицо, принявшее ценности и ответственное за оформление события (операции)
     *  3 - лицо, ответственное за оформление события (операции)
     *  7 - председатель комиссии
     *  8 - член комиссии
     *
     * @return integer
     */
    public function getSignerPowers()
    {
        return $this->signerPowers;
    }

    /**
     * Sets a new signerPowers
     *
     * ОблПолн - Область полномочий
     *  1 - лицо, принявшее ценности
     *  2 - лицо, принявшее ценности и ответственное за оформление события (операции)
     *  3 - лицо, ответственное за оформление события (операции)
     *  7 - председатель комиссии
     *  8 - член комиссии
     *
     * @param integer $signerPowers
     * @return self
     */
    public function setSignerPowers($signerPowers)
    {
        $this->signerPowers = $signerPowers;
        return $this;
    }

    /**
     * Gets as signerStatus
     *
     * Статус
     *  3 - работник иной уполномоченной организации;
     *  4 - уполномоченное физическое лицо, в том числе индивидуальный предприниматель;
     *  5 - работник организации – покупателя;
     *  6 - работник организации – составителя файла обмена информации покупателя, если составитель файла обмена информации покупателя не является покупателем.
     *
     * @return integer
     */
    public function getSignerStatus()
    {
        return $this->signerStatus;
    }

    /**
     * Sets a new signerStatus
     *
     * Статус
     *  3 - работник иной уполномоченной организации;
     *  4 - уполномоченное физическое лицо, в том числе индивидуальный предприниматель;
     *  5 - работник организации – покупателя;
     *  6 - работник организации – составителя файла обмена информации покупателя, если составитель файла обмена информации покупателя не является покупателем.
     *
     * @param integer $signerStatus
     * @return self
     */
    public function setSignerStatus($signerStatus)
    {
        $this->signerStatus = $signerStatus;
        return $this;
    }


}

