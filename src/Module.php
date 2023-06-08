<?php
namespace Pkcs11;

class Module
{
	public function __construct(string $modulePath)
	{
	}


	public function getInfo(): array
	{
	}


	public function getSlots()
	{
	}


	public function getSlotList()
	{
	}


	public function getSlotInfo(int $slotId)
	{
	}


	public function getTokenInfo(int $slotId)
	{
	}


	public function getMechanismList(int $slotId)
	{
	}


	public function getMechanismInfo(int $slotId, int $mechanismId)
	{
	}


	public function initToken(int $slotid, string $label, string $sopin)
	{
	}


	public function openSession(
		int $slotid,
		int $flags,
		?string $application = null,
		?callable $notify = null,
	): \Pkcs11\Session
	{
	}


	public function waitForSlotEvent(?int $php_flags = null)
	{
	}


	public function C_GetInfo(?array $pInfo = null): array
	{
	}


	public function C_GetSlotList(bool $tokenPresent, ?array $pSlotList = null)
	{
	}


	public function C_GetSlotInfo(int $slotId, ?array $pInfo = null)
	{
	}


	public function C_GetTokenInfo(int $slotId, ?array $pInfo = null)
	{
	}


	public function C_GetMechanismList(int $slotId, ?array $pMechanismList = null)
	{
	}


	public function C_GetMechanismInfo(int $slotId, int $type, ?array $pInfo = null)
	{
	}


	public function C_InitToken(int $slotid, string $label, string $sopin)
	{
	}


	public function C_SetPIN(Pkcs11\Session $session, string $oldPin, string $newPin)
	{
	}


	public function C_InitPIN(Pkcs11\Session $session, string $newPin)
	{
	}


	public function C_OpenSession(
		int $slotID,
		int $flags,
		?string $pApplication = null,
		?callable $notify = null,
		?Pkcs11\Session $hSession = null,
	): \Pkcs11\Session
	{
	}


	public function C_CloseSession(Pkcs11\Session $session)
	{
	}


	public function C_GetSessionInfo(Pkcs11\Session $session, ?array $pInfo = null)
	{
	}


	public function C_Login(Pkcs11\Session $session, int $loginType, string $pin)
	{
	}


	public function C_Logout(Pkcs11\Session $session)
	{
	}


	public function C_WaitForSlotEvent(?int $php_flags = null, ?int $php_slotID = null)
	{
	}


	public function C_GenerateKey(
		Pkcs11\Session $session,
		Pkcs11\Mechanism $mechanism,
		array $template,
		?IS_LONG $phKey = null,
	) {
	}


	public function C_GenerateKeyPair(
		Pkcs11\Session $session,
		Pkcs11\Mechanism $mechanism,
		array $pkTemplate,
		array $skTemplate,
		?Pkcs11\Key $phPublicKey = null,
		?Pkcs11\Key $phPrivateKey = null,
	) {
	}


	public function C_DigestInit(Pkcs11\Session $session, Pkcs11\Mechanism $mechanism)
	{
	}


	public function C_Digest(Pkcs11\Session $session, string $data, ?string $digest = null)
	{
	}


	public function C_DigestUpdate(Pkcs11\Session $session, string $part)
	{
	}


	public function C_DigestKey(Pkcs11\Session $session, Pkcs11\Key $key)
	{
	}


	public function C_DigestFinal(Pkcs11\Session $session, ?string $digest = null)
	{
	}


	public function C_SignInit(Pkcs11\Session $session, Pkcs11\Mechanism $mechanism, int $key)
	{
	}


	public function C_Sign(Pkcs11\Session $session, string $data, ?string $signature = null)
	{
	}


	public function C_VerifyInit(Pkcs11\Session $session, Pkcs11\Mechanism $mechanism, int $key)
	{
	}


	public function C_Verify(Pkcs11\Session $session, string $data, string $signature)
	{
	}


	public function C_EncryptInit(Pkcs11\Session $session, Pkcs11\Mechanism $mechanism, int $key)
	{
	}


	public function C_Encrypt(Pkcs11\Session $session, string $data, ?string $encryptedData = null)
	{
	}


	public function C_DecryptInit(Pkcs11\Session $session, Pkcs11\Mechanism $mechanism, int $key)
	{
	}


	public function C_Decrypt(Pkcs11\Session $session, string $encryptedData, ?string $data = null)
	{
	}


	public function C_Wrap(
		Pkcs11\Session $session,
		Pkcs11\Mechanism $mechanism,
		int $keyId,
		int $targetKeyId,
		?string $ciphertext = null,
	) {
	}


	public function C_Unwrap(
		Pkcs11\Session $session,
		Pkcs11\Mechanism $mechanism,
		?int $keyId = null,
		string $encryptedData,
		array $template,
	) {
	}


	public function C_GenerateRandom(Pkcs11\Session $session, int $RandomLen, ?string $pRandomData = null)
	{
	}


	public function C_SeedRandom(Pkcs11\Session $session, string $Seed)
	{
	}


	public function C_CreateObject(Pkcs11\Session $session, array $template, ?Pkcs11\P11Object $phObject = null)
	{
	}


	public function C_FindObjectsInit(Pkcs11\Session $session, array $template)
	{
	}


	public function C_FindObjects(Pkcs11\Session $session, ?array $Objects = null, int $MaxObjectCount)
	{
	}


	public function C_FindObjectsFinal(Pkcs11\Session $session)
	{
	}


	public function C_GetAttributeValue(Pkcs11\Session $session, int $object, array $template)
	{
	}


	public function C_CopyObject(
		Pkcs11\Session $session,
		Pkcs11\P11Object $object,
		array $template,
		?Pkcs11\P11Object $phNewObject = null,
	) {
	}


	public function C_DestroyObject(Pkcs11\Session $session, Pkcs11\P11Object $object)
	{
	}
}
