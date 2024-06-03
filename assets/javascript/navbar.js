var navbar_aberto = false;
$('.toggle').click(function(){
    if (navbar_aberto) {
        navbar_aberto = false;
        $('.navbar').animate({ 
            height: '4.5rem' 
        }, 200).css({
            'backgroundColor': ''
        });
    } else {
        navbar_aberto = true;
        $('.navbar').animate({ 
            height: '18.5rem' 
        }, 200).css({
            'backgroundColor': '#68358D'
        });
    }
});

window.addEventListener('scroll', function() {
    const scroll = window.scrollY;

    if(scroll > 10){
        $('.navbar').css({ 
            'position': 'fixed', 
            'top': '0', 
            'backgroundColor': '#68358D',
            'borderBottom': '0.3rem solid #984ccf'
        });
    }else{
        $('.navbar').css({ 
            'position': '', 
            'top': '', 
            'backgroundColor': '',
            'borderBottom': ''
        });
    }

});

