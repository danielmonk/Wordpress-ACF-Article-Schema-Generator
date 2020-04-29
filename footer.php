<?php
    global $articleSchema;
    if(count($articleSchemaCount > 0)) {
    // DO STUFF
        if (!function_exists('wp_generate_faq_schema')){
            function wp_generate_faq_schema ($articleSchema) {
                echo '<script type=“application/ld+json”>'. json_encode($articleSchema) .'</script>';
            }
        };
        wp_generate_faq_schema($articleSchema);
    }
?>