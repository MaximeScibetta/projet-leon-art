// Countdown home page
    /* --------------------------*/
    // The date you want to count down to
    var targetDate = new Date("2018/08/19 18:00:00");   

    // Other date related variables
    var days;
    var hrs;
    var min;
    var sec;

    /* --------------------------
    * ON DOCUMENT LOAD
    * -------------------------- */
    $(function() {
        // Calculate time until launch date
        timeToLaunch();
        // Transition the current countdown from 0 
        numberTransition('#days .number', days, 1000, 'easeOutQuad');
        numberTransition('#hours .number', hrs, 1000, 'easeOutQuad');
        numberTransition('#minutes .number', min, 1000, 'easeOutQuad');
        // Begin Countdown
        setTimeout(countDownTimer,1001);
    });

    /* --------------------------
    * FIGURE OUT THE AMOUNT OF 
    TIME LEFT BEFORE LAUNCH
    * -------------------------- */
    function timeToLaunch(){
        // Get the current date
        var currentDate = new Date();

        // Find the difference between dates
        var diff = (currentDate - targetDate)/1000;
        var diff = Math.abs(Math.floor(diff));  

        // Check number of days until target
        days = Math.floor(diff/(24*60*60));
        sec = diff - days * 24*60*60;

        // Check number of hours until target
        hrs = Math.floor(sec/(60*60));
        sec = sec - hrs * 60*60;

        // Check number of minutes until target
        min = Math.floor(sec/(60));
        sec = sec - min * 60;
    }

    /* --------------------------
    * DISPLAY THE CURRENT 
    COUNT TO LAUNCH
    * -------------------------- */
    function countDownTimer(){ 
        
        // Figure out the time to launch
        timeToLaunch();
        
        // Write to countdown component
        $( "#days .number" ).text(days);
        $( "#hours .number" ).text(hrs);
        $( "#minutes .number" ).text(min);
        
        // Repeat the check every second
        setTimeout(countDownTimer,1000);
    }

    /* --------------------------
    * TRANSITION NUMBERS FROM 0
    TO CURRENT TIME UNTIL LAUNCH
    * -------------------------- */
    function numberTransition(id, endPoint, transitionDuration, transitionEase){
        // Transition numbers from 0 to the final number
        $({numberCount: $(id).text()}).animate({numberCount: endPoint}, {
            duration: transitionDuration,
            easing:transitionEase,
            step: function() {
                $(id).text(Math.floor(this.numberCount));
            },
            complete: function() {
                $(id).text(this.numberCount);
            }
        }); 
    };
