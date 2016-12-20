<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-GetApi.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Events;

/**
 * Protobuf enum : AgentSIB.Diadoc.Api.Proto.Events.AttachmentType
 */
class AttachmentType extends \Protobuf\Enum
{

    /**
     * UnknownAttachmentType = -1
     */
    const UnknownAttachmentType_VALUE = -1;

    /**
     * Nonformalized = 0
     */
    const Nonformalized_VALUE = 0;

    /**
     * Invoice = 1
     */
    const Invoice_VALUE = 1;

    /**
     * InvoiceReceipt = 2
     */
    const InvoiceReceipt_VALUE = 2;

    /**
     * InvoiceConfirmation = 3
     */
    const InvoiceConfirmation_VALUE = 3;

    /**
     * InvoiceCorrectionRequest = 4
     */
    const InvoiceCorrectionRequest_VALUE = 4;

    /**
     * AttachmentComment = 5
     */
    const AttachmentComment_VALUE = 5;

    /**
     * DeliveryFailureNotification = 6
     */
    const DeliveryFailureNotification_VALUE = 6;

    /**
     * EancomInvoic = 7
     */
    const EancomInvoic_VALUE = 7;

    /**
     * SignatureRequestRejection = 8
     */
    const SignatureRequestRejection_VALUE = 8;

    /**
     * EcrCatConformanceCertificateMetadata = 9
     */
    const EcrCatConformanceCertificateMetadata_VALUE = 9;

    /**
     * SignatureVerificationReport = 10
     */
    const SignatureVerificationReport_VALUE = 10;

    /**
     * TrustConnectionRequest = 11
     */
    const TrustConnectionRequest_VALUE = 11;

    /**
     * Torg12 = 12
     */
    const Torg12_VALUE = 12;

    /**
     * InvoiceRevision = 13
     */
    const InvoiceRevision_VALUE = 13;

    /**
     * InvoiceCorrection = 14
     */
    const InvoiceCorrection_VALUE = 14;

    /**
     * InvoiceCorrectionRevision = 15
     */
    const InvoiceCorrectionRevision_VALUE = 15;

    /**
     * AcceptanceCertificate = 16
     */
    const AcceptanceCertificate_VALUE = 16;

    /**
     * StructuredData = 17
     */
    const StructuredData_VALUE = 17;

    /**
     * ProformaInvoice = 18
     */
    const ProformaInvoice_VALUE = 18;

    /**
     * XmlTorg12 = 19
     */
    const XmlTorg12_VALUE = 19;

    /**
     * XmlAcceptanceCertificate = 20
     */
    const XmlAcceptanceCertificate_VALUE = 20;

    /**
     * XmlTorg12BuyerTitle = 21
     */
    const XmlTorg12BuyerTitle_VALUE = 21;

    /**
     * XmlAcceptanceCertificateBuyerTitle = 22
     */
    const XmlAcceptanceCertificateBuyerTitle_VALUE = 22;

    /**
     * Resolution = 23
     */
    const Resolution_VALUE = 23;

    /**
     * ResolutionRequest = 24
     */
    const ResolutionRequest_VALUE = 24;

    /**
     * ResolutionRequestDenial = 25
     */
    const ResolutionRequestDenial_VALUE = 25;

    /**
     * PriceList = 26
     */
    const PriceList_VALUE = 26;

    /**
     * Receipt = 27
     */
    const Receipt_VALUE = 27;

    /**
     * XmlSignatureRejection = 28
     */
    const XmlSignatureRejection_VALUE = 28;

    /**
     * RevocationRequest = 29
     */
    const RevocationRequest_VALUE = 29;

    /**
     * PriceListAgreement = 30
     */
    const PriceListAgreement_VALUE = 30;

    /**
     * CertificateRegistry = 34
     */
    const CertificateRegistry_VALUE = 34;

    /**
     * ReconciliationAct = 35
     */
    const ReconciliationAct_VALUE = 35;

