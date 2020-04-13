{content}
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="<?php echo base_url()?>admin">Dashboard</a>
    </li>
    <li class="breadcrumb-item">Pendaftaran</li>
    <li class="breadcrumb-item">View Detail</li>
    <li class="breadcrumb-item active">{form_title}</li>
  </ol>
  <!-- end Breadcrumbs-->

  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-eye" aria-hidden="true"></i> View Detail </div>
    <div class="card-body">
  <form enctype="multipart/form-data" action="<?php echo base_url()?>aksi-daftar" method="POST">
    <h2>A. Identitas Diri</h2>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Nama Lengkap</label>
      <div class="col-sm-10">
        <span class="form-control">{form_title}</span>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Tempat / Tgl. Lahir</label>
      <div class="col-sm-5">
        <span class="form-control">{tempat_lahir}</span>
      </div>
      <div class="col-sm-5">
        <span class="form-control">{tanggal_lahir}</span>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Usia</label>
      <div class="col-sm-4">
        <div class="input-group mb-3">
          <span class="form-control">{usia}</span>
          <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">Tahun</span>
          </div>
        </div>
      </div>
      <label class="col-sm-2 col-form-label">Agama</label>
      <div class="col-sm-4">
        <span class="form-control text-capitalize">{agama}</span>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Berat Badan(Kg)</label>
      <div class="col-sm-4">
        <div class="input-group mb-3">
          <span class="form-control">{berat_badan}</span>
          <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">(Kg)</span>
          </div>
        </div>
      </div>
      <label class="col-sm-2 col-form-label">Tinggi Badan(Cm)</label>
      <div class="col-sm-4">
        <div class="input-group mb-3">
          <span class="form-control">{tinggi_badan}</span>
          <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">(Cm)</span>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Alamat Rumah Tetap</label>
      <div class="col-sm-10">
        <div class="alert alert-info">{alamat_rumah_tetap}</div>
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
              <span class="form-control">{no}</span>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Rt :</span>
              </div>
              <span class="form-control">{rt}</span>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Rw :</span>
              </div>
              <span class="form-control">{rw}</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Dusun :</span>
              </div>
              <span class="form-control">{dusun}</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Desa :</span>
              </div>
              <span class="form-control">{desa}</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Kec :</span>
              </div>
              <span class="form-control">{kec}</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Kab :</span>
              </div>
              <span class="form-control">{kab}</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Prop :</span>
              </div>
              <span class="form-control">{prop}</span>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Kode Pos :</span>
              </div>
              <span class="form-control">{kode_pos}</span>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Telepon Rumah / WA / LINE</label>
      <div class="col-sm-4">
        <span class="form-control">{telepon}</span>
      </div>
      <div class="col-sm-6">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Handphone :</span>
          </div>
          <span class="form-control">{handphone}</span>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <span class="form-control">{email}</span>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label">Asal Sekolah</label>
      <div class="col-sm-4">
        <span class="form-control">{asal_sekolah}</span>
      </div>
      <div class="col-sm-6">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Jurusan :</span>
          </div>
          <span class="form-control">{jurusan}</span>
        </div>
      </div>
    </div>
    <h2>B. Data Orang Tua/Wali</h2>
    <div class="form-group row">
      <div class="col-sm-6">
        <div class="row">
          <label class="col-sm-4 col-form-label">Nama Bapak</label>
          <div class="col-sm-8">
            <span class="form-control">{nama_bapak}</span>
          </div>
          <label class="col-sm-4 col-form-label mt-3">Usia</label>
          <div class="col-sm-8">
            <div class="input-group mb-3 mt-3">
              <span class="form-control">{usia_bapak}</span>
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">Tahun</span>
              </div>
            </div>
          </div>
          <label class="col-sm-4 col-form-label">Pekerjaan</label>
          <div class="col-sm-8">
            <span class="form-control">{pekerjaan_bapak}</span>
          </div>
          
        </div>
      </div>

      <div class="col-sm-6">
        <div class="row">
          <label class="col-sm-4 col-form-label">Nama Ibu</label>
          <div class="col-sm-8">
            <span class="form-control">{nama_ibu}</span>
          </div>
          <label class="col-sm-4 col-form-label mt-3">Usia</label>
          <div class="col-sm-8">
            <div class="input-group mb-3 mt-3">
              <span class="form-control">{usia_ibu}</span>
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">Tahun</span>
              </div>
            </div>
          </div>
          <label class="col-sm-4 col-form-label">Pekerjaan</label>
          <div class="col-sm-8">
            <span class="form-control">{pekerjaan_ibu}</span>
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
              <span class="form-control">{no_ot}</span>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Rt :</span>
              </div>
                <span class="form-control">{rt_ot}</span>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Rw :</span>
              </div>
                <span class="form-control">{rw_ot}</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Dusun :</span>
              </div>
                <span class="form-control">{dusun_ot}</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Desa :</span>
              </div>
                <span class="form-control">{desa_ot}</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Kec :</span>
              </div>
                <span class="form-control">{kec_ot}</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Kab :</span>
              </div>
                <span class="form-control">{kab_ot}</span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Prop :</span>
              </div>
                <span class="form-control">{prop_ot}</span>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Kode Pos :</span>
              </div>
                <span class="form-control">{kode_pos_ot}</span>
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
            <span class="form-control">{quest_a}</span>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group row">
          <label class="col-sm-12 col-form-label">
            Jika Ya Sebutkan dan pada tahun berapa
          </label>
          <div class="col-sm-12">
            <div class="alert alert-info">{quest_a_ket}</div>
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
            <span class="form-control">{quest_b}</span>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group row">
          <label class="col-sm-12 col-form-label">
            Jika Ya Sebutkan dan pada tahun berapa
          </label>
          <div class="col-sm-12">
            <div class="alert alert-info">{quest_b_ket}</div>
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
            <span class="form-control">{quest_c}</span>
          </div>
          <label class="col-sm-12">
            Thumbnail
          </label>
          <div class="col-sm-12 pt-3">
            <img class="img-thumbnail" src="<?php echo base_url('../assets/images/form/thumb/256/{file_name}') ?>">
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group row">
          <label class="col-sm-12 col-form-label">
            Apa alasan/motivasi bergabung dengan DUTA PERSADA
          </label>
          <div class="col-sm-12">
            <div class="alert alert-info">{alasan}</div>
          </div>
        </div>
      </div>
    </div>
    <a href="<?php echo base_url('form/pendaftaran') ?>"><button type="button" class="btn btn-primary col-sm-3 mb-3">Back</button></a>
  </form>
    </div>
    <div class="card-footer small text-muted">Date : {form_timestamp}</div>
  </div>
</div>
{/content}