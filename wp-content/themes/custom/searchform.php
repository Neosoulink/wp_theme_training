<form class="d-flex" action="<?= esc_url(home_url()) ?>">
	<input name="s" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="<?= get_search_query() ?>">
	<button class="btn btn-outline-success" type="submit">Search</button>
</form>
