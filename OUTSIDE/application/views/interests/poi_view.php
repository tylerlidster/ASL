<h2 class="pull-right">Saved Locations</h2>

<table class="table table-hover">
	<thead>
		<tr>
			<th>CATEGORY</th>

			<th>NAME</th>

		</tr>
	</thead>

	<tbody class="text-uppercase">

		<?php foreach($interests as $interest): ?>

		<tr>

		<?php echo "<td><a href='". base_url() ."home/display/" . $interest->id . "'>" . $interest->category . "</a></td>"; ?>

		<?php echo "<td>" . $interest->name . "</td>"; ?>

		</tr>

		<?php endforeach; ?>


	</tbody>
</table>

