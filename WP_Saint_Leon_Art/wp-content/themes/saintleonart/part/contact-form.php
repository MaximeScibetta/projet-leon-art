<form action="index.php" class="contact">
    <fieldset>
        <legend class="u-hidden-visually">Prénom</legend>
        <label for="first_name">Prénom</label>
        <input type="text" id="first_name" name="first_name" class="input">
        <span class="left"></span>
    </fieldset>

    <fieldset>
        <legend class="u-hidden-visually">Nom</legend>
        <label for="last_name">Nom</label>
        <input type="text" id="last_name" name="last_name" class="input">
        <span class="left"></span>
    </fieldset>

    <fieldset>
        <legend class="u-hidden-visually">Email</legend>
        <label for="email">Adresse email</label>
        <input type="email" id="email" name="email" class="input">
        <span class="left"></span>
    </fieldset>

    <fieldset>
        <legend class="u-hidden-visually">Numéro</legend>
        <label for="phone">Numéro de téléphone</label>
        <input type="tel" id="phone" name="phone" class="input">
        <span class="left"></span>
    </fieldset>

    <fieldset>
        <legend class="u-hidden-visually">Message</legend>
        <label for="message">Message</label>
        <textarea rows="1" cols="10" name="message" id="message" class="input"></textarea>
        <span class="left"></span>
    </fieldset>
    <!-- <button class="send-button" id="submit" type="submit" value="Envoyer">
        <div class="button">
            <span class="send-text">Envoyer</span>
            <svg version="1.1" id="send_mail" class="send-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;">
                <path style="fill:#5f0c30;" d="M120,339.226V496.99c0,14.374,18.38,20.499,26.997,8.994l77.065-102.729l23.492-12.037L501.919,31.57
                    l4.731-27.966l-41.329,22.839L119.916,326.288L120,339.226z"/>
                <path style="fill:#821c49;" d="M491.237,1.196C490.56,1.467,8.933,243.282,8.279,243.61c-10.503,5.251-11.149,20.024-1.157,26.191
                    l112.866,69.463L506.638,3.642l0,0C502.707,0.236,497.062-1.218,491.237,1.196z"/>
                <path style="fill:#821c49;" d="M507.165,4.34c-0.216-0.211-0.287-0.538-0.515-0.736l-2.935,4.16l-279.653,395.49l173.071,106.509
                    c9.014,5.541,20.68,0.258,22.603-10.005l92.021-481.989C512.735,12.682,510.673,7.755,507.165,4.34z"/>
            </svg>
        </div>
    </button> -->
    <a href="" data-text="Envoyer" class="btn btn--anim">Envoyer</a>
</form>