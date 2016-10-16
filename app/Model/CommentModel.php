<?php


namespace HackLog\Model;

use MongoDB\BSON\ObjectID;

class CommentModel
{
    public static function addCommentWithUserIDUsingPostID(
        ObjectID $postID,
        string $content,
        ObjectID $userID
    ): ObjectID {
    }

    public static function removeComment(ObjectID $postID, ObjectID $commentID): bool
    {
    }

    public static function commentOnComment(ObjectID $commentID, string $content, ObjectID $userID)
    {
    }
}
