<?php

namespace Tests\Feature\Store;

use Tests\TestCase;
use App\Models\DrawCountry;

class DrawCountriesTest extends TestCase
{
    /**
     * @var string
     */
    protected string $endpoint = 'store/drawCountries';

    /**
     * @var string
     */
    protected string $model = DrawCountry::class;

    /**
     * @var string
     */
    protected string $repository = 'drawCountry';

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_store_drawCountries()
    {
        $this->getHttpMethod();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_products_relations()
    {
        $this->getHttpMethodWithRelations();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_store_drawCountries_post_required_columns()
    {
        $this->postRequiredColumns();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_store_drawCountries_post()
    {
        $this->postHttpMethod();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_store_drawCountries_put()
    {
        $this->putHttpMethod();
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_store_drawCountries_put_activation()
    {
        $this->putHttpMethodActivation([],1);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_store_drawCountries_put_activation2()
    {
        $this->putHttpMethodActivation(['status' => true],1);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_store_drawCountries_put_activation3()
    {
        $this->putHttpMethodActivation(['status' => true,'is_deleted' => true]);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_store_drawCountries_put_activation4()
    {
        $this->putHttpMethodActivation(['status' => true,'is_deleted' => false],1);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_store_drawCountries_put_activation5()
    {
        $this->putHttpMethodActivation(['status' => false,'is_deleted' => false]);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_store_drawCountries_put_activation6()
    {
        $this->putHttpMethodActivation(['status' => false,'is_deleted' => true]);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_store_drawCountries_put_activation7()
    {
        $this->putHttpMethodActivation(['status' => true,'is_deleted' => false],1);
    }
}
