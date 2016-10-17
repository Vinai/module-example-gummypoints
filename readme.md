# Customer GummyPoints

## Very simple example API endpoint for Magento 2.

The purpose of this module is to provide an example API endpoint
for frontend development examples.

## Installation

Install via composer

`composer require vinaikopp/module-example-gummypoints ^0.1`

## Usage

The purpose of the module is not to demonstrate a sophisticated endpoint,
but rather to provide a simple source of data for doing FPC related
experiments and exercises.
 
**API Endpoint**: /rest/V1/customer_gummypoints

The API endpoint can only be accessed by logged in customers and
will return a random integer value.


**API Endpoint**: /rest/V1/customer_gummypoints/:customerId

The API endpoint is only open to admins authorized to manage customers.
It will return a random integer value.

The module also provides a customer data section with the code
`customer-gummypoints`. It is refreshed during login, logout and
`checkout/onepage/saveOrder` actions.
