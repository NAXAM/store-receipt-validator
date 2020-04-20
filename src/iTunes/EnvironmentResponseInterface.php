<?php

namespace ReceiptValidator\iTunes;

interface EnvironmentResponseInterface
{
    public function isSandbox();

    public function isProduction();
}
