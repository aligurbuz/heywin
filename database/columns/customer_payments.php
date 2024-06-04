<?php return [
        'comments' => ["price amount","","","currency code","","payment response data for provider","","","","0:notDeleted 1:deleted","0:active 1:passive","",""],
        'columns' => ["amount","created_at","created_by","currency_code","customer_payment_code","data","deleted_at","deleted_by","id","is_deleted","status","updated_at","updated_by"],
        'indexes' => ["id","customer_payment_code"],
        'types' => ["double","timestamp","integer","integer","integer","array","timestamp","integer","integer","integer","integer","timestamp","integer"],
        'required_columns' => ["amount","currency_code"],
        'max_length_columns' => [],
        'max_length_values' => [],
        'boolean_values' => ["is_deleted","status"],
        'default_keys' => ["created_by","customer_payment_code","deleted_by","is_deleted","status","updated_by"],
        'default_values' => ["0","0","0","0","1","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];