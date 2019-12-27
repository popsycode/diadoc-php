<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : TotalCountType.proto
 */


namespace AgentSIB\Diadoc\Api\Proto;

/**
 * Protobuf enum : AgentSIB.Diadoc.Api.Proto.TotalCountType
 */
class TotalCountType extends \Protobuf\Enum
{

    /**
     * UnknownCountType = 0
     */
    const UnknownCountType_VALUE = 0;

    /**
     * Equal = 1
     */
    const Equal_VALUE = 1;

    /**
     * GreaterThanOrEqual = 2
     */
    const GreaterThanOrEqual_VALUE = 2;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\TotalCountType
     */
    protected static $UnknownCountType = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\TotalCountType
     */
    protected static $Equal = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\TotalCountType
     */
    protected static $GreaterThanOrEqual = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\TotalCountType
     */
    public static function UnknownCountType()
    {
        if (self::$UnknownCountType !== null) {
            return self::$UnknownCountType;
        }

        return self::$UnknownCountType = new self('UnknownCountType', self::UnknownCountType_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\TotalCountType
     */
    public static function Equal()
    {
        if (self::$Equal !== null) {
            return self::$Equal;
        }

        return self::$Equal = new self('Equal', self::Equal_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\TotalCountType
     */
    public static function GreaterThanOrEqual()
    {
        if (self::$GreaterThanOrEqual !== null) {
            return self::$GreaterThanOrEqual;
        }

        return self::$GreaterThanOrEqual = new self('GreaterThanOrEqual', self::GreaterThanOrEqual_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\TotalCountType
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UnknownCountType();
            case 1: return self::Equal();
            case 2: return self::GreaterThanOrEqual();
            default: return null;
        }
    }


}
