<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ExtendedOrganizationInfoType
 *
 * 
 * XSD Type: ExtendedOrganizationInfo
 */
class ExtendedOrganizationInfoType
{

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationDetailsType $organizationDetails
     */
    private $organizationDetails = null;

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationReferenceType $organizationReference
     */
    private $organizationReference = null;

    /**
     * Gets as organizationDetails
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationDetailsType
     */
    public function getOrganizationDetails()
    {
        return $this->organizationDetails;
    }

    /**
     * Sets a new organizationDetails
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationDetailsType $organizationDetails
     * @return self
     */
    public function setOrganizationDetails(\AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationDetailsType $organizationDetails)
    {
        $this->organizationDetails = $organizationDetails;
        return $this;
    }

    /**
     * Gets as organizationReference
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationReferenceType
     */
    public function getOrganizationReference()
    {
        return $this->organizationReference;
    }

    /**
     * Sets a new organizationReference
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationReferenceType $organizationReference
     * @return self
     */
    public function setOrganizationReference(\AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationReferenceType $organizationReference)
    {
        $this->organizationReference = $organizationReference;
        return $this;
    }


}

