<div class="slider">
    <div class="tp-banner-container clearfix">
        <div class="tp-banner" >
            <ul style="background-color: #f1f1f1">
                <!-- SLIDE 1 -->
                <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
                    <!-- MAIN IMAGE -->
                    {{ Html::image(asset($sliders->first()->first_picture), '', ['data-bgfit' => '', 'data-bgposition' => 'center center', 'data-bgrepeat' => 'no-repeat']) }}
                    <!-- LAYERS --> 
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption very_big_white skewfromrightshort fadeout"
                        data-x="center"
                        data-y="100"
                        data-speed="500"
                        data-start="1200"
                        data-easing="Circ.easeInOut"
                        style=" font-size:70px; font-weight:800; color:#fe0100;">
                        {{ ucwords($sliders->first()->name) }} <span style=" color:#000;">@lang('lang.sale')</span>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-caption medium_text skewfromrightshort fadeout"
                        data-x="center"
                        data-y="165"
                        data-hoffset="0"
                        data-voffset="-73"
                        data-speed="500"
                        data-start="1200"
                        data-easing="Power4.easeOut"
                        style=" font-size:20px; font-weight:500; color:#337ab7;">
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"
                        data-x="center"
                        data-y="210"
                        data-hoffset="0"
                        data-voffset="98" 
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500"
                        data-start="1500"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        data-linktoslide="next"
                        style="border: 2px solid #fed700;border-radius: 50px; font-size:14px; background-color:#fed700; color:#333; z-index: 12; max-width: auto; max-height: auto; white-space: nowrap; letter-spacing:1px;">
                        {{ Html::link(route('ecommerce.product.show', [$sliders->first()->id]), trans('lang.learnMore'), ['class' => 'largebtn slide1']) }}
                    </div>
                </li>
              
                <!-- SLIDE 2 -->
                <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
                <!-- MAIN IMAGE -->
                    {{ Html::image(asset($sliders->skip(config('setting.skip1'))->first()->first_picture), '', ['data-bgfit' => '', 'data-bgposition' => 'center center', 'data-bgrepeat' => 'no-repeat']) }}
                    <!-- LAYERS --> 
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_60 customin ltl tp-resizeme"
                        data-x="310"
                        data-y="140" 
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="1200"
                        data-start="700"
                        data-easing="Power4.easeOut"
                        data-splitin="chars"
                        data-splitout="none"
                        data-elementdelay="0.1"
                        data-endelementdelay="0.1"
                        data-endspeed="1000"
                        data-endeasing="Power4.easeIn"
                        style=" font-size:70px; font-weight:800; color:#333;">
                        {{ ucwords($sliders->skip(config('setting.skip1'))->first()->name) }}
                    </div>
                    
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption black_thin_blackbg_30 customin ltl tp-resizeme"
                        data-x="310"
                        data-y="220" 
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="Power4.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.1"
                        data-endspeed="1000"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">@lang('lang.thinkingSlider')
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lfb ltb start tp-resizeme"
                        data-x="310"
                        data-y="270"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="1500"
                        data-start="1600"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.1"
                        data-linktoslide="next"
                        style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">
                        {{ Html::link(route('ecommerce.product.show', [$sliders->skip(config('setting.skip1'))->first()->id]), trans('lang.getItNow'), ['class' => 'largebtn solid']) }}
                    </div>
                </li>
              
                <!-- SLIDE 3 -->
                <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" > 
                <!-- MAIN IMAGE --> 
                    {{ Html::image(asset($sliders->skip(config('setting.skip2'))->first()->first_picture), '', ['data-bgfit' => '', 'data-bgposition' => 'center center', 'data-bgrepeat' => 'no-repeat']) }}
                    <!-- LAYERS --> 
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption big_100_white lft start fadeout"
                        data-x="310"
                        data-y="120"
                        data-speed="500"
                        data-start="1200"
                        data-easing="Circ.easeInOut"
                        style=" font-size:70px; font-weight:800; color:#fff;">
                    </div>
                    <div class="tp-caption big_100_white lft fadeout"
                        data-x="310"
                        data-y="180"
                        data-speed="500"
                        data-start="1200"
                        data-easing="Circ.easeInOut"
                        style=" font-size:50px; font-weight:800; color:#fed700;">
                        {{ ucwords($sliders->skip(config('setting.skip2'))->first()->name) }}
                    </div>
                    
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-caption medium_text lfb fadeout"
                        data-x="310"
                        data-y="260"
                        data-speed="500"
                        data-start="1200"
                        data-easing="Power4.easeOut"
                        style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap; color:#34bcec; font-size:20px; font-weight:500;">
                    </div>
                    
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption fade fadeout tp-resizeme"
                        data-x="310"
                        data-y="320"
                        data-hoffset="-100"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="1500"
                        data-start="800"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.1"
                        data-linktoslide="next"
                        style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">
                        {{ Html::link(route('ecommerce.product.show', [$sliders->skip(config('setting.skip2'))->first()->id]), trans('lang.getItNow'), ['class' => 'largebtn solid']) }}
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
