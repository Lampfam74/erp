 $(function() {

     //  -- -- -- -- -- -- -
     //- DONUT CHART -
     //----
     // Get context with jQuery - using jQuery's .get() method.
     var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
     var donutData = {
         labels: [],
         datasets: [{
             data: [],
             backgroundColor: [],
         }]
     }
     var CDATA = JSON.parse(`<?php echo $categories; ?>`)
     let nbr_Personnal_fil = 0;

     //desruction de la collection  CDATA
     for (let a = 0; a < CDATA.length; a++) {

         // console.log(donutData.datasets)
         donutData.datasets[0].backgroundColor.push('#' + Math.floor(Math.random(1000000) * 100) + Math
             .floor(Math.random(100000) * 100) + Math.floor(Math.random(1000000) * 100));
         let id_categorie = CDATA[a].id;

         //destruction des collection CAPPRENANT et STAGES
         //en fin de d'obtenir le nombre d'apprenants qui font stages dans une filieres
         var CPERSONNAL = JSON.parse(`<?php echo $personnals; ?>`)
         var CONTRATS = JSON.parse(`<?php echo $contrats; ?>`)
             // console.log(STAGES);
         console.log(CAPPRENANT);
         for (let b = 0; b < CONTRATS.length; b++) {

             let personnal_id = CONTRATS[b].personnal_id;
             let Categories = CONTRATS[b].categorie_id;

             //  console.log(personnal_id);
             //on parcourt la collection de contrats
             for (let c = 0; c < CONTRATS.length; c++) {
                 //pour determiner si l'apprenants a fait ce stage

                 //Verifier si le stage  est en rapport avec  ce filiere
                 let retp = CONTRATS[c].personal_id;
                 if (retp == personnal_id) {
                     if (Id_filiere == Id_filiere_fil) {

                         console.log(Id_filiere, Id_filiere_fil);

                         nbr_apprenant_fil++;

                     }


                 }

             }

             //                 //sinon

         }
         donutData.datasets[0].data.push(nbr_apprenant_fil);
         donutData.labels.push(CDATA[a].libelle);

         nbr_apprenant_fil = 0;
     }

     console.log('gg', nbr_apprenant_fil);



     console.log(donutData.labels);
     console.log(donutData.datasets[0].backgroundColor);

     var donutOptions = {
             maintainAspectRatio: false,
             responsive: true,
         }
         //Create pie or douhnut chart
         //You can switch between pie and douhnut using the method below.
     new Chart(donutChartCanvas, {
         type: 'doughnut',
         data: donutData,
         options: donutOptions
     })

 }

 ))