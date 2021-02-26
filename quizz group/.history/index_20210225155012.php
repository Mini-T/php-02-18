<?php require_once("header.inc.php"); ?>
 
<a id="btn" class="btn btn-primary" href="#">Test enregistrement</a>
 
<div id="monP" style="width:100px; height:100px; background: red"></div>
 
<script>
 
    $('#monP').on("click", uneFonction);
 
    function uneFonction() {
        var p = $("#monP");
        monP.animate({
            background:'pink',
            height:'500px',
            borderRadius:'50% 50% 0 0'
        }, 10000 );
    }
 
        var jqxhr = $.ajax({
            method: "POST",
            url: "testajax.php",
            data: { name: "John", location: "Boston" }
        })
        .done(function(contenuDeLaPage) {
            alert( contenuDeLaPage );
        })
        .fail(function() {
            alert( "error" );
        })
        .always(function() {
            alert( "complete" );
        });
</script>