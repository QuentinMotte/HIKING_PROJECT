<?php

require_once('app/lib/database.php');

class Tag
{
    public string $id;
    public string $name;

}

class TagRepository
{
    public DatabaseConnection $connection;

    public function getTags(): array
    {
        $statement = $this->connection->getConnection()->query(
            "SELECT * FROM TAGS"
        );
        $tags = [];
        while (($row = $statement->fetch())) {
            $tag = new Tag();
            $tag->id = $row['id_tag'];
            $tag->name = $row['name_tag'];
     
            $tags[] = $tag;
        }
        return $tags;
    }
}