/* --------------------------*/
// Google map individual
/* --------------------------*/
    var myCenter = new google.maps.LatLng(12.2667, -2.06667);
    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom: 7,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map"), mapProp);
        var marker = new google.maps.Marker({
            position: myCenter,
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
/* --------------------------*/
// Hamburger menu and sidebar
/* --------------------------*/
    const hamburger = document.querySelector('.hamburger');
    const search = document.querySelector('.search-icon')

    hamburger.addEventListener('click', function(e) {
        e.stopPropagation()
        e.preventDefault()
        hamburger.classList.toggle('is-active')
        document.body.classList.toggle('has-sidebar')
    });

    search.addEventListener('click', function(e) {
        e.stopPropagation()
        e.preventDefault()
        search.classList.toggle('open')
        search.parentNode.classList.toggle('open');
    });
/* --------------------------*/
// Event menu
/* --------------------------*/
    const buttons = document.querySelectorAll('.program__navigation a');

    Array.from(buttons).forEach(function($btn) {
        $btn.addEventListener("click", fActive);
    });

    function fActive(e) {
        e.stopPropagation();
        //e.preventDefault();
        if(  document.querySelector('.active') ){
            document.querySelector('.active').classList.remove('active');
        }
        e.currentTarget.classList.add('active');
    };
/* --------------------------*/
// Form contact feedback and focus
/* --------------------------*/
    var fCheckForm = function fCheckForm() {
        var $Form = document.querySelector('form.contact');
        var $FirstNameField = document.getElementById('first_name');
        var $LastNameField = document.getElementById('last_name');
        var $EmailField = document.getElementById('email');
        var $MsgField = document.getElementById('message');
        var $SubmitBtn = document.getElementById('submit');
        var regexpName = /^[a-zA-Z\u00C0-\u00FF]+['-]?[a-zA-Z\u00C0-\u00FF]+$/;
        var regexpEmail = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
        var regexpMsg = /^([a-zA-Z]{2,40} + [a-zA-Z]{2,40})$/;
        var fCheckAField = function fCheckAField(field, regexp) {
            if (field.value == '') {
                field.parentNode.querySelector('span').innerHTML = "Votre champs de formulaire est vide.";
                field.parentNode.querySelector('span').classList.add('on');
                return false;
            } else if (regexp && !regexp.test(field.value)) {
                field.parentNode.querySelector('span').innerHTML = "Il semble que la valeur rentré ait un problème.";
                field.parentNode.querySelector('span').classList.add('on');
                return false;
            } else {
                $SubmitBtn.removeAttribute('disabled');
                field.parentNode.querySelector('span').classList.remove('on');
                field.parentNode.querySelector('.input').classList.add('ok');
                return true;
            }
        };
        var fCheckFirstName = function fCheckFirstName() {
            return fCheckAField($FirstNameField, regexpName);
        };
        var fCheckLastName = function fCheckLastName() {
            return fCheckAField($LastNameField, regexpName);
        };
        var fCheckEmail = function fCheckEmail() {
            return fCheckAField($EmailField, regexpEmail);
        };
        var fCheckMessage = function fCheckMessage() {
            if ($MsgField.value.split(/\s+/).length >= 3) {
                $MsgField.parentNode.querySelector('span').classList.remove('on');
                $MsgField.parentNode.querySelector('.input').classList.add('ok');
                return true;
            }
            if ($MsgField.value.split(/\s+/).length === 1) {
                $MsgField.parentNode.querySelector('span').innerHTML = "Vous n'avez pas écrit de message.";
                $MsgField.parentNode.querySelector('span').classList.add('on');
                return false;
            }
            if ($MsgField.value.split(/\s+/).length < 5) {
                $MsgField.parentNode.querySelector('span').innerHTML = "Vous avez pas écris un assez grand message.";
                $MsgField.parentNode.querySelector('span').classList.add('on');
                return false;
            }
        };
        var fCheckAll = function fCheckAll() {
            if (fCheckFirstName() * fCheckLastName() * fCheckEmail() * fCheckMessage() ) {
                $Form.classList.add('valid');
            }
        };

        $FirstNameField.addEventListener('blur', fCheckFirstName, false);
        $LastNameField.addEventListener('blur', fCheckLastName, false);
        $EmailField.addEventListener('blur', fCheckEmail, false);
        $MsgField.addEventListener('blur', fCheckMessage, false);
        $SubmitBtn.addEventListener('click', fCheckAll, false);

        var input = document.querySelectorAll('fieldset .input');
        var getFocus = function getFocus(oEvent) {
            oEvent.currentTarget.parentNode.querySelector('label').classList.add("focus");
        };
        var outFocus = function outFocus(e) {
            if (e.currentTarget.parentNode.querySelector('.input').value.length === 0 || e.currentTarget.parentNode.querySelector('.input option').value.length === 0 ) {
                e.currentTarget.parentNode.querySelector('label').classList.remove("focus");
            }
        };
        Array.from(input).forEach(function($label) {
            $label.addEventListener("focus", getFocus);
            $label.addEventListener("click", getFocus);
            $label.addEventListener("blur", outFocus);
        });
    };
    //fCheckForm();
/* --------------------------*/
// JS Slider
/* --------------------------*/

    const fCancelAnchor = function(e){
        e.preventDefault();
    }

    const bullets = document.querySelectorAll('.bullets_nav');

    Array.from(bullets).forEach(function($btn) {
        $btn.addEventListener("click", fCancelAnchor);
        const translateValue = $btn.getAttribute('data-translateValue');
        $btn.addEventListener('click', () =>{
            // Remove class active from prec focus
            if( $btn.parentNode.querySelector('.active') ){
                $btn.parentNode.querySelector('.active').classList.remove('active');
            }

            // Make translateX animation of slider
            document.querySelector('.slider').style.transform = `translateX(${translateValue})`;

            // Add class active from actual focus
            $btn.classList.add('active');
        });
    });
    
    const prevNext = document.querySelectorAll('.prevNext div a');

    Array.from(prevNext).forEach(function($prevNext) {
        $prevNext.addEventListener("click", fCancelAnchor);

        const translateValue = $prevNext.getAttribute('data-translateValue');
        
        $prevNext.addEventListener("click", () =>{

            // Make translateX animation of slider
            document.querySelector('.slider').style.transform = `translateX(${translateValue})`;

            // Create variable for the parent
            const prevNextParent = $prevNext.parentNode.parentNode;

            // Add visible/hidden style for the nextPrec button
            prevNextParent.childNodes[$prevNext.getAttribute('data-next')].style.visibility = 'visible';
            prevNextParent.childNodes[$prevNext.getAttribute('data-prec')].style.visibility = 'hidden';
            
            // Change opacity of prec/next image
            if( document.querySelectorAll('.slider .precNext') ){
                console.log(document.querySelectorAll('.slider .precNext'));
                document.querySelectorAll('.slider .precNext')[0].classList.remove('precNext');
                document.querySelectorAll('.slider .precNext')[0].classList.remove('precNext');
            }
            img[$prevNext.getAttribute('data-prec-img')].classList.toggle('precNext');
            img[$prevNext.getAttribute('data-next-img')].classList.toggle('precNext');

            // Remove class active from bullets prec focus
            const btnA = document.querySelectorAll('.bullets_nav');
            const btn = document.querySelector('.bullets_nav');
            if( document.querySelector('.bullets .active') ){
                document.querySelector('.bullets .active').classList.remove('active');
            }

            // Add class active from actual focus
            btnA[ $prevNext.getAttribute('data-focus') ].classList.add('active');
        });
    });

    const img = document.querySelectorAll('.slider div');