$(function () {
    $('.btn-radio').click(function(e) {
        $('.btn-radio').not(this).removeClass('active')
    		.siblings('input').prop('checked',false)
            .siblings('.img-radio').css('opacity','0.5');
    	$(this).addClass('active')
            .siblings('input').prop('checked',true)
    		.siblings('.img-radio').css('opacity','1');
    });

    var pacote = document.getElementsByName('Pacote');

    $( "form" ).submit(function( event ) {
        if ( $( "input:first" ).val().prop('checked', true)) {
          $( "span" ).text( "Validated..." ).show();
            window.open("http://pt.stackoverflow.com");
          return;
        }
        event.preventDefault();
    });
});

$(function(){
    id = [];
    $(".btn-radio").click(function(event){
        $(".check").each(function(){
            id.push($(".check:checked").val());
        });

        alert("Obrigado");
        location.reload()
        // window.releaseEvents.href = "http://localhost:8000/perguntas_aluno#";
        event.preventDefault();
    }); 
});
