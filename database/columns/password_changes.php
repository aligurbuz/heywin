<?php return [
        'comments' => ["","","user email","one-time code to be used for password reset","represents the current time for password change","0:notDeleted 1:deleted","","","","","",""],
        'columns' => ["id","password_change_code","email","hash","client_time","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","password_change_code","email","is_deleted"],
        'types' => ["integer","integer","string","string","datetime","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["email"],
        'max_length_columns' => ["email","hash"],
        'max_length_values' => ["255","255"],
        'boolean_values' => ["is_deleted"],
        'default_keys' => ["password_change_code","hash","client_time","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'default_values' => ["0","NULL","NULL","0","0","0","0","NULL","NULL","NULL"],
        'enum_columns' => [],
        'enum_values' => [],
        ];