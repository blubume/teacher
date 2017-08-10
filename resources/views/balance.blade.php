@extends('layouts.app')

@section('description')
 Blubu-balance
@stop

@section('keywords')
 Blubu-balance
@stop

@section('title')
 Blubu-balance
@stop

@section('style')
{{ asset('styles/balance.css') }}
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
        <div class="col-md-4 bl">
          <div data-toggle="tooltip" data-placement="bottom" title="534 Chats" class="block-info-data tooltipInfo"><img src="/img/chat.svg"><span>534</span></div>
        </div>
        <div class="col-md-4 bl">
          <div data-toggle="tooltip" data-placement="bottom" title="Total Payments" class="block-info-data balance tooltipInfo"><span>120 343 RUB</span></div>
        </div>
        <div class="col-md-4 bl">
          <div data-toggle="tooltip" data-placement="bottom" title="923 Minutes" class="block-info-data tooltipInfo"><img src="/img/red-clock.svg"><span>932M</span></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
            <div class="block-title">PAYMENT HISTORY</div>
            <div style="padding-left:20px;padding-right:20px;overflow: auto;" class="block-content">
              <table class="table table-data">
                <thead>
                  <tr>
                    <td>AMOUNT</td>
                    <td>STATUS</td>
                    <td>DATE</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="balance">150.00 RUB</td>
                    <td class="status_ok">SENT</td>
                    <td class="date">12.12.16 12:53</td>
                  </tr>
                  <tr>
                    <td class="balance">150.00 RUB</td>
                    <td class="status_proccess">IN PROCESS</td>
                    <td class="date">12.12.16 12:53</td>
                  </tr>
                  <tr>
                    <td class="balance">150.00 RUB</td>
                    <td class="status_error">ERROR</td>
                    <td class="date">12.12.16 12:53</td>
                  </tr>
                  <tr>
                    <td class="balance">150.00 RUB</td>
                    <td class="status_ok">SENT</td>
                    <td class="date">12.12.16 12:53</td>
                  </tr>
                  <tr>
                    <td class="balance">150.00 RUB</td>
                    <td class="status_ok">SENT</td>
                    <td class="date">12.12.16 12:53</td>
                  </tr>
                  <tr>
                    <td class="balance">150.00 RUB</td>
                    <td class="status_ok">SENT</td>
                    <td class="date">12.12.16 12:53</td>
                  </tr>
                  <tr>
                    <td class="balance">150.00 RUB</td>
                    <td class="status_ok">SENT</td>
                    <td class="date">12.12.16 12:53</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop