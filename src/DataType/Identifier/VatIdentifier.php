<?php

namespace Tiime\EN16931\DataType\Identifier;

use Tiime\EN16931\DataType\CountryAlpha2Code;

class VatIdentifier
{
    private string $value;

    public function __construct(string $value)
    {
        $countryCode = substr($value, 0, 2);

        if (null === CountryAlpha2Code::tryFrom($countryCode) && $countryCode !== 'EL') {
            throw new \Exception('@todo');
        }

        $this->value = $value;

        // @todo : Verification for length ? 13 SellerTaxRepresentativeTradeParty / 15 Buyer / 14 Seller (Annexe 1)
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
