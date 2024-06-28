<?php return [
        'comments' => ["","","user code","country code","","","",""],
        'columns' => ["id","user_country_code","user_code","country_code","created_by","updated_by","created_at","updated_at"],
        'indexes' => ["id","user_country_code","user_code","country_code"],
        'types' => ["integer","integer","integer","integer","integer","integer","timestamp","timestamp"],
        'required_columns' => ["user_code","country_code"],
        'max_length_columns' => [],
        'max_length_values' => [],
        'boolean_values' => [],
        'default_keys' => ["user_country_code","created_by","updated_by"],
        'default_values' => ["0","0","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];