<?php
namespace Pkcs11;

class Session
{
	public function login(int $loginType, string $pin)
	{
	}


	public function getInfo()
	{
	}


	public function logout()
	{
	}


	public function initPin(string $pin)
	{
	}


	public function setPin(string $oldPin, string $newPin)
	{
	}


	public function findObjects(array $template): array
	{
	}


	public function createObject(array $template)
	{
	}


	public function copyObject(Pkcs11\P11Object $object, array $template)
	{
	}


	public function destroyObject(Pkcs11\P11Object $object)
	{
	}


	public function digest(Pkcs11\Mechanism $mechanism, string $data)
	{
	}


	public function initializeDigest(Pkcs11\Mechanism $mechanism)
	{
	}


	public function generateKey(Pkcs11\Mechanism $mechanism, array $template)
	{
	}


	public function generateKeyPair(Pkcs11\Mechanism $mechanism, array $pkTemplate, array $skTemplate)
	{
	}


	public function seedRandom(string $seed)
	{
	}


	public function generateRandom(int $length): string
	{
	}


	public function openUri(string $uri)
	{
	}


	public function __debugInfo(): array
	{
	}
}
