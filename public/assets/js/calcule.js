function resultPrice() {

    hauteur = "0";
    largeur = "0";
    profondeur = "0";
    qty = $("#idParam17").val();

    if ($("#idParam20").length > 0 && $("#idParam20").val() != "") {
        hauteur = $("#idParam20").val();
    }

    if ($("#idParam16").length > 0 && $("#idParam16").val() != "") {
        largeur = $("#idParam16").val();
    }
    if ($("#idParam31").length > 0 && $("#idParam31").val() != "") {
        profondeur = $("#idParam31").val();
    }
    showValue = true;
    options = "";
    $('#LstOptions select').each(function(index) {
        idSelect = $(this).attr('id');

        if ($("#" + idSelect).val() != "-1") {
            options = options + "&" + idSelect + "=" + $("#" + idSelect).val();
        } else {
            showValue = false;
        }

    });




    $('#LstOptions input').each(function(index) {

        type = $(this).attr('type');


        if (type == "radio") {
            idSelect = $(this).attr('name');

            val = $('input[name="' + idSelect + '"]:checked').val()
            options = options + "&" + idSelect + "=" + val;

        } else if (type == "number") {
            verifierNumber(this);
            idSelect = $(this).attr('id');
            if ($("#" + idSelect).val() != "-1") {
                options = options + "&" + idSelect + "=" + $("#" + idSelect).val();
            }
        } else {

            idSelect = $(this).attr('id');
            if ($("#" + idSelect).val() != "-1") {
                options = options + "&" + idSelect + "=" + $("#" + idSelect).val();
            }

        }
    });

    //showValue=true
    if (showValue == true) {
        options = options + "&fileInfobia=" + $("#fileInfobia").val();

        // console.log(options)
        $.ajax({
            url: calculPrice,
            type: 'POST',
            data: 'id_product=' + id_product + '&id_media=' + id_media + "&numberGroup=" + $("#numberGroup").val() + "&qty=" + qty + "&hauteur=" + hauteur + "&largeur=" + largeur + "&profondeur=" + profondeur + options,
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            },
            success: function(res) {
                console.log(res)


                displayBtnAction(res)
            }
        });
    } else {
        $(".current-price span").css("font-size", "24px")
        $(".current-price span").html("Configurer votre produit");
        $("#demande_devis123").hide();
        $("#save_easy123").show();
        $("#save_easy123").prop('disabled', true);
    }
}

function displayBtnAction(res = "", is_active = true) {
    if (parseFloat(res) > 0) {

        /*if(reduction!="")
        {
           $("#old_price_display span").text(new Intl.NumberFormat('tn-TN', { minimumFractionDigits: 3, currency: 'EUR' }).format(res) + " {$currency}");
          if(reduction_type=="amount")
          {
            res=res-reduction
          }
          if(reduction_type=="percentage")
          {
            res=res-(res*reduction)
          }



        }*/
        $("#save_easy123").show();
        price = new Intl.NumberFormat('fr-FR', { minimumFractionDigits: 3, currency: 'TND' }).format(res) + ' TND HT'
        $("#save_easy123").prop('disabled', false);
        $("#demande_devis123").hide();

        // $("#save_easy123").html('Ajouter au panier');

        $(".current-price span").html(price);
        $(".tax-shipping-delivery-label").css("visibility", '');
        $(".current-price span").css("visibility", '');
        $("#priceInfobia").val(res);
        $(".current-price span").css("font-size", "30px")
            //$("#save_easy123").attr('type',"add_to_cart");


    } else {
        // $("#save_easy123").hide()
        $("#demande_devis123").show()
        $("#save_easy123").hide();
        //$("#save_easy123").prop('disabled',true);
        //$(".current-price span").css("visibility",'hidden');
        $(".current-price span").html("Configurer votre produit");
        $(".current-price span").css("font-size", "24px")

        $(".tax-shipping-delivery-label").css("visibility", 'hidden');
        $("#priceInfobia").val('');
        //$("#save_easy123").html('Demander un devis');
        //$("#save_easy123").attr('type',"demander_devis");

    }

}

