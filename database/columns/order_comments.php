<?php return [
        'comments' => ["","","order product code","order code","order comment image url path","order comment","0:active 1:passive","0:notDeleted 1:deleted","","","","","",""],
        'columns' => ["id","order_comment_code","product_code","order_code","image","comment","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","order_comment_code","product_code","order_code"],
        'types' => ["integer","integer","integer","integer","image","string","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["product_code","order_code","comment"],
        'max_length_columns' => ["image","comment"],
        'max_length_values' => ["65535","65535"],
        'boolean_values' => ["status","is_deleted"],
        'default_keys' => ["order_comment_code","status","is_deleted","created_by","updated_by","deleted_by"],
        'default_values' => ["0","0","0","0","0","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];