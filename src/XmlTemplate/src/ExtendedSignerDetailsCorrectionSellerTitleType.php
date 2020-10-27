<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ExtendedSignerDetailsCorrectionSellerTitleType
 *
 * 
 * XSD Type: ExtendedSignerDetails_CorrectionSellerTitle
 */
class ExtendedSignerDetailsCorrectionSellerTitleType extends ExtendedSignerDetailsType
{

    /**
     * ОблПолн - Область полномочий
     *  0 - лицо, ответственное за подписание счетов-фактур;
     *  3 – лицо, ответственное за оформление свершившегося события;
     *  6 - лицо, совершившее сделку, операцию и ответственное за подписание счетов-фактур
     *
     * @var int $signerPowers
     */
    private $signerPowers = null;

    /**
     * Gets as signerPowers
     *
     * ОблПолн - Область полномочий
     *  0 - лицо, ответственное за подписание счетов-фактур;
     *  3 – лицо, ответственное за оформление свершившегося события;
     *  6 - лицо, совершившее сделку, операцию и ответственное за подписание счетов-фактур
     *
     * @return int
     */
    public function getSignerPowers()
    {
        return $this->signerPowers;
    }

    /**
     * Sets a new signerPowers
     *
     * ОблПолн - Область полномочий
     *  0 - лицо, ответственное за подписание счетов-фактур;
     *  3 – лицо, ответственное за оформление свершившегося события;
     *  6 - лицо, совершившее сделку, операцию и ответственное за подписание счетов-фактур
     *
     * @param int $signerPowers
     * @return self
     */
    public function setSignerPowers($signerPowers)
    {
        $this->signerPowers = $signerPowers;
        return $this;
    }


}

