<?php

namespace ReceiptValidator\iTunes;

class ProductionResponse extends AbstractResponse implements ResponseInterface
{
    public function isProduction()
    {
        return true;
    }

    public function isSandbox()
    {
        return false;
    }
}
