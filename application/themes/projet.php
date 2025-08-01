<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>ENS SEAS - <?=$titre; ?></title>
  <link rel="icon" href="<?=_BASE_URL_ . 'public/img/seas.svg'; ?>" />
  <link href="<?=_URL_CSS_ . 'app.min.css'; ?>" rel="stylesheet" />
  <link href="<?=_URL_CSS_ . 'app-flags.min.css'; ?>" rel="stylesheet" />
  <link href="<?=_URL_CSS_ . 'app-payments.min.css'; ?>" rel="stylesheet" />
  <link href="<?=_URL_CSS_ . 'app-vendors.min.css'; ?>" rel="stylesheet" />
  <link href="<?=_URL_CSS_ . 'style.min.css'; ?>" rel="stylesheet" />
  <link href="<?=_URL_CSS_ . 'style.css'; ?>" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?=_URL_LIBS_ . "fontawesome-free/css/all.min.css"; ?>">
  <link rel="stylesheet" href="<?=_URL_LIBS_ . "jquery-confirm/jquery-confirm.min.css?" . __VERSION__ . ""; ?>">
  <script type="text/javascript">
    const base_url = '<?=_BASE_URL_; ?>';
  </script>
  <script type="text/javascript" src="<?=_URL_JS_ . "jquery.js"; ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
  <script type="text/javascript" src="<?=_URL_JS_ . "isotope3.0.6.min.js"; ?>"></script>
  <script src="<?=_URL_LIBS_ . 'jquery.searcher/jquery.searcher.min.js'; ?>"></script>

</head>
<style>
  @import url('https://rsms.me/inter/inter.css');

  :root {
    --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
  }

  body {
    font-feature-settings: "cv03", "cv04", "cv11";
  }
</style>

