<?php

namespace Pkcs11;

class Session
{
    public function __debugInfo(): array
    {
    }

    public function copyObject(P11Object $object, array $template)
    {
    }

    public function createObject(array $template)
    {
    }

    public function destroyObject(P11Object $object)
    {
    }

    public function digest(Mechanism $mechanism, string $data)
    {
    }

    public function findObjects(array $template): array
    {
    }

    public function generateKey(Mechanism $mechanism, array $template)
    {
    }

    public function generateKeyPair(Mechanism $mechanism, array $pkTemplate, array $skTemplate)
    {
    }

    public function generateRandom(int $length): string
    {
    }

    public function getInfo()
    {
    }

    public function initPin(string $pin)
    {
    }

    public function initializeDigest(Mechanism $mechanism)
    {
    }

    public function login(int $loginType, string $pin)
    {
    }

    public function logout()
    {
    }

    public function openUri(string $uri)
    {
    }

    public function seedRandom(string $seed)
    {
    }

    public function setPin(string $oldPin, string $newPin)
    {
    }
}
