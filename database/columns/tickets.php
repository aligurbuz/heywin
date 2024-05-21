<?php return [
        'comments' => ["","","user code","","","draw code","","0:notDeleted 1:deleted","ticket number","","0:pending 1:lost 2:win","",""],
        'columns' => ["created_at","created_by","customer_code","deleted_at","deleted_by","draw_code","id","is_deleted","number","ticket_code","ticket_status","updated_at","updated_by"],
        'indexes' => ["id","ticket_code","draw_code","customer_code"],
        'types' => ["timestamp","integer","integer","timestamp","integer","integer","integer","integer","string","integer","enum","timestamp","integer"],
        'required_columns' => ["customer_code","draw_code","number"],
        'max_length_columns' => ["number","ticket_status"],
        'max_length_values' => ["255","1"],
        'boolean_values' => ["is_deleted"],
        'default_keys' => ["created_by","deleted_by","is_deleted","ticket_code","ticket_status","updated_by"],
        'default_values' => ["0","0","0","0","0","0"],
        'enum_columns' => ["ticket_status"],
        'enum_values' => ["0,1,2"],
        ];