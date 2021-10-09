$(document).ready(function () {

    $(".drawCircle").click(function () {
        // get text inside the table for the chosen circle to be drawed
        var x = ($(this).parent().find("td:nth-child(2)").text()) * 20;
        var y = -($(this).parent().find("td:nth-child(3)").text()) * 20;
        var radius = ($(this).parent().find("td:nth-child(4)").text()) * 20;
        var color = $(this).parent().find("td:nth-child(5)").text();
        var canvas = document.getElementById("idCanvas");
        var context = canvas.getContext("2d");
        // context.clearRect(0,0, canvas.width, canvas.height);
        context.beginPath();
        context.arc(x, y, radius, 0, Math.PI * 2);
        context.strokeStyle = color;
        context.stroke();
    })

    $("#btnInDiv").click(function () {
        $("#divForCanvas").hide();
    })
})
