@extends('pegawai.master')

@push('css')
@endpush


@section('title')
    Dasar Pegawai
@endsection


@section('content')
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <h6 class="element-header">
                Dasar Pegawai
              </h6>
            <div class="element-box">
              <h5 class="form-header">
                DATA DASAR PEGAWAI
              </h5>
              <div class="form-desc">Ini adalah data dasar pegawai anda, Silahkan diisi dengan lengkap.
              </div>
              <div class="table-responsive">
                <!--------------------
                START - Basic Table
                -------------------->
                <button class="mr-2 mb-2 btn btn-outline-success btn-lg btn-block" data-target="#addOnboardingFormModal" data-toggle="modal" type="button"><i class="os-icon os-icon-plus"></i> Tambah Data</button>
                <br>
                <button class="mr-2 mb-2 btn btn-outline-primary btn-lg btn-block" data-target="#editOnboardingFormModal" data-toggle="modal" type="button"><i class="os-icon os-icon-edit"></i> Ubah Data</button>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>
                        Judul
                      </th>
                      <th >
                        Isi
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        ESELON I
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                      <td>
                        ESELON II
                      </td>
                      <td>
                        12
                      </td>
                    <tr>
                      <td>
                        ESELON III
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        ESELON IV
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        NIP BARU
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        NIP LAMA
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        NAMA PEGAWAI
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        GELAR DEPAN
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        GELAR BELAKANG
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        TEMPAT LAHIR
                      </td>
                      <td>
                        12
                      </td>
                    <tr>
                      <td>
                        TANGGAL LAHIR
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        JENIS KELAMIN
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        STATUS KELUARGA
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        AGAMA
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        PENDIDIKAN AKHIR
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        NAMA SEKOLAH
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        TAHUN LULUS
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        JURUSAN / PROGRAM STUDI
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        STATUS KEPEGAWAIAN
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        INSTANSI ASAL
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        TMT CALON PEGAWAI NEGERI SIPIL
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        GOLONGAN / RUANG TERAKHIR
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        TMT GOLONGAN
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        NAMA JABATAN
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        NOMOR KARPEG
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        TASPEN
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        NOMOR NPWP
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        ALAMAT RUMAH
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        KOTA
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        KODE POS
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        NOMOR TELEPON
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        NOMOR STR (SURAT TANDA REGISTRASI)
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        MASA BERLAKU STR
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        NOMOR SIKP (SURAT IZIN KERJA PERAWAT)
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        MASA BERLAKU SIKP
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        NOMOR SPK (SURAT PENUGASAAN KEWENANGAN KLINIS)
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        MASA BERLAKU SPK
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        NOMOR RKK (RINCIAN KEWENANGAN KLINIS)
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                    <tr>
                      <td>
                        MASA BERLAKU RKK
                      </td>
                      <td>
                        12
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!--------------------
                END - Basic Table
                -------------------->
              </div>
            </div>
          </div>
      <!--------------------
      START - Color Scheme Toggler
      -------------------->
      <div class="floated-colors-btn second-floated-btn">
        <div class="os-toggler-w">
          <div class="os-toggler-i">
            <div class="os-toggler-pill"></div>
          </div>
        </div>
        <span>Dark </span><span>Colors</span>
      </div>
      <!--------------------
      END - Color Scheme Toggler
      --------------------><!--------------------
      START - Demo Customizer
      -------------------->
      <div class="floated-customizer-btn third-floated-btn">
        <div class="icon-w">
          <i class="os-icon os-icon-ui-46"></i>
        </div>
        <span>Customizer</span>
      </div>
      <div class="floated-customizer-panel">
        <div class="fcp-content">
          <div class="close-customizer-btn">
            <i class="os-icon os-icon-x"></i>
          </div>
          <div class="fcp-group">
            <div class="fcp-group-header">
              Menu Settings
            </div>
            <div class="fcp-group-contents">
              <div class="fcp-field">
                <label for="">Menu Position</label><select class="menu-position-selector">
                  <option value="left">
                    Left
                  </option>
                  <option value="right">
                    Right
                  </option>
                  <option value="top">
                    Top
                  </option>
                </select>
              </div>
              <div class="fcp-field">
                <label for="">Menu Style</label><select class="menu-layout-selector">
                  <option value="compact">
                    Compact
                  </option>
                  <option value="full">
                    Full
                  </option>
                  <option value="mini">
                    Mini
                  </option>
                </select>
              </div>
              <div class="fcp-field with-image-selector-w">
                <label for="">With Image</label><select class="with-image-selector">
                  <option value="yes">
                    Yes
                  </option>
                  <option value="no">
                    No
                  </option>
                </select>
              </div>
              <div class="fcp-field">
                <label for="">Menu Color</label>
                <div class="fcp-colors menu-color-selector">
                  <div class="color-selector menu-color-selector color-bright selected"></div>
                  <div class="color-selector menu-color-selector color-dark"></div>
                  <div class="color-selector menu-color-selector color-light"></div>
                  <div class="color-selector menu-color-selector color-transparent"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="fcp-group">
            <div class="fcp-group-header">
              Sub Menu
            </div>
            <div class="fcp-group-contents">
              <div class="fcp-field">
                <label for="">Sub Menu Style</label><select class="sub-menu-style-selector">
                  <option value="flyout">
                    Flyout
                  </option>
                  <option value="inside">
                    Inside/Click
                  </option>
                  <option value="over">
                    Over
                  </option>
                </select>
              </div>
              <div class="fcp-field">
                <label for="">Sub Menu Color</label>
                <div class="fcp-colors">
                  <div class="color-selector sub-menu-color-selector color-bright selected"></div>
                  <div class="color-selector sub-menu-color-selector color-dark"></div>
                  <div class="color-selector sub-menu-color-selector color-light"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="fcp-group">
            <div class="fcp-group-header">
              Other Settings
            </div>
            <div class="fcp-group-contents">
              <div class="fcp-field">
                <label for="">Full Screen?</label><select class="full-screen-selector">
                  <option value="yes">
                    Yes
                  </option>
                  <option value="no">
                    No
                  </option>
                </select>
              </div>
              <div class="fcp-field">
                <label for="">Show Top Bar</label><select class="top-bar-visibility-selector">
                  <option value="yes">
                    Yes
                  </option>
                  <option value="no">
                    No
                  </option>
                </select>
              </div>
              <div class="fcp-field">
                <label for="">Above Menu?</label><select class="top-bar-above-menu-selector">
                  <option value="yes">
                    Yes
                  </option>
                  <option value="no">
                    No
                  </option>
                </select>
              </div>
              <div class="fcp-field">
                <label for="">Top Bar Color</label>
                <div class="fcp-colors">
                  <div class="color-selector top-bar-color-selector color-bright selected"></div>
                  <div class="color-selector top-bar-color-selector color-dark"></div>
                  <div class="color-selector top-bar-color-selector color-light"></div>
                  <div class="color-selector top-bar-color-selector color-transparent"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--------------------
      END - Demo Customizer
      --------------------><!--------------------
      START - Chat Popup Box
      -------------------->
      <div class="floated-chat-btn">
        <i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span>
      </div>
      <div class="floated-chat-w">
        <div class="floated-chat-i">
          <div class="chat-close">
            <i class="os-icon os-icon-close"></i>
          </div>
          <div class="chat-head">
            <div class="user-w with-status status-green">
              <div class="user-avatar-w">
                <div class="user-avatar">
                  <img alt="" src="img/avatar1.jpg">
                </div>
              </div>
              <div class="user-name">
                <h6 class="user-title">
                  John Mayers
                </h6>
                <div class="user-role">
                  Account Manager
                </div>
              </div>
            </div>
          </div>
          <div class="chat-messages">
            <div class="message">
              <div class="message-content">
                Hi, how can I help you?
              </div>
            </div>
            <div class="date-break">
              Mon 10:20am
            </div>
            <div class="message">
              <div class="message-content">
                Hi, my name is Mike, I will be happy to assist you
              </div>
            </div>
            <div class="message self">
              <div class="message-content">
                Hi, I tried ordering this product and it keeps showing me error code.
              </div>
            </div>
          </div>
          <div class="chat-controls">
            <input class="message-input" placeholder="Type your message here..." type="text">
            <div class="chat-extra">
              <a href="#"><span class="extra-tooltip">Attach Document</span><i class="os-icon os-icon-documents-07"></i></a><a href="#"><span class="extra-tooltip">Insert Photo</span><i class="os-icon os-icon-others-29"></i></a><a href="#"><span class="extra-tooltip">Upload Video</span><i class="os-icon os-icon-ui-51"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!--------------------
      END - Chat Popup Box
      -------------------->
    </div>
  </div>
