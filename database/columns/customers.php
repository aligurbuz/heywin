<?php return [
        'comments' => ["","","customer code","customer email","customer's email confirmation time","","is_deleted:0 - undeleted,is_deleted:1 deleted","customer name","customer password","","status:1 - active,status:0 passive",""],
        'columns' => ["balance","created_at","customer_code","email","email_verified_at","id","is_deleted","name","password","remember_token","status","updated_at"],
        'indexes' => ["id","customer_code","email","email","password"],
        'types' => ["double","timestamp","integer","string","timestamp","integer","integer","string","string","string","integer","timestamp"],
        'required_columns' => ["customer_code","email","name","password"],
        'max_length_columns' => ["email","name","password","remember_token"],
        'max_length_values' => ["255","255","255","100"],
        'boolean_values' => ["is_deleted","status"],
        'default_keys' => ["balance","is_deleted","status"],
        'default_values' => ["0","0","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];