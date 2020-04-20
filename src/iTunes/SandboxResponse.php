<?php

namespace ReceiptValidator\iTunes;

class SandboxResponse extends AbstractResponse implements ResponseInterface
{
    public function isProduction()
    {
        return false;
    }

    public function isSandbox()
    {
        return true;
    }
}