@endsection

@push('js')
@endpush

@section('modal')
{{-- Modal Add --}}
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="addOnboardingFormModal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
      <div class="modal-content text-center">
        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Tutup</span><span class="os-icon os-icon-close"></span></button>
        <div class="onboarding-media">
          <img alt="" src="{{asset('/iniTemplate/dist/img/bigicon5.png')}}" width="200px">
        </div>
        <div class="onboarding-content with-gradient">
          <h4 class="onboarding-title">
            Tambah Data Dasar Pegawai
          </h4>
          <div class="onboarding-text">
            Tambahkan Data Dasar Pegawai Anda Disini Dengan Lengkap.
          </div>
          <form>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Unit Eselon I</label><input class="form-control" placeholder="Masukan Unit Eselon I Anda..." type="text" value="" required="required">
                  <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Unit Eselon II</label><input class="form-control" placeholder="Masukan Unit Eselon II Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Unit Eselon III</label><input class="form-control" placeholder="Masukan Unit Eselon III Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Unit Eselon IV</label><input class="form-control" placeholder="Masukan Unit Eselon IV Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">NIP Baru</label><input class="form-control" placeholder="Masukan NIP Baru Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">NIP Lama</label><input class="form-control" placeholder="Masukan NIP Lama Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nama Pegawai</label><input class="form-control" placeholder="Masukan Nama Pegawai Anda... " type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Gelar Depan</label><input class="form-control" placeholder="Masukan Gelar Depan Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Gelar Belakang</label><input class="form-control" placeholder="Masukan Gelar Belakang Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Tempat Lahir</label><input class="form-control" placeholder="Masukan Tampat Lahir Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <div class="date-input">
                      <input class="single-daterange form-control" placeholder="Masukan Tanggal Lahir Anda..." type="text" value="04/12/1978" required="required">
                    </div>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Jenis Kelamin</label><select class="form-control" required="required">
                    <option selected disabled>
                      -Pilih Jenis Kelamin-
                    </option>
                    <option>
                      Pria
                    </option>
                    <option>
                      Wanita
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Status Keluarga</label><select class="form-control" required="required">
                    <option selected disabled>
                      -Pilih Status Keluarga-
                    </option>
                    <option>
                      Nikah
                    </option>
                    <option>
                      Belum Menikah
                    </option>
                    <option>
                      Duda
                    </option>
                    <option>
                      Janda
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Agama</label><select class="form-control" required="required">
                    <option selected disabled>
                      -Pilih Agama-
                    </option>
                    <option>
                      Islam
                    </option>
                    <option>
                      Katholik
                    </option>
                    <option>
                      Protestan
                    </option>
                    <option>
                      Hindu
                    </option>
                    <option>
                      Budha
                    </option>
                    <option>
                      Kristen
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Pendidikan Akhir</label><select class="form-control" required="required">
                    <option selected disabled>
                      -Pilih Pendidikan Akhir-
                    </option>
                    <option>
                      S3 (Setara)
                    </option>
                    <option>
                      S2 (Setara)
                    </option>
                    <option>
                      S1 (Setara)
                    </option>
                    <option>
                      D4
                    </option>
                    <option>
                      D3
                    </option>
                    <option>
                      D2
                    </option>
                    <option>
                      D1
                    </option>
                    <option>
                      SLTA
                    </option>
                    <option>
                      SLTP
                    </option>
                    <option>
                      SD
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nama Sekolah</label><input class="form-control" placeholder="Masukan Nama Sekolah Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">/ Tahun Lulus</label><input class="form-control" placeholder="Masukan Tahun Lulus Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Jurusan / Program Studi</label><input class="form-control" placeholder="Masukan Jurusan / Program Studi Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Status Kepegawaian</label><select class="form-control" required="required">
                    <option selected disabled>
                      -Pilih Status Kepegawaian-
                    </option>
                    <option>
                      CPNS
                    </option>
                    <option>
                      PNS
                    </option>
                    <option>
                      PNS DPK DARI DEP.LAIN
                    </option>
                    <option>
                      PNS DPK KE DEP.LAIN
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Instansi Asal</label><input class="form-control" placeholder="Masukan Instansi Asal..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">TMT Calon PNS</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Masukan Calon PNS Anda..." type="text" value="04/12/1978" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Golongan / Ruang Terakhir</label><input class="form-control" placeholder="Masukan Golongan / Ruang Terakhir Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">TMT Golongan</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Masukan TMT Gologan Anda..." type="text" value="04/12/1978" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nama Jabatan</label>
                  <input class="form-control" placeholder="Masukan Nama Jabatan Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor KARPEG</label><input class="form-control" placeholder="Masukan Nomor KARPEG Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Taspen</label><select class="form-control" required="required">
                    <option selected disabled>
                      -Pilih Taspen-
                    </option>
                    <option>
                      Sudah
                    </option>
                    <option>
                      Belum
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor NPWP</label><input class="form-control" placeholder="Masukan Nomor NPWP Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Alamat Rumah</label><textarea class="form-control" rows="3" placeholder="Masukan Alamat Rumah Anda..." required="required"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Kota</label><input class="form-control" placeholder="Masukan Kota Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Kode Pos</label><input class="form-control" placeholder="Masukan Kode Pos Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor Telepon</label><input class="form-control" placeholder="Masukan Nomor Telepon Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor STR</label><input class="form-control" placeholder="Masukan Nomor STR Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Masa STR</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Masukan Masa STR Anda..." type="text" value="04/12/1978" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor SIKP</label><input class="form-control" placeholder="Masukan Nomor SIKP Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Masa SIKP</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Masukan Masa SIKP Anda..." type="text" value="04/12/1978" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor SKP</label><input class="form-control" placeholder="Masukan Nomor SKP Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Masa SKP</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Masukan Masa SKP Anda..." type="text" value="04/12/1978" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor RKK</label><input class="form-control" placeholder="Masukan Nomor RKK Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Masa RKK</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Masukan Masa RKK Anda..." type="text" value="04/12/1978" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-buttons-w">
              <button class="btn btn-success" type="submit"><i class="os-icon os-icon-plus"></i> Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{-- End Modal Add --}}

