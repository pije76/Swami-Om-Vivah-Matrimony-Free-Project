<?php include('header.php'); ?>
<div class="box contents">
    <div id="mainContentForm">
        <div id="innercontent">
            <div class="title">Online Magazine<hr>       
            </div>
            <div class="acontent">

            </div>
        </div>
    </div>
</div>
<script>
    $("#menunav li").removeClass("active");
    $("#showMagazineLink").addClass("active");

    $(function () {
        showProgress();
        getMagazine(displayMagazine);
    });



    function getMagazine(callBack) {
        $.ajax({
            type: "POST",
            contentType: 'application/json',
            url: "api/getMagazine",
            success: function (data, textStatus, jqXHR) {
                callBack(data);
            },
            error: function () {
                showAlertMsg("oops some thing went wrong");
            }
        });
    }

    function displayMagazine(data) {
        var responseData = "";
        data = JSON.parse(data.trim());

        $.each(data, function (arrayID, user) {
            responseData = responseData + '<div class="magazine">' +
                    '<div class="inner_mags">' +
                    '<label>Profile Id: ' + user.ProfileID + '</label>' +
                    '</div>' +
                    '<div class="inner_mags">' +
                    '<label>Age:26</label>' +
                    '</div>' +
                    '<div class="inner_mags">' +
                    '<label>Complextion:' + user.Complexion + '</label>' +
                    ' </div>' +
                    '<div class="inner_mags">' +
                    '<label>sex: </label>' +
                    '</div>' +
                    '<div class="inner_mags">' +
                    '<label>Cast:' + user.Caste + '</label>' +
                    ' </div>' +
                    '<div class="inner_mags">' +
                    '<label>Height:' + user.Height + '</label>' +
                    '</div>' +
                    '<div class="inner_mags">' +
                    '<label>Maritial Status:' + user.MaritalStatus + '</label>' +
                    '</div>' + '<div class="inner_mags">' +
                    '<label>City:' + user.CityID + '</label>' +
                    '</div>' +
                    '<div class="inner_mags">' +
                    '<label>Education In:' + user.EducationIn + '</label>' +
                    '</div>' + '<div class="inner_mags">' +
                    '<label>Profession:' + user.Profession + '</label>' +
                    '</div>' +
                    '</div>';
        });

        $(".acontent").html(responseData);
        hideProgress();
    }


</script>
<?php include('footer.php'); ?>


