<?php

namespace VinaiKopp\GummyPoints\Api;

interface GummyPointsRegistryInterface
{
    /**
     * @param int $customerId
     * @return int
     */
    public function getByCustomerId($customerId);

    /**
     * @return int
     */
    public function get();
}
