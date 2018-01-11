
const pageTitle = document.head.getElementsByTagName('title')[0].innerText;

if (pageTitle === 'Bienvenue - Saint-Léon\'Art' ){

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
    $(function () {
        // Calculate time until launch date
        timeToLaunch();
        // Transition the current countdown from 0 
        numberTransition('#days .number', days, 1000, 'easeOutQuad');
        numberTransition('#hours .number', hrs, 1000, 'easeOutQuad');
        numberTransition('#minutes .number', min, 1000, 'easeOutQuad');
        // Begin Countdown
        setTimeout(countDownTimer, 1001);
    });

    /* --------------------------
    * FIGURE OUT THE AMOUNT OF 
    TIME LEFT BEFORE LAUNCH
    * -------------------------- */
    function timeToLaunch() {
        // Get the current date
        var currentDate = new Date();

        // Find the difference between dates
        var diff = (currentDate - targetDate) / 1000;
        var diff = Math.abs(Math.floor(diff));

        // Check number of days until target
        days = Math.floor(diff / (24 * 60 * 60));
        sec = diff - days * 24 * 60 * 60;

        // Check number of hours until target
        hrs = Math.floor(sec / (60 * 60));
        sec = sec - hrs * 60 * 60;

        // Check number of minutes until target
        min = Math.floor(sec / (60));
        sec = sec - min * 60;
    }

    /* --------------------------
    * DISPLAY THE CURRENT 
    COUNT TO LAUNCH
    * -------------------------- */
    function countDownTimer() {

        // Figure out the time to launch
        timeToLaunch();

        // Write to countdown component
        $("#days .number").text(days);
        $("#hours .number").text(hrs);
        $("#minutes .number").text(min);

        // Repeat the check every second
        setTimeout(countDownTimer, 1000);
    }

    /* --------------------------
    * TRANSITION NUMBERS FROM 0
    TO CURRENT TIME UNTIL LAUNCH
    * -------------------------- */
    function numberTransition(id, endPoint, transitionDuration, transitionEase) {
        // Transition numbers from 0 to the final number
        $({ numberCount: $(id).text() }).animate({ numberCount: endPoint }, {
            duration: transitionDuration,
            easing: transitionEase,
            step: function () {
                $(id).text(Math.floor(this.numberCount));
            },
            complete: function () {
                $(id).text(this.numberCount);
            }
        });
    };
}

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
        search.parentNode.parentNode.classList.toggle('open');
    });

if (pageTitle === ' » Programme - Saint-Léon\'Art'){
    /* --------------------------*/
    // Event menu
    /* --------------------------*/
        const buttons = document.querySelectorAll('.program__navigation .day a');

        
        function fActive(e) {
            e.stopPropagation();
            if (document.querySelector('.program__navigation .day a.active')) {
                document.querySelector('.program__navigation .day a.active').classList.remove('active');
                document.querySelector('.program .timeline.all#all').classList.remove('here');
                
            }
            e.currentTarget.classList.add('active');
        };
        Array.from(buttons).forEach(function($btn) {
            $btn.addEventListener("click", fActive);
        });
}
// if (pageTitle === ' » Page contact - Saint-Léon\'Art'){
//     /* --------------------------*/
//     // Form contact feedback and focus
//     /* --------------------------*/
//         var fCheckForm = function fCheckForm() {
//             var $Form = document.querySelector('form.contact');
//             var $SubjectField = document.getElementById('subject');
//             var $LastNameField = document.getElementById('last_name');
//             var $EmailField = document.getElementById('email');
//             var $MsgField = document.getElementById('message');
//             var $SubmitBtn = document.querySelector('.btn.btn--anim');
//             var regexpName = /^[a-zA-Z\u00C0-\u00FF]+['-]?[a-zA-Z\u00C0-\u00FF]+$/;
//             var regexpEmail = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
//             var regexpMsg = /^([a-zA-Z]{2,40} + [a-zA-Z]{2,40})$/;
//             var fCheckAField = function fCheckAField(field, regexp) {
//                 if (field.value == '') {
//                     field.parentNode.querySelector('span').innerHTML = "Votre champs de formulaire est vide.";
//                     field.parentNode.querySelector('span').classList.add('on');
//                     return false;
//                 } else if (regexp && !regexp.test(field.value)) {
//                     field.parentNode.querySelector('span').innerHTML = "Il semble que la valeur rentré ait un problème.";
//                     field.parentNode.querySelector('span').classList.add('on');
//                     return false;
//                 } else {
//                     $SubmitBtn.removeAttribute('disabled');
//                     field.parentNode.querySelector('span').classList.remove('on');
//                     field.parentNode.querySelector('.input').classList.add('ok');
//                     return true;
//                 }
//             };
//             var fCheckFirstName = function fCheckFirstName() {
//                 return fCheckAField($SubjectField, regexpName);
//             };
//             var fCheckLastName = function fCheckLastName() {
//                 return fCheckAField($LastNameField, regexpName);
//             };
//             var fCheckEmail = function fCheckEmail() {
//                 return fCheckAField($EmailField, regexpEmail);
//             };
//             var fCheckMessage = function fCheckMessage() {
//                 if ($MsgField.value.split(/\s+/).length >= 3) {
//                     $MsgField.parentNode.querySelector('span').classList.remove('on');
//                     $MsgField.parentNode.querySelector('.input').classList.add('ok');
//                     return true;
//                 }
//                 if ($MsgField.value.split(/\s+/).length === 1) {
//                     $MsgField.parentNode.querySelector('span').innerHTML = "Vous n'avez pas écrit de message.";
//                     $MsgField.parentNode.querySelector('span').classList.add('on');
//                     return false;
//                 }
//                 if ($MsgField.value.split(/\s+/).length < 5) {
//                     $MsgField.parentNode.querySelector('span').innerHTML = "Vous avez pas écris un assez grand message.";
//                     $MsgField.parentNode.querySelector('span').classList.add('on');
//                     return false;
//                 }
//             };
//             var fCheckAll = function fCheckAll() {
//                 if (fCheckFirstName() * fCheckLastName() * fCheckEmail() * fCheckMessage() ) {
//                     $Form.classList.add('valid');
//                 }
//             };

