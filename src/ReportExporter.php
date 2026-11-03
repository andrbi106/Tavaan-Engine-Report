<?php

declare(strict_types=1);

namespace Tavaan\Engine\Report;

final class ReportExporter
{
    public function csv(/* ... */): mixed
    {
        return null;
    }
    public function xlsx(/* ... */): mixed
    {
        return null;
    }
    public function html(/* ... */): mixed
    {
        return null;
    }
    public function json(/* ... */): mixed
    {
        $d = json_decode($this->getContent(), true); return $key === null ? $d : ($d[$key] ?? $default);
    }
    public function pdf(/* ... */): mixed
    {
        return null;
    }
    public function stream(/* ... */): mixed
    {
        return null;
    }
}
