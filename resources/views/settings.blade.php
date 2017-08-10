@extends('layouts.app')

@section('description')
 Blubu-settings
@stop

@section('keywords')
 Blubu-settings
@stop

@section('title')
 Blubu-settings
@stop

@section('style')
{{ asset('styles/settings.css') }}
@stop
@section('navigation')
  @include('nav')
@stop
@section('footer')
  @include('footer')
@stop

@section('scripts')

@stop
@section('content')
  <div class="container-fluid base-block">
      <div class="row">
        <div class="col-md-12 owner">
          <ul class="nav nav-tabs tabMenu">
            <li class="active"><a href="#profile" data-toggle="tab">PROFILE</a></li>
            <li><a href="#about_us" data-toggle="tab">ABOUT YOU</a></li>
            <li><a href="#video_profile" data-toggle="tab">VIDEO PROFILE</a></li>
            <li><a href="#password" data-toggle="tab">CHANGE PASSWORD</a></li>
          </ul>
        </div>
      </div>
      <div class="tab-content">
        <div id="profile" class="tab-pane fade in active">
          <div class="row">
            <div class="col-md-4 col-md-offset-1">
              <div style="position:relative;" class="block column">
                <div class="block-title">AVATAR</div>
                <div class="block-content">
                  <div class="avatar-profile"><img src="/img/avatar.jpg" class="avatarPhoto"></div>
                  <div class="button-save-avatar">
                    <button id="avatarButton" type="button" style="margin-top:40px;padding: 15px 40px; font-size: 14px;font-family:'LatoLight'" class="btn btn-danger">CHANGE</button>
                    <input id="avatarSave" type="file" accept="image/*" class="hiddenFile">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div style="padding-left: 40px;padding-right: 40px;" class="block column">
                <div class="block-title">PROFILE</div>
                <div class="block-content">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nickname">FIRSTNAME</label>
                        <input id="nickname" type="text" placeholder="" class="input-guest form-control">
                      </div>
                      <div class="form-group">
                        <label for="brithday">PAYPAL EMAIL
                          <div style="cursor:pointer;" data-html="true" data-trigger="click" data-toggle="tooltip" data-placement="bottom" title="Fill in the email you used to register at &lt;a style='color:#4abdac;' href='https://paypal.com'&gt;paypal.com&lt;/a&gt;" class="issue-form tooltipInfo">?</div>
                        </label>
                        <input id="brithday" type="text" placeholder="" class="input-wallet form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nickname">LASTNAME</label>
                        <input id="nickname" type="text" placeholder="" class="input-guest form-control">
                      </div>
                      <div class="form-group">
                        <label for="email">E-MAIL</label>
                        <input id="email" type="email" placeholder="" class="input-email form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="text-align:center;" class="col-md-12">
                      <div class="form-group">
                        <label for="nickname">SHOW STUDENTS
                          <div data-toggle="tooltip" data-placement="bottom" title="Choose no more than 3 profile categories the students will see on the list of tutors. Other information will be visible only on your full profile page." class="issue-form tooltipInfo">?</div>
                        </label>
                        <div style="height:auto;border-radius: 40px;" class="form-control">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="teacher-info-students elem">LEISURE</div>
                              </div>
                              <div class="col-md-4">
                                <div class="teacher-info-students elem">PROFESSION</div>
                              </div>
                              <div class="col-md-4">
                                <div class="teacher-info-students elem">EDUCATION</div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="teacher-info-students elem">EXPERIENCE</div>
                              </div>
                              <div class="col-md-6">
                                <div class="teacher-info-students elem">PROFICIENCY</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="text-align:center;" class="col-md-12">
                      <button type="button" style="margin-top:60px;padding: 15px 40px; font-size: 14px;font-family:'LatoLight'" class="btn btn-danger">CHANGE</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="about_us" class="tab-pane fade">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="block">
                <div class="block-title">ABOUT YOU</div>
                <div class="block-content">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="prof">PROFESSION</label>
                        <input id="prof" type="text" placeholder="" class="input-prof form-control">
                      </div>
                      <div class="form-group">
                        <label for="brithday">INTERESTS</label>
                        <input id="brithday" type="text" placeholder="" data-role="tagsinput" class="tags input-guest form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div id="drop-currency" class="form-group dropdown drop-menu">
                        <label for="email">CURRENCY</label>
                        <div id="drop-currency-text" style="text-align:center;cursor:pointer;display:block;width:100%;" data-toggle="dropdown" ident="rouble" class="input-rouble form-control dropdown-toggle">RUB</div>
                        <ul class="dropdown-menu">
                          <li><a href="#" ident="rouble">RUB</a></li>
                          <li><a href="#" ident="euro">EUR</a></li>
                          <li><a href="#" ident="dollar">USD</a></li>
                        </ul>
                      </div>
                      <div class="form-group">
                        <label for="brithday">SPOKEN LANGUAGES</label>
                        <input id="brithday" type="text" placeholder="" data-role="tagsinput" class="tags input-guest form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="text-align:center;" class="col-md-12">
                      <div class="form-group">
                        <label for="brithday">EDUCATION</label>
                        <textarea placeholder="" style="resize:none;height:auto;border-radius:20px;" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="text-align:center;" class="col-md-12">
                      <div class="form-group">
                        <label for="brithday">TEACHING EXPERIENCE</label>
                        <textarea placeholder="" style="resize:none;height:auto;border-radius:20px;" class="form-control"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="text-align:center;" class="col-md-12">
                      <button type="button" style="margin-top:60px;padding: 15px 40px; font-size: 14px;font-family:'LatoLight'" class="btn btn-danger">CHANGE</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="video_profile" class="tab-pane fade">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <div style="padding-left: 40px;padding-right: 40px;" class="block">
                <div class="block-title">VIDEO PROFILE</div>
                <div style="text-align:center;border-radius: 40px;padding-bottom:40px;" class="block-content">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="info-video">VIDEO <span class="in">1 </span>OF <span class="out">3 </span></div>
                    </div>
                    <div class="col-md-6">
                      <div class="actions">
                        <div class="show">SHOW</div>
                        <div class="delete">DELETE</div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div style="background-image:url(img/avatar.jpg)" class="video-elem video-preview active"><span>ADD</span></div>
                    </div>
                    <div class="col-md-4">
                      <div class="video-elem"><span>ADD</span></div>
                    </div>
                    <div class="col-md-4">
                      <div class="video-elem"><span>ADD						</span></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="video-active view">ACTIVE</div>
                    </div>
                    <div class="col-md-4">
                      <div class="video-active">ACTIVE</div>
                    </div>
                    <div class="col-md-4">
                      <div class="video-active">ACTIVE</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="password" class="tab-pane fade">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div style="padding-left: 40px;padding-right: 40px;" class="block">
                <div class="block-title">CHANGE PASSWORD</div>
                <div style="text-align:center;border-radius 40px;" class="block-content">
                  <div class="form-group">
                    <label for="old-password">OLD PASSWORD</label>
                    <input id="old-password" type="password" placeholder="" class="input-password form-control">
                  </div>
                  <div class="form-group">
                    <label for="new-password">NEW PASSWORD</label>
                    <input id="new-password" type="password" placeholder="" class="input-password form-control">
                  </div>
                  <div class="form-group">
                    <label for="repeat-new-password">ONCE AGAIN</label>
                    <input id="repeat-new-password" type="password" placeholder="" class="input-password form-control">
                  </div>
                  <button type="button" style="margin-top:40px;padding: 15px 40px; font-size: 14px;font-family:'LatoLight'" class="btn btn-danger">CHANGE</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop