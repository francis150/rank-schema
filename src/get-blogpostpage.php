<?php
if (!empty($CONFIG['blogPosts'])) {
    foreach ($CONFIG['blogPosts'] as $blogPost) {
        echo '<div class="blog-post-page" 
        data-key="'.$blogPost['blogPostUrl'].'" 
        data-headline="'.$blogPost['headline'].'" 
        data-date-published="'.$blogPost['datePublished'].'" 
        data-article-body="'.$blogPost['articleBody'].'" 
        data-in-language="'.$blogPost['inLanguage'].'" 
        data-blog-post-url="'.$blogPost['blogPostUrl'].'" ';
        if ($blogPost['isFamilyFriendly']) { echo 'data-is-family-friendly="true" '; } else { echo 'data-is-family-friendly="false" '; }
        if (isset($blogPost['author'])) echo 'data-author="'.$blogPost['author'].'" ';
        if (isset($blogPost['genre'])) echo 'data-genre="'.$blogPost['genre'].'" ';
        if (isset($blogPost['thumbnailUrl'])) echo 'data-thumbnail-url="'.$blogPost['thumbnailUrl'].'" ';
        echo '><div class="image-wrapper">'; 
        if (isset($blogPost['thumbnailUrl'])) { echo '<img src="'.$blogPost['thumbnailUrl'].'">'; }
        else { echo '<img src="'.plugin_dir_url(dirname(__FILE__)).'assets/image_placeholder.svg">'; }
        echo '</div><div class="content-wrapper"><div class="head">
        <h3>'.$blogPost['headline'].'</h3>
        <button type="button" class="blog-post-page-edit-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/edit_icon.svg"></button>
        <button type="button" class="blog-post-page-remove-btn action-button"><img src="'.plugin_dir_url(dirname(__FILE__)).'assets/trash_icon.svg"></button>
        </div><p>'.$blogPost['articleBody'].'</p></div></div>';
    }
}