<body>
  <div class="page">
    <!-- Navbar -->
    <header class="navbar navbar-expand-md d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href="<?=_BASE_URL_; ?>">
            <img src="<?=_URL_IMG_ . 'seas_logo.png?' . __VERSION__; ?>" width="110" height="20" alt="ENS SEAS" class="navbar-brand-image">
          </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
          <div class="nav-item d-none d-md-flex me-3">
            <div class="btn-list">
              <a href="https://seas.mg" class="btn" target="_blank" rel="noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-blue icon-tabler-world" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                  <path d="M3.6 9h16.8" />
                  <path d="M3.6 15h16.8" />
                  <path d="M11.5 3a17 17 0 0 0 0 18" />
                  <path d="M12.5 3a17 17 0 0 1 0 18" />
                </svg>
                seas.mg
              </a>
            </div>
          </div>
          <?php
          /*
              <div class="d-none d-md-flex">
            <div class="nav-item dropdown d-none d-md-flex me-3">
              <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                  <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                </svg>
                <span class="badge bg-red"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Last updates</h3>
                  </div>
                  <div class="list-group list-group-flush list-group-hoverable">
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                        <div class="col text-truncate">
                          <a href="#" class="text-body d-block">Example 1</a>
                          <div class="d-block text-secondary text-truncate mt-n1">
                            Change deprecated html tags to text decoration classes (#29604)
                          </div>
                        </div>
                        <div class="col-auto">
                          <a href="#" class="list-group-item-actions">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> */
          ?>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
              <span class="bg-primary text-white avatar">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" />
                  <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                  <path d="M6 20.05v-.05a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v.05" />
                </svg>
              </span>

              <div class="d-none d-xl-block ps-2">
                <div><?=__FIRST_NAME__ . ' ' . __NAME__; ?></div>
                <div class="mt-1 small"><?=getUserLevel(__LEVEL__); ?></div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <a href="<?=_BASE_URL_ . 'my-profile/' . __UNIQID__; ?>" class="dropdown-item">
                Profil
              </a>
              <a href="<?=_BASE_URL_ . 'change-password/' . __UNIQID__; ?>" class="dropdown-item">
                Mot de passe
              </a>
              <a href="<?=_BASE_URL_ . 'signout'; ?>" class="dropdown-item">
                Se déconnecter
              </a>
            </div>
          </div>
        </div>
    </header>

    <header class="navbar navbar-expand-md d-print-none">
      <div class="container-xl">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
            <ul class="navbar-nav">
              <?php if (__LEVEL__ == 'ADMIN' or __LEVEL__ == 'TEACHER') : ?>
                <li class="nav-item">
                  <a class="nav-link" href="<?=_BASE_URL_ . 'home'; ?>">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon " width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M18 9l-6 -6l-9 9h2v7a2 2 0 0 0 2 2h3.5"></path>
                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2"></path>
                        <path d="M16 17.5l-.585 -.578a1.516 1.516 0 0 0 -2 0c-.477 .433 -.551 1.112 -.177 1.622l1.762 2.456c.37 .506 1.331 1 2 1h3c1.009 0 1.497 -.683 1.622 -1.593c.252 -.938 .378 -1.74 .378 -2.407c0 -1 -.939 -1.843 -2 -2h-1v-2.636c0 -.754 -.672 -1.364 -1.5 -1.364s-1.5 .61 -1.5 1.364v4.136z"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      Tableau de bord
                    </span>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-notes" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                        <path d="M9 7l6 0"></path>
                        <path d="M9 11l6 0"></path>
                        <path d="M9 15l4 0"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      LICENCE
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column ">
                        <a class="dropdown-item" href="Javascrpit:;">
                          LEFA
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-list/L3LEFA'; ?>">
                          Liste Préinscription
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-validation/L3LEFA'; ?>">
                          Validation
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-list-final/L3LEFA'; ?>">
                          Liste finale
                        </a>
                      </div>
                      <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="Javascrpit:;">
                          LALS
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-list/L3LALS'; ?>">
                          Liste Préinscription
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-validation/L3LALS'; ?>">
                          Validation
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-list-final/L3LALS'; ?>">
                          Liste finale
                        </a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-notes" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                        <path d="M9 7l6 0"></path>
                        <path d="M9 11l6 0"></path>
                        <path d="M9 15l4 0"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      M1
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column ">
                        <a class="dropdown-item" href="Javascrpit:;">
                          EFA
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-list/M1EFA'; ?>">
                          Liste Préinscription
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-validation/M1EFA'; ?>">
                          Validation
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-list-final/M1EFA'; ?>">
                          Liste finale
                        </a>
                      </div>
                      <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="Javascrpit:;">
                          ASS
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-list/M1ASS'; ?>">
                          Liste Préinscription
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-validation/M1ASS'; ?>">
                          Validation
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-list-final/M1ASS'; ?>">
                          Liste finale
                        </a>
                      </div>
                    </div>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-notes" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                        <path d="M9 7l6 0"></path>
                        <path d="M9 11l6 0"></path>
                        <path d="M9 15l4 0"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      M2
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column ">
                        <a class="dropdown-item" href="Javascrpit:;">
                          EFA
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-list/M2EFA'; ?>">
                          Liste Préinscription
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-validation/M2EFA'; ?>">
                          Validation
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-list-final/M2EFA'; ?>">
                          Liste finale
                        </a>
                      </div>
                      <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="Javascrpit:;">
                          ASS
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-list/M2ASS'; ?>">
                          Liste Préinscription
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-validation/M2ASS'; ?>">
                          Validation
                        </a>
                        <a class="dropdown-item" href="<?=_BASE_URL_ . 'student/show-list-final/M2ASS'; ?>">
                          Liste finale
                        </a>
                      </div>
                    </div>
                  </div>
                </li>


                <?php /* ?>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-notes" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                        <path d="M9 7l6 0"></path>
                        <path d="M9 11l6 0"></path>
                        <path d="M9 15l4 0"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      Gestion des frais
                    </span>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?=_BASE_URL_ . 'payment/show-list'; ?>">
                      Liste des frais
                    </a>
                    <a class="dropdown-item" href="<?=_BASE_URL_ . 'payment/show-validation'; ?>">
                      Validation
                    </a>
                    <a class="dropdown-item" href="<?=_BASE_URL_ . 'payment/show-list-validate'; ?>">
                      Liste des frais validés
                    </a>
                  </div>
                </li>*/
                ?>

                <li class="nav-item ">
                  <a class="nav-link" href="<?=_BASE_URL_ . 'resource-management/show-list'; ?>">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-briefcase" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                        <path d="M12 12l0 .01" />
                        <path d="M3 13a20 20 0 0 0 18 0" />
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      Gestion des cours
                    </span>
                  </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="<?=_BASE_URL_ . 'users/show-list'; ?>">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon " width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5"></path>
                        <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z"></path>
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      Gestion des utilisateurs
                    </span>
                  </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="<?=_BASE_URL_ . 'notes/show-list'; ?>">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-note" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M13 20l7 -7" />
                        <path d="M13 20v-6a1 1 0 0 1 1 -1h6v-7a2 2 0 0 0 -2 -2h-12a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7" />
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      Pense-bêtes
                    </span>
                  </a>
                </li>
              <?php endif; ?>

              <?php if ((__LEVEL__ !== 'ADMIN') && (__LEVEL__ !== 'TEACHER')) : ?>

                <li class="nav-item ">
                  <a class="nav-link" href="<?=_BASE_URL_ . 'space-students/courses'; ?>">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-briefcase" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                        <path d="M12 12l0 .01" />
                        <path d="M3 13a20 20 0 0 0 18 0" />
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      Cours - <?=__LEVEL__; ?>
                    </span>
                  </a>
                </li>

                <li class="nav-item ">
                  <a class="nav-link" href="<?=_BASE_URL_ . 'space-students/resources'; ?>">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-folder-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M11 19h-6a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v2.5" />
                        <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                        <path d="M20.2 20.2l1.8 1.8" />
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      Tronc commun  
                      <span class="badge badge-pill bg-red"><?=$this->session->userdata('course'); ?></span>
                    </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="<?=_BASE_URL_ . 'notes/show-list'; ?>">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-note" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M13 20l7 -7" />
                        <path d="M13 20v-6a1 1 0 0 1 1 -1h6v-7a2 2 0 0 0 -2 -2h-12a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7" />
                      </svg>
                    </span>
                    <span class="nav-link-title">
                      Pense-bêtes
                    </span>
                  </a>
                </li>


                <?php
                /*Le développement d'une application pour les étudiants peut offrir divers menus pour répondre à leurs besoins spécifiques. Voici quelques idées de menus possibles pour l'espace étudiant dans une application :

1. Tableau de bord :
   - Vue d'ensemble des cours en cours.
   - Notifications importantes (nouveaux cours, mises à jour, rappels).

2. Cours :
   - Liste des cours actuels avec les détails.
   - Accès aux documents de cours, aux présentations et aux devoirs.
   - Calendrier des cours et des événements.

3. Devoirs et évaluations :
   - Affichage des devoirs à venir et des dates limites.
   - Accès aux résultats des évaluations.

4. Ressources pédagogiques :
   - Bibliothèque virtuelle avec accès aux livres numériques, articles, et ressources connexes.
   - Liens vers des sites Web utiles.

5. Communication :
   - Messagerie interne entre étudiants et enseignants.
   - Forums de discussion pour les discussions de groupe.

6. Profil étudiant :
   - Informations personnelles.
   - Historique académique et résultats.

7. Calendrier :
   - Planning des cours, des examens et des événements.
   - Possibilité de synchronisation avec d'autres applications de calendrier.

8. Support technique :
   - Foire aux questions (FAQ).
   - Assistance en direct ou formulaire de contact pour le support technique.

9. Clubs et activités :
   - Liste des clubs étudiants et des événements associés.
   - Possibilité de rejoindre des groupes ou des activités.

10. Services campus :
    - Informations sur les services disponibles sur le campus (bibliothèque, cantine, salle de sport).
    - Carte du campus interactive.

11. Emploi et stages :
    - Offres d'emploi et de stages.
    - Conseils sur la recherche d'emploi.

12. Réseaux sociaux :
    - Intégration des réseaux sociaux pour faciliter la connectivité entre étudiants.

Ces menus peuvent être adaptés en fonction des besoins spécifiques de l'institution éducative et des étudiants visés. Il est également essentiel de garantir une interface conviviale pour une utilisation facile et efficace. */
                ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="page-wrapper">
      <div class="page-body">
        <div class="container-xl">
          <?=$output; ?>
        </div>
      </div>
    </div>
    <div class="toast bg-blue text-blue-fg">
      <div class="toast-content"></div>
    </div>
  </div>
  <script src="<?=_URL_LIBS_ . 'jquery-confirm/jquery-confirm.min.js?' . __VERSION__ . ""; ?>"></script>
  <script src="<?=_URL_LIBS_ . 'apexcharts/dist/apexcharts.min.js'; ?>"></script>
  <script src="<?=_URL_LIBS_ . 'litepicker/dist/litepicker.js'; ?>"></script>
  <script src="<?=_URL_LIBS_ . 'datatables/datatables.1.13.6.js'; ?>"></script>
  <script src="<?=_URL_LIBS_ . 'datatables/datatables.bootstrap5.js'; ?>"></script>
  <script src="<?=_URL_JS_ . 'app.min.js'; ?>"></script>
  <script src="<?=_URL_JS_ . 'main.min.js'; ?>"></script>
  <script src="<?=_URL_JS_ . 'dashboard.js?' . __VERSION__ . ""; ?>"></script>
  <script src="<?=_URL_JS_ . 'seas.js?' . __VERSION__ . ""; ?>"></script>
  <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>