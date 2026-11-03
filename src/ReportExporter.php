<?php

declare(strict_types=1);

namespace Tavaan\Engine\Report;

final class ReportExporter
{
    public function csv()
    {
        return null;
    }
    public function xlsx()
    {
        return null;
    }
    public function html()
    {
        return null;
    }
    public function json(?string $key = null, mixed $default = null): string
    {
        $d = json_decode($this->getContent(), true); return $key === null ? $d : ($d[$key] ?? $default);
    }
    public function pdf()
    {
        return null;
    }
    public function stream()
    {
        return null;
    }
}
