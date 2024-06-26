<?php return [
        'comments' => ["","","draw code","slider image url path","slider title","slider description","0:active 1:passive","0:notDeleted 1:deleted","","","","","",""],
        'columns' => ["id","slider_code","draw_code","image","title","description","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","slider_code","draw_code"],
        'types' => ["integer","integer","integer","image","string","string","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["draw_code","image"],
        'max_length_columns' => ["image","title","description"],
        'max_length_values' => ["65535","255","65535"],
        'boolean_values' => ["status","is_deleted"],
        'default_keys' => ["slider_code","status","is_deleted","created_by","updated_by","deleted_by"],
        'default_values' => ["0","1","0","0","0","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];