<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sample 3</title>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory'); ?>/images/favicon.ico">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory'); ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory'); ?>/css/flat-ui.css">
    <!-- Using only with Flat-UI (free)-->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory'); ?>/css/icon-font.css">
    <!-- end -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory'); ?>/css/style.css">
</head>

<body>
    <div class="page-wrapper">
        <!-- header-11 -->
        <header class="header-11">
            <div class="container">
                <div class="row">
                    <div class="navbar col-sm-12" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle"></button>
                            <a class="brand" href="#"><img src="<?php bloginfo( 'template_directory'); ?>/img/logo@2x.png" width="50" height="50" alt=""> UX BOX</a>
                        </div>
                        <div class="collapse navbar-collapse pull-right">
                            <ul class="nav pull-left">
                                <li class=""><a href="#">SOBRE</a></li>
                            </ul>
                            <form class="navbar-form pull-left">
                                <a class="btn btn-success" href="#">ENTRAR</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="header-11-sub bg-midnight-blue">
            <div class="background">
                &nbsp;
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Conteúdo sobre UX,<br/> Arquitetura de Informação e Desenvolvimento Front-end em um só lugar!</h3>
                        <p>
                            Claro! Avise-me quando estiver pronto!
                        </p>
                        <div class="signup-form">
                            <form action="http://uxbox.us8.list-manage.com/subscribe/post?u=dbb6888fd21003874c875c283&amp;id=8370455537" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div class="form-group">
                                    <input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <div>
                                        <input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="Nome">
                                    </div>
                                    <div>
                                        <input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME" placeholder="Sobrenome">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_dbb6888fd21003874c875c283_8370455537" tabindex="-1" value=""></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-success" name="subscribe" id="mc-embedded-subscribe" >Cadastrar</button>
                                </div>
                            </form>
                        </div>
                        <div class="additional-links">
                            Não usaremos seus dados para outros fins.
                        </div>
                    </div>
                    <div class="col-sm-7 col-sm-offset-1 player-wrapper">
                        <div class="player">
                            <iframe src="//player.vimeo.com/video/12022651?byline=0&amp;portrait=0&amp;color=e74c3c" width="500" height="320" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- logos -->
        <section class="logos">
            <div class="container">
                <div><img src="<?php bloginfo( 'template_directory'); ?>/img/logos/mashable.png" alt="">
                </div>
                <div><img src="<?php bloginfo( 'template_directory'); ?>/img/logos/guardian.png" alt="">
                </div>
                <div><img src="<?php bloginfo( 'template_directory'); ?>/img/logos/forbes.png" alt="">
                </div>
                <div><img src="<?php bloginfo( 'template_directory'); ?>/img/logos/red-bull.png" alt="">
                </div>
                <div><img src="<?php bloginfo( 'template_directory'); ?>/img/logos/ny-times.png" alt="">
                </div>
            </div>
        </section>

        <!-- footer-2 -->
        <footer class="footer-2 bg-midnight-blue">
            <div class="container">
                <div class="additional-links">
                    UX in the BOX <a href="#">Termos de Uso</a> e <a href="#">Politica de Privacidade.</a>
                </div>
            </div>
        </footer>
    </div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo( 'template_directory'); ?>/js/jquery-1.10.2.min.js"></script>
    <script src="<?php bloginfo( 'template_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo( 'template_directory'); ?>/js/modernizr.custom.js"></script>
    <script src="<?php bloginfo( 'template_directory'); ?>/js/startup-kit.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
    var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
    try {
        var jqueryLoaded=jQuery;
        jqueryLoaded=true;
    } catch(err) {
        var jqueryLoaded=false;
    }
    var head= document.getElementsByTagName('head')[0];
    if (!jqueryLoaded) {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
        head.appendChild(script);
        if (script.readyState && script.onload!==null){
            script.onreadystatechange= function () {
              if (this.readyState == 'complete') mce_preload_check();
          }    
      }
  }

  var err_style = '';
  try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = err_style;
} else {
  style.appendChild(document.createTextNode(err_style));
}
head.appendChild(style);
setTimeout('mce_preload_check();', 250);

var mce_preload_checks = 0;
function mce_preload_check(){
    if (mce_preload_checks>40) return;
    mce_preload_checks++;
    try {
        var jqueryLoaded=jQuery;
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
    head.appendChild(script);
    try {
        var validatorLoaded=jQuery("#fake-form").validate({});
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    mce_init_form();
}
function mce_init_form(){
    jQuery(document).ready( function($) {
      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
      options = { url: 'http://uxbox.us8.list-manage.com/subscribe/post-json?u=dbb6888fd21003874c875c283&id=8370455537&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
      beforeSubmit: function(){
        $('#mce_tmp_error_msg').remove();
        $('.datefield','#mc_embed_signup').each(
            function(){
                var txt = 'filled';
                var fields = new Array();
                var i = 0;
                $(':text', this).each(
                    function(){
                        fields[i] = this;
                        i++;
                    });
                $(':hidden', this).each(
                    function(){
                        var bday = false;
                        if (fields.length == 2){
                            bday = true;
                                            fields[2] = {'value':1970};//trick birthdays into having years
                                        }
                                        if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                            this.value = '';
                                        } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                            this.value = '';
                                        } else {
                                          if (/\[day\]/.test(fields[0].name)){
                                              this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;                         
                                          } else {
                                              this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
                                          }
                                      }
                                  });
});
$('.phonefield-us','#mc_embed_signup').each(
    function(){
        var fields = new Array();
        var i = 0;
        $(':text', this).each(
            function(){
                fields[i] = this;
                i++;
            });
        $(':hidden', this).each(
            function(){
                if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
                    this.value = '';
                } else {
                  this.value = 'filled';
              }
          });
    });
return mce_validator.form();
}, 
success: mce_success_cb
};
$('#mc-embedded-subscribe-form').ajaxForm(options);


});
}
function mce_success_cb(resp){
    $('#mce-success-response').hide();
    $('#mce-error-response').hide();
    if (resp.result=="success"){
        $('#mce-'+resp.result+'-response').show();
        $('#mce-'+resp.result+'-response').html(resp.msg);
        $('#mc-embedded-subscribe-form').each(function(){
            this.reset();
        });
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                $('#mce-'+resp.result+'-response').show();
                $('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = $(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = $(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = $(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = $().parent(input_id).get(0);
                }
                if (f){
                    $(f).append(html);
                    $(input_id).focus();
                } else {
                    $('#mce-'+resp.result+'-response').show();
                    $('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            $('#mce-'+resp.result+'-response').show();
            $('#mce-'+resp.result+'-response').html(msg);
        }
    }
}

</script>
</body>
</html>