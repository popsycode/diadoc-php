<?php

namespace AgentSIB\Diadoc\ProformaInvoice;

/**
 * Class representing ExtendedOrganizationInfoType
 *
 * 
 * XSD Type: ExtendedOrganizationInfo
 */
class ExtendedOrganizationInfoType
{

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationDetailsType $organizationDetails
     */
    private $organizationDetails = null;

    /**
     * @property \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationReferenceType $organizationReference
     */
    private $organizationReference = null;

    /**
     * Gets as organizationDetails
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationDetailsType
     */
    public function getOrganizationDetails()
    {
        return $this->organizationDetails;
    }

    /**
     * Sets a new organizationDetails
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationDetailsType $organizationDetails
     * @return self
     */
    public function setOrganizationDetails(\AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationDetailsType $organizationDetails)
    {
        $this->organizationDetails = $organizationDetails;
        return $this;
    }

    /**
     * Gets as organizationReference
     *
     * @return \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationReferenceType
     */
    public function getOrganizationReference()
    {
        return $this->organizationReference;
    }

    /**
     * Sets a new organizationReference
     *
     * @param \AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationReferenceType $organizationReference
     * @return self
     */
    public function setOrganizationReference(\AgentSIB\Diadoc\ProformaInvoice\ExtendedOrganizationReferenceType $organizationReference)
    {
        $this->organizationReference = $organizationReference;
        return $this;
    }


}

