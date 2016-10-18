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
        return 0 == $customerId ?
            0 :
            mt_rand(1, 1000);
    }
}
