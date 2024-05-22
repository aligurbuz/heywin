<?php return [
        'comments' => ["","","","","","0:notDeleted 1:deleted","payment type","","0:active 1:passive","",""],
        'columns' => ["created_at","created_by","deleted_at","deleted_by","id","is_deleted","payment_type","payment_type_code","status","updated_at","updated_by"],
        'indexes' => ["id","payment_type_code"],
        'types' => ["timestamp","integer","timestamp","integer","integer","integer","string","integer","integer","timestamp","integer"],
        'required_columns' => ["payment_type"],
        'max_length_columns' => ["payment_type"],
        'max_length_values' => ["255"],
        'boolean_values' => ["is_deleted","status"],
        'default_keys' => ["created_by","deleted_by","is_deleted","payment_type_code","status","updated_by"],
        'default_values' => ["0","0","0","0","1","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];