<?php


namespace HackLog\Model;

class BlogModel extends TaggableModel
{
    private $name;
    private $urlName;
    private $owner;
    private $theme;
    private $description;

    public function bsonSerialize()
    {
        $serial = parent::bsonSerialize();
        array_merge(
            $serial,
            [
                'name' => $this->name,
                'urlName' => $this->urlName,
                'owner' => $this->owner,
                'theme' => $this->theme,
                'description' => $this->description,
            ]
        );
        return $serial;
    }

    public function bsonUnserialize(array $data)
    {
        $this->name = $data['name'];
        $this->urlName = $data['urlName'];
        $this->owner = $data['owner'];
        $this->theme = $data['theme'];
        $this->description = $data['description'];
        parent::bsonUnserialize($data);
    }
}
