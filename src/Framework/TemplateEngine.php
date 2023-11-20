<?php

declare(strict_types=1);

namespace Framework;

class TemplateEngine
{
    private string $basePath;

    public function __construct(string $basePath)
    {
        $this->basePath = $basePath;
    }

    public function render(string $template, array $data = []): void
    {
        extract($data, EXTR_SKIP);
        include "$this->basePath/$template";
    }
}