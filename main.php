<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html>
    <body>

        <?php include('header.php'); ?>
        <?php include("mainPageContent.php"); ?>

        <?php include("footer.php"); ?>

        <script>
            $("#slideshow > div:gt(0)").hide();

            setInterval(function () {
                $('#slideshow > div:first')
                        .fadeOut(1000)
                        .next()
                        .fadeIn(1000)
                        .end()
                        .appendTo('#slideshow');
            }, 3000);
        </script>
        <script>
            $("#menunav li").removeClass("active");
            $("#homeLink").addClass("active");
        </script>
    </body>
</html>
