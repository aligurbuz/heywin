<?php

namespace App\Models\Entities;

class EntityMap
{
    /**
     * @param object $query
     * @return CustomerBalance
     */
    public function customerBalance(object $query) : CustomerBalance
    {
        return new CustomerBalance($query);
    }
    
    /**
     * @param object $query
     * @return PaymentType
     */
    public function paymentType(object $query) : PaymentType
    {
        return new PaymentType($query);
    }
    
    /**
     * @param object $query
     * @return Order
     */
    public function order(object $query) : Order
    {
        return new Order($query);
    }
    
    /**
     * @param object $query
     * @return Ticket
     */
    public function ticket(object $query) : Ticket
    {
        return new Ticket($query);
    }
    
    /**
     * @param object $query
     * @return DrawCountry
     */
    public function drawCountry(object $query) : DrawCountry
    {
        return new DrawCountry($query);
    }
    
    /**
     * @param object $query
     * @return Draw
     */
    public function draw(object $query) : Draw
    {
        return new Draw($query);
    }
    
    /**
     * @param object $query
     * @return ProductImage
     */
    public function productImage(object $query) : ProductImage
    {
        return new ProductImage($query);
    }
    
    /**
     * @param object $query
     * @return ProductCurrency
     */
    public function productCurrency(object $query) : ProductCurrency
    {
        return new ProductCurrency($query);
    }
    
    /**
     * @param object $query
     * @return ProductCategory
     */
    public function productCategory(object $query) : ProductCategory
    {
        return new ProductCategory($query);
    }
    
    /**
     * @param object $query
     * @return Category
     */
    public function category(object $query) : Category
    {
        return new Category($query);
    }
    
    /**
     * @param object $query
     * @return Product
     */
    public function product(object $query) : Product
    {
        return new Product($query);
    }
    
    /**
     * @param object $query
     * @return Gender
     */
    public function gender(object $query): Gender
    {
        return new Gender($query);
    }

    /**
     * @param object $query
     * @return PasswordChange
     */
    public function passwordChange(object $query): PasswordChange
    {
        return new PasswordChange($query);
    }

    /**
     * @param object $query
     * @return CustomerContact
     */
    public function customerContact(object $query): CustomerContact
    {
        return new CustomerContact($query);
    }

    /**
     * @param object $query
     * @return CustomerImage
     */
    public function customerImage(object $query): CustomerImage
    {
        return new CustomerImage($query);
    }

    /**
     * @param object $query
     * @return CustomerAge
     */
    public function customerAge(object $query): CustomerAge
    {
        return new CustomerAge($query);
    }

    /**
     * @param object $query
     * @return CustomerGender
     */
    public function customerGender(object $query): CustomerGender
    {
        return new CustomerGender($query);
    }

    /**
     * @param object $query
     * @return UserActivation
     */
    public function userActivation(object $query): UserActivation
    {
        return new UserActivation($query);
    }

    /**
     * @param object $query
     * @return Customer
     */
    public function customer(object $query): Customer
    {
        return new Customer($query);
    }

    /**
     * @param object $query
     * @return Excel
     */
    public function excel(object $query): Excel
    {
        return new Excel($query);
    }

    /**
     * @param object $query
     * @return Registration
     */
    public function registration(object $query): Registration
    {
        return new Registration($query);
    }

    /**
     * @param object $query
     * @return UserPhoto
     */
    public function userPhoto(object $query): UserPhoto
    {
        return new UserPhoto($query);
    }

    /**
     * @param object $query
     * @return Timezone
     */
    public function timezone(object $query): Timezone
    {
        return new Timezone($query);
    }

    /**
     * @param object $query
     * @return Currency
     */
    public function currency(object $query): Currency
    {
        return new Currency($query);
    }

    /**
     * @param object $query
     * @return District
     */
    public function district(object $query): District
    {
        return new District($query);
    }

    /**
     * @param object $query
     * @return City
     */
    public function city(object $query): City
    {
        return new City($query);
    }

    /**
     * @param object $query
     * @return TableChange
     */
    public function tableChange(object $query): TableChange
    {
        return new TableChange($query);
    }

    /**
     * @param object $query
     * @return Permission
     */
    public function permission(object $query): Permission
    {
        return new Permission($query);
    }

    /**
     * @param object $query
     * @return Role
     */
    public function role(object $query): Role
    {
        return new Role($query);
    }

    /**
     * @param object $query
     * @return SuperAdmin
     */
    public function superAdmin(object $query): SuperAdmin
    {
        return new SuperAdmin($query);
    }

    /**
     * @param object $query
     * @return Language
     */
    public function language(object $query): Language
    {
        return new Language($query);
    }

    /**
     * @param object $query
     * @return Localization
     */
    public function localization(object $query): Localization
    {
        return new Localization($query);
    }

    /**
     * @param object $query
     * @return Country
     */
    public function country(object $query): Country
    {
        return new Country($query);
    }

    /**
     * @param object $query
     * @return User
     */
    public function user(object $query): User
    {
        return new User($query);
    }
}
