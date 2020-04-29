<?php 
    global $articleSchemaCount;
    $articleSchemaCount = 0;
    global $articleSchema;
    $articleSchema = array(
    '@context'         => "https://schema.org",
    '@type'            => "NewsArticle",
    'mainEntityOfPage' => array(
        '@type'        => "WebPage",
        '@id'          => get_the_permalink(),
    ),
    'headline'         => get_the_title(),
    'image'            => get_the_post_thumbnail_url(),
    'datePublished'    => get_the_date('c'),
    'dateModified'     => get_the_modified_date(),
    'author'           => array(
        '@type'        => "Person",
        'name'         => get_the_author(),
    ),
    'publisher'        => array(
        '@type'        => "Organization",
        'name'         => get_bloginfo('name'),
        'logo'         => array(
            '@type'    => "ImageObject",
            'url'      => get_site_icon_url()
        )
    ),
    'description'      => get_the_excerpt()
); ?>