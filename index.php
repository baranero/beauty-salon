<?php get_header(); ?>

<div class="main-container">
<div class="main-container__content">
    <h1 class="main-container__header">Gabinet kosmetyczny Agnieszka Wróbel</h1>
    <p class="main-container__paragraph">Miejsce stworzone z myślą o kobietach. Profesjonalna pielęgnacja dłoni, oprawy oczu i twarzy. Oferuję szeroki zakres usług, w tym manicure klasyczny, japoński i hybrydowy, laminację brwi i rzęs, hennę pudrową, a także indywidualnie dobrane zabiegi na twarz, w tym masaż twarzy, masaż kobido, masaż upala, mezoterapię mikroigłową i mikrodermabrazję. Moje usługi są dostosowane do potrzeb każdej klientki, zapewniając najlepsze wyniki i relaks. Odwiedź mój gabinet w Kaliszu i doświadcz wyjątkowej opieki kosmetycznej. Umów się już dziś!</p>
</div>
</div>
<div class="service-container">
    <h2 class="service-header">Usługi</h2>
    <div class="service-card">
        <div class="service-card__content">
            <img class="service-card__image" src="<?php echo get_template_directory_uri(); ?>/images/98.jpg" alt="Hands">
            <h3 class="service-card__header">Pielęgnacja dłoni</h3>
        </div>
        <button class="service-card__button">Sprawdź</button>
    </div>
    <div class="service-card">
        <div class="service-card__content">
            <img class="service-card__image" src="<?php echo get_template_directory_uri(); ?>/images/96.jpg" alt="Eyes">
            <h3 class="service-card__header">Pielęgnacja oprawy oczu</h3>
        </div>
        <button class="service-card__button">Sprawdź</button>
    </div>
    <div class="service-card">
        <div class="service-card__content">
            <img class="service-card__image" src="<?php echo get_template_directory_uri(); ?>/images/masaz-twarzy.jpg" alt="Face">
            <h3 class="service-card__header">Pielęgnacja twarzy i ciała</h3>
        </div>
        <button class="service-card__button">Sprawdź</button>
    </div>
</div>
<div class="about">
    <h2 class="about-header">O mnie</h2>
    <div class="about-container">
        <img class="about-container__image" src="<?php echo get_template_directory_uri(); ?>/images/profile.jpg" alt="">
        <p class="about-container__paragraph">
        Nazywam się Agnieszka Wróbel, jestem magistrem kosmetologii. Ukończyłam Wyższą Szkołę Fizjoterapii we Wrocławiu, Uniwersytet Medyczny w Łodzi oraz studia podyplomowe z psychodietetyki na Uniwersytecie SWPS we Wrocławiu. Od 15 lat pracuję z klientami dbając o ich skórę.
        </p>
    </div>
</div>

<div class="contact">
    <h2 class="contact__header">Umów się na wizytę</h2>
    <div class="contact-container">
        <div class="contact-container-card-phone">
            <h4 class="contact-container-card__header">
                Numer telefonu
            </h4>
            <p class="contact-container-card__paragraph">+48 605 332 652</p>
        </div>
        <div class="contact-container-card-address">
            <h4 class="contact-container-card__header">
                Adres
            </h4>
            <p class="contact-container-card__paragraph">ul. Owsiana 18A/41</p>
            <p class="contact-container-card__paragraph">62-800 Kalisz</p>
        </div>
    </div>
</div>

<div class="map">
<iframe class="map-widnow" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d617.288916697798!2d18.114290987180418!3d51.766761328228974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ac5f382ce548d%3A0x16f2b1fe00700c41!2sAgnieszka%20Wr%C3%B3bel%20Kosmetolog!5e0!3m2!1spl!2spl!4v1705498444460!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer(); ?>