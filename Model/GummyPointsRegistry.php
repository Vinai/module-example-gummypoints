<?php

namespace VinaiKopp\GummyPoints\Model;

use Magento\Customer\Model\Session as CustomerSession;
use VinaiKopp\GummyPoints\Api\GummyPointsRegistryInterface;

class GummyPointsRegistry implements GummyPointsRegistryInterface
{
    /**
     * @var CustomerGummyPointsInterface
     */
    private $customerGummyPoints;

    /**
     * @var CustomerSession
     */
    private $customerSession;

    public function __construct(CustomerGummyPointsInterface $customerGummyPoints, CustomerSession $customerSession)
    {
        $this->customerGummyPoints = $customerGummyPoints;
        $this->customerSession = $customerSession;
    }
    
    /**
     * @param int $customerId
     * @return int
     */
    public function getByCustomerId($customerId)
    {
        return $this->customerGummyPoints->get($customerId);
    }

    /**
     * @return int
     */
    public function get()
    {
        return $this->customerGummyPoints->get($this->customerSession->getCustomerId());
    }
}
