<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Events/DiadocMessage-GetApi.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Events;

/**
 * Protobuf enum : AgentSIB.Diadoc.Api.Proto.Events.TemplateRefusalType
 */
class TemplateRefusalType extends \Protobuf\Enum
{

    /**
     * UnknownTemplateRefusalType = 0
     */
    const UnknownTemplateRefusalType_VALUE = 0;

    /**
     * Refusal = 1
     */
    const Refusal_VALUE = 1;

    /**
     * Withdrawal = 2
     */
    const Withdrawal_VALUE = 2;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\TemplateRefusalType
     */
    protected static $UnknownTemplateRefusalType = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\TemplateRefusalType
     */
    protected static $Refusal = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Events\TemplateRefusalType
     */
    protected static $Withdrawal = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\TemplateRefusalType
     */
    public static function UnknownTemplateRefusalType()
    {
        if (self::$UnknownTemplateRefusalType !== null) {
            return self::$UnknownTemplateRefusalType;
        }

        return self::$UnknownTemplateRefusalType = new self('UnknownTemplateRefusalType', self::UnknownTemplateRefusalType_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\TemplateRefusalType
     */
    public static function Refusal()
    {
        if (self::$Refusal !== null) {
            return self::$Refusal;
        }

        return self::$Refusal = new self('Refusal', self::Refusal_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Events\TemplateRefusalType
     */
    public static function Withdrawal()
    {
        if (self::$Withdrawal !== null) {
            return self::$Withdrawal;
        }

        return self::$Withdrawal = new self('Withdrawal', self::Withdrawal_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\Events\TemplateRefusalType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UnknownTemplateRefusalType();
            case 1: return self::Refusal();
            case 2: return self::Withdrawal();
            default: return null;
        }
    }


}

