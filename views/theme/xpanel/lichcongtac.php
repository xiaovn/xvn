/**
 * Created by JetBrains PhpStorm.
 * User: Xiao
 * Date: 9/3/13
 * Time: 2:08 PM
 * To change this template use File | Settings | File Templates.
 */
<!-- Header ---------------------->
<?php
include_once("./includes/Calendar/Calendar.class.php");
include_once("header.php");
?>
<!-- Header ---------------------->
<!------------------------ Main Feature ---------------------->

		<div class="colLeft">
            <div class="banner">
                <div class="slideshow">
                    <div class="slide active">
                        <a target="_blank" href="#">
                            <img src="template/img/slideshow/1.jpg"/>
                        </a>
                    </div>
                    <div class="slide ">
                        <a target="_blank" href="#">
                            <img src="template/img/slideshow/2.jpg"/>
                        </a>
                    </div>
                </div>
                <div class="icon_new">
                    <img src="template/img/newicon.png"/>
                </div>
                <div class="slide_number">
                    <ul>
                        <li><a class="active" rel="0" href="#">1</a></li>
                        <li><a class="" rel="1" href="#">2</a></li>
                        <li><a class="" rel="2" href="#">3</a></li>
                        <li><a class="" rel="3" href="#">4</a></li>
                        <li><a class="" rel="4" href="#">5</a></li>
                        <li><a class="" rel="5" href="#">6</a></li>
                        <li><a class="" rel="6" href="#">7</a></li>
                        <li><a class="" rel="7" href="#">8</a></li>
                        <li><a class="" rel="8" href="#">9</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearBoth"><!-- --></div>
            <br>
            <div class="clearBoth"><!-- --></div>
            <CENTER><h2><font color="red">LỊCH CÔNG TÁC TUẦN - TRƯỜNG THPT NGUYỄN TRÃI</font></H2></center>
            <div id="c-events" class="prettycal clearfix">
                <?php
                $calendar_type='big'; //Possible value: mini, big, events
                include_once("./calendar.php");
                ?>
            </div>
            <script type="text/javascript" src="./assets/javascript/init.js"></script>
            <div class="clearBoth"><!-- --></div>
            <br />
        </div>
<!------------------------ Main Feature ---------------------->
<!-------------------------- Side bar ------------------------>
		<?include_once("sidebar.php");?>
<!------------------------ Footer ---------------------->
	    <div class="clearBoth"><!-- --></div>
		<?include_once("footer.php");?>