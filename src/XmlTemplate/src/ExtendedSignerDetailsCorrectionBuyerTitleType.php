<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ExtendedSignerDetailsCorrectionBuyerTitleType
 *
 * 
 * XSD Type: ExtendedSignerDetails_CorrectionBuyerTitle
 */
class ExtendedSignerDetailsCorrectionBuyerTitleType extends ExtendedSignerDetailsType
{

    /**
     * ОблПолн - Область полномочий
     *  3 – лицо, ответственное за оформление свершившегося события;
     *
     * @property integer $signerPowers
     */
    private $signerPowers = null;

    /**
     * Gets as signerPowers
     *
     * ОблПолн - Область полномочий
     *  3 – лицо, ответственное за оформление свершившегося события;
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
     *  3 – лицо, ответственное за оформление свершившегося события;
     *
     * @param integer $signerPowers
     * @return self
     */
    public function setSignerPowers($signerPowers)
    {
        $this->signerPowers = $signerPowers;
        return $this;
    }


}

