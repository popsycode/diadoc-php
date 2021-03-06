<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Documents/Document.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Documents;

/**
 * Protobuf enum : AgentSIB.Diadoc.Api.Proto.Documents.MessageType
 */
class MessageType extends \Protobuf\Enum
{

    /**
     * Unknown = 0
     */
    const Unknown_VALUE = 0;

    /**
     * Letter = 1
     */
    const Letter_VALUE = 1;

    /**
     * Draft = 2
     */
    const Draft_VALUE = 2;

    /**
     * Template = 3
     */
    const Template_VALUE = 3;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\MessageType
     */
    protected static $Unknown = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\MessageType
     */
    protected static $Letter = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\MessageType
     */
    protected static $Draft = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Documents\MessageType
     */
    protected static $Template = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\MessageType
     */
    public static function Unknown()
    {
        if (self::$Unknown !== null) {
            return self::$Unknown;
        }

        return self::$Unknown = new self('Unknown', self::Unknown_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\MessageType
     */
    public static function Letter()
    {
        if (self::$Letter !== null) {
            return self::$Letter;
        }

        return self::$Letter = new self('Letter', self::Letter_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\MessageType
     */
    public static function Draft()
    {
        if (self::$Draft !== null) {
            return self::$Draft;
        }

        return self::$Draft = new self('Draft', self::Draft_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\MessageType
     */
    public static function Template()
    {
        if (self::$Template !== null) {
            return self::$Template;
        }

        return self::$Template = new self('Template', self::Template_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\Documents\MessageType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::Unknown();
            case 1: return self::Letter();
            case 2: return self::Draft();
            case 3: return self::Template();
            default: return null;
        }
    }


}

