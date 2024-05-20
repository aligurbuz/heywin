<?php return [
        'comments' => ["","","","","","product image url path","0:notDeleted 1:deleted","product code","","0:active 1:passive","",""],
        'columns' => ["created_at","created_by","deleted_at","deleted_by","id","image","is_deleted","product_code","product_image_code","status","updated_at","updated_by"],
        'indexes' => ["id","product_image_code","product_code"],
        'types' => ["timestamp","integer","timestamp","integer","integer","image","integer","integer","integer","integer","timestamp","integer"],
        'required_columns' => ["image","product_code"],
        'max_length_columns' => ["image"],
        'max_length_values' => ["65535"],
        'boolean_values' => ["is_deleted","status"],
        'default_keys' => ["created_by","deleted_by","is_deleted","product_image_code","status","updated_by"],
        'default_values' => ["0","0","0","0","1","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];