<style type="text/css">
	
	form {
			margin-left: -15px;
			width: 101%;
	}
	.form {
		border: none;
	}
</style>

<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
	
	<input type="search" class="form form-control" placeholder="Pesquisar" value="<?php echo get_search_query() ?>" name="s" title="Search" />
</form>