    /**
     * Contract = 36
     */
    const Contract_VALUE = 36;

    /**
     * Torg13 = 37
     */
    const Torg13_VALUE = 37;

    /**
     * ServiceDetails = 38
     */
    const ServiceDetails_VALUE = 38;

    /**
     * RoamingNotification = 39
     */
    const RoamingNotification_VALUE = 39;

    /**
     * SupplementaryAgreement = 40
     */
    const SupplementaryAgreement_VALUE = 40;

    /**
     * UniversalTransferDocument = 41
     */
    const UniversalTransferDocument_VALUE = 41;

    /**
     * UniversalTransferDocumentBuyerTitle = 42
     */
    const UniversalTransferDocumentBuyerTitle_VALUE = 42;

    /**
     * UniversalTransferDocumentRevision = 45
     */
    const UniversalTransferDocumentRevision_VALUE = 45;

    /**
     * CustomData = 64
     */
    const CustomData_VALUE = 64;

    /**
     * MoveDocument = 65
     */
    const MoveDocument_VALUE = 65;

    /**
     * ResolutionChainAssignmentAttachment = 66
     */
    const ResolutionChainAssignmentAttachment_VALUE = 66;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $UnknownAttachmentType = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $Nonformalized = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $Invoice = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $InvoiceReceipt = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $InvoiceConfirmation = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $InvoiceCorrectionRequest = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $AttachmentComment = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $DeliveryFailureNotification = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $EancomInvoic = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $SignatureRequestRejection = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $EcrCatConformanceCertificateMetadata = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $SignatureVerificationReport = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $TrustConnectionRequest = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $Torg12 = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $InvoiceRevision = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $InvoiceCorrection = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $InvoiceCorrectionRevision = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $AcceptanceCertificate = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $StructuredData = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $ProformaInvoice = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $XmlTorg12 = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $XmlAcceptanceCertificate = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $XmlTorg12BuyerTitle = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $XmlAcceptanceCertificateBuyerTitle = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $Resolution = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $ResolutionRequest = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $ResolutionRequestDenial = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $PriceList = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $Receipt = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $XmlSignatureRejection = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $RevocationRequest = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $PriceListAgreement = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $CertificateRegistry = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $ReconciliationAct = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $Contract = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $Torg13 = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $ServiceDetails = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $RoamingNotification = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $SupplementaryAgreement = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $UniversalTransferDocument = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $UniversalTransferDocumentBuyerTitle = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $UniversalTransferDocumentRevision = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $CustomData = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $MoveDocument = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    protected static $ResolutionChainAssignmentAttachment = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function UnknownAttachmentType()
    {
        if (self::$UnknownAttachmentType !== null) {
            return self::$UnknownAttachmentType;
        }

        return self::$UnknownAttachmentType = new self('UnknownAttachmentType', self::UnknownAttachmentType_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function Nonformalized()
    {
        if (self::$Nonformalized !== null) {
            return self::$Nonformalized;
        }

        return self::$Nonformalized = new self('Nonformalized', self::Nonformalized_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function Invoice()
    {
        if (self::$Invoice !== null) {
            return self::$Invoice;
        }

        return self::$Invoice = new self('Invoice', self::Invoice_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function InvoiceReceipt()
    {
        if (self::$InvoiceReceipt !== null) {
            return self::$InvoiceReceipt;
        }

        return self::$InvoiceReceipt = new self('InvoiceReceipt', self::InvoiceReceipt_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function InvoiceConfirmation()
    {
        if (self::$InvoiceConfirmation !== null) {
            return self::$InvoiceConfirmation;
        }

        return self::$InvoiceConfirmation = new self('InvoiceConfirmation', self::InvoiceConfirmation_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function InvoiceCorrectionRequest()
    {
        if (self::$InvoiceCorrectionRequest !== null) {
            return self::$InvoiceCorrectionRequest;
        }

        return self::$InvoiceCorrectionRequest = new self('InvoiceCorrectionRequest', self::InvoiceCorrectionRequest_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function AttachmentComment()
    {
        if (self::$AttachmentComment !== null) {
            return self::$AttachmentComment;
        }

        return self::$AttachmentComment = new self('AttachmentComment', self::AttachmentComment_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function DeliveryFailureNotification()
    {
        if (self::$DeliveryFailureNotification !== null) {
            return self::$DeliveryFailureNotification;
        }

        return self::$DeliveryFailureNotification = new self('DeliveryFailureNotification', self::DeliveryFailureNotification_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function EancomInvoic()
    {
        if (self::$EancomInvoic !== null) {
            return self::$EancomInvoic;
        }

        return self::$EancomInvoic = new self('EancomInvoic', self::EancomInvoic_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function SignatureRequestRejection()
    {
        if (self::$SignatureRequestRejection !== null) {
            return self::$SignatureRequestRejection;
        }

        return self::$SignatureRequestRejection = new self('SignatureRequestRejection', self::SignatureRequestRejection_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function EcrCatConformanceCertificateMetadata()
    {
        if (self::$EcrCatConformanceCertificateMetadata !== null) {
            return self::$EcrCatConformanceCertificateMetadata;
        }

        return self::$EcrCatConformanceCertificateMetadata = new self('EcrCatConformanceCertificateMetadata', self::EcrCatConformanceCertificateMetadata_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function SignatureVerificationReport()
    {
        if (self::$SignatureVerificationReport !== null) {
            return self::$SignatureVerificationReport;
        }

        return self::$SignatureVerificationReport = new self('SignatureVerificationReport', self::SignatureVerificationReport_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function TrustConnectionRequest()
    {
        if (self::$TrustConnectionRequest !== null) {
            return self::$TrustConnectionRequest;
        }

        return self::$TrustConnectionRequest = new self('TrustConnectionRequest', self::TrustConnectionRequest_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function Torg12()
    {
        if (self::$Torg12 !== null) {
            return self::$Torg12;
        }

        return self::$Torg12 = new self('Torg12', self::Torg12_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function InvoiceRevision()
    {
        if (self::$InvoiceRevision !== null) {
            return self::$InvoiceRevision;
        }

        return self::$InvoiceRevision = new self('InvoiceRevision', self::InvoiceRevision_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function InvoiceCorrection()
    {
        if (self::$InvoiceCorrection !== null) {
            return self::$InvoiceCorrection;
        }

        return self::$InvoiceCorrection = new self('InvoiceCorrection', self::InvoiceCorrection_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function InvoiceCorrectionRevision()
    {
        if (self::$InvoiceCorrectionRevision !== null) {
            return self::$InvoiceCorrectionRevision;
        }

        return self::$InvoiceCorrectionRevision = new self('InvoiceCorrectionRevision', self::InvoiceCorrectionRevision_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function AcceptanceCertificate()
    {
        if (self::$AcceptanceCertificate !== null) {
            return self::$AcceptanceCertificate;
        }

        return self::$AcceptanceCertificate = new self('AcceptanceCertificate', self::AcceptanceCertificate_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function StructuredData()
    {
        if (self::$StructuredData !== null) {
            return self::$StructuredData;
        }

        return self::$StructuredData = new self('StructuredData', self::StructuredData_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function ProformaInvoice()
    {
        if (self::$ProformaInvoice !== null) {
            return self::$ProformaInvoice;
        }

        return self::$ProformaInvoice = new self('ProformaInvoice', self::ProformaInvoice_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function XmlTorg12()
    {
        if (self::$XmlTorg12 !== null) {
            return self::$XmlTorg12;
        }

        return self::$XmlTorg12 = new self('XmlTorg12', self::XmlTorg12_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function XmlAcceptanceCertificate()
    {
        if (self::$XmlAcceptanceCertificate !== null) {
            return self::$XmlAcceptanceCertificate;
        }

        return self::$XmlAcceptanceCertificate = new self('XmlAcceptanceCertificate', self::XmlAcceptanceCertificate_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function XmlTorg12BuyerTitle()
    {
        if (self::$XmlTorg12BuyerTitle !== null) {
            return self::$XmlTorg12BuyerTitle;
        }

        return self::$XmlTorg12BuyerTitle = new self('XmlTorg12BuyerTitle', self::XmlTorg12BuyerTitle_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function XmlAcceptanceCertificateBuyerTitle()
    {
        if (self::$XmlAcceptanceCertificateBuyerTitle !== null) {
            return self::$XmlAcceptanceCertificateBuyerTitle;
        }

        return self::$XmlAcceptanceCertificateBuyerTitle = new self('XmlAcceptanceCertificateBuyerTitle', self::XmlAcceptanceCertificateBuyerTitle_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function Resolution()
    {
        if (self::$Resolution !== null) {
            return self::$Resolution;
        }

        return self::$Resolution = new self('Resolution', self::Resolution_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function ResolutionRequest()
    {
        if (self::$ResolutionRequest !== null) {
            return self::$ResolutionRequest;
        }

        return self::$ResolutionRequest = new self('ResolutionRequest', self::ResolutionRequest_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function ResolutionRequestDenial()
    {
        if (self::$ResolutionRequestDenial !== null) {
            return self::$ResolutionRequestDenial;
        }

        return self::$ResolutionRequestDenial = new self('ResolutionRequestDenial', self::ResolutionRequestDenial_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function PriceList()
    {
        if (self::$PriceList !== null) {
            return self::$PriceList;
        }

        return self::$PriceList = new self('PriceList', self::PriceList_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function Receipt()
    {
        if (self::$Receipt !== null) {
            return self::$Receipt;
        }

        return self::$Receipt = new self('Receipt', self::Receipt_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function XmlSignatureRejection()
    {
        if (self::$XmlSignatureRejection !== null) {
            return self::$XmlSignatureRejection;
        }

        return self::$XmlSignatureRejection = new self('XmlSignatureRejection', self::XmlSignatureRejection_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function RevocationRequest()
    {
        if (self::$RevocationRequest !== null) {
            return self::$RevocationRequest;
        }

        return self::$RevocationRequest = new self('RevocationRequest', self::RevocationRequest_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function PriceListAgreement()
    {
        if (self::$PriceListAgreement !== null) {
            return self::$PriceListAgreement;
        }

        return self::$PriceListAgreement = new self('PriceListAgreement', self::PriceListAgreement_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function CertificateRegistry()
    {
        if (self::$CertificateRegistry !== null) {
            return self::$CertificateRegistry;
        }

        return self::$CertificateRegistry = new self('CertificateRegistry', self::CertificateRegistry_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function ReconciliationAct()
    {
        if (self::$ReconciliationAct !== null) {
            return self::$ReconciliationAct;
        }

        return self::$ReconciliationAct = new self('ReconciliationAct', self::ReconciliationAct_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function Contract()
    {
        if (self::$Contract !== null) {
            return self::$Contract;
        }

        return self::$Contract = new self('Contract', self::Contract_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function Torg13()
    {
        if (self::$Torg13 !== null) {
            return self::$Torg13;
        }

        return self::$Torg13 = new self('Torg13', self::Torg13_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function ServiceDetails()
    {
        if (self::$ServiceDetails !== null) {
            return self::$ServiceDetails;
        }

        return self::$ServiceDetails = new self('ServiceDetails', self::ServiceDetails_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function RoamingNotification()
    {
        if (self::$RoamingNotification !== null) {
            return self::$RoamingNotification;
        }

        return self::$RoamingNotification = new self('RoamingNotification', self::RoamingNotification_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function SupplementaryAgreement()
    {
        if (self::$SupplementaryAgreement !== null) {
            return self::$SupplementaryAgreement;
        }

        return self::$SupplementaryAgreement = new self('SupplementaryAgreement', self::SupplementaryAgreement_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function UniversalTransferDocument()
    {
        if (self::$UniversalTransferDocument !== null) {
            return self::$UniversalTransferDocument;
        }

        return self::$UniversalTransferDocument = new self('UniversalTransferDocument', self::UniversalTransferDocument_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function UniversalTransferDocumentBuyerTitle()
    {
        if (self::$UniversalTransferDocumentBuyerTitle !== null) {
            return self::$UniversalTransferDocumentBuyerTitle;
        }

        return self::$UniversalTransferDocumentBuyerTitle = new self('UniversalTransferDocumentBuyerTitle', self::UniversalTransferDocumentBuyerTitle_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function UniversalTransferDocumentRevision()
    {
        if (self::$UniversalTransferDocumentRevision !== null) {
            return self::$UniversalTransferDocumentRevision;
        }

        return self::$UniversalTransferDocumentRevision = new self('UniversalTransferDocumentRevision', self::UniversalTransferDocumentRevision_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function CustomData()
    {
        if (self::$CustomData !== null) {
            return self::$CustomData;
        }

        return self::$CustomData = new self('CustomData', self::CustomData_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function MoveDocument()
    {
        if (self::$MoveDocument !== null) {
            return self::$MoveDocument;
        }

        return self::$MoveDocument = new self('MoveDocument', self::MoveDocument_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function ResolutionChainAssignmentAttachment()
    {
        if (self::$ResolutionChainAssignmentAttachment !== null) {
            return self::$ResolutionChainAssignmentAttachment;
        }

        return self::$ResolutionChainAssignmentAttachment = new self('ResolutionChainAssignmentAttachment', self::ResolutionChainAssignmentAttachment_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\Events\AttachmentType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case -1: return self::UnknownAttachmentType();
            case 0: return self::Nonformalized();
            case 1: return self::Invoice();
            case 2: return self::InvoiceReceipt();
            case 3: return self::InvoiceConfirmation();
            case 4: return self::InvoiceCorrectionRequest();
            case 5: return self::AttachmentComment();
            case 6: return self::DeliveryFailureNotification();
            case 7: return self::EancomInvoic();
            case 8: return self::SignatureRequestRejection();
            case 9: return self::EcrCatConformanceCertificateMetadata();
            case 10: return self::SignatureVerificationReport();
            case 11: return self::TrustConnectionRequest();
            case 12: return self::Torg12();
            case 13: return self::InvoiceRevision();
            case 14: return self::InvoiceCorrection();
            case 15: return self::InvoiceCorrectionRevision();
            case 16: return self::AcceptanceCertificate();
            case 17: return self::StructuredData();
            case 18: return self::ProformaInvoice();
            case 19: return self::XmlTorg12();
            case 20: return self::XmlAcceptanceCertificate();
            case 21: return self::XmlTorg12BuyerTitle();
            case 22: return self::XmlAcceptanceCertificateBuyerTitle();
            case 23: return self::Resolution();
            case 24: return self::ResolutionRequest();
            case 25: return self::ResolutionRequestDenial();
            case 26: return self::PriceList();
            case 27: return self::Receipt();
            case 28: return self::XmlSignatureRejection();
            case 29: return self::RevocationRequest();
            case 30: return self::PriceListAgreement();
            case 34: return self::CertificateRegistry();
            case 35: return self::ReconciliationAct();
            case 36: return self::Contract();
            case 37: return self::Torg13();
            case 38: return self::ServiceDetails();
            case 39: return self::RoamingNotification();
            case 40: return self::SupplementaryAgreement();
            case 41: return self::UniversalTransferDocument();
            case 42: return self::UniversalTransferDocumentBuyerTitle();
            case 45: return self::UniversalTransferDocumentRevision();
            case 64: return self::CustomData();
            case 65: return self::MoveDocument();
            case 66: return self::ResolutionChainAssignmentAttachment();
            default: return null;
        }
    }


}

