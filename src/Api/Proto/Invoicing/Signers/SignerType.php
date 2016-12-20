<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/ExtendedSigner.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Invoicing\Signers;

/**
 * Protobuf enum : AgentSIB.Diadoc.Api.Proto.Invoicing.Signers.SignerType
 */
class SignerType extends \Protobuf\Enum
{

    /**
     * LegalEntity = 1
     */
    const LegalEntity_VALUE = 1;

    /**
     * IndividualEntity = 2
     */
    const IndividualEntity_VALUE = 2;

    /**
     * PhysicalPerson = 3
     */
    const PhysicalPerson_VALUE = 3;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerType
     */
    protected static $LegalEntity = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerType
     */
    protected static $IndividualEntity = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerType
     */
    protected static $PhysicalPerson = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerType
     */
    public static function LegalEntity()
    {
        if (self::$LegalEntity !== null) {
            return self::$LegalEntity;
        }

        return self::$LegalEntity = new self('LegalEntity', self::LegalEntity_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerType
     */
    public static function IndividualEntity()
    {
        if (self::$IndividualEntity !== null) {
            return self::$IndividualEntity;
        }

        return self::$IndividualEntity = new self('IndividualEntity', self::IndividualEntity_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerType
     */
    public static function PhysicalPerson()
    {
        if (self::$PhysicalPerson !== null) {
            return self::$PhysicalPerson;
        }

        return self::$PhysicalPerson = new self('PhysicalPerson', self::PhysicalPerson_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 1: return self::LegalEntity();
            case 2: return self::IndividualEntity();
            case 3: return self::PhysicalPerson();
            default: return null;
        }
    }


}

