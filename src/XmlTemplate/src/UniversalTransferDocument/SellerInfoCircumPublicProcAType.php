<?php

namespace AgentSIB\Diadoc\XmlTemplate\UniversalTransferDocument;

/**
 * Class representing SellerInfoCircumPublicProcAType
 */
class SellerInfoCircumPublicProcAType
{

    /**
     * ДатаГосКонт - Дата государственного контракта
     *
     * @property string $dateStateContract
     */
    private $dateStateContract = null;

    /**
     * НомерГосКонт - Номер государственного контракта
     *
     * @property string $numberStateContract
     */
    private $numberStateContract = null;

    /**
     * ЛицСчетПрод - Номер лицевого счета продавца
     *
     * @property string $personalAccountSeller
     */
    private $personalAccountSeller = null;

    /**
     * КодПродБюджКласс - Код бюджетной классификации продавца
     *
     * @property string $sellerBudjetClassCode
     */
    private $sellerBudjetClassCode = null;

    /**
     * КодЦелиПрод - Код цели продавца
     *
     * @property string $sellerTargetCode
     */
    private $sellerTargetCode = null;

    /**
     * КодКазначПрод - Код территориального органа Федерального казначейства
     *  продавца
     *
     * @property string $sellerTreasuryCode
     */
    private $sellerTreasuryCode = null;

    /**
     * НаимКазначПрод - Наименование территориального органа Федерального
     *  казначейства продавца
     *
     * @property string $sellerTreasuryName
     */
    private $sellerTreasuryName = null;

    /**
     * Gets as dateStateContract
     *
     * ДатаГосКонт - Дата государственного контракта
     *
     * @return string
     */
    public function getDateStateContract()
    {
        return $this->dateStateContract;
    }

    /**
     * Sets a new dateStateContract
     *
     * ДатаГосКонт - Дата государственного контракта
     *
     * @param string $dateStateContract
     * @return self
     */
    public function setDateStateContract($dateStateContract)
    {
        $this->dateStateContract = $dateStateContract;
        return $this;
    }

    /**
     * Gets as numberStateContract
     *
     * НомерГосКонт - Номер государственного контракта
     *
     * @return string
     */
    public function getNumberStateContract()
    {
        return $this->numberStateContract;
    }

    /**
     * Sets a new numberStateContract
     *
     * НомерГосКонт - Номер государственного контракта
     *
     * @param string $numberStateContract
     * @return self
     */
    public function setNumberStateContract($numberStateContract)
    {
        $this->numberStateContract = $numberStateContract;
        return $this;
    }

    /**
     * Gets as personalAccountSeller
     *
     * ЛицСчетПрод - Номер лицевого счета продавца
     *
     * @return string
     */
    public function getPersonalAccountSeller()
    {
        return $this->personalAccountSeller;
    }

    /**
     * Sets a new personalAccountSeller
     *
     * ЛицСчетПрод - Номер лицевого счета продавца
     *
     * @param string $personalAccountSeller
     * @return self
     */
    public function setPersonalAccountSeller($personalAccountSeller)
    {
        $this->personalAccountSeller = $personalAccountSeller;
        return $this;
    }

    /**
     * Gets as sellerBudjetClassCode
     *
     * КодПродБюджКласс - Код бюджетной классификации продавца
     *
     * @return string
     */
    public function getSellerBudjetClassCode()
    {
        return $this->sellerBudjetClassCode;
    }

    /**
     * Sets a new sellerBudjetClassCode
     *
     * КодПродБюджКласс - Код бюджетной классификации продавца
     *
     * @param string $sellerBudjetClassCode
     * @return self
     */
    public function setSellerBudjetClassCode($sellerBudjetClassCode)
    {
        $this->sellerBudjetClassCode = $sellerBudjetClassCode;
        return $this;
    }

    /**
     * Gets as sellerTargetCode
     *
     * КодЦелиПрод - Код цели продавца
     *
     * @return string
     */
    public function getSellerTargetCode()
    {
        return $this->sellerTargetCode;
    }

    /**
     * Sets a new sellerTargetCode
     *
     * КодЦелиПрод - Код цели продавца
     *
     * @param string $sellerTargetCode
     * @return self
     */
    public function setSellerTargetCode($sellerTargetCode)
    {
        $this->sellerTargetCode = $sellerTargetCode;
        return $this;
    }

    /**
     * Gets as sellerTreasuryCode
     *
     * КодКазначПрод - Код территориального органа Федерального казначейства
     *  продавца
     *
     * @return string
     */
    public function getSellerTreasuryCode()
    {
        return $this->sellerTreasuryCode;
    }

    /**
     * Sets a new sellerTreasuryCode
     *
     * КодКазначПрод - Код территориального органа Федерального казначейства
     *  продавца
     *
     * @param string $sellerTreasuryCode
     * @return self
     */
    public function setSellerTreasuryCode($sellerTreasuryCode)
    {
        $this->sellerTreasuryCode = $sellerTreasuryCode;
        return $this;
    }

    /**
     * Gets as sellerTreasuryName
     *
     * НаимКазначПрод - Наименование территориального органа Федерального
     *  казначейства продавца
     *
     * @return string
     */
    public function getSellerTreasuryName()
    {
        return $this->sellerTreasuryName;
    }

    /**
     * Sets a new sellerTreasuryName
     *
     * НаимКазначПрод - Наименование территориального органа Федерального
     *  казначейства продавца
     *
     * @param string $sellerTreasuryName
     * @return self
     */
    public function setSellerTreasuryName($sellerTreasuryName)
    {
        $this->sellerTreasuryName = $sellerTreasuryName;
        return $this;
    }


}

