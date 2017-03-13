@extends('master-template')
 
  @section('content')
    <div id="page-content-wrapper" >
    <div id="page-content" >
                
         <div class="container">

      

       <!-- Bootstrap Summernote WYSIWYG editor -->

<!--<link rel="stylesheet" type="text/css" href="../../assets/widgets/summernote-wysiwyg/summernote-wysiwyg.css">-->
<script type="text/javascript" src="../../assets/widgets/summernote-wysiwyg/summernote-wysiwyg.js"></script>
<script type="text/javascript">
    /* WYSIWYG editor */

    $(function() { "use strict";
        $('.wysiwyg-editor').summernote({
           height: 500
        });
    });
</script>

<div class="row mailbox-wrapper">

<div class="col-md-12">

    <div class="content-box">
        <div class="mail-header clearfix">
            <div class="float-left">
                <span class="mail-title">Compose new message</span>
                
            </div>
             <a href="#" class="btn btn-md btn-info float-right" data-toggle="modal" data-target="#previewMail">Preview</a>
        </div>

        <div class="divider"></div>
        <form class="form-horizontal mrg15T" role="form">
           
            <div class="form-group row">
                <label for="inputEmail4" class="col-sm-2 control-label">Subject:</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>
        </form>

        <div class="pad15A">
            <div class="wysiwyg-editor"></div>
        </div>
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





        </div>
     </div>


  </div>     


@include('campaigns.editor.previewModal')

@include('campaigns.editor.social-ButtonModal')

@include('campaigns.editor.subscriber-ButtonModal')

    @stop
