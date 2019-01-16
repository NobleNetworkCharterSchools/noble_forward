<?php one_page_express_get_header(); ?>

<div class="content">
  <div class="gridContainer">
    <div class="row">
      <div class="post-list <?php if (!is_active_sidebar('sidebar-1')) echo 'post-list-large'; ?>">
        <div class="navigation-c">
	  <h4> <a href="https://nobleforward.org/">Click here to return to home page if you're not redirected</a></h4>
	  <script>
            var timer = setTimeout(function() {
            window.location='https://nobleforward.org/'
            }, 3000);
          </script>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
