@extends('master-template')
 
  @section('content')
    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Sample template-1</h2>
      <br><br>
       
       @include('templates.assets')
       @include('templates.content')

       <div class="container-fluid" style="padding: 3%;">
          <a href="#" class="btn btn-md btn-info" data-toggle="modal" data-target="#social-buttonModel">Add social buttons</a>
          <a href="#" class="btn btn-md btn-info" data-toggle="modal" data-target="#subscriber-buttonModel">Add subscriber button</a>
        </div>
        <div class="button-pane">
            <a href="campaign-recipients" class="btn btn-info">Next</a>
            <button class="btn btn-link font-gray-dark">Save campaign</button>
        </div>
 

        </div>
     </div>


  </div>  








<div class="modal fade" id="previewMail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                       
                            <div class="container" style="padding: 3%;margin-top: 3%;background-color: #fff;">

                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size: 40px;">&times;</button>  
                              
                              <h1>Hai im the preview of mail</h1>


                              </div>
</div>  



<div class="modal fade" id="social-buttonModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                       
                            <div class="container" style="padding: 3%;margin-top: 3%;background-color: #fff;">

                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size: 40px;">&times;</button>  
                              
                                     <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Add Social Buttons</h2>
      <br><br>

           <div class="form-group">
                    
                    <div class="col-sm-8">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" style="background-color:#337ab7;color: #fff;"><i class="glyph-icon icon-facebook">&nbsp;facebook</i></span>
                            <input type="text" class="form-control" placeholder="Your facebook url goes here...">
                        </div>
                    </div>
                </div>
            
            <div class="form-group">
                    
                    <div class="col-sm-8" style="margin-top: 3%;">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" style="background-color:#c93b2a;color: #fff;"><i class="glyph-icon icon-google">&nbsp;google&nbsp;&nbsp;&nbsp;</i></span>
                            <input type="text" class="form-control" placeholder="Your google url goes here...">
                        </div>
                    </div>
                </div>

             
              <div class="form-group">
                    
                    <div class="col-sm-8"  style="margin-top: 3%;">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" style="background-color:#1c82e1;color: #fff;"><i class="glyph-icon icon-twitter">&nbsp;twitter&nbsp;&nbsp;&nbsp;</i></span>
                            <input type="text" class="form-control" placeholder="Your twitter url goes here...">
                        </div>
                    </div>
                </div>
             <div class="clearfix"></div>
             <br>
             <br>
             <a class="btn  btn-info" href="#" style="margin-left: 7%;padding-left: 3%;padding-right: 3%;">Save changes</a>
             <br>
             <br>
             <br>
             <h3 style="padding-left: 3%; color: rgba(31, 9, 9, 0.5);">Add more</h3>
              <br>

              <a href="#" style="background-color:#833ab4;color: #fff;text-decoration: none;font-size: 20px;padding: 1%;margin: 1%;border-radius: 4%;margin-left: 3%;"><span class="glyph-icon icon-instagram">&nbsp;instagram</span></a>


              <a href="#" style="background-color:#bd081c;color: #fff;text-decoration: none;font-size: 20px;padding: 1%;margin: 1%;border-radius: 4%;"><span class="glyph-icon icon-pinterest">&nbsp;pinterest</span></a>

               <a href="#" style="background-color:#00a0dc;color: #fff;text-decoration: none;font-size: 20px;padding: 1%;margin: 1%;border-radius: 4%;"><span class="glyph-icon icon-linkedin">&nbsp;linkedin</span></a>


              

           </div>


                              </div>
</div>  


<div class="modal fade" id="subscriber-buttonModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                       
                            <div class="container" style="padding: 3%;margin-top: 3%;background-color: #fff;text-align: center;">

                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size: 40px;">&times;</button>  
                              
                              <h1 style="color: rgba(132, 101, 101, 0.6);">Subsciber button added!</h1>
                              <div class="clearfix"></div>

                              <div class="container" style="height: 40px;width: 80%;margin-top: 3%;margin-bottom: 3%;">
                                <div class="col-sm-3" style="background-color: rgba(132, 101, 101, 0.3);height: 40px;"></div>
                                <div class="col-sm-9" style="border: 1px solid rgba(132, 101, 101, 0.3);height: 40px;"></div>
                              </div>


                              </div>
</div>  








    @stop