{{-- Modal Edit --}}
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="editOnboardingFormModal" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-centered" role="document">
    <div class="modal-content text-center">
      <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Tutup</span><span class="os-icon os-icon-close"></span></button>
      <div class="onboarding-media">
        <img alt="" src="{{asset('/iniTemplate/dist/img/bigicon5.png')}}" width="200px">
      </div>
      <div class="onboarding-content with-gradient">
        <h4 class="onboarding-title">
          Ubah Data Pegawai
        </h4>
        <div class="onboarding-text">
          Ubah Data Pegawai Anda yang Ingin Anda Ubah.
        </div>
        <form>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Unit Eselon I</label><input class="form-control" placeholder="Masukan Unit Eselon I Anda..." type="text" value="" required="required">
                  <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Unit Eselon II</label><input class="form-control" placeholder="Masukan Unit Eselon II Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Unit Eselon III</label><input class="form-control" placeholder="Masukan Unit Eselon III Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Unit Eselon IV</label><input class="form-control" placeholder="Masukan Unit Eselon IV Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">NIP Baru</label><input class="form-control" placeholder="Masukan NIP Baru Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">NIP Lama</label><input class="form-control" placeholder="Masukan NIP Lama Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nama Pegawai</label><input class="form-control" placeholder="Masukan Nama Pegawai Anda... " type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Gelar Depan</label><input class="form-control" placeholder="Masukan Gelar Depan Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Gelar Belakang</label><input class="form-control" placeholder="Masukan Gelar Belakang Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Tempat Lahir</label><input class="form-control" placeholder="Masukan Tampat Lahir Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <div class="date-input">
                      <input class="single-daterange form-control" placeholder="Masukan Tanggal Lahir Anda..." type="text" value="04/12/1978" required="required">
                    </div>
                  </div>
                </div>
              </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Jenis Kelamin</label><select class="form-control" required="required">
                    <option selected disabled>
                      -Pilih Jenis Kelamin-
                    </option>
                    <option>
                      Pria
                    </option>
                    <option>
                      Wanita
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Status Keluarga</label><select class="form-control" required="required">
                    <option selected disabled>
                      -Pilih Status Keluarga-
                    </option>
                    <option>
                      Nikah
                    </option>
                    <option>
                      Belum Menikah
                    </option>
                    <option>
                      Duda
                    </option>
                    <option>
                      Janda
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Agama</label><select class="form-control" required="required">
                    <option selected disabled>
                      -Pilih Agama-
                    </option>
                    <option>
                      Islam
                    </option>
                    <option>
                      Katholik
                    </option>
                    <option>
                      Protestan
                    </option>
                    <option>
                      Hindu
                    </option>
                    <option>
                      Budha
                    </option>
                    <option>
                      Kristen
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Pendidikan Akhir</label><select class="form-control" required="required">
                    <option selected disabled>
                      -Pilih Pendidikan Akhir-
                    </option>
                    <option>
                      S3 (Setara)
                    </option>
                    <option>
                      S2 (Setara)
                    </option>
                    <option>
                      S1 (Setara)
                    </option>
                    <option>
                      D4
                    </option>
                    <option>
                      D3
                    </option>
                    <option>
                      D2
                    </option>
                    <option>
                      D1
                    </option>
                    <option>
                      SLTA
                    </option>
                    <option>
                      SLTP
                    </option>
                    <option>
                      SD
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nama Sekolah</label><input class="form-control" placeholder="Masukan Nama Sekolah Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">/ Tahun Lulus</label><input class="form-control" placeholder="Masukan Tahun Lulus Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Jurusan / Program Studi</label><input class="form-control" placeholder="Masukan Jurusan / Program Studi Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Status Kepegawaian</label><select class="form-control" required="required">
                    <option selected disabled>
                      -Pilih Status Kepegawaian-
                    </option>
                    <option>
                      CPNS
                    </option>
                    <option>
                      PNS
                    </option>
                    <option>
                      PNS DPK DARI DEP.LAIN
                    </option>
                    <option>
                      PNS DPK KE DEP.LAIN
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Instansi Asal</label><input class="form-control" placeholder="Masukan Instansi Asal..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">TMT Calon PNS</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Masukan Calon PNS Anda..." type="text" value="04/12/1978" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Golongan / Ruang Terakhir</label><input class="form-control" placeholder="Masukan Golongan / Ruang Terakhir Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">TMT Golongan</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Masukan TMT Gologan Anda..." type="text" value="04/12/1978" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nama Jabatan</label>
                  <input class="form-control" placeholder="Masukan Nama Jabatan Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor KARPEG</label><input class="form-control" placeholder="Masukan Nomor KARPEG Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Taspen</label><select class="form-control" required="required">
                    <option selected disabled>
                      -Pilih Taspen-
                    </option>
                    <option>
                      Sudah
                    </option>
                    <option>
                      Belum
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor NPWP</label><input class="form-control" placeholder="Masukan Nomor NPWP Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Alamat Rumah</label><textarea class="form-control" rows="3" placeholder="Masukan Alamat Rumah Anda..." required="required"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Kota</label><input class="form-control" placeholder="Masukan Kota Anda..." type="text" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Kode Pos</label><input class="form-control" placeholder="Masukan Kode Pos Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor Telepon</label><input class="form-control" placeholder="Masukan Nomor Telepon Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor STR</label><input class="form-control" placeholder="Masukan Nomor STR Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Masa STR</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Masukan Masa STR Anda..." type="text" value="04/12/1978" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor SIKP</label><input class="form-control" placeholder="Masukan Nomor SIKP Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Masa SIKP</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Masukan Masa SIKP Anda..." type="text" value="04/12/1978" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor SKP</label><input class="form-control" placeholder="Masukan Nomor SKP Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Masa SKP</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Masukan Masa SKP Anda..." type="text" value="04/12/1978" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Nomor RKK</label><input class="form-control" placeholder="Masukan Nomor RKK Anda..." type="number" value="" required="required">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Masa RKK</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Masukan Masa RKK Anda..." type="text" value="04/12/1978" required="required">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-buttons-w">
              <button class="btn btn-primary" type="submit"><i class="os-icon os-icon-edit"></i> Ubah</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
{{-- End Modal Edit --}}
@endsection

