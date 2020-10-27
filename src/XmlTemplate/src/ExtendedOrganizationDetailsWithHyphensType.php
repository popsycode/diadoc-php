<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ExtendedOrganizationDetailsWithHyphensType
 *
 * 
 * XSD Type: ExtendedOrganizationDetailsWithHyphens
 */
class ExtendedOrganizationDetailsWithHyphensType extends ExtendedOrganizationDetailsType
{

    /**
     * ДефИННФЛ, ДефИННЮЛ
     *
     * @var string $hyphenInn
     */
    private $hyphenInn = null;

    /**
     * Gets as hyphenInn
     *
     * ДефИННФЛ, ДефИННЮЛ
     *
     * @return string
     */
    public function getHyphenInn()
    {
        return $this->hyphenInn;
    }

    /**
     * Sets a new hyphenInn
     *
     * ДефИННФЛ, ДефИННЮЛ
     *
     * @param string $hyphenInn
     * @return self
     */
    public function setHyphenInn($hyphenInn)
    {
        $this->hyphenInn = $hyphenInn;
        return $this;
    }


}

