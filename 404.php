<?php one_page_express_get_header(); ?>

<div class="content">
  <div class="gridContainer">
    <div class="row">
      <div class="post-list <?php if (!is_active_sidebar('sidebar-1')) echo 'post-list-large'; ?>">
        <div class="post-list-c">
        <?php
            if (have_posts()):
              while (have_posts()):
                the_post();
                get_template_part('template-parts/content', get_post_format());
              endwhile;
            else:
              get_template_part('template-parts/content', 'none');
            endif;
        ?>
        </div>
        <div class="navigation-c">
          <?php  
              if (have_posts()):
                one_page_express_pagination(array(
                    'prev_text'          => __('Older posts', 'one-page-express'),
                    'next_text'          => __('Newer posts', 'one-page-express'),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'one-page-express') . ' </span>',
                ));
              endif;
          ?>
        </div>
      </div>
      <?php get_sidebar();?>
    </div>
  </div>
</div>

<?php one_page_express_get_footer(); 

