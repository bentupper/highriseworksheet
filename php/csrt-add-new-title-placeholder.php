<?php

/************************************************************************************************** 
*  CSRT Roster Custom Post Type - Alters the title placeholder text
***************************************************************************************************/
function csrt_roster_custom_enter_title( $input ) {

    global $post_type;

    if( is_admin() && 'Enter title here' == $input && 'csrt_roster' == $post_type )
        return 'Enter date in mm/dd/yy format';

    return $input;
}
add_filter('gettext','csrt_roster_custom_enter_title');
