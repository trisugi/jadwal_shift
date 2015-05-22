<?php
$pola = new pola();
$isi = $pola->index();
?>
<div class="pull-right">
	<button class="btn">Entri Baru</button>
</div>

<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th><th>Masa Berlaku</th><th>#1</th><th>#2</th><th>#3</th><th>#4</th><th>#5</th><th>#6</th><th></th>
		</tr>
	</thead>
	<tbody>
	<?php
	$daftar = $isi['data'];
	$no = 1;
	for ($i = 0; $i<count($daftar); $i++) {
		echo '<tr>';
		echo '<td>' . $no . '</td>';
		echo '<td>' . date('d-m-Y', strtotime($daftar[$i]['masa_berlaku'])) . '</td>';
		echo '<td>' . $daftar[$i]['hari1'] . '</td>';
		echo '<td>' . $daftar[$i]['hari2'] . '</td>';
		echo '<td>' . $daftar[$i]['hari3'] . '</td>';
		echo '<td>' . $daftar[$i]['hari4'] . '</td>';
		echo '<td>' . $daftar[$i]['hari5'] . '</td>';
		echo '<td>' . $daftar[$i]['hari6'] . '</td>';
		echo '<td>';
		if ($i === count($daftar) - 1) {
		echo '<a href="#" title="Ubah"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;&nbsp;
					<a href="#" title="Hapus"><i class="glyphicon glyphicon-trash"></i></a>';
		}
		else {
			echo '-';
		}
		echo '</td>';
		echo '</tr>';
		$no++;
	}
	?>	
	</tbody>
</table>

<script>
var Pola = function() {
	var self = this;
	self.title = ko.observable('<?php echo isset($isi['breadcrumb']) ? $isi['breadcrumb'] : ''?>');
}

var App = new Pola();

ko.applyBindings(App);
</script>
