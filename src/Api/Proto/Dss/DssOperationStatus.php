<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : Dss/DssSign.proto
 */


namespace AgentSIB\Diadoc\Api\Proto\Dss;

/**
 * Protobuf enum : AgentSIB.Diadoc.Api.Proto.Dss.DssOperationStatus
 */
class DssOperationStatus extends \Protobuf\Enum
{

    /**
     * Unknown = 0
     */
    const Unknown_VALUE = 0;

    /**
     * InProgress = 1
     */
    const InProgress_VALUE = 1;

    /**
     * Completed = 2
     */
    const Completed_VALUE = 2;

    /**
     * CanceledByUser = 3
     */
    const CanceledByUser_VALUE = 3;

    /**
     * Timeout = 4
     */
    const Timeout_VALUE = 4;

    /**
     * Crashed = 5
     */
    const Crashed_VALUE = 5;

    /**
     * UserHasUnconfirmedOperation = 6
     */
    const UserHasUnconfirmedOperation_VALUE = 6;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    protected static $Unknown = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    protected static $InProgress = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    protected static $Completed = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    protected static $CanceledByUser = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    protected static $Timeout = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    protected static $Crashed = null;

    /**
     * @var \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    protected static $UserHasUnconfirmedOperation = null;

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    public static function Unknown()
    {
        if (self::$Unknown !== null) {
            return self::$Unknown;
        }

        return self::$Unknown = new self('Unknown', self::Unknown_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    public static function InProgress()
    {
        if (self::$InProgress !== null) {
            return self::$InProgress;
        }

        return self::$InProgress = new self('InProgress', self::InProgress_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    public static function Completed()
    {
        if (self::$Completed !== null) {
            return self::$Completed;
        }

        return self::$Completed = new self('Completed', self::Completed_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    public static function CanceledByUser()
    {
        if (self::$CanceledByUser !== null) {
            return self::$CanceledByUser;
        }

        return self::$CanceledByUser = new self('CanceledByUser', self::CanceledByUser_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    public static function Timeout()
    {
        if (self::$Timeout !== null) {
            return self::$Timeout;
        }

        return self::$Timeout = new self('Timeout', self::Timeout_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    public static function Crashed()
    {
        if (self::$Crashed !== null) {
            return self::$Crashed;
        }

        return self::$Crashed = new self('Crashed', self::Crashed_VALUE);
    }

    /**
     * @return \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    public static function UserHasUnconfirmedOperation()
    {
        if (self::$UserHasUnconfirmedOperation !== null) {
            return self::$UserHasUnconfirmedOperation;
        }

        return self::$UserHasUnconfirmedOperation = new self('UserHasUnconfirmedOperation', self::UserHasUnconfirmedOperation_VALUE);
    }

    /**
     * @param int $value
     * @return \AgentSIB\Diadoc\Api\Proto\Dss\DssOperationStatus
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::Unknown();
            case 1: return self::InProgress();
            case 2: return self::Completed();
            case 3: return self::CanceledByUser();
            case 4: return self::Timeout();
            case 5: return self::Crashed();
            case 6: return self::UserHasUnconfirmedOperation();
            default: return null;
        }
    }


}

