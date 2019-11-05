<div class="gdlr-core-pbf-wrapper" style="padding: 110px 0px 45px 0px;" id="demende_devis">
    <div class="gdlr-core-pbf-background-wrap">
        <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(/assets/upload/hp2-service-bg.jpg);background-size: cover;background-position: center;" data-parallax-speed="0.1"></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first" data-skin="Contact form grey">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 10px 0px 0px 0px;">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-left-icon" style="margin: -4px 20px 0px 0px;font-size: 28px;"><i class="icon_genius" style="color: #3155a7;"></i></div>
                                <div class="gdlr-core-title-item-left-icon-wrap">
                                    <div class="gdlr-core-title-item-title-wrap ">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 25px;font-weight: 600;letter-spacing: 0px;text-transform: none;color: #3155a7;">
                                            Demandez un Devis Gratuit
                                            <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                <div role="form" class="wpcf7" id="wpcf7-f4846-p4931-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"></div>
                                    <div class="screen-reader-response"></div>
                                    <form id="devis_form" method="post" enctype="multipart/form-data" novalidate >

                                        @csrf

                                        <div class="quform-elements">
                                            <div class="quform-element">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        <input id="name" type="text" name="name" size="40" placeholder="Nom et Prénom *" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                    </span> 
                                                </p>
                                            </div>                                               

                                            <div class="quform-element">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        <input id="telephone" type="phone" name="phone" size="40" placeholder="Téléphone *" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                                                    </span> 
                                                </p>
                                            </div>                                                

                                            <div class="quform-element">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-email">
                                                        <input id="email" type="text" name="email" size="40" placeholder="Email *" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false">
                                                    </span> 
                                                </p>
                                            </div>

                                            <div class="quform-element">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        <select id="service" name="service" placeholder="Services*" style="font-size: 15px;padding: 15px 22px;width: 100%;display: block;">
                                                            <option selected="selected" disabled="disabled">Services </option>
                                                            <option disabled="disabled">-------------------</option>

                                                            @foreach($objects as $object)

                                                                @if( \Request('object') != '' and $object['name'] == \Request('object') )

                                                                    <option value="{{ $object['name'] }}" selected> {{ $object['name'] }} </option>
                                                                @else

                                                                    <option value="{{ $object['name'] }}"> {{ $object['name'] }} </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </span> 
                                                </p>
                                            </div>

                                            <div class="quform-element">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap your-message">
                                                        <textarea  id="message" name="message" cols="40" rows="10" placeholder="Votre message ici.." class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea>
                                                    </span>
                                                </p>
                                            </div>
                                            <p>
                                                <!-- Begin Submit button -->
                                                <div class="quform-submit">
                                                    <div class="quform-submit-inner">

                                                        {!! htmlFormSnippet() !!}
                                                        
                                                        <div class="submit-button" id="submit_devis_button">

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
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                <div class="gdlr-core-text-box-item-content" style="font-size: 15px;">
                                    <p>*Nous vous répondrons dans les 48 heures </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-column gdlr-core-column-40">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 10px 0px 0px 75px;">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 25px;">
                                <div class="gdlr-core-title-item-title-wrap ">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 35px;font-weight: 600;letter-spacing: 0px;text-transform: none;">Be on the top & Get more traffic  to your website<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 25px;">
                                <div class="gdlr-core-text-box-item-content" style="font-size: 17px;">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 15px;">
                                <ul>
                                    <li class=" gdlr-core-skin-divider" style="margin-bottom: 24px;"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon icon_cloud_alt" style="color: #3155a7;font-size: 25px;width: 25px;" ></i></span><span class="gdlr-core-icon-list-content" style="color: #3155a7;font-size: 18px;">Be on the top of Google</span></li>
                                    <li class=" gdlr-core-skin-divider" style="margin-bottom: 24px;"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon icon_clock_alt" style="color: #3155a7;font-size: 25px;width: 25px;" ></i></span><span class="gdlr-core-icon-list-content" style="color: #3155a7;font-size: 18px;">Save your time and let us handle it</span></li>
                                    <li class=" gdlr-core-skin-divider" style="margin-bottom: 24px;"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon icon_desktop" style="color: #3155a7;font-size: 25px;width: 25px;" ></i></span><span class="gdlr-core-icon-list-content" style="color: #3155a7;font-size: 18px;">Cros-devices ability</span></li>
                                    <li class=" gdlr-core-skin-divider" style="margin-bottom: 24px;"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon icon_star_alt" style="color: #3155a7;font-size: 25px;width: 25px;" ></i></span><span class="gdlr-core-icon-list-content" style="color: #3155a7;font-size: 18px;">Be rewarded by our services</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@section('scripts')
    <script type="text/javascript">

        jQuery(document).ready(function($) {
            //console.log('Load Done!');

            jQuery(document).on('click','#submit_devis_button', function(event){
                $('#msg').find('.alert').remove();

                var name = $("#name").val(),
                    email = $("#email").val(),
                    service = $("#service").val(),
                    phone = $("#phone").val(),
                    message = $("#message").val()
                ;

                //if(true)
                if(name != '' && email != '' && service != '' && phone != '')
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
                      'service' : service,
                      'message' : message
                    };

                    console.log(PostData);

                    $.ajax({
                      type: 'POST',
                      url: "{{ route('devis.store') }}",
                      data: PostData,
                      success: function(data, result){

                        $(".loading_spinner").css("display", "none");

                        $( '#devis_form' ).each(function(){ this.reset(); });
                        
                        console.log('data= ',data);

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
                    $('#msg').find('.alert').remove();

                    $("<div class='alert alert-danger text-center' style='color: #bb2124;'> <i class='fa fa-info-circle'></i> "+'Vous devez remplir le formulaire.'+"</div>").appendTo('#msg');
                }
            });
        });
        </script>
@endsection