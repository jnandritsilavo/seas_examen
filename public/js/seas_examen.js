const quizData = [{
                instruction: "<span class='text-primary'>Ne peut choisir qu'une seule(1) réponse</span>",
                question: "Quand vous abordez une action de formation nouvelle, vous tentez avant tout connaître :",
                options: [
                  "Le programme",
                  "L'origine du projet",
                  "La documentation disponible"
                ],
                correct: ["L'origine du projet"],
                weight: 1,
                maxChoices: 1
            },
            {
                instruction: "<span class='text-primary'>Ne peut choisir qu'une seule(1) réponse</span>",
                question: "Votre responsable vous dit : “Il faut que tu interviennes demain auprès des chefs d'établissement.” La première question que vous lui posez, c'est :",
                options: [
                  "de quoi veut-ont que je leur parle?",
                  "qui les envoie?",
                  "qu'est-ce qu'on attend d'eux après la formation?",
                  "Qui va me remplacer auprès de mon groupe de stagiaires?"
                ],
                correct: ["qu'est-ce qu'on attend d'eux après la formation?"],
                weight: 1,
                maxChoices: 1
            },
            {
                instruction: "<span class='text-primary'>Ne peut choisir que deux(2) réponses</span>",
                question: "Lesquels parmi les objectifs suivants sont considérés comme objectifs de formation ?",
                options: [
                  "Renforcer la sécurité lors des travaux sur voie suite à plusieurs incidents relevés sur le terrain",
                  "Rédiger dans les règles un cahier des charges pour une formation dans votre champ de compétence",
                  "Maîtriser les techniques de conduite de réunion",
                  "Renforcer l'efficacité des réunions dans les services",
                  "Tracer un plan au 1/100 d'une pièce mécanique simple"
                ],
                correct: [
                  "Rédiger dans les règles un cahier des charges pour une formation dans votre champ de compétence",
                  "Maîtriser les techniques de conduite de réunion"
                ],
                weight: 2,
                maxChoices: 2
            },
            {
                instruction: "<span class='text-primary'>Ne peut choisir que trois(3) réponses</span>",
                question: "La demande en formation peut s’exprimer de trois façons différentes. Lesquelles ?",
                options: [
                  "une situation présente insatisfaisante",
                  "une situation attendue, souhaitable",
                  "des moyens susceptibles de transformer la situation actuelle",
                  "l'analyse des besoins de formation",
                  "l'élaboration d'un cahier des charges"
                ],
                correct: [
                  "une situation présente insatisfaisante",
                  "une situation attendue, souhaitable",
                  "des moyens susceptibles de transformer la situation actuelle"
                ],
                weight: 3,
                maxChoices: 3
            },
            {
                instruction: "<span class='text-primary'>Ne peut choisir que quatre(4) réponses</span>",
                question: "Choisissez 4 propositions avec lesquelles vous êtes tout à fait d'accord. “Apprendre, pour moi, c’est…”",
                options: [
                  "Apprendre, c’est recevoir la connaissance.",
                  "Pour désigner les personnes en formation, je dis « les formés ».",
                  "Apprendre, c’est construire et développer soi-même ses compétences.",
                  "Apprendre, c’est changer ses idées et ses façons de faire.",
                  "L’essentiel est que le contenu à apprendre soit clair et bien structuré.",
                  "Apprendre, c’est passer de l’ignorance au savoir.",
                  "J’appelle les personnes en formation « les stagiaires ».",
                  "Apprendre, c’est imiter, c’est reproduire ce qu’on nous a été montré.",
                  "Une progression rigoureuse des séquences de formation conduit mieux jusqu’au but.",
                  "C’est l’attention qui est décisive pour apprendre.",
                  "C’est la qualité du formateur qui fait qu’on apprend ou non.",
                  "Apprendre, c’est d’abord faire comme on m’a montré.",
                  "Apprendre, c’est en réfléchissant sur des problèmes à résoudre.",
                  "Apprendre, c’est s’entraîner à faire.",
                  "Apprendre, c’est s’approprier le message du formateur.",
                  "La formation repose sur la qualité de la communication.",
                  "Former, c’est « donner une forme ».",
                  "On ne forme pas les gens, ils se forment.",
                  "Apprendre, c’est écouter et être attentif.",
                  "C’est la confrontation en petits groupes qui est la plus utile pour apprendre.",
                  "Pour parler des personnes en formation, je préfère dire « les apprenants »",
                  "Apprendre, c’est analyser sa pratique et se remettre en cause."
                ],
                correct: [
                  "Apprendre, c’est construire et développer soi-même ses compétences.",
                  "Apprendre, c’est imiter, c’est reproduire ce qu’on nous a été montré.",
                  "C’est la qualité du formateur qui fait qu’on apprend ou non.",
                  "Apprendre, c’est d’abord faire comme on m’a montré.",
                  "Apprendre, c’est s’entraîner à faire."
                ],
                weight: 3,
                maxChoices: 4
            }
          ];

          function shuffle(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
          }

          $(document).ready(function() {
            shuffle(quizData);
            const $quiz = $('#quiz');

            quizData.forEach((q, idx) => {
                const $qDiv = $(`<div class="question mb-4 border rounded p-3" id="question-${idx}"></div>`);
                $qDiv.append(`<p class="fw-bold">Q${idx + 1}. ${q.instruction}<br>${q.question}</p>`);

                const shuffledOptions = [...q.options];
                shuffle(shuffledOptions);

                shuffledOptions.forEach(option => {
                  const id = `q${idx}_${option.replace(/[^a-zA-Z0-9]/g, '_')}`;
                  const $opt = $(
                      `<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="q${idx}" value="${option}" id="${id}">
                        <label class="form-check-label" for="${id}">${option}</label>
                      </div>`
                  );
                  $qDiv.append($opt);
                });
                $qDiv.append(`<div class="error-msg" id="error-${idx}"></div>`);
                $quiz.append($qDiv);
            });

            $('#submit').click(function() {
                let score = 0;
                let allValid = true;

                quizData.forEach((q, idx) => {
                  const answers = $(`input[name='q${idx}']:checked`).map(function() {
                      return $(this).val();
                  }).get();

                  const errorEl = $(`#error-${idx}`);
                  errorEl.text('');

                  if (answers.length !== q.maxChoices) {
                      errorEl.text(`Veuillez sélectionner exactement ${q.maxChoices} réponse(s).`);
                      allValid = false;
                      return;
                  }

                  answers.forEach(ans => {
                      if (q.correct.includes(ans)) {
                        if (idx === quizData.length - 1) {
                            score += 0.75;
                        } else {
                            score += 1;
                        }
                      }
                  });
                });

                const formNames = $('#formNames').val();
                const formFirst = $('#formFirst').val();
                const formRegist = $('#formRegist').val();
                const formCourse = $('#formCourse').val();
                if (!formNames || !formFirst || !formRegist || !formCourse) {
                  $('#score').html('<span class="text-danger">Veuillez remplir toutes les informations personnelles.</span>');
                  return;
                }

                if (!allValid) return;
                const totalPoints = quizData.reduce((sum, q, i) => {
                  if (i === quizData.length - 1) return sum + (q.correct.length * 0.75);
                  return sum + q.correct.length;
                }, 0);
                const note10 = (score / totalPoints) * 10;

                let mention = "Passable";
                if (note10 >= 8.5) mention = "Très Bien";
                else if (note10 >= 7) mention = "Bien";
                else if (note10 >= 5.5) mention = "Assez Bien";


                $.ajax({
                  url: base_url + 'examen/save-data',
                  type: 'POST',
                  data: {
                      formNames: formNames,
                      formFirst: formFirst,
                      formRegist: formRegist,
                      formCourse: formCourse,
                      formNote: note10.toFixed(2),
                      // mention: mention
                  },
                  success: function(response) {
                    if(response == 'success')
                    {
                      $('#score').html(`Merci ${formFirst} ${formNames} (Matricule : ${formRegist}, Parcours : ${formCourse})<br>Votre note est <strong>${note10.toFixed(2)}/10</strong><br>Mention : <strong>${mention}</strong>`);
                      $('#submit').prop('disabled', true);
                    }
                    else
                    {
                      $('#score').html(`Erreur lors de l\'enregistrement. Veuillez corriger l\'erreur.`);
                    }
                  },
                  error: function(xhr, status, error) {
                      console.error('Erreur lors de l\'enregistrement:', error);
                  }
                });
            });
          });



