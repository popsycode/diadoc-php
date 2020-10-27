<?php

namespace AgentSIB\Diadoc\XmlTemplate;

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
     * @var string $signatureDate
     */
    private $signatureDate = null;

    /**
     * лицо, подписывающее со стороны исполнителя / заказчика
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\OfficialType $official
     */
    private $official = null;

    /**
     * сведения о доверенности подписывающего со стороны исполнителя / заказчика
     *
     * @var \AgentSIB\Diadoc\XmlTemplate\AttorneyType $attorney
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
     * @return \AgentSIB\Diadoc\XmlTemplate\OfficialType
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
     * @param \AgentSIB\Diadoc\XmlTemplate\OfficialType $official
     * @return self
     */
    public function setOfficial(\AgentSIB\Diadoc\XmlTemplate\OfficialType $official)
    {
        $this->official = $official;
        return $this;
    }

    /**
     * Gets as attorney
     *
     * сведения о доверенности подписывающего со стороны исполнителя / заказчика
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\AttorneyType
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
     * @param \AgentSIB\Diadoc\XmlTemplate\AttorneyType $attorney
     * @return self
     */
    public function setAttorney(\AgentSIB\Diadoc\XmlTemplate\AttorneyType $attorney)
    {
        $this->attorney = $attorney;
        return $this;
    }


}

