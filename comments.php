<ul class="commentlist clearfix"><?php wp_list_comments('avatar_size=88&callback=beuh_comment'); ?></ul>
<div class="pagination-comment clearfix"><?php paginate_comments_links(); ?> </div>
<?php comment_form(array('title_reply'=> _e('<h3 class="title-strong">Leave Your Comment Here</h3>','beuh'), 'comment_notes_before'=>'', 'comment_notes_after'=>'')); ?> 

