<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <div>
                <img src="#" alt="le logo de social Falafel" />
                <nav>
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Explorer</a></li>
                        <li><a href="#">Notifications</a></li>
                        <li><a href="#">Messages</a></li>
                    </ul>
                </nav>
            </div>
            <div>
                <div class="container_search">
                    <span><img src="#" alt="" /></span>
                    <input
                        type="text"
                        placeholder="Rechercher"
                        class="search-input"
                    />
                </div>
                <img src="#" alt="ma photo de profil" />
            </div>
        </header>
        <main>
            <div class="explorer">
                <div class="container_aside">
                    <div class="profil-user">
                        <img src="#" alt="img de profil" />
                        <p>prénom</p>
                        <p>Nom</p>
                    </div>
                    <div class="wrapper_links">
                        <div class="container-link">
                            <img src="#" alt="pictogramme" />
                            <p>Accueil</p>
                        </div>
                        <div class="container-link">
                            <img src="#" alt="pictogramme" />
                            <p>Explorer</p>
                        </div>
                        <div class="container-link">
                            <img src="#" alt="pictogramme" />
                            <p>Notifs</p>
                        </div>
                        <div class="container-link">
                            <img src="#" alt="pictogramme" />
                            <p>Messsssages</p>
                        </div>
                        <div class="container-link">
                            <img src="#" alt="pictogramme" />
                            <p>Profil</p>
                        </div>
                    </div>
                </div>
                <!-- img here ? -->
                <button>publier</button>
            </div>
            <div class="container_context_page">
                <h1>Accueil</h1>
                <div class="container_add_comments">
                    <!-- ici les commentaires -->
                </div>
                <div class="post_container">
                    <h3>Pour vous</h3>
                    <div class="wrapper-comments">
                        <img src="#" alt="image de profil" />
                        <div class="container_post">
                            <div>
                                <p>Prenom</p>
                                <p>Nom</p>
                                <p>.. H</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Eius vero enim eligendi veniam
                                delectus, nihil nobis molestias alias ipsam
                                dolore inventore explicabo consequatur, repellat
                                soluta exercitationem dolores quod voluptatum
                                eaque?
                            </p>
                            <img
                                src="#"
                                alt="ici c'est l'image trop cool de mon post"
                            />
                            <div class="picto_post_container">
                                <div>
                                    <img src="#" alt="#" />
                                    <p>25</p>
                                </div>
                                <div>
                                    <img src="#" alt="#" />
                                    <p>25</p>
                                </div>
                                <div>
                                    <img src="#" alt="#" />
                                    <p>25</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
