<?php include 'header.php'; ?>

<body class="body counter-scroll">

    <!-- preload -->
    <div class="preload preload-container">
        <div class="middle"></div>
    </div>
    <!-- /preload -->

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">

            <?php include 'headerbody.php'; ?>

            <!-- page-title -->
            <div class="page-title">
                <div class="themesflat-container w1791">
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper-container" data-swiper='{
                                "spaceBetween": 0,
                                "slidesPerView": 1,
                                "observer": true,
                                "observeParents": true,
                                "navigation": {
                                    "nextEl": ".page-title-next",
                                    "prevEl": ".page-title-prev"
                                }
                            }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="content">
                                            <!-- <div class="text-special m-auto">和 の 味</div>
                                            <div class="title">Sushidfdf.</div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="swiper-button-next style-text page-title-next"></div>
                                <div class="swiper-button-prev style-text page-title-prev"></div> -->
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bottom">
                                <div class="search-box relative">
                                    <!-- <div class="show-search">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M508.875,493.792L353.089,338.005c32.358-35.927,52.245-83.296,52.245-135.339C405.333,90.917,314.417,0,202.667,0    S0,90.917,0,202.667s90.917,202.667,202.667,202.667c52.043,0,99.411-19.887,135.339-52.245l155.786,155.786    c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125C513.042,504.708,513.042,497.958,508.875,493.792z     M202.667,384c-99.979,0-181.333-81.344-181.333-181.333S102.688,21.333,202.667,21.333S384,102.677,384,202.667    S302.646,384,202.667,384z"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div> -->
                                    <!-- <div class="top-search">
                                        <form class="search-form relative">
                                            <fieldset class="search">
                                                <input type="search" placeholder="Search..." class="style-2" name="search" tabindex="2" value="" aria-required="true" required="">
                                            </fieldset>
                                            <div class="">
                                                <button class="" type="submit"><i class="icon-search"></i></button>
                                            </div>
                                        </form>
                                    </div> -->
                                </div>
                                <ul class="intro">
                                    <li>Téléphone: 021 323 40 00</li>
                                    <!-- <li>basilicojapan@gmail.com</li> -->
                                    <!-- <li>open 8am - 21pm, holiday: closed</li> -->
                                    <li>Lausanne's best kept secret: 1er étage entre Riponne et St-Laurent LAUSANNE
                                        Restaurant
                                        rue Haldimand 9
                                        1er etage, perché là-haut!</li>
                                </ul>
                                <div class="cart">
                                    <!-- <a href="shop-single.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 459.361 459.361" style="enable-background:new 0 0 459.361 459.361;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M371.2,325.731c19.1-0.2,35.8-13.1,40.7-31.6l47.1-175.4c1.5-5.7-1.8-11.5-7.5-13.1c-0.9-0.2-1.8-0.4-2.7-0.4H94.5    l-24.1-89c-1.2-4.6-5.4-7.9-10.2-7.9H0v21.3h51.8l23.3,87c-0.1,0.7-0.1,1.4,0,2.1l48,176c0.3,1.4,0.8,2.9,1.3,4.3l16.2,59    c-15.6,8.3-26.2,24.7-26.2,43.6c0,27.3,22.1,49.4,49.4,49.4c27.3,0,49.4-22.1,49.4-49.4c0-8.5-2.2-16.6-6-23.6    c-0.9-1.6-1.8-3.2-2.9-4.8H330c-5.6,8-9,17.8-9,28.4c0,27.3,22.1,49.4,49.4,49.4s49.4-22.1,49.4-49.4c0-12.9-4.9-24.6-13-33.4    c-8.7-9.9-21.5-16.2-35.8-16.3H161.9l-7.5-27.5c3.2,0.8,6.5,1.3,9.8,1.3H371.2z M370.5,373.231c15.7,0,28.4,12.7,28.4,28.4    s-12.7,28.4-28.4,28.4c-15.7,0-28.4-12.7-28.4-28.4S354.8,373.231,370.5,373.231z M163.8,373.231c15.7,0,28.3,12.8,28.3,28.4    c0,15.7-12.7,28.4-28.4,28.4c-15.7,0-28.3-12.7-28.3-28.4S148.1,373.231,163.8,373.231z M144.8,290.931l-23.9-87.4l-21.3-76.8    h334.9l-43.3,162.6c-2.4,9.3-10.7,15.8-20.3,16H164C155.3,304.831,147.7,299.231,144.8,290.931z"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page-title -->

            <!-- wg-about -->
            <div class="wg-about">
                <div class="themesflat-container full">
                    <div class="row">
                        <div class="col-12">
                            <div class="wrap">
                                <div class="images wow fadeInLeft">
                                    <!-- <img class="text" src="assets/images/box-item/text-1.png" alt=""> -->
                                    <img class="img" src="assets/images/wolf/Restaurant_Lausanne_Cosy.jpeg" alt="">
                                </div>
                                <div class="content">
                                    <div class="heading-section">
                                        <span class="sub sub-before wow fadeInUp">A propos du restaurant</span>
                                        <div class="main wow fadeInUp">Crazy Wolf – ! <br> Le goût du fait maison dans
                                            une ambiance funky au cœur de Lausanne </div>
                                    </div>
                                    <p class="wow fadeInUp">Le Crazy Wolf est un restaurant pas comme les autres, au
                                        concept " Fast & Casual", situé au centre de Lausanne, Suisse. Avec sa
                                        décoration funky, ses recettes maison et ses produits locaux, le Crazy Wolf fait
                                        frémir les papilles des Lausannois, petits et grands, depuis plus d'un an!</p>
                                    <!-- <p class="wow fadeInUp">Sushi is balanced between the sour taste of vinegar, the
                                        characteristic sweetness of fresh fish meat and the pungent taste of mustard
                                        sauce.</p> -->
                                    <a href="#" class="button-style-1 wow fadeInUp">Lire la suite</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /wg-about -->

            <!-- wg-service -->
            <!-- <div class="wg-service">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="left">
                                <div class="service-item wow fadeInUp">
                                    <div class="image">
                                        <img src="assets/images/item-background/service-1.png" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="title"><a href="#">authentic taste</a></div>
                                        <p>Our dishes adhere to the Japanese virtue of serving natural and healthy
                                            meals. Fresh and high quality ingredients.</p>
                                    </div>
                                </div>
                                <div class="service-item wow fadeInUp">
                                    <div class="image">
                                        <img src="assets/images/item-background/service-2.png" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="title"><a href="#">PREMIUM INGREDIENTS</a></div>
                                        <p>From sushi to broths and even desserts, all of our dishes are free of
                                            artificial sweeteners, spices, preservatives and colorants.</p>
                                    </div>
                                </div>
                                <div class="service-item wow fadeInUp mb-0">
                                    <div class="image">
                                        <img src="assets/images/item-background/service-3.png" alt="">
                                    </div>
                                    <div class="content">
                                        <div class="title"><a href="#">CREATIVE MENU</a></div>
                                        <p>We are constantly offering delicious and attractive dishes on the menu. Enjoy
                                            new seasonal dishes every month!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right wow fadeInRight">
                                <img src="assets/images/box-item/about-2.jpg" alt="" class="item-1">
                                <img src="assets/images/box-item/about-3.jpg" alt="" class="item-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- /wg-service -->


            <!-- wg-introduction -->
            <!-- <div class="wg-introduction">
                <div class="themesflat-container w1791">
                    <div class="row">
                        <div class="col-12">
                            <div class="wrap">
                                <div class="image wow fadeInLeft">
                                    <div class="swiper-container" data-swiper='{
                                        "spaceBetween": 0,
                                        "slidesPerView": 1,
                                        "observer": true,
                                        "observeParents": true,
                                        "navigation": {
                                            "nextEl": ".introduction-next"
                                        }
                                    }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img w-full" src="assets/images/box-item/introduction-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img w-full" src="assets/images/box-item/introduction-2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next introduction-next">
                                            <div class="box">drag</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="heading-section">
                                        <span class="sub sub-before wow fadeInUp">restaurant space</span>
                                        <div class="main wow fadeInUp">
                                            Bring Japanese <br>
                                            atmosphere to your <br>
                                            dining table
                                        </div>
                                    </div>
                                    <p class="wow fadeInUp">With the spirit of bringing the quintessence of Japanese
                                        cuisine to every <br> party, each dish at Sushi World is decorated and presented
                                        in a sophisticated <br> and serious way, bringing beauty and professionalism.
                                    </p>
                                    <ul class="list-text wow fadeInUp">
                                        <li>Japanese style warm space</li>
                                        <li>Immerse yourself in every melody of music and food</li>
                                        <li>Perfect space for private event</li>
                                    </ul>
                                    <a href="#" class="button-style-1 wow fadeInUp">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- /wg-introduction -->


            <!-- wg-introduction -->
            <div class="wg-introduction style-1">
                <div class="themesflat-container w1791">
                    <div class="row">
                        <div class="col-12">
                            <div class="wrap">
                                <div class="content">
                                    <div class="heading-section">
                                        <span class="sub sub-before wow fadeInUp">TÉLÉPHONE: 021 323 40 00</span>
                                        <div class="main wow fadeInUp">
                                            Bon, <br>
                                            simple <br>
                                            & Généreux
                                        </div>
                                    </div>
                                    <p class="wow fadeInUp">Depuis début 2017, des Brunchs sont proposés tous les
                                        Dimanches au Crazywolf à Lausanne. Au menu: pancakes maison, bacon, lard grillé,
                                        saumon fumé, toasts à l'avocat et plein d'autres bonnes choses! Les formules
                                        coûtent entre CHF 22.- et 26.-, alors que de nombreux plats sont disponibles à
                                        la carte pou une dizaine de francs.
                                    </p>
                                    <p class="wow fadeInUp">Depuis début 2017, des Brunchs sont proposés tous les
                                        Dimanches au Crazywolf à Lausanne. Au menu: pancakes maison, bacon, lard grillé,
                                        saumon fumé, toasts à l'avocat et plein d'autres bonnes choses! Les formules
                                        coûtent entre CHF 22.- et 26.-, alors que de nombreux plats sont disponibles à
                                        la carte pou une dizaine de francs.

                                    </p>
                                    <strong href="#" style="font-size: 18px;" class="">Astuce: Pensez à réserver par
                                        <br>
                                        téléphone pour être sûrs d'avoir une place ;) </strong>
                                </div>
                                <div class="image wow fadeInLeft">
                                    <div class="swiper-container" data-swiper='{
                                        "spaceBetween": 0,
                                        "slidesPerView": 1,
                                        "observer": true,
                                        "observeParents": true,
                                        "navigation": {
                                            "nextEl": ".introduction-next"
                                        }
                                    }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img w-full"
                                                    src="assets/images/wolf/Meilleurs_Burgers_Hangover_Lausanne.jpeg"
                                                    alt="">
                                            </div>
                                            <!-- <div class="swiper-slide">
                                                <img class="img w-full" src="assets/images/box-item/introduction-1.jpg"
                                                    alt="">
                                            </div> -->
                                        </div>
                                        <!-- <div class="swiper-button-next introduction-next">
                                            <div class="box">drag</div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /wg-introduction -->

            <!-- our-menu -->
            <div class="our-menu" id="contact_" style="margin-top: 100px;">
                <div class="wrap">
                    <div class="left">
                        <!-- <div class="text-special wow fadeInLeft before">あ ら ゆ る 味 を</div> -->
                        <div class="heading-section style-1">
                            <span class="sub sub-before wow fadeInUp">Notre menus</span>
                            <div class="main wow fadeInUp">Vous désirez faire une réservation?</div>
                        </div>
                        <p class="wow fadeInUp">
                            Pas de soucis, Appelez-nous pendant les heures d'ouverture au: <br>
                            <strong style="color:orangered">Tél: 021 323 40 00</strong>
                            Malheureusement, on ne peut pas garantir les réservations par e-mail ;)<br>
                            L'alternative, c'est de passer au resto en personne! C'est caché au premier étage, mais vous trouverez sûrement ... ;)
                            <br>
                            Pour tout autre renseignement ou pour nous faire un petit coucou, vous pouvez utiliser le formulaire de contact ici :
                        </p>
                        <a href="#" data-toggle="modal" data-target="#menuModal" class="button-style-1 white wow fadeInUp">Voir tout les menus</a>
                    </div>
                    <div class="right">
                        <form class="comment-form has-icon relative form-1" style="margin-top: 20px;" id="contactForm" novalidate>
                            <div class="columns">
                                <fieldset class="name relative">
                                    <input type="text" placeholder="Nom et/ou nom de l'entreprise*" class="style-1"
                                        name="name" id="name" tabindex="2" value="" aria-required="true" required="">
                                    <div class="error-message" id="nameError" style="color: #dc3545; font-size: 12px;  display: none; margin-bottom: 5px;"></div>
                                </fieldset>
                                <fieldset class="email relative">
                                    <input type="email" placeholder="Votre email*" class="style-1" name="email"
                                        id="email" tabindex="2" value="" aria-required="true" required="">
                                    <div class="error-message" id="emailError" style="color: #dc3545; font-size: 12px; margin-top: 5px; display: none; margin-bottom: 5px;"></div>
                                </fieldset>
                            </div>

                            <fieldset class="email relative">
                                <input type="text" placeholder="Sujet*"
                                    class="style-1" name="subject" id="subject" tabindex="2" value="" aria-required="true" required="">
                                <div class="error-message" id="subjectError" style="color: #dc3545; font-size: 12px; margin-top: 5px; display: none; margin-bottom: 5px;"></div>
                            </fieldset>
                            <fieldset class="textarea relative">
                                <textarea name="message" id="message" placeholder="Message*" class="style-1" cols="30"
                                    rows="10" required></textarea>
                                <div class="error-message" id="messageError" style="color: #dc3545; font-size: 12px; margin-top: 5px; display: none; margin-bottom: 5px;"></div>
                            </fieldset>
                            <button class="button-style-1 white" type="submit" id="submitBtn">ENVOYER</button>
                            <div id="formSuccess" style="color: #28a745; font-size: 14px; margin-top: 10px; display: none; text-align: center;">
                                Message envoyé avec succès!
                            </div>
                            <div id="formError" style="color: #dc3545; font-size: 14px; margin-top: 10px; display: none; text-align: center;">
                                Erreur lors de l'envoi du message.
                            </div>
                        </form>

                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const form = document.getElementById('contactForm');
                            const submitBtn = document.getElementById('submitBtn');
                            const formSuccess = document.getElementById('formSuccess');
                            const formError = document.getElementById('formError');

                            // Validation patterns
                            const patterns = {
                                name: /^[a-zA-ZÀ-ÿ\s]{2,255}$/,
                                email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                subject: /^.{5,255}$/,
                                message: /^.{10,}$/
                            };

                            // Error messages
                            const errorMessages = {
                                name: {
                                    required: 'Le nom est requis',
                                    pattern: 'Le nom doit contenir entre 2 et 255 caractères (lettres et espaces uniquement)'
                                },
                                email: {
                                    required: 'L\'email est requis',
                                    pattern: 'Veuillez entrer un email valide'
                                },
                                subject: {
                                    required: 'Le sujet est requis',
                                    pattern: 'Le sujet doit contenir entre 5 et 255 caractères'
                                },
                                message: {
                                    required: 'Le message est requis',
                                    pattern: 'Le message doit contenir au moins 10 caractères'
                                }
                            };

                            // Real-time validation
                            function validateField(field, pattern, messages) {
                                const errorElement = document.getElementById(field.id + 'Error');
                                const value = field.value.trim();
                                
                                // Reset error
                                errorElement.style.display = 'none';
                                field.style.borderColor = '';

                                // Check if empty
                                if (!value) {
                                    errorElement.textContent = messages.required;
                                    errorElement.style.display = 'block';
                                    field.style.borderColor = '#dc3545';
                                    return false;
                                }

                                // Check pattern
                                if (!pattern.test(value)) {
                                    errorElement.textContent = messages.pattern;
                                    errorElement.style.display = 'block';
                                    field.style.borderColor = '#dc3545';
                                    return false;
                                }

                                return true;
                            }

                            // Add event listeners for real-time validation
                            Object.keys(patterns).forEach(fieldName => {
                                const field = document.getElementById(fieldName);
                                if (field) {
                                    field.addEventListener('blur', function() {
                                        validateField(this, patterns[fieldName], errorMessages[fieldName]);
                                    });
                                    
                                    field.addEventListener('input', function() {
                                        if (this.style.borderColor === 'rgb(220, 53, 69)') {
                                            validateField(this, patterns[fieldName], errorMessages[fieldName]);
                                        }
                                    });
                                }
                            });

                            // Form submission
                            form.addEventListener('submit', function(e) {
                                e.preventDefault();
                                
                                // Hide previous messages
                                formSuccess.style.display = 'none';
                                formError.style.display = 'none';
                                
                                // Validate all fields
                                let isValid = true;
                                Object.keys(patterns).forEach(fieldName => {
                                    const field = document.getElementById(fieldName);
                                    if (!validateField(field, patterns[fieldName], errorMessages[fieldName])) {
                                        isValid = false;
                                    }
                                });

                                if (!isValid) {
                                    formError.textContent = 'Veuillez corriger les erreurs dans le formulaire.';
                                    formError.style.display = 'block';
                                    return;
                                }

                                // Disable submit button
                                submitBtn.disabled = true;
                                submitBtn.textContent = 'Envoi en cours...';

                                // Prepare form data
                                const formData = new FormData(form);
                                formData.append('type', 'contact');

                                // Send AJAX request to Laravel backend
                                fetch('http://localhost:8000/api/contact', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                                        'Accept': 'application/json'
                                    },
                                    body: JSON.stringify({
                                        name: formData.get('name').trim(),
                                        email: formData.get('email').trim(),
                                        subject: formData.get('subject').trim(),
                                        message: formData.get('message').trim(),
                                        type: 'contact'
                                    })
                                })
                                .then(response => {
                                    if (response.status === 413) {
                                        throw new Error('413: La taille de la requête est trop importante. Veuillez réduire la taille de votre message.');
                                    }
                                    if (!response.ok) {
                                        throw new Error(`HTTP error! status: ${response.status}`);
                                    }
                                    return response.json();
                                })
                                .then(data => {
                                    if (data.message) {
                                        // Success
                                        formSuccess.textContent = data.message;
                                        formSuccess.style.display = 'block';
                                        form.reset();
                                        
                                        // Reset all error states
                                        Object.keys(patterns).forEach(fieldName => {
                                            const field = document.getElementById(fieldName);
                                            const errorElement = document.getElementById(fieldName + 'Error');
                                            field.style.borderColor = '';
                                            errorElement.style.display = 'none';
                                        });
                                        
                                        // Hide success message after 5 seconds
                                        setTimeout(() => {
                                            formSuccess.style.display = 'none';
                                        }, 5000);
                                    } else if (data.errors) {
                                        // Validation errors from backend
                                        Object.keys(data.errors).forEach(fieldName => {
                                            const field = document.getElementById(fieldName);
                                            const errorElement = document.getElementById(fieldName + 'Error');
                                            if (field && errorElement) {
                                                errorElement.textContent = data.errors[fieldName][0];
                                                errorElement.style.display = 'block';
                                                field.style.borderColor = '#dc3545';
                                            }
                                        });
                                        
                                        formError.textContent = 'Veuillez corriger les erreurs dans le formulaire.';
                                        formError.style.display = 'block';
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    if (error.message.includes('413')) {
                                        formError.textContent = error.message;
                                    } else {
                                        formError.textContent = 'Erreur lors de l\'envoi du message. Veuillez réessayer ou nous contacter par téléphone.';
                                    }
                                    formError.style.display = 'block';
                                })
                                .finally(() => {
                                    // Re-enable submit button
                                    submitBtn.disabled = false;
                                    submitBtn.textContent = 'ENVOYER';
                                });
                            });
                        });
                        </script>
                    </div>

                </div>
                <div class="bottom"></div>
            </div>
            <!-- /our-menu -->

            <!-- wg-introduction -->
            <!-- <div class="wg-introduction">
                <div class="themesflat-container w1791">
                    <div class="row">
                        <div class="col-12">
                            <div class="wrap">
                                <div class="image wow fadeInLeft">
                                    <div class="swiper-container" data-swiper='{
                                        "spaceBetween": 0,
                                        "slidesPerView": 1,
                                        "observer": true,
                                        "observeParents": true,
                                        "navigation": {
                                            "nextEl": ".introduction-next"
                                        }
                                    }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img w-full" src="assets/images/box-item/introduction-1.jpg"
                                                    alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img w-full" src="assets/images/box-item/introduction-2.jpg"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next introduction-next">
                                            <div class="box">drag</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="heading-section">
                                        <span class="sub sub-before wow fadeInUp">restaurant space</span>
                                        <div class="main wow fadeInUp">
                                            Bring Japanese <br>
                                            atmosphere to your <br>
                                            dining table
                                        </div>
                                    </div>
                                    <p class="wow fadeInUp">With the spirit of bringing the quintessence of Japanese
                                        cuisine to every <br> party, each dish at Sushi World is decorated and presented
                                        in a sophisticated <br> and serious way, bringing beauty and professionalism.
                                    </p>
                                    <ul class="list-text wow fadeInUp">
                                        <li>Japanese style warm space</li>
                                        <li>Immerse yourself in every melody of music and food</li>
                                        <li>Perfect space for private event</li>
                                    </ul>
                                    <a href="#" class="button-style-1 wow fadeInUp">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- /wg-introduction -->



            <!-- wg-counter -->
            <!-- <div class="wg-counter" style="opacity: 0;">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="counter-item">
                                <div class="counter">
                                    <div class="number-counter">
                                        <span class="number" data-speed="2500" data-to="240"
                                            data-inviewport="yes">240</span>
                                    </div>
                                </div>
                                <div class="text">Clients Every Day</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="counter-item">
                                <div class="counter">
                                    <div class="number-counter">
                                        <span class="number" data-speed="2500" data-to="1450"
                                            data-inviewport="yes">1450</span>
                                    </div>
                                </div>
                                <div class="text">order delivered</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="counter-item">
                                <div class="counter">
                                    <div class="number-counter">
                                        <span class="number" data-speed="2500" data-to="12"
                                            data-inviewport="yes">12</span>
                                    </div>
                                </div>
                                <div class="text">hygiene certificate</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="counter-item mb-0">
                                <div class="counter">
                                    <div class="number-counter">
                                        <span class="number" data-speed="2500" data-to="3260"
                                            data-inviewport="yes">3260</span>
                                    </div>
                                </div>
                                <div class="text">happy customer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- /wg-counter -->

            <!-- customer-testimonial -->
            <!-- <div class="customer-testimonial">
                <div class="wg-quote">
                    <img src="assets/images/item-background/icon-1.png" alt="">
                    <div class="icon">"</div>
                </div>
                <div class="themesflat-container full">
                    <div class="row">
                        <div class="col-12">
                            <div class="swiper-container" data-swiper='{
                                "spaceBetween": 0,
                                "slidesPerView": 1,
                                "observer": true,
                                "observeParents": true,
                                "navigation": {
                                    "nextEl": ".customer-testimonial-next",
                                    "prevEl": ".customer-testimonial-prev"
                                }
                            }'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="title wow fadeInUp">Good restaurant, delicious food, classy
                                                atmosphere</div>
                                            <p class=" wow fadeInUp">Thank you very much for all your hard work, the
                                                outstanding meals and fantastic service. The guests at our wedding were
                                                very impressed with you <br> all and many have told us it was the best
                                                food they have had at a wedding in a long time. Jack and I are so
                                                thankful. <br>
                                                All the best for your future endeavours and again.</p>
                                            <div class="rating wow fadeInUp">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <div class="name wow fadeInUp"><a href="#">Margaret - Food critic</a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="title">Good restaurant, delicious food, classy atmosphere</div>
                                            <p>Thank you very much for all your hard work, the outstanding meals and
                                                fantastic service. The guests at our wedding were very impressed with
                                                you <br> all and many have told us it was the best food they have had at
                                                a wedding in a long time. Jack and I are so thankful. <br>
                                                All the best for your future endeavours and again.</p>
                                            <div class="rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <div class="name"><a href="#">Margaret - Food critic</a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="title">Good restaurant, delicious food, classy atmosphere</div>
                                            <p>Thank you very much for all your hard work, the outstanding meals and
                                                fantastic service. The guests at our wedding were very impressed with
                                                you <br> all and many have told us it was the best food they have had at
                                                a wedding in a long time. Jack and I are so thankful. <br>
                                                All the best for your future endeavours and again.</p>
                                            <div class="rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                            <div class="name"><a href="#">Margaret - Food critic</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next style-text black customer-testimonial-next"></div>
                                <div class="swiper-button-prev style-text black customer-testimonial-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- /customer-testimonial -->

            <!-- book-table -->
            <div class="book-table" id="privatisation" style="background-color: #766c65;">
                <!-- <div class="left">
                    <img src="assets/images/box-item/book-table-1.jpg" alt="">
                </div> -->
                <div class="right" style="width: 100%; margin-right: 5%;">

                    <div class="content" style="width: 100%;">
                        <!-- <div class="heading-section style-1">
                            <div class="main wow fadeInUp">Réservations</div>
                        </div>
                        <p class="wow fadeInUp">Réserver, c'est pas compliqué. <br>
                            Un coup de téléphone au 021 323 40 00 pendant les heures d'ouvertures, et on vous réserve
                            une jolie petite place ! <br>
                            On ne prend malheureusement pas de réservations par e-mail ou formulaire pour les groupes de
                            moins de 10.</p> -->
                        <div class="heading-section style-1">
                            <div class="main wow fadeInUp">Salle privée,
                                Sorties d'ENTREPRISE, anniversaires et soirées spéciales…</div>
                        </div>

                        <p class="wow fadeInUp">Si vous souhaitez privatiser une salle dans un restaurant à lausanne, on
                            est là pour vous! Notre petite salle privée est parfaite pour accommoder des groupes jusqu'à
                            16-18 personnes. Elle est disponible du lundi au jeudi est tombera à pic pour vos soirées
                            d'anniversaire, soirées de Noël, sorties de boite et autre événements privés qui s'organise
                            autour d'un bon repas, frais et local.</p>

                        <p class="wow fadeInUp">
                            Pour qu'on puisse traiter vos demandes spéciales et réservations de 10+ uniquement, veuillez
                            utiliser le formulaire si-dessous pour nous contacter :)
                        </p>

                        <form class="comment-form has-icon relative form-1" style="margin-top: 20px;" id="privatisationForm" novalidate>
                            <div class="columns">
                                <fieldset class="name relative">
                                    <input type="text" placeholder="Nom et/ou nom de l'entreprise*" class="style-1"
                                        name="name" id="privatisationName" tabindex="2" value="" aria-required="true" required="">
                                    <div class="error-message" id="privatisationNameError" style="color: #dc3545; font-size: 12px; display: none; margin-bottom: 5px;"></div>
                                </fieldset>
                                <fieldset class="email relative">
                                    <input type="email" placeholder="Votre email*" class="style-1" name="email"
                                        id="privatisationEmail" tabindex="2" value="" aria-required="true" required="">
                                    <div class="error-message" id="privatisationEmailError" style="color: #dc3545; font-size: 12px; display: none; margin-bottom: 5px;"></div>
                                </fieldset>
                            </div>

                            <fieldset class="email relative">
                                <input type="text" placeholder="Sujet*"
                                    class="style-1" name="subject" id="privatisationSubject" tabindex="2" value="" aria-required="true" required="">
                                <div class="error-message" id="privatisationSubjectError" style="color: #dc3545; font-size: 12px; display: none; margin-bottom: 5px;"></div>
                            </fieldset>
                            <fieldset class="textarea relative">
                                <textarea name="message" id="privatisationMessage" placeholder="Message*" class="style-1" cols="30"
                                    rows="10" required></textarea>
                                <div class="error-message" id="privatisationMessageError" style="color: #dc3545; font-size: 12px; display: none; margin-bottom: 5px;"></div>
                            </fieldset>
                            <button class="button-style-1 white" type="submit" id="privatisationSubmitBtn">ENVOYER</button>
                            <div id="privatisationFormSuccess" style="color: #28a745; font-size: 14px; margin-top: 10px; display: none; text-align: center;">
                                Demande de privatisation envoyée avec succès!
                            </div>
                            <div id="privatisationFormError" style="color: #dc3545; font-size: 14px; margin-top: 10px; display: none; text-align: center;">
                                Erreur lors de l'envoi de la demande.
                            </div>
                        </form>

                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const privatisationForm = document.getElementById('privatisationForm');
                            const privatisationSubmitBtn = document.getElementById('privatisationSubmitBtn');
                            const privatisationFormSuccess = document.getElementById('privatisationFormSuccess');
                            const privatisationFormError = document.getElementById('privatisationFormError');

                            // Validation patterns for privatisation form
                            const privatisationPatterns = {
                                privatisationName: /^[a-zA-ZÀ-ÿ\s]{2,255}$/,
                                privatisationEmail: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                privatisationSubject: /^.{5,255}$/,
                                privatisationMessage: /^.{10,}$/
                            };

                            // Error messages for privatisation form
                            const privatisationErrorMessages = {
                                privatisationName: {
                                    required: 'Le nom est requis',
                                    pattern: 'Le nom doit contenir entre 2 et 255 caractères (lettres et espaces uniquement)'
                                },
                                privatisationEmail: {
                                    required: 'L\'email est requis',
                                    pattern: 'Veuillez entrer un email valide'
                                },
                                privatisationSubject: {
                                    required: 'Le sujet est requis',
                                    pattern: 'Le sujet doit contenir entre 5 et 255 caractères'
                                },
                                privatisationMessage: {
                                    required: 'Le message est requis',
                                    pattern: 'Le message doit contenir au moins 10 caractères'
                                }
                            };

                            // Real-time validation for privatisation form
                            function validatePrivatisationField(field, pattern, messages) {
                                const errorElement = document.getElementById(field.id + 'Error');
                                const value = field.value.trim();
                                
                                // Reset error
                                errorElement.style.display = 'none';
                                field.style.borderColor = '';

                                // Check if empty
                                if (!value) {
                                    errorElement.textContent = messages.required;
                                    errorElement.style.display = 'block';
                                    field.style.borderColor = '#dc3545';
                                    return false;
                                }

                                // Check pattern
                                if (!pattern.test(value)) {
                                    errorElement.textContent = messages.pattern;
                                    errorElement.style.display = 'block';
                                    field.style.borderColor = '#dc3545';
                                    return false;
                                }

                                return true;
                            }

                            // Add event listeners for real-time validation (privatisation form)
                            Object.keys(privatisationPatterns).forEach(fieldName => {
                                const field = document.getElementById(fieldName);
                                if (field) {
                                    field.addEventListener('blur', function() {
                                        validatePrivatisationField(this, privatisationPatterns[fieldName], privatisationErrorMessages[fieldName]);
                                    });
                                    
                                    field.addEventListener('input', function() {
                                        if (this.style.borderColor === 'rgb(220, 53, 69)') {
                                            validatePrivatisationField(this, privatisationPatterns[fieldName], privatisationErrorMessages[fieldName]);
                                        }
                                    });
                                }
                            });

                            // Privatisation form submission
                            privatisationForm.addEventListener('submit', function(e) {
                                e.preventDefault();
                                
                                // Hide previous messages
                                privatisationFormSuccess.style.display = 'none';
                                privatisationFormError.style.display = 'none';
                                
                                // Validate all fields
                                let isValid = true;
                                Object.keys(privatisationPatterns).forEach(fieldName => {
                                    const field = document.getElementById(fieldName);
                                    if (!validatePrivatisationField(field, privatisationPatterns[fieldName], privatisationErrorMessages[fieldName])) {
                                        isValid = false;
                                    }
                                });

                                if (!isValid) {
                                    privatisationFormError.textContent = 'Veuillez corriger les erreurs dans le formulaire.';
                                    privatisationFormError.style.display = 'block';
                                    return;
                                }

                                // Disable submit button
                                privatisationSubmitBtn.disabled = true;
                                privatisationSubmitBtn.textContent = 'Envoi en cours...';

                                // Prepare form data
                                const formData = new FormData(privatisationForm);

                                // Send AJAX request to Laravel backend
                                fetch('http://localhost:8000/api/privatisation', {
                                    method: 'POST',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
                                        'Accept': 'application/json'
                                    },
                                    body: JSON.stringify({
                                        name: formData.get('name').trim(),
                                        email: formData.get('email').trim(),
                                        subject: formData.get('subject').trim(),
                                        message: formData.get('message').trim()
                                    })
                                })
                                .then(response => {
                                    if (response.status === 413) {
                                        throw new Error('413: La taille de la requête est trop importante. Veuillez réduire la taille de votre message.');
                                    }
                                    if (!response.ok) {
                                        throw new Error(`HTTP error! status: ${response.status}`);
                                    }
                                    return response.json();
                                })
                                .then(data => {
                                    if (data.message) {
                                        // Success
                                        privatisationFormSuccess.textContent = data.message;
                                        privatisationFormSuccess.style.display = 'block';
                                        privatisationForm.reset();
                                        
                                        // Reset all error states
                                        Object.keys(privatisationPatterns).forEach(fieldName => {
                                            const field = document.getElementById(fieldName);
                                            const errorElement = document.getElementById(fieldName + 'Error');
                                            field.style.borderColor = '';
                                            errorElement.style.display = 'none';
                                        });
                                        
                                        // Hide success message after 5 seconds
                                        setTimeout(() => {
                                            privatisationFormSuccess.style.display = 'none';
                                        }, 5000);
                                    } else if (data.errors) {
                                        // Validation errors from backend
                                        Object.keys(data.errors).forEach(fieldName => {
                                            const field = document.getElementById('privatisation' + fieldName.charAt(0).toUpperCase() + fieldName.slice(1));
                                            const errorElement = document.getElementById('privatisation' + fieldName.charAt(0).toUpperCase() + fieldName.slice(1) + 'Error');
                                            if (field && errorElement) {
                                                errorElement.textContent = data.errors[fieldName][0];
                                                errorElement.style.display = 'block';
                                                field.style.borderColor = '#dc3545';
                                            }
                                        });
                                        
                                        privatisationFormError.textContent = 'Veuillez corriger les erreurs dans le formulaire.';
                                        privatisationFormError.style.display = 'block';
                                    }
                                })
                                .catch(error => {
                                    console.error('Error:', error);
                                    if (error.message.includes('413')) {
                                        privatisationFormError.textContent = error.message;
                                    } else {
                                        privatisationFormError.textContent = 'Erreur lors de l\'envoi de la demande. Veuillez réessayer ou nous contacter par téléphone.';
                                    }
                                    privatisationFormError.style.display = 'block';
                                })
                                .finally(() => {
                                    // Re-enable submit button
                                    privatisationSubmitBtn.disabled = false;
                                    privatisationSubmitBtn.textContent = 'ENVOYER';
                                });
                            });
                        });
                        </script>
                    </div>



                    <!-- <div class="wg-map relative">
                        <div id="map"></div>
                    </div>
                    <div class="images">
                        <img class="item-1" src="assets/images/box-item/book-table-2.png" alt="">
                        <img class="item-2" src="assets/images/item-background/text-1.png" alt="">
                        <div class="text-special">寿 司 の 味 を 体 験</div>
                    </div> -->
                </div>
            </div>
            <!-- /book-table -->

            <!-- wg-news -->
            <!-- <div class="wg-news">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="wrap">
                                <div class="item-1">
                                    <img src="assets/images/item-background/icon-2.png" alt="">
                                </div>
                                <div class="heading-section">
                                    <span class="sub sub-before wow fadeInUp">Offers & Latest new</span>
                                    <div class="main wow fadeInUp">breaking news at our blog</div>
                                </div>
                                <p>Ut vehicula fringilla erat, eget vehicula enim suscipit at. Proin id iaculis nulla.
                                    Vivamus quis ipsum <br> dui. Nam ullamcorper ante id cursus efficitur.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wg-blog wow fadeInUp">
                                <div class="date">
                                    <div class="day">12</div>
                                    <div class="month">mar</div>
                                </div>
                                <div class="image">
                                    <img src="assets/images/blog/blog-1.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="meta">
                                        <span>By Basilico</span>
                                        <span>Food</span>
                                    </div>
                                    <div class="title"><a href="blog-single.html">15 matcha recipes you must try at
                                            home</a></div>
                                    <div class="text">Lorem ipsum dolor sit amet, an bonorum partiendo sit. Ne alia
                                        graecis sit, duo natum errem ne, minim tollit nonumy eos at, quot...</div>
                                    <div class="bottom">
                                        <a class="button-default" href="blog-single.html">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wg-blog wow fadeInUp" data-wow-delay="0.1s">
                                <div class="date">
                                    <div class="day">12</div>
                                    <div class="month">mar</div>
                                </div>
                                <div class="image">
                                    <img src="assets/images/blog/blog-6.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="meta">
                                        <span>By Basilico</span>
                                        <span>Food</span>
                                    </div>
                                    <div class="title"><a href="blog-single.html">Japanese Grocery Stores around the
                                            World</a></div>
                                    <div class="text">Lorem ipsum dolor sit amet, an bonorum partiendo sit. Ne alia
                                        graecis sit, duo natum errem ne, minim tollit nonumy eos at, quot...</div>
                                    <div class="bottom">
                                        <a class="button-default" href="blog-single.html">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="wg-blog wow fadeInUp" data-wow-delay="0.2s">
                                <div class="date">
                                    <div class="day">12</div>
                                    <div class="month">mar</div>
                                </div>
                                <div class="image">
                                    <img src="assets/images/blog/blog-3.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="meta">
                                        <span>By Basilico</span>
                                        <span>Food</span>
                                    </div>
                                    <div class="title"><a href="blog-single.html">Ingredient Substitutions for Japanese
                                            Cooking</a></div>
                                    <div class="text">Lorem ipsum dolor sit amet, an bonorum partiendo sit. Ne alia
                                        graecis sit, duo natum errem ne, minim tollit nonumy eos at, quot...</div>
                                    <div class="bottom">
                                        <a class="button-default" href="blog-single.html">READ MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <a href="blog.html" class="button-style-1 m-auto">VIEW ALL THE BLOG</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- /wg-news -->

            <!-- wg-portfolio -->
            <!-- <div class="wg-portfolio">

                <div class="swiper-container" data-swiper='{
                    "spaceBetween": 30,
                    "slidesPerView": 1,
                    "observer": true,
                    "observeParents": true,
                    "pagination": {
                        "el": ".portfolio-pagination",
                        "clickable": true
                    },
                    "breakpoints": {
                        "768": {
                            "slidesPerView": 2,
                            "spaceBetween": 30
                        },
                        "1024": {
                            "slidesPerView": 3,
                            "spaceBetween": 30
                        },
                        "1440": {
                            "slidesPerView": 4,
                            "spaceBetween": 30
                        }
                    }
                }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="portfolio-item wow fadeInUp">
                                <div class="image">
                                    <img src="assets/images/box-item/portfolio-1.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="text-special m-auto">ゆ る</div>
                                    <div class="name"><a href="#">ramen noodles</a></div>
                                    <p>Lorem ipsum dolor sit amet, an bonorum partiendo sit. Ne alia graecis sit, duo
                                        natum errem ne, minim tollit.</p>
                                    <a href="#" class="button-default black white wow fadeInUp">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="image">
                                    <img src="assets/images/box-item/portfolio-2.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="text-special m-auto">ゆ る</div>
                                    <div class="name"><a href="#">ramen noodles</a></div>
                                    <p>Lorem ipsum dolor sit amet, an bonorum partiendo sit. Ne alia graecis sit, duo
                                        natum errem ne, minim tollit.</p>
                                    <a href="#" class="button-default black white wow fadeInUp">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="image">
                                    <img src="assets/images/box-item/portfolio-3.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="text-special m-auto">ゆ る</div>
                                    <div class="name"><a href="#">ramen noodles</a></div>
                                    <p>Lorem ipsum dolor sit amet, an bonorum partiendo sit. Ne alia graecis sit, duo
                                        natum errem ne, minim tollit.</p>
                                    <a href="#" class="button-default black white wow fadeInUp">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="image">
                                    <img src="assets/images/box-item/portfolio-4.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="text-special m-auto">ゆ る</div>
                                    <div class="name"><a href="#">ramen noodles</a></div>
                                    <p>Lorem ipsum dolor sit amet, an bonorum partiendo sit. Ne alia graecis sit, duo
                                        natum errem ne, minim tollit.</p>
                                    <a href="#" class="button-default black white wow fadeInUp">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-item">
                                <div class="image">
                                    <img src="assets/images/box-item/portfolio-5.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="text-special m-auto">ゆ る</div>
                                    <div class="name"><a href="#">ramen noodles</a></div>
                                    <p>Lorem ipsum dolor sit amet, an bonorum partiendo sit. Ne alia graecis sit, duo
                                        natum errem ne, minim tollit.</p>
                                    <a href="#" class="button-default black white wow fadeInUp">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-item">
                                <div class="image">
                                    <img src="assets/images/box-item/portfolio-6.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="text-special m-auto">ゆ る</div>
                                    <div class="name"><a href="#">ramen noodles</a></div>
                                    <p>Lorem ipsum dolor sit amet, an bonorum partiendo sit. Ne alia graecis sit, duo
                                        natum errem ne, minim tollit.</p>
                                    <a href="#" class="button-default black white wow fadeInUp">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination portfolio-pagination style-black"></div>
                </div>
            </div> -->
            <!-- /wg-portfolio -->

            <?php include 'footerbody.php'; ?>
        </div>
        <!-- /#page -->
    </div>
    <?php include 'footer.php'; ?>