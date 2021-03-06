<?php

define('access',TRUE);
include($_SERVER['DOCUMENT_ROOT'].'/parts/db-for-all.php');

$conn = new mysqli($host,$database_user,$database_pass,$database_name)or die(mysql_errno());
$type='bachelor';
$datatable ='courses';
$results_per_page = 21;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$sql = "SELECT c_name FROM ".$datatable." WHERE type='".$type."' ORDER BY id ASC LIMIT $start_from, ".$results_per_page;
$rs_result = $conn->query($sql);

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->


<head>

    <meta charset="utf-8">

    <title>Bachelor Courses - Notes24x7</title> <!--insert your title here-->
    <meta name="description" content="Bachelor Notes"> <!--insert your description here-->
    <meta name="author" content="notes24x7"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->

    <!--START CSS-->
    <link rel="stylesheet" href="css/nicdark_style.min.css" media="none" onload="if(media!='all')media='all'"> <!--style-->

    <!--google fonts-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' media="none" onload="if(media!='all')media='all'">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css' media="none" onload="if(media!='all')media='all'">

    <!--[if lt IE 9]>
    <script async src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--FAVICONS-->
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <!--END FAVICONS-->

    <style>
        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }

        .pagination a:hover:not(.active) {background-color: #ddd;}

        #relate:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-color: #c8e6c9;
        }
    </style>
	<?php
        include($_SERVER['DOCUMENT_ROOT']."/parts/google-analysis-head.php");
    ?>

</head>
    <body id="start_nicdark_framework">
		<?php
			include($_SERVER['DOCUMENT_ROOT']."/parts/google-analysis-body.php");
		?>



        <!--START nicdark_site-->
        <div class="nicdark_site">

            <!--START nicdark_site_fullwidth-->
            <div class="nicdark_site_fullwidth nicdark_site_fullwidth_boxed nicdark_clearfix">


               <?php

                include($_SERVER['DOCUMENT_ROOT']."/parts/header.php");
            ?>




                <div class="nicdark_section nicdark_background_size_cover nicdark_background_position_center" style="background-image:url(img/parallax/bachelor.jpg);">

                    <div class="nicdark_section nicdark_bg_greydark_alpha_gradient_2">


                        <!--start nicdark_container-->
                        <div class="nicdark_container nicdark_clearfix">


                            <div class="nicdark_section nicdark_height_200"></div>

                            <div class="grid grid_12">
                                <strong class="nicdark_color_white nicdark_font_size_60 nicdark_first_font">Bachelor</strong>
                            </div>

                            <div class="nicdark_section nicdark_height_20"></div>


                        </div>
                        <!--end container-->

                    </div>

                </div>











                <div class="nicdark_section nicdark_height_50"></div>




                <div class="nicdark_section ">

                    <!--start nicdark_container-->
                    <div class="nicdark_container nicdark_clearfix">


                        <!--<div class="nicdark_width_100_percentage">

                            <div class="nicdark_section nicdark_box_sizing_border_box nicdark_padding_15">
                                <h2><strong>Find Your Course</strong></h2>
                                <div class="nicdark_section nicdark_height_20"></div>
                            </div>


                            <div class="nicdark_section nicdark_box_sizing_border_box">
                                <div class="nicdark_section">

                                    <div class="nicdark_section">
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="img/icons/icon-pen.svg">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Keyword">
                                        </div>
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="img/icons/icon-list.svg">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Food Courses">
                                        </div>
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="img/icons/icon-star.svg">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Premium">
                                        </div>
                                    </div>
                                    <div class="nicdark_section">
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="img/icons/icon-level.svg">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Medium Level">
                                        </div>
                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_20 nicdark_margin_left_15" width="15" src="img/icons/icon-clock-grey.svg">
                                            <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="8 Hours">
                                        </div>

                                        <div class="nicdark_width_33_percentage nicdark_padding_15 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
                                            <a class="nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 " href="#">SEARCH</a>
                                        </div>

                                    </div>

                                </div>


                            </div>


                        </div>-->

