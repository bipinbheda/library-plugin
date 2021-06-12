<?php

$publisher_terms = get_terms(array(
	'taxonomy' => 'publisher',
	'hide_empty' => false,
));
/*$author_terms = get_terms(array(
	'taxonomy' => 'author',
	'hide_empty' => false,
));*/

?>
<div class="book-block">
	<h3>Book Search</h3>
	<form method="POST" class="book-filter">
		<div class="row">
			<div class="cal-md-6">
				<label for="">Book Name</label>
				<input type="text" name="book-name">
			</div>
			<div class="cal-md-6">
				<label for="">Book Author</label>
				<input type="text" name="book-author">
			</div>
			<?php if (!empty($publisher_terms)): ?>
				<div class="cal-md-6">
					<label for="">Publisher</label>
					<select name="publisher">
						<option value="">Select Publisher</option>
						<?php foreach ($publisher_terms as $key => $term): ?>
							<option value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
						<?php endforeach ?>
					</select>
				</div>
			<?php endif ?>
			<div class="cal-md-6">
				<label for="">Ratting</label>
				<select name="ratting">
					<option value="">Select Ratting</option>
					<?php for ($i=1; $i <= 5; $i++) { ?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="cal-md-6">
				<label for="">Price From</label>
				<input type="range" name="price_from" min="1" max="1000">
			</div>
			<div class="cal-md-6">
				<label for="">Price To</label>
				<input type="range" name="price_to" min="1" max="1000">
			</div>
			<div class="col">
				<a href="javascript:void(0);" class="btn btn-light mt-3 search-btn" >Search</a>
			</div>
		</div>
	</div>
</form>
<table class="table table-striped book-listing">
	<thead>
		<tr class="table-dark">
			<th scope="col">Book Number</th>
			<th scope="col">Book Name</th>
			<th scope="col">Price</th>
			<th scope="col">Author</th>
			<th scope="col">Publisher</th>
			<th scope="col">Ratting</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
</div>