function getTicks() {
    var date = new Date();
    var ticks = date.getHours() + "" + date.getMinutes() + "" + date.getSeconds() + "" + date.getMilliseconds(); // fonction qui permet l'ajoute de date de jour pour  les  fichier images
    //alert(ticks);
    //alert(ticks);
    return ticks;
}

function myFunctionInfobia(objid) {
    $("#save_easy123").prop('disabled', true);
    /*

      //  alert("myFunctionInfobia")
       setTimeout(function(){ 
      
        val=$("#"+objid).val();
        minval=$("#"+objid).attr("min");
        idParam=$("#"+objid).attr("idParam");
        $("#"+objid).css("border-color","");
     


     if(minval!=null)
     {

      if($.isNumeric(minval)==false)
      {
        $("#idParam20").css("border-color","");
        $("#idParam16").css("border-color","");

        if(minval.indexOf("x")>0)
        {
          var res = minval.split("x");

          maxX=Math.max(res[0],res[1]);
          minN=Math.min(res[0],res[1]);

          if(parseFloat(val)<parseFloat(res[0]) && parseFloat(val)<parseFloat(res[1]))
          {
            $("#"+objid).css("border-color","red");
            displayBtnAction("",false);

            return -1;
          }
          else if(parseFloat(val)>=parseFloat(minN) && parseFloat(val)<=parseFloat(maxX))
          {
            
            if(idParam=="20")
            {
              idParam16Val=$("#idParam16").val();
              if(idParam16Val>0)
              {
                if(parseFloat(idParam16Val)>parseFloat(minN) && parseFloat(idParam16Val)<parseFloat(maxX))
                {
                  if(parseFloat(val)<parseFloat(maxX))
                  {
                  
                    $("#"+objid).css("border-color","red");
                    $("#idParam16").css("border-color","red");
                    displayBtnAction("",false);
                    return -1;
                  }
                }
              }
            }


            if(idParam=="16")
            {

             idParam20Val=$("#idParam20").val();
           
              if(idParam20Val>0)
              {
                 
                if(parseFloat(idParam20Val)>parseFloat(minN) && parseFloat(idParam20Val)<parseFloat(maxX))
                {
                   
                  if(parseFloat(val)<parseFloat(minN))
                  {
                   
                    $("#"+objid).css("border-color","red");
                    $("#idParam20").css("border-color","red");
                    displayBtnAction("",false);

                    return -1;
                  }
                }
              }
            }

          }
        }

      }
      else
      {
        if(parseFloat(val)<=parseFloat(minval))
        {
          $("#"+objid).css("border-color","red");
          displayBtnAction("",false);
          return -1;
        }
        
      }
      }// minval null



      maxval=$("#"+objid).attr("max");

      if(maxval!=null)
      {
      if($.isNumeric(maxval)==false)
      {
        $("#idParam20").css("border-color","");
        $("#idParam16").css("border-color","");

        if(maxval.indexOf("x")>0)
        {
          var res = maxval.split("x");

          maxX=Math.max(res[0],res[1]);
          minN=Math.min(res[0],res[1]);
     
          if(parseFloat(val)>parseFloat(res[0]) && parseFloat(val)>parseFloat(res[1]))
          {
            $("#"+objid).css("border-color","red");
            displayBtnAction("",false);
            return -1;

          }
          else if(parseFloat(val)>= parseFloat(minN) && parseFloat(val)<= parseFloat(maxX))
          {
         

            if(idParam=="20")
            {

              idParam16Val=$("#idParam16").val();

              if(idParam16Val>0)
              {
                if(parseFloat(idParam16Val)> parseFloat(minN)  && parseFloat(idParam16Val)< parseFloat(maxX))
                {
                  //alert("val"+val+"minN"+minN);
                  if(parseFloat(val)> parseFloat(minN))
                  {
                    $("#"+objid).css("border-color","red");
                    $("#idParam16").css("border-color","red");
                     displayBtnAction("",false);

                    return -1;
                  }
                }
              }
            }


            if(idParam=="16")
            {
             idParam20Val=$("#idParam20").val();
              if(idParam20Val>0)
              {
                if(parseFloat(idParam20Val)>= parseFloat(minN)  && parseFloat(idParam20Val)<= parseFloat(maxX))
                {
                  if(parseFloat(val)> parseFloat(minN) )
                  {
                    console.log("ccccccc")
                    $("#"+objid).css("border-color","red");
                    $("#idParam20").css("border-color","red");
                    displayBtnAction("",false);

                    return -1;
                  }
                }
              }
            }

          }
        }

      }
      else
      {
          if(parseFloat(val)>= parseFloat(maxval))
          {
            $("#"+objid).css("border-color","red");
            displayBtnAction("",false);

            return -1;
          }
      }
    }

    //resultPrice(); 
     },200);*/
}




