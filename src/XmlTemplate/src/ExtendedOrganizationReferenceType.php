<?php

namespace AgentSIB\Diadoc\XmlTemplate;

/**
 * Class representing ExtendedOrganizationReferenceType
 *
 * 
 * XSD Type: ExtendedOrganizationReference
 */
class ExtendedOrganizationReferenceType extends ExtendedOrganizationDetailsManualFillingType
{

    /**
     * @property string $boxId
     */
    private $boxId = null;

    /**
     * Gets as boxId
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
     * @param string $boxId
     * @return self
     */
    public function setBoxId($boxId)
    {
        $this->boxId = $boxId;
        return $this;
    }


}

