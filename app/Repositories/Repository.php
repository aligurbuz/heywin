<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\Resources\Countries\Contracts\CitiesRepositoryContract;
use App\Repositories\Resources\Countries\Contracts\CountriesRepositoryContract;
use App\Repositories\Resources\Countries\Contracts\DistrictsRepositoryContract;
use App\Repositories\Resources\Currencies\Contracts\CurrenciesRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerAgesRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerContactsRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerGendersRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerImagesRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerProfilesRepositoryContract;
use App\Repositories\Resources\Definition\Contracts\DefinitionGendersRepositoryContract;
use App\Repositories\Resources\Gate\Contracts\PermissionsRepositoryContract;
use App\Repositories\Resources\Gate\Contracts\RolesRepositoryContract;
use App\Repositories\Resources\Localizations\Contracts\LanguageRepositoryContract;
use App\Repositories\Resources\Localizations\Contracts\LocalizationsRepositoryContract;
use App\Repositories\Resources\Logger\Contracts\LoggerRepositoryContract;
use App\Repositories\Resources\Password\Contracts\PasswordChangesRepositoryContract;
use App\Repositories\Resources\Registration\Contracts\RegistrationRepositoryContract;
use App\Repositories\Resources\SuperAdmins\Contracts\SuperAdminsRepositoryContract;
use App\Repositories\Resources\Support\Contracts\ExcelRepositoryContract;
use App\Repositories\Resources\Timezones\Contracts\TimezonesRepositoryContract;
use App\Repositories\Resources\User\Contracts\PhotosRepositoryContract;
use App\Repositories\Resources\User\Contracts\UserActivationsRepositoryContract;
use App\Repositories\Resources\User\Contracts\UserRepositoryContract;
use App\Repositories\Resources\User\Contracts\UserCountriesRepositoryContract;
use App\Repositories\Resources\Orders\Contracts\OrdersCommentRepositoryContract;
use App\Repositories\Resources\Images\Contracts\ImagesSliderRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerReferersRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerPaymentsRepositoryContract;
use App\Repositories\Resources\Front\Contracts\FrontLangsRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerBalancesRepositoryContract;
use App\Repositories\Resources\Payment\Contracts\PaymentTypesRepositoryContract;
use App\Repositories\Resources\Orders\Contracts\OrdersRepositoryContract;
use App\Repositories\Resources\Store\Contracts\StoreDrawTicketsRepositoryContract;
use App\Repositories\Resources\Store\Contracts\StoreDrawCountriesRepositoryContract;
use App\Repositories\Resources\Store\Contracts\StoreDrawsRepositoryContract;
use App\Repositories\Resources\Images\Contracts\ImagesProductRepositoryContract;
use App\Repositories\Resources\Store\Contracts\StoreProductCurrenciesRepositoryContract;
use App\Repositories\Resources\Store\Contracts\StoreProductCategoriesRepositoryContract;
use App\Repositories\Resources\Store\Contracts\StoreCategoriesRepositoryContract;
use App\Repositories\Resources\Store\Contracts\StoreProductsRepositoryContract;

/**
 * Class Repository
 * @package App\Repositories
 */
class Repository
{
    /**
     * get userCountry repository instance
     *
     * @return UserCountriesRepositoryContract
     */
    public static function userCountry() : UserCountriesRepositoryContract
    {
        return app()->get(UserCountriesRepositoryContract::class);
    }
    
    /**
     * get orderComment repository instance
     *
     * @return OrdersCommentRepositoryContract
     */
    public static function orderComment() : OrdersCommentRepositoryContract
    {
        return app()->get(OrdersCommentRepositoryContract::class);
    }
    
    /**
     * get slider repository instance
     *
     * @return ImagesSliderRepositoryContract
     */
    public static function slider() : ImagesSliderRepositoryContract
    {
        return app()->get(ImagesSliderRepositoryContract::class);
    }
    
    /**
     * get customerReferer repository instance
     *
     * @return CustomerReferersRepositoryContract
     */
    public static function customerReferer() : CustomerReferersRepositoryContract
    {
        return app()->get(CustomerReferersRepositoryContract::class);
    }
    
    /**
     * get customerPayment repository instance
     *
     * @return CustomerPaymentsRepositoryContract
     */
    public static function customerPayment() : CustomerPaymentsRepositoryContract
    {
        return app()->get(CustomerPaymentsRepositoryContract::class);
    }
    
