<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo $judul ?></h3>
				
			</div>
			<form method="post" enctype="multipart/form-data">
				<div class="box-body">
					<div class="form-group">
						<label>Email</label>
						<input type="text" class="form-control" name="email" value="">	
						
					</div>
					<div class="form-group">

						<label>Masukkan Password</label>
						<input type="password" class="form-control" name="password" value="" required>	
						
					</div>
					
					
				</div>
				<div class="box-footer clearfix">
					<button type="button" onclick="window.history.go(-1);" class="btn btn-warning">Batal</button>
					<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
				</div>
				
			</form>
			
		</div>
		
	</div>
	
</div>