//             $SubjectField.addEventListener('blur', fCheckFirstName, false);
//             $LastNameField.addEventListener('blur', fCheckLastName, false);
//             $EmailField.addEventListener('blur', fCheckEmail, false);
//             $MsgField.addEventListener('blur', fCheckMessage, false);
//             $SubmitBtn.addEventListener('click', fCheckAll, false);
//         };
//         fCheckForm();
//}
if (pageTitle === ' » À propos - Saint-Léon\'Art'){
    /* --------------------------*/
    // JS Slider
    /* --------------------------*/
    const fCancelAnchor = function (e) {
        e.preventDefault();
    }
    const bullets = document.querySelectorAll('.bullets_nav');
    var translateValue;
    Array.from(bullets).forEach(function ($btn) {
        $btn.addEventListener("click", fCancelAnchor);


        $btn.addEventListener('click', () => {

            if (window.matchMedia("(max-width: 739px)").matches) {
                var translateValue = $btn.getAttribute('data-translateValue-mobile');
            } else {
                var translateValue = $btn.getAttribute('data-translateValue-desktop');

            }

            // Remove class active from prec focus
            if ($btn.parentNode.querySelector('.active')) {
                $btn.parentNode.querySelector('.active').classList.remove('active');
            }

            // Make translateX animation of slider
            document.querySelector('.slider').style.transform = `translateX(${translateValue})`;

            // Add class active from actual focus
            $btn.classList.add('active');

            // Change opacity of prec/next image
            if (document.querySelectorAll('.slider .precNext')) {
                document.querySelectorAll('.slider .precNext')[0].classList.remove('precNext');
                document.querySelectorAll('.slider .precNext')[0].classList.remove('precNext');
            }
            img[$btn.getAttribute('data-prec-img')].classList.toggle('precNext');
            img[$btn.getAttribute('data-next-img')].classList.toggle('precNext');
        });
    });

    const prevNext = document.querySelectorAll('.prevNext div button');

    Array.from(prevNext).forEach(function ($prevNext) {
        $prevNext.addEventListener("click", fCancelAnchor);


        $prevNext.addEventListener("click", () => {

            if (window.matchMedia("(max-width: 739px)").matches) {
                var translateValue = $prevNext.getAttribute('data-translateValue-mobile');
            } else {
                var translateValue = $prevNext.getAttribute('data-translateValue-desktop');

            }
            // Make translateX animation of slider
            document.querySelector('.slider').style.transform = `translateX(${translateValue})`;

            // Create variable for the parent
            const prevNextParent = $prevNext.parentNode.parentNode;

            // Add visible/hidden style for the nextPrec button
            prevNextParent.childNodes[$prevNext.getAttribute('data-next')].style.visibility = 'visible';
            prevNextParent.childNodes[$prevNext.getAttribute('data-prec')].style.visibility = 'hidden';

            // Change opacity of prec/next image
            if (document.querySelectorAll('.slider .precNext')) {
                document.querySelectorAll('.slider .precNext')[0].classList.remove('precNext');
                document.querySelectorAll('.slider .precNext')[0].classList.remove('precNext');
            }
            img[$prevNext.getAttribute('data-prec-img')].classList.toggle('precNext');
            img[$prevNext.getAttribute('data-next-img')].classList.toggle('precNext');

            // Remove class active from bullets prec focus
            const btnA = document.querySelectorAll('.bullets_nav');
            const btn = document.querySelector('.bullets_nav');
            if (document.querySelector('.bullets .active')) {
                document.querySelector('.bullets .active').classList.remove('active');
            }

            // Add class active from actual focus
            btnA[$prevNext.getAttribute('data-focus')].classList.add('active');
        });

        $
    });

    const img = document.querySelectorAll('.slider div');

    $('.count').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
    });
}
/* --------------------------*/
// Input Anim
/* --------------------------*/
    var fAnimInput = function fAnimInput() {
        var input = document.querySelectorAll('.input');

        var getFocus = function getFocus(oEvent) {
            oEvent.currentTarget.parentNode.querySelector('label').classList.add("focus");
            var oInput =  oEvent.currentTarget.parentNode.querySelector('.input');
            setTimeout(function(){
                oInput.classList.add("border");
                
                },200);
            
        };

        var outFocus = function outFocus(e) {
            if (e.currentTarget.parentNode.querySelector('.input').value.length === 0 ) {
                e.currentTarget.parentNode.querySelector('label').classList.remove("focus");
            }
            e.currentTarget.classList.remove("border");
            
        };
        Array.from(input).forEach(function($label) {
            $label.addEventListener("focus", getFocus);
            $label.addEventListener("click", getFocus);
            $label.addEventListener("blur", outFocus);
            if($label.value != ""){
                $label.parentNode.querySelector('label').classList.add("focus")
            }
        });
    };
    fAnimInput();

