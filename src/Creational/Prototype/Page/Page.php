<?php

namespace Ungnguyen\PhpDesignPattern\Creational\Prototype\Page;

use DateTime;

class Page
{
    private string $title;
    private string $body;

    /**
     * @var array|string[] $comments
     */
    private array $comments;
    private Author $author;
    private DateTime $createdAt;

    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->comments = [];
        $this->author = $author;
        $this->author->addPage($this);
        $this->createdAt = new DateTime();
    }

    public function __clone(): void
    {
        $this->title = "Copy of " . $this->title;
        $this->comments = [];
        $this->author->addPage($this);
        $this->createdAt = new DateTime();
    }

    public function addComment(string $comment)
    {
        $this->comments[] = $comment;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function showDetail()
    {
        echo "--------------------------------\n";
        echo "Title: " . $this->getTitle() ."\n";
        echo "Body: " . $this->getBody() ."\n";
        echo "Author: " . $this->getAuthor()->getName() ."\n";
        echo "Author's pages:\n";
        print_r($this->getAuthor()->getPages());
        echo "Comment list:\n";
        print_r($this->getComments());
        echo "--------------------------------\n";
    }
}
