<?= form_open(base_url('admin/config'));
echo csrf_field();
?>

<h4>Informasi Dasar</h4>
<hr>
<div class="form-group row">
	<label class="col-3">name Website</label>
	<div class="col-9">
		<input type="text" name="nameweb" class="form-control" value="<?= $config['nameweb'] ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">shorthand Website</label>
	<div class="col-9">
		<input type="text" name="shorthand" class="form-control" value="<?= $config['shorthand'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Tagline Website</label>
	<div class="col-9">
		<input type="text" name="tagline" class="form-control" value="<?= $config['tagline'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">address Website</label>
	<div class="col-9">
		<input type="text" name="website" class="form-control" value="<?= $config['website'] ?>">
	</div>
</div>

<h4>Informasi Profil Website/Aplikasi</h4>
<hr>
<div class="form-group row">
	<label class="col-3">intro Website</label>
	<div class="col-9">
		<textarea name="intro" class="form-control editor" rows="10" cols="10"><?= $config['intro'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">description</label>
	<div class="col-9">
		<textarea name="description" class="form-control editor" rows="10" cols="10"><?= $config['description'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">what we do</label>
	<div class="col-9">
		<textarea name="whatwedo" class="form-control editor" rows="10" cols="10"><?= $config['whatwedo'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Văn hóa hoạt động</label>
	<div class="col-9">
		<textarea name="cultura_activiti" class="form-control editor" rows="10" cols="10"><?= $config['cultura_activiti'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Slogan</label>
	<div class="col-9">
		<textarea name="slogan" class="form-control" rows="10" cols="10"><?= $config['slogan'] ?></textarea>
	</div>
</div>

<h4>address</h4>
<hr>

<div class="form-group row">
	<label class="col-3">Official Email</label>
	<div class="col-9">
		<input type="text" name="email" class="form-control" value="<?= $config['email'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Email backup</label>
	<div class="col-9">
		<input type="text" name="email_backup" class="form-control" value="<?= $config['email_backup'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">phone</label>
	<div class="col-9">
		<input type="text" name="phone" class="form-control" value="<?= $config['phone'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Fax</label>
	<div class="col-9">
		<input type="text" name="fax" class="form-control" value="<?= $config['fax'] ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-3">address</label>
	<div class="col-9">
		<textarea name="address" class="form-control"><?= $config['address'] ?></textarea>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Google Map</label>
	<div class="col-9">
		<textarea name="google_map" class="form-control"><?= $config['google_map'] ?></textarea>
	</div>
</div>

<h4>Sosial</h4>
<hr>

<div class="form-group row">
	<label class="col-3">Facebook <i class="fab fa-facebook"></i></label>
	<div class="col-3">
		<input type="text" name="name_facebook" class="form-control" value="<?= $config['name_facebook'] ?>">
		<small class="text-secondary">name akun</small>
	</div>
	<div class="col-6">
		<input type="text" name="facebook" class="form-control" value="<?= $config['facebook'] ?>">
		<small class="text-secondary">address link akun</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Twitter <i class="fab fa-twitter"></i></label>
	<div class="col-3">
		<input type="text" name="name_twitter" class="form-control" value="<?= $config['name_twitter'] ?>">
		<small class="text-secondary">name akun</small>
	</div>
	<div class="col-6">
		<input type="text" name="twitter" class="form-control" value="<?= $config['twitter'] ?>">
		<small class="text-secondary">address link akun</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Instagram <i class="fab fa-instagram"></i></label>
	<div class="col-3">
		<input type="text" name="name_instagram" class="form-control" value="<?= $config['name_instagram'] ?>">
		<small class="text-secondary">name akun</small>
	</div>
	<div class="col-6">
		<input type="text" name="instagram" class="form-control" value="<?= $config['instagram'] ?>">
		<small class="text-secondary">address link akun</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3">Youtube <i class="fab fa-youtube"></i></label>
	<div class="col-3">
		<input type="text" name="name_youtube" class="form-control" value="<?= $config['name_youtube'] ?>">
		<small class="text-secondary">name akun</small>
	</div>
	<div class="col-6">
		<input type="text" name="youtube" class="form-control" value="<?= $config['youtube'] ?>">
		<small class="text-secondary">address link akun</small>
	</div>
</div>

<div class="form-group row">
	<label class="col-3"></label>
	<div class="col-9">
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Lưu</button>
	</div>
</div>

<?= form_close(); ?>