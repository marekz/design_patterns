<?php

class Product {

    public function getProduct() {
        return 'Produkt';
    }

}

class Payment {

    public function getPayment() {
        return true;
    }

}

class Customer {

    public function getCustomerData() {
        return 'Dane zamawiającego';
    }

}

/**
 * Fasada zamówienia
 */
class OrderFacade {
    protected $product;
    protected $payment;
    protected $customer;
    
    function __construct() {
        $this->product = new Product();;
        $this->payment = new Payment();;
        $this->customer = new Customer();;
    }
    
    public function prepareOrder(){
        $this->product->getProduct();
        $this->payment->getPayment();
        $this->customer->getCustomerData();
        
        return 'zamówienie przygotowane';
    }
    
}


/**
 * Klient
 */
$order = new OrderFacade();
echo $order->prepareOrder();
