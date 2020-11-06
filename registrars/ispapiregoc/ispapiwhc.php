<?php

/**
 * ISPAPI Registrar Module for REGOC
 *
 * @author HEXONET GmbH <support@hexonet.net>
 */

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

use WHMCS\Module\Registrar\Ispapi\Ispapi as Ispapi;
use WHMCS\Module\Registrar\Ispapi\DomainTransfer as HXDomainTransfer;
use WHMCS\Module\Registrar\Ispapi\Domain as HXDomain;

function ispapiregoc_getConfigArray($params)
{
    $cfg = ispapi_getConfigArray($params);
    $cfg["FriendlyName"]["Value"] = preg_replace("/^ISPAPI /", "ISPAPI REGOC ", $cfg["FriendlyName"]["Value"]);
    $cfg["Description"]["Value"] = "";
    return $cfg;
}

function ispapiregoc_TransferDomain($params)
{
    return ispapi_TransferDomain($params);
}

function ispapiregoc_TransferSync($params)
{
    return ispapi_TransferSync($params);
}

function ispapiregoc_Sync($params)
{
    return ispapi_Sync($params);
}

function ispapiregoc_ClientAreaCustomButtonArray($params)
{
    return ispapi_ClientAreaCustomButtonArray($params);
}

function ispapiregoc_CheckAvailability($params)
{
    return ispapi_CheckAvailability($params);
}

function ispapiregoc_GetDomainSuggestions($params)
{
    return ispapi_GetDomainSuggestions($params);
}

function ispapiregoc_DomainSuggestionOptions($params)
{
    return ispapi_DomainSuggestionOptions($params);
}

function ispapiregoc_GetPremiumPrice($params)
{
    return ispapi__GetPremiumPrice($params);
}

function ispapiregoc_ClientArea($params)
{
    return ispapi_ClientArea($params);
}

function ispapiregoc_GetRegistrarLock($params)
{
    return ispapi_GetRegistrarLock($params);
}

function ispapiregoc_SaveRegistrarLock($params)
{
    return ispapi_SaveRegistrarLock($params);
}

function ispapiregoc_GetDomainInformation($params)
{
    return ispapi_GetDomainInformation($params);
}

function ispapiregoc_ResendIRTPVerificationEmail($params)
{
    return ispapi_ResendIRTPVerificationEmail($params);
}

function ispapiregoc_GetEPPCode($params)
{
    return ispapi_GetEPPCode($params);
}

function ispapiregoc_GetNameservers($params)
{
    return ispapi_GetNameservers($params);
}

function ispapiregoc_SaveNameservers($params)
{
    return ispapi_SaveNameservers($params);
}

function ispapiregoc_GetDNS($params)
{
    return ispapi_GetDNS($params);
}

function ispapiregoc_SaveDNS($params)
{
    return ispapi_SaveDNS($params);
}

function ispapiregoc_GetEmailForwarding($params)
{
    return ispapi_GetEmailForwarding($params);
}

function ispapiregoc_SaveEmailForwarding($params)
{
    return ispapi_SaveEmailForwarding($params);
}

function ispapiregoc_GetContactDetails($params)
{
    return ispapi_GetContactDetails($params);
}

function ispapiregoc_SaveContactDetails($params)
{
    return ispapi_SaveContactDetails($params);
}

function ispapiregoc_RegisterNameserver($params)
{
    return ispapi_RegisterNameserver($params);
}

function ispapiregoc_ModifyNameserver($params)
{
    return ispapi_ModifyNameserver($params);
}

function ispapiregoc_DeleteNameserver($params)
{
    return ispapi_DeleteNameserver($params);
}

function ispapiregoc_IDProtectToggle($params)
{
    return ispapi_IDProtectToggle($params);
}

function ispapiregoc_RegisterDomain($params)
{
    return ispapi_RegisterDomain($params);
}

function ispapiregoc_RenewDomain($params)
{
    return ispapi_RenewDomain($params);
}

function ispapiregoc_ReleaseDomain($params)
{
    return ispapi_ReleaseDomain($params);
}

function ispapiregoc_RequestDelete($params)
{
    return ispapi_RequestDelete($params);
}

function ispapiregoc_getTLDPricing($params)
{
    return ispapi_getTLDPricing($params);
}
