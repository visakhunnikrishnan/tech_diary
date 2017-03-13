@extends('master-template')
 
  @section('content')
  <script type="text/javascript" src="assets/widgets/charts/sparklines/sparklines.js"></script>
  <script type="text/javascript" src="assets/widgets/charts/sparklines/sparklines-demo.js"></script>

<script type="text/javascript" src="../../assets/widgets/textarea/textarea.js"></script>

<div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage Push Notifications</h2>
      <br><br>




@include('push-notifications.pushNotification-withoutImage')

@include('push-notifications.pushNotification-withImage')




     <div class="jumbotron" style="background-color: #fff;text-align: center; border : 1px solid #eee; margin-top: 3%;">
       <h2 style="color:  rgba(31, 9, 9, 0.5);">Add New <span style="color:#46b8da;">Push Notifications</span></h2>
       <h1><span class="glyph-icon icon-bell" style="font-size: 60px; color:#46b8da;"></span></h1>
      <a class="btn btn-info" data-toggle="modal" data-target="#push-notificationModal" style="padding-left: 3%;padding-right: 3%;">create</a>
     </div>
     


                         
                      
                    </div>




        </div>
     </div>


  </div>    



@include('push-notifications.deleteModel')

@include('push-notifications.editModel')


    @stop