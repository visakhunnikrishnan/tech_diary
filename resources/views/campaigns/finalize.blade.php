@extends('master-template')
 
  @section('content')

  <!-- Bootstrap Datepicker -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/datepicker/datepicker.css">-->
<script type="text/javascript" src="../../assets/widgets/datepicker/datepicker.js"></script>
<script type="text/javascript">
    /* Datepicker bootstrap */

    $(function() { "use strict";
        $('.bootstrap-datepicker').bsdatepicker({
            format: 'mm-dd-yyyy'
        });
    });

</script>

<!-- Bootstrap Timepicker -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/timepicker/timepicker.css">-->
<script type="text/javascript" src="../../assets/widgets/timepicker/timepicker.js"></script>
<script type="text/javascript">

    /* Timepicker */

    $(function() { "use strict";
        $('.timepicker-example').timepicker();
    });
</script>



       <!-- Uniform -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/uniform/uniform.css">-->
<script type="text/javascript" src="../../assets/widgets/uniform/uniform.js"></script>
<script type="text/javascript" src="../../assets/widgets/uniform/uniform-demo.js"></script>



    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      <h2 style="color: rgba(132, 101, 101, 0.62);">Finalize campaign</h2>
      <br><br>

      


      <div class="container-fluid" style="text-align: center;background-color: #fff;box-shadow: 0 2px 5px 0 rgba(0,0,0,0.04),0 2px 10px 0 rgba(0,0,0,0.03);">
<div>
  <div class="jumbotron" style="background-color: #fff;text-align: center; margin: 3%;">
    
             
             <div class="container" >
                <div class="col-sm-3">
                  <h3 style="padding-top: 3%;color: rgba(132, 101, 101, 0.62);">Set time:</h3>
                </div>
                    <form class="col-sm-3">
                        <div class="form-group">
                          
                            <div class="col-sm-12" style="padding-top: 3%;">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon">
                                        <i class="glyph-icon icon-calendar"></i>
                                    </span>
                                    <input type="text" class="bootstrap-datepicker form-control" value="02/16/12" data-date-format="mm/dd/yy">
                                </div>
                            </div>
                        </div>
                    </form>
              
                    <form class="col-sm-3">
                        <div class="form-group">
                            
                            <div class="col-sm-12">
                                <div class="bootstrap-timepicker dropdown">
                                    <input class="timepicker-example form-control" type="text">
                                </div>
                            </div>
                        </div>
                    </form>
              
           </div>
          
         <div class="clearfix"></div>

         <div class="container" style="padding: 2%;">
            <h5>Your mail will be send automatically at the time set.</h5>
         </div>



    <a class="btn btn-info" href="campaigns-home" style="padding-left: 2%;padding-right: 2%;">Set time</a>
    <a class="btn btn-success" href="#" style="padding-left: 2%;padding-right: 2%;" >Cancel</a>
  </div>
</div>

<h2 style="color: rgba(132, 101, 101, 0.62);">OR</h2>

<div class="jumbotron" style="background-color: #fff;text-align: center; margin: 3%;">
<h3 style="color: rgba(132, 101, 101, 0.8);padding-bottom: 2%;">Send campaign to all recipients listed.</h3>
<a href="campaigns-home" class="btn btn-info">Send Now</a>
</div>
  
</div>



 

        </div>
     </div>


  </div>      
    @stop

 