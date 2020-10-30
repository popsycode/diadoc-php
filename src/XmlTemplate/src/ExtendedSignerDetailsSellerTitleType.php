<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ExtendedSignerDetailsSellerTitleType
 *
 * 
 * XSD Type: ExtendedSignerDetails_SellerTitle
 */
class ExtendedSignerDetailsSellerTitleType extends ExtendedSignerDetailsType
{

    /**
     * ОблПолн - Область полномочий
     *  0 - лицо, ответственное за подписание счетов-фактур
     *  1 - лицо, совершившее сделку, операцию
     *  2 - лицо, совершившее сделку, операцию и ответственное за ее оформление
     *  3 - лицо, ответственное за оформление свершившегося события
     *  4 - лицо, совершившее сделку, операцию и ответственное за подписание счетов-фактур
     *  5 - лицо, совершившее сделку, операцию и ответственное за её оформление и за подписание счетов-фактур
     *  6 - лицо, ответственное за оформление свершившегося события и за подписание счетов-фактур
     *
     * @property integer $signerPowers
     */
    private $signerPowers = null;

    /**
     * Gets as signerPowers
     *
     * ОблПолн - Область полномочий
     *  0 - лицо, ответственное за подписание счетов-фактур
     *  1 - лицо, совершившее сделку, операцию
     *  2 - лицо, совершившее сделку, операцию и ответственное за ее оформление
     *  3 - лицо, ответственное за оформление свершившегося события
     *  4 - лицо, совершившее сделку, операцию и ответственное за подписание счетов-фактур
     *  5 - лицо, совершившее сделку, операцию и ответственное за её оформление и за подписание счетов-фактур
     *  6 - лицо, ответственное за оформление свершившегося события и за подписание счетов-фактур
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
     *  0 - лицо, ответственное за подписание счетов-фактур
     *  1 - лицо, совершившее сделку, операцию
     *  2 - лицо, совершившее сделку, операцию и ответственное за ее оформление
     *  3 - лицо, ответственное за оформление свершившегося события
     *  4 - лицо, совершившее сделку, операцию и ответственное за подписание счетов-фактур
     *  5 - лицо, совершившее сделку, операцию и ответственное за её оформление и за подписание счетов-фактур
     *  6 - лицо, ответственное за оформление свершившегося события и за подписание счетов-фактур
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

