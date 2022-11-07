$(document).ready(function(){
    $('nav').hide()
    $(".bars").click(function(){
        $('nav').toggle()
    })   
    $('form').hide()
    $('.icon_busca').click(function(){
        $(this).toggle()
        $('.pesquisa form').toggle()
        $('.pesquisa form input').focus()
    })

    $('.buscar').click(function(){
        $('.icon_busca').show()
        $('.pesquisa form').toggle()
    })
    // $('.area_sessoes_gerais .area_right_sessoes_gerais > section > div').hide()
    $('.area_sessoes_gerais .area_right_sessoes_gerais > section header').click(function(){
        
        // alert($(this).attr('attr'))
        // var item = $(this).parent().find('div').attr('class',$(this).attr('attr')).css('display','block')
        var item = $(this).parent().find('div').attr('class',$(this).attr('attr')).toggle()
        
    })
})