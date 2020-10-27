<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ExtendedSignerDetails551552Type
 *
 * 
 * XSD Type: ExtendedSignerDetails_551_552
 */
class ExtendedSignerDetails551552Type extends ExtendedSignerDetailsType
{

    /**
     * ОблПолн - Область полномочий
     *  1 - лицо, совершившее сделку, операцию;
     *  2 – лицо, совершившее сделку, операцию и ответственное за ее оформление;
     *  3 – лицо, ответственное за оформление свершившегося события
     *
     * @var int $signerPowers
     */
    private $signerPowers = null;

    /**
     * Gets as signerPowers
     *
     * ОблПолн - Область полномочий
     *  1 - лицо, совершившее сделку, операцию;
     *  2 – лицо, совершившее сделку, операцию и ответственное за ее оформление;
     *  3 – лицо, ответственное за оформление свершившегося события
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
     *  1 - лицо, совершившее сделку, операцию;
     *  2 – лицо, совершившее сделку, операцию и ответственное за ее оформление;
     *  3 – лицо, ответственное за оформление свершившегося события
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

