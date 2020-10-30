<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing SignerInfoType
 *
 * 
 * XSD Type: SignerInfo
 */
class SignerInfoType
{

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\SignerDetailsType $signerDetails
     */
    private $signerDetails = null;

    /**
     * @property \AgentSIB\Diadoc\XmlTemplate\SignerReferenceInfoType $signerReference
     */
    private $signerReference = null;

    /**
     * Gets as signerDetails
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\SignerDetailsType
     */
    public function getSignerDetails()
    {
        return $this->signerDetails;
    }

    /**
     * Sets a new signerDetails
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\SignerDetailsType $signerDetails
     * @return self
     */
    public function setSignerDetails(\AgentSIB\Diadoc\XmlTemplate\SignerDetailsType $signerDetails)
    {
        $this->signerDetails = $signerDetails;
        return $this;
    }

    /**
     * Gets as signerReference
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\SignerReferenceInfoType
     */
    public function getSignerReference()
    {
        return $this->signerReference;
    }

    /**
     * Sets a new signerReference
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\SignerReferenceInfoType $signerReference
     * @return self
     */
    public function setSignerReference(\AgentSIB\Diadoc\XmlTemplate\SignerReferenceInfoType $signerReference)
    {
        $this->signerReference = $signerReference;
        return $this;
    }


}

