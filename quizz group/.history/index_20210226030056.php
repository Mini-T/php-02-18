<?php require_once("header.inc.php"); ?>
 
<a id="btn" class="btn btn-primary" href="#">Test enregistrement</a>
 
<div id="monP" style="width:100px; height:100px; background: red"></div>
<p id="emplacementText"></p>
 
<script>
 
    $('#monP').on("click", uneFonction);
 
    function uneFonction() {
        var p = $("#monP");
        monP.animate({
            background:'pink',
            height:'500px',
            borderRadius:'50% 50% 0 0',
            borderStyle: 'groove'
            
        }, 3000 );
        
    }
    
 
        var jqxhr = $.ajax({
            method: "POST",
            url: "PDO.php",
        })
        .done(function(contenuDeLaPage) {
            $('#emplacementText').html
            (contenuDeLaPage);
        })
        .fail(function() {
            alert( "error" );
        })
        .always(function() {
       
        });
</script>