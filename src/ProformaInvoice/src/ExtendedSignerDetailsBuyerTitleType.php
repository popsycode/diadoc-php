<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing ExtendedSignerDetailsBuyerTitleType
 *
 * 
 * XSD Type: ExtendedSignerDetails_BuyerTitle
 */
class ExtendedSignerDetailsBuyerTitleType extends ExtendedSignerDetailsType
{

    /**
     * ОблПолн - Область полномочий
     *  1 - лицо, совершившее сделку, операцию
     *  2 - лицо, совершившее сделку, операцию и ответственное за ее оформление
     *  3 - лицо, ответственное за оформление свершившегося события
     *
     * @property integer $signerPowers
     */
    private $signerPowers = null;

    /**
     * Gets as signerPowers
     *
     * ОблПолн - Область полномочий
     *  1 - лицо, совершившее сделку, операцию
     *  2 - лицо, совершившее сделку, операцию и ответственное за ее оформление
     *  3 - лицо, ответственное за оформление свершившегося события
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
     *  1 - лицо, совершившее сделку, операцию
     *  2 - лицо, совершившее сделку, операцию и ответственное за ее оформление
     *  3 - лицо, ответственное за оформление свершившегося события
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

