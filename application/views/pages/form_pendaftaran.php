<div class="container">
	{msg}
	<form enctype="multipart/form-data" action="<?php echo base_url()?>aksi-daftar" method="POST">
		<h2>A. Identitas Diri</h2>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama Lengkap</label>
			<div class="col-sm-10">
				<input name="nama_lengkap" type="text" class="form-control" id="inputEmail3" placeholder="Masukan Nama lengkap *" required="">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Tempat / Tgl. Lahir</label>
			<div class="col-sm-5">
				<input name="tempat_lahir" type="text" class="form-control" id="inputEmail3" placeholder="Masukan Tempat Lahir*" required="">
			</div>
			<div class="col-sm-5">
				<input name="tanggal_lahir" type="date" class="form-control" id="inputEmail3" placeholder="Email" required="">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Usia</label>
			<div class="col-sm-4">
				<div class="input-group mb-3">
					<input required="" name="usia" min="0" type="number" class="form-control" placeholder="Format Number" aria-label="usia" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">Tahun</span>
					</div>
				</div>
			</div>
			<label class="col-sm-2 col-form-label">Agama</label>
			<div class="col-sm-4">
				<select name="agama" class="form-control" required="">
					<option value=""> -- Pilih Agama --</option>
					<option value="islam">Islam</option>
					<option value="hindu">Hindu</option>
					<option value="budha">Budha</option>
					<option value="kristen">Kristen</option>
					<option value="katolik">Katolik</option>
					<option value="kong hu cu">Kong Hu Cu</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Berat Badan(Kg)</label>
			<div class="col-sm-4">
				<div class="input-group mb-3">
					<input required="" name="berat_badan" type="number" class="form-control" placeholder="Format Number" aria-label="usia" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">(Kg)</span>
					</div>
				</div>
			</div>
			<label class="col-sm-2 col-form-label">Tinggi Badan(Cm)</label>
			<div class="col-sm-4">
				<div class="input-group mb-3">
					<input required="" name="tinggi_badan" type="number" class="form-control" placeholder="Format Number" aria-label="tinggi-badan" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<span class="input-group-text" id="basic-addon2">(Cm)</span>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Alamat Rumah Tetap</label>
			<div class="col-sm-10">
				<textarea name="alamat_rumah_tetap" required="" rows="3" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">(Yang Bisa dijangkau pos)</label>
			<div class="col-sm-10">
				<div class="row">
					<div class="col-sm-2">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">No.</span>
							</div>
								<input name="no" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-2">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Rt :</span>
							</div>
								<input name="rt" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-2">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Rw :</span>
							</div>
								<input name="rw" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Dusun :</span>
							</div>
								<input name="dusun" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Desa :</span>
							</div>
								<input name="desa" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Kec :</span>
							</div>
								<input name="kec" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Kab :</span>
							</div>
								<input name="kab" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Prop :</span>
							</div>
								<input name="prop" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Kode Pos :</span>
							</div>
								<input name="kode_pos" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Telepon Rumah / WA / LINE</label>
			<div class="col-sm-4">
				<input name="telepon" required="" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2">
			</div>
			<div class="col-sm-6">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">Handphone :</span>
					</div>
						<input name="handphone" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Email</label>
			<div class="col-sm-10">
				<input name="email" required="" type="email" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Asal Sekolah</label>
			<div class="col-sm-4">
				<input name="asal_sekolah" required="" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2">
			</div>
			<div class="col-sm-6">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="basic-addon1">Jurusan :</span>
					</div>
						<input name="jurusan" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
				</div>
			</div>
		</div>
		<h2>B. Data Orang Tua/Wali</h2>
		<div class="form-group row">
			<div class="col-sm-6">
				<div class="row">
					<label class="col-sm-4 col-form-label">Nama Bapak</label>
					<div class="col-sm-8">
						<input name="nama_bapak" required="" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2">
					</div>
					<label class="col-sm-4 col-form-label mt-3">Usia</label>
					<div class="col-sm-8">
						<div class="input-group mb-3 mt-3">
							<input name="usia_bapak" required="" type="number" class="form-control" placeholder="Format Number" aria-label="nama-bapak" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">Tahun</span>
							</div>
						</div>
					</div>
					<label class="col-sm-4 col-form-label">Pekerjaan</label>
					<div class="col-sm-8">
						<input name="pekerjaan_bapak" required="" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2">
					</div>
					
				</div>
			</div>

			<div class="col-sm-6">
				<div class="row">
					<label class="col-sm-4 col-form-label">Nama Ibu</label>
					<div class="col-sm-8">
						<input type="text" name="nama_ibu" required="" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2">
					</div>
					<label class="col-sm-4 col-form-label mt-3">Usia</label>
					<div class="col-sm-8">
						<div class="input-group mb-3 mt-3">
							<input name="usia_ibu" required="" min="0" type="number" class="form-control" placeholder="Format Number" aria-label="usia-ibu" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2">Tahun</span>
							</div>
						</div>
					</div>
					<label class="col-sm-4 col-form-label">Pekerjaan</label>
					<div class="col-sm-8">
						<input name="pekerjaan_ibu" required="" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2">
					</div>
					
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">(Yang Bisa dijangkau pos)</label>
			<div class="col-sm-10">
				<div class="row">
					<div class="col-sm-2">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">No.</span>
							</div>
								<input name="no_ot" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-2">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Rt :</span>
							</div>
								<input name="rt_ot" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-2">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Rw :</span>
							</div>
								<input name="rw_ot" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Dusun :</span>
							</div>
								<input name="dusun_ot" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Desa :</span>
							</div>
								<input name="desa_ot" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Kec :</span>
							</div>
								<input name="kec_ot" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Kab :</span>
							</div>
								<input name="kab_ot" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Prop :</span>
							</div>
								<input name="prop_ot" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-sm-12">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Kode Pos :</span>
							</div>
								<input name="kode_pos_ot" required="" type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group row">
					<label class="col-sm-12 col-form-label">
						Apakah anda pernah memiliki penyakit berat seperti (Hepatitis, Paru-Paru/TBC, Jantung, Ginjal, Buta Warna, dll)
					</label>
					<div class="col-sm-12 text-center">
						<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="quest_a" id="inlineRadio1" value="1" required="">
						<label class="form-check-label" for="inlineRadio1">Ya</label>
						</div>
						<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="quest_a" id="inlineRadio2" value="0" required="">
						<label class="form-check-label" for="inlineRadio2">Tidak</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group row">
					<label class="col-sm-12 col-form-label">
						Jika Ya Sebutkan dan pada tahun berapa
					</label>
					<div class="col-sm-12">
						<textarea name="quest_a_ket" class="form-control" rows="3"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group row">
					<label class="col-sm-12 col-form-label">
						Apakah anda pernah patah tulang dalam 2 tahun
					</label>
					<div class="col-sm-12 text-center">
						<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="ques_b" id="inlineRadio1" value="1" required="">
						<label class="form-check-label" for="inlineRadio1">Ya</label>
						</div>
						<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="ques_b" id="inlineRadio2" value="0" required="">
						<label class="form-check-label" for="inlineRadio2">Tidak</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group row">
					<label class="col-sm-12 col-form-label">
						Jika Ya Sebutkan dan pada tahun berapa
					</label>
					<div class="col-sm-12">
						<textarea name="ques_b_ket" class="form-control" rows="3"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group row">
					<label class="col-sm-12 col-form-label">
						Sumber informasi tentang DUTA PERSADA dari :
					</label>
					<div class="col-sm-12">
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="quest_c" requires="" id="quest_c1" value="Iklan Koran">
						  <label class="form-check-label" for="quest_c1">
						    Iklan Koran
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="quest_c" requires="" id="quest_c1" value="Poster/Brosur">
						  <label class="form-check-label" for="quest_c1">
						    Poster/Brosur
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="quest_c" requires="" id="quest_c1" value="Website/Internet">
						  <label class="form-check-label" for="quest_c1">
						    Website/Internet
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="quest_c" requires="" id="quest_c1" value="Guru Sekolah">
						  <label class="form-check-label" for="quest_c1">
						    Guru Sekolah
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="quest_c" requires="" id="quest_c1" value="Radio">
						  <label class="form-check-label" for="quest_c1">
						    Radio
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="quest_c" requires="" id="quest_c1" value="Referensi Orang">
						  <label class="form-check-label" for="quest_c1">
						    Referensi Orang
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="quest_c" requires="" id="quest_c1" value="Presentasi">
						  <label class="form-check-label" for="quest_c1">
						    Presentasi
						  </label>
						</div>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="quest_c" requires="" id="quest_c1" value="Lain-lain">
						  <label class="form-check-label" for="quest_c1">
						    Lain-lain
						  </label>
						</div>
						<input type="text" name="lain_lain" class="form-control">
					</div>
					<label class="col-sm-12">
						Upload Foto
					</label>
					<input type="file" name="fupload" required="" class="col-sm-6">
					<div class="col-sm-12 pt-3">
						<div class="alert alert-info" role="alert">
						  *) image type *.jpg Max-size: 100kb.
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group row">
					<label class="col-sm-12 col-form-label">
						Apa alasan/motivasi bergabung dengan DUTA PERSADA
					</label>
					<div class="col-sm-12">
						<textarea name="alasan" required="" class="form-control" rows="3"></textarea>
					</div>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary col-sm-3 mb-3">Daftar</button>
	</form>
</div>