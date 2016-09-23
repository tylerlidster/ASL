<h2>Saved</h2>
<br>

<table class="table table-hover">
	<thead>
		<tr>
			<th>CATEGORY</th>

			<th>NAME</th>

		</tr>
	</thead>

	<tbody>

		<?php foreach($interests as $interest): ?>

		<tr>

		<?php echo "<td><a href='". base_url() ."home/display'>" . $interest->category . "</a></td>"; ?>

		<?php echo "<td>" . $interest->name . "</td>"; ?>

		</tr>

		<?php endforeach; ?>


	</tbody>
</table>
