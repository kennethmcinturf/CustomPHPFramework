<?php

class Post{
    public $title;

    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}


$post = [
    new Post("My First Post", true),
    new Post("My Second Post", false),
    new Post("Addendeum to First Post", true),
    new Post("My Third Post", false)
];

$titles = array_column($post, 'title', 'published');

var_dump($titles);