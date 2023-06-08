<?php
namespace Pkcs11;

class VerificationContext
{
	public function update(?string $data = null): void
	{
	}


	public function finalize(?string $signature = null): bool
	{
	}
}
