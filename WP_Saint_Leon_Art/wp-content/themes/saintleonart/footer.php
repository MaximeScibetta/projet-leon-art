    </article>
    <footer class="u-margin-top-huge">
        <div class="about">
            <div>
                <h3>Saint Leon'Art</h3>
                <div class="social">
                    <p>twitter</p>
                    <p>facebook</p>
                    <p>Instagram</p>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div>
            <h3>Nos partenaires</h3>
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
        <div>
            <h3>Rester au courant</h3>
            <form action="post">
                <label for="email">Email</label>
                <input type="email" name="name" id="name" placeholder="Indiquez votre adress email">
                <input type="submit" value="Envoyez">
            </form>
        </div>
        <div>
            <h3>Dernières actu</h3>
            <div>
                <img src="" alt="">
                <p>Macadam party</p>
                <p>23 Juillet 2017</p>
            </div>
            <div>
                <img src="" alt="">
                <p>Verre écologique</p>
                <p>3 Septembre 2017</p>
            </div>
            <div>
                <img src="" alt="">
                <p>Expositon dans le quartier</p>
                <p>25 Mai 2017</p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script>
        /* --------------------------
        * GLOBAL VARS
        * -------------------------- */
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
    </script>
    <script>
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
        });
    </script>
</body>
</html>