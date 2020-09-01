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
                <button class="mr-2 mb-2 btn btn-outline-success btn-lg btn-block" type="button"><i class="os-icon os-icon-plus"></i> Tambah Data</button>
                <br>
                <button class="mr-2 mb-2 btn btn-outline-primary btn-lg btn-block" type="button"><i class="os-icon os-icon-edit"></i> Ubah Data</button>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>
                        Customer Name
                      </th>
                      <th >
                        Orders
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

