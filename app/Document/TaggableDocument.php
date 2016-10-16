<?php


namespace HackLog\Document;

use HackLog\Core\Document;

class TaggableDocument extends Document
{
    protected $tags = [];

    public function bsonSerialize()
    {
        $serial = parent::bsonSerialize();
        $serial['tags'] = $this->tags;
        return $serial;// TODO: Change the autogenerated stub
    }

    public function bsonUnserialize(array $data)
    {
        $this->tags = $data['tags'];
        parent::bsonUnserialize($data); // TODO: Change the autogenerated stub
    }
}