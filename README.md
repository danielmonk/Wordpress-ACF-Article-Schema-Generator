# Wordpress-ACF-Article-Schema-Generator

- Create an ACF Field called 'enable_article_schema'
- If enabled schema will be created using the following info, make sure they have values!
- - mainEntityOfPage ( @id : get_the_permalink()),
- - headline : get_the_title(),
- - image : get_the_post_thumbnail_url(),
- - datePublished : get_the_date('c'),
- - dateModified : get_the_modified_date('c'),
- - author ( name : get_the_author()),
- - publisher ( name : get_bloginfo('name'))
- - publisher ( logo ( url : get_site_icon_url()))
- description : get_the_excerpt()