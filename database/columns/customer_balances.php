<?php return [
        'comments' => ["the loading balance","","","currency code of the loading balance","","customer code","","","","0:notDeleted 1:deleted","payment type of the loading balance","0:active 1:passive","",""],
        'columns' => ["balance","created_at","created_by","currency_code","customer_balance_code","customer_code","deleted_at","deleted_by","id","is_deleted","payment_type_code","status","updated_at","updated_by"],
        'indexes' => ["id","customer_balance_code","customer_code"],
        'types' => ["double","timestamp","integer","integer","integer","integer","timestamp","integer","integer","integer","integer","integer","timestamp","integer"],
        'required_columns' => ["balance","currency_code","customer_code","payment_type_code"],
        'max_length_columns' => [],
        'max_length_values' => [],
        'boolean_values' => ["is_deleted","status"],
        'default_keys' => ["created_by","customer_balance_code","deleted_by","is_deleted","status","updated_by"],
        'default_values' => ["0","0","0","0","1","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];