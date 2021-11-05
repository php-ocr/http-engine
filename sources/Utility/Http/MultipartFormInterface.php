<?php

declare(strict_types=1);

namespace OCR\Utility\Http;

use Psr\Http\Message\StreamInterface;

interface MultipartFormInterface
{
    public function getStream(): StreamInterface;

    public function getBoundary(): string;

    public function getContentType(): string;
}
