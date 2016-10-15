<?php


namespace HackLog\Core;

use MongoDB\BSON\ObjectID;
use MongoDB\BSON\Persistable;
use MongoDB\BSON\UTCDateTime;

abstract class Model implements Persistable
{
    protected $id;
    protected $createdAt;
    protected $changedAt;

    public function __construct()
    {
        $this->id = new ObjectID;
        $this->createdAt = new UTCDateTime(floor(microtime(true) * 1000));
    }

    /**
     * Provides an array or document to serialize as BSON
     * Called during serialization of the object to BSON. The method must return an array or stdClass.
     * Root documents (e.g. a MongoDB\BSON\Serializable passed to MongoDB\BSON\fromPHP()) will always be serialized as a BSON document.
     * For field values, associative arrays and stdClass instances will be serialized as a BSON document and sequential arrays (i.e. sequential, numeric indexes starting at 0) will be serialized as a BSON array.
     *
     * @link   http://php.net/manual/en/mongodb-bson-serializable.bsonserialize.php
     * @return array|object An array or stdClass to be serialized as a BSON array or document.
     */
    public function bsonSerialize()
    {
        // TODO: Implement bsonSerialize() method.
        return [
                '_id' => $this->id,
                'createdAt' => $this->createdAt,
                'changedAt' => new UTCDateTime(floor(microtime(true) * 1000)),
        ];
    }

    /**
     * Constructs the object from a BSON array or document
     * Called during unserialization of the object from BSON.
     * The properties of the BSON array or document will be passed to the method as an array.
     *
     * @link  http://php.net/manual/en/mongodb-bson-unserializable.bsonunserialize.php
     * @param array $data Properties within the BSON array or document.
     */
    public function bsonUnserialize(array $data)
    {
        // TODO: Implement bsonUnserialize() method.
        $this->id = $data['_id'];
        $this->createdAt = $data['createdAt'];
        $this->changedAt = $data['changedAt'];
    }
}
