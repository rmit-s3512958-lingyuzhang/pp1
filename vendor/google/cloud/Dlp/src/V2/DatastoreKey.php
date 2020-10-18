<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Record key for a finding in Cloud Datastore.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DatastoreKey</code>
 */
class DatastoreKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Datastore entity key.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Key entity_key = 1;</code>
     */
    private $entity_key = null;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct();
    }

    /**
     * Datastore entity key.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Key entity_key = 1;</code>
     * @return \Google\Cloud\Dlp\V2\Key
     */
    public function getEntityKey()
    {
        return $this->entity_key;
    }

    /**
     * Datastore entity key.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.Key entity_key = 1;</code>
     * @param \Google\Cloud\Dlp\V2\Key $var
     * @return $this
     */
    public function setEntityKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\Key::class);
        $this->entity_key = $var;

        return $this;
    }

}

