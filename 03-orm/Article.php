<?php

namespace App;

class Article
{
    private ?int $id = null;
    private ?string $title = null;
    private ?string $content = null;
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }
}
