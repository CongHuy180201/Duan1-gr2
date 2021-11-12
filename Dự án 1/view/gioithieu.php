<style>
#huongdan {
  background-color: rgba(0, 165, 80, 0.85);
  /* Grey background */
  padding: 50px 10px;
  /* Some padding */
  color: black;
  text-align: center;
  /* Centered text */
  font-size: 40px;
  /* Big font size */
  font-weight: bold;
  top: 0;
  width: 100%;
  /* Full width */
}
</style>
<div id="huongdan">Giới Thiệu Thành Viên</div>
<div class="brand-logo wow bounceInUp animated">
  <div class="container">
    <div class="row">
      <h2>Mục Đích : Poly-car lập ra trang web giứp chúng em qua môn </h2>
      <div class="home-banner col-lg-2 hidden-md col-xs-12 hidden-sm"> </div>
      <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="testimonials-section">
          <div class="offer-slider parallax parallax-2">
            <ul class="bxslider">
              <li>
                <div class="avatar"><img src="images/Sơn1.jpg " width="10px"></div>
                <div class=" testimonials">Lê Hồng Sơn</div>
                <div class="clients_author">26 Tuổi <span>Trưởng Nhóm</span> </div>
              </li>
              <li>
                <div class="avatar"><img src="images/Hy1.jpg" alt="Image"></div>
                <div class="testimonials">Lò Văn Công Huy</div>
                <div class="clients_author">20 Tuổi <span>Thành Viên</span> </div>
              </li>
              <li>
                <div class="avatar"><img src="images/Thành.jpg" alt="Image"></div>
                <div class="testimonials">Đoàn Văn Thành</div>
                <div class="clients_author">21 Tuổi <span>Thành Viên</span> </div>
              </li>
              <li>
                <div class="avatar"><img src="images/Dương.jpg" alt="Image"></div>
                <div class="testimonials">Lê Văn Dương </div>
                <div class="clients_author">22 Tuổi <span>Thành Viên</span> </div>
              </li>
              <li>
                <div class="avatar"><img src="images/Phong.jpg" alt="Image"></div>
                <div class="testimonials">Lợi Thanh Phong </div>
                <div class="clients_author">21 Tuổi <span>Thành Viên</span> </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- JavaScript -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/revslider.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
<script src="js/countdown.js"></script>
<script>
jQuery(document).ready(function() {
  jQuery('#rev_slider_4').show().revolution({
    dottedOverlay: 'none',
    delay: 5000,
    startwidth: 1170,
    startheight: 650,

    hideThumbs: 200,
    thumbWidth: 200,
    thumbHeight: 50,
    thumbAmount: 2,

    navigationType: 'thumb',
    navigationArrows: 'solo',
    navigationStyle: 'round',

    touchenabled: 'on',
    onHoverStop: 'on',

    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,

    spinner: 'spinner0',
    keyboardNavigation: 'off',

    navigationHAlign: 'center',
    navigationVAlign: 'bottom',
    navigationHOffset: 0,
    navigationVOffset: 20,

    soloArrowLeftHalign: 'left',
    soloArrowLeftValign: 'center',
    soloArrowLeftHOffset: 20,
    soloArrowLeftVOffset: 0,

    soloArrowRightHalign: 'right',
    soloArrowRightValign: 'center',
    soloArrowRightHOffset: 20,
    soloArrowRightVOffset: 0,

    shadow: 0,
    fullWidth: 'on',
    fullScreen: 'off',

    stopLoop: 'off',
    stopAfterLoops: -1,
    stopAtSlide: -1,

    shuffle: 'off',

    autoHeight: 'off',
    forceFullWidth: 'on',
    fullScreenAlignForce: 'off',
    minFullScreenHeight: 0,
    hideNavDelayOnMobile: 1500,

    hideThumbsOnMobile: 'off',
    hideBulletsOnMobile: 'off',
    hideArrowsOnMobile: 'off',
    hideThumbsUnderResolution: 0,

    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLilmit: 0,
    startWithSlide: 0,
    fullScreenOffsetContainer: ''
  });
});
</script>
<script type="text/javascript">
function HideMe() {
  jQuery('.popup1').hide();
  jQuery('#fade').hide();
}
</script>
<script>
var dthen1 = new Date("11/12/2021 00:00:00 AM");
start = "10/12/2021 00:00:00 AM";
start_date = Date.parse(start);
var dnow1 = new Date(start_date);
if (CountStepper > 0)
  ddiff = new Date((dnow1) - (dthen1));
else
  ddiff = new Date((dthen1) - (dnow1));
gsecs1 = Math.floor(ddiff.valueOf() / 1000);

var iid1 = "countbox_1";
CountBack_slider(gsecs1, "countbox_1", 1);
</script>