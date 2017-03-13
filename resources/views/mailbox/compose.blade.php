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

<div class="col-md-9">

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
                <label for="inputEmail1" class="col-sm-2 control-label">To:</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail1" placeholder="">
                </div>
            </div>
        
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

        <div class="button-pane">
            <button class="btn btn-info">Send mail</button>
            <button class="btn btn-link font-gray-dark">Save to drafts</button>
        </div>

    </div>
</div>
<div class="col-md-3">

    <div class="content-box nav-list mrg15B">
        <div class="pad10A">
            <div class="input-group">
                <input type="text" placeholder="Search mail..." class="form-control">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default" tabindex="-1">
                        <i class="glyph-icon icon-search"></i>
                    </button>
                </div>
            </div>
        </div>
        @include('mailbox.smallblock')
    </div>
    


   
</div>
</div>




        </div>
     </div>


  </div>   


  @include('mailbox.compose.preview')


    @stop