$(document).ready(function(){
    $( "#bottle-count" ).change(function() {
        var bottles_count = parseInt($("#bottle-count option:selected" ).val());
        var currentrevenue = bottles_count*2;
        var pending_revenue = 12-currentrevenue;
        $("#current-revenue").html(currentrevenue+' Million');
        $("#pending-revenue").html(pending_revenue+' Million');
        $(".filbotle").css("height",'0%');
        for (i = 1; i <= bottles_count; i++) {
            $("#bottle"+i).css("height",'100%');
        }
    });
});