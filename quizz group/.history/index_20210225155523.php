<?php require_once("header.inc.php"); ?>
 
<a id="btn" class="btn btn-primary" href="#">Test enregistrement</a>
 
<div id="monP" style="width:100px; height:100px; background: red"></div>
<p id="emplacementText"></p>
 
<script>
 
    $('#monP').on("click", uneFonction);
 
    function uneFonction() {
        var p = $("#monP");
    }
 
        var jqxhr = $.ajax({
            method: "POST",
            url: "testajax.php",
            data: { name: "John", location: "Boston" }
        })
        .done(function(contenuDeLaPage) {
            $('#emplacementText').html
            alert( contenuDeLaPage );
        })
        .fail(function() {
            alert( "error" );
        })
        .always(function() {
       
        });
</script>