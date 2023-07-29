<?php

namespace Pkcs11;

class Key
{
    public function decrypt(object $mechanism, string $ciphertext): string
    {
    }

    public function derive(object $mechanism, array $template): void
    {
    }

    public function encrypt(object $mechanism, string $plaintext): string
    {
    }

    public function getAttributeValue(array $attributeIds)
    {
    }

    public function getSize()
    {
    }

    public function initializeDecryption(object $mechanism): void
    {
    }

    public function initializeEncryption(object $mechanism): void
    {
    }

    public function initializeSignature(object $mechanism): void
    {
    }

    public function initializeVerification(object $mechanism): void
    {
    }

    public function sign(object $mechanism, string $data): string
    {
    }

    public function unwrap(object $mechanism, string $ciphertext, array $template): void
    {
    }

    public function verify(object $mechanism, string $data, string $signature): bool
    {
    }

    public function wrap(object $mechanism, object $key): string
    {
    }
}
