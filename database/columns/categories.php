<?php return [
        'comments' => ["","","","","","","0:notDeleted 1:deleted","category name","category parent code (for unlimited sub category code)","","","0:active 1:passive","",""],
        'columns' => ["category_code","created_at","created_by","deleted_at","deleted_by","id","is_deleted","name","parent","sequence","sequence_time","status","updated_at","updated_by"],
        'indexes' => ["id","category_code"],
        'types' => ["integer","timestamp","integer","timestamp","integer","integer","integer","string","integer","integer","integer","integer","timestamp","integer"],
        'required_columns' => ["name"],
        'max_length_columns' => ["name"],
        'max_length_values' => ["255"],
        'boolean_values' => ["is_deleted","status"],
        'default_keys' => ["category_code","created_by","deleted_by","is_deleted","parent","sequence","sequence_time","status","updated_by"],
        'default_values' => ["0","0","0","0","0","1","0","1","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];