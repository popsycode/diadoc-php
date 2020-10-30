<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing SignerReferenceType
 *
 * 
 * XSD Type: SignerReference
 */
class SignerReferenceType
{

    /**
     * Идентификатор ящика подписанта для заполнения SignerDetails
     *
     * @property string $boxId
     */
    private $boxId = null;

    /**
     * X.509 сертификат подписанта (DER-кодировка) в формате BASE64Одно из полей CertificateBytes или CertificateThumbprint обязательно для заполнения
     *
     * @property mixed $certificateBytes
     */
    private $certificateBytes = null;

    /**
     * Отпечаток сертификата подписантаОдно из полей CertificateBytes или CertificateThumbprint обязательно для заполнения
     *
     * @property string $certificateThumbprint
     */
    private $certificateThumbprint = null;

    /**
     * Gets as boxId
     *
     * Идентификатор ящика подписанта для заполнения SignerDetails
     *
     * @return string
     */
    public function getBoxId()
    {
        return $this->boxId;
    }

    /**
     * Sets a new boxId
     *
     * Идентификатор ящика подписанта для заполнения SignerDetails
     *
     * @param string $boxId
     * @return self
     */
    public function setBoxId($boxId)
    {
        $this->boxId = $boxId;
        return $this;
    }

    /**
     * Gets as certificateBytes
     *
     * X.509 сертификат подписанта (DER-кодировка) в формате BASE64Одно из полей CertificateBytes или CertificateThumbprint обязательно для заполнения
     *
     * @return mixed
     */
    public function getCertificateBytes()
    {
        return $this->certificateBytes;
    }

    /**
     * Sets a new certificateBytes
     *
     * X.509 сертификат подписанта (DER-кодировка) в формате BASE64Одно из полей CertificateBytes или CertificateThumbprint обязательно для заполнения
     *
     * @param mixed $certificateBytes
     * @return self
     */
    public function setCertificateBytes($certificateBytes)
    {
        $this->certificateBytes = $certificateBytes;
        return $this;
    }

    /**
     * Gets as certificateThumbprint
     *
     * Отпечаток сертификата подписантаОдно из полей CertificateBytes или CertificateThumbprint обязательно для заполнения
     *
     * @return string
     */
    public function getCertificateThumbprint()
    {
        return $this->certificateThumbprint;
    }

    /**
     * Sets a new certificateThumbprint
     *
     * Отпечаток сертификата подписантаОдно из полей CertificateBytes или CertificateThumbprint обязательно для заполнения
     *
     * @param string $certificateThumbprint
     * @return self
     */
    public function setCertificateThumbprint($certificateThumbprint)
    {
        $this->certificateThumbprint = $certificateThumbprint;
        return $this;
    }


}

