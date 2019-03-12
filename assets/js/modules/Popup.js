function popupFunction() {  
    const popup = document.querySelector('#popup-container');
    const popupClose = document.querySelector('#popup-close');

    function closePopup() {
        document.body.classList.remove('active');
    }

    function openPopup() {
        document.body.classList.add('active');
    }

    function cookieFunction() {
        let counter = Cookies.get('counter');
            
        if(counter === undefined) {
            Cookies.set('counter', 1, { expires: popupDaysOfLife });
            counter = Cookies.get('counter');
            openPopup();
        } 
            
        else if(counter >= popupRepeatNumber ) {
            closePopup();
        } 
            
        else {
            counter = parseFloat(counter, 2) + 1;
            Cookies.set('counter', counter, { expires: popupDaysOfLife });
            openPopup();
        }
    }
    
    setTimeout(function() {
        cookieFunction();
    }, popupTime);

    popupClose.addEventListener('click', closePopup);
}