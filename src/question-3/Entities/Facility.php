<?php

declare(strict_types=1);

namespace Entities;

use DateTimeImmutable;
use JsonSerializable;
use Helpers\Str;

/**
 * @SWG\Definition()
 */
class Facility implements JsonSerializable
{
    /**
     * Facility Id
     * @var int
     * @SWG\Property()
     */
    protected $id;

    /**
     * Location Code
     * @var string
     * @SWG\Property()
     */
    protected $location_code;

    /**
     * Name
     * @var string
     * @SWG\Property()
     */
    protected $name;

    /**
     * Street Address
     * @var string
     * @SWG\Property()
     */
    protected $street_address;

    /**
     * City
     * @var string
     * @SWG\Property()
     */
    protected $city;

    /**
     * County
     * @var string
     * @SWG\Property()
     */
    protected $county;

    /**
     * State
     * @var string
     * @SWG\Property()
     */
    protected $state;

    /**
     * Postal Code
     * @var string
     * @SWG\Property()
     */
    protected $postal_code;

    /**
     * Latitude
     * @var float
     * @SWG\Property()
     */
    protected $latitude;

    /**
     * Longitude
     * @var float
     * @SWG\Property()
     */
    protected $longitude;

    /**
     * Phone Number
     * @var string
     * @SWG\Property()
     */
    protected $phone;

    /**
     * Contact Email
     * @var string
     * @SWG\Property()
     */
    protected $contact_email;

    /**
     * Business Rules Group Id
     * @var int
     * @SWG\Property()
     */
    protected $bre_group_id;

    public function __construct()
    {
        $this->created_at = new DateTimeImmutable();
        $this->updated_at = new DateTimeImmutable();
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'location_code' => $this->getLocationCode(),
            'name' => $this->getName(),
            'street_address' => $this->getStreetAddress(),
            'city' => $this->getCity(),
            'county' => $this->getCounty(),
            'formatted_county' => $this->getFormattedCounty(),
            'state' => $this->getState(),
            'postal_code' => $this->getPostalCode(),
            'latitude' => $this->getLatitude(),
            'longitude' => $this->getLongitude(),
            'phone' => $this->getPhone(),
            'contact_email' => $this->getContactEmail(),
            'bre_group_id' => $this->getBreGroupId(),
        ];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getLocationCode(): ?string
    {
        return $this->location_code;
    }

    public function setLocationCode(string $location_code): void
    {
        $this->location_code = $location_code;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getStreetAddress(): ?string
    {
        return $this->street_address;
    }

    public function setStreetAddress(string $street_address): void
    {
        $this->street_address = $street_address;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getCounty(): ?string
    {
        return $this->county;
    }

    public function setCounty(string $county): void
    {
        $this->county = $county;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(string $postal_code): void
    {
        $this->postal_code = $postal_code;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getContactEmail(): ?string
    {
        return $this->contact_email;
    }

    public function setContactEmail(string $contact_email): void
    {
        $this->contact_email = $contact_email;
    }

    public function getBreGroupId(): ?int
    {
        return $this->bre_group_id;
    }

    public function setBreGroupId(int $bre_group_id): void
    {
        $this->bre_group_id = $bre_group_id;
    }

    public function getFormattedCounty(): string
    {
        if (!$this->county) {
            return '';
        }

        if (!$this->state) {
            return '';
        }

        switch ($this->state) {
            case 'AK':
                return "$this->county Borough";

            case 'LA':
                return "$this->county Parish";

            default:
                return "$this->county County";
        }
    }

    public function getRouteParams(): array
    {
        $routeState = Str::slug($this->state);
        $routeCounty = Str::slug($this->getFormattedCounty());
        $routeCity = Str::slug($this->city);
        $routeLocationCode = Str::slug($this->location_code);

        return [
            'state' => $routeState,
            'county' => $routeCounty,
            'city' => $routeCity,
            'location_code' => $routeLocationCode,
        ];
    }
}
