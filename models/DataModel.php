<?php

class DataModel
{
    private $firstName;
    private $lastName;
    private $phone;
    private $address;

    public function __construct($firstName, $lastName, $phone, $address) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getAll()
    {
        return [
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'phone' => $this->phone,
            'address' => $this->address
        ];
    }

}