<?php

class Post
{ 
    public $title; 
    public $published; 
    public $author;

    public function __construct($title, $published, $author)
    {
        $this -> title = $title; 
        $this -> published = $published;
        $this -> author = $author; 
    }
}

$posts = [
    new Post("My First Post", true, "JS"),
    new Post("My Second Post", true, "JS"),
    new Post("My Third Post", true, "JS"),
    new Post("My Fourth Post", false, "JS"),
];

// $unpublishedPosts = array_filter($posts, function ($post) {
//     return ! $post->published;  
// }) ;

// $publishedPosts = array_filter($posts, function ($post) {
//     return $post->published;  
// }) ;


// $modified = array_map(function ($post) {
//     return 'Foobar';
// }, $posts);

// $titles = array_column($posts, "title");

$posts = array_map(function ($post) {
    return (array) $post;
}, $posts);

$titles =array_column($posts, 'author','title'); 


echo('<pre>');
var_dump($titles);
echo('</pre>');