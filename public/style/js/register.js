/**
    * register.js by @guateapps.
    * Copyright 2022 Guate Apps.
*/
    'use strict';

    function get_sections(class_id) 
   {
      $.ajax({
            url: rootAppURI+'admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_holder').html(response);
            }
        });
   }
   
   $(document).ready(function(){         
        var query;          
        $("#username").on('keyup',function(e){
                query = $("#username").val();
                $("#result2").queue(function(n) {                     
                    $.ajax({
                          type: "POST",
                          url: rootAppURI+'register/search_user',
                          data: "c="+query,
                          dataType: "html",
                          error: function(){
                                alert("¡Error!");
                          },
                          success: function(data)
                          { 
                            if (data == "success") 
                            {            
                                texto = "<b class='red'>"+exist+"</b>"; 
                                $("#result2").html(texto);
                                $('#sub_teacher').attr('disabled','disabled');
                            }
                            else { 
                                texto = ""; 
                                $("#result2").html(texto);
                                $('#sub_teacher').removeAttr('disabled');
                            }
                            n();
                          }
                      });                           
                 });                       
          });                       
    });

    $(document).ready(function(){         
          var query;          
          $("#user2").on('keyup',function(e){
                 query = $("#user2").val();
                 $("#result4").queue(function(n) 
                 {                     
                    $.ajax({
                          type: "POST",
                          url: rootAppURI+'register/search_user',
                          data: "c="+query,
                          dataType: "html",
                          error: function(){
                                alert("¡Error!");
                          },
                          success: function(data)
                          { 
                            if (data == "success") 
                            {            
                                var texto = "<b class='red'>"+exist+"</b>"; 
                                $("#result4").html(texto);
                                $('#sub_student').attr('disabled','disabled');
                            }
                            else { 
                                var texto = ""; 
                                $("#result4").html(texto);
                                $('#sub_student').removeAttr('disabled');
                            }
                            n();
                          }
                      });                           
                 });                       
          });                       
    });

    $(document).ready(function(){         
          var query;          
          $("#user5").on('keyup',function(e){
                 query = $("#user5").val();
                 $("#result5").queue(function(n) {                     
                    $.ajax({
                          type: "POST",
                          url: rootAppURI+'register/search_user',
                          data: "c="+query,
                          dataType: "html",
                          error: function(){
                                alert("¡Error!");
                          },
                          success: function(data)
                          { 
                            if (data == "success") 
                            {            
                                var texto = "<b class='red'>"+exist+"</b>"; 
                                $("#result5").html(texto);
                                $('#sub_parent').attr('disabled','disabled');
                            }
                            else { 
                                var texto = ""; 
                                $("#result5").html(texto);
                                $('#sub_parent').removeAttr('disabled');
                            }
                            n();
                          }
                      });                           
                 });                       
          });                       
    });