<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<h2>Site Search</h2>
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>