// function startCountdown() {
//   const $timer = $('#timer');

//   const phase1End = new Date('2025-08-02T12:00:00'); // début de l'examen
//   const phase2End = new Date('2025-08-02T12:30:00'); // fin normale
//   const fullClose = new Date('2025-08-02T12:30:01'); // fermeture complète

//   const interval = setInterval(() => {
//     const now = new Date();

//     if (now >= fullClose) {
//       clearInterval(interval);
//       $timer.removeClass().addClass('alert alert-danger').html("⛔ L'examen est maintenant fermé.");
//       $('#quiz, #submit, #formNames, #formFirst, #formRegist, #formCourse').hide();
//       return;
//     }

//     let timeLeft, message;

//     if (now < phase1End) {
//       timeLeft = phase1End - now;
//       message = "🔒 L'examen ouvrira à <strong>12h00</strong>. Temps restant :";
//     } else if (now < phase2End) {
//       timeLeft = phase2End - now;
//       message = "⏳ Temps restant pour compléter l'examen :";
//     } else {
//       timeLeft = fullClose - now;
//       message = "⚠️ Fermeture imminente de l'examen dans :";
//     }

//     // Afficher ou masquer l'examen
//     if (now >= phase1End && now < fullClose) {
//       $('#quiz, #submit, #formNames, #formFirst, #formRegist, #formCourse').show();
//     } else {
//       $('#quiz, #submit, #formNames, #formFirst, #formRegist, #formCourse').hide();
//     }

//     // Affichage du temps formaté
//     const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//     const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
//     const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

//     const formattedTime = `${String(hours).padStart(2, '0')}h ${String(minutes).padStart(2, '0')}m ${String(seconds).padStart(2, '0')}s`;
//     $timer.html(`${message} <strong>${formattedTime}</strong>`);
//   }, 1000);
// }

// startCountdown();