<?php


namespace HackLog\Model;

use HackLog\Document\PostDocument;
use MongoDB\BSON\ObjectID;

class PostModel
{
    public static function createPost(
        string $title,
        string $urlTitle,
        string $content,
        \DateTime $publishingDate,
        int $visibility = 0,
        array $tags = []
    ): ObjectID {
    }

    public static function getPostByURLTitle(ObjectID $blogID, string $urlTitle): PostDocument
    {
    }

    public static function URLTitleExists(ObjectID $blogID, $urlTitle): bool
    {
    }

    public static function getPostByObjectID(ObjectID $postID): PostDocument
    {
    }

    public static function alterPostByID(
        ObjectID $postID,
        string $title = '',
        string $urlTitle = '',
        string $content = '',
        array $tags = []
    ): bool {
    }

    public static function deletePostByID(ObjectID $postID): bool
    {
    }
}
