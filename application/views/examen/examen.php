<!doctype html>

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <meta http-equiv="Content-Language" content="fr" />
   <meta name="robots" content="noindex,nofollow,nosnippet,noodp,noarchive" />
   <link rel="icon" type="image/svg" href="<?= _URL_IMG_ . 'seas.svg'; ?>" />
   <title>ENS S.E.A.S - EXAMEN EN LIGNE</title>
   <link href="<?= _URL_CSS_ . 'app.min.css'; ?>" rel="stylesheet" />
   <link href="<?= _URL_CSS_ . 'app-vendors.min.css'; ?>" rel="stylesheet" />
   <link href="<?= _URL_CSS_ . 'style.css?' . date('d'); ?>" rel="stylesheet" />

   <script script>
      const base_url = "<?= _BASE_URL_; ?>";
   </script>
   <script type="text/javascript" src="<?= _URL_JS_ . "jquery.js"; ?>"></script>
   <style>
      @import url('https://rsms.me/inter/inter.css');

      :root {
         --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif
      }

      body {
         font-feature-settings: "cv03", "cv04", "cv11"
      }
   </style>
</head>

<body class="d-flex flex-column">
   <div class="page page-center">
      <div class="container py-4">
         <div class="col-12">
            <div class="card card-lg">
               <div class="card-body">
                  <h1 class="mb-0 text-center text-primary">Examen - Initiation à l'ingénierie de formation</h1>
                  <p class="mb-4 text-center fw-bold text-danger">Une seule tentative est autorisée par matricule.</p>
                  <div id="timer" class="alert alert-info fw-bold text-center mb-3 ">
                     Initialisation du compte à rebours...
                  </div>
                  <form id="studentForm" class="mb-4">
                     <div class="mb-3">
                        <label for="formNames" class="form-label">Nom :</label>
                        <input type="text" class="form-control" id="formNames" required>
                     </div>
                     <div class="mb-3">
                        <label for="formFirst" class="form-label">Prénoms :</label>
                        <input type="text" class="form-control" id="formFirst" required>
                     </div>
                     <div class="mb-3">
                        <label for="formRegist" class="form-label">Numéro matricule :</label>
                        <input type="text" class="form-control" id="formRegist" required>
                     </div>
                     <div class="mb-3">
                        <label for="formCourse" class="form-label">Parcours :</label>
                        <select class="form-select" id="formCourse" required>
                           <option value=""></option>
                           <option value="LEFA">LEFA</option>
                           <option value="LALS">LALS</option>
                        </select>
                     </div>
                  </form>
                  <hr>
                  <div id="quiz"></div>
                  <button id="submit" class="btn btn-primary mt-4">Envoyer mes réponses</button>
                  <p id="score" class="mt-4 fw-bold"></p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script src="<?= _URL_JS_ . 'seas_examen.js?' . date('d') . ''; ?>"></script>
</body>

</html>