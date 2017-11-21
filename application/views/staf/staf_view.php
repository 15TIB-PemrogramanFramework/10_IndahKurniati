<?php $this->load->view('templates/header_admin');?>
<div class="row">
	<div class="col-md-12 text-right">
	<a href="<?php echo site_url('staf/tambah'); ?>" 
		class="btn btn-primary" style="margin-top: 20px; margin-bottom: 20px"><i class="fa fa-plus"></i>Tambah</a>
</div>

<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Id Staf</th>
			<th>Nama Staf</th>
			<th>Alamat Staf</th>
			<th>No Hp Staf</th>
			<th>Jabatan Staf</th>
			<th>Gambar Staf</th>
			<th>Aksi</th>
</tr>
</thead>
<tbody>
	<?php foreach ($staf as $key => $value) {?>
	<tr>
			<th><?php echo $value->id_staf; ?></th>
			<th><?php echo $value->nama_staf; ?></th>	
			<th><?php echo $value->alamat_staf; ?></th>
			<th><?php echo $value->nohp_staf; ?></th>
			<th><?php echo $value->jabatan_staf; ?></th>
			<th><?php echo $value->gambar_staf; ?></th>
			<th>
				<a onclick="return confirm('Anda Yakin Akan Menghapus Data ini ... ?')" href="<?php echo site_url('staf/delete/'.$value->id_nasabah); ?>" class="btn btn-danger">
					<i class="fa fa-trash"></i>
				</a>
				<a onclick="return confirm('Anda Yakin Akan Mengedit Data ini ... ?')" href="<?php echo site_url('staf/update/'.$value->id_nasabah); ?>" class="btn btn-warning">
					<i class="fa fa-pencil"></i>
				</a>
			</th>
		</tr>
		<?php }?>
</tbody>
</table>
</div>

<?$this->load->view('templates/footer_admin');?>

<script type="text/javascript">
	$(document).ready(function() {
	$('#example').DataTable();
} );
</script>