<?php                    if(!empty($rs_result)){

?>



                        <div class="nicdark_width_100_percentage">



                            <!--START results-->
                            <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">
                                <div class="nicdark_section nicdark_box_sizing_border_box ">

                                    <div class="nicdark_width_100_percentage nicdark_float_left">
                                        <h2><strong>Showing 1 - 21 results</strong></h2>
                                    </div>


                                    <div class="nicdark_section nicdark_height_10"></div>

                                    <!--
                                    <div class="nicdark_width_70_percentage nicdark_float_left nicdark_width_100_percentage_all_iphone">

                                        <div class="nicdark_section nicdark_height_20"></div>

                                        <div class="nicdark_width_50_percentage nicdark_float_left">
                                            <div class="nicdark_section nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative nicdark_padding_right_20">
                                                <img alt="" class="nicdark_position_absolute nicdark_top_5 nicdark_left_0 nicdark_margin_top_5" width="15" src="img/icons/icon-pen.svg">
                                                <input class="nicdark_padding_left_25 nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0" type="text" placeholder="Keyword">
                                            </div>
                                        </div>
                                        <div class="nicdark_width_50_percentage nicdark_float_left">
                                            <div class="nicdark_float_left nicdark_width_100_percentage_all_iphone">
                                                <a class="nicdark_bg_white_hover nicdark_color_green_hover nicdark_border_2_solid_green nicdark_transition_all_08_ease nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_width_100_percentage nicdark_color_white nicdark_bg_green nicdark_first_font nicdark_padding_10_20 nicdark_border_radius_3 " href="courses.php">SEARCH</a>
                                            </div>
                                        </div>
                                    </div>


                                     -->

                                </div>
                            </div>
                            <!--END results-->



                            <div class="nicdark_width_100_percentage">
<?php
    while($row = $rs_result->fetch_assoc())
    {
        $c[] = $row;
    }
    if(empty($c))
    {

    }
    else{

        foreach($c as $key => $value) {
?>

    <!--START preview-->
    <a class="nicdark_color_greydark nicdark_first_font" href="subjects.php?category=bachelor&amp;course_name=<?php echo $value['c_name']; ?>">
    <div class="nicdark_width_33_percentage nicdark_width_100_percentage_responsive nicdark_float_left" id="relate">

        <div class="nicdark_section nicdark_padding_15 nicdark_box_sizing_border_box">

            <!--start preview-->
            <div class="nicdark_section nicdark_border_1_solid_grey">


                <div class="nicdark_section nicdark_padding_20 nicdark_box_sizing_border_box">

                    <h3><?php echo $value['c_name']; ?></h3>
                    <div class="nicdark_section nicdark_height_20"></div>

                </div>



            </div>
            <!--start preview-->

        </div>

    </div></a>
    <!--END preview-->
<?php
        }
    } ?>
</div>





                            <div class="nicdark_section nicdark_height_50"></div>


                            <div class="nicdark_section nicdark_text_align_center pagination">
                                <?php
                                    $next=$page+1;
                                    $previous=$page-1;
                                    if($page==1){}
                                    else{
                                        echo "<a href='bachelor.php?page=".$previous."'>&laquo;</a>";
                                    }
                                    $sql = "SELECT COUNT(id) AS total FROM ".$datatable." WHERE type='".$type."'";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();
                                    $total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results

                                    for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
                                            echo "<a href='bachelor.php?page=".$i."'";
                                            if ($i==$page)
                                            {
                                                echo " class='active'";
                                            }
                                            echo ">".$i."</a> ";
                                        }
                                    if($total_pages==$page || empty($c)){

                                    }
                                    else{
                                        echo "<a href='bachelor.php?page=".$next."' disabled>&raquo;</a>";
                                    }
                                    ?>
                            </div>


                        </div>


                    </div>
                    <!--end container-->

                </div>
                <?php } ?>

    				<?php include("./parts/footer.php"); ?>




                <!--js-->
        <script async src="js/nicdark_plugins.min.js" type="text/javascript"></script>
        
        


    </body>

</html>
