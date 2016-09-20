<h2>Point of Interest</h2>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Category</th>

			<th>Name</th>
		</tr>
	</thead>

	<tbody>

		<?php foreach($interests as $interest): ?>

		<tr>

		<?php echo "<td>" . $interest->category . "</td>"; ?>

	</tr>

		<?php endforeach; ?>


	</tbody>
</table>

