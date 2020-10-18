<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto

namespace Google\Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message type used to describe a single quota violation.  For example, a
 * daily quota or a custom quota that was exceeded.
 *
 * Generated from protobuf message <code>google.rpc.QuotaFailure.Violation</code>
 */
class QuotaFailure_Violation extends \Google\Protobuf\Internal\Message
{
    /**
     * The subject on which the quota check failed.
     * For example, "clientip:<ip address of client>" or "project:<Google
     * developer project id>".
     *
     * Generated from protobuf field <code>string subject = 1;</code>
     */
    private $subject = '';
    /**
     * A description of how the quota check failed. Clients can use this
     * description to find more about the quota configuration in the service's
     * public documentation, or find the relevant quota limit to adjust through
     * developer console.
     * For example: "Service disabled" or "Daily Limit for read operations
     * exceeded".
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';

    public function __construct() {
        \GPBMetadata\Google\Rpc\ErrorDetails::initOnce();
        parent::__construct();
    }

    /**
     * The subject on which the quota check failed.
     * For example, "clientip:<ip address of client>" or "project:<Google
     * developer project id>".
     *
     * Generated from protobuf field <code>string subject = 1;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The subject on which the quota check failed.
     * For example, "clientip:<ip address of client>" or "project:<Google
     * developer project id>".
     *
     * Generated from protobuf field <code>string subject = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * A description of how the quota check failed. Clients can use this
     * description to find more about the quota configuration in the service's
     * public documentation, or find the relevant quota limit to adjust through
     * developer console.
     * For example: "Service disabled" or "Daily Limit for read operations
     * exceeded".
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of how the quota check failed. Clients can use this
     * description to find more about the quota configuration in the service's
     * public documentation, or find the relevant quota limit to adjust through
     * developer console.
     * For example: "Service disabled" or "Daily Limit for read operations
     * exceeded".
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

