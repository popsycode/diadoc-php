<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ExtendedOrganizationInfoTorg2Type
 *
 * 
 * XSD Type: ExtendedOrganizationInfo_Torg2
 */
class ExtendedOrganizationInfoTorg2Type
{

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationDetailsTorg2Type $organizationDetails
     */
    private $organizationDetails = null;

    /**
     * @var \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationReferenceType $organizationReference
     */
    private $organizationReference = null;

    /**
     * Gets as organizationDetails
     *
     * @return \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationDetailsTorg2Type
     */
    public function getOrganizationDetails()
    {
        return $this->organizationDetails;
    }

    /**
     * Sets a new organizationDetails
     *
     * @param \AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationDetailsTorg2Type $organizationDetails
     * @return self
     */
    public function setOrganizationDetails(\AgentSIB\Diadoc\XmlTemplate\ExtendedOrganizationDetailsTorg2Type $organizationDetails)
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

