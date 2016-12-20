<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Invoicing/ExtendedSigner.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Invoicing\Signers;

/**
 * Protobuf enum : AgentSIB.Diadoc.Api.Proto.Invoicing.Signers.SignerPowers
 */
class SignerPowers extends \Protobuf\Enum
{

    /**
     * InvoiceSigner = 0
     */
    const InvoiceSigner_VALUE = 0;

    /**
     * PersonMadeOperation = 1
     */
    const PersonMadeOperation_VALUE = 1;

    /**
     * MadeAndSignOperation = 2
     */
    const MadeAndSignOperation_VALUE = 2;

    /**
     * PersonDocumentedOperation = 3
     */
    const PersonDocumentedOperation_VALUE = 3;

    /**
     * MadeOperationAndSignedInvoice = 4
     */
    const MadeOperationAndSignedInvoice_VALUE = 4;

    /**
     * MadeAndResponsibleForOperationAndSignedInvoice = 5
     */
    const MadeAndResponsibleForOperationAndSignedInvoice_VALUE = 5;

    /**
     * ResponsibleForOperationAndSignerForInvoice = 6
     */
    const ResponsibleForOperationAndSignerForInvoice_VALUE = 6;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    protected static $InvoiceSigner = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    protected static $PersonMadeOperation = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    protected static $MadeAndSignOperation = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    protected static $PersonDocumentedOperation = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    protected static $MadeOperationAndSignedInvoice = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    protected static $MadeAndResponsibleForOperationAndSignedInvoice = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    protected static $ResponsibleForOperationAndSignerForInvoice = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    public static function InvoiceSigner()
    {
        if (self::$InvoiceSigner !== null) {
            return self::$InvoiceSigner;
        }

        return self::$InvoiceSigner = new self('InvoiceSigner', self::InvoiceSigner_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    public static function PersonMadeOperation()
    {
        if (self::$PersonMadeOperation !== null) {
            return self::$PersonMadeOperation;
        }

        return self::$PersonMadeOperation = new self('PersonMadeOperation', self::PersonMadeOperation_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    public static function MadeAndSignOperation()
    {
        if (self::$MadeAndSignOperation !== null) {
            return self::$MadeAndSignOperation;
        }

        return self::$MadeAndSignOperation = new self('MadeAndSignOperation', self::MadeAndSignOperation_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    public static function PersonDocumentedOperation()
    {
        if (self::$PersonDocumentedOperation !== null) {
            return self::$PersonDocumentedOperation;
        }

        return self::$PersonDocumentedOperation = new self('PersonDocumentedOperation', self::PersonDocumentedOperation_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    public static function MadeOperationAndSignedInvoice()
    {
        if (self::$MadeOperationAndSignedInvoice !== null) {
            return self::$MadeOperationAndSignedInvoice;
        }

        return self::$MadeOperationAndSignedInvoice = new self('MadeOperationAndSignedInvoice', self::MadeOperationAndSignedInvoice_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    public static function MadeAndResponsibleForOperationAndSignedInvoice()
    {
        if (self::$MadeAndResponsibleForOperationAndSignedInvoice !== null) {
            return self::$MadeAndResponsibleForOperationAndSignedInvoice;
        }

        return self::$MadeAndResponsibleForOperationAndSignedInvoice = new self('MadeAndResponsibleForOperationAndSignedInvoice', self::MadeAndResponsibleForOperationAndSignedInvoice_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    public static function ResponsibleForOperationAndSignerForInvoice()
    {
        if (self::$ResponsibleForOperationAndSignerForInvoice !== null) {
            return self::$ResponsibleForOperationAndSignerForInvoice;
        }

        return self::$ResponsibleForOperationAndSignerForInvoice = new self('ResponsibleForOperationAndSignerForInvoice', self::ResponsibleForOperationAndSignerForInvoice_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\Invoicing\Signers\SignerPowers
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::InvoiceSigner();
            case 1: return self::PersonMadeOperation();
            case 2: return self::MadeAndSignOperation();
            case 3: return self::PersonDocumentedOperation();
            case 4: return self::MadeOperationAndSignedInvoice();
            case 5: return self::MadeAndResponsibleForOperationAndSignedInvoice();
            case 6: return self::ResponsibleForOperationAndSignerForInvoice();
            default: return null;
        }
    }


}

