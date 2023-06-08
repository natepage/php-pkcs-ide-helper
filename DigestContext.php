<?php
namespace Pkcs11;

class DigestContext
{
	public function update(?string $data = null): void
	{
	}


	public function keyUpdate(?object $key = null): void
	{
	}


	public function finalize(): string
	{
	}
}