    /**
     * get frontLang repository instance
     *
     * @return FrontLangsRepositoryContract
     */
    public static function frontLang() : FrontLangsRepositoryContract
    {
        return app()->get(FrontLangsRepositoryContract::class);
    }
    
    /**
     * get customerBalance repository instance
     *
     * @return CustomerBalancesRepositoryContract
     */
    public static function customerBalance() : CustomerBalancesRepositoryContract
    {
        return app()->get(CustomerBalancesRepositoryContract::class);
    }
    
    /**
     * get paymentType repository instance
     *
     * @return PaymentTypesRepositoryContract
     */
    public static function paymentType() : PaymentTypesRepositoryContract
    {
        return app()->get(PaymentTypesRepositoryContract::class);
    }
    
    /**
     * get order repository instance
     *
     * @return OrdersRepositoryContract
     */
    public static function order() : OrdersRepositoryContract
    {
        return app()->get(OrdersRepositoryContract::class);
    }
    
    /**
     * get ticket repository instance
     *
     * @return StoreDrawTicketsRepositoryContract
     */
    public static function ticket() : StoreDrawTicketsRepositoryContract
    {
        return app()->get(StoreDrawTicketsRepositoryContract::class);
    }
    
    /**
     * get drawCountry repository instance
     *
     * @return StoreDrawCountriesRepositoryContract
     */
    public static function drawCountry() : StoreDrawCountriesRepositoryContract
    {
        return app()->get(StoreDrawCountriesRepositoryContract::class);
    }
    
    /**
     * get draw repository instance
     *
     * @return StoreDrawsRepositoryContract
     */
    public static function draw() : StoreDrawsRepositoryContract
    {
        return app()->get(StoreDrawsRepositoryContract::class);
    }
    
    /**
     * get productImage repository instance
     *
     * @return ImagesProductRepositoryContract
     */
    public static function productImage() : ImagesProductRepositoryContract
    {
        return app()->get(ImagesProductRepositoryContract::class);
    }
    
    /**
     * get productCurrency repository instance
     *
     * @return StoreProductCurrenciesRepositoryContract
     */
    public static function productCurrency() : StoreProductCurrenciesRepositoryContract
    {
        return app()->get(StoreProductCurrenciesRepositoryContract::class);
    }
    
    /**
     * get productCategory repository instance
     *
     * @return StoreProductCategoriesRepositoryContract
     */
    public static function productCategory() : StoreProductCategoriesRepositoryContract
    {
        return app()->get(StoreProductCategoriesRepositoryContract::class);
    }
    
    /**
     * get category repository instance
     *
     * @return StoreCategoriesRepositoryContract
     */
    public static function category() : StoreCategoriesRepositoryContract
    {
        return app()->get(StoreCategoriesRepositoryContract::class);
    }
    
    /**
     * get product repository instance
     *
     * @return StoreProductsRepositoryContract
     */
    public static function product() : StoreProductsRepositoryContract
    {
        return app()->get(StoreProductsRepositoryContract::class);
    }
    
    /**
     * get gender repository instance
     *
     * @return DefinitionGendersRepositoryContract
     */
    public static function gender(): DefinitionGendersRepositoryContract
    {
        return app()->get(DefinitionGendersRepositoryContract::class);
    }

    /**
     * get passwordChange repository instance
     *
     * @return PasswordChangesRepositoryContract
     */
    public static function passwordChange(): PasswordChangesRepositoryContract
    {
        return app()->get(PasswordChangesRepositoryContract::class);
    }

    /**
     * get customerContact repository instance
     *
     * @return CustomerContactsRepositoryContract
     */
    public static function customerContact(): CustomerContactsRepositoryContract
    {
        return app()->get(CustomerContactsRepositoryContract::class);
    }

    /**
     * get customerImage repository instance
     *
     * @return CustomerImagesRepositoryContract
     */
    public static function customerImage(): CustomerImagesRepositoryContract
    {
        return app()->get(CustomerImagesRepositoryContract::class);
    }

    /**
     * get customerAge repository instance
     *
     * @return CustomerAgesRepositoryContract
     */
    public static function customerAge(): CustomerAgesRepositoryContract
    {
        return app()->get(CustomerAgesRepositoryContract::class);
    }

