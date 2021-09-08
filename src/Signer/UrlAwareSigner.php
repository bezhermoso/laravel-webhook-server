<?php

namespace Spatie\WebhookServer\Signer;

interface UrlAwareSigner extends Signer
{
    public function withUrl(string $url);
}
