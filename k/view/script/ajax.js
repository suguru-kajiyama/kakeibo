$(function(){
            // Ajax button click
            $('#ajax').on('click',function(){
                $.ajax({
                    url:'./request.php',
                    type:'POST',
                    data:{
                        'userid':$('#userid').val(),
                        'passward':$('#passward').val()
                    }
                })
                // Ajaxリクエストが成功した時発動
                .done( (data) => {
                    $('.result').html(data);
                    console.log(data);
                })
                // Ajaxリクエストが失敗した時発動
                .fail( (data) => {
                    $('.result').html(data);
                    console.log(data);
                })
                // Ajaxリクエストが成功・失敗どちらでも発動
                .always( (data) => {

                });
            });
        });
