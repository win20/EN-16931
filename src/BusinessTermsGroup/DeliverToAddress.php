<?php

declare(strict_types=1);

namespace Tiime\EN16931\BusinessTermsGroup;

use Tiime\EN16931\DataType\CountryAlpha2Code;

/**
 * BG-15
 * A group of business terms providing information about the address to which
 * goods and services invoiced were or are delivered.
 */
class DeliverToAddress
{
    /**
     * BT-37
     * The main address line in an address.
     */
    private ?string $line1;

    /**
     * BT-76
     * An additional address line in an address that can be used to give further details supplementing the main line.
     */
    private ?string $line2;

    /**
     * BT-165
     * An additional address line in an address that can be used to give further details supplementing the main line.
     */
    private ?string $line3;

    /**
     * BT-77
     * The common name of the city, town or village, where the Seller address is located.
     */
    private ?string $city;

    /**
     * BT-78
     * The identifier for an addressable group of properties according to the relevant postal service.
     */
    private ?string $postCode;

    /**
     * BT-79
     * The subdivision of a country.
     */
    private ?string $countrySubdivision;

    /**
     * BT-80
     * A code that identifies the country.
     */
    private CountryAlpha2Code $countryCode;

    public function __construct(CountryAlpha2Code $countryCode)
    {
        $this->line1 = null;
        $this->line2 = null;
        $this->line3 = null;
        $this->city = null;
        $this->postCode = null;
        $this->countrySubdivision = null;
        $this->countryCode = $countryCode;
    }

    public function getLine1(): ?string
    {
        return $this->line1;
    }

    public function setLine1(?string $line1): self
    {
        $this->line1 = $line1;

        return $this;
    }

    public function getLine2(): ?string
    {
        return $this->line2;
    }

    public function setLine2(?string $line2): self
    {
        $this->line2 = $line2;

        return $this;
    }

    public function getLine3(): ?string
    {
        return $this->line3;
    }

    public function setLine3(?string $line3): self
    {
        $this->line3 = $line3;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    public function setPostCode(?string $postCode): self
    {
        $this->postCode = $postCode;

        return $this;
    }

    public function getCountrySubdivision(): ?string
    {
        return $this->countrySubdivision;
    }

    public function setCountrySubdivision(?string $countrySubdivision): self
    {
        $this->countrySubdivision = $countrySubdivision;

        return $this;
    }

    public function getCountryCode(): CountryAlpha2Code
    {
        return $this->countryCode;
    }

    public function setCountryCode(CountryAlpha2Code $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }
}
