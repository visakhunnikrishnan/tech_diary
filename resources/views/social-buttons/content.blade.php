@extends('master-template')


 @section('content')


 <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Manage Social Buttons</h2>
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

 @stop