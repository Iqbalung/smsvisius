<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />
        <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/   css" media="all" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
   <style>  
            /* Autocomplete 
            ----------------------------------*/  
            .ui-autocomplete { position: absolute; cursor: default; }     
            .ui-autocomplete-loading { background: white url('http://jquery-ui.googlecode.com/svn/tags/1.8.2/themes/flick/images/ui-anim_basic_16x16.gif') right center no-repeat; }*/  
   
            /* workarounds */  
            * html .ui-autocomplete { width:1px; } /* without this, the menu expands to 100% in IE6 */  
   
            /* Menu 
            ----------------------------------*/  
            .ui-menu {  
                list-style:none;  
                padding: 2px;  
                margin: 0;  
                display:block;  
            }  
            .ui-menu .ui-menu {  
                margin-top: -3px;  
            }  
            .ui-menu .ui-menu-item {  
                margin:0;  
                padding: 0;  
                zoom: 1;  
                float: left;  
                clear: left;  
                width: 100%;  
                font-size:80%;  
            }  
            .ui-menu .ui-menu-item a {  
                text-decoration:none;  
                display:block;  
                padding:.2em .4em;  
                line-height:1.5;  
                zoom:1;  
            }  
            .ui-menu .ui-menu-item a.ui-state-hover,  
            .ui-menu .ui-menu-item a.ui-state-active {  
                font-weight: normal;  
                margin: -1px;  
            } 
            input[type=text] {
    width: 100%;
    padding: 8px 10px;
    margin: 0px 0;
    box-sizing: border-box;
}
      </style>  
           
        <script type="text/javascript">  
        $(this).ready( function() {  
            $("#id").autocomplete({  
                minLength: 1,  
                source:   
                function(req, add){  
                    $.ajax({  
                        url: "<?php echo base_url(); ?>index.php/shop/lookup",  
                        dataType: 'json',  
                        type: 'POST',  
                        data: req,  
                        success:      
                        function(data){  
                            if(data.response =="true"){  
                                add(data.message);  
                            }
                        },  
                    });  
                },  
            select:   
                function(event, ui) {  
                    $("#result").append(  
                        "<li><a href='/index.php/search/"+ ui.item.value + "'></a></li>"  
                    );                    
                },        
            });  
        });  
        </script> 
</script>
<div class="container">
  <div class="form-group  form-group--form">
      <div class="products-navigation__title">
        <h3><span class="light">Fast Order Mode Temukan Produk Yang Anda Cari (kusus untuk reseller)</span> </h3>
      </div>
     
     <div class="banners--big  banners--big-left">
      <div class="row">
        
        <div class="col-xs-12  col-md-10">
        <form method="post" action="<?= base_url();?>index.php/shop/fast_order">
           <input type="text" style="width:600" name="printable_name" id="id" required>
        </div>
        <div class="col-xs-12  col-md-2">
          <div class="banners--big__form">
            <button class="btn  btn-primary" type="submit">Cari</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a href=""></a>     <a href=""></a>     <a href=""></a>

</div>
<div class="container">
<div class="row">
     
</div>
<br><br><br><br>
