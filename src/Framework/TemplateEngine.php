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

    public function render(string $template, array $data = []): false | string
    {
        extract($data, EXTR_SKIP);
        ob_start();
        include $this->resolve($template);

        $output = ob_get_contents();

        ob_get_clean();

        return $output;
    }

    public function resolve(string $path): string
    {
        return "$this->basePath/$path";
    }
}