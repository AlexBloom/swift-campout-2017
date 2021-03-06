<?php
/**
 * Template Name: Swift Campout
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Swift Industries
 */

get_header('campout'); ?>
<div class="bg-cream">

<!-- 2017 -->
<?php while ( have_posts() ) : the_post(); ?>

	<!-- INTRO -->
	<section id="cover" class="px-l" style="background:linear-gradient(180deg, #d57427, #f0f2db)">
	  <div class="pt-xl px-xl max-width-m mx-auto text-center">
	    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/campout/swiftcampout_logo_2017.svg" alt="">
	  </div>
	  <div class="text-center">
	    <div class="circle wow fadeIn border border-brown brown mx-auto mt-xl mb-l number-node">
	      <span class="wow zoomIn sans text-center block pt-s h1 bold">01</span>
	    </div>
	    <h2 class="h3 caps bold brown"><?php the_field('overview_title') ?></h2>
	  </div>
	  <div class="measure serif mx-auto pb-l text-left">
	    <div class="h3">
				<?php the_field('overview_text') ?>
			</div>
	  </div>
	</section>
	<div class="col-4 s-col-3 m-col-2 l-col-1 px-l mx-auto">
	  <div class="poppy border-bottom"></div>
	</div>
	<div class="relative cf mx-auto max-width-l px-m py-xl">
	  <div class="col col-12 m-col-6 relative z2 wow fadeIn mx-auto p-m">
	    <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:36.342592592592595% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BE8muTqiMtg/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Spencer Brown (@spencercbrown)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-05-03T13:34:37+00:00">May 3, 2016 at 6:34am PDT</time></p></div></blockquote>
	    <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
	  </div>
	  <!-- style="top:70%; left:50%; transform:translateX(-8rem);" -->
	  <div class="col col-12 m-col-6 relative z2 wow fadeIn mx-auto p-m m-pt-xxxl">
	    <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:33.33333333333333% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BHPgdDDAcfY/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Far Ride Magazine (@farridemag)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-06-29T14:48:12+00:00">Jun 29, 2016 at 7:48am PDT</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
	  </div>
	  <div class="s-hide s-m-hide absolute z1 top-0 left-0 right-0 bottom-0 overflow-hidden text-center" style="">
	    <svg class="poppy" style="transform:translateY(-200px);" viewbox="0 0 400 1200" height="1200" width="400">
	      <path id="loop" fill="none" stroke="currentColor" stroke-width="2px" stroke-miterlimit="10" d="M200,0v463.128c0,0,0,136.872-103.355,136.872
	        C0.031,600,3.758,472.282,64.662,427.284c122.509-90.513,208.952-45.151,270.449,83.842
	        c72.538,152.153,35.975,279.496-29.842,213.367C258.615,677.618,200,652.119,200,800.612V1200"/>
	    </svg>
	  </div>
	  <div class="m-l-hide l-hide absolute z1 top-0 left-0 right-0 bottom-0 overflow-hidden text-center">
	    <div class="mx-auto bg-poppy" style="width:2px; height:100%;"> </div>
	  </div>
	</div>

	<!-- WHERE -->
	<section id="where" class="text-center px-l">
	  <div class="circle wow fadeIn border border-poppy poppy mx-auto mb-l number-node">
	    <span class="wow zoomIn sans text-center block pt-s h1 bold">02</span>
	  </div>
	  <h2 class="h3 caps bold poppy"><?php the_field('where_title') ?></h2>
	  <div class="measure serif mx-auto pb-l text-left">
	    <div class="h3">
				<?php the_field('where_text') ?>
			</div>
	  </div>
	</section>
	<div class="col-4 s-col-3 m-col-2 l-col-1 px-l mx-auto">
	  <div class="olive border-bottom"></div>
	</div>
	<div class="relative cf mx-auto max-width-l px-m py-xxl">
	  <div class="relative z2 col col-12 m-col-6 px-m pt-l wow fadeIn" style="">
	    <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:33.24074074074074% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BKbFeMqhYQi/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Swift Industries (@swiftindustries)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-09-16T16:17:30+00:00">Sep 16, 2016 at 9:17am PDT</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
	  </div>
	  <div class="relative z2 col col-12 m-col-6 px-m m-pt-xxxl wow fadeIn" style="">
	    <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#f0f2db; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:33.33333333333333% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BHGC_5qgqPw/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by J. Bené Romanceür Esq. (@ultraromance)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-06-25T22:37:39+00:00">Jun 25, 2016 at 3:37pm PDT</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
	  </div>
	  <div class="s-hide s-m-hide absolute z1 top-0 left-0 right-0 bottom-0 overflow-hidden text-center">
	    <svg class="olive" style="transform:translateY(-200px);" viewbox="0 0 400 1200" height="1200" width="400">
	      <path fill="none" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" d="M200,0v224.574c0,28.166-22.876,50.999-51.042,51H64.5
	      	c-28.166,0-51,22.833-51,51s22.834,51,51,51h251c28.166,0,51,22.833,51,51s-22.834,51-51,51h-216c-28.166,0-51,22.833-51,51
	      	s22.834,51,51,51h177.087c28.166,0,51,22.833,51,51s-22.834,51-51,51H134.5c-28.166,0-51,22.833-51,51c0,28.168,22.834,51,51,51
	      	h120.042c28.166,0,51,22.834,51,51c0,28.168-22.834,51-51,51H251c-28.167,0-51.001,22.834-51,51V1200"/>
	    </svg>
	  </div>
	  <div class="m-l-hide l-hide absolute z1 top-0 left-0 right-0 bottom-0 overflow-hidden text-center">
	    <div class="mx-auto bg-olive" style="width:2px; height:100%;"> </div>
	  </div>
	</div>

	<!-- SIGN UP -->
	<section id="signup" class="text-center pb-xl">
	  <div class="px-l">
	    <div class="circle wow fadeIn border border-olive olive mx-auto mb-l number-node">
	      <span class="wow zoomIn sans text-center block pt-s h1 bold">03</span>
	    </div>
	    <h2 class="h3 caps bold olive"><?php the_field('signup_title') ?> </h2>
	    <div class="measure serif mx-auto pb-l text-left">
				<div class="h3">
					<?php the_field('signup_text') ?>
				</div>
	    </div>
	  </div>
	  <div class="bg-olive bg-cover bg-center p-l" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/campout/map.jpg)">
	    <div class="relative z4 measure mx-auto shadow-high relative">
	      <div class="fit">
	        <svg class="block fit width-100" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 600 200" enable-background="new 0 0 600 200" xml:space="preserve">
	          <path fill-rule="evenodd" clip-rule="evenodd" fill="#F1F2DA" d="M0,0v200h600V0H0z M300,130c-16.568,0-30-13.432-30-30
	            s13.432-30,30-30s30,13.432,30,30S316.568,130,300,130z"/>
	          <path fill-rule="evenodd" clip-rule="evenodd" stroke="rgba(0,0,0,.25)" fill="#43362D" d="M300,60c-22.091,0-40,17.908-40,40s17.909,40,40,40
	            s40-17.908,40-40S322.091,60,300,60z M300,115c-8.284,0-15-6.716-15-15s6.716-15,15-15s15,6.716,15,15S308.284,115,300,115z"/>
	        </svg>
	      </div>
	      <div class="absolute top-0 width-100 cf px-m">
	        <div class="col col-4">
	            <svg class="block width-100" x="0px" y="0px" viewBox="0 0 200 200" enable-background="new 0 0 200 200" xml:space="preserve">
	              <g>
	                <path fill="#7C8372" d="M60.166,73.288l-0.969-2.838l1.26-0.431c1.941-0.662,2.729-1.92,2.039-3.94
	                  c-0.67-1.964-2.232-2.382-4.072-1.754l-3.406,1.163l2.922,8.56L60.166,73.288z M58.231,66.394c0.862-0.295,1.604-0.535,1.973,0.543
	                  c0.356,1.045-0.438,1.315-1.244,1.591l-0.375,0.128l-0.729-2.134L58.231,66.394z"/>
	                <path fill="#7C8372" d="M45.695,128.327c0-0.318,0.211-0.613,0.611-0.613c0.401,0,0.676,0.316,1.373,0.93l0.696-0.254l-0.76-1.922
	                  h-0.634l-0.38,0.275c-0.169-0.021-0.316-0.043-0.485-0.043c-0.908,0-1.478,0.549-1.478,1.5c0,1.055,0.95,2.279,2.406,5.023
	                  c0.992,1.795,2.048,3.947,2.048,5.785c0,1.182-0.844,2.133-1.963,2.133c-1.33,0-1.795-0.971-2.175-1.816l-0.676,0.254l0.296,2.322
	                  h0.549l0.38-0.232c0.401,0.254,1.056,0.486,1.626,0.486c1.604,0,3.019-1.184,3.019-3.314c0-2.049-1.245-4.477-2.259-6.312
	                  C46.582,130.12,45.695,129.065,45.695,128.327z"/>
	                <path fill="#7C8372" d="M44.585,75.236c-1.401-2.126-4.225-2.637-6.331-1.249l-2.787,1.837l4.982,7.559l2.787-1.838
	                  C45.332,80.164,45.986,77.361,44.585,75.236z M41.759,80.133l-0.441,0.291l-2.788-4.23l0.461-0.305
	                  c1.263-0.833,2.658-0.659,3.55,0.695C43.512,78.057,42.932,79.359,41.759,80.133z"/>
	                <polygon fill="#7C8372" points="54.578,75.42 53.735,73.617 51.204,74.8 50.543,73.388 52.944,72.265 52.101,70.462 49.699,71.584
	                  49.059,70.216 51.59,69.032 50.747,67.229 46.086,69.409 49.917,77.6 	"/>
	                <polygon fill="#7C8372" points="126.093,69.558 128.39,70.06 129.896,63.169 131.795,63.585 132.22,61.64 126.126,60.307
	                  125.701,62.252 127.6,62.667 	"/>
	                <path fill="#7C8372" d="M118.263,66.439c-0.797-0.111-1.428-0.623-1.939-1.216l-1.261,1.738c0.825,0.77,1.878,1.305,3.007,1.463
	                  c0.903,0.126,1.877,0.008,2.662-0.488c0.798-0.506,1.141-1.392,1.265-2.283c0.203-1.45-0.672-2.215-1.868-2.758l-0.569-0.262
	                  c-0.386-0.188-0.987-0.478-0.915-1c0.07-0.5,0.676-0.669,1.104-0.609c0.57,0.08,1.084,0.394,1.463,0.811l1.18-1.677
	                  c-0.733-0.563-1.799-1.004-2.703-1.13c-1.794-0.251-3.256,0.756-3.511,2.575c-0.243,1.735,0.667,2.25,2.071,2.871
	                  c0.479,0.212,1.362,0.566,1.271,1.22C119.43,66.324,118.81,66.516,118.263,66.439z"/>
	                <path fill="#7C8372" d="M60.347,127.757c0.211,0.043,0.57,0.043,0.57,0.295c0,0.295-0.211,1.162-0.359,1.836l-2.132,9.986h-0.042
	                  l-1.372-5.572l1.583-5.807c0.169-0.654,0.232-0.654,0.696-0.738v-0.803H56.99v0.803c0.232,0.043,0.591,0.105,0.591,0.359
	                  c0,0.273-0.211,0.928-0.4,1.688l-0.655,2.746h-0.042l-0.654-2.746c-0.19-0.76-0.401-1.414-0.401-1.688
	                  c0-0.254,0.359-0.316,0.591-0.359v-0.803h-2.301v0.803c0.465,0.084,0.527,0.084,0.697,0.738l1.583,5.807l-1.372,5.572h-0.043
	                  l-2.132-9.986c-0.147-0.674-0.358-1.541-0.358-1.836c0-0.252,0.358-0.252,0.569-0.295v-0.803h-2.47v0.803
	                  c0.718,0.02,0.76,0.189,0.95,1.014l2.279,10.111c0.169,0.697,0.423,1.732,0.423,1.943c0,0.232-0.232,0.232-0.507,0.273v0.803h2.471
	                  v-0.803c-0.212-0.021-0.507-0.021-0.507-0.23c0-0.275,0.295-1.332,0.464-1.986l0.718-2.871h0.042l0.718,2.871
	                  c0.169,0.654,0.465,1.711,0.465,1.986c0,0.209-0.296,0.209-0.507,0.23v0.803h2.47v-0.803c-0.273-0.041-0.507-0.041-0.507-0.273
	                  c0-0.211,0.254-1.246,0.423-1.943l2.28-10.111c0.19-0.846,0.211-0.971,0.95-1.014v-0.803h-2.471V127.757z"/>
	                <path fill="#7C8372" d="M137.464,72.879c2.762,0.901,5.399-0.41,6.309-3.195c0.848-2.603-0.839-5.173-3.315-5.981
	                  c-2.477-0.808-5.354,0.274-6.204,2.876C133.345,69.364,134.702,71.978,137.464,72.879z M136.577,67.35
	                  c0.388-1.188,1.837-1.914,3.172-1.479c1.336,0.436,2.078,1.877,1.691,3.064c-0.484,1.483-1.934,2.211-3.27,1.774
	                  C136.835,70.275,136.094,68.833,136.577,67.35z"/>
	                <path fill="#7C8372" d="M91.916,67.484c2.899-0.17,4.875-2.353,4.703-5.275c-0.16-2.731-2.668-4.507-5.267-4.354
	                  c-2.6,0.152-4.883,2.209-4.723,4.939C86.8,65.716,89.018,67.654,91.916,67.484z M91.485,60.129
	                  c1.401-0.082,2.618,0.988,2.691,2.234c0.091,1.557-0.992,2.763-2.394,2.845s-2.618-0.988-2.709-2.546
	                  C89,61.417,90.083,60.211,91.485,60.129z"/>
	                <path fill="#7C8372" d="M76.079,69.338c0.767-0.144,1.264-0.883,1.123-1.638c-0.143-0.767-0.871-1.266-1.637-1.123
	                  c-0.767,0.144-1.266,0.871-1.123,1.638C74.582,68.97,75.312,69.481,76.079,69.338z"/>
	                <polygon fill="#7C8372" points="102.632,63.426 105.21,63.478 105.251,61.488 102.672,61.435 102.703,59.924 105.546,59.982
	                  105.587,57.991 100.393,57.885 100.209,66.928 102.56,66.976 	"/>
	                <polygon fill="#7C8372" points="67.13,63.83 68.799,70.685 71.083,70.128 69.415,63.274 71.303,62.814 70.833,60.878
	                  64.771,62.355 65.242,64.29 	"/>
	                <path fill="#7C8372" d="M85.863,127.626c0.865,0.084,0.865,0.211,0.865,0.824v11.695c0,0.611,0,0.719-0.865,0.824v0.801h2.786
	                  v-0.801c-0.865-0.105-0.865-0.254-0.865-0.824V128.45c0-0.613,0-0.74,0.865-0.824v-0.803h-2.786V127.626z"/>
	                <path fill="#7C8372" d="M146.395,140.843h-2.175v-10.346h2.026c0.592,0,0.676,0.275,0.739,0.592h0.634v-2.111h-0.634
	                  c-0.021,0.359-0.084,0.592-0.781,0.592h-1.984v-1.816h1.562c0.696,0,0.865,0.273,1.203,0.549l0.634-0.359l-0.761-1.436
	                  c-0.76,0.316-1.583,0.316-2.089,0.316h-2.556v0.803c0.95,0.084,0.95,0.211,0.95,0.824v11.695c0,0.611,0,0.719-0.95,0.824v0.801
	                  h2.703c0.38,0,0.887,0,1.393,0.043c0.528,0.043,1.034,0.105,1.437,0.211l0.76-1.646l-0.634-0.422
	                  C147.514,140.399,147.365,140.843,146.395,140.843z"/>
	                <path fill="#7C8372" d="M137.78,127.626c0.866,0.084,0.866,0.211,0.866,0.824v11.695c0,0.611,0,0.719-0.866,0.824v0.801h2.787
	                  v-0.801c-0.865-0.105-0.865-0.254-0.865-0.824V128.45c0-0.613,0-0.74,0.865-0.824v-0.803h-2.787V127.626z"/>
	                <path fill="#7C8372" d="M144.805,120.69c0,0,2.933,1.133,1.633-2.1c0,0,0.4-1.066-1.066-2.732
	                  c-1.466-1.666-3.332-3.732-3.332-3.732s0.699-0.699-3.232-3.131c0,0-3.371-2.322-7.087-4.483c-0.162-0.076-0.329-0.155-0.508-0.242
	                  c-7.343-3.548-15.365-2.874-15.365-2.874l0.042-0.057c-0.045,0.016-0.075,0.027-0.093,0.036c-0.291-0.123-1.921-0.819-3.281-1.545
	                  c0,0-4.499-1.6-7.198-1.766c0,0-3.836-0.852-7.847-0.77c-5.522,0.278-6.099,0.115-10.935-0.451c0,0-3.646-0.013-5.245-0.779
	                  c0,0-1.466-0.533-1.999-1.732s-0.899-3.065-3.466-5.465c0,0-1.498-1.697-1.565-3.33c0,0-0.3-1.933-0.633-0.233
	                  c0,0-0.768,2.197-0.001,3.862L73.393,89.3c0,0-1.866-1.732-2.065-2.065c0,0-0.667-0.833-0.634,0.267s-0.166,0.933,0.301,2.532
	                  c0,0,0.266,0.366,0,0.866c0,0-2.431,1.551-3.234,3.633c-0.053,0.047-0.11,0.102-0.172,0.166c-1.379,1.432-2.92,2.013-3.771,2.24
	                  c-0.127,0.02-0.263,0.051-0.402,0.095c-0.161,0.031-0.255,0.042-0.255,0.042c-0.542,0.077-1.123,0.697-1.006,1.606
	                  c0.115,0.909,4.761,1.259,4.761,1.259s0-0.004,0.001-0.005c1.011,0.22,2.299,0.411,3.412,0.295c0,0,1.666-0.101,2.033,0.3
	                  c0,0,2.499,1.766,2.832,2.332s0.866,1.033,1.199,1.366c0.334,0.333,1.1,1.866,1.366,2.667c0.267,0.799,1.634,2.799,2.833,3.064
	                  c0,0-6.365,7.766-7.498,8.432c0,0-1.033,1.066-2.299,1.199c-1.267,0.135-2.066,0.199-2.066,0.199s-0.982,0.064-1.633,0.801
	                  c0,0-1,0.334-0.833,0.9c0,0-0.667,0.465-0.133,1.066l4.865-0.102c0,0,1.266,0.068,1.065-0.998c0,0,0.667-0.068,0.6-0.834
	                  l0.974,0.189c0,0,0.519-0.1,0.708-0.322c0.101-0.066,0.272-0.18,0.552-0.367c1.1-0.732,5.231-3.133,5.231-3.133l2.732-1.766
	                  c0,0,1.5-0.367,1.833-1.332l0.366,0.066l0.033,2.766c0,0-0.565,1.299,0.2,2.166c0,0,1.6,0.299,4.532,2.432c0,0,0.533,0.5,0.533,0.9
	                  c0,0,0.166,0.4,0.933,0.232l1.833,0.367c0,0,0.562,0.574,1.466-0.732c0.51-0.736,0.516-0.762,0.513-0.762
	                  c0.008-0.004,0.546-0.34-0.513-0.605c0,0-2.499-1.199-3.998-0.934c0,0-1.667-1.166-1.933-1.732c0,0-0.101-0.666-0.767-0.998
	                  c0,0,3.132-2.967,2.532-5.434c0,0,3.065-0.566,5.132-0.232c2.065,0.334,2.713,0.131,2.713,0.131s2.148,0,2.507-0.238
	                  c0,0,2.444-0.125,4.911-1.025c0,0,0.699,1.732,0.866,3c0,0,0.066,1.865,1.3,2.465c0,0-4.065,1.367-4.565,2.166
	                  c0,0-3.565,1.117-5.099,2.184c0,0-0.5-0.25-1.366,0.682l-0.451,0.646c0,0-0.516,0.354,0.484,0.621c0,0,0.795,0.32,1.434,0.422
	                  c0,0,3.265,0.41,2.965-1.156c0,0,0.101-1.033,4.433-1.998c4.332-0.967,4.531-0.934,4.531-0.934s1.833,0.332,1.467-1.834
	                  c-0.14-0.826-0.207-1.176-0.237-1.293l-0.029-2.238c0,0,0.732-0.033,1.232,0.6c0,0,2.499,1.566,5.499,1.266h0.6l1.633,4.898
	                  c0,0,0.3,2.5,4.266,3.967c0,0,3.032,1.633,2.666,0.367c-0.367-1.268-0.567-1.635-0.567-1.635s0.122-0.951-0.433-1.1
	                  c-1.54-0.412-3.766-1.566-3.766-1.566s-0.95-0.133-0.667-2.564c0.317-2.725-0.066-3.533-0.066-3.533s0.233-1.465-1.499-1.666
	                  c0,0-1.633-1.365-1.867-1.732c-0.232-0.367-0.499-1.4-1.299-2.166c0,0,6.664,4.332,9.73,4.166l-0.134-0.334
	                  c0,0,3.233,0.701,4.898,1.699c1.667,1,2.767,1.766,5.198,2c0,0,1.866,0.799,2.4,1.299
	                  C139.772,117.458,141.839,120.024,144.805,120.69z"/>
	                <path fill="#7C8372" d="M134.951,138.942c-0.528-1.963-0.781-6.672-0.781-8.74c0.992-0.275,1.225-0.992,1.225-1.646
	                  c0-0.992-0.549-1.732-2.386-1.732h-3.843v0.803c0.866,0.084,0.866,0.211,0.866,0.824v11.695c0,0.611,0,0.719-0.866,0.824v0.801
	                  h2.787v-0.801c-0.865-0.105-0.865-0.254-0.865-0.824v-9.881h2.025c0,2.111,0.19,6.65,0.866,9.184
	                  c0.274,1.035,0.549,1.711,0.823,2.322h1.604v-0.801C135.689,140.864,135.331,140.399,134.951,138.942z M133.009,129.337h-1.921
	                  v-1.584h1.921c0.696,0,1.267,0.232,1.267,0.781C134.275,129.146,133.853,129.337,133.009,129.337z"/>
	                <path fill="#7C8372" d="M124.923,126.823c-0.782,0-1.584-0.041-2.365-0.125l-0.696,1.814l0.675,0.232
	                  c0.465-0.992,1.014-0.992,1.858-0.992v12.393c0,0.611,0,0.74-0.865,0.824v0.801h2.786v-0.801c-0.865-0.084-0.865-0.213-0.865-0.824
	                  v-12.393c0.845,0,1.394,0,1.857,0.992l0.676-0.232l-0.696-1.814C126.506,126.761,125.725,126.823,124.923,126.823z"/>
	                <polygon fill="#7C8372" points="152.852,79.086 151.407,73.087 156.519,70.811 153.896,69.536 149.708,71.646 149.687,71.636
	                  151.318,68.281 149.204,67.252 145.246,75.386 147.36,76.416 149.077,72.887 149.099,72.898 150.111,77.754 	"/>
	                <polygon fill="#7C8372" points="163.4,77.699 164.532,76.061 160.298,73.135 155.155,80.578 159.39,83.504 160.522,81.865
	                  158.222,80.277 159.108,78.994 161.29,80.5 162.423,78.861 160.241,77.354 161.101,76.111 	"/>
	                <path fill="#7C8372" d="M150.659,128.196c0-0.316,0.212-0.611,0.612-0.611s0.676,0.316,1.373,0.928l0.696-0.254l-0.76-1.92h-0.634
	                  l-0.38,0.273c-0.169-0.021-0.317-0.041-0.485-0.041c-0.908,0-1.478,0.549-1.478,1.498c0,1.057,0.949,2.281,2.406,5.025
	                  c0.992,1.795,2.048,3.947,2.048,5.785c0,1.182-0.845,2.131-1.963,2.131c-1.33,0-1.795-0.971-2.176-1.816l-0.675,0.254l0.295,2.322
	                  h0.549l0.381-0.232c0.401,0.254,1.056,0.486,1.626,0.486c1.604,0,3.019-1.182,3.019-3.314c0-2.049-1.245-4.475-2.259-6.312
	                  C151.546,129.991,150.659,128.937,150.659,128.196z"/>
	                <path fill="#7C8372" d="M94.941,127.626c0.865,0.086,0.865,0.211,0.865,0.824v1.076l-3.441-1.922
	                  c-0.316-0.168-0.358-0.211-0.358-0.568v-0.213h-1.922v0.803c0.866,0.086,0.866,0.211,0.866,0.824v11.695
	                  c0,0.611,0,0.719-0.866,0.824v0.801h2.787v-0.801c-0.865-0.105-0.865-0.254-0.865-0.824V128.45l3.8,2.152v9.543
	                  c0,0.611,0,0.719-0.865,0.824v0.801h2.786v-0.801c-0.865-0.105-0.865-0.254-0.865-0.824V128.45c0-0.613,0-0.738,0.865-0.824v-0.803
	                  h-2.786V127.626z"/>
	                <path fill="#7C8372" d="M117.11,128.196c0-0.316,0.211-0.611,0.612-0.611c0.4,0,0.676,0.316,1.372,0.928l0.697-0.254l-0.76-1.92
	                  h-0.634l-0.38,0.273c-0.169-0.021-0.317-0.041-0.485-0.041c-0.908,0-1.478,0.549-1.478,1.498c0,1.057,0.949,2.281,2.405,5.025
	                  c0.993,1.795,2.049,3.947,2.049,5.785c0,1.182-0.845,2.131-1.963,2.131c-1.331,0-1.795-0.971-2.176-1.816l-0.675,0.254l0.295,2.322
	                  h0.55l0.38-0.232c0.4,0.254,1.055,0.486,1.626,0.486c1.604,0,3.019-1.182,3.019-3.314c0-2.049-1.245-4.475-2.259-6.312
	                  C117.997,129.991,117.11,128.937,117.11,128.196z"/>
	                <path fill="#7C8372" d="M82.526,139.978c-0.485,0-0.696,0.568-0.696,1.055c0,0.465,0.232,0.992,0.696,0.992
	                  c0.465,0,0.697-0.527,0.697-0.992C83.224,140.546,83.013,139.978,82.526,139.978z"/>
	                <path fill="#7C8372" d="M72.065,127.884c0.697,0,0.865,0.273,1.203,0.549l0.634-0.359l-0.76-1.436
	                  c-0.761,0.316-1.584,0.316-2.091,0.316h-2.555v0.803c0.95,0.084,0.95,0.211,0.95,0.822v11.697c0,0.611,0,0.738-0.865,0.822v0.803
	                  h2.787v-0.803c-0.866-0.084-0.866-0.189-0.866-0.822v-9.648h2.026c0.592,0,0.676,0.273,0.739,0.592h0.634v-2.113h-0.634
	                  c-0.021,0.359-0.084,0.594-0.781,0.594h-1.984v-1.816H72.065z"/>
	                <path fill="#7C8372" d="M77.943,126.954c-0.782,0-1.584-0.043-2.365-0.127l-0.696,1.816l0.676,0.232
	                  c0.465-0.992,1.013-0.992,1.857-0.992v12.393c0,0.611,0,0.738-0.865,0.822v0.803h2.787v-0.803
	                  c-0.866-0.084-0.866-0.211-0.866-0.822v-12.393c0.845,0,1.394,0,1.858,0.992l0.676-0.232l-0.697-1.816
	                  C79.526,126.89,78.745,126.954,77.943,126.954z"/>
	                <path fill="#7C8372" d="M112.021,127.626c0.824,0.084,0.824,0.211,0.824,0.824v9.689c0,1.9-0.381,2.871-1.942,2.871
	                  c-1.521,0-1.9-0.971-1.9-2.871v-9.689c0-0.613,0-0.74,0.823-0.824v-0.803h-2.682v0.803c0.803,0.084,0.803,0.211,0.803,0.824v9.605
	                  c0,2.49,0.527,3.969,2.914,3.969c2.49,0,3.039-1.479,3.039-3.969v-9.605c0-0.613,0-0.74,0.803-0.824v-0.803h-2.682V127.626z"/>
	                <path fill="#7C8372" d="M64.106,127.757c0.865,0.084,0.865,0.211,0.865,0.822v11.697c0,0.611,0,0.717-0.865,0.822v0.803h2.786
	                  v-0.803c-0.865-0.105-0.865-0.254-0.865-0.822v-11.697c0-0.611,0-0.738,0.865-0.822v-0.803h-2.786V127.757z"/>
	                <path fill="#7C8372" d="M98.868,126.823v0.803c0.803,0.086,0.803,0.211,0.803,0.824v11.695c0,0.611,0,0.719-0.803,0.824v0.801
	                  h1.731c3.821,0,5.489-2.512,5.489-6.396c0-2.977-1.013-5.109-2.237-6.396C102.395,127.458,100.896,126.823,98.868,126.823z
	                   M101.043,140.843h-0.316v-12.879c1.098,0.189,4.243,2.365,4.243,7.41C104.97,139.407,102.943,140.843,101.043,140.843z"/>
	              </g>
	            </svg>
	        </div>
	        <div class="col col-4 p-m">
	          <!-- Leave Space here for Tag Circle Dot Area -->
	        </div>
	        <div class="col col-4 relative" style="padding-top:38%;">
	          <div class="absolute flex top-0 bottom-0 width-100">
	            <div class="my-auto width-100">
	              <h4 class="caps bold olive p-0 m-0 leading-solid">Permit</h4>
	              <h3 class="h1 condensed p-s olive p-0 m-0 leading-solid">
									 <?php the_field('subscriber_count') ?>
									 <!-- #[subscriber-chiclet listId="d69fad54d1" color="black" showlink="false" postfixtext=" "]  -->
								</h3>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="bg-cream  pb-m text-left">
	      <!-- Begin MailChimp Signup Form -->
	        <div id="mc_embed_signup">
	        <form action="//builtbyswift.us3.list-manage.com/subscribe/post?u=d1922b746a94b40b1c10d1dc1&amp;id=d69fad54d1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	            <div id="mc_embed_signup_scroll">
	              <!-- <h2>Subscribe to our mailing list</h2> -->
	              <div class="indicates-required px-m"><span class="asterisk">*</span> indicates required</div>
	              <div class="mc-field-group px-m">
	              	<label class="caps bold h5" for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
	              	<input type="email" value="" name="EMAIL" class="width-100 p-xs mb-s brown required email" id="mce-EMAIL">
	              </div>
	              <div class="cf px-s">
	                <div class="mc-field-group col col-12 s-col-6 px-s">
	                	<label class="caps bold h5" for="mce-FNAME">First Name  <span class="asterisk">*</span></label>
	                	<input type="text" value="" name="FNAME" class="width-100 p-xs mb-s brown required" id="mce-FNAME">
	                </div>
	                <div class="mc-field-group col col-12 s-col-6 px-s">
	                	<label class="caps bold h5" for="mce-LNAME">Last Name </label>
	                	<input type="text" value="" name="LNAME" class="width-100 p-xs mb-s brown" id="mce-LNAME">
	                </div>
	              </div>

	              <div class="mc-field-group px-m">
	              	<label class="caps bold h5" for="mce-CNAME">Crew Name </label>
	              	<input type="text" value="" name="CNAME" class="width-100 p-xs mb-s brown" id="mce-CNAME">
	              </div>
	              <div class="mc-address-group">
	              	<div class="mc-field-group px-m">
	              	    <label class="caps bold h5" for="mce-ADDRESS-addr1">Address </label>
	              		  <input type="text" value="" maxlength="70" name="ADDRESS[addr1]" id="mce-ADDRESS-addr1" class="width-100 p-xs mb-s brown">
	              	</div>
	              	<div class="mc-field-group px-m">
	              	    <label class="caps bold h5" for="mce-ADDRESS-addr2">Address Line 2</label>
	              		<input type="text" value="" maxlength="70" name="ADDRESS[addr2]" id="mce-ADDRESS-addr2" class="width-100 p-xs mb-s brown">
	              	</div>
	                <div class="cf px-s">
	                  <div class="mc-field-group col col-12 s-col-6 px-s">
	                	    <label class="caps bold h5" for="mce-ADDRESS-city">City</label>
	                		<input type="text" value="" maxlength="40" name="ADDRESS[city]" id="mce-ADDRESS-city" class="width-100 p-xs mb-s brown">
	                	</div>
	                	<div class="mc-field-group col col-12 s-col-6 px-s">
	                	    <label class="caps bold h5" for="mce-ADDRESS-state">State/Province/Region</label>
	                	<input type="text" value="" maxlength="20" name="ADDRESS[state]" id="mce-ADDRESS-state" class="width-100 p-xs mb-s brown">
	                	</div>
	                </div>
	                <div class="cf px-s">
	                  <div class="mc-field-group col col-12 s-col-6 px-s">
	                      <label class="caps bold h5" for="mce-ADDRESS-zip">Postal / Zip Code</label>
	                    <input type="text" value="" maxlength="10" name="ADDRESS[zip]" id="mce-ADDRESS-zip" class="width-100 p-xs mb-s brown">
	                  </div>
	                  <div class="mc-field-group col col-12 s-col-6 px-s">
	                      <label class="caps bold h5 pr-m" for="mce-ADDRESS-country">Country</label>
	                      <select name="ADDRESS[country]" id="mce-ADDRESS-country" class="width-100 p-xs mb-s brown"><option value="164" selected>USA</option><option value="286">Aaland Islands</option><option value="274">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="178">American Samoa</option><option value="4">Andorra</option><option value="5">Angola</option><option value="176">Anguilla</option><option value="175">Antigua And Barbuda</option><option value="6">Argentina</option><option value="7">Armenia</option><option value="179">Aruba</option><option value="8">Australia</option><option value="9">Austria</option><option value="10">Azerbaijan</option><option value="11">Bahamas</option><option value="12">Bahrain</option><option value="13">Bangladesh</option><option value="14">Barbados</option><option value="15">Belarus</option><option value="16">Belgium</option><option value="17">Belize</option><option value="18">Benin</option><option value="19">Bermuda</option><option value="20">Bhutan</option><option value="21">Bolivia</option><option value="22">Bosnia and Herzegovina</option><option value="23">Botswana</option><option value="181">Bouvet Island</option><option value="24">Brazil</option><option value="180">Brunei Darussalam</option><option value="25">Bulgaria</option><option value="26">Burkina Faso</option><option value="27">Burundi</option><option value="28">Cambodia</option><option value="29">Cameroon</option><option value="30">Canada</option><option value="31">Cape Verde</option><option value="32">Cayman Islands</option><option value="33">Central African Republic</option><option value="34">Chad</option><option value="35">Chile</option><option value="36">China</option><option value="185">Christmas Island</option><option value="37">Colombia</option><option value="204">Comoros</option><option value="38">Congo</option><option value="183">Cook Islands</option><option value="268">Costa Rica</option><option value="275">Cote D'Ivoire</option><option value="40">Croatia</option><option value="276">Cuba</option><option value="298">Curacao</option><option value="41">Cyprus</option><option value="42">Czech Republic</option><option value="318">Democratic Republic of the Congo</option><option value="43">Denmark</option><option value="44">Djibouti</option><option value="289">Dominica</option><option value="187">Dominican Republic</option><option value="45">Ecuador</option><option value="46">Egypt</option><option value="47">El Salvador</option><option value="48">Equatorial Guinea</option><option value="49">Eritrea</option><option value="50">Estonia</option><option value="51">Ethiopia</option><option value="189">Falkland Islands</option><option value="191">Faroe Islands</option><option value="52">Fiji</option><option value="53">Finland</option><option value="54">France</option><option value="193">French Guiana</option><option value="277">French Polynesia</option><option value="56">Gabon</option><option value="57">Gambia</option><option value="58">Georgia</option><option value="59">Germany</option><option value="60">Ghana</option><option value="194">Gibraltar</option><option value="61">Greece</option><option value="195">Greenland</option><option value="192">Grenada</option><option value="196">Guadeloupe</option><option value="62">Guam</option><option value="198">Guatemala</option><option value="270">Guernsey</option><option value="63">Guinea</option><option value="65">Guyana</option><option value="200">Haiti</option><option value="66">Honduras</option><option value="67">Hong Kong</option><option value="68">Hungary</option><option value="69">Iceland</option><option value="70">India</option><option value="71">Indonesia</option><option value="278">Iran</option><option value="279">Iraq</option><option value="74">Ireland</option><option value="322">Isle of Man</option><option value="75">Israel</option><option value="76">Italy</option><option value="202">Jamaica</option><option value="78">Japan</option><option value="288">Jersey  (Channel Islands)</option><option value="79">Jordan</option><option value="80">Kazakhstan</option><option value="81">Kenya</option><option value="203">Kiribati</option><option value="82">Kuwait</option><option value="83">Kyrgyzstan</option><option value="84">Lao People's Democratic Republic</option><option value="85">Latvia</option><option value="86">Lebanon</option><option value="87">Lesotho</option><option value="88">Liberia</option><option value="281">Libya</option><option value="90">Liechtenstein</option><option value="91">Lithuania</option><option value="92">Luxembourg</option><option value="208">Macau</option><option value="93">Macedonia</option><option value="94">Madagascar</option><option value="95">Malawi</option><option value="96">Malaysia</option><option value="97">Maldives</option><option value="98">Mali</option><option value="99">Malta</option><option value="207">Marshall Islands</option><option value="210">Martinique</option><option value="100">Mauritania</option><option value="212">Mauritius</option><option value="241">Mayotte</option><option value="101">Mexico</option><option value="102">Moldova, Republic of</option><option value="103">Monaco</option><option value="104">Mongolia</option><option value="290">Montenegro</option><option value="294">Montserrat</option><option value="105">Morocco</option><option value="106">Mozambique</option><option value="242">Myanmar</option><option value="107">Namibia</option><option value="108">Nepal</option><option value="109">Netherlands</option><option value="110">Netherlands Antilles</option><option value="213">New Caledonia</option><option value="111">New Zealand</option><option value="112">Nicaragua</option><option value="113">Niger</option><option value="114">Nigeria</option><option value="217">Niue</option><option value="214">Norfolk Island</option><option value="272">North Korea</option><option value="116">Norway</option><option value="117">Oman</option><option value="118">Pakistan</option><option value="222">Palau</option><option value="282">Palestine</option><option value="119">Panama</option><option value="219">Papua New Guinea</option><option value="120">Paraguay</option><option value="121">Peru</option><option value="122">Philippines</option><option value="221">Pitcairn</option><option value="123">Poland</option><option value="124">Portugal</option><option value="126">Qatar</option><option value="315">Republic of Kosovo</option><option value="127">Reunion</option><option value="128">Romania</option><option value="129">Russia</option><option value="130">Rwanda</option><option value="205">Saint Kitts and Nevis</option><option value="206">Saint Lucia</option><option value="237">Saint Vincent and the Grenadines</option><option value="132">Samoa (Independent)</option><option value="227">San Marino</option><option value="255">Sao Tome and Principe</option><option value="133">Saudi Arabia</option><option value="134">Senegal</option><option value="266">Serbia</option><option value="135">Seychelles</option><option value="136">Sierra Leone</option><option value="137">Singapore</option><option value="302">Sint Maarten</option><option value="138">Slovakia</option><option value="139">Slovenia</option><option value="223">Solomon Islands</option><option value="140">Somalia</option><option value="141">South Africa</option><option value="257">South Georgia and the South Sandwich Islands</option><option value="142">South Korea</option><option value="311">South Sudan</option><option value="143">Spain</option><option value="144">Sri Lanka</option><option value="293">Sudan</option><option value="146">Suriname</option><option value="225">Svalbard and Jan Mayen Islands</option><option value="147">Swaziland</option><option value="148">Sweden</option><option value="149">Switzerland</option><option value="285">Syria</option><option value="152">Taiwan</option><option value="260">Tajikistan</option><option value="153">Tanzania</option><option value="154">Thailand</option><option value="233">Timor-Leste</option><option value="155">Togo</option><option value="232">Tonga</option><option value="234">Trinidad and Tobago</option><option value="156">Tunisia</option><option value="157">Turkey</option><option value="158">Turkmenistan</option><option value="287">Turks &amp; Caicos Islands</option><option value="159">Uganda</option><option value="161">Ukraine</option><option value="162">United Arab Emirates</option><option value="262">United Kingdom</option><option value="163">Uruguay</option><option value="165">Uzbekistan</option><option value="239">Vanuatu</option><option value="166">Vatican City State (Holy See)</option><option value="167">Venezuela</option><option value="168">Vietnam</option><option value="169">Virgin Islands (British)</option><option value="238">Virgin Islands (U.S.)</option><option value="188">Western Sahara</option><option value="170">Yemen</option><option value="173">Zambia</option><option value="174">Zimbabwe</option>
	                      </select>
	                  </div>
	                </div>
	              </div>
	              <div class="mc-field-group input-group px-m">
	                  <strong class="caps bold h5">Registration <span class="asterisk">*</span></strong>
	                  <p class="serif h5">I understand that by registering for Swift Campout I will receive email newsletters from Swift Industries and Swift Campout's partnering brands!</p>
	                  <ul class="list-reset"><li><input class="mr-s" type="radio" value="I agree." name="REGISTER" id="mce-REGISTER-0"><label for="mce-REGISTER-0">I agree.</label></li></ul>
	              </div>
	              <div class="mc-field-group input-group px-m">
	                  <strong class="caps bold h5">Liability <span class="asterisk">*</span></strong>
	                  <p class="serif h5">Swift Industries is here to inspire your wandering ways, but we are in no way liable for safety or mishaps related to the Swift Campout. By creating a Swift Campout account you are taking full responsibility to travel safely and you are acknowledging the personal risks of traveling by bicycle.</p>
	                  <ul class="list-reset"><li><input class="mr-s" type="radio" value="I agree." name="LIABILITY" id="mce-LIABILITY-0"><label for="mce-LIABILITY-0">I agree.</label></li></ul>
	              </div>
	          	<div id="mce-responses" class="clear px-m">
	          		<div class="response" id="mce-error-response" style="display:none"></div>
	          		<div class="response" id="mce-success-response" style="display:none"></div>
	          	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d1922b746a94b40b1c10d1dc1_d69fad54d1" tabindex="-1" value=""></div>
	            <div class="clear px-m"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button bg-olive border-none p-s mt-m mb-s caps cream width-100 inline-block"></div>  </div>
	          </form>
	        </div>
	      <!--End mc_embed_signup-->
	      </div>
	    </div>
	  </div>
	</section>
	<div class="col-4 s-col-3 m-col-2 l-col-1 px-l mx-auto">
	  <div class="orange border-bottom"></div>
	</div>
	<div class="relative overflow-hidden cf mx-auto max-width-l px-m py-xxl">
	  <div class="relative z2 col col-12 m-col-6 px-m pt-l wow fadeIn" style="">
	    <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BHFMof7DrDj/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Gabe (@olgrumpy)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-06-25T14:42:36+00:00">Jun 25, 2016 at 7:42am PDT</time></p></div></blockquote>
	    <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
	  </div>
	  <div class="relative z2 col col-12 m-col-6 px-m m-pt-xxxl wow fadeIn" style="">
	    <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:37.4537037037037% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BHGYAnSjtei/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by @morsow</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-06-26T01:41:15+00:00">Jun 25, 2016 at 6:41pm PDT</time></p></div></blockquote><script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
	  </div>
	  <div class="s-hide s-m-hide absolute z1 top-0 left-0 right-0 bottom-0 overflow-hidden text-center">
	    <svg class="orange" style="" viewbox="0 0 400 1200" height="1200" width="400">
	      <path fill="none" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" d="M200,0c0,60.5,7.671,65.06,7.5,83.5c-0.131,14.114-14,22.866-14,37
	        c0,19.262,12.84,22.807,11,41c-1.57,15.533-16.537,33.53-53.43,47.749c-21.379,8.24-43.245,1.6-70.297,8.6
	        c-11.659,3.017-37.32,15.145-47.273,14.651s-18.116,0.896-18.116-12.052S57.618,226.085,71.5,230.5
	        c16.313,5.188,47.208,8.295,95.963-5.146c21.084-5.813,58.752-10.109,77.886,5.844C268.5,250.5,292.5,239.5,292.5,269.5
	        c0,29-27.881,30.529-15,68c0,0,139.896,213.903,9.948,185.952c-18.797-4.043-46.977-1.791-60.245,13.021
	        c-12.79,14.277-17.997,35.361-22.48,53.475c-4.37,17.655-5.35,45.955-25.422,52.106c-8.558,2.623-21.672-1.588-28.582-4.784
	        c-11.791-5.454-15.799-12.551-23.968-21.825c-18.049-20.493-42.551-35.324-68.271-31.723S10.206,606.769,10.206,651.5
	        c0,45,20.876,67.916,45.734,67.916s38.265-18.373,43.438-37.302c5.789-21.185,17.93-33.599,41.972-33.614
	        c17.119-0.011,41.998,4.089,48.874,20.247c26.278,61.753-7.553,92.082,1.281,175.835c3.589,34.029,37.681,35.184,63.124,43.97
	        c20.911,7.222,41.191,6.016,54.873,26.28c5.668,8.396,5.737,17.763-0.804,25.919c-5.356,6.678-18.396,11.746-20.412,19.836
	        c-3.617,14.519,14.216,11.578,25.493,9.242c6.971-1.444,15.569,0.088,19.39,6.336c4.553,7.446-0.012,14.408-4.667,20.333
	        c-18.333,23.334-48.984,5.021-67,24.002c-18.666,19.666-66.544,12.121-69.667,38.666C188.933,1083.832,200,1144.504,200,1200"/>
	    </svg>
	  </div>
	  <div class="m-l-hide l-hide absolute z1 top-0 left-0 right-0 bottom-0 overflow-hidden text-center">
	    <div class="mx-auto bg-orange" style="width:2px; height:100%;"> </div>
	  </div>
	</div>

	<!-- SHARE -->
	<section id="share" class="text-center pb-xl px-m">
	  <div class="circle wow fadeIn border border-orange mx-auto mb-xl number-node">
	    <span class="wow zoomIn sans text-center block pt-s h1 bold orange">04</span>
	  </div>
	  <h2 class="h3 caps bold orange"><?php the_field('share_title') ?></h2>
	  <p class="h1 type-grow stormy caps py-xl orange">#SWIFTCAMPOUT</p>
	  <div class="slider mb-xl">

	    <div class="max-width-l mx-auto">
	      <?php echo wdi_feed(array('id'=>'1')); ?>
	    </div>
			<style type="text/css" media="screen">
				.wdi_feed_main_container *, .wdi_feed_main_container, .wdi_feed_container, .wdi_feed_wrapper{
					background-color:transparent!important;
					border-color:transparent!important;
				}
				#wdi_feed_0 .wdi_photo_wrap_inner{
					border: 5px solid transparent!important;
					background-color: transparent!important;
				}
				.wdi_load_more{
					display:none!important;
				}
			</style>
	  </div>
	  <p>&amp; follow <a href="http://instagram.com/swiftindustries">@swiftindustries</a> for details</p>
	</section>
	<div class="col-4 s-col-3 m-col-2 l-col-1 px-l mx-auto">
	  <div class="poppy border-bottom"></div>
	</div>
	<div class="relative overflow-hidden cf mx-auto max-width-l px-m py-xxl">
	  <div class="relative z2 col col-12 m-col-6 px-m py-xl wow fadeIn">
	    <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:30.694444444444446% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BHGBXOwgH6a/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by @goldensaddlecyclery</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-06-25T22:23:21+00:00">Jun 25, 2016 at 3:23pm PDT</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
	  </div>
	  <div class="relative z2 col col-12 m-col-6 px-m m-py-xxxl wow fadeIn">
	    <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:33.24074074074074% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BHLLD5ih1kE/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Tenkara Rod Co. (@tenkararodco)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-06-27T22:24:18+00:00">Jun 27, 2016 at 3:24pm PDT</time></p></div></blockquote>
	    <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
	  </div>
	  <div class="s-hide s-m-hide absolute z1 top-0 left-0 right-0 bottom-0 overflow-hidden text-center">
	    <svg class="poppy" style="transform:translateY(0px);" viewbox="0 0 400 1200" height="1200" width="400">
	      <path fill="none" stroke="currentColor" stroke-width="2" stroke-miterlimit="10" d="M200,0c0,68.5,4.32,102.586-10,148
	        c-15.922,50.494-63.139,76.481-101.123,111.002c-19.138,17.394-79.607,65.274-34.263,84.786
	        c42.898,18.458,64.637-21.205,92.751-47.315c19.73-18.325-3.865,17.027,0.135,24.027c6.703,11.729,17.042-13.5,23.021-9.5
	        S152.5,343.5,158.5,346.5s20.639-28.072,25.57-24.852c4.34,2.834-4.987,18.835-6.57,27.352c-1.127,6.064,4.543,8.409,8.885-0.832
	        c6.844-14.565,24.072-46.271,31.879-44.274C226.5,306,216,318.5,220.5,325s34.826-13.224,29.148,11.637
	        c-4.95,21.674-23.867,36.318-40.447,49.134C167.189,418.244,149.157,465.374,115.5,506c-22.33,26.954-42.069,51.627-46.522,86.232
	        c-2.31,17.947-1.141,36.089,4.617,53.307c11.633,34.788,39.6,64.218,73.02,78.949c34.757,15.322,71.596,11.116,108.331,14.685
	        c19.377,1.882,56.681,12.308,41.317,39.438c-27.717,48.936-92.129,16.88-133.424,14.804c-20.186-1.015-66.204-8.12-57.948,4.928
	        c2.411,3.81,16.531,5.989,20.849,7.109c5.889,1.527,34.926,2.778,30.279,13.807c-2.635,6.253-45.126-1.606-30.919,9.146
	        c3.216,2.434,14.162-0.248,15.302,4.859c1.563,7-12.58,5.911-15.852,5.86c-11.509-0.182-18.262-1.025-23.894,10.945
	        c-12.424,26.41,17.058,46.68,29.068,52.934C147,912,200.848,918.99,217.179,919.63s39.96-1.55,43.141,3.66
	        s-22.272,5.843-18.046,10.776s22.648-0.938,26.938,4.248s-40.303,5.832-30.007,14.259s76.775-4.656,61.433,19.467
	        c-12.05,18.943-36.48,23.903-55.706,32.231c-20.772,8.998-34.721,23.76-40.699,45.908c-8.106,30.032,5.776,48.641,5.776,79.489
	        c0,25-10.008,27.831-10.008,70.331"/>
	    </svg>
	  </div>
	  <div class="m-l-hide l-hide absolute z1 top-0 left-0 right-0 bottom-0 overflow-hidden text-center">
	    <div class="mx-auto bg-poppy" style="width:2px; height:100%;"> </div>
	  </div>
	</div>

	<!-- PACK -->
	<section id="pack" class="relative z1 cf mb-xl">
	  <div class="px-l">
	    <div class="circle wow fadeIn border mx-auto mb-xl number-node poppy">
	      <span class="wow zoomIn sans text-center block pt-s h1 bold">05</span>
	    </div>
	    <h2 class="h3 caps bold text-center poppy"><?php the_field('pack_plan_title') ?> </h2>
	  </div>
	  <div class=" px-m cf pb-xl">
	    <div class="text-center pt-l pb-xxl  px-m col-12 l-col-10 mx-auto white">
	      <div class="col col-12 m-col-6 p-m">
	        <div class="max-width-s mx-auto border-top-thin poppy">
	          <a href="<?php the_field('plan_cta_link') ?>">
	            <!-- <img src=" get_stylesheet_directory_uri(); /images/campout/blackriver_logo.gif" alt=""> -->
							<img src="<?php the_field('plan_banner') ?>" alt="">
	          </a>
	        </div>
	        <h3 class="brown"><?php the_field('plan_title') ?> </h3>
	        <div class="h3 serif brown"><?php the_field('plan_text') ?> </div>
	        <p class="mt-l">
						<a href="<?php the_field('plan_cta_link') ?>" class="button bg-poppy brown">
							<?php the_field('plan_cta_text') ?>
						</a>
					</p>
	      </div>
	      <div class="col col-12 m-col-6 p-m">
	        <div class="max-width-s mx-auto border-top-thin poppy">
	          <a href="<?php the_field('pack_cta_link') ?>">
	            <!-- <img src=" get_stylesheet_directory_uri(); /images/campout/campout_merch.jpg" class="" alt=""> -->
							<img src="<?php the_field('pack_banner') ?>" alt="">
	          </a>
	        </div>
	        <h3 class="brown"><?php the_field('pack_title') ?> </h3>
	        <div class="h3 serif brown"><?php the_field('pack_text') ?> </div>
	        <p class="mt-l">
						<a href="<?php the_field('pack_cta_link') ?>" class="button bg-poppy brown">
							<?php the_field('pack_cta_text') ?>
						</a>
					</p>
	      </div>
	    </div>
	  </div>
	  <section class="bg-poppy px-l cf border-top-thin">
	    <div class="text-center pb-l px-l col-12 l-col-10 mx-auto white" style="">
	      <script>
	        jQuery(document).ready(function(){

	          jQuery('nav.tabs').each(function(){
	            // For each set of tabs, we want to keep track of
	            // which tab is active and its associated content
	            var $active, $content, $links = jQuery(this).find('a');

	            // If the location.hash matches one of the links, use that as the active tab.
	            // If no match is found, use the first link as the initial active tab.
	            $active = jQuery($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
	            $active.addClass('active');

	            $content = jQuery($active[0].hash);

	            // Hide the remaining content
	            $links.not($active).each(function () {
	              jQuery(this.hash).hide();
	            });

	            // Bind the click event handler
	            jQuery(this).on('click', 'a', function(e){
	              // Make the old tab inactive.
	              $active.removeClass('active');
	              $content.hide();

	              // Update the variables with the new link and content
	              $active = jQuery(this);
	              $content = jQuery(this.hash);

	              // Make the tab active.
	              $active.addClass('active');
	              $content.show();

	              // Prevent the anchor's default click action
	              e.preventDefault();

	            });
	          });
	        });
	      </script>
	      <nav class="tabs block rounded max-width-s mx-auto overflow-hidden bg-cream border border-brown shadow mt-n-m mb-l">
	        <a class="col col-12 s-col-4 inline-block border-box text-center h6 bold py-xs px-s  pill-l " href="#roadtourer">Road Tourer</a>
	        <a class="col col-12 s-col-4 inline-block border-box text-center h6 bold py-xs px-s pill" href="#randolight">Rando Light</a>
	        <a class="col col-12 s-col-4 inline-block border-box text-center h6 bold py-xs px-s  pill-r " href="#bikepacker">Bike Packer</a>
	      </nav>
	      <div id="roadtourer" class="cf">
	          <div class="relative col-12 s-col-6 mx-auto py-s">
	              <img class="fit" src="<?php echo get_stylesheet_directory_uri(); ?>/images/campout/2017_SC_roadtourer_01.jpg" alt="">
	          </div>
	          <div class="col-12 py-s">
	            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/campout/2017_SC_roadtourer_02_dots.jpg" alt="">
	          </div>
	            <ol class="text-left cf h5">
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/product-category/bags/panniers/">Swift Jr. Ranger Panniers </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/product-category/bags/handlebar-front-bags/">Swift Ozette Rando Bag </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/product-category/bags/adventure-organizing-bags/">Swift Wanderlust Packers </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/shop/swift-travel-kite/">Travel Kite </a> </li>
	              <li class="col col-12 s-col-6"> <a href="">Enlightened Equipment Quilt  </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/shop/ultralight-mat/">Sea To Summit Ultralight Mat </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/shop/snow-peak-gigapower-auto-stove/">Snow Peak GigaPower Auto Stove </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/product-category/bike-camping-gear/">Maps </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/product-category/collections/cascade-collection/">Swift Cascade Series Cycling Cap </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/shop/x-pot/">Sea To Summit X Pot </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/shop/x-pot-kettle/">Sea To Summit X Pot Tea Kettle </a> </li>
	            </ol>
	      </div>
	      <div id="randolight" class="cf">
	          <div class="relative col-12 s-col-6 mx-auto py-s">
	              <img class="fit" src="<?php echo get_stylesheet_directory_uri(); ?>/images/campout/2017_SC_randolight_01.jpg" alt="">
	          </div>
	          <div class="col-12 py-s">
	            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/campout/2017_SC_randolight_02_dots.jpg" alt="">
	          </div>
	            <ol class="text-left cf h5">
	              <li class="col col-12 s-col-6"> <a href=""> Enlightened Equipment Quilt</a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/product-category/bags/adventure-organizing-bags/"> Swift Wanderlust Packers </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/shop/collapsible-pour-over-coffee-brewer/">Snow Peak Collapsable Pour Over </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/product-category/bags/handlebar-front-bags/">Swift Ozette Rando Bag </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/shop/snow-peak-starter-kit/">Snow Peak Starter Kit </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/product-category/bags/saddle-bags/">Swift Zeitgeist Saddle Bag  </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/shop/ultralight-mat/">Sea To Summit Ultralight Mat </a> </li>
	              <li class="col col-12 s-col-6"> <a href="http://builtbyswift.com/shop/sea-to-summit-escapist-tarp/">Sea To Summit Escapist Tarp </a> </li>
	            </ol>
	      </div>
	      <div id="bikepacker" class="cf">
	          <div class="relative col-12 s-col-6 mx-auto py-s">
	              <img class="fit" src="<?php echo get_stylesheet_directory_uri(); ?>/images/campout/2017_SC_bikepacker_01.jpg" alt="">
	          </div>
	          <div class="col-12 py-s">
	            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/campout/2017_SC_bikepacker_02_dots.jpg" alt="">
	          </div>
	            <ol class="text-left cf h5">
	              <li class="col col-12 s-col-6"><a href="">Enlightened Equipment Quilt</a></li>
	              <li class="col col-12 s-col-6"><a href="http://builtbyswift.com/shop/ultralight-mat/">Sea To Summit Ultralight Mat</a></li>
	              <li class="col col-12 s-col-6"><a href="http://builtbyswift.com/shop/sea-to-summit-escapist-tarp/">Sea To Summit Escapist Tarp</a></li>
	              <li class="col col-12 s-col-6"><a href="http://builtbyswift.com/shop/collapsible-pour-over-coffee-brewer/">Snow Peak Collapsable Pour Over</a></li>
	              <li class="col col-12 s-col-6"><a href="http://builtbyswift.com/shop/snow-peak-gigapower-auto-stove/">Snow Peak GigaPower Auto Stove</a></li>
	              <li class="col col-12 s-col-6"><a href="http://builtbyswift.com/product-category/collections/cascade-collection/">Swift Cascade Series Water Bottle</a></li>
	              <li class="col col-12 s-col-6"><a href="http://builtbyswift.com/shop/oveja-negra-lunchbox-handlebar-bag/">Oveja Negra Lunchbox</a></li>
	              <li class="col col-12 s-col-6"><a href="http://builtbyswift.com/shop/teton-package/">Tenkara Fishing Rod</a></li>
	              <li class="col col-12 s-col-6"><a href="http://builtbyswift.com/shop/oveja-negra-front-end-loader/">Oveja Negra Front End Loader</a></li>
	              <li class="col col-12 s-col-6"><a href="http://builtbyswift.com/shop/oveja-negra-gearjammer-seat-bag/">Oveja Negra Gearjammer Seat Bag</a></li>
	              <li class="col col-12 s-col-6"><a href="http://builtbyswift.com/shop/oveja-negra-chuckbucket/">Oveja Negra Chuckbucket</a></li>
	              <li class="col col-12 s-col-6"><a href="http://builtbyswift.com/product-category/bags/adventure-organizing-bags/">Swift Wanderlust Packers</a></li>
	            </ol>
	      </div>
	    </div>
	  </section>
	</section>

	<!-- PARTNERS -->
	<section id="partners" class="text-center px-l pb-xl">
		<h2 class="h3 caps bold">Radness Made Possible</h2>
		<div class="measure serif mx-auto pb-l text-left">
			<p class="h3">We’ve teamed up with amazing partners those whose core values support independent makers, the verve of small companies, and the spirit that lures us into wilderness. We hope you enjoy the spirit they bring to swift campout! There are special treats, call-outs, and prizes for registered swift campers. </p>
			<p class="h3">Stay tuned on <a href="http://instagram.com/swiftindustries" class="border-bottom-thin">instagram</a> for more!</p>
		</div>

		<?php if( have_rows('partners') ) : ?>

			<div class="py-xl max-width-l mx-auto">
		    <h3>Partners</h3>
				<ul class="cf list-reset">
				<?php while ( have_rows('partners') ) : ?>
					<?php the_row(); ?>
					<li class="col col-12 m-col-6 border-box p-m">
						<a href="<?php the_sub_field('partner_link'); ?>" target="_blank"><img src="<?php the_sub_field('partner_logo'); ?>" /></a>
					</li>
				<?php endwhile; ?>
				</ul>
		  </div>
		<?php endif; ?>


		<?php if( have_rows('sidekicks', 5802) ) : ?>
			<div class="py-xl max-width-l mx-auto">
				<h3>Sidekicks</h3>
				<ul class="cf list-reset">
				<?php while ( have_rows('sidekicks', 5802) ) : ?>
					<?php the_row(); ?>
						<li class="col col-4 border-box p-m">
							<a href="<?php the_sub_field('sidekick_link', 5802); ?>" target="_blank"><img src="<?php the_sub_field('sidekick_logo', 5802); ?>" /></a>
						</li>
				<?php endwhile; ?>
				</ul>
			</div>
		<?php endif; ?>
	</section>

	<!-- SVG Draw -->
	<script>
	  //On scroll call the draw function
	   jQuery(window).scroll(function() {
	    drawLines();
	  });

	  //If you have more than one SVG per page this will pick it up
	  function drawLines(){
	    jQuery.each(jQuery("path"), function(i, val){
	      var line = val;
	      drawLine(jQuery(this), line);
	    });
	  }

	  //draw the line
	  function drawLine(container, line){
	  var length = 0;
	  var pathLength = line.getTotalLength();
	  var distanceFromTop = container.offset().top -  jQuery(window).scrollTop() +200;
	  var percentDone = 1 - (distanceFromTop /  jQuery(window).height());
	  length = percentDone * pathLength;
	  line.style.strokeDasharray = [length,pathLength].join(' ');
	  console.log("strokeDasharray: "+[length,pathLength].join(' '));
	  }
	</script>

<?php endwhile; ?>

</div>
<!-- End Cream Background Wrapper  -->
<?php get_footer('campout'); ?>
