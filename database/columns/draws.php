<?php return [
        'comments' => ["","","","","draw description","","The date the draw will take place.","The date the draw will cease broadcasting.","","The image that should appear in the listing. A listing image must be added for each raffle as it will be required for product combinations.","0: video draw, 1: auto draw","0:notDeleted 1:deleted","How many tickets can a user buy in the draw?","draw name","Draw ticket price","product code","remaining stock value for draw","The date the draw will go live.","0:active 1:passive","The specified number of tickets for the draw.","","","If the draw will be held as a video, the video URL will be entered.","It determines how many winners there will be in the raffle."],
        'columns' => ["created_at","created_by","deleted_at","deleted_by","description","draw_code","draw_date","end_date","id","image_url","is_auto_draw","is_deleted","max_ticket","name","price","product_code","remaining_stock","start_date","status","stock","updated_at","updated_by","video_url","winner_count"],
        'indexes' => ["id","draw_code","start_date","end_date","draw_date","stock","product_code"],
        'types' => ["timestamp","integer","timestamp","integer","string","integer","timestamp","timestamp","integer","string","integer","integer","integer","string","double","integer","integer","timestamp","integer","integer","timestamp","integer","string","integer"],
        'required_columns' => ["draw_date","end_date","image_url","name","product_code","start_date"],
        'max_length_columns' => ["description","image_url","name","video_url"],
        'max_length_values' => ["65535","255","255","255"],
        'boolean_values' => ["is_auto_draw","is_deleted","status"],
        'default_keys' => ["created_by","deleted_by","draw_code","is_auto_draw","is_deleted","max_ticket","price","status","stock","updated_by","winner_count"],
        'default_values' => ["0","0","0","0","0","0","0","1","0","0","1"],
        'enum_columns' => [],
        'enum_values' => [],
        ];