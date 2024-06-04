<?php return [
        'comments' => ["","","","","","","0:notDeleted 1:deleted","language key for front end","language value for front end","language code","0:active 1:passive","",""],
        'columns' => ["created_at","created_by","deleted_at","deleted_by","front_lang_code","id","is_deleted","lang_key","lang_value","language_code","status","updated_at","updated_by"],
        'indexes' => ["id","front_lang_code","language_code"],
        'types' => ["timestamp","integer","timestamp","integer","integer","integer","integer","string","string","integer","integer","timestamp","integer"],
        'required_columns' => ["lang_key","lang_value","language_code"],
        'max_length_columns' => ["lang_key","lang_value"],
        'max_length_values' => ["255","65535"],
        'boolean_values' => ["is_deleted","status"],
        'default_keys' => ["created_by","deleted_by","front_lang_code","is_deleted","status","updated_by"],
        'default_values' => ["0","0","0","0","1","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];