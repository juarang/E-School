/**
    * teacher_panel.js by @guateapps.
    * Copyright 2022 Guate Apps.
*/
    'use strict';

    function vote(poll_code)
    {
        var answer = $('input[name=answer'+poll_code+']:checked').val();
        if(answer!="" && poll_code!="")
        {
            $.ajax({url: rootAppURI+"teacher/polls/response/",type:'POST',data:{answer:answer,poll_code:poll_code},success:function(result)
            {
                $('#panel').load(document.URL + ' #panel');
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                        timer: 8000
                    }); 
                    Toast.fire({
                        type: 'success',
                        title: updated
                    })
                }});
            }else{
            alert(option);
        }
    }