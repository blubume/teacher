@extends('layouts.app')

@section('description')
 Blubu-request
@stop

@section('keywords')
 Blubu-request
@stop

@section('title')
 Blubu-request
@stop

@section('style')
{{ asset('styles/request.css') }}
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
        <div class="col-md-4 col-md-offset-4">
          <div style="padding:10px;" class="row button-block">
            <div class="slide-block">
              <div ident="online" class="slide-elem active">ONLINE</div>
              <div ident="offline" class="slide-elem">OFFLINE</div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div style="border-radius:40px;" class="block">
            <div class="block-title">CALLS FROM STUDENTS</div>
            <div style="padding-left:20px;padding-right:20px;overflow: auto;" class="block-content">
              <div class="block-elem">
                <div class="row">
                  <div class="col-xs-8">
                    <div class="col-xs-4 avatar"><img src="/img/user_1.jpg"></div>
                    <div class="col-xs-8 teacher-data">
                      <div class="teacher-nickname"><span>Katherine Beck</span>
                        <div class="redTag tagInfo">ADVANCED</div>
                      </div>
                      <div class="teacher-last">
                        <div class="defaultTag">LEISURE</div>
                        <div class="orangeTag">TO LIVE ABOARD</div>
                      </div>
                    </div>
                  </div>
                  <div style="text-align:right;" class="col-xs-4">
                    <div class="circle-button green-circle phone mini-cricle"></div>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              <div class="block-elem">
                <div class="row">
                  <div class="col-xs-8">
                    <div class="col-xs-4 avatar"><img src="/img/user_2.jpg"></div>
                    <div class="col-xs-8 teacher-data">
                      <div class="teacher-nickname"><span>Mary Myers</span>
                        <div class="redTag tagInfo">ADVANCED</div>
                      </div>
                      <div class="teacher-last">
                        <div class="defaultTag">LEISURE</div>
                        <div class="orangeTag">TO LIVE ABOARD</div>
                      </div>
                    </div>
                  </div>
                  <div style="text-align:right;" class="col-xs-4">
                    <div class="circle-button green-circle phone mini-cricle"></div>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              <div class="block-elem">
                <div class="row">
                  <div class="col-xs-8">
                    <div class="col-xs-4 avatar"><img src="/img/user_3.jpg"></div>
                    <div class="col-xs-8 teacher-data">
                      <div class="teacher-nickname"><span>Olivia Payne</span>
                        <div class="redTag tagInfo">ADVANCED</div>
                      </div>
                      <div class="teacher-last">
                        <div class="defaultTag">LEISURE</div>
                        <div class="orangeTag">TO LIVE ABOARD</div>
                      </div>
                    </div>
                  </div>
                  <div style="text-align:right;" class="col-xs-4">
                    <div class="circle-button green-circle phone mini-cricle"></div>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              <div class="block-elem">
                <div class="row">
                  <div class="col-xs-8">
                    <div class="col-xs-4 avatar"><img src="/img/user_4.jpg"></div>
                    <div class="col-xs-8 teacher-data">
                      <div class="teacher-nickname"><span>Jessica Ray</span>
                        <div class="redTag tagInfo">ADVANCED</div>
                      </div>
                      <div class="teacher-last">
                        <div class="defaultTag">LEISURE</div>
                        <div class="orangeTag">TO LIVE ABOARD</div>
                      </div>
                    </div>
                  </div>
                  <div style="text-align:right;" class="col-xs-4">
                    <div class="circle-button green-circle phone mini-cricle"></div>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              <div class="block-elem">
                <div class="row">
                  <div class="col-xs-8">
                    <div class="col-xs-4 avatar"><img src="/img/user_5.jpg"></div>
                    <div class="col-xs-8 teacher-data">
                      <div class="teacher-nickname"><span>Brittany Black</span>
                        <div class="redTag tagInfo">ADVANCED</div>
                      </div>
                      <div class="teacher-last">
                        <div class="defaultTag">LEISURE</div>
                        <div class="orangeTag">TO LIVE ABOARD</div>
                      </div>
                    </div>
                  </div>
                  <div style="text-align:right;" class="col-xs-4">
                    <div class="circle-button green-circle phone mini-cricle"></div>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              <div class="block-elem">
                <div class="row">
                  <div class="col-xs-8">
                    <div class="col-xs-4 avatar"><img src="/img/user_6.jpg"></div>
                    <div class="col-xs-8 teacher-data">
                      <div class="teacher-nickname"><span>Lisa Rodriguez</span>
                        <div class="redTag tagInfo">ADVANCED</div>
                      </div>
                      <div class="teacher-last">
                        <div class="defaultTag">LEISURE</div>
                        <div class="orangeTag">TO LIVE ABOARD</div>
                      </div>
                    </div>
                  </div>
                  <div style="text-align:right;" class="col-xs-4">
                    <div class="circle-button green-circle phone mini-cricle"></div>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div data-show="true" data-keyboard="false" data-backdrop="static" class="modal application-modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header block-title">APPLICATION</div>
          <div class="modal-body">
            <div style="margin-bottom:20px;" class="app-info"><span>Thank you for sending your application video. We'll let you know once it gets approved. Have a nice day!</span></div>
          </div>
        </div>
      </div>
    </div>
@stop