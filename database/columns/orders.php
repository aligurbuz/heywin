<?php return [
        'comments' => ["","","customer code","customer contact code","","","","0:notDeleted 1:deleted","","order type","order shipping tracking number","0:active 1:passive","",""],
        'columns' => ["created_at","created_by","customer_code","customer_contact_code","deleted_at","deleted_by","id","is_deleted","order_code","order_type","shipping_tracking_number","status","updated_at","updated_by"],
        'indexes' => ["id","order_code","customer_code"],
        'types' => ["timestamp","integer","integer","integer","timestamp","integer","integer","integer","integer","enum","string","integer","timestamp","integer"],
        'required_columns' => ["customer_code","customer_contact_code","order_type"],
        'max_length_columns' => ["order_type","shipping_tracking_number"],
        'max_length_values' => ["7","255"],
        'boolean_values' => ["is_deleted","status"],
        'default_keys' => ["created_by","deleted_by","is_deleted","order_code","status","updated_by"],
        'default_values' => ["0","0","0","0","1","0"],
        'enum_columns' => ["order_type"],
        'enum_values' => ["draws,auction"],
        ];