

	<form method="post" enctype="multipart/form-data">
				<div class="box-body">
					<div class="form-group">
						<label>Kategori</label>
						<select class="form-control" name="id_map">
							
							<?php foreach ($map as $key => $value): ?>
							<option value="<?php echo $value['id_map']; ?>"><?php echo $value['nama']; ?></option>
							<?php endforeach ?>
							
						</select>
					</div>
					<div class="form-group">
						<label>Nama Mobil</label>
						<input type="text" class="form-control" name="nama_mobil">
					</div>

					<div class="form-group">
						<label>harga</label>
						<input type="text" class="form-control" name="harga" >
					</div>

					<!-- <div class="form-group">
						<label>Nama Asrama</label>
						<input type="text" class="form-control" name="nama">	
						
					</div> -->
					
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="deskripsi" id="message" required></textarea>
					</div>
					
					
					<hr>
					<div class="form-group">
						<label>Gambar</label>
						<input type="file" class="form-control" name="foto" multiple="multiple">	
						
					</div>
					
					
					
					
				</div>
				<div class="box-footer clearfix">
					<button type="button" onclick="window.history.go(-1);" class="btn btn-warning">Batal</button>
					<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
				</div>
				
			</form>
