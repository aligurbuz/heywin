<?php return [
        'comments' => ["","","","","product description","","0:notDeleted 1:deleted","Will the product be sent by cargo or by e-mail? 0:physical 1:digital","product name","Product sale price","","0:active 1:passive","",""],
        'columns' => ["created_at","created_by","deleted_at","deleted_by","description","id","is_deleted","is_digital","name","price","product_code","status","updated_at","updated_by"],
        'indexes' => ["id","product_code","price","name"],
        'types' => ["timestamp","integer","timestamp","integer","string","integer","integer","integer","string","double","integer","integer","timestamp","integer"],
        'required_columns' => ["name","price"],
        'max_length_columns' => ["description","name"],
        'max_length_values' => ["65535","255"],
        'boolean_values' => ["is_deleted","is_digital","status"],
        'default_keys' => ["created_by","deleted_by","is_deleted","is_digital","product_code","status","updated_by"],
        'default_values' => ["0","0","0","0","0","1","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];