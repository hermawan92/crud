<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1><?=$tipe?> Karyawan</h1>
		
		<form method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-2">
					Nama
				</label>
				<div class="col-md-10">
					<input type="text" class="form-control" name="nama" value="<?=isset($default['name'])? $default['name'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">
					Alamat					
				</label>
				<div class="col-md-10">
					<textarea name="alamat" class="form-control"><?=isset($default['alamat'])? $default['alamat'] : ""?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Email					
				</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" value="<?=isset($default['email'])? $default['email'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Jabatan					
				</label>
				<div class="col-sm-10">
					<input type="jabatan" class="form-control" name="jabatan" value="<?=isset($default['jabatan'])? $default['jabatan'] : ""?>">
				</div>
			</div>
			<center>
				<button name="tombol_submit" class="btn btn-primary">
					Simpan
				</button>
				 <button type="reset" class="btn btn-secondary">
				 	Reset
				</button>
			</center>
		</form>
	</div>
</body>
</html>