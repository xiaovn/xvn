<?php
/**
 * Project: xvn.
 * File: contact_index.php.
 * Author: Ken Zaki
 * Email: kenzaki@xiao.vn
 * Create Date: 1:09 PM - 7/31/13
 * Website: www.xiao.vn
 */
require_once "header.php";
?>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARi0YZiwE498oj9SgIQGeZeaQ2Auwp8PU&sensor=true">
    </script>
    <script type="text/javascript">
        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(13.953195,108.654571),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: map_latlng,
                panControl: false,
                zoomControl: false,
                scaleControl: false,
                mapTypeControl: false,
                disableDefaultUI: true,
                scrollwheel: false,
                styles: [{
                    stylers: [{
                        saturation: -20
                    }, {
                        hue: themerPrimaryColor
                    }]
                }, {
                    elementType: "labels.text.fill",
                    stylers: [{ color: "#444444" }]
                    //stylers: [{ color: primaryColor }]
                }]
            };
            var markerIconDefault_image = new google.maps.MarkerImage("../images/marker.png",
                // This marker is 44 pixels wide by 56 pixels tall.
                new google.maps.Size(44, 56),
                // The origin for this image is 0,0.
                new google.maps.Point(0, 0),
                // The anchor for this image is the base of the flagpole at 0,32.
                new google.maps.Point(22, 56));

            var markerIconDefault_shadow = new google.maps.MarkerImage("../images/marker_shadow.png",
                // This marker is 44 pixels wide by 56 pixels tall.
                new google.maps.Size(37, 21),
                // The origin for this image is 0,0.
                new google.maps.Point(0,0),
                // The anchor for this image is the base of the flagpole at 0,32.
                new google.maps.Point(20, 10));

            var markerIconDefault_shape = {
                coord: [1, 1, 1, 52, 42, 52, 42 , 1],
                type: 'poly'
            };
            var map = new google.maps.Map(document.getElementById("contact_gmap"),
                mapOptions);
        }
        function initializeMap(el, options)
        {
            if (typeof google == 'undefined')
                return false;

            var map = new google.maps.Map(document.getElementById(el), options);
            var marker = new google.maps.Marker({
                position: map_latlng,
                title: 'My Location',
                shadow: markerIconDefault_shadow,
                icon: markerIconDefault_image,
                map: map
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <link href="<?php echo $template_path;?>css/style-default.css"  rel="stylesheet" />
    </head>
<body>

    <!-- Main Container Fluid -->
<div class="container-fluid">

    <!-- Content -->
    <div id="content">

        <!-- Top navbar (note: add class "navbar-hidden" to close the navbar by default) -->
        <?php
        require_once "nav.php";
        ?>
        <!-- Top navbar END --><div id="contact_gmap"></div>
        <div class="container-960 innerT">

            <h3 class="glyphicons google_maps"><i></i>Liên hệ</h3>
            <div class="separator bottom"></div>

            <div class="row-fluid">
                <div class="span7">
                    <form name="contactfrm" method="POST" action="" class="row-fluid margin-none">
                        <div class="span6">
                            <input type="text" class="span12" name="name" placeholder="HỌ VÀ TÊN">
                        </div>
                        <div class="span6">
                            <input type="text" class="span12" name="phone" placeholder="SỐ ĐIỆN THOẠI">
                        </div>
                        <textarea name="message" class="span12" rows="5" placeholder="NỘI DUNG"></textarea>
                        <div class="right">
                            <button class="btn btn-primary btn-icon glyphicons envelope"><i></i> Gửi liên hệ</button>
                        </div>
                    </form>
                </div>
                <div class="span5">
                    <div class="well margin-none">
                        <address class="margin-none">
                            <h2>Mr. Hoc Nguyen</h2>
                            <strong>Technology Director</strong> at
                            <strong><a href="#">Xiao JSC</a></strong><br>
                            <abbr title="Work email">e-mail:</abbr> <a href="mailto:nguyenhoc@xiao.vn">mailto:nguyenhoc@xiao.vn</a><br />
                            <abbr title="Work Phone">phone:</abbr> (084) 938-600-656<br/>
                            <abbr title="Work Fax">fax:</abbr> (084) 59-3-533-555
                            <div class="separator line"></div>
                            <p class="margin-none"><strong>Hỗ trợ 24/24:</strong><br/>Về các vấn đề tài khoản, thanh toán, ứng dụng và hướng dẫn sử dụng. Các vấn đề khác xin vui lòng gọi đường dây nóng: (084) 59-3-53-2222.</p>
                        </address>
                    </div>
                </div>
            </div>

            <div class="widget widget-heading-simple widget-body-gray">
                <div class="widget-head"><h4 class="heading glyphicons warning_sign strong"><i></i>Lưu ý</h4></div>
                <div class="widget-body"><p class="margin-none">Để chắn chắn thông tin này đến được với bộ phận chăm sóc khách hàng, xin hãy điền thông tin thật của bạn. Trong vòng 24h kể từ khi gửi liên hệ, nếu không thấy phản hồi từ Xiao, hãy gọi cho chúng tôi để được giải đáp.</p></div>
            </div>

        </div>
    </div>


    <!-- // Content END -->
<?php
require_once "footer.php";
?>