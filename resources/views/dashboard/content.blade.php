@extends('master-template')
@section('content')
<div id="page-content-wrapper">
    <div id="page-content">
                
         <div class="container">
                    

            @include('dashboard.js-lib')
 
            @include('dashboard.google-analytics-chart')


              <div class="row">

                   <div class="col-md-8">
                     
                      @include('dashboard.push-notification-stats')

                      @include('dashboard.info')

                   </div>

                  <div class="col-md-4">
                    @include('dashboard.recent-activity') 
                  </div>

              </div>

        </div>

      </div>
</div>
@stop