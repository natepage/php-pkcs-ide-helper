<?php

namespace Pkcs11;

class VerificationContext
{
    public function finalize(?string $signature = null): bool
    {
    }

    public function update(?string $data = null): void
    {
    }
}
