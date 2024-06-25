<?php return [
        'comments' => ["","","customer calling a customer","customer code calling a customer","degree of user invocation. The client cannot determine.","customer percentage","customer referer gain","0:active 1:passive","0:notDeleted 1:deleted","","","","","",""],
        'columns' => ["id","customer_referer_code","customer_code","customer_friend_code","level","percent","gain","status","is_deleted","created_by","updated_by","deleted_by","deleted_at","created_at","updated_at"],
        'indexes' => ["id","customer_referer_code","customer_code","customer_friend_code"],
        'types' => ["integer","integer","integer","integer","enum","integer","double","integer","integer","integer","integer","integer","timestamp","timestamp","timestamp"],
        'required_columns' => ["customer_code","customer_friend_code"],
        'max_length_columns' => ["level"],
        'max_length_values' => ["1"],
        'boolean_values' => ["status","is_deleted"],
        'default_keys' => ["customer_referer_code","level","percent","gain","status","is_deleted","created_by","updated_by","deleted_by"],
        'default_values' => ["0","1","0","0","1","0","0","0","0"],
        'enum_columns' => ["level"],
        'enum_values' => ["1,2,3"],
        ];