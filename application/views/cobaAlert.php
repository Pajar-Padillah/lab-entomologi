<!DOCTYPE html>
<html>
<head>
	<title>Tambah tujuan</title>
	<?php $this->load->view('link');?> <!--Include menu-->

</head>
<body>
	<?php $this->load->view('menu');?> <!--Include menu-->
<div class="wrapper-konten">
	<div class="card">
	  <h5 class="card-header">Tambah tujuan</h5>
	  <div class="card-body">
	    <h5 class="card-title"></h5>
	    <button type="submit" class="btn btn-primary" onclick="Swal.fire({
		  title: 'Are you sure?',
		  text: 'You wont be able to revert this!',
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.isConfirmed) {
		    Swal.fire(
		      'Deleted!',
		      'Your file has been deleted.',
		      'success'
		    )
		  }
		})" >Tambah</button>
	  </div>
	</div>
	
	
</div>
</body>
<?php $this->load->view('javascriptnya');?> <!--Include javascript-->
</html>
