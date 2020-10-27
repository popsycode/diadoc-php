<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ExtendedOrganizationInfoWithHyphensType
 *
 * 
 * XSD Type: ExtendedOrganizationInfoWithHyphens
 */
class ExtendedOrganizationInfoWithHyphensType
{

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationDetailsWithHyphensType $organizationDetails
     */
    private $organizationDetails = null;

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationReferenceType $organizationReference
     */
    private $organizationReference = null;

    /**
     * Gets as organizationDetails
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationDetailsWithHyphensType
     */
    public function getOrganizationDetails()
    {
        return $this->organizationDetails;
    }

    /**
     * Sets a new organizationDetails
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationDetailsWithHyphensType $organizationDetails
     * @return self
     */
    public function setOrganizationDetails(\AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationDetailsWithHyphensType $organizationDetails)
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

