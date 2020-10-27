<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing CustomsDeclarationWithHyphensType
 *
 * 
 * XSD Type: CustomsDeclarationWithHyphens
 */
class CustomsDeclarationWithHyphensType
{

    /**
     * КодПроисх - Код страны происхождения товара по Общероссийскому классификатору стран мира (ОКСМ) или
     *  980 - Евросоюз,
     *  981 - ЕАЭС
     *
     * @var string $country
     */
    private $country = null;

    /**
     * ДефКодПроисх - обязателен, если отсутствует КодПроисх
     *
     * @var string $hyphenCountry
     */
    private $hyphenCountry = null;

    /**
     * Номер таможенной декларации
     *
     * @var string $declarationNumber
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
     * Gets as hyphenCountry
     *
     * ДефКодПроисх - обязателен, если отсутствует КодПроисх
     *
     * @return string
     */
    public function getHyphenCountry()
    {
        return $this->hyphenCountry;
    }

    /**
     * Sets a new hyphenCountry
     *
     * ДефКодПроисх - обязателен, если отсутствует КодПроисх
     *
     * @param string $hyphenCountry
     * @return self
     */
    public function setHyphenCountry($hyphenCountry)
    {
        $this->hyphenCountry = $hyphenCountry;
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

