<?php
namespace Namluu\Middleware\Observer;

class CheckoutInit implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $quote = $observer->getControllerAction()->getOnepage()->getQuote();
        // call API check stock by product SKU in Quote Items

        return $this;
    }
}