<?php
include_once "layout/header.php";
require_once "layout/navbar_index.php";
//include_once "layout/loading.php";
?>

<div id="content">


  <div id="top-categorie">
    <div id="video-container">
      <video autoplay muted loop id="my-video">
        <source src="video/REYNA.mp4" type="video/mp4">
      </video>
    </div>
    <div class="inner">
      <h1>Restaurant Reyna</h1>
      <h2>SteakHouse turc/oriental - Lyon</h2>
    </div>
    <div id="view-menu">
      <a class="scroll-animation" href="#menu">
        <h4>Voir la carte</h4>
        <svg class="button-arrow" xmlns="http://www.w3.org/2000/svg" width="22.414" height="43.388" viewBox="0 0 22.414 43.388">
          <path id="Tracé_19" data-name="Tracé 19" d="M3051,612v32.681h-10l10,10,10-10h-10" transform="translate(-3039.793 -612)" fill="none" stroke="#fff" stroke-width="1" />
        </svg>
      </a>
    </div>
  </div>


  <div id="categories">
    <div id="meat">
      <div class="categorie" id="meat-start">
        <div id="meat-content">
          <h2>Nos viandes</h2>
          <div id="meat-woods-fire">
            <img src="img/owen.png" alt="owen four chemine" />
            <h3>Cuites au feu de bois</h3>
          </div>
          <div id="meat-100">
            <div>
              <img src="img/french" alt="100% origine france" />
              <h3>100% Origine France</h3>
            </div>
            <div>
              <svg id="halal-sign" xmlns="http://www.w3.org/2000/svg" width="193.759" height="193.759" viewBox="0 0 193.759 193.759">
                <path id="Tracé_26" data-name="Tracé 26" d="M192.09,92.85,167.052,67.813V32.4a5.7,5.7,0,0,0-5.7-5.7H125.945L100.909,1.669a5.7,5.7,0,0,0-8.06,0L67.813,26.707H32.4a5.7,5.7,0,0,0-5.7,5.7V67.813L1.669,92.85a5.7,5.7,0,0,0,0,8.06l25.036,25.037v35.408a5.7,5.7,0,0,0,5.7,5.7H67.814L92.85,192.09a5.7,5.7,0,0,0,8.059,0l25.036-25.038h35.408a5.7,5.7,0,0,0,5.7-5.7V125.946l25.038-25.037a5.7,5.7,0,0,0,0-8.06Zm-34.766,26.706a5.7,5.7,0,0,0-1.669,4.03v32.069h-32.07a5.7,5.7,0,0,0-4.03,1.669L96.879,180,74.2,157.324a5.7,5.7,0,0,0-4.03-1.669H38.1V123.585a5.7,5.7,0,0,0-1.669-4.03L13.758,96.879,36.434,74.2a5.7,5.7,0,0,0,1.669-4.03V38.1H70.174a5.7,5.7,0,0,0,4.03-1.669L96.879,13.759l22.675,22.677a5.7,5.7,0,0,0,4.03,1.669h32.07V70.174a5.7,5.7,0,0,0,1.669,4.03L180,96.879Z" transform="translate(0)" fill="#bf9c63" />
                <path id="Tracé_27" data-name="Tracé 27" d="M120.69,108.177a.579.579,0,0,0,.5-.794l-3.717-9.25a.58.58,0,0,0-.885-.248c-.575.431-1.229.848-1.921,1.289a15.987,15.987,0,0,0-4,3.167.577.577,0,0,0-.065.618c3.134,6.332,1.937,16.258.976,24.234-.223,1.852-.433,3.6-.576,5.183-.508,5.655-5.154,8.186-9.533,8.186-3.17,0-5.931-1.347-7.206-3.516-1.364-2.32-1.047-5.416.919-8.95a.577.577,0,0,0-.044-.631.647.647,0,0,0-.521-.257c-1.351,0-6.879,8.044-7.166,14.067-.155,3.255,1.118,7.274,8.063,7.937.616.059,1.266.089,1.934.089,6.731,0,17.725-3.263,18.559-12.017.122-1.283.187-3.365.262-5.777C116.507,124.007,116.994,108.4,120.69,108.177Z" transform="translate(-39.896 -42.381)" fill="#bf9c63" />
                <path id="Tracé_28" data-name="Tracé 28" d="M211.441,135.38a14.2,14.2,0,0,1-8.085-3.789c-.908-.805-1.834-1.666-2.73-2.5a58.247,58.247,0,0,0-8.068-6.647,4,4,0,0,0-2.185-.629c-4,0-8.22,5.167-8.651,8.29a2.363,2.363,0,0,0,1.669,2.89.584.584,0,0,0,.625-.215c1.272-1.732,2.5-2.575,3.742-2.575,1.738,0,3.572,1.615,5.515,3.326.807.71,1.632,1.436,2.5,2.105a69.839,69.839,0,0,1-8.246.557c-4.635,0-10.223-.693-10.516-4-.542-6.072.54-12.534,1.584-18.784.551-3.292,1.12-6.7,1.433-9.959a.58.58,0,0,0-.879-.55c-5.854,3.57-7.9,8.9-10.062,14.544a46,46,0,0,1-5.748,11.508c-1.609-11.3-5.906-19.894-13.111-26.244a.58.58,0,0,0-.95.311c-.228,1.039-.506,2.075-.776,3.077-1.386,5.142-2.7,10,3.371,13.652a.579.579,0,0,0,.876-.442l.065-.7a35.931,35.931,0,0,1,6.318,14.769,34.1,34.1,0,0,1-6.254,3.854c-2.873,1.513-5.842,3.078-7.44,5.037a.58.58,0,0,0,.018.753c2.178,2.436,4.546,3.672,7.035,3.672,8.639,0,16.371-14.669,19.9-22.553-.017.11-.034.219-.051.327-1.326,8.535-2.7,17.36,7.8,20.122a.538.538,0,0,0,.122.019c.951.041,2,.061,3.108.061h0c4.217,0,25.393-.411,28.531-8.516a.577.577,0,0,0-.468-.782Z" transform="translate(-65.319 -44.398)" fill="#bf9c63" />
                <path id="Tracé_29" data-name="Tracé 29" d="M121.31,201.819h-5.287v-7.265h-3.772v18.162h3.772v-7.637h5.287v7.637h3.772V194.554H121.31Z" transform="translate(-50.47 -83.869)" fill="#bf9c63" />
                <path id="Tracé_30" data-name="Tracé 30" d="M141.756,194.474l-4.541,18.209h4.051l.862-3.912h4.447l.885,3.912h4.028l-4.54-18.209Zm1.094,11.037,1.49-6.683,1.49,6.683Z" transform="translate(-61.234 -83.835)" fill="#bf9c63" />
                <path id="Tracé_31" data-name="Tracé 31" d="M168.442,194.554H164.67v18.162h10.478v-3.259h-6.707Z" transform="translate(-73.029 -83.869)" fill="#bf9c63" />
                <path id="Tracé_32" data-name="Tracé 32" d="M188.465,194.474l-4.541,18.209h4.052l.861-3.912h4.448l.885,3.912H198.2l-4.541-18.209Zm1.094,11.037,1.49-6.683,1.49,6.683Z" transform="translate(-81.359 -83.835)" fill="#bf9c63" />
                <path id="Tracé_33" data-name="Tracé 33" d="M215.152,194.554h-3.773v18.162h10.478v-3.259h-6.705Z" transform="translate(-93.145 -83.869)" fill="#bf9c63" />
              </svg>
              <h3>100% Halal</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="categorie meat-desc">
        <div class="pres-meat">
          <div class="meat-img">
            <img id="meat-cote_de_boeuf" src="img/cote-de-boeuf.png" alt="cote de bœuf viande" />
          </div>
          <div class="meat-txt">
            <h3>Côte de bœuf</h3>
            <p>Morceau sélectionné à l'intention de la qualité. Pièce qui se laisse préparer en grillade ou braisée à l'intérieur d'un plat mijoté. Ses qualités bouchères vous laisseront ébahi.</p>
          </div>
        </div>
      </div>

      <div class="categorie meat-desc">
        <div class="pres-meat reverse">
          <div class="meat-img">
            <img id="meat-t_bone" src="img/t-bone.png" alt="t-bone viande" />
          </div>
          <div class="meat-txt">
            <h3>T-Bone</h3>
            <p>Morceau mythique de bœuf issu de la race Angus. Cette pièce tendre et sublimée du goüt incomparable que donnera l'os à la cuisson vous laissera une expérience unique sur vos papilles.</p>
          </div>
        </div>
      </div>

      <div class="categorie meat-desc">
        <div class="pres-meat">
          <div class="meat-img">
            <img id="meat-entrecote" src="img/entrecote.png" alt="entrecote viande" />
          </div>
          <div class="meat-txt">
            <h3>Entrecôte</h3>
            <p>Issue de la côte de bœuf et plus précisément au niveau de la septième côte, cette pièce bouchère saura vous offrir une dégustation fondante et goûteuse.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="menu">
      <div class="categorie-double" id="menu-container">
        <div id="menu-title">
          <svg id="forks" xmlns="http://www.w3.org/2000/svg" width="85" height="85" viewBox="0 0 85 85">
            <g id="Groupe_49" data-name="Groupe 49">
              <path id="Tracé_22" data-name="Tracé 22" d="M65.848,29.813A36.016,36.016,0,0,0,51.479,98.856l.469-9.093c0-7.234-5.347-4.916-5.347-9.977,0-2.836.089-8.746.089-13.183,0-11.824,5.021-23.261,6.254-25.813s4.159-5.331,4.191-2.654c0,3.884.166,49.051.166,49.051h-.008l.553,13.741a35.852,35.852,0,0,0,8,.926,36.239,36.239,0,0,0,4.447-.3l1.191-23.089A11.563,11.563,0,0,1,64.465,73.6c-1.949-2.92,1.5-28.734,1.5-28.734h2.245V69.091h2.226V44.864h2.432V69.091h2.219V44.864H77.61V69.091h2.224V44.864h1.72S85,70.679,83.051,73.6a11.613,11.613,0,0,1-6.945,4.854.953.953,0,0,0-.1.037l1.126,21.538A36.012,36.012,0,0,0,65.848,29.813Z" transform="translate(-23.345 -23.335)" />
              <path id="Tracé_23" data-name="Tracé 23" d="M42.5,0A42.5,42.5,0,1,0,85,42.5,42.552,42.552,0,0,0,42.5,0Zm0,81.83A39.332,39.332,0,1,1,81.836,42.5,39.378,39.378,0,0,1,42.5,81.83Z" />
            </g>
          </svg>
          <h2>La carte</h2>
        </div>
        <!-- <a id="menu-dl" href="img/menu.png" download="menu_reyna.png">Télécharger la carte</a>
        <a href="img/menu.png"><img id="menu-img" src="img/menu.png" alt="menu reyna" /></a>
      </div> -->
        <a id="menu-dl" href="https://drive.google.com/u/0/uc?id=1qPr6-OmODwyNBey7b4nXQG-C_IbncS4U&export=download">Télécharger la carte</a>
        <a href="https://drive.google.com/file/d/1qPr6-OmODwyNBey7b4nXQG-C_IbncS4U"><img id="menu-img" src="https://drive.google.com/uc?id=1qPr6-OmODwyNBey7b4nXQG-C_IbncS4U" alt="menu reyna" /></a>
      </div>
    </div>


    <div id="resto">
      <div class="categorie-full-width" id="resto-container">
        <h2>Restaurant</h2>
        <div id="resto-content">
          <div class="resto-value" id="prestige">
            <img src="img/prestige.png" alt="viande or" />
            <h3>Prestige</h3>
            <p>Notre attention est portée sur chaque détail dans le but de vous apporter sérénité et savoir-faire.</p>
          </div>
          <div class="resto-value" id="qualite">
            <img src="img/qualite.png" alt="viande qualite" />
            <h3>Qualité</h3>
            <p>Attentifs à la température de la viande dans toutes ses étapes de préparation, nous vous offrons le meilleur.</p>
          </div>
          <div class="resto-value" id="familial">
            <img src="img/familial.png" alt="ambiance familiale" />
            <h3>Familial</h3>
            <p>Chez Reyna, nous vous proposons un cadre de partage et de convivialité autour d'une table.</p>
          </div>
        </div>
      </div>
      <div class="categorie-full-width" id="resto-about">
        <div id="resto-about-content">
          <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=fr&amp;q=145%20Rue%20Marius%20Berliet,%2069008%20Lyon+(Restaurant%20Reyna)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0"></iframe>
          <div id="hours">
            <svg id="hours-picto" xmlns="http://www.w3.org/2000/svg" width="85.04" height="85" viewBox="0 0 85.04 85">
              <g id="Groupe_52" data-name="Groupe 52">
                <g id="Groupe_51" data-name="Groupe 51">
                  <path id="Tracé_24" data-name="Tracé 24" d="M42.52,0A42.5,42.5,0,1,0,85.04,42.5,42.486,42.486,0,0,0,42.52,0Zm0,79.333A36.833,36.833,0,1,1,79.371,42.5,36.884,36.884,0,0,1,42.52,79.333Z" fill="#fff" />
                </g>
              </g>
              <g id="Groupe_54" data-name="Groupe 54" transform="translate(36.353 23.035)">
                <g id="Groupe_53" data-name="Groupe 53">
                  <path id="Tracé_25" data-name="Tracé 25" d="M233.784,157.383H224.52V141.6a2.834,2.834,0,0,0-5.668,0v18.618a2.834,2.834,0,0,0,2.834,2.834h12.1a2.834,2.834,0,0,0,0-5.668Z" transform="translate(-218.852 -138.765)" fill="#fff" />
                </g>
              </g>
            </svg>
            <div id="hours-content">
              <h4>Lundi………………..17h30-21h30</h4>
              <h4>Mardi.……………....17h30-21h30</h4>
              <h4>Mercredi...……....17h30-21h30</h4>
              <h4>Jeudi.….…………....17h30-21h30</h4>
              <h4>Vendredi.….….....17h30-21h30</h4>
              <h4>Samedi.…….……..17h30-22h00</h4>
              <h4>Dimanche.…......17h30-21h30</h4>
            </div>
            <div id="tel">
              <a href="tel:+33478754359">
                <svg id="tel-picto" xmlns="http://www.w3.org/2000/svg" width="63.774" height="65" viewBox="0 0 63.774 65">
                  <g transform="translate(-0.912)">
                    <path id="Tracé_208" data-name="Tracé 208" d="M13.835,43.208a68.076,68.076,0,0,0,22.59,17.967,34.768,34.768,0,0,0,12.641,3.8c.305.013.6.027.9.027a10.4,10.4,0,0,0,8.118-3.542.293.293,0,0,0,.053-.067A34.474,34.474,0,0,1,60.7,58.7c.623-.606,1.26-1.239,1.87-1.886,2.825-2.99,2.825-6.788-.027-9.684l-7.972-8.095A6.411,6.411,0,0,0,49.9,36.85a6.625,6.625,0,0,0-4.722,2.168l-4.749,4.822c-.438-.256-.889-.485-1.313-.7a16.327,16.327,0,0,1-1.459-.808,50.54,50.54,0,0,1-12-11.1A29.462,29.462,0,0,1,21.6,24.661c1.247-1.145,2.414-2.344,3.542-3.515.4-.418.809-.835,1.22-1.253a6.952,6.952,0,0,0,2.2-4.849,6.9,6.9,0,0,0-2.2-4.849L22.4,6.182c-.464-.471-.9-.929-1.353-1.4-.875-.916-1.791-1.859-2.693-2.707A6.566,6.566,0,0,0,13.689,0,6.759,6.759,0,0,0,8.967,2.088L4.006,7.125A10.418,10.418,0,0,0,.968,13.752,25.27,25.27,0,0,0,2.812,24.527,62.893,62.893,0,0,0,13.835,43.208ZM4.2,14.034A7.171,7.171,0,0,1,6.314,9.455l4.935-5.01A3.548,3.548,0,0,1,13.689,3.3a3.369,3.369,0,0,1,2.388,1.172c.889.835,1.724,1.711,2.626,2.64.451.471.915.943,1.38,1.428l3.953,4.014a3.679,3.679,0,0,1,1.247,2.519,3.679,3.679,0,0,1-1.247,2.519c-.411.418-.822.849-1.234,1.266-1.234,1.266-2.388,2.465-3.661,3.61l-.066.067a2.662,2.662,0,0,0-.663,2.99c.013.04.027.067.04.108a31.791,31.791,0,0,0,4.656,7.691A53.342,53.342,0,0,0,35.895,45.147a18.9,18.9,0,0,0,1.751.97,16.328,16.328,0,0,1,1.459.808c.053.027.093.054.146.081a2.74,2.74,0,0,0,1.287.337,2.8,2.8,0,0,0,1.976-.916l4.961-5.037a3.489,3.489,0,0,1,2.427-1.2,3.315,3.315,0,0,1,2.348,1.2l8,8.108c1.592,1.616,1.579,3.367-.04,5.078-.557.606-1.141,1.185-1.764,1.791a38.532,38.532,0,0,0-2.772,2.923,7.231,7.231,0,0,1-5.691,2.451c-.226,0-.464-.013-.69-.027a31.588,31.588,0,0,1-11.434-3.475,64.672,64.672,0,0,1-21.5-17.105A60.2,60.2,0,0,1,5.876,23.422,22.02,22.02,0,0,1,4.2,14.034Z" transform="translate(0 0)" fill="#fff" />
                  </g>
                </svg>
              </a>
              <a href="tel:+33478754359">
                <h4 id="tel-num">04 78 75 43 59</h4>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div id="event">
      <div class="categorie" id="event-container">
        <div id="event-title-container">
          <div id="event-title">
            <h2>Offrez-vous ce privilège</h2>
            <h4>Un show exclusivement pour vous</h4>
          </div>
        </div>

        <div id="event-content-container">
          <div id="event-content">
            <div class="fb-embed-container">
              <iframe class="fb-embed" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FReyna69008%2Fvideos%2F707859833224652%2F&width=500&show_text=false&height=282&appId" width="500" height="282" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            </div>
            <div class="event-text-container">
              <p>Pourquoi attendre son plat lorsque la cuisine peut venir à vous ?</p>
            </div>
          </div>
        </div>

        <div id="view-clients-container">
          <div id="view-clients">
            <a class="scroll-animation" href="#clients">
              <h4>Nos clients fidèles</h4>
              <svg class="button-arrow" xmlns="http://www.w3.org/2000/svg" width="22.414" height="43.388" viewBox="0 0 22.414 43.388">
                <path id="Tracé_212" data-name="Tracé 212" d="M3051,612v32.681h-10l10,10,10-10h-10" transform="translate(-3039.793 -612)" fill="none" stroke="#000" stroke-width="1" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>


    <div id="clients" class="categorie">
      <div id="clients-container">
        <div class="client-content">
          <iframe class="ig-embed" width="343" height="343" src="https://www.instagram.com/p/CDjLNcQoG-a/embed" frameborder="0"></iframe>
          <a href="https://www.instagram.com/lacazettealex/">@lacazettealex</a>
        </div>

        <div class="client-content">
          <iframe class="ig-embed" width="343" height="343" src="https://www.instagram.com/p/CBjP1uSou01/embed" frameborder="0"></iframe>
          <a href="https://www.instagram.com/mdembele_10/">@mdembele_10</a>
        </div>

        <div class="client-content">
          <iframe class="ig-embed" width="343" height="343" src="https://www.instagram.com/p/CDujLLzI9EI/embed" frameborder="0"></iframe>
          <a href="https://www.instagram.com/jason_denayer/">@jason_denayer</a>
        </div>
      </div>
    </div>


  </div>

</div>

<?php
include_once "layout/footer.php";
?>