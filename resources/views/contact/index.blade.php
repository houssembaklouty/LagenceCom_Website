@extends('layouts/master', ['title' => 'Contact'])

@section('content')

<div class="seocrawler-page-wrapper" id="seocrawler-page-wrapper">
    <div class="gdlr-core-page-builder-body">


        <div class="gdlr-core-pbf-wrapper " style="padding: 345px 0px 135px 0px;" data-skin="Dark Port">
            <div class="gdlr-core-pbf-background-wrap">
                <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(/assets/images/contact2.jpg);background-size: cover;background-position: center;" data-parallax-speed="0.3"></div>
            </div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                            <div class="gdlr-core-title-item-title-wrap ">
                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 90px;font-weight: 700;letter-spacing: 0px;text-transform: none;">L'@gence Com
                                    <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3>
                                </div>
                                <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 30px;font-weight: 300;font-style: normal;">Conseil en Marketing & Communication</span>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gdlr-core-pbf-wrapper " style="padding: 60px 0px 100px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                    <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first" data-skin="Contact form white">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 15px;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 32px;letter-spacing: 0px;text-transform: none;"> Envoyez-nous un message <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal">
                                        <div class="gdlr-core-divider-container gdlr-core-left-align" style="max-width: 40px;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3a3a3a;border-bottom-width: 2px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 25px;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                            <p>
                                                Faites confiance à l’agence web qui accélère votre croissance ...
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <div role="form" class="wpcf7" id="wpcf7-f1979-p1977-o1" dir="ltr">

                                            <form id="contact_form" method="post" enctype="multipart/form-data">

                                                @csrf

                                                <div class="quform-elements">

                                                    <div class="quform-element">
                                                        <p>Nom et Prénom (obligatoire)
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-name">
                                                                <input id="name" type="text" name="name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" required aria-invalid="false">
                                                            </span> 
                                                        </p>
                                                    </div>

                                                    <div class="quform-element">
                                                        <p>Email (obligatoire)
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-email">
                                                                <input id="email" type="text" name="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
                                                            </span> 
                                                        </p>
                                                    </div>

                                                    <div class="quform-element">
                                                        <p>Votre Message
                                                            <br>
                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                <textarea  id="message" name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
                                                            </span>
                                                        </p>
                                                    </div>

                                                    <p>
                                                        <!-- Begin Submit button -->
                                                        <div class="quform-submit">
                                                            <div class="quform-submit-inner">

                                                                {!! htmlFormSnippet() !!}
                                                                
                                                                <div class="submit-button" id="submit_contact_button">

                                                                    <span class="loading_spinner" style="display: none;">
                                                                        
                                                                        <i class="fa fa-circle-o-notch fa-spin fa-2x fa-fw"></i>
                                                                    </span>

                                                                    <span> Envoyer</span>
                                                                </div>
                                                            </div>

                                                            <div id="msg" style="padding-top: 1em;">

                                                            </div>
                                                        </div>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 15px;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px;letter-spacing: 0px;text-transform: none;"> Emplacement <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal">
                                        <div class="gdlr-core-divider-container gdlr-core-left-align" style="max-width: 40px;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3a3a3a;border-bottom-width: 2px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px;">
                                        <div class="gdlr-core-text-box-item-content" style="font-size: 16px;">
                                            <p>
                                                {{ config('app.adresse') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                        <ul>
                                            <li class=" gdlr-core-skin-divider gdlr-core-with-hover"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover fa fa-envelope-o" style="font-size: 16px;width: 16px;"></i><i class="gdlr-core-icon-list-icon fa fa-envelope-o" style="font-size: 16px;width: 16px;"></i></span><span class="gdlr-core-icon-list-content" style="font-size: 16px;">  {{ config('app.email') }}  </span></li>
                                            <li class=" gdlr-core-skin-divider gdlr-core-with-hover"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover fa fa-phone" style="font-size: 16px;width: 16px;"></i><i class="gdlr-core-icon-list-icon fa fa-phone" style="font-size: 16px;width: 16px;"></i></span><span class="gdlr-core-icon-list-content" style="font-size: 16px;"> {{ config('app.phone') }} </span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 15px;">
                                        <div class="gdlr-core-title-item-title-wrap ">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px;letter-spacing: 0px;text-transform: none;">Map<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span></h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-divider-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-divider-item-normal">
                                        <div class="gdlr-core-divider-container gdlr-core-left-align" style="max-width: 40px;">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3a3a3a;border-bottom-width: 2px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-wp-google-map-plugin-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px;">
                                        <div class="wpgmp_map_container wpgmp-map-2" rel="map2">
                                            <div class="wpgmp_map " style="width:100%; height:260px;" id="map2"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gdlr-core-pbf-wrapper " style="padding: 75px 0px 75px 0px;">
            <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff ;"></div>
            <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 0px;"><a href="mailto:#" target="_blank" class="gdlr-core-social-network-icon" title="email" style="font-size: 20px;color: #232323;"><i class="fa fa-envelope"></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 20px;color: #232323;margin-left: 37px;"><i class="fa fa-facebook"></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="google-plus" style="font-size: 20px;color: #232323;margin-left: 37px;"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="font-size: 20px;color: #232323;margin-left: 37px;"><i class="fa fa-linkedin"></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="font-size: 20px;color: #232323;margin-left: 37px;"><i class="fa fa-skype"></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 20px;color: #232323;margin-left: 37px;"><i class="fa fa-twitter"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      

@endsection

@section('scripts')


<script type="text/javascript">
    jQuery(document).ready(function(t){jQuery(document).on("click","#submit_contact_button",function(e){t("#msg").find(".alert").remove();var n=t("#name").val(),a=t("#email").val(),s=t("#message").val();if(""!=n&&""!=a){t(".loading_spinner").css("display","inline-block"),t.ajaxSetup({headers:{"X-CSRF-TOKEN":t('meta[name="csrf-token"]').attr("content")}});var r={_token:t("input[name=_token]").val(),name:n,email:a,message:s};t.ajax({type:"POST",url:"{{ route('contact.store') }}",data:r,success:function(e,n){t(".loading_spinner").css("display","none"),t("#contact_form").each(function(){this.reset()}),t(".centered_spinner").css("display","none"),t("#msg").find(".alert").remove(),t("<div class='alert alert-success text-center' style='color: #5cb85c;'> <i class='fa fa-info-circle'></i> "+e.success+"</div>").appendTo("#msg")},error:function(e,n,a){t(".loading_spinner").css("display","none"),t("#msg").find(".alert").remove(),t("#msg").html(""),t.each(e.responseJSON.errors,function(e,n){t("#msg").append('<div class="alert alert-danger" style="color: #bb2124;"> <i class="fa fa-info-circle"></i> '+n+"</div")})}})}else console.log("error"),t("#msg").find(".alert").remove(),t("<div class='alert alert-danger text-center' style='color: #bb2124;'> <i class='fa fa-info-circle'></i> Vous devez remplir le formulaire.</div>").appendTo("#msg")})});
</script>

{{--
<script type="text/javascript">

    jQuery(document).ready(function($) {
        //console.log('Load Done!');

        jQuery(document).on('click','#submit_contact_button', function(event){
            $('#msg').find('.alert').remove();

            //console.log('submit_contact_button -> Done !');

            var name = $("#name").val(),
                email = $("#email").val(),
                message = $("#message").val()
            ;

            //if(true)
            if(name != '' && email != '')
            {
                $(".loading_spinner").css("display", "inline-block");

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var PostData = {
                  '_token' : $("input[name=_token]").val(),
                  'name': name,
                  'email' : email,
                  'message' : message
                };

                //console.log(PostData);

                $.ajax({
                  type: 'POST',
                  url: "{{ route('contact.store') }}",
                  data: PostData,
                  success: function(data, result){

                    $(".loading_spinner").css("display", "none");

                    $( '#contact_form' ).each(function(){ this.reset(); });
                    
                    //console.log('data= ',data);

                    $(".centered_spinner").css("display", "none");

                    $('#msg').find('.alert').remove();
                    $("<div class='alert alert-success text-center' style='color: #5cb85c;'> <i class='fa fa-info-circle'></i> "+ data.success +"</div>").appendTo('#msg');

                    },

                    error : function(resultat, statut, erreur){
                        $(".loading_spinner").css("display", "none");

                        $('#msg').find('.alert').remove();

                        $('#msg').html('');
                          $.each(resultat.responseJSON.errors, function(key,value) {
                            $('#msg').append('<div class="alert alert-danger" style="color: #bb2124;"> <i class="fa fa-info-circle"></i> '+value+'</div');
                        });

                        /*

                        console.log('resultat= ',resultat);
                        console.log('statut= ',statut);
                        console.log('erreur= ',erreur);

                        */
                    }
                });
            }

            else
            {
                console.log('error');
                $('#msg').find('.alert').remove();

                $("<div class='alert alert-danger text-center' style='color: #bb2124;'> <i class='fa fa-info-circle'></i> "+'Vous devez remplir le formulaire.'+"</div>").appendTo('#msg');
            }
        });
    });
</script>
 --}}
@endsection