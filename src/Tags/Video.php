<?php

namespace Spatie\Sitemap\Tags;

class Video
{
    public string $url;

    public string $type;

    public static function create(string $url, string $type = '')
    {
        return new static($url, $type);
    }

    public function __construct(string $url, string $type = '')
    {
        $this->setUrl($url);

        $this->setType($type);
    }

    public function setUrl(string $url = '')
    {
        $this->url = $url;

        return $this;
    }

    public function setType(string $type = '')
    {
        $this->type = $type;

        return $this;
    }
}
