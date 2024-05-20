<?php 

namespace App\Client\Store\ProductCategories\Create; 

trait GeneratorTrait
{
	/**
	 * get auto generator for client
	 *
	 * @return array
	 */
	protected array $generators = ['product_category_code'];

	/**
	 * get dont overwrite generator for client
	 *
	 * @return array
	 */
	protected array $dontOverWriteGenerators = ['product_category_code'];


	/**
	 * generates productcategory_code for client
	 *
	 * @return int
	 */
	public function productCategoryCodeGenerator(): int
	{
		return generateHash();
	}
}