/* --------------------------*/
// Taxonomy Filter and pagination
/* --------------------------*/
if (pageTitle === ' » Tous les artistes - Saint-Léon\'Art'){
    jQuery(function ($) {
        $('#filter').submit(function () {
            var filter = $('#filter');
            $.ajax({
                url: filter.attr('action'),
                data: filter.serialize(), // form data
                type: filter.attr('method'), // POST
                success: function (data) {
                    $('.artist__container').html(data); // insert data
                    console.log(data);
                }
            });
            return false;
        });
    });
}

if (pageTitle === ' » Tous les événements - Saint-Léon\'Art') {
    jQuery(function ($) {
        $('#event_filter').submit(function () {
            var filter = $('#event_filter');
            $.ajax({
                url: filter.attr('action'),
                data: filter.serialize(), // form data
                type: filter.attr('method'), // POST
                success: function (data) {
                    $('.event__container').html(data); // insert data
                    console.log(data);
                }
            });
            return false;
        });
    });
}

if (pageTitle === ' » Actualités - Saint-Léon\'Art') {
    jQuery(function ($) {
        $('#news_filter').submit(function () {
            var filter = $('#news_filter');
            $.ajax({
                url: filter.attr('action'),
                data: filter.serialize(), // form data
                type: filter.attr('method'), // POST
                success: function (data) {
                    $('.event__container').html(data); // insert data
                    console.log(data);
                }
            });
            return false;
        });
    });
}
/* --------------------------*/
// Menu animation on scroll
/* --------------------------*/

if (window.matchMedia("(min-width: 980px)").matches) {
    var fAddLogoMenu = function fAnimMenu() {
        const menu = document.querySelector('ul.menu');
        var li = document.createElement("li");
        const span = document.createElement('span');
        var sheet = window.document.styleSheets[0];
        const midle = menu.childNodes[7];
        li.appendChild(span);
        span.appendChild(document.createTextNode("SaintLeon'Art"));
        menu.insertBefore(li, midle.nextSibling);
        li.classList.add('menu__item');
        li.classList.add('logo');
        span.classList.add('logo');
        menu.classList.add('onScroll');
        sheet.insertRule('.header {padding-top: 0px;}', sheet.cssRules.length);
    }
    var fRemoveLogoMenu = function fRemoveLogoMenu(e) {
            var sheet = window.document.styleSheets[0];
            const menu = document.querySelector('ul.menu');
            const logo = menu.querySelector('.menu__item.logo');
            menu.classList.remove('onScroll');
            menu.removeChild(logo);
            sheet.insertRule('.header {padding-top: 24px;}', sheet.cssRules.length);
    }
    var AnimMenu = (function () {
        var executed = false;
        var actionDo = false;
        return function (e) {
            if (!executed) {
                if (window.pageYOffset > 10) {
                    executed = true;
                    actionDo = true;
                    fAddLogoMenu()
                }
            }
            if(actionDo && executed){
                if (window.pageYOffset < 100) {
                    actionDo = false;
                    executed = false;
                    fRemoveLogoMenu();
                }
            }
        };
    })();

    window.addEventListener('scroll', AnimMenu);
}
/* --------------------------*/
// Newsletter validation effect
/* --------------------------*/
function PathLoader(el) {
    this.el = el;
    this.strokeLength = el.getTotalLength();

    // set dash offset to 0
    this.el.style.strokeDasharray =
        this.el.style.strokeDashoffset = this.strokeLength;
}

PathLoader.prototype._draw = function (val) {
    this.el.style.strokeDashoffset = this.strokeLength * (1 - val);
}

PathLoader.prototype.setProgress = function (val, cb) {
    this._draw(val);
    if (cb && typeof cb === 'function') cb();
}

PathLoader.prototype.setProgressFn = function (fn) {
    if (typeof fn === 'function') fn(this);
}

var body = document.body,
    svg = document.querySelector('svg path');

if (svg !== null) {
    svg = new PathLoader(svg);

    setTimeout(function () {
        document.body.classList.add('active');
        svg.setProgress(1);
    }, 200);
}