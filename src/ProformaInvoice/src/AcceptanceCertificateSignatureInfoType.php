<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing AcceptanceCertificateSignatureInfoType
 *
 * 
 * XSD Type: AcceptanceCertificateSignatureInfo
 */
class AcceptanceCertificateSignatureInfoType
{

    /**
     * дата подписи акта исполнителем / заказчиком
     *
     * @property string $signatureDate
     */
    private $signatureDate = null;

    /**
     * лицо, подписывающее со стороны исполнителя / заказчика
     *
     * @property \AgentSIB\Diadoc\ProformaInvoice\OfficialType $official
     */
    private $official = null;

    /**
     * сведения о доверенности подписывающего со стороны исполнителя / заказчика
     *
     * @property \AgentSIB\Diadoc\ProformaInvoice\AttorneyType $attorney
     */
    private $attorney = null;

    /**
     * Gets as signatureDate
     *
     * дата подписи акта исполнителем / заказчиком
     *
     * @return string
     */
    public function getSignatureDate()
    {
        return $this->signatureDate;
    }

    /**
     * Sets a new signatureDate
     *
     * дата подписи акта исполнителем / заказчиком
     *
     * @param string $signatureDate
     * @return self
     */
    public function setSignatureDate($signatureDate)
    {
        $this->signatureDate = $signatureDate;
        return $this;
    }

    /**
     * Gets as official
     *
     * лицо, подписывающее со стороны исполнителя / заказчика
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\OfficialType
     */
    public function getOfficial()
    {
        return $this->official;
    }

    /**
     * Sets a new official
     *
     * лицо, подписывающее со стороны исполнителя / заказчика
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\OfficialType $official
     * @return self
     */
    public function setOfficial(\AgentSIB\Diadoc\ProformaInvoice\OfficialType $official)
    {
        $this->official = $official;
        return $this;
    }

    /**
     * Gets as attorney
     *
     * сведения о доверенности подписывающего со стороны исполнителя / заказчика
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\AttorneyType
     */
    public function getAttorney()
    {
        return $this->attorney;
    }

    /**
     * Sets a new attorney
     *
     * сведения о доверенности подписывающего со стороны исполнителя / заказчика
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\AttorneyType $attorney
     * @return self
     */
    public function setAttorney(\AgentSIB\Diadoc\ProformaInvoice\AttorneyType $attorney)
    {
        $this->attorney = $attorney;
        return $this;
    }


}

