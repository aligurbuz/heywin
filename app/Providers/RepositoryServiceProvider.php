<?php

namespace App\Providers;

use App\Repositories\Resources\Countries\CitiesRepository;
use App\Repositories\Resources\Countries\Contracts\CitiesRepositoryContract;
use App\Repositories\Resources\Countries\Contracts\CountriesRepositoryContract;
use App\Repositories\Resources\Countries\Contracts\DistrictsRepositoryContract;
use App\Repositories\Resources\Countries\CountriesRepository;
use App\Repositories\Resources\Countries\DistrictsRepository;
use App\Repositories\Resources\Currencies\Contracts\CurrenciesRepositoryContract;
use App\Repositories\Resources\Currencies\CurrenciesRepository;
use App\Repositories\Resources\Customer\AgesRepository as CustomerAgesRepository;
use App\Repositories\Resources\Customer\ContactsRepository as CustomerContactsRepository;
use App\Repositories\Resources\Customer\Contracts\CustomerAgesRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerContactsRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerGendersRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerImagesRepositoryContract;
use App\Repositories\Resources\Customer\Contracts\CustomerProfilesRepositoryContract;
use App\Repositories\Resources\Customer\GendersRepository as CustomerGendersRepository;
use App\Repositories\Resources\Customer\ImagesRepository as CustomerImagesRepository;
use App\Repositories\Resources\Customer\ProfilesRepository as CustomerProfilesRepository;
use App\Repositories\Resources\Definition\Contracts\DefinitionGendersRepositoryContract;
use App\Repositories\Resources\Definition\GendersRepository as DefinitionGendersRepository;
use App\Repositories\Resources\Gate\Contracts\PermissionsRepositoryContract;
use App\Repositories\Resources\Gate\Contracts\RolesRepositoryContract;
use App\Repositories\Resources\Gate\PermissionsRepository;
use App\Repositories\Resources\Gate\RolesRepository;
use App\Repositories\Resources\Localizations\Contracts\LanguageRepositoryContract;
use App\Repositories\Resources\Localizations\Contracts\LocalizationsRepositoryContract;
use App\Repositories\Resources\Localizations\LanguageRepository;
use App\Repositories\Resources\Localizations\LocalizationsRepository;
use App\Repositories\Resources\Logger\Contracts\LoggerRepositoryContract;
use App\Repositories\Resources\Logger\LoggerRepository;
use App\Repositories\Resources\Password\ChangesRepository as PasswordChangesRepository;
use App\Repositories\Resources\Password\Contracts\PasswordChangesRepositoryContract;
use App\Repositories\Resources\Registration\Contracts\RegistrationRepositoryContract;
use App\Repositories\Resources\Registration\RegistrationRepository;
use App\Repositories\Resources\SuperAdmins\Contracts\SuperAdminsRepositoryContract;
use App\Repositories\Resources\SuperAdmins\SuperAdminsRepository;
use App\Repositories\Resources\Support\Contracts\ExcelRepositoryContract;
use App\Repositories\Resources\Support\ExcelRepository;
use App\Repositories\Resources\Timezones\Contracts\TimezonesRepositoryContract;
use App\Repositories\Resources\Timezones\TimezonesRepository;
use App\Repositories\Resources\User\ActivationsRepository as UserActivationsRepository;
use App\Repositories\Resources\User\Contracts\PhotosRepositoryContract;
use App\Repositories\Resources\User\Contracts\UserActivationsRepositoryContract;
use App\Repositories\Resources\User\Contracts\UserRepositoryContract;
use App\Repositories\Resources\User\PhotosRepository;
use App\Repositories\Resources\User\UserRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Resources\User\Contracts\UserCountriesRepositoryContract;
use App\Repositories\Resources\User\CountriesRepository as UserCountriesRepository;
use App\Repositories\Resources\Orders\Contracts\OrdersCommentRepositoryContract;
use App\Repositories\Resources\Orders\CommentRepository as OrdersCommentRepository;
use App\Repositories\Resources\Images\Contracts\ImagesSliderRepositoryContract;
use App\Repositories\Resources\Images\SliderRepository as ImagesSliderRepository;
use App\Repositories\Resources\Customer\Contracts\CustomerReferersRepositoryContract;
use App\Repositories\Resources\Customer\ReferersRepository as CustomerReferersRepository;
use App\Repositories\Resources\Customer\Contracts\CustomerPaymentsRepositoryContract;
use App\Repositories\Resources\Customer\PaymentsRepository as CustomerPaymentsRepository;
use App\Repositories\Resources\Front\Contracts\FrontLangsRepositoryContract;
use App\Repositories\Resources\Front\LangsRepository as FrontLangsRepository;
use App\Repositories\Resources\Customer\Contracts\CustomerBalancesRepositoryContract;
use App\Repositories\Resources\Customer\BalancesRepository as CustomerBalancesRepository;
use App\Repositories\Resources\Payment\Contracts\PaymentTypesRepositoryContract;
use App\Repositories\Resources\Payment\TypesRepository as PaymentTypesRepository;
use App\Repositories\Resources\Orders\Contracts\OrdersRepositoryContract;
use App\Repositories\Resources\Orders\OrdersRepository as OrdersRepository;
use App\Repositories\Resources\Store\Contracts\StoreDrawTicketsRepositoryContract;
use App\Repositories\Resources\Store\DrawTicketsRepository as StoreDrawTicketsRepository;
use App\Repositories\Resources\Store\Contracts\StoreDrawCountriesRepositoryContract;
use App\Repositories\Resources\Store\DrawCountriesRepository as StoreDrawCountriesRepository;
use App\Repositories\Resources\Store\Contracts\StoreDrawsRepositoryContract;
use App\Repositories\Resources\Store\DrawsRepository as StoreDrawsRepository;
use App\Repositories\Resources\Images\Contracts\ImagesProductRepositoryContract;
use App\Repositories\Resources\Images\ProductRepository as ImagesProductRepository;
use App\Repositories\Resources\Store\Contracts\StoreProductCurrenciesRepositoryContract;
use App\Repositories\Resources\Store\ProductCurrenciesRepository as StoreProductCurrenciesRepository;
use App\Repositories\Resources\Store\Contracts\StoreProductCategoriesRepositoryContract;
use App\Repositories\Resources\Store\ProductCategoriesRepository as StoreProductCategoriesRepository;
use App\Repositories\Resources\Store\Contracts\StoreCategoriesRepositoryContract;
use App\Repositories\Resources\Store\CategoriesRepository as StoreCategoriesRepository;
use App\Repositories\Resources\Store\Contracts\StoreProductsRepositoryContract;
use App\Repositories\Resources\Store\ProductsRepository as StoreProductsRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryContract::class, UserRepository::class);
        $this->app->bind(LoggerRepositoryContract::class, LoggerRepository::class);
        $this->app->bind(CountriesRepositoryContract::class, CountriesRepository::class);
        $this->app->bind(LocalizationsRepositoryContract::class, LocalizationsRepository::class);
        $this->app->bind(LanguageRepositoryContract::class, LanguageRepository::class);
        $this->app->bind(SuperAdminsRepositoryContract::class, SuperAdminsRepository::class);
        $this->app->bind(RolesRepositoryContract::class, RolesRepository::class);
        $this->app->bind(PermissionsRepositoryContract::class, PermissionsRepository::class);
        $this->app->bind(CitiesRepositoryContract::class, CitiesRepository::class);
        $this->app->bind(DistrictsRepositoryContract::class, DistrictsRepository::class);
        $this->app->bind(CurrenciesRepositoryContract::class, CurrenciesRepository::class);
        $this->app->bind(TimezonesRepositoryContract::class, TimezonesRepository::class);
        $this->app->bind(PhotosRepositoryContract::class, PhotosRepository::class);
        $this->app->bind(RegistrationRepositoryContract::class, RegistrationRepository::class);
        $this->app->bind(ExcelRepositoryContract::class, ExcelRepository::class);
        $this->app->bind(CustomerProfilesRepositoryContract::class, CustomerProfilesRepository::class);
        $this->app->bind(UserActivationsRepositoryContract::class, UserActivationsRepository::class);
        $this->app->bind(CustomerGendersRepositoryContract::class, CustomerGendersRepository::class);
        $this->app->bind(CustomerAgesRepositoryContract::class, CustomerAgesRepository::class);
        $this->app->bind(CustomerImagesRepositoryContract::class, CustomerImagesRepository::class);
        $this->app->bind(CustomerContactsRepositoryContract::class, CustomerContactsRepository::class);

        $this->app->bind(PasswordChangesRepositoryContract::class, PasswordChangesRepository::class);
        $this->app->bind(DefinitionGendersRepositoryContract::class, DefinitionGendersRepository::class);
        $this->app->bind(StoreProductsRepositoryContract::class,StoreProductsRepository::class);
        $this->app->bind(StoreCategoriesRepositoryContract::class,StoreCategoriesRepository::class);
        $this->app->bind(StoreProductCategoriesRepositoryContract::class,StoreProductCategoriesRepository::class);
        $this->app->bind(StoreProductCurrenciesRepositoryContract::class,StoreProductCurrenciesRepository::class);
        $this->app->bind(ImagesProductRepositoryContract::class,ImagesProductRepository::class);
        $this->app->bind(StoreDrawsRepositoryContract::class,StoreDrawsRepository::class);
        $this->app->bind(StoreDrawCountriesRepositoryContract::class,StoreDrawCountriesRepository::class);
        $this->app->bind(StoreDrawTicketsRepositoryContract::class,StoreDrawTicketsRepository::class);
        $this->app->bind(OrdersRepositoryContract::class,OrdersRepository::class);
        $this->app->bind(PaymentTypesRepositoryContract::class,PaymentTypesRepository::class);
        $this->app->bind(CustomerBalancesRepositoryContract::class,CustomerBalancesRepository::class);
        $this->app->bind(FrontLangsRepositoryContract::class,FrontLangsRepository::class);
        $this->app->bind(CustomerPaymentsRepositoryContract::class,CustomerPaymentsRepository::class);
        $this->app->bind(CustomerReferersRepositoryContract::class,CustomerReferersRepository::class);
        $this->app->bind(ImagesSliderRepositoryContract::class,ImagesSliderRepository::class);
        $this->app->bind(OrdersCommentRepositoryContract::class,OrdersCommentRepository::class);
        $this->app->bind(UserCountriesRepositoryContract::class,UserCountriesRepository::class);
        //newBind
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
