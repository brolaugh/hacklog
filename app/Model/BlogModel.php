<?php


namespace HackLog\Model;

use HackLog\Document\BlogDocument;
use MongoDB\BSON\ObjectID;

class BlogModel
{
    public static function urlNameExists(string $urlName): bool
    {
    }

    public static function createBlog(
        string $urlName,
        string $name,
        ObjectID $owner,
        $description = "",
        array $tags = []
    ): ObjectID {
    }

    public static function getByBlogID(ObjectID $blogID): BlogDocument
    {
    }

    /**
     * Gets the most recent posts published on a specific blog
     * If $chronological is true it'll get the least recent posts i.e. the oldest posts
     * Will only show posts that has visibility of 0 and has been published from moment of request and backwards in time
     *
     * @param ObjectID $blogID
     * @param int $limit
     * @param int $offset
     * @param bool $chronological
     * @return array
     */
    public static function getBlogWall(
        ObjectID $blogID,
        int $limit = 0,
        int $offset = 0,
        bool $chronological = false
    ): array {
    }

    public static function getByUrlName(string $urlName): BlogDocument
    {
    }

    public static function changeUrlName(ObjectID $blogID, string $urlName): bool
    {
    }

    /**
     * @param ObjectID $blogID
     * @param array $tags Contains all the tags the blog is going to have after document update
     * @return bool
     */
    public static function changeTags(ObjectID $blogID, array $tags): bool
    {
    }

    /**
     * TODO: Add deactivation variable to blogSchema
     * @param ObjectID $blogID
     * @return bool
     */
    public static function deactivate(ObjectID $blogID): bool
    {
    }

    public static function destroy(ObjectID $blogID): bool
    {
    }
}
