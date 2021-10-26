<?php 
/* Template Name: Homepage Template */ 
get_header();
?>
  <!-- Start main-content -->
  <div class="main-content">
  
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider rev_slider_default" data-version="5.0">
            <ul>

              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php the_field('slider'); ?>" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                <!-- MAIN IMAGE -->
                <img src="<?php the_field('slider'); ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-1-layer-1"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-110']" 
                  data-fontsize="['110']"
                  data-lineheight="['120']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700;"><?php the_field("slider1_one");?>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
                  id="rs-1-layer-2"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['35']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;"><?php the_field('slider_heading_first'); ?> 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white" 
                  id="rs-1-layer-3"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['35','35','40']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;"><?php the_field('heading_paragarpgh_1'); ?> 
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-1-layer-4"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95','105','110']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">Donate Now</a> 
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php the_field('slider_two'); ?>" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
                <!-- MAIN IMAGE -->
                <img src="<?php the_field('slider_two'); ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent-6 text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-1"
                
                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['28']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;"><?php the_field('slider2_heading');?> 
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['48']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;"><?php the_field('slider2_headingtwo'); ?> 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-center" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;"><?php the_field('slider2_paragrapgh');?>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['115']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Donate Now</a> 
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php the_field('slider_three'); ?>" data-rotate="0" data-saveperformance="off" data-title="Slide 3" data-description="">
                <!-- MAIN IMAGE -->
                <img src="<?php the_field('slider_three'); ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pr-20 pl-20"
                  id="rs-3-layer-1"

                  data-x="['right']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['64']"
                  data-lineheight="['72']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;"><span class=""><?php the_field('slider3_heading');?></span>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-3-layer-2"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['32']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;"><?php the_field('slider2_headingthree');?> 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-right" 
                  id="rs-3-layer-3"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16','18',24']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;"><?php the_field('slider3_paragrapgh');?>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-3-layer-4"

                  data-x="['right']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-flat btn-theme-colored pl-20 pr-20" href="#">Donate Now</a> 
                </div>
              </li>

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
       
      </div>
    </section>

    <!-- Section: About Us  -->
    <section id="about">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
              <div class="meet-doctors">
              <h2 class="font-36 mt-10">ABOUT <span class="text-theme-colored"> US</span></h2> 
              <h3>Our <span class="text-theme-colored">Mission</span></h3>         
              <p class="mb-30"><?php the_field('our_mission'); ?><a class="" href="#">Read More</a></p>
              <div class="row">
                <?php
                            if( have_rows('missions') ):
                            
                                // Loop through rows.
                                while( have_rows('missions') ) : the_row();
                ?>            
                
                 <div class="col-xs-12 col-sm-6 col-md-6">
                  <div class="icon-box p-0 mb-30">
                    <a class="icon icon-sm pull-left sm-pull-none flip bg-theme-colored mb-sm-15 mb-0 mr-10" href="#">
                      <i class="<?php the_sub_field('flaticon'); ?> text-white font-36"></i>
                    </a>
                    <h4 class="icon-box-title m-0 mb-5"><?php the_sub_field('heading'); ?></h4>
                    <p class="text-gray mb-5"><?php the_sub_field('paragarph'); ?></p>
                  </div>
                </div>
                
                <?php
                                // End loop.
                                endwhile;
                            
                            // No value.
                            else :
                                // Do something...
                            endif;
                ?>
               
                
              </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">              
              <!-- Donation Form Starts -->
              <form id="paypal_donate_form_onetime_recurring" class="form p-30" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/about/f1.jpg')">
                <div class="row">
                  <div class="col-md-12">
                    <h3 class="text-white mt-0 mb-30 bg-theme-colored text-center">Make a Donation Now</h3>
                    <div class="form-group text-white mb-30">
                      <label><strong class="text-white">Payment Type</strong></label> <br>
                      <label class="radio-inline">
                        <input checked="" value="one_time" name="payment_type" type="radio"> 
                        One Time
                      </label>
                      <label class="radio-inline">
                        <input value="recurring" name="payment_type" type="radio"> 
                        Recurring
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-12" id="donation_type_choice" style="display: none;">
                    <div class="form-group mb-20">
                      <label><strong class="text-white">Donation Type</strong></label>
                      <div class="radio text-white mt-5">
                        <label class="radio-inline">
                          <input value="D" name="t3" checked="" type="radio">
                          Daily</label>
                        <label class="radio-inline">
                          <input value="W" name="t3" type="radio">
                          Weekly</label>
                        <label class="radio-inline">
                          <input value="M" name="t3" type="radio">
                          Monthly</label>
                        <label class="radio-inline">
                          <input value="Y" name="t3" type="radio">
                          Yearly</label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-7">
                    <div class="form-group mb-20">
                      <label><strong class="text-white">Donate for</strong></label>
                      <select name="item_name" class="form-control">
                        <option value="Educate Children">Educate Children</option>
                        <option value="Child Camps">Child Camps</option>
                        <option value="Clean Water for Life">Clean Water for Life</option>
                        <option value="Campaign for Child Poverty">Campaign for Child Poverty</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-7">
                    <div class="form-group mb-30">
                      <label><strong class="text-white">Currency</strong></label>
                      <select name="currency_code" class="form-control">
                        <option value="">Select Currency</option>
                        <option value="USD" selected="selected">USD - U.S. Dollars</option>
                        <option value="AUD">AUD - Australian Dollars</option>
                        <option value="BRL">BRL - Brazilian Reais</option>
                        <option value="GBP">GBP - British Pounds</option>
                        <option value="HKD">HKD - Hong Kong Dollars</option>
                        <option value="HUF">HUF - Hungarian Forints</option>
                        <option value="INR">INR - Indian Rupee</option>
                        <option value="ILS">ILS - Israeli New Shekels</option>
                        <option value="JPY">JPY - Japanese Yen</option>
                        <option value="MYR">MYR - Malaysian Ringgit</option>
                        <option value="MXN">MXN - Mexican Pesos</option>
                        <option value="TWD">TWD - New Taiwan Dollars</option>
                        <option value="NZD">NZD - New Zealand Dollars</option>
                        <option value="NOK">NOK - Norwegian Kroner</option>
                        <option value="PHP">PHP - Philippine Pesos</option>
                        <option value="PLN">PLN - Polish Zlotys</option>
                        <option value="RUB">RUB - Russian Rubles</option>
                        <option value="SGD">SGD - Singapore Dollars</option>
                        <option value="SEK">SEK - Swedish Kronor</option>
                        <option value="CHF">CHF - Swiss Francs</option>
                        <option value="THB">THB - Thai Baht</option>
                        <option value="TRY">TRY - Turkish Liras</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-7">
                    <div class="form-group mb-30">
                      <label><strong class="text-white">How much do you want to donate?</strong></label>
                      <select name="amount" class="form-control">
                          <option value="20">20</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                          <option value="200">200</option>
                          <option value="500">500</option>
                          <option value="other">Other Amount</option>
                      </select>
                      <div id="custom_other_amount" style="display: none;">
                        <label><strong>Custom Amount:</strong></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-7">
                    <div class="form-group">
                      <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30 w-100" data-loading-text="Please wait...">Donate Now</button>
                    </div>
                  </div>
                </div>
              </form>

              <!-- Appointment Form Validation-->
              <script type="text/javascript">
                $("#home_appointment_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('&lt;div id="form-result" class="alert alert-success" role="alert" style="display: none;"&gt;&lt;/div&gt;');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
              <!-- Appointment Form Ends -->
            </div>
        </div>
      </div>
    </section>

    <!-- divider: Emergency Services -->
    <section class="divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.2"  style="background-image:url('<?php the_field('call_to_action_image'); ?>')"  data-parallax-ratio="0">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 text-white"><?php the_field('call_to_action_text');?></h2>
            </div>
          </div>
        </div>
      </div>      
    </section>

    
    
    <!-- Section: team -->
    <section id="team">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-colored font-weight-600"> Team </span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p><?php the_field('our_team_subheading');?></p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <?php

                 if( have_rows('team_members') ):
                    $a= 'col-md-offset-3';
                        // Loop through rows.
                        while( have_rows('team_members') ) : the_row(); ?>
           <div class="col-sm-6 col-md-3 <?php if($a == 'col-md-offset-3'): echo $a; else: echo ''; endif; ?> pb-sm-30">
              <div class="volunteer">
                <img class="img-fullwidth img-responsive" src="<?php the_sub_field('image'); ?>" alt="">                
                <div class="volunteer-info bg-theme-colored">
                  <h3 class="mb-0 mt-0"><a class="text-white" href="#"><?php the_sub_field('name'); ?></a></h3>
                  <p class="text-white"><?php the_sub_field('position'); ?></p>
                   <div class="volunteer-more text-white">
                    <p><?php the_sub_field('description'); ?></p>
                    <div class="social-media">
                      <ul class="styled-icons icon-circled pt-5">
                        <li><a href="<?php the_sub_field('facebook'); ?>"><i class="fa fa-facebook text-white"></i></a></li>
                        <li><a href="<?php the_sub_field('twitter'); ?>"><i class="fa fa-twitter text-white"></i></a></li>
                        <li><a href="<?php the_sub_field('dribbble'); ?>"><i class="fa fa-dribbble text-white"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
            
                    
                    
                    <?php 
                        // End loop.
                       $a++; endwhile;
                    
                    // No value.
                    else :
                        // Do something...
                    endif;
            ?>
              
          
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-dark-5" style="background-image:url('<?php the_field('counter_background');?>')" data-parallax-ratio="0">
      <div class="container pt-80 pb-80">
        <div class="row">
    <?php

                // Check rows exists.
                if( have_rows('counter') ):
                
                    // Loop through rows.
                    while( have_rows('counter') ) : the_row(); ?>
                
        <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="<?php the_sub_field('icon'); ?> mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="<?php the_sub_field('number'); ?>" class="animate-number text-white font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600"><?php the_sub_field('name'); ?></h5>
            </div>
          </div>
                  <?php   endwhile;
                
                // No value.
                else :
                    // Do something...
                endif;
        ?>
        </div>
      </div>
    </section>


    <!-- Section: Our Portfolio -->
    <section id="gallery" class="">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Photo <span class="text-theme-colored font-weight-600">Gallery</span></h2>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              <p><?php the_field('gallery_subheading');?></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">

            <!-- Portfolio Gallery Grid -->
            <div id="grid" class="gallery-isotope grid-3 masonry gutter-10 clearfix">

        <?php

            // Check rows exists.
            if( have_rows('gallery_content') ):
            
                // Loop through rows.
                while( have_rows('gallery_content') ) : the_row(); ?>
            
                    <!-- Portfolio Item Start -->
              <div class="gallery-item <?php the_sub_field('category'); ?>">
                <div class="thumb">
                  <img class="img-fullwidth" src="<?php the_sub_field('image'); ?>" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="portfolio-upper-part">
                    <h4 class="font-22 mb-0"><?php the_sub_field('title'); ?></h4>
                    <h5 class="font-14 mt-0">- <?php the_sub_field('category'); ?></h5>
                  </div>
                  <div class="portfolio-bottom-part">
                    <!-- <ul class="list-inline">
                      <li><i class="fa fa-heart-o font-16 text-theme-colored vertical-align-middle"></i><span class="font-14 ml-5">839</span></li>
                      <li><i class="fa fa-comments-o font-16 text-theme-colored vertical-align-middle"></i><span class="font-14 ml-5">360</span></li>
                    </ul> -->
                  </div>
                  <div class="portfolio-view">
                    <a class="image-popup-vertical-fit" title="Donate" href="<?php the_sub_field('image'); ?>">
                      <i class="fa fa-camera font-24 text-theme-colored"></i>
                    </a>
                  </div>
                </div>
              </div>
              <!-- Portfolio Item End -->
          <?php   
                // End loop.
                endwhile;
            
            // No value.
            else :
                // Do something...
            endif;
        ?>
             
  

            </div>
            <!-- End Portfolio Gallery Grid -->
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Video Tour -->
    <section class="divider parallax layer-overlay overlay-dark-5" style="background-image:url('<?php the_field('video_section_background'); ?>')" data-parallax-ratio="0">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <a href="<?php the_field('video_url');?>" data-lightbox-gallery="youtube-video"><i class="fa fa-play-circle text-theme-colored font-72"></i></a>
                <h2 class="text-white text-uppercase font-48 font-weight-700 mb-0"><?php the_field('video_heading_one');?> <span class="text-theme-colored"><?php the_field('video_heading_color');?></span> <?php the_field('video_heading_three');?></h2>
                <p class="font-16 text-white"><?php the_field('video_section_description');?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Donation questions -->
    <section id="donation_questions" class="">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-uppercase line-bottom-center mt-0">Donation <span class="text-theme-colored font-weight-600">Questions?</span></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <h3><span class="text-theme-colored">ACES</span></h3>
            <div id="accordion1" class="panel-group accordion transparent">
               <?php

                // Check rows exists.
                if( have_rows('question_first') ):
                $i="active";
                $id = "accordion11";
                    // Loop through rows.
                    while( have_rows('question_first') ) : the_row(); ?>
                
              <div class="panel">
                <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#<?php echo $id; ?>" class="<?php if($i=='active'): echo 'active'; else: echo 'collapse';endif; ?>" aria-expanded="<?php if($i=='active'): echo 'true'; else: echo 'false';endif; ?>"> <span class="open-sub"></span> <strong><?php the_sub_field('question'); ?></strong></a> </div>
                <div id="<?php echo $id; ?>" class="panel-collapse collapse <?php if($i=='active'): echo 'in'; endif; ?>" role="tablist" aria-expanded="<?php if($i=='active'): echo 'true'; else: echo 'false';endif; ?>" style="">
                  <div class="panel-content">
                    <p><?php the_sub_field('answer'); ?></p> 
                  </div>
                </div>
              </div>
     <?php  
            $id++; $i++; endwhile;
        
        // No value.
        else :
            // Do something...
        endif;
    ?>
              
            </div>
          </div>
          <div class="col-md-4">
            <h3>TOXIC <span class="text-theme-colored">STRESS</span></h3>
            <div id="accordion2" class="panel-group accordion transparent">
             
         <?php

                // Check rows exists.
                if( have_rows('question_two') ):
                $id = "accordion21";
                    // Loop through rows.
                    while( have_rows('question_two') ) : the_row(); ?>
                
              <div class="panel">
                <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#<?php echo $id; ?>" class="collapse" aria-expanded="false"> <span class="open-sub"></span> <strong><?php the_sub_field('question'); ?></strong></a> </div>
                <div id="<?php echo $id; ?>" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="">
                  <div class="panel-content">
                    <p><?php the_sub_field('answer'); ?></p> 
                  </div>
                </div>
              </div>
     <?php  
            $id++; endwhile;
        
        // No value.
        else :
            // Do something...
        endif;
    ?>
             
            </div>
          </div>
          <div class="col-md-4">
            <h3>Building <span class="text-theme-colored">Resiliency</span></h3>
            <div id="accordion3" class="panel-group accordion transparent">
              
            <?php

                // Check rows exists.
                if( have_rows('question_boxthree') ):
                $id = "accordion31";
                    // Loop through rows.
                    while( have_rows('question_boxthree') ) : the_row(); ?>
                
              <div class="panel">
                <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#<?php echo $id; ?>" class="collapse" aria-expanded="false"> <span class="open-sub"></span> <strong><?php the_sub_field('question'); ?></strong></a> </div>
                <div id="<?php echo $id; ?>" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="">
                  <div class="panel-content">
                    <p><?php the_sub_field('answer'); ?></p> 
                  </div>
                </div>
              </div>
     <?php  
            $id++; endwhile;
        
        // No value.
        else :
            // Do something...
        endif;
    ?>
             
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section id="contact" class="divider bg-silver-light">
      <div class="container pt-60 pb-60">      
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase line-bottom-center mt-0">Contact Us</h2>
              <p><?php the_field('contact_subheading','option');?></p>
            </div>
          </div>
        </div>
        <div class="row pt-10">
          <div class="col-md-10 col-md-offset-1">
            <!-- Contact Form -->
            <?php echo do_shortcode('[contact-form-7 id="63" title="Untitled"]');?>

            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: divider -->
    <section class="bg-theme-colored">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-12">
            <div class="call-to-action pt-30 pb-30">
              <div class="col-md-9">
                <h3 class="text-white">Lets Change the world we all together, join us now as a volunteer</h3>
              </div>
              <div class="col-md-3 text-right sm-text-center"> 
                <a href="#" class="btn btn-transparent btn-border btn-circled btn-lg mt-10">Become a Volunteer</a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
   <!--  Revolution slider scriopt -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider_default").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                  touchenabled: "on",
                  swipe_threshold: 75,
                  swipe_min_touches: 1,
                  swipe_direction: "horizontal",
                  drag_block_vertical: false
                },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [700, 768, 960, 720],
              lazyType: "none",
              parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
<?php 
get_footer();
?>