    /**
     * get customerGender repository instance
     *
     * @return CustomerGendersRepositoryContract
     */
    public static function customerGender(): CustomerGendersRepositoryContract
    {
        return app()->get(CustomerGendersRepositoryContract::class);
    }

    /**
     * get userActivation repository instance
     *
     * @return UserActivationsRepositoryContract
     */
    public static function userActivation(): UserActivationsRepositoryContract
    {
        return app()->get(UserActivationsRepositoryContract::class);
    }

    /**
     * get customer repository instance
     *
     * @return CustomerProfilesRepositoryContract
     */
    public static function customer(): CustomerProfilesRepositoryContract
    {
        return app()->get(CustomerProfilesRepositoryContract::class);
    }

    /**
     * get excel repository instance
     *
     * @return ExcelRepositoryContract
     */
    public static function excel(): ExcelRepositoryContract
    {
        return app()->get(ExcelRepositoryContract::class);
    }

    /**
     * get registration repository instance
     *
     * @return RegistrationRepositoryContract
     */
    public static function registration(): RegistrationRepositoryContract
    {
        return app()->get(RegistrationRepositoryContract::class);
    }

    /**
     * get userPhoto repository instance
     *
     * @return PhotosRepositoryContract
     */
    public static function userPhoto(): PhotosRepositoryContract
    {
        return app()->get(PhotosRepositoryContract::class);
    }

    /**
     * get timezone repository instance
     *
     * @return TimezonesRepositoryContract
     */
    public static function timezone(): TimezonesRepositoryContract
    {
        return app()->get(TimezonesRepositoryContract::class);
    }

    /**
     * get currency repository instance
     *
     * @return CurrenciesRepositoryContract
     */
    public static function currency(): CurrenciesRepositoryContract
    {
        return app()->get(CurrenciesRepositoryContract::class);
    }

    /**
     * get district repository instance
     *
     * @return DistrictsRepositoryContract
     */
    public static function district(): DistrictsRepositoryContract
    {
        return app()->get(DistrictsRepositoryContract::class);
    }

    /**
     * get city repository instance
     *
     * @return CitiesRepositoryContract
     */
    public static function city(): CitiesRepositoryContract
    {
        return app()->get(CitiesRepositoryContract::class);
    }

    /**
     * get permission repository instance
     *
     * @return PermissionsRepositoryContract
     */
    public static function permission(): PermissionsRepositoryContract
    {
        return app()->get(PermissionsRepositoryContract::class);
    }

    /**
     * get role repository instance
     *
     * @return RolesRepositoryContract
     */
    public static function role(): RolesRepositoryContract
    {
        return app()->get(RolesRepositoryContract::class);
    }

    /**
     * get superAdmin repository instance
     *
     * @return SuperAdminsRepositoryContract
     */
    public static function superAdmin(): SuperAdminsRepositoryContract
    {
        return app()->get(SuperAdminsRepositoryContract::class);
    }

    /**
     * get language repository instance
     *
     * @return LanguageRepositoryContract
     */
    public static function language(): LanguageRepositoryContract
    {
        return app()->get(LanguageRepositoryContract::class);
    }

    /**
     * get localization repository instance
     *
     * @return LocalizationsRepositoryContract
     */
    public static function localization(): LocalizationsRepositoryContract
    {
        return app()->get(LocalizationsRepositoryContract::class);
    }

    /**
     * get country repository instance
     *
     * @return CountriesRepositoryContract
     */
    public static function country(): CountriesRepositoryContract
    {
        return app()->get(CountriesRepositoryContract::class);
    }

    /**
     * get user repository instance
     *
     * @return UserRepositoryContract
     */
    public static function user(): UserRepositoryContract
    {
        return app()->get(UserRepositoryContract::class);
    }

    /**
     * get logger repository instance
     *
     * @return LoggerRepositoryContract
     */
    public static function logger(): LoggerRepositoryContract
    {
        return app()->get(LoggerRepositoryContract::class);
    }

    /**
     * get call static for repository
     *
     * @param string|null $name
     * @param array $arguments
     * @return bool;
     */
    public static function __callStatic(?string $name, array $arguments = []): bool
    {
        return false;
    }
}
