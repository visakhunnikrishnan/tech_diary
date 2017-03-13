@extends('master-template')
 
  @section('content')
    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage Push Notifications</h2>
      <br><br>

       @include('card')
 

        </div>
     </div>


  </div>      
    @stop

 



<div class="container-fluid">
<h1 class="section-title title">Select your city</h1>


  <a href="#"><div class="col-sm-2 card" style="background-color: #fff;text-align: center; color:rgba(31, 9, 9, 0.5);height: 100px;padding-top: 3%;">
  <h1 class="glyph-icon icon-bell " style="font-size: 25px;color: #46b8da;"></h1>
    <h3>Trivandrum</h3>
  </div>
  </a><!--#city-->

 

  


</div>





<a href="#" data-toggle="modal" data-target="#starredMail" style="text-decoration: none;"></a>




<button class="btn btn-info" data-toggle="modal" data-target="#confirmSend" style="padding-left: 3%;padding-right: 3%;">create</button>





                    <div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                     
                            <div class="container" style="padding: 3%;margin-top: 3%;background-color: #fff;">

                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size: 40px;">&times;</button>  





                           
                             <br>
           
                          </div>

        
                        </div><!--push notification - modal-->





<div class="modal fade" id="bookmarkMail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="jumbotron" style="background-color: #fff;text-align: center; margin: 7%;">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size: 40px;">&times;</button> 
    <h2>Bookmarked the mail</h2>
  </div>
</div>
