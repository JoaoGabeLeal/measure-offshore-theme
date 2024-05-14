var isOpen = false;

$('.toggle').click(function(){
    if (isOpen) {
        $('.navbar').animate({ height: '4.5rem' }, 500);
        isOpen = false;
    } else {
        $('.navbar').animate({ height: '18.5rem' }, 500);
        isOpen = true;
    }
});