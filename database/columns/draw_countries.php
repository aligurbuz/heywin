<?php return [
        'comments' => ["draw country code","","","","","draw code","","","",""],
        'columns' => ["country_code","created_at","created_by","deleted_at","deleted_by","draw_code","draw_country_code","id","updated_at","updated_by"],
        'indexes' => ["id","draw_country_code","draw_code","country_code"],
        'types' => ["integer","timestamp","integer","timestamp","integer","integer","integer","integer","timestamp","integer"],
        'required_columns' => ["country_code","draw_code"],
        'max_length_columns' => [],
        'max_length_values' => [],
        'boolean_values' => [],
        'default_keys' => ["created_by","deleted_by","draw_country_code","updated_by"],
        'default_values' => ["0","0","0","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];