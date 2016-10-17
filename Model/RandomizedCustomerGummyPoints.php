<?php

namespace VinaiKopp\GummyPoints\Model;

class RandomizedCustomerGummyPoints implements CustomerGummyPointsInterface 
{
    /**
     * @param int $customerId
     * @return int
     */
    public function get($customerId)
    {
        return mt_rand(1, 1000);
    }
}
