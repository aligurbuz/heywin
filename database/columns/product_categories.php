<?php return [
        'comments' => ["category_code","","","","","","0:notDeleted 1:deleted","","product code","0:active 1:passive","",""],
        'columns' => ["category_code","created_at","created_by","deleted_at","deleted_by","id","is_deleted","product_category_code","product_code","status","updated_at","updated_by"],
        'indexes' => ["id","product_category_code","product_code","category_code"],
        'types' => ["integer","timestamp","integer","timestamp","integer","integer","integer","integer","integer","integer","timestamp","integer"],
        'required_columns' => ["category_code","product_code"],
        'max_length_columns' => [],
        'max_length_values' => [],
        'boolean_values' => ["is_deleted","status"],
        'default_keys' => ["created_by","deleted_by","is_deleted","product_category_code","status","updated_by"],
        'default_values' => ["0","0","0","0","1","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];