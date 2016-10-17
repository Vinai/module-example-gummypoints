<?php

namespace VinaiKopp\GummyPoints\CustomerData;

use Magento\Customer\CustomerData\SectionSourceInterface;
use Magento\Customer\Model\Session as CustomerSession;
use VinaiKopp\GummyPoints\Api\GummyPointsRegistryInterface;

class GummyPointsSource implements SectionSourceInterface
{
    /**
     * @var GummyPointsRegistryInterface
     */
    private $gummyPointsRegistry;

    /**
     * @var CustomerSession
     */
    private $customerSession;

    public function __construct(
        GummyPointsRegistryInterface $gummyPointsRegistry,
        CustomerSession $customerSession
    ) {
        $this->gummyPointsRegistry = $gummyPointsRegistry;
        $this->customerSession = $customerSession;
    }

    public function getSectionData()
    {
        return [
            'customer_id' => $this->customerSession->getCustomerId(),
            'gummy_points' => $this->gummyPointsRegistry->get(),
        ];
    }
}
