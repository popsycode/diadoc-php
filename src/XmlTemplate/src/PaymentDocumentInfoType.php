<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing PaymentDocumentInfoType
 *
 * 
 * XSD Type: PaymentDocumentInfo
 */
class PaymentDocumentInfoType
{

    /**
     * ДатаПРД - Дата составления платежно-расчетного документа
     *
     * @property string $date
     */
    private $date = null;

    /**
     * НомерПРД - Номер платежно-расчетного документа
     *
     * @property string $number
     */
    private $number = null;

    /**
     * СуммаПРД - Сумма платежно-расчетного документа
     *
     * @property float $total
     */
    private $total = null;

    /**
     * Gets as date
     *
     * ДатаПРД - Дата составления платежно-расчетного документа
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * ДатаПРД - Дата составления платежно-расчетного документа
     *
     * @param string $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as number
     *
     * НомерПРД - Номер платежно-расчетного документа
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * НомерПРД - Номер платежно-расчетного документа
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as total
     *
     * СуммаПРД - Сумма платежно-расчетного документа
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * СуммаПРД - Сумма платежно-расчетного документа
     *
     * @param float $total
     * @return self
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }


}

