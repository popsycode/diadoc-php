<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing SignerReferenceInfoType
 *
 * 
 * XSD Type: SignerReferenceInfo
 */
class SignerReferenceInfoType
{

    /**
     * X.509 сертификат подписанта (DER-кодировка) в формате BASE64Одно из полей CertificateBytes или CertificateThumbprint обязательно для заполнения
     *
     * @var mixed $certificateBytes
     */
    private $certificateBytes = null;

    /**
     * Отпечаток сертификата подписантаОдно из полей CertificateBytes или CertificateThumbprint обязательно для заполнения
     *
     * @var string $certificateThumbprint
     */
    private $certificateThumbprint = null;

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

