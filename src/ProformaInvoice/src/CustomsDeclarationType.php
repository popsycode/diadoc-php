<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing CustomsDeclarationType
 *
 * 
 * XSD Type: CustomsDeclaration
 */
class CustomsDeclarationType
{

    /**
     * КодПроисх - Код страны происхождения товара по Общероссийскому классификатору стран мира (ОКСМ) или
     *  980 - Евросоюз,
     *  981 - ЕАЭС
     *
     * @property string $country
     */
    private $country = null;

    /**
     * Номер таможенной декларации
     *
     * @property string $declarationNumber
     */
    private $declarationNumber = null;

    /**
     * Gets as country
     *
     * КодПроисх - Код страны происхождения товара по Общероссийскому классификатору стран мира (ОКСМ) или
     *  980 - Евросоюз,
     *  981 - ЕАЭС
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * КодПроисх - Код страны происхождения товара по Общероссийскому классификатору стран мира (ОКСМ) или
     *  980 - Евросоюз,
     *  981 - ЕАЭС
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as declarationNumber
     *
     * Номер таможенной декларации
     *
     * @return string
     */
    public function getDeclarationNumber()
    {
        return $this->declarationNumber;
    }

    /**
     * Sets a new declarationNumber
     *
     * Номер таможенной декларации
     *
     * @param string $declarationNumber
     * @return self
     */
    public function setDeclarationNumber($declarationNumber)
    {
        $this->declarationNumber = $declarationNumber;
        return $this;
    }


}

