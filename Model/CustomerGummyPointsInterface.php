<?php

namespace VinaiKopp\GummyPoints\Model;

interface CustomerGummyPointsInterface
{
    /**
     * @param int $customerId
     * @return int
     */
    public function get($customerId);
}
