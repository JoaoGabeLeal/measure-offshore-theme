var isOpen = false;

$('.toggle').click(function(){
    if (isOpen) {
        $('.nav').animate({ height: '4.5rem' }, 500);
        isOpen = false;
    } else {
        $('.nav').animate({ height: '18.5rem' }, 500);
        isOpen = true;
    }
});