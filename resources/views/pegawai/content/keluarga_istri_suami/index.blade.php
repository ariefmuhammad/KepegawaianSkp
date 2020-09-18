@extends('pegawai.master')

@push('css')
@endpush


@section('title')
    Keluarga Istri / Suami
@endsection


@section('content')
<div class="content-i">
    <div class="content-box">
      <div class="element-wrapper">
        <h6 class="element-header">
          Keluarga Istri / Suami
        </h6>
        <div class="element-box">
          <h5 class="form-header">
            Data Keluarga Istri / Suami
          </h5>
          <div class="form-desc">
            Ini adalah data keluarga istri / suami anda, Silahkan di isi dengan lengkap.
          </div>
          <div class="table-responsive">
            <button class="mr-2 mb-2 btn btn-outline-success btn-lg btn-block" data-target="#addOnboardingFormModal" data-toggle="modal" type="button"><i class="os-icon os-icon-plus"></i> Tambah Data</button>
            <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Hubungan</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        Sukijan
                    </td>
                    <td>
                        ibu
                    </td>
                    <td>
                        <button class="mr-2 mb-2 btn btn-warning" data-target="#editOnboardingFormModal" data-toggle="modal" type="button"> Edit</button><button class="mr-2 mb-2 btn btn-danger" data-target="#deleteOnboardingTextModal" data-toggle="modal" type="button"> Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
          </div>
        </div>
      </div><!--------------------
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
            Tambah Data Keluarga Istri / Suami
          </h4>
          <div class="onboarding-text">
            Tambahkan Data Keluarga Istri / Suami Anda Disini Dengan Lengkap.
          </div>
          <form>
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Nama</label><input class="form-control" placeholder="Masukan Nama..." type="text" value="" required="required">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Hubungan</label><select class="form-control" required="required">
                      <option selected disabled>
                        -Pilih Hubungan-
                      </option>
                      <option>
                        Ayah
                      </option>
                      <option>
                        Ibu
                      </option>
                      <option>
                        Kakak
                      </option>
                      <option>
                        Adik
                      </option>
                    </select>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Pekerjaan</label><input class="form-control" placeholder="Masukan Pekerjaan..." type="text" value="" required="required">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <div class="date-input">
                      <input class="single-daterange form-control" placeholder="Masukan Tanggal Lahir..." type="text" value="04/12/1978" required="required">
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
                        Laki-laki
                      </option>
                      <option>
                        Perempuan
                      </option>
                    </select>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Kondisi</label><select class="form-control" required="required">
                      <option selected disabled>
                        -Pilih Kondisi-
                      </option>
                      <option>
                        Masih Hidup
                      </option>
                      <option>
                        Almarhum
                      </option>
                    </select>
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
            Ubah Data Keluarga Istri / Suami
          </h4>
          <div class="onboarding-text">
            Ubah Data Keluarga Istri / Suami Anda Yang Ingin Anda Ubah.
          </div>
          <form>
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Nama</label><input class="form-control" placeholder="Masukan Nama..." type="text" value="" required="required">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Hubungan</label><select class="form-control" required="required">
                      <option selected disabled>
                        -Pilih Hubungan-
                      </option>
                      <option>
                        Ayah
                      </option>
                      <option>
                        Ibu
                      </option>
                      <option>
                        Kakak
                      </option>
                      <option>
                        Adik
                      </option>
                    </select>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Pekerjaan</label><input class="form-control" placeholder="Masukan Pekerjaan..." type="text" value="" required="required">
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <div class="date-input">
                      <input class="single-daterange form-control" placeholder="Masukan Tanggal Lahir..." type="text" value="04/12/1978" required="required">
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
                        Laki-laki
                      </option>
                      <option>
                        Perempuan
                      </option>
                    </select>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="">Kondisi</label><select class="form-control" required="required">
                      <option selected disabled>
                        -Pilih Kondisi-
                      </option>
                      <option>
                        Masih Hidup
                      </option>
                      <option>
                        Almarhum
                      </option>
                    </select>
                  </div>
                </div>
            </div>
            <div class="form-buttons-w">
              <button class="btn btn-warning" type="submit"><i class="os-icon os-icon-edit"></i> Ubah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
{{-- End Modal Edit --}}

{{-- Modal Delete --}}
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="deleteOnboardingTextModal" role="dialog" tabindex="-1">
  <div class="modal-dialog modal-centered" role="document">
    <div class="modal-content text-center">
      <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Tutup</span><span class="os-icon os-icon-close"></span></button>
      <div class="onboarding-media">
        <img alt="" src="{{asset('/iniTemplate/dist/img/bigicon2.png')}}" width="200px">
      </div>
      <div class="onboarding-content with-gradient">
        <h4 class="onboarding-title">
           Hapus Data Keluarga Istri / Suami
        </h4>
        <div class="onboarding-text">
           Apakah anda ingin menghapus data ini ?
      </div>
      <div class="form-buttons-w">
        <button class="btn btn-danger" type="submit"><i class="os-icon os-icon-trash"></i> Hapus</button>
      </div>
    </div>
  </div>
</div>
{{-- End Modal Delete --}}
@endsection