$(document).ready(function() {

    /*$('button[data-button-action="add-to-cart"]').attr("id","save_easy")
    $('#save_easy').attr("type","button")
    $('#save_easy').attr("data-button-action","")

    $('#save_easy').attr("onclick","")*/

    resultPrice()


    $('#BtnuploadImage').on('click', function() {
        event.preventDefault();


        var oFReader = new FileReader();
        isok = "1"
        objs = document.getElementById("fileUpload").files
        $.each(objs, function(key, value) {

            name = objs[key].name;
            var ext = name.split('.').pop().toLowerCase();



            extension_upload = extension_upload.split(",");

            if (jQuery.inArray("." + ext, extension_upload) == -1) {
                $("#msgErrorUpload").show();
                $("#msgErrorUpload").html('Extension fichier <strong>' + name + '</strong> non valide');
                isok = "-1"
            }

            var fsize = objs[key].size || objs[key].fileSize;
            if (fsize > 2000000) {
                $("#msgErrorUpload").show();
                $("#msgErrorUpload").html('Taille fichier <strong>' + name + '</strong> est très grand');
                isok = "-1"
            }


        });

        if (isok == 1) {
            var file_data = $('#fileUpload').prop('files')[0];
            var form_data = new FormData();
            form_data.append('file', file_data);

            $.ajax({
                url: UploadFile, // point to server-side PHP script 
                dataType: 'text', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(php_script_response) {
                    $("#msgErrorUpload").show();
                    $("#msgErrorUpload").html('Votre fichier a été chargé avec succés');
                    $("#msgErrorUpload").removeClass("alert-danger").addClass("alert-success");
                    $("#fileInfobia").val(php_script_response)
                        //alert(php_script_response); // display response from the PHP script, if any
                }
            });
        }
    });


    $("#demande_devis123").click(function() {
        /* isok=1
    $('#LstOptions select').each(function(index){
        $(this).css("border-color",'')
        if($(this).prop('required') && $(this).val()=="-1")
        {
         $(this).css("border-color",'red');
        isok=-1
        }
     
    });

  if(isok==-1)
  {
    return false;
  }

    labelInfobia=""
    $( ".nameParam" ).each(function( index ) {
    

        if($( this ).attr('idParam')!=null)
        {
          if(labelInfobia!="") labelInfobia=labelInfobia +" - "
          labelInfobia=labelInfobia + $( this ).text() + $("#idParam"+$( this ).attr('idParam')).val()
         }
         else
         {
          if($("#option"+$( this ).attr('idOption')).val()!="-1")
          {
            if(labelInfobia!="") labelInfobia=labelInfobia +" - "
            labelInfobia=labelInfobia + $( this ).text() + $("#option"+$( this ).attr('idOption')+"  option:selected").text()
          }
         }
    });

 
*/


        options = "";
        $('#LstOptions select').each(function(index) {
            idSelect = $(this).attr('id');

            if ($("#" + idSelect).val() != "-1") {
                if (options != "") options = options + " - "
                options = options + "" + $("span[idOption='" + idSelect + "']").text() + " " + $(this).find('option:selected').text();
            }
        });




        //console.log("/"+options+"/");

        $.ajax({
            url: "https://www.goprint.tn/modules/infobia_module/controllers/front/createSessionDevis.php",
            type: 'POST',
            data: "declinison= " + options + "&product_name= " + product_name + "&product_id=" + id_product + "&product_url=" + location.href,
            error: function() {
                alert('Oops! Erreur au niveau custom!');
            },
            success: function(res) {

                window.location.href = '../nous-contacter'
                    //alert(res)
            }
        });
        return -1

    });


    $("#save_easy123").click(function() {
        isok = 1
        $('#LstOptions select').each(function(index) {
            $(this).css("border-color", '')
            if ($(this).prop('required') && $(this).val() == "-1") {
                $(this).css("border-color", 'red');
                isok = -1
            }

        });

        if (isok == -1) {
            return false;
        }

        labelInfobia = ""
        $(".nameParam").each(function(index) {


            if ($(this).attr('idParam') != null) {
                if (labelInfobia != "") labelInfobia = labelInfobia + " - "
                labelInfobia = labelInfobia + $(this).text() + $("#idParam" + $(this).attr('idParam')).val()
            }
            /*else
            {
             if($("#option"+$( this ).attr('idOption')).val()!="-1")
             {
               if(labelInfobia!="") labelInfobia=labelInfobia +" - "
               labelInfobia=labelInfobia + $( this ).text() +": "+ $("#option"+$( this ).attr('idOption')+"  option:selected").text()
             }
            }*/
        });


        $('#LstOptions select').each(function(index) {
            idSelect = $(this).attr('id');

            if ($("#" + idSelect).val() != "-1") {

                // console.log($(this).attr('groupName'));
                attrName = $(this).attr('paramName');
                if ($(this).attr('groupName') != "Default") {
                    attrName = attrName + " " + $(this).attr('groupName');
                }
                if (labelInfobia != "") labelInfobia = labelInfobia + " - "
                labelInfobia = labelInfobia + " " + attrName + ":" + $("#" + idSelect + "  option:selected").text();
            }
        });


        $('#LstOptions input').each(function(index) {

            type = $(this).attr('type');
            if (type == "radio") {
                if (($(this).is(':checked'))) {
                    idSelect = $(this).attr('name');
                    if (labelInfobia != "") labelInfobia = labelInfobia + " - "
                    val = $('input[name="' + idSelect + '"]:checked').val()
                    labelInfobia = labelInfobia + " " + $(this).attr('paramName') + ":" + val;
                }
            } else {

                idSelect = $(this).attr('id');


                if (type != "hidden") {
                    if (labelInfobia != "") labelInfobia = labelInfobia + " - "
                    labelInfobia = labelInfobia + " " + $(this).attr('paramName') + ":" + $("#" + idSelect).val();
                }
            }
        });


        // console.log(labelInfobia);

        //return false;
        // alert($("#add-to-cart-or-refresh", window.parent.document).serialize() + '&action=update&add=1&valinfobia='+$("#inputInfobia").val()+'&id_customization='+getTicks())
        $.ajax({
            url: $("#add-to-cart-or-refresh").attr('action'), // Le nom du fichier indiqué dans le formulaire
            type: $("#add-to-cart-or-refresh").attr('method'), // La méthode indiquée dans le formulaire (get ou post)
            data: $("#add-to-cart-or-refresh").serialize() + '&action=update&add=1&priceInfobia=' + $("#priceInfobia").val() + '&fileInfobia=' + $("#fileInfobia").val() + '&labelInfobia=' + labelInfobia + '&id_customization=' + getTicks(), // action=add-to-cart Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
            dataType: 'json',
            sync: false,
            success: function(html) { // Je récupère la réponse du fichier PHP
                //alert("Votre produit a été bien ajouté22"); // J'affiche cette réponse
                location.href = "https://www.goprint.tn/panier?action=show";
                //location.href ="http://localhost/dev.goprint.tn/panier?action=show"; 


            }
        });
    });


    $(".inputParam").change(function() {
        myFunctionInfobia($(this).attr("id"))
    });
    $(".inputParam").keyup(function() {

        myFunctionInfobia($(this).attr("id"))
    });


    $('.myPopover').popover();
});