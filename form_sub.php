
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" />

  <title>Questions</title>
  <style type="text/css">
   
   .angehoeriger-icon
    {
      position: absolute;
    width: 15%;
    top: 40px;
    right: 90px;
    }
    .mg-bt
    {
      margin-bottom: -81px;
    }
    .plz-button-wrapper-angehoeriger {
    background: #fe9826;
    border-radius: 5px;
    text-align: center;
    width: auto!important;
    margin: 15px 0;
  }
  .plz-button {
    letter-spacing: 1px;
    color:  #fe9826;
    outline: none;
    font-size: 18px;
    border-radius: 5px;
    width: 100%;
    padding: 12px 0;
    border: 0;
    font-family: pt-sans-bold-italic;
}
  </style>
</head>

<body >
  <!-- Image and text -->
  <nav class="navbar navbar-light bg-light bg-white border-bottom">
    <div class="container mt-2 mb-2">
      <a class="navbar-brand" href="#">
        <img src="img/pflegeauskunft.png" class="d-inline-block align-top img-fluid logo" alt="logo" loading="lazy" />
        <img src="img/pflegeauskunft-mobile.png" class="d-inline-block align-top img-fluid m_logo" alt="logo" loading="lazy" />
      </a>
    </div>
  </nav>

  <section class="container mt-0 mt-md-5">
    <div class="row">
      <div class="col-12 col-md-10 mx-auto">
        <div class="row">
          <div class="col-12 body_section text-center text-md-left">
            <span class="head1"> Seniorenbetreuung </span> <br />
            <span class="head2 d-none d-md-inline">Finden Sie die richtige<br /></span>
            <span class="head2 d-none d-md-inline">Betreuung und Pflege<br /></span>
            <span class="head2 d-inline d-md-none">Finden Sie die richtige Betreuung und Pflege</span>
          </div>

          <div class="col-12 text-center body_section2 py-5 py-md-5 mg-bt">
            <div class="row">
              <span class="section_arrow"></span></div>

           <div class="danke-text">
<span class="danke-header" style="font-family: Open Sans-bold;">Auf Grundlage Ihres Pflegebedarfs haben wir f??r Sie die folgenden Anbieter ermittelt:</span><p></p>
<div class="vielen-dank-partner-img-wrapper-dreier">
<img class="partner-img mobile-van" alt="Kooperationen und Partnerschaften" src="img/betreuungswelt_promedica_pflegehilfe-fuer-senioren.png">
</div>
<div>
<span style="display: block; padding: 0 0 20px 0;">In K??rze werden Sie von unseren ausgew??hlten Anbietern telefonisch kontaktiert, um eventuell n??tige R??ckfragen zur Betreuungssituation zu kl??ren und Ihnen Ihre pers??nlichen Angebote zukommen zu lassen.</span>
</div>
<div class="wie-testen-text">
<span class="danke-header" style="display: block; padding: 20px 0; border-top: 1px solid #ddd; font-family: Open Sans-bold;">Ihre Vorteile bei der Anbietersuche</span><span style="display: block; padding: 0 0;">Die meisten Menschen wollen im Pflegefall oder bei Betreuungsbedarf in den eigenen vier W??nden bleiben. Dort haben sie ihr vertrautes Umfeld, ihre Erinnerungen und ihre Selbstst??ndigkeit.</span><span style="display: block; padding: 20px 0;">Unser branchen??bergreifender Beratungsservice erm??glicht es Ihnen, schnell und unverbindlich eine ??bersicht der gepr??ften Anbieter zu erlangen, damit Sie problemlos und ohne weitere Verpflichtungen geeignete, personalisierte Angebote erhalten, zwischen denen Sie w??hlen k??nnen.</span><span style="display: block; font-family: Open Sans-bold; padding: 20px 0;">Wie wir testen</span><span style="display: block; padding: 0 0;">Das Versorgungskonzept unserer Pflegedienstleister testen wir regelm????ig in den f??r h??usliche Betreuung relevanten Kategorien. Wir stellen Ihnen dabei nur Anbieter vor, die alle rechtlichen Grundlagen erf??llen und ??ber die n??tigen A1-Bescheinigungen verf??gen.</span>
</div>
<div class="wie-testen-img-wrapper">
<img class="partner-img" alt="Wie wir testen" src="img/wietesten.png">
</div>
<div class="wie-testen-subtext">
<span style="display: block; padding: 0 0; font-size: 10px; font-family: Open Sans-bold; font-style: italic;">Die f??r die h??usliche Betreuung relevantesten Kategorien setzen sich aus unterschiedlichen Teilfaktoren zusammen.</span>
</div>
<p></p></div>
             
            </div>
             <div class="progress-contain">
                <div class="progress" id="progress-contain"></div>
              </div>
            <div class="col-12 bg-white mx-auto" style="display: none;">
              <button class="btn btn-primary rounded-0 mx-3 bg-orange-active btn-for-navigate" id="previous" onClick="loadPrevious();">
                PREVIOUS</button><button class="btn btn-primary rounded-0 mx-3 bg-orange-active btn-for-navigate" id="next" onClick="loadNext();">
                NEXT
              </button>
            </div>
            <div class="side-info" id="spanInfo">In nur <span style="font-size: 20px;">10</span> Fragen zum Anbietervergleich</div>


            <!-- <h2 class="text-center mb-2">
          5. Um was f??r einen Angeh??rigen handelt es sich?
        </h2>

        <div class="jumbotron">

          <div class="form-group">
            <label for="exampleInputEmail1" class="text-center size18">z.B. Verwandtschaftsverh??ltnis:</label>
            <input type="email" class="form-control col-md-5 mx-auto">
            <button class="col-md-5 mx-auto btn btn-primary btn-lg mt-3 bg_primary_color"> weiter ?? </button>
          </div>

        </div> -->



          </div>
          <div class="col-12 text-center body_section3 mt-3 mb-5">
            <div class="row">
              <div class="col-xs-2 mx-auto p-0 text-center tt">
                <span class="ttt"><span class="tiptext">Unsere Anbieter werden auf die Einhaltung aller gesetzlichen Bestimmungen gepr??ft.</span>
                </span>
                <img class="image-checkmark" src="img/legal.png" />
                <p class="serv">Legale Betreuung</p>
              </div>

              <div class="col-xs-2 mx-auto p-0 text-center tt"><span class="ttt"><span class="tiptext">Wir arbeiten ausschlie??lich mit Anbietern zusammen, die unseren Qualit??tsnormen entsprechen.</span>
                </span>
                <img class="image-checkmark" src="img/geprueft.png" />
                <p class="serv">Gepr??fte Anbieter</p>
              </div>

              <div class="col-xs-2 mx-auto p-0 text-center tt"><span class="ttt"><span class="tiptext">Wir arbeiten ausschlie??lich mit Anbietern zusammen, die unseren Qualit??tsnormen entsprechen.</span></span>
                <img class="image-checkmark" src="img/unverbindlich.png" />
                <p class="serv">Unverbindliche Anfrage</p>
              </div>

              <div class="col-xs-2 mx-auto p-0 text-center tt"><span class="ttt"><span class="tiptext">Bis zu 3 Anbieter konkurrieren untereinander und machen Ihnen kostenlos ein Angebot.</span></span>
                <img class="image-checkmark" src="img/sparschwein.png" />
                <p class="serv">Kostenloser Service</p>
              </div>


              <div class="col-xs-2 mx-auto p-0 text-center tt"><span class="ttt"><span class="tiptext">Alle Datenschutzbestimmungen Datenschutz- bestimmungen des DSGVO sind in Ihrem Interesse umgesetzt.</span></span>
                <img class="image-checkmark" src="img/datensicherheit.png" />
                <p class="serv">Datensicherheit</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <div class="container-fluid" style="background-color: #f2f2f2;">

    <div class="pt-5 mobile-hidden"></div>
    <h2 class="text-center pt-5 pb-5 clear-fix">
      So funktioniert unsere Anbieter-Suche
    </h2>

    <div class="col-md-10 mx-auto pb-3 text-center">
      <div class="row">
        <div class="col-md-3 col-7 mx-auto holder">
          <img src="img/step1.png" class="img-fluid img_thumbs">
          <img src="img/next-step.png" class="arrow_direction_img">
          <p class="text-center mt-2">Sie teilen uns mit, welche Betreuung und Pflege Sie ben??tigen.</p>

        </div>
        <div class="col-md-3  col-7 mx-auto holder">
          <img src="img/step2.png" class="img-fluid img_thumbs">
          <img src="img/next-step.png" class="arrow_direction_img">
          <p class="text-center mt-2">Wir durchsuchen unsere Datenbank nach Anbietern???</p>

        </div>
        <div class="col-md-3  col-7 mx-auto holder">
          <img src="img/step3.png" class="img-fluid img_thumbs">
          <img src="img/next-step.png" class="arrow_direction_img">
          <p class="text-center mt-2">??? und ber??cksichtigen dabei alle Ihre W??nsche.</p>

        </div>
        <div class="col-md-3  col-7 mx-auto holder">
          <img src="img/step4.png" class="img-fluid img_thumbs">
          <p class="text-center mt-2">??? und ber??cksichtigen dabei alle Ihre W??nsche.</p>

        </div>
      </div>
      <button class="mx-auto btn btn-lg mt-3 bg_primary_color g_box_shadow text-white"> Jetzt Anbieter vergleichen </button>
    </div>
  </div>
  <div class="container-fluid pt-5 pb-5" style="background-color: #ffffff;">
    <div class="col-12 col-md-10 mx-auto">
      <div class="row">

        <div class="col-md-4 col-12 px-0">
          <div class="text-center  mb-3 mb-md-5" style="font-size: 19px; font-weight: 300;">Kooperationen &amp; Partnerschaften</div>
          <img src="img/partners2.png" class="img-fluid mx-auto d-block d_logos">
        </div>

        <div class="addBorder"></div>
        <div class="col-md-4 col-12">
          <div class="text-center mb-3 mb-md-5" style="font-size: 19px; font-weight: 300;">Das sagen unsere Kunden</div>

          <div class="tab-content text-center mx-auto" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <img src="img/star.png" class="star_img">
              <div class="text-center testimony_text mx-auto mt-2">
                Fragen beantwortet und prompt mehrere Angebote erhalten, von denen wir uns f??r eins entschieden haben.
              </div>
              <div class="testifier mx-auto mt-2">
                ??? Gerda W. aus Freisingen
              </div>
            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <img src="img/star.png" class="star_img">
              <div class="text-center testimony_text mx-auto mt-2">
                Erst skeptisch, jetzt ??berzeugt. Habe mehrere Angebote von Anbietern aus der N??he bekommen.
              </div>
              <div class="testifier mx-auto mt-2">
                ??? Karl L. aus Hamburg
              </div>
            </div>


            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <img src="img/star.png" class="star_img">
              <div class="text-center testimony_text mx-auto mt-2">
                Danke f??r die unkomplizierte Hilfe bei der Suche nach einer Betreuung f??r meine Mutter!
              </div>
              <div class="testifier mx-auto mt-2">
                ??? Marion H. aus Grevenbroich
              </div>
            </div>



            <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact2-tab">
              <img src="img/star.png" class="star_img">
              <div class="text-center testimony_text mx-auto mt-2">
                War eine sehr gute und freundliche Beratung, kann ich bestens weiterempfehlen.
              </div>
              <div class="testifier mx-auto mt-2">
                ??? Reiner W. aus Dresden
              </div>
            </div>



            <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact3-tab">
              <img src="img/star.png" class="star_img">
              <div class="text-center testimony_text mx-auto mt-2">
                Mit Pflegeauskunft24 haben wir jemanden f??r zu Hause gefunden, der uns unterst??tzt.
              </div>
              <div class="testifier mx-auto mt-2">
                ??? Erika N. aus Wesel
              </div>
            </div>



          </div>
          <ul class="nav mb-3 mt-3 justify-content-center control-paging control-nav" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact2-tab" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact2" aria-selected="false">3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact3-tab" data-toggle="pill" href="#pills-contact3" role="tab" aria-controls="pills-contact3" aria-selected="false">3</a>
            </li>
          </ul>

        </div>

        <div class="addBorder"></div>

        <div class="col-md-4 col-12">
          <div class="text-center mb-3 mb-md-5" style="font-size: 19px; font-weight: 300;">Pflegeauskunft in den Medien</div>
          <img src="img/medien-logos.png" class="img-fluid mx-auto d-block d_logos">
        </div>
      </div>
    </div>
  </div>


  <footer class="container-fluid" style="background-color: #474747;">
    <div class="col-md-10 col-12 mx-auto ">
      <div class="row text-center mx-auto">
        <div class="mx-auto py-4 px-4 ">
          <span class="change_color" data-toggle="modal" data-target="#exampleModalLong"> Impressum </span>
          <span class="change_color" data-toggle="modal" data-target="#exampleModalLong2"> AGB </span>
          <span class="change_color" data-toggle="modal" data-target="#exampleModalLong3"> Datenschutz </span>
          <span class="change_color"> ?? 2020 Pflegeauskunft24.de </span>
        </div>
      </div>
    </div>
  </footer>


  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Datenschutz</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body h-mode">
          <p>
            <span class="font-weight-bold" style="display: block;  font-size: 19px;">Einleitung</span><br>
            <span style="display: block;">Die Hitzegrad Consulting UG freut sich, dass Sie unsere Website besuchen. Datenschutz &amp; Datensicherheit bei der Nutzung unserer Website sind uns sehr wichtig. Wir m??chten Sie mit diesen Datenschutzhinweisen dar??ber informieren, in welchem Umfang Daten bei der Nutzung unserer Webseite erhoben werden und zu welchen Zwecken wir diese Daten nutzen. Wir m??chten Sie auch ??ber Ihre Rechte diesbez??glich informieren.</span><br>
            <span style="display: block;">Sie k??nnen unsere Website besuchen ohne uns pers??nliche Informationen zu ??bermitteln. Wir werden Informationen nur dann sammeln, wenn Sie uns diese freiwillig zur Verf??gung stellen.</span><br>
            <span class="font-weight-bold" style="display: block;  font-size: 19px;">Inhaltsverzeichnis</span><br>
            <span class="font-weight-bold" style="display: block; ">Abschnitt I ??? Verantwortlicher und ??bersicht der Datenverarbeitungen</span><br>
            <span class="font-weight-bold" style="display: block; ">Abschnitt II ??? Betroffenenrechte, Rechtsgrundlagen und generelle Hinweise</span><br>
            <span class="font-weight-bold" style="display: block; ">Abschnitt III ??? Verarbeitungsprozesse</span><br>
            <span class="font-weight-bold" style="display: block; ">Abschnitt IV ??? Begriffsdefinitionen</span><br>
            <span class="font-weight-bold" style="display: block; ">Abschnitt V ??? Weitere Informationen</span><br>
            <span style="display: block; font-size: 16px;" class="font-weight-bold">Verantwortlicher</span><br>
            <span style="display: block;">Hitzegrad Consulting UG (haftungsbeschr??nkt)<br>
              Sonnenallee 114<br>
              12045 Berlin<br>
              Deutschland</span><br>
            <span style="display: block;">/span&gt;<br>
              <span style="display: block;">E-Mail: info@pflegeauskunft24.de<br>
                Tel.: 030 ??? 257 967 80</span><br>
              <span style="display: block;">Der Verantwortliche wird nachfolgend auch bezeichnet als ???wir??? oder ???uns???.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Beschreibung unserer Kernleistungen:</span><br>
              <span style="display: block;">Hitzegrad-Consulting bietet Vergleichsleistungen im Internet an. Interessenten k??nnen Vergleichsanfragen zu bestimmten Produkten und Leistungen stellen. Die Vergleichsanfragen werden anschlie??end an Unternehmen, Vermittler oder andere Anbieter dieser Produkte oder Leistungen (zusammenfassend bezeichnet als ???Anbieter???) weitergeleitet, die wiederum den Interessenten Angebote unterbreiten k??nnen.</span><br>
              <span class="font-weight-bold" style="display: block;  ">Mit dem Absenden der Vergleichsanfrage (per Klick auf den ???Pflegekr??fte finden???-Button), erkl??ren sich die Interessenten damit einverstanden, dass wir ihren Namen sowie ihre Kontakt- und Anfragedaten verarbeiten d??rfen, um ihre Anfrage zu bearbeiten, zur Angebotserstellung vorzubereiten und an ausgew??hlte Anbieter zu ??bermitteln.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Widerrufsm??glichkeit</span><br>
              <span class="font-weight-bold" style="display: block;  ">Die Einwilligung kann jederzeit formlos, z.B. per E-Mail an info@pflegeauskunft24.de oder per Brief an Hitzegrad Consulting UG (haftunsgsbeschr??nkt), Sonnenallee 114, 12045 Berlin mit Wirkung f??r die Zukunft widerrufen werden.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Arten der verarbeiteten Daten:</span><br>
              <span style="display: block;">??? Bestandsdaten (z.B., Namen, Adressen).</span><br>
              <span style="display: block;">??? Kontaktdaten (z.B., E-Mail-Adressen, Telefonnummern).</span><br>
              <span style="display: block;">??? Inhaltsdaten (z.B., Angaben zu Vergleichsanfragen).</span><br>
              <span style="display: block;">??? Vertragsdaten (z.B., Inhalt der Vergleichsanfragen, vermittelte Anbieter).</span><br>
              <span style="display: block;">??? Nutzungsdaten (z.B., besuchte Webseiten, Interesse an Inhalten, Zugriffszeiten).</span><br>
              <span style="display: block;">??? Meta-/Kommunikationsdaten (z.B., Ger??te-Informationen, IP-Adressen).</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Verarbeitung besonderer Kategorien von Daten (Art. 9 Abs. 1 DSGVO)</span><br>
              <span style="display: block;">Es werden grunds??tzlich keine besonderen Kategorien von Daten verarbeitet, au??er Gesundheitsdaten, wenn diese durch die Nutzer der Verarbeitung, z.B. mit Angaben zu gew??nschten Vergleichsangeboten, zugef??hrt werden (z.B. Angaben zu Mobilit??tshilfen).</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Kategorien der von der Verarbeitung betroffenen Personen:</span><br>
              <span style="display: block;">??? Interessenten.</span><br>
              <span style="display: block;">??? Besucher und Nutzer des Onlineangebotes.</span><br>
              <span style="display: block;">Nachfolgend bezeichnen wir die Betroffenen zusammenfassend auch als ???Nutzer???.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Zweck der Verarbeitung:</span><br>
              <span style="display: block;">??? Zurverf??gungstellung und Durchf??hrung von Vergleichs- und Vermittlungsleistungen.</span><br>
              <span style="display: block;">??? Zurverf??gungstellung des Onlineangebotes, seiner Inhalte und Funktionen. Erbringung vertraglicher Leistungen, Service und Kundenpflege.</span><br>
              <span style="display: block;">??? Beantwortung von Kontaktanfragen und Kommunikation mit Nutzern.</span><br>
              <span style="display: block;">??? Marketing, Werbung und Marktforschung.</span><br>
              <span style="display: block;">??? Sicherheitsma??nahmen.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Automatisierte Entscheidung im Einzelfall (Art. 22 DSGVO)</span><br>
              <span style="display: block;">Wir nehmen keine automatisierten Entscheidungen im Einzelfall vor.</span><br>
              <span styl class="font-weight-bold"e="display: block;">Stand der Datenschutzerkl??rung: Mai 2018</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 18px;">Abschnitt II ??? Betroffenenrechte, Rechtsgrundlagen und generelle Hinweise</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Rechte der betroffenen Personen</span><br>
              <span style="display: block;">Sie haben das Recht, eine Best??tigung dar??ber zu verlangen, ob betreffende Daten verarbeitet werden und auf Auskunft ??ber diese Daten sowie auf weitere Informationen und Kopie der Daten entsprechend Art. 15 DSGVO.</span><br>
              <span style="display: block;">Sie haben entsprechend. Art. 16 DSGVO das Recht, die Vervollst??ndigung der Sie betreffenden Daten oder die Berichtigung der Sie betreffenden unrichtigen Daten zu verlangen.</span><br>
              <span style="display: block;">Sie haben nach Ma??gabe des Art. 17 DSGVO das Recht zu verlangen, dass betreffende Daten unverz??glich gel??scht werden, bzw. alternativ nach Ma??gabe des Art. 18 DSGVO eine Einschr??nkung der Verarbeitung der Daten zu verlangen.</span><br>
              <span style="display: block;">Sie haben das Recht zu verlangen, dass die Sie betreffenden Daten, die Sie uns bereitgestellt haben nach Ma??gabe des Art. 20 DSGVO zu erhalten und deren ??bermittlung an andere Verantwortliche zu fordern.</span><br>
              <span style="display: block;">Sie haben ferner gem. Art. 77 DSGVO das Recht, eine Beschwerde bei der zust??ndigen Aufsichtsbeh??rde einzureichen.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Widerrufsrecht</span><br>
              <span style="display: block;">Sie haben das Recht, erteilte Einwilligungen gem. Art. 7 Abs. 3 DSGVO mit Wirkung f??r die Zukunft zu widerrufen.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Widerspruchsrecht</span><br>
              <span style="display: block;">Sie k??nnen der k??nftigen Verarbeitung der Sie betreffenden Daten nach Ma??gabe des Art. 21 DSGVO jederzeit widersprechen.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Cookies und Widerspruchsrecht im Direktmarketing</span><br>
              <span style="display: block;">Wir setzen tempor??re und permanente Cookies, d.h. kleine Dateien, die auf den Ger??ten der Nutzer gespeichert werden ein (Erkl??rung des Begriffs und der Funktion, siehe Abschnitt ???Begriffsdefinitionen??? dieser Datenschutzerkl??rung). Zum Teil dienen die Cookies der Sicherheit oder sind zum Betrieb unseres Onlineangebotes erforderlich (z.B., f??r die Darstellung der Website) oder um die Nutzerentscheidung bei der Best??tigung des Cookie-Banners zu speichern. Daneben setzen wir oder unsere Technologiepartner Cookies zur Reichweitenmessung und Marketingzwecken ein, wor??ber die Nutzer im Laufe der Datenschutzerkl??rung informiert werden.</span><br>
              <span style="display: block;">Falls die Nutzer nicht m??chten, dass Cookies auf ihrem Rechner gespeichert werden, werden sie gebeten die entsprechende Option in den Systemeinstellungen ihres Browsers zu deaktivieren. Gespeicherte Cookies k??nnen in den Systemeinstellungen des Browsers gel??scht werden. Der Ausschluss von Cookies kann zu Funktionseinschr??nkungen dieses Onlineangebotes f??hren.</span><br>
              <span style="display: block;">Ein genereller Widerspruch gegen den Einsatz der zu Zwecken des Onlinemarketing eingesetzten Cookies kann bei einer Vielzahl der Dienste, vor allem im Fall des Trackings, ??ber die US-amerikanische Seite http://www.aboutads.info/choices/ oder die EU-Seite http://www.youronlinechoices.com/ erkl??rt werden. Des Weiteren kann die Speicherung von Cookies mittels deren Abschaltung in den Einstellungen des Browsers erreicht werden. Bitte beachten Sie, dass dann gegebenenfalls nicht alle Funktionen dieses Onlineangebotes genutzt werden k??nnen.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Ausschlie??lich automatisierte Datenverarbeitung</span><br>
              <span style="display: block;">Sie haben nach Ma??gabe des Art. 22 DSGVO das Recht, nicht einer ausschlie??lich auf einer automatisierten Verarbeitung ??? einschlie??lich Profiling ??? beruhenden Entscheidung unterworfen zu werden, die Ihnen gegen??ber rechtliche Wirkung entfaltet oder Sie in ??hnlicher Weise erheblich beeintr??chtigt.</span><br>
              <span style="display: block;">Wir teilen mit, dass wir keine ausschlie??lich automatisierten Datenverarbeitungen durchf??hren.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">L??schung von Daten und Archivierungspflichten</span><br>
              <span style="display: block;">Die von uns verarbeiteten Daten werden nach Ma??gabe der Art. 17 und 18 DSGVO gel??scht oder in ihrer Verarbeitung eingeschr??nkt. Sofern nicht im Rahmen dieser Datenschutzerkl??rung ausdr??cklich angegeben, werden die bei uns gespeicherten Daten gel??scht, sobald sie f??r ihre Zweckbestimmung nicht mehr erforderlich sind und der L??schung keine gesetzlichen Aufbewahrungspflichten entgegenstehen.</span><br>
              <span style="display: block;">Nach gesetzlichen Vorgaben erfolgt die Aufbewahrung insbesondere f??r 6 Jahre gem???? ?? 257 Abs. 1 HGB (Handelsb??cher, Inventare, Er??ffnungsbilanzen, Jahresabschl??sse, Handelsbriefe, Buchungsbelege, etc.) sowie f??r 10 Jahre gem???? ?? 147 Abs. 1 AO (B??cher, Aufzeichnungen, Lageberichte, Buchungsbelege, Handels- und Gesch??ftsbriefe, F??r Besteuerung relevante Unterlagen, etc.)</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">??nderungen und Aktualisierungen der Datenschutzerkl??rung</span><br>
              <span style="display: block;">Wir bitten Sie sich regelm????ig ??ber den Inhalt unserer Datenschutzerkl??rung zu informieren. Wir passen die Datenschutzerkl??rung an, sobald die ??nderungen der von uns durchgef??hrten Datenverarbeitungen dies erforderlich machen.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Ma??gebliche Rechtsgrundlagen</span><br>
              <span style="display: block;">Nach Ma??gabe des Art. 13 DSGVO teilen wir Ihnen die Rechtsgrundlagen unserer Datenverarbeitungen mit.</span><br>
              <span style="display: block;">Die Grundlagen f??r kommerzielle Kommunikationen au??erhalb von Gesch??ftsbeziehungen, insbesondere via Post, Telefon, Fax und E-Mail sind im ?? 7 UWG enthalten.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Sicherheit der Datenverarbeitung</span><br>
              <span style="display: block;">Wir treffen nach Ma??gabe des Art. 32 DSGVO unter Ber??cksichtigung des Stands der Technik, der Implementierungskosten und der Art, des Umfangs, der Umst??nde und der Zwecke der Verarbeitung sowie der unterschiedlichen Eintrittswahrscheinlichkeit und Schwere des Risikos f??r die Rechte und Freiheiten nat??rlicher Personen, geeignete technische und organisatorische Ma??nahmen, um ein dem Risiko angemessenes Schutzniveau zu gew??hrleisten; Zu den Ma??nahmen geh??ren insbesondere die Sicherung der Vertraulichkeit, Integrit??t und Verf??gbarkeit von Daten durch Kontrolle des physischen Zugangs zu den Daten, als auch des sie betreffenden Zugriffs, der Eingabe, Weitergabe, der Sicherung, der Verf??gbarkeit und ihrer Trennung.</span><br>
              <span style="display: block;">Zu den Sicherheitsma??nahmen geh??rt insbesondere die verschl??sselte ??bertragung von Daten zwischen Ihrem Browser und unserem Server.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Offenlegung und ??bermittlung von Daten</span><br>
              <span style="display: block;">Sofern wir im Rahmen unserer Verarbeitung Daten gegen??ber anderen Personen und Unternehmen (Auftragsverarbeitern oder Dritten) offenbaren, sie an diese ??bermitteln oder ihnen sonst Zugriff auf die Daten gew??hren, erfolgt dies nur auf Grundlage einer gesetzlichen Erlaubnis und Ihrer Einwilligung.</span><br>
              <span style="display: block;">Sofern wir Dritte mit der Verarbeitung von Daten auf Grundlage eines sog. ???Auftragsverarbeitungsvertrages??? beauftragen, geschieht dies auf Grundlage des Art. 28 DSGVO.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">??bermittlungen in Drittl??nder</span><br>
              <span style="display: block;">Sofern wir Daten in einem Drittland (d.h. au??erhalb der Europ??ischen Union (EU) oder des Europ??ischen Wirtschaftsraums (EWR)) verarbeiten oder dies im Rahmen der Inanspruchnahme von Diensten Dritter oder Offenlegung, bzw. ??bermittlung von Daten an Dritte geschieht, erfolgt dies nur, wenn es zur Erf??llung unserer (vor)vertraglichen Pflichten, auf Grundlage Ihrer Einwilligung, aufgrund einer rechtlichen Verpflichtung oder auf Grundlage unserer berechtigten Interessen geschieht. Vorbehaltlich gesetzlicher oder vertraglicher Erlaubnisse, verarbeiten oder lassen wir die Daten in einem Drittland nur beim Vorliegen der besonderen Voraussetzungen der Art. 44 ff. DSGVO verarbeiten. D.h. die Verarbeitung erfolgt z.B. auf Grundlage besonderer Garantien, wie der offiziell anerkannten Feststellung eines der EU entsprechenden Datenschutzniveaus (z.B. f??r die USA durch das ???Privacy Shield???) oder Beachtung offiziell anerkannter spezieller vertraglicher Verpflichtungen (so genannte ???Standardvertragsklauseln???).</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 18px;">Abschnitt III ??? Verarbeitungsprozesse</span><br>
              <span style="display: block;">In der nachfolgenden Darstellung erhalten Sie eine ??bersicht der von uns vorgenommenen Verarbeitungst??tigkeiten, die wir in weitere T??tigkeitsbereiche untergliedert haben.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Kernbereich der Datenverarbeitung</span><br>
              <span style="display: block;">In diesem Bereich erhalten Sie Informationen zu unseren Kernleistungen und Aufgaben, wie z.B. Beantwortung von Anfragen und Erbringung unserer vertraglichen Leistungen sowie der mit ihnen verbundenen Nebenaufgaben.</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 14px;">Vergleichs- und Vermittlungsleistungen</span><br>
              <span style="display: block;">Wir verarbeiten die von den Interessenten im Rahmen der Vergleichsanfrage gemachten Angaben f??r Zwecke der Begr??ndung, Durchf??hrung und ggf. Beendigung eines Vertrages zur Vermittlung von bis zu drei Angeboten von Anbietern der von Ihnen angefragten Produkte oder Dienstleistungen. Die Angebotsvermittlung ist kostenlos und unverbindlich.</span><br>
              <span style="display: block;">Die Kontaktdaten der Interessenten nutzen wir, um Ihre Anfrage zu spezifizieren und um ihnen auf Grundlage der spezifizierten Anfrage passende Anbieter vorzuschlagen.</span><br>
              <span style="display: block;">Mit dem Absenden der Vergleichsanfrage (per Klick auf den ???Angebote Vergleichen???-Button), erkl??ren sich die Interessenten damit einverstanden, dass wir ihren Namen sowie ihre Kontakt- und Anfragedaten verarbeiten d??rfen, um ihre Anfrage zu bearbeiten, zur Angebotserstellung vorzubereiten und an ausgew??hlte Anbieter zu ??bermitteln. Die Einwilligung kann jederzeit formlos, z.B. per E-Mail an info@pflegeauskunft24.de oder per Brief an Hitzegrad Consulting UG (haftungsbeschr??nkt), Sonnenallee 114, 12045 Berlin, mit Wirkung f??r die Zukunft widerrufen werden.</span><br>
              <span style="display: block;">Wir protokollieren die Eingaben in das Vergleichsformular, um das Bestehen des Vertragsverh??ltnisses und Einverst??ndnisse der Interessenten entsprechend den gesetzlichen Rechenschaftspflichten (Art. 5 Abs. 2 DSGVO) nachweisen zu k??nnen.</span><br>
              <span style="display: block;">??? Verarbeitete Daten: Bestandsdaten, Kommunikationsdaten, Vertragsdaten, Inhaltsdaten, Nutzungs-/Metadaten; Im Rahmen der Protokollierung wird der Zeitpunkt des Anforderns der Vergleichsanfrage, sowie der Zeitpunkt des Bet??tigens des Best??tigungslinks gespeichert.</span><br>
              <span style="display: block;">??? Besondere Kategorien personenbezogener Daten: Gesundheitsdaten, sofern diese f??r die Vermittlung erforderlich sind.</span><br>
              <span style="display: block;">??? Betroffene: Interessenten, Online-User bzw. Website-Besucher.</span><br>
              <span style="display: block;">??? Zweck der Verarbeitung: Erbringung von Vertragsleistungen, Kundenservice, Protokollierung.</span><br>
              <span style="display: block;">??? Verarbeitungsgrundlagen: Art. 6 Abs. 1 lit. b (Vertrag zur Vermittlung von Vergleichsanfragen) und c (Gesetzlich erforderliche Protokollierung/ Archivierung) DSGVO.</span><br>
              <span style="display: block;">??? Erforderlichkeit / Interesse an Verarbeitung: Die Daten sind zur Begr??ndung und Erf??llung der vertraglichen Leistungen sowie Erf??llung gesetzlicher Nachweispflichten erforderlich.</span><br>
              <span style="display: block;">??? Offenlegung extern und Zweck: Anbieter, Zwecks Unterbreitung von Angeboten gegen??ber den Interessenten im Rahmen des Vergleichs.</span><br>
              <span style="display: block;">??? Verarbeitung in Drittl??ndern: Nein.</span><br>
              <span style="display: block;">??? L??schung der Daten: Die L??schung erfolgt sp??testens sechs Monate nach Ende der Vertragsdurchf??hrung, wenn keine Erforderlichkeit f??r die Speicherung der Daten besteht, wobei die Bestandsdaten sowie Nachweise der Vertragsverh??ltnisse/ Einverst??ndnisse bis zu zwei Jahre gespeichert werden; die Erforderlichkeit kann z.B. bestehen, wenn R??ckfragen offen sind; die Erforderlichkeit der Aufbewahrung der Daten wird jedes Jahr ??berpr??ft; im Fall der gesetzlichen Archivierungspflichten erfolgt die L??schung nach deren Ablauf (Ende handelsrechtlicher/ steuerrechtlicher Aufbewahrungspflichten, d.h. sp??testens nach 10 Jahre); die Speicherung der jeweiligen Datens??tze wird alle zwei Jahre evaluiert.</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 14px;">Beantwortung von Anfragen</span><br>
              <span style="display: block;">Die Angaben in den Anfragen, die wir ??ber unser Kontaktformular und auf anderen Wegen, z.B. via E-Mail erhalten, verarbeiten wir, um die Anfragen zu beantworten. Zu diesen Zwecken k??nnen die Anfragen in unserem Kundenbeziehungsmanagement-System (engl. Customer-Relationship-Management, CRM-System) oder in ??hnliche Verfahren, die uns zur Verwaltung von Anfragen dienen, gespeichert werden.</span><br>
              <span style="display: block;">??? Verarbeitete Daten: Bestandsdaten, Kommunikationsdaten, Vertragsdaten, Inhaltsdaten, Nutzungsdaten, Metadaten</span><br>
              <span style="display: block;">??? Betroffene: Interessenten, Online-User bzw. Website-Besucher, Gesch??ftspartner, Dritte.</span><br>
              <span style="display: block;">??? Zweck der Verarbeitung: Beantwortung von Anfragen.</span><br>
              <span style="display: block;">??? Verarbeitungsgrundlage: Art. 6 Abs. 1 lit. b. DSGVO.</span><br>
              <span style="display: block;">??? Erforderlichkeit / Interesse an der Verarbeitung: Notwendig zur Beantwortung der Anfragen.</span><br>
              <span style="display: block;">??? Offenlegung extern und Zweck: Nein.</span><br>
              <span style="display: block;">??? Verarbeitung in Drittl??ndern: Nein.</span><br>
              <span style="display: block;">??? Die Aufbewahrung von Daten der Interessenten entspricht den Angaben zur L??schung der Daten im Rahmen der o.a. Verarbeitungst??tigkeit ???Vergleichs- und Vermittlungsleistungen???; im ??brigen l??schen wir die Anfragen, sofern deren Aufbewahrung nicht mehr erforderlich ist, was im Regelfall 6 Monate nach dem letzten Kontakt der Fall ist; im Fall der gesetzlichen Archivierungspflichten erfolgt die L??schung nach deren Ablauf;</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 14px;">Betriebswirtschaftliche Analysen und Marktforschung</span><br>
              <span style="display: block;">Um unser Gesch??ft wirtschaftlich betreiben, Markttendenzen, Interessenten- und Nutzerw??nsche erkennen zu k??nnen, analysieren wir die uns vorliegenden Daten zu Gesch??ftsvorg??ngen, Vertr??gen, Anfragen, etc.</span><br>
              <span style="display: block;">Zu diesem Zweck f??hren wir die personenbezogenen Daten der Interessenten aus Anmeldungen und Vergleichsanfragen mit den Nutzungsdaten der Kunden zusammen.</span><br>
              <span style="display: block;">??? Verarbeitete Daten: Bestandsdaten, Kommunikationsdaten, Vertragsdaten, Inhaltsdaten, Nutzungsdaten, Metadaten</span><br>
              <span style="display: block;">??? Verarbeitungsgrundlage: Art. 6 Abs. 1 lit. f. DSGVO.</span><br>
              <span style="display: block;">??? Betroffene: Kunden, Interessenten, Gesch??ftspartner, Besucher und Nutzer des Onlineangebotes.</span><br>
              <span style="display: block;">??? Zweck der Verarbeitung: Betriebswirtschaftliche Analyse, Marketing, Werbung, Marktforschung.</span><br>
              <span style="display: block;">??? Art, Umfang, Funktionsweise der Verarbeitung: Profilerstellung, First-Party-Cookies.</span><br>
              <span style="display: block;">??? Erforderlichkeit / Interesse an Verarbeitung: Steigerung Nutzerfreundlichkeit, Optimierung des Angebotes, Betriebswirtschaftlichkeit.</span><br>
              <span style="display: block;">??? Offenlegung extern und Zweck: Die Analysen dienen alleine uns und werden nicht extern offenbart, sofern es sich nicht um anonyme Analysen mit zusammengefassten Werten handelt.</span><br>
              <span style="display: block;">??? Verarbeitung in Drittl??ndern: Nein.</span><br>
              <span style="display: block;">??? L??schung der Daten: Die Aufbewahrung von Daten der Interessenten entspricht den Angaben zur L??schung der Daten im Rahmen der o.a. Verarbeitungst??tigkeit ???Vergleichs- und Vermittlungsleistungen???; im ??brigen werden die gesamtbetriebswirtschaftlichen Analysen und allgemeine Tendenzbestimmungen nach M??glichkeit anonym erstellt.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Externe Onlinepr??senzen</span><br>
              <span style="display: block;">In diesem Bereich erhalten Sie Informationen zu unseren Datenverarbeitungen im Rahmen des Betriebs externer Onlinepr??senzen, z.B. in sozialen Medien.</span><br>
              <span style="display: block;">Wir unterhalten Onlinepr??senzen innerhalb sozialer Netzwerke und Plattformen, um mit den dort aktiven Kunden, Interessenten und Nutzern kommunizieren und sie dort ??ber unsere Leistungen informieren zu k??nnen. Beim Aufruf der jeweiligen Netzwerke und Plattformen gelten die Gesch??ftsbedingungen und die Datenverarbeitungsrichtlinien der jeweiligen Betreiber. Soweit nicht anders im Rahmen unserer Datenschutzerkl??rung angegeben, verarbeiten wir die Daten der Nutzer sofern diese mit uns innerhalb der sozialen Netzwerke und Plattformen kommunizieren, z.B. Beitr??ge auf unseren Onlinepr??senzen verfassen oder uns Nachrichten zusenden.</span><br>
              <span style="display: block;">Die innerhalb unseres Onlineangebotes eingesetzten Links/Schaltfl??chen zu sozialen Netzwerken und Plattformen (nachfolgend bezeichnet als ???Social-Media???) stellen grunds??tzlich erst dann einen Kontakt zwischen sozialen Netzwerken und den Nutzern her, wenn Nutzer die Links/Schaltfl??chen anklicken und die jeweiligen Netzwerke, bzw. deren Webseiten aufgerufen werden. Diese Funktion entspricht der Wirkungsweise eines regul??ren Online-Links.</span><br>
              <span style="display: block;">??? Von uns genutzte soziale Netzwerke: Facebook.</span><br>
              <span style="display: block;">??? Verarbeitete Daten: Bestandsdaten, Kommunikationsdaten, Inhaltsdaten, Nutzungsdaten, Metadaten.</span><br>
              <span style="display: block;">??? Besondere Kategorien personenbezogener Daten: Grunds??tzlich nein, au??er von Nutzern angegeben.</span><br>
              <span style="display: block;">??? Verarbeitungsgrundlage: Art. 6 Abs. 1 lit f. DSGVO.</span><br>
              <span style="display: block;">??? Betroffene: Nutzer der Social Media Pr??senzen (hierzu k??nnen Interessenten und Gesch??ftspartner geh??ren).</span><br>
              <span style="display: block;">??? Zweck der Verarbeitung: Information und Kommunikation.</span><br>
              <span style="display: block;">??? Art, Umfang, Funktionsweise der Verarbeitung: Durch Betreiber der jeweiligen Plattformen in der Regel: Permanent-Cookies, Tracking, Targeting, Remarketing, Inhalts- und verhaltensbezogene Werbung.</span><br>
              <span style="display: block;">??? Erforderlichkeit / Interesse an Verarbeitung: Erwartungshaltung der Nutzer, die auf den Plattformen aktiv sind, betriebswirtschaftliche Interessen.</span><br>
              <span style="display: block;">??? Offenlegung extern und Zweck: Gegen??ber den sozialen Netzwerken/ Plattformen.</span><br>
              <span style="display: block;">??? Verarbeitung in Drittl??ndern: USA.</span><br>
              <span style="display: block;">??? Garantie bei Verarbeitung in Drittl??ndern: Privacy Shield.</span><br>
              <span style="display: block;">??? L??schung der Daten: Es gelten die L??schungsregeln der jeweiligen Plattformen.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Webserver und Sicherheit</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 14px;">Hosting</span><br>
              <span style="display: block;">Die von uns in Anspruch genommenen Hosting-Leistungen dienen der Zurverf??gungstellung der folgenden Leistungen: Infrastruktur- und Plattformdienstleistungen, Rechenkapazit??t, Speicherplatz und Datenbankdienste, Sicherheitsleistungen, technische Wartungsleistungen.</span><br>
              <span style="display: block;">??? Verarbeitete Daten: Bestandsdaten, Kontaktdaten, Inhaltsdaten, Vertragsdaten, Nutzungsdaten, Meta-/Kommunikationsdaten.</span><br>
              <span style="display: block;">??? Besondere Kategorien personenbezogener Daten: nein.</span><br>
              <span style="display: block;">??? Verarbeitungsgrundlage: Art. 6 Abs. 1 lit. f DSGVO.</span><br>
              <span style="display: block;">??? Betroffene: Kunden, Interessenten, Besucher des Onlineangebotes.</span><br>
              <span style="display: block;">??? Besondere Schutzma??nahmen: Auftragsverarbeitungsvertrag.</span><br>
              <span style="display: block;">??? Verarbeitung in Drittl??ndern: nein.</span><br>
              <span style="display: block;">??? Offenlegung extern und Zweck: Name, Adresse, Webhoster.</span><br>
              <span style="display: block;">??? Erforderlichkeit / Interesse an Verarbeitung: Sicherheit, betriebswirtschaftliche Interessen.</span><br>
              <span style="display: block;">??? L??schung der Daten: Die Aufbewahrung von Daten der Interessenten entspricht den Angaben zur L??schung der Daten im Rahmen der o.a. Verarbeitungst??tigkeit ???Vergleichs- und Vermittlungsleistungen???.</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 14px;">Server-Logs</span><br>
              <span style="display: block;">Der Server auf dem sich dieses Onlineangebot befindet, erhebt bei jedem Zugriff auf das Onlineangebot sog. Logfiles, in denen Daten der Nutzer gespeichert werden. Die Daten dienen zum einen der statistischen Analyse zur Aufrechterhaltung und Optimierung des Serverbetriebs und zum anderen zur Sicherheitszwecken, z.B. um potentielle unbefugte Zugriffsversuche zu erkennen.</span><br>
              <span style="display: block;">??? Verarbeitete Daten: Nutzungsdaten und Metadaten (Name der abgerufenen Webseite, Datei, Datum und Uhrzeit des Abrufs, ??bertragene Datenmenge, Meldung ??ber erfolgreichen Abruf, Browsertyp nebst Version, das Betriebssystem des Nutzers, Referrer URL (die zuvor besuchte Seite), IP-Adresse und der anfragende Provider).</span><br>
              <span style="display: block;">??? Besondere Kategorien personenbezogener Daten: nein.</span><br>
              <span style="display: block;">??? Verarbeitungsgrundlage: Art. 6 Abs. 1 lit. f DSGVO.</span><br>
              <span style="display: block;">??? Betroffene: Kunden, Interessenten, Besucher des Onlineangebotes.</span><br>
              <span style="display: block;">??? Zweck der Verarbeitung: Optimierung Serverbetrieb und Sicherheitsmonitoring.</span><br>
              <span style="display: block;">??? Erforderlichkeit / Interesse an Verarbeitung: Sicherheit, betriebswirtschaftliche Interessen.</span><br>
              <span style="display: block;">??? Verarbeitung in Drittl??ndern: nein.</span><br>
              <span style="display: block;">??? L??schung von Daten: Nach 7 Tagen ab Erhebung.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Eingebettete Inhalte und Funktionen</span><br>
              <span style="display: block;">In diesem Abschnitt informieren wir Sie, welche Inhalte, Software oder Funktionen (kurz ???Inhalte???) anderer Anbieter wir im Rahmen unseres Onlineangebotes auf Grundlage des Art. 6 Abs. 1 lit. f DSGVO einbetten (sog. ???Embedding???). Die Einbettung erfolgt, um unser Onlineangebot f??r unsere Nutzer interessanter zu gestalten oder aus rechtlichen Gr??nden, um z.B. Videos oder Social-Media-Beitr??ge ??berhaupt innerhalb unseres Onlineangebotes pr??sentieren zu k??nnen. Die Einbettung kann ebenfalls dazu dienen, um die Geschwindigkeit oder Sicherheit des Onlineangebotes zu verbessern, z.B. wenn Softwareelemente oder Schriftarten von anderen Quellen bezogen werden. Zu den verarbeiteten Daten geh??ren in allen F??llen die Nutzungs- und die Metadaten der Nutzer und auch die zur Einbettung der Inhalte notwendigerweise an den Anbieter ??bermittelte IP-Adresse, zu den betroffenen Personen die Besucher unseres Onlineangebotes. Zu den Kategorien Betroffener geh??ren die Nutzer unseres Onlineangebotes, Kunden und Interessenten. Weitere Erl??uterungen sind in den Begriffsdefinitionen, insbesondere zu den Funktionsweisen und Schutzma??nahmen, sind am Ende dieser Datenschutzerkl??rung zu finden. Die L??schung der Daten bestimmt sich nach den Datenschutzbedingungen der Anbieter der eingebetteten Inhalte.</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 14px;">Dienste und Inhalte von Google</span><br>
              <span style="display: block;">Wir setzen die folgenden Dienste und Inhalte des Anbieters Google ein: YouTube ??? Videos; Google Maps ??? Landkarten; Google Fonts ??? Schriftarten; Google ??? Recaptcha (Erkennung von Bots bei Formulareingaben).</span><br>
              <span style="display: block;">??? Verarbeitete Daten: Nutzungsdaten, Metadaten.</span><br>
              <span style="display: block;">??? Art, Umfang, Funktionsweise der Verarbeitung: Permanent-Cookies, Third-Party-Cookies, interessenbasiertes Marketing, Tracking.</span><br>
              <span style="display: block;">??? Besondere Schutzma??nahmen: Pseudonymisierung, Opt-Out.</span><br>
              <span style="display: block;">??? Opt-Out: http://tools.google.com/dlpage/gaoptout?hl=de, https://adssettings.google.com/.</span><br>
              <span style="display: block;">??? Offenlegung extern: Google LLC, 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA.</span><br>
              <span style="display: block;">??? Datenschutzerkl??rung: https://adssettings.google.com/authenticated.</span><br>
              <span style="display: block;">??? Verarbeitung in Drittl??ndern: USA.</span><br>
              <span style="display: block;">??? Garantie bei Verarbeitung in Drittl??ndern: Privacy Shield https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;status=Active.</span><br>
              <span style="display: block;">??? L??schung der Daten: Die Daten werden entsprechend den Bestimmungen von Google gel??scht.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Marketing</span><br>
              <span style="display: block;">In diesem Abschnitt erhalten Sie Informationen zu der von uns zu Zwecken der Optimierung unserer Leistungen des Marketings und der Marktforschung durchgef??hrten Datenverarbeitung.</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 14px;">Informationsversand durch personalisierten Newsletter</span><br>
              <span style="display: block;">Wir versenden Newsletter, E-Mails und weitere elektronische Benachrichtigungen mit werblichen Informationen (nachfolgend ???Newsletter???) nur mit der Einwilligung der Empf??nger oder einer gesetzlichen Erlaubnis. Die Daten der Abonnenten werden protokolliert, da wir dazu verpflichtet sind, Anmeldungen nachzuweisen. Sofern im Rahmen der Anmeldung zum Newsletter dessen Inhalte nicht ausdr??cklich beschrieben werden, enthalten die Newsletter Informationen betreffend unseres Unternehmens sowie unserer Leistungen und Angebote, insbesondere f??r Leistungsbereiche, die der Empf??nger als zu seinen Interessen geh??rend erkl??rt hat (z.B. wenn ein Nutzer im Rahmen eines Einwilligungsvorgangs ein Interesse f??r K??chen darlegt). Nicht zu werblichen Informationen geh??ren dagegen Benachrichtigungen, die im Rahmen von Vertrags- oder Gesch??ftsbeziehungen versendet werden. Dazu geh??rt z.B. der Versand von Servicemails mit angefragten Vergleichsangeboten oder vergleichbaren Leistungen, technischen oder organisatorischen Hinweisen im Rahmen unserer Leistungserbringung, Hinweisen zu technischen und rechtlichen ??nderungen, R??ckfragen zu Auftr??gen, etc. Sofern wir Ihre Einwilligung zu personalisierten Informationen erhalten haben, werden wir Ihr Nutzerverhalten auf unserer Internetpr??senz sowie innerhalb der von uns versendeten Newsletter auswerten und Ihrem bei uns gef??hrtem Nutzerprofil zuordnen. Wir speichern weiterhin Informationen ??ber verwendete Devices, ??ffnungs-, Klick- &amp; Leseverhalten in E-Mails, sowie Themen-Bereiche, die innerhalb der Internetpr??senz besucht worden sind. Diese Informationen werden aus technischen Gr??nden personenbezogen pro Nutzer gespeichert, jedoch nicht genutzt um einzelne Nutzer zu beobachten, sondern um z.B. Inhalte und Angebote auf die Nutzer anzupassen. Angaben die wir zus??tzlich zu der E-Mailadresse erheben sollten (z.B. Name), dienen der pers??nlichen Ansprache der Nutzer oder Anpassung der Inhalte der Newsletter auf die Nutzer.</span><br>
              <span style="display: block;">??? Inhalt des Newsletters: Wie im Anmeldeformular angegeben, ansonsten Informationen zu unseren Leistungen und unserem Unternehmen.</span><br>
              <span style="display: block;">??? Verarbeitete Daten: Bestandsdaten (E-Mailadresse), Nutzungsdaten (Anmeldezeitpunkt, Best??tigungszeitpunkt Double-Opt-In, IP-Adresse, ??ffnung der E-Mail, Zeitpunkt und Ort, Zeitpunkt und Klick auf einen Link im Newsletter).</span><br>
              <span style="display: block;">??? Besondere Kategorien personenbezogener Daten: nein</span><br>
              <span style="display: block;">??? Verarbeitungsgrundlagen: Art. 6 Abs. 1 lit. a, Art. 7 DSGVO und ?? 7 Abs. 2 Nr. 3 UWG, Abs. 3 (Versand &amp; Erfolgsmessung), Art. 6 Abs. 1 lit. c i.V.m. Art. 7 Abs. 1 DSGVO (Protokollierung, Erfolgsmessung, falls kein Teil der Einwilligung)</span><br>
              <span style="display: block;">??? Betroffene: E-Mail-Empf??nger</span><br>
              <span style="display: block;">??? Zweck der Verarbeitung: Newsletterversand, Optimierung, Nachweis Einwilligung.</span><br>
              <span style="display: block;">??? Art, Umfang, Funktionsweise der Verarbeitung: Web-Beacon.</span><br>
              <span style="display: block;">??? Erforderlichkeit / Interesse an Verarbeitung: Nur die E-Mailangabe ist f??r den Versand erforderlich, die anderen Angaben sind freiwillig und dienen der Personalisierung und Optimierung der Inhalte anhand der Interessen der Nutzer; die Pflicht zum Nachweis der Einwilligung ist der Grund f??r die Protokollierung; Die Erfolgsmessung erfolgt bei Nutzern, deren Einwilligung die Erfolgsmessung umfasst, auf Grundlage der Einwilligung und sonst auf Grundlage berechtigter Interessen an der Optimierung der Inhalte f??r die Nutzer und auf Grundlage betriebswirtschaftlicher Interessen</span><br>
              <span style="display: block;">??? Opt-Out: Ein K??ndigungslink steht in jedem Newsletter.</span><br>
              <span style="display: block;">??? Offenlegung extern und Zweck: ???Mailchimp???, Rocket Science Group, LLC, 675 Ponce De Leon Ave NE #5000, Atlanta, GA 30308, USA, Versand von Newslettern, Sicherheit und Optimierung der Versanddienstleistungen von Mailchimp.</span><br>
              <span style="display: block;">??? Datenschutzerkl??rung: https://mailchimp.com/legal/privacy/.</span><br>
              <span style="display: block;">??? Besondere Schutzma??nahmen: Auftragsverarbeitungsvertrag mit Mailchimp.</span><br>
              <span style="display: block;">??? Verarbeitung in Drittl??ndern: USA.</span><br>
              <span style="display: block;">??? Garantie bei Verarbeitung in Drittl??ndern: Privacy Shield, https://www.privacyshield.gov/participant?id=a2zt0000000TO6hAAG&amp;status=Active.</span><br>
              <span style="display: block;">??? L??schung der Daten:<br>
                Wir k??nnen die ausgetragenen E-Mailadressen bis zu drei Jahren auf Grundlage unserer berechtigten Interessen speichern bevor wir sie f??r Zwecke des Newsletterversandes l??schen, um eine ehemals gegebene Einwilligung nachweisen zu k??nnen. Die Verarbeitung dieser Daten wird auf den Zweck einer m??glichen Abwehr von Anspr??chen beschr??nkt. Ein individueller L??schungsantrag ist jederzeit m??glich, sofern zugleich das ehemalige Bestehen einer Einwilligung best??tigt wird. Ihre Einwilligung zur Speicherung der Daten, der E-Mail-Adresse sowie deren Nutzung zum Versand von Newslettern k??nnen Nutzer jederzeit widerrufen. Der Widerruf kann ??ber einen Link in den Newslettern, mit der Abmeldefunktion auf unserer Website oder einer E-Mail an: info@pflegeauskunft24.de erfolgen.<br>
              </span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 14px;">Kommunikation via Post, E-Mail, Fax oder Telefon</span><br>
              <span style="display: block;">Versand von Informationsmaterial, telefonische Kontaktaufnahme zur Abwicklung von Vergleichs- und Vermittlungsvertr??gen.</span><br>
              <span style="display: block;">??? Verarbeitete Daten: Bestandsdaten, Kontaktdaten, Vertragsdaten, Inhaltsdaten.</span><br>
              <span style="display: block;">??? Besondere Kategorien personenbezogener Daten: nein, au??er Gesundheitsdaten, die Teil der Vergleichs- und Vermittlungsleistung sind.</span><br>
              <span style="display: block;">??? Verarbeitungsgrundlagen: Art. 6 Abs. 1 lit. a, Art. 7 DSGVO bei Einwilligung, Art. 6 Abs. 1 lit. b DSGVO bei Kontaktaufnahme im Rahmen der Vertragsabwicklung, Art. 6 Abs. 1 lit. f DSGVO in Verbindung mit gesetzlichen Vorgaben f??r werbliche Kommunikationen.</span><br>
              <span style="display: block;">??? Betroffene: Interessenten, Gesch??ftspartner.</span><br>
              <span style="display: block;">??? Zweck der Verarbeitung: Werbliche Kommunikation.</span><br>
              <span style="display: block;">??? Art, Umfang, Funktionsweise der Verarbeitung: Die Kontaktaufnahme erfolgt nur mit Einwilligung der Kontaktpartner oder im Rahmen der gesetzlichen Erlaubnisse.</span><br>
              <span style="display: block;">??? Erforderlichkeit / Interesse an Verarbeitung: Information und betriebswirtschaftliche Interessen.</span><br>
              <span style="display: block;">??? Offenlegung extern und Zweck: Nein.</span><br>
              <span style="display: block;">??? Verarbeitung in Drittl??ndern: Nein.</span><br>
              <span style="display: block;">??? L??schung der Daten: Mit Widerspruch/ Widerruf oder Wegfall der Berechtigungsgrundlagen der Kontaktaufnahme; die Aufbewahrung von Daten der Interessenten entspricht den Angaben zur L??schung der Daten im Rahmen der o.a. Verarbeitungst??tigkeit ???Vergleichs- und Vermittlungsleistungen???.</span><br>
              <span style="display: block; font-size: 16px;" class="font-weight-bold">Optimierung und Sicherheit</span><br>
              <span style="display: block;">In diesem Abschnitt erhalten Sie Informationen zu der von uns zu Zwecken der Optimierung unseres Onlineangebotes durchgef??hrten Datenverarbeitung. Sie dient uns vor allem dazu, die Nutzerfreundlichkeit und die Funktionsf??higkeit unseres Onlineangebotes zu verbessern.</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 14px;">Google Tag Manager</span><br>
              <span style="display: block;">Google Tag Manager ist eine L??sung, mit der wir sog. Website-Tags ??ber eine Oberfl??che verwalten k??nnen (und so z.B. Google Analytics sowie andere Google-Marketing-Dienste in unser Onlineangebot einbinden). Der Tag Manager selbst (welches die Tags implementiert) verarbeitet keine personenbezogenen Daten der Nutzer. Im Hinblick auf die Verarbeitung der personenbezogenen Daten der Nutzer wird auf die folgenden Angaben zu den Google-Diensten verwiesen. Nutzungsrichtlinien: https://www.google.com/intl/de/tagmanager/use-policy.html.</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 14px;">Google Analytics</span><br>
              <span style="display: block;">Wir setzen Google Analytics zu Zwecken der Reichweitenmessung und Zielgruppenbildung ein.</span><br>
              <span style="display: block;">??? Verarbeitete Daten: Nutzungsdaten, Metadaten, Kunden-ID bei uns (Google erh??lt die Kunden-ID nur als ein pseudonymes Datum ohne die dazu geh??renden Bestandsdaten, wie Namen, Adresse oder E-Mail des Kunden).</span><br>
              <span style="display: block;">??? Art, Umfang, Funktionsweise der Verarbeitung: Permanent-Cookies, Third-Party-Cookies, Tracking, interessenbasiertes Marketing, Profiling, Custom Audiences, Remarketing.</span><br>
              <span style="display: block;">??? Besondere Schutzma??nahmen: Pseudonymisierung, IP-Masking, Abschluss Auftragsverarbeitungsvertrag, Opt-Out.</span><br>
              <span style="display: block;">??? Opt-Out: http://tools.google.com/dlpage/gaoptout?hl=de (Browser-Add-On Google Analytics), https://adssettings.google.com/ (Einstellung f??r Werbeanzeigen).</span><br>
              <span style="display: block;">??? Offenlegung extern: Google LLC, 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA.</span><br>
              <span style="display: block;">??? Datenschutzerkl??rung: https://adssettings.google.com/authenticated.</span><br>
              <span style="display: block;">??? Verarbeitung in Drittl??ndern: USA.</span><br>
              <span style="display: block;">??? Garantie bei Verarbeitung in Drittl??ndern: Privacy Shield https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;status=Active.</span><br>
              <span style="display: block;">??? L??schung der Daten: 14 Monate.</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 14px;">Google AdWords</span><br>
              <span style="display: block;">Wir setzen Google AdWords ein, um den Erfolg der von uns bei Google geschalteten Werbeanzeigen zu messen.</span><br>
              <span style="display: block;">??? Verarbeitete Daten: Nutzungsdaten, Metadaten, Kunden-ID bei uns (Google erh??lt die Kunden-ID nur als ein pseudonymes Datum ohne die dazu geh??renden Bestandsdaten, wie Namen, Adresse oder E-Mail des Kunden).</span><br>
              <span style="display: block;">??? Art, Umfang, Funktionsweise der Verarbeitung: Permanent-Cookies, Third-Party-Cookies, Tracking, Conversion-Messung, Interessensbasiertes Marketing, Profiling.</span><br>
              <span style="display: block;">??? Besondere Schutzma??nahmen: Pseudonymisierung, IP-Masking, Abschluss Auftragsverarbeitungsvertrag, Opt-Out.</span><br>
              <span style="display: block;">??? Opt-Out: http://tools.google.com/dlpage/gaoptout?hl=de (Browser-Add-On Google Analytics), https://adssettings.google.com/ (Einstellung f??r Werbeanzeigen).</span><br>
              <span style="display: block;">??? Offenlegung extern: Google LLC, 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA.</span><br>
              <span style="display: block;">??? Datenschutzerkl??rung: https://adssettings.google.com/authenticated.</span><br>
              <span style="display: block;">??? Verarbeitung in Drittl??ndern: USA.</span><br>
              <span style="display: block;">??? Garantie bei Verarbeitung in Drittl??ndern: Privacy Shield https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;status=Active.</span><br>
              <span style="display: block;">??? L??schung der Daten: 14 Monate.</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 14px;">Facebook Pixel</span><br>
              <span style="display: block;">Wir setzen das Facebook-Pixel zur Zielgruppenbildung und Erfolgsmessung der von uns bei Facebook geschalteten Werbeanzeigen ein.</span><br>
              <span style="display: block;">??? Verarbeitete Daten: Nutzungsdaten, Metadaten; sofern Nutzer bei Facebook registriert sind, werden die Daten mit deren Facebook-Profilen und zu diesen geh??renden Daten (insbesondere Bestandsdaten) verkn??pft.</span><br>
              <span style="display: block;">??? Art, Umfang, Funktionsweise der Verarbeitung: Permanent-Cookies, Third-Party-Cookies, Tracking, Conversion-Messung, Interessensbasiertes Marketing, Profiling, Custom Audiences from Website.</span><br>
              <span style="display: block;">??? Besondere Schutzma??nahmen: Verschl??sselte Kommunikation zwischen Facebook und unserem Onlineangebot.</span><br>
              <span style="display: block;">??? Opt-Out: https://www.facebook.com/settings?tab=ads, http://www.youronlinechoices.com/uk/your-ad-choices/ (EU), http://www.aboutads.info/choices (US).</span><br>
              <span style="display: block;">??? Offenlegung extern: Facebook Inc., 180 Jefferson Dr, Menlo Park, CA 94025, USA.</span><br>
              <span style="display: block;">??? Datenschutzerkl??rung: https://www.facebook.com/policy.php. </span><br>
              <span style="display: block;">??? Verarbeitung in Drittl??ndern: USA.</span><br>
              <span style="display: block;">??? Garantie bei Verarbeitung in Drittl??ndern: Privacy Shield https://www.privacyshield.gov/participant?id=a2zt000000001L5AAI&amp;status=Active.</span><br>
              <span style="display: block;">??? L??schung der Daten: Die L??schung der Daten wird durch Facebook vorgenommen und erfolgt, wenn die Daten der Kunden im Rahmen der K??ndigung gel??scht werden.</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 14px;">Microsoft Bing Ads</span><br>
              <span style="display: block;">Wir setzen das Conversion- und Tracking-Werkzeug ???Bing Ads??? ein, um den Erfolg der von uns bei Google geschalteten Werbeanzeigen zu messen.</span><br>
              <span style="display: block;">??? Verarbeitete Daten: Nutzungsdaten, Metadaten.</span><br>
              <span style="display: block;">??? Art, Umfang, Funktionsweise der Verarbeitung: Permanent-Cookies, Third-Party-Cookies, Tracking, Conversion-Messung, Profiling.</span><br>
              <span style="display: block;">??? Besondere Schutzma??nahmen: IP-Masking, Opt-Out.</span><br>
              <span style="display: block;">??? Opt-Out: http://choice.microsoft.com/de-DE/opt-out.</span><br>
              <span style="display: block;">??? Offenlegung extern: Microsoft Corporation, One Microsoft Way, Redmond, WA 98052-6399, USA.</span><br>
              <span style="display: block;">??? Datenschutzerkl??rung: http://choice.microsoft.com/de-DE/opt-out.</span><br>
              <span style="display: block;">??? Verarbeitung in Drittl??ndern: USA.</span><br>
              <span style="display: block;">??? Garantie bei Verarbeitung in Drittl??ndern: Privacy Shield https://www.privacyshield.gov/participant?id=a2zt0000000KzNaAAK&amp;status=Active.</span><br>
              <span style="display: block;">??? L??schung der Daten: 6 Monate.</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 18px;">Abschnitt IV ??? Begriffsdefinitionen</span><br>
              <span style="display: block;">In diesem Abschnitt erhalten Sie eine ??bersicht der in dieser Datenschutzerkl??rung verwendeten Begrifflichkeiten. Viele der Begriffe sind dem Gesetz entnommen und vor allem im Art. 4 DSGVO definiert. Die gesetzlichen Definitionen sind verbindlich. Die nachfolgenden Erl??uterungen sollen dagegen vor allem dem Verst??ndnis dienen. Die Begriffe sind alphabetisch sortiert.</span><br>
              <span style="display: block;">??? A/B Tests ??? A/B Tests dienen der Verbesserung der Benutzerfreundlichkeit und Performance von Onlineangeboten. Dabei werden Nutzer z.B. unterschiedliche Versionen einer Website oder ihrer Elemente, wie Eingabeformulare, dargestellt, auf denen sich die Platzierung der Inhalte oder Beschriftungen der Navigationselemente unterscheiden k??nnen. Anschlie??end kann anhand des Verhaltens der Nutzer, z.B. l??ngeres Verweilen auf der Webseite oder h??ufigerer Interaktion mit den Elementen, festgestellt werden welche dieser Webseiten oder Elemente eher den Bed??rfnissen der Nutzer entsprechen.</span><br>
              <span style="display: block;">??? Affiliate-Links ??? Bei ???Affiliate-Links??? handelt es sich um Links mit deren Hilfe die verlinkenden Webseiten Nutzer zu Webseiten mit Produkt- oder sonstigen Angeboten verweisen. Die Betreiber der jeweils verlinkenden Webseiten k??nnen eine Provision erhalten, wenn Nutzer den Affiliate-Links folgen und anschlie??end die Angebote wahrnehmen. Hierzu ist es erforderlich, dass die Anbieter nachverfolgen k??nnen, ob Nutzer, die sich f??r bestimmte Angebote interessieren, diese anschlie??end auf die Veranlassung der Affiliate-Links wahrnehmen. Daher ist es f??r die Funktionsf??higkeit von Affiliate-Links erforderlich, dass sie um bestimmte Werte erg??nzt, die ein Bestandteil des Links werden oder anderweitig, z.B. in einem Cookie, gespeichert werden. Zu den Werten geh??ren insbesondere die Ausgangswebseite (Referrer), Zeitpunkt, eine Online-Kennung der Betreiber der Webseite, auf der sich der Affiliate-Link befand, eine Online-Kennung des jeweiligen Angebotes, eine Online-Kennung des Nutzers, als auch Tracking-spezifische Werte wie, z.B. Werbemittel-ID, Partner-ID und Kategorisierungen.</span><br>
              <span style="display: block;">??? After-Sales ??? Bei ???After Sales??? handelt es sich um Marketingverfahren, bei denen z.B. Kunden eines Onlineshops Werbeangebote anderer Anbieter pr??sentiert werden (die sich im Regelfall anhand des in dem Onlineshop erworbenen Leistungen oder Produkte orientieren). Im ??brigen entspricht die Funktionsweise von After-Sales der Funktionsweise von Affiliate-Links.</span><br>
              <span style="display: block;">??? Aggregierte Daten ??? Aggregierte Daten sind zusammengefasste Daten, die keinen R??ckschluss auf eine Person erlauben und daher nicht personenbezogen sind. Zum Beispiel k??nnen die Besuchszeiten auf einer Website als Durchschnittswerte gespeichert werden.</span><br>
              <span style="display: block;">??? Anonyme Daten ??? Anonymit??t liegt vor, wenn eine Person anhand eines Datums durch den Verantwortlichen mit den ihm zur Verf??gung stehenden Mitteln nicht zumindest identifizierbar ist. Insbesondere k??nnen aggregierte Daten anonym sein.</span><br>
              <span style="display: block;">??? Auftragsverarbeitung/-Auftragsverarbeiter ??? Als ???Auftragsverarbeiter??? wird eine nat??rliche oder juristische Person, Beh??rde, Einrichtung oder andere Stelle, die personenbezogene Daten im Auftrag des Verantwortlichen verarbeitet, bezeichnet.</span><br>
              <span style="display: block;">??? Besondere Kategorien personenbezogener Daten ??? Als solche werden Daten bezeichnet, aus denen die rassische und ethnische Herkunft, politische Meinungen, religi??se oder weltanschauliche ??berzeugungen oder die Gewerkschaftszugeh??rigkeit hervorgehen, sowie genetische Daten, biometrische Daten zur eindeutigen Identifizierung einer nat??rlichen Person, Gesundheitsdaten oder Daten zum Sexualleben oder der sexuellen Orientierung einer nat??rlichen Person.</span><br>
              <span style="display: block;">??? Betroffene Person/ Betroffene ??? Siehe ???personenbezogenes Datum???.</span><br>
              <span style="display: block;">??? Conversion ??? ???Conversion ???, bzw. ???Conversion Messung??? bezeichnet ein Verfahren, mit dem die Wirksamkeit von Marketingma??nahmen festgestellt werden kann. Dazu wird im Regelfall ein Cookie auf den Ger??ten der Nutzer innerhalb der Websites, auf denen die Marketingma??nahmen erfolgen gespeichert und dann erneut auf der Zielwebsite abgerufen (z.B. k??nnen wir so nachvollziehen, ob die von uns auf anderen Webseiten geschalteten Anzeigen erfolgreich waren).</span><br>
              <span style="display: block;">??? Cookies ??? Als ???Cookies??? werden kleine Dateien bezeichnet, die auf Rechnern der Nutzer gespeichert werden. Innerhalb der Cookies k??nnen unterschiedliche Angaben gespeichert werden. Ein Cookie dient prim??r dazu, die Angaben zu einem Nutzer (bzw. dem Ger??t auf dem das Cookie gespeichert ist) w??hrend oder auch nach seinem Besuch innerhalb eines Onlineangebotes zu speichern. Als tempor??re Cookies, bzw. ???Session-Cookies??? oder ???transiente Cookies???, werden Cookies bezeichnet, die gel??scht werden, nachdem ein Nutzer ein Onlineangebot verl??sst und seinen Browser schlie??t. In einem solchen Cookie kann z.B. der Inhalt eines Warenkorbs in einem Onlineshop oder ein Login-Status innerhalb einer Community gespeichert werden. Als ???permanent??? oder ???persistent??? werden Cookies bezeichnet, die auch nach dem Schlie??en des Browsers gespeichert bleiben. So kann z.B. der Login-Status in einer Community gespeichert werden, wenn die Nutzer diese nach mehreren Tagen aufsuchen. Ebenso k??nnen in einem solchen Cookie die Interessen der Nutzer gespeichert werden, die f??r Reichweitenmessung oder Marketingzwecke (s. z.B. Remarketing) verwendet werden. Als ???Third-Party-Cookie??? werden Cookies von anderen Anbietern als dem Verantwortlichen, der das Onlineangebot betreibt, angeboten werden (andernfalls, wenn es nur dessen Cookies sind spricht man von ???First-Party Cookies???).</span><br>
              <span style="display: block;">??? Custom Audiences ??? Von ???Custom Audiences??? (bzw. ???benutzerdefinierten Zielgruppen???) spricht man, wenn Zielgruppen f??r Werbezwecke, z.B. Einblendung von Werbeanzeigen bestimmt werden. So kann z.B. anhand des Interesses eines Nutzers an bestimmten Produkten oder Themen im Internet geschlussfolgert werden, dass dieser Nutzer sich f??r Werbeanzeigen f??r ??hnliche Produkte oder den Onlineshop, in dem er die Produkte betrachtet hat, interessiert. Von ???Lookalike Audiences??? (bzw. ??hnlichen Zielgruppen) spricht man wiederum, wenn die als geeignet eingesch??tzten Inhalte Nutzern angezeigt werden, deren Profile, bzw. Interessen mutma??lich den Nutzern zu denen die Profile gebildet wurden, entsprechen. Zur Zwecken der Bildung von Custom Audiences und Lookalike Audiences werden im Regelfall Cookies und Web-Beacons eingesetzt. ???Custom Audiences from Website??? bedeutet, dass die Zielgruppen anhand der Besucher der eigenen Webseite gebildet werden. ???Custom Audiences from File??? bedeutet, dass z.B. eine Liste mit E-Mailadressen bei dem jeweiligen Werbenetzwerk oder Plattform hochgeladen werden, um die Zielgruppen zu bilden.</span><br>
              <span style="display: block;">??? Demografische Daten ??? Demografische Daten sind allgemeine Informationen ??ber Personengruppen oder Personen, z.B. Merkmale wie Alter, Geschlecht, Wohnort und soziale Merkmale wie Beruf, Familienstand oder Einkommen. Demografische Daten werden im Rahmen der Reichweitenmessung und im Online-Marketing f??r Zwecke des interessenbasierten Marketings erhoben oder f??r betriebswirtschaftliche Analysen, die z.B. zur Bestimmung der Zielgruppen verwendet werden.</span><br>
              <span style="display: block;">??? Dritte/r ??? Als ???Dritter??? wird eine nat??rliche oder juristische Person, Beh??rde, Einrichtung oder andere Stelle, au??er der betroffenen Person, dem Verantwortlichen, dem Auftragsverarbeiter und den Personen, die unter der unmittelbaren Verantwortung des Verantwortlichen oder des Auftragsverarbeiters befugt sind, die personenbezogenen Daten zu verarbeiten, bezeichnet.</span><br>
              <span style="display: block;">??? Drittland ??? Als Drittl??nder sind Staaten zu verstehen, in denen die DSGVO kein unmittelbar geltendes Recht ist, d.h. grunds??tzlich Staaten, die nicht der Europ??ischen Union (EU) oder dem Europ??ischen Wirtschaftsraum (EWR) angeh??ren.</span><br>
              <span style="display: block;">??? Einwilligung ??? Eine ???Einwilligung??? der betroffenen Person ist jede freiwillig f??r den bestimmten Fall, in informierter Weise und unmissverst??ndlich abgegebene Willensbekundung in Form einer Erkl??rung oder einer sonstigen eindeutigen best??tigenden Handlung, mit der die betroffene Person zu verstehen gibt, dass sie mit der Verarbeitung der sie betreffenden personenbezogenen Daten einverstanden ist.</span><br>
              <span style="display: block;">??? Einbettung ??? Siehe ???Embedding???.</span><br>
              <span style="display: block;">??? Embedding ??? Beim Embedding (auch ???Einbettung???) werden fremde Inhalte oder Software-Funktionen (siehe Plugins) in die eigene Onlinepr??senz so eingebunden, dass sie auf dieser Onlinepr??senz dargestellt, bzw. ausgef??hrt werden. Dabei wird keine Kopie des Inhalts erstellt, da er von dem urspr??nglichen Server aufgerufen wird (z.B. Videos, Bilder, Beitr??ge auf sozialen Netzwerken, Widgets mit Bewertungen). Beim Embedding ist es technisch notwendig, dass der Anbieter der Inhalte die IP-Adresse der Nutzer erhebt, um den eingebetteten Inhalt im Browser der Nutzer auszugeben. Ferner k??nnen durch den Inhaltsanbieter z.B. Cookies auf den Ger??ten der Nutzer gespeichert werden.</span><br>
              <span style="display: block;">??? Erweiterter Abgleich ??? Der ???erweiterte Abgleich??? ist eine Option des Facebook-Pixels, die bedeutet, dass Bestandsdaten wie Telefonnummern, E-Mailadressen oder Facebook-IDs der Nutzer zur Bildung von Zielgruppen f??r Facebook-Ads an Facebook verschl??sselt ??bermittelt und nur zu diesem Zweck verwendet werden.</span><br>
              <span style="display: block;">??? Fehler-Tracking ??? Beim Fehlertracking wird z.B. fehlerhaft ausgef??hrter Programmcode erkannt, um diesen beseitigen und so die Funktionsf??higkeit und Sicherheit von Onlineangeboten zu gew??hrleisten.</span><br>
              <span style="display: block;">??? First-Party Cookies ??? Siehe ???Cookies???.</span><br>
              <span style="display: block;">??? IP-Adresse ??? Die IP-Adresse (???IP??? steht f??r Internetprotokoll) ist eine Zahlenfolge anhand der mit dem Internet verbundene Ger??te identifiziert werden k??nnen. Wenn ein Nutzer eine Website auf einem Server aufruft, dann teilt er dem Server seine IP-Adresse mit. Der Server wei?? dann, dass er die Datenpakete mit dem Inhalt der Website an diese Adresse schicken muss.</span><br>
              <span style="display: block;">??? IP-Masking ??? Als ???IP-Masking??? wird eine Methode bezeichnet, bei der das letzte Oktett, d.h. die letzten beiden Zahlen einer IP-Adresse gel??scht werden, damit die IP-Adresse nicht mehr der eindeutigen Identifizierung einer Person dienen k??nnen. Daher ist das IP-Masking ein Mittel zur Pseudonymisierung von Verarbeitungsverfahren, insbesondere im Onlinemarketing.</span><br>
              <span style="display: block;">??? Interessenbasiertes Marketing bzw. Interessens und verhaltensbezogene Werbung ??? Von interessens- und/oder verhaltensbezogenen Werbung spricht man, wenn Profiling eingesetzt wird, um das potentielle Interesse von Nutzern an Werbeanzeigen zu bestimmen (englisch ???Online Behavioral Advertising???, kurz OBA). Zu diesen Zwecken werden im Regelfall Cookies und Web-Beacons eingesetzt.</span><br>
              <span style="display: block;">??? Lookalike Audiences ??? Siehe Custom Audiences.</span><br>
              <span style="display: block;">??? Opt-in ??? Der Begriff ???Opt-in??? bedeutet so viel wie Anmeldung. Wird eine Anmeldung (z.B. durch Eingabe einer E-Mailadresse in ein Onlineformular-Feld) durch die Zusendung einer Best??tigungsmail an den Inhaber der E-Mailadresse best??tigt, spricht man von einem Double-Opt-In (DOI).</span><br>
              <span style="display: block;">??? Opt-Out ??? Der Begriff Opt-Out bedeutet so viel wie Abmeldung und kann z.B. einen Widerspruch (z.B. gegen Tracking) oder eine K??ndigung (z.B. bei Newsletterabonnements) darstellen.</span><br>
              <span style="display: block;">??? Opt-Out-Cookie ??? Ein ???Opt-Out-Cookie??? ist eine kleine Datei (siehe ???Cookies???) die in Ihrem Browser gespeichert wird und in der vermerkt wird, dass Sie z.B. ein Tracking-Dienst Ihre Daten nicht verarbeiten soll. Das ???Opt-Out-Cookie??? gilt nur f??r den Browser, in dem es gespeichert wurde, also in dem Sie den Opt-Out-Link geklickt haben. Werden Cookies in diesem Browser gel??scht, dann m??ssen Sie den Opt-Out-Link erneut klicken. Ferner kann ein Opt-Out-Link nur auf die Domain beschr??nkt sein, auf der der Opt-Out-Link klickt wurde.</span><br>
              <span style="display: block;">??? Permanent Cookies ??? Siehe ???Cookies???.</span><br>
              <span style="display: block;">??? Personenbezogenes Datum/ Personenbezug ??? ???Personenbezogene Daten??? sind alle Informationen, die sich auf eine identifizierte oder identifizierbare nat??rliche Person (im Folgenden ???betroffene Person???) beziehen; als identifizierbar wird eine nat??rliche Person angesehen, die direkt oder indirekt, insbesondere mittels Zuordnung zu einer Kennung wie einem Namen, zu einer Kennnummer, zu Standortdaten, zu einer Online-Kennung (z.B. Cookie) oder zu einem oder mehreren besonderen Merkmalen identifiziert werden kann, die Ausdruck der physischen, physiologischen, genetischen, psychischen, wirtschaftlichen, kulturellen oder sozialen Identit??t dieser nat??rlichen Person sind.</span><br>
              <span style="display: block;">??? Plugins/ Social Plugins ??? Als Plugins (bzw. ???Social Plugins??? im Fall von sozialen Funktionen) werden fremde Software-Funktionen bezeichnet, die in das Onlineangebot eingebunden werden. Sie k??nnen z.B. der Ausgabe von Interaktionselementen (z.B., einer ???Gef??llt mir???-Schaltfl??che) oder von Inhalten (z.B. externe Kommentierfunktion oder Beitr??ge in sozialen Netzwerken) dienen.</span><br>
              <span style="display: block;">??? Profiling ??? Als ???Profiling??? wird jede Art der automatisierten Verarbeitung personenbezogener Daten bezeichnet, die darin besteht, dass diese personenbezogenen Daten verwendet werden, um bestimmte pers??nliche Aspekte, die sich auf eine nat??rliche Person beziehen (je nach Art des Profilings geh??ren dazu Informationen betreffend das Alter, das Geschlecht, Standortdaten und Bewegungsdaten, Interaktion mit Webseiten und deren Inhalten, Einkaufsverhalten, sozialen Interaktionen mit anderen Menschen), zu analysieren, zu bewerten oder um sie vorherzusagen (z.B. die Interessen an bestimmten Inhalten oder Produkten, das Klickverhalten auf einer Webseite oder den Aufenthaltsort). Zu Zwecken des Profilings werden h??ufig Cookies und Web-Beacons eingesetzt.</span><br>
              <span style="display: block;">??? Privacy Shield ??? Der EU-US Privacy Shield ist eine informelle Absprache auf dem Gebiet des Datenschutzrechts, die zwischen der Europ??ischen Union und den Vereinigten Staaten von Amerika ausgehandelt wurde. Sie besteht aus einer Reihe von Zusicherungen der US-amerikanischen Regierung und einem Beschluss der EU-Kommission. Unternehmen, die unter dem Privacy Shield zertifiziert sind, bietet eine Garantie, das europ??ische Datenschutzrecht einzuhalten (https://www.privacyshield.gov).</span><br>
              <span style="display: block;">??? Pseudonymisierung/ Pseudonyme ??? Als ???Pseudonymisierung??? wird die Verarbeitung personenbezogener Daten in einer Weise, dass die personenbezogenen Daten ohne Hinzuziehung zus??tzlicher Informationen nicht mehr einer spezifischen betroffenen Person zugeordnet werden k??nnen, sofern diese zus??tzlichen Informationen gesondert aufbewahrt werden es gew??hrleistet ist, dass die personenbezogenen Daten nicht einer identifizierten oder identifizierbaren nat??rlichen Person zugewiesen werden, bezeichnet; D.h. wenn in einem Cookie zwar ein genaues Interessensprofil des Computernutzers gespeichert wird (quasi ein ???Marketing-Avatar???), aber nicht der Name des Nutzers, dann werden seine Daten pseudonym verarbeitet. Werden sein Name, z.B. als Teil seiner E-Mailadresse oder seine IP-Adresse gespeichert, dann ist die Verarbeitung grunds??tzlich nicht mehr pseudonym.</span><br>
              <span style="display: block;">??? Reichweitenmessung ??? Die Reichweitenmessung dient der Auswertung der Besucherstr??me eines Onlineangebotes und kann deren Verhalten, Interessen oder demographische Informationen, wie z.B. das Alter oder das Geschlecht umfassen. Mit Hilfe der Reichweitenanalyse k??nnen z.B. Websiteinhaber erkennen, welche Arten von Menschen zu welcher Zeit ihre Webseite besuchen und f??r welche Inhalte sie sich interessieren. Dadurch k??nnen sie z.B. die Inhalte der Webseite besser auf die Bed??rfnisse ihrer Besucher optimieren. Zu Zwecken der Reichweitenanalyse werden h??ufig Cookies und Web-Beacons eingesetzt.</span><br>
              <span style="display: block;">??? Remarketing/ Retargeting ??? Vom ???Remarketing???, bzw. ???Retargeting??? spricht man, wenn z.B. zu Werbezwecken vermerkt wird, f??r welche Produkte sich ein Nutzer auf einer Webseite interessiert hat, um den Nutzer auf anderen Webseiten an diese Produkte, z.B. in Werbeanzeigen, zu erinnern. Zu Zwecken des Profilings werden im Regelfall Cookies eingesetzt.</span><br>
              <span style="display: block;">??? Session Cookies ??? Siehe ???Cookies???.</span><br>
              <span style="display: block;">??? Single-Sign-On ??? Als ???Single-Sign-On??? oder ???Single-Sign-On-Authentifizierung??? wird ein Verfahren bezeichnet, dass es den Nutzern erlaubt, sich mit Hilfe eines Nutzerkontos bei einem Onlineangebot, auch bei anderen Onlineangeboten anzumelden. Voraussetzung der Single-Sign-On-Authentifizierung ist, dass Nutzer bei dem jeweiligen Single-Sign-On-Anbieter registriert sind und die erforderlichen Zugangsdaten auf dem daf??r vorgesehenen Webformular eingeben. Die Authentifizierung erfolgt direkt bei dem jeweiligen Single-Sign-On-Anbieter. Im Rahmen einer solchen Authentifizierung erhalten wir eine Nutzer-ID mit der Information, dass der Nutzer unter dieser Nutzer-ID beim jeweiligen Single-Sign-On-Anbieter eingeloggt ist und eine f??r uns nicht weiter nutzbare ID (sog ???User Handle???). Ob wir weitere Daten ??bermittelt erhalten, h??ngt allein von dem genutzten Single-Sign-On-Verfahren ab, den gew??hlten Datenfreigaben im Rahmen der Authentifizierung und zudem, welche Daten Nutzer in den Privatsph??re- oder sonstigen Einstellungen des Nutzerkontos beim Single-Sign-On-Anbieter freigegeben haben. Es k??nnen je nach Single-Sign-On-Anbieter und der Wahl der Nutzer verschiedene Daten sein, in der Regel sind es die E-Mail-Adresse und der Benutzername. Das im Rahmen des Single-Sign-On-Verfahrens eingegebene Passwort ist f??r uns weder einsehbar, noch wird es von uns gespeichert. Nutzer werden gebeten zu beachten, dass deren, bei uns gespeicherte Angaben automatisch mit ihrem Nutzerkonto beim Single-Sign-On-Anbieter abgeglichen werden k??nnen, dies jedoch nicht immer m??glich ist oder tats??chlich erfolgt. ??ndern sich z.B. die E-Mailadressen der Nutzer, m??ssen Nutzer diese manuell in Ihrem Nutzerkonto bei uns ??ndern. Sollten Nutzer sich einmal entscheiden, die Verkn??pfung ihres Nutzerkontos beim Single-Sign-On-Anbieter nicht mehr f??r das Single-Sign-On-Verfahren nutzen zu wollen, m??ssen Sie diese Verbindung innerhalb ihres Nutzerkontos beim Single-Sign-On-Anbieter aufheben. M??chten Nutzer deren Daten bei uns l??schen, m??ssen sie Ihre Registrierung bei uns k??ndigen.</span><br>
              <span style="display: block;">??? Third-Party Cookies ??? Siehe ???Cookies???.</span><br>
              <span style="display: block;">??? Tracking ??? Vom ???Tracking??? spricht man, wenn das Verhalten von Nutzern ??ber mehrere Onlineangebote hinweg nachvollzogen werden kann, z.B. zu Zwecken des Remarketings. Die im Hinblick auf die genutzten Onlineangebote gesammelten Verhaltens- und Interessensinformationen werden als Nutzer-Profile in Cookies oder auf Servern der Marketingdienstleister (z.B. Google oder Facebook) gespeichert.</span><br>
              <span style="display: block;">??? Verantwortlicher ??? Als ???Verantwortlicher??? wird die nat??rliche oder juristische Person, Beh??rde, Einrichtung oder andere Stelle, die allein oder gemeinsam mit anderen ??ber die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten entscheidet, bezeichnet.</span><br>
              <span style="display: block;">??? Verarbeitung ??? Verarbeitung??? ist jeder mit oder ohne Hilfe automatisierter Verfahren ausgef??hrten Vorgang oder jede solche Vorgangsreihe im Zusammenhang mit personenbezogenen Daten. Der Begriff reicht weit und umfasst praktisch jeden Umgang mit Daten.</span><br>
              <span style="display: block;">??? Web-Beacons ??? Als ???Web Beacons??? (bzw. als ???Pixel???, ???Messpixel??? oder ???Z??hlpixel??? bezeichnet) werden kleine, pixelgro??e Grafiken bezeichnet, die in Webseiten oder HTML-E-Mails eingebunden werden. Derart erlauben Sie z.B. festzustellen, ob eine E-Mail ge??ffnet wurde (zumindest, wenn die Bilddarstellung in E-Mails aktiviert ist) oder wie oft eine Website von einem Nutzer aufgerufen wird.</span><br>
              <span style="display: block;">??? Widgets ??? Siehe Embedding.</span><br>
              <span style="display: block;">??? Z??hlpixel ??? Siehe Web-Beacons.</span><br>
              <span class="font-weight-bold" style="display: block;  font-size: 18px;">Abschnitt V ??? Weitere Informationen</span><br>
              <span style="display: block;">Bitte beachten Sie, dass diese Datenschutzerkl??rung ausschlie??lich f??r Internetseiten von Hitzegrad-Consulting gilt. Soweit unsere Seiten Links auf Internetseiten Dritter enthalten, gilt unsere Datenschutzerkl??rung nicht f??r diese. Bitte informieren Sie sich auf den jeweiligen Seiten ??ber die dort geltenden Datenschutzbestimmungen.</span><br>
              <span style="display: block;">Weitere Angaben zu uns finden Sie in unserem Impressum.</span><br>
              <span style="display: block;">Falls noch Fragen offen sind oder Sie Anregungen und W??nsche haben, k??nnen Sie sich jederzeit mit einer E-Mail an info@pflegeauskunft24.de wenden.</span></span></p>
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Schlie??en</button>
        </div>
      </div>
    </div>
  </div>




  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">AGB</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body h-mode">
          <p>
            <span style="display: block;">Hitzegrad Consulting UG (haftungsbeschr??nkt) bietet unter ???www.pflegeauskunft24.de??? ein Portal f??r Vermittlungs- und Vergleichsleistungen an und stellt bei Bedarf Kontakt zu geeigneten Anbietern her.<br>
            </span><br>
            <span style="display: block;">Die Nutzung unserer Website erfolgt auf der Grundlage folgender AGB. Das Einstellen von Anfragen ist f??r Interessenten grunds??tzlich kostenlos und unverbindlich. Sie k??nnen das zur Verf??gung gestellte Formular nutzen, um Ihre Anfrage abzusenden. Mit Absendung des Formulars entsteht keine Auftragspflicht und kein automatischer Kontakt zu Anbietern.</span><br>
            <span style="display: block;">Unbeschadet der vertragsgegenst??ndlichen Vermittlung von Anfragen und Angeboten, beh??lt sich Hitzegrad Consulting UG vor, Funktionalit??ten des Internetservices fortlaufend zu aktualisieren und anzupassen, ggf. auch einzuschr??nken.</span><br>
            <span style="display: block;">Die nachfolgenden Allgemeinen Gesch??ftsbedingungen (AGB) gelten f??r das Vertragsverh??ltnis zwischen Hitzegrad Consulting und den Nutzern. Die AGB gelten ferner f??r das Vertragsverh??ltnis zwischen den Interessenten und den Anbietern.</span><br>
            <span style="display: block;">Sofern sich eine Bestimmung dieser AGB oder der sonstigen vertraglichen Vereinbarungen zwischen dem Nutzer und Hitzegrad Consulting UG als unwirksam herausstellt oder aufgrund einer nachtr??glichen Entwicklung unwirksam wird, bleiben die ??brigen Bestimmungen davon unber??hrt. An die Stelle einer unwirksamen Bestimmung oder einer eventuellen Regelungsl??cke tritt das Gesetz.</span><br>
            <span class="font-weight-bold" style="display: block;  font-size: 19px;">Inhalte der AGB</span><br>
            <span style="display: block;">1. Geltungsbereich</span><br>
            <span style="display: block;">2. Stellen der Vergleichsanfrage</span><br>
            <span style="display: block;">3. Erhalt der Angebote</span><br>
            <span style="display: block;">4. Weitergabe von Daten</span><br>
            <span style="display: block;">5. Pflichten des Interessenten</span><br>
            <span style="display: block;">6. Gew??hrleistung und Leistungseinschr??nkungen</span><br>
            <span style="display: block;">7. Haftungsbeschr??nkung</span><br>
            <span style="display: block;">8. Datenschutz</span><br>
            <span style="display: block;">9. Schlussbestimmungen</span><br>
            <span class="font-weight-bold" style="display: block;  font-size: 18px;">Allgemeine Bestimmungen der AGB</span><br>
            <span style="display: block; font-size: 16px;" class="font-weight-bold">1. Geltungsbereich</span><br>
            <span style="display: block;">1.1. Es gelten ausschlie??lich die nachfolgenden Allgemeinen Gesch??ftsbedingungen (nachfolgend ???AGB???) in ihrer zum Zeitpunkt der Anfrage g??ltigen Fassung. Abweichende Bedingungen des Nutzers werden nicht anerkannt, es sei denn, Hitzegrad Consulting stimmt ihrer Geltung ausdr??cklich zu. Ein fehlender Widerspruch fremder AGB stellt keine Zustimmung dar.</span><br>
            <span style="display: block;">1.2. Verbraucher im Sinne dieser AGB und der Widerrufsbelehrung ist jede nat??rliche Person, die ein Rechtsgesch??ft zu einem Zwecke abschlie??t, der ??berwiegend weder ihrer gewerblichen noch ihrer selbstst??ndigen beruflichen T??tigkeit zugerechnet werden kann (?? 13 BGB). Unternehmer ist eine nat??rliche oder juristische Person oder eine rechtsf??hige Personengesellschaft, die bei Abschluss eines Rechtsgesch??fts in Aus??bung ihrer gewerblichen oder selbst??ndigen beruflichen T??tigkeit handelt (??14 I BGB).</span><br>
            <span style="display: block; font-size: 16px;" class="font-weight-bold">2. Stellen der Vergleichsanfrage</span><br>
            <span style="display: block;">2.1. Stellt der Interessent bei www.pflegeauskunft24.de eine Anfrage nach einer Dienstleistung, kommt ein Vertrag ??ber die Vermittlung von bis zu drei Angeboten von Anbietern zustande. Das Stellen der Anfrage ist kostenlos und unverbindlich. Etwaige Provisionen f??r die Vermittlung werden ausschlie??lich von den Anbietern getragen.</span><br>
            <span style="display: block;">2.2. Nach dem Stellen der Anfrage kontaktieren sowohl Hitzegrad Consulting als auch bis zu drei passende Anbieter den Interessenten telefonisch, per SMS und/oder per E-Mail, um mit ihm gemeinsam die Anfrage zu spezifizieren und diesem ein Angebot zu unterbreiten. Der Interessent stimmt mit Klicken des ???Vergleichen &amp; Sparen???-Buttons den AGBs und Datenschutzbestimmungen zu und willigt einem Kontakt durch Hitzegrad Consulting und bis zu drei passenden Anbieter ein.</span><br>
            <span style="display: block;">2.3. Bei ausgew??hlten Produkten und Dienstleistungen bietet Hitzegrad Consulting die M??glichkeit, im Rahmen der Spezifizierung der Anfrage durch den Produktberater einen Termin mit einem ausgew??hlten Anbieter zu vereinbaren. Die Terminabsprache erfolgt unter Ber??cksichtigung der zeitlichen Verf??gbarkeit des Interessenten und des ausgew??hlten Anbieters. Ziel dieses Services von Hitzegrad Consulting ist es, den Interessenten mit dessen vorheriger Zustimmung und ohne weitere Ansprache effektiver mit den ausgew??hlten Anbietern in Kontakt zu bringen.</span><br>
            <span style="display: block; font-size: 16px;" class="font-weight-bold">3. Erhalt der Angebote</span><br>
            <span style="display: block;">3.1. Nach Weiterleitung der Anfrage des Interessenten durch Hitzegrad Consulting kontaktieren die Anbieter den Interessenten telefonisch oder per E-Mail und unterbreiten ihm ggf. passende Angebote zu seiner Anfrage, es sei denn es wurde ein Termin mit einem Anbieter nach Ma??gabe von Ziff. 2.3. vereinbart. In diesem Fall kann die vorherige Kontaktaufnahme per Telefon oder E-Mail entfallen. Bevor der Interessent ein Angebot erh??lt, kann der Anbieter weitere Informationen erfragen, um einen Vor-Ort-Termin bitten oder durch sonstige T??tigkeiten die Angebotsabgabe vorbereiten. Hitzegrad Consulting m??chte damit gew??hrleisten, dass dem Interessenten ausschlie??lich Angebote zugehen, die seinem Budget entsprechen und individuell auf seine Bed??rfnisse abgestimmt sind.</span><br>
            <span style="display: block;">3.2. Hitzegrad Consulting stellt dabei durch verschiedene Ma??nahmen sicher, dass der Interessent schnellstm??glich annahmef??hige Angebote von bis zu drei Anbietern erh??lt. Wie schnell dem Interessenten Angebote vorliegen, richtet sich allerdings nach der Komplexit??t des angefragten Produkts bzw. der angefragten Dienstleistung und nach der Bearbeitungszeit des jeweiligen Anbieters.</span><br>
            <span style="display: block;">3.3. Der Interessent erh??lt Angebote nur von Anbietern, die Mitglied im Anbieternetzwerk von Hitzegrad Consulting sind. Die Mitgliedschaft im Anbieternetzwerk wird von Hitzegrad Consulting an strenge Bedingungen gekn??pft. Jeder Anbieter verpflichtet sich gegen??ber Hitzegrad Consulting dazu, alle einschl??gigen Richtlinien von Handwerkskammern, Standesorganisationen und vergleichbaren Institutionen einzuhalten sowie nur Produkte oder Dienstleistungen anzubieten, zu denen er zugelassen ist. Auf Grund der Gr????e des Anbieternetzwerkes kann Hitzegrad Consulting jedoch nicht die Eignung jeden Anbieters im Einzelfall garantieren. Der Interessent muss daher die Eignung des Anbieters so pr??fen, wie es auch bei einer Angebotseinholung ohne Hitzegrad Consulting der Fall sein w??rde.</span><br>
            <span style="display: block;">3.4. Nachdem der Interessent die Angebote erhalten hat, entscheidet er selbst, ob und von welchem Anbieter er das Angebot annimmt. Hitzegrad Consulting ist hierbei weder als Vertragspartner beteiligt, noch tritt es als Vertreter oder Erf??llungsgehilfe der Vertragsparteien in Erscheinung.</span><br>
            <span style="display: block;">3.5. Ggf. befragt der Produktberater den Interessenten zu einem sp??teren Zeitpunkt, ob er bereits drei Angebote von den ausgew??hlten Anbietern erhalten hat bzw. ob ein Gesch??ftsabschluss auf der Grundlage der Angebote zustande gekommen ist. Dar??ber hinaus wird der Interessent ggf. gebeten, den Service von Hitzegrad Consulting sowie der ausgew??hlten Anbieter zu bewerten.</span><br>
            <span style="display: block;">3.6. Wenn der Interessent noch keine drei Angebote erhalten hat, versucht Hitzegrad Consulting dem Interessenten im Nachgang weitere Anbieter vorzuschlagen, damit der Interessent von diesen die ausstehenden Angebote erhalten kann. Der Interessent kann Hitzegrad Consulting jederzeit mitteilen, dass er keine weiteren Angebote w??nscht.</span><br>
            <span style="display: block; font-size: 16px;" class="font-weight-bold">4. Weitergabe von Daten</span><br>
            <span style="display: block;">4.1. Die personenbezogenen Daten des Interessenten (Angaben zur Anfrage und Kontaktdaten) werden nur an die Anbieter weitergeleitet, wenn der Interessent hierzu seine Zustimmung erteilt hat. Eine Weitergabe der Daten an sonstige Dritte ist ausgeschlossen.</span><br>
            <span style="display: block;">4.2. Die Erhebung, Verarbeitung und Speicherung von Daten erfolgt ausschlie??lich nach den Vorgaben des deutschen Datenschutzrechts sowie der EU-Datenschutz-Grundverordnung. Die Datenschutzerkl??rung finden Sie ebenfalls auf dieser Webseite.</span><br>
            <span style="display: block; font-size: 16px;" class="font-weight-bold">5. Pflichten des Interessenten</span><br>
            <span style="display: block;">5.1. Die Vermittlungsleistung von Hitzegrad Consulting ist f??r den Interessenten kostenlos. Im Gegenzug bittet Hitzegrad Consulting den Interessenten ggf., die Leistung der ausgew??hlten Anbieter zu bewerten, sowie mitzuteilen, ob ein Vertrag zustande gekommen ist.</span><br>
            <span style="display: block;">5.2. Der Service von Hitzegrad Consulting kann von allen nat??rlichen und juristischen Personen genutzt werden, die unbeschr??nkt gesch??ftsf??hig sind. Nat??rlichen Personen, die nicht das 18. Lebensjahr vollendet haben, ist dies nicht gestattet. Stellt der Interessent f??r eine juristische Person eine Anfrage, versichert er zugleich seine Vertretungsberechtigung f??r diese.</span><br>
            <span style="display: block; font-size: 16px;" class="font-weight-bold">6. Gew??hrleistung und Leistungseinschr??nkungen</span><br>
            <span style="display: block;">6.1. Hitzegrad Consulting kann nicht gew??hrleisten, dass f??r jede Anfrage eines Interessenten passende Anbieter gefunden und diese zu einer Abgabe entsprechender Angebote veranlasst werden k??nnen. Von Hitzegrad Consulting wird weder das Zustandekommen eines Vertragsschlusses, noch die erfolgreiche Vertragsdurchf??hrung geschuldet. Die Gew??hrleistung von Hitzegrad Consulting ist diesbez??glich ausgeschlossen.</span><br>
            <span style="display: block;">6.2. F??r Pflichtverletzungen, die sich im Rahmen eines etwaigen zustande gekommenen Schuldverh??ltnisses zwischen Interessent und Anbieter ergeben, ist Hitzegrad Consulting nicht verantwortlich.</span><br>
            <span style="display: block; font-size: 16px;" class="font-weight-bold">7. Haftungsbeschr??nkung</span><br>
            <span style="display: block;">7.1. F??r eine Haftung auf Schadensersatz gelten unbeschadet der sonstigen gesetzlichen Anspruchsvoraussetzungen folgende Haftungsausschl??sse und -begrenzungen.</span><br>
            <span style="display: block;">7.2. Hitzegrad Consulting haftet unbeschr??nkt, soweit die Schadensursache auf Vorsatz oder grober Fahrl??ssigkeit beruht.</span><br>
            <span style="display: block;">Ferner haftet Hitzegrad Consulting f??r die leicht fahrl??ssige Verletzung von wesentlichen Pflichten, deren Verletzung die Erreichung des Vertragszwecks gef??hrdet, oder f??r die Verletzung von Pflichten, deren Erf??llung die ordnungsgem????e Durchf??hrung des Vertrages ??berhaupt erst erm??glicht und auf deren Einhaltung der Nutzer regelm????ig vertraut. In diesem Fall haftet Hitzegrad Consulting jedoch nur f??r den vorhersehbaren, vertragstypischen Schaden. Hitzegrad Consulting haftet nicht f??r die leicht fahrl??ssige Verletzung anderer als der in den vorstehenden S??tzen genannten Pflichten.</span><br>
            <span style="display: block;">7.3. Die vorstehenden Haftungsbeschr??nkungen gelten nicht bei Verletzung von Leben, K??rper und Gesundheit, f??r einen Mangel nach ??bernahme einer Garantie f??r die Beschaffenheit des Produktes und bei arglistig verschwiegenen M??ngeln. Die Haftung nach dem Produkthaftungsgesetz bleibt unber??hrt.</span><br>
            <span style="display: block;">7.4. Soweit die Haftung von Hitzegrad Consulting ausgeschlossen oder beschr??nkt ist, gilt dies auch f??r die pers??nliche Haftung von Arbeitnehmern, Vertretern und Erf??llungsgehilfen.</span><br>
            <span style="display: block; font-size: 16px;" class="font-weight-bold">8. Datenschutz</span><br>
            <span style="display: block;">8.1. Hitzegrad Consulting verarbeitet personenbezogene Daten der Nutzer zweckgebunden und gem???? den gesetzlichen Bestimmungen. N??here Informationen ??ber die Art, den Umfang und Zweck der Verarbeitung von personenbezogenen Daten innerhalb unserer Website finden Sie in unserer Datenschutzerkl??rung.</span><br>
            <span style="display: block;">8.2. Dem Interessenten stehen als Betroffenem i. S. d. DSGVO folgende Rechte zu:</span><br>
            <span style="display: block;">8.2.1. Auskunftsrecht</span><br>
            <span style="display: block;">Der Interessent hat das Recht, von Hitzegrad Consulting jederzeit auf Antrag eine Auskunft ??ber die von Hitzegrad Consulting verarbeiteten, ihn betreffenden personenbezogenen Daten im Umfang des Art. 15 DSGVO zu erhalten.</span><br>
            <span style="display: block;">8.2.2. Recht zur Berichtigung unrichtiger Daten</span><br>
            <span style="display: block;">Der Interessent hat das Recht, von Hitzegrad Consulting die unverz??gliche Berichtigung der ihn betreffenden personenbezogenen Daten zu verlangen, sofern diese unrichtig sein sollten.</span><br>
            <span style="display: block;">8.2.3. Recht auf L??schung</span><br>
            <span style="display: block;">Der Interessent hat das Recht, unter den in Art. 17 DSGVO beschriebenen Voraussetzungen von Hitzegrad Consulting die L??schung der ihn betreffenden personenbezogenen Daten zu verlangen. Diese Voraussetzungen sehen insbesondere ein L??schungsrecht vor, wenn die personenbezogenen Daten f??r die Zwecke, f??r die sie erhoben oder auf sonstige Weise verarbeitet wurden, nicht mehr notwendig sind, sowie in F??llen der unrechtm????igen Verarbeitung, des Vorliegens eines Widerspruchs oder des Bestehens einer L??schungspflicht nach Unionsrecht oder dem Recht des Mitgliedstaates, dem Hitzegrad Consulting unterliegt.</span><br>
            <span style="display: block;">8.2.4. Recht auf Einschr??nkung der Verarbeitung</span><br>
            <span style="display: block;">Der Interessent hat das Recht, von Hitzegrad Consulting die Einschr??nkung der Verarbeitung nach Ma??gabe des Art. 18 DSGVO zu verlangen. Dieses Recht besteht insbesondere, wenn die Richtigkeit der personenbezogenen Daten zwischen dem Interessenten und Hitzegrad Consulting umstritten ist, f??r die Dauer, welche die ??berpr??fung der Richtigkeit erfordert, sowie im Fall, dass der Interessent bei einem bestehenden Recht auf L??schung anstelle der L??schung eine eingeschr??nkte Verarbeitung verlangt; ferner f??r den Fall, dass die Daten f??r die von Hitzegrad Consulting verfolgten Zwecke nicht l??nger erforderlich sind, der Interessent sie jedoch zur Geltendmachung, Aus??bung oder Verteidigung von Rechtsanspr??chen ben??tigt sowie, wenn die erfolgreiche Aus??bung eines Widerspruchs zwischen Hitzegrad Consulting und dem Interessenten noch umstritten ist.</span><br>
            <span style="display: block;">8.2.5. Recht auf Unterrichtung</span><br>
            <span style="display: block;">Hat der Interessent das Recht auf Berichtigung, L??schung oder Einschr??nkung der Verarbeitung gegen??ber Hitzegrad Consulting geltend gemacht, ist Hitzegrad Consulting nach Ma??gabe des Art. 19 DSGVO dazu verpflichtet, allen Empf??ngern, denen die den Interessenten betreffenden personenbezogenen Daten offengelegt wurden, diese Berichtigung oder L??schung der Daten oder Einschr??nkung der Verarbeitung mitzuteilen, es sei denn, dies erweist sich als unm??glich oder ist mit einem unverh??ltnism????igen Aufwand verbunden.</span><br>
            <span style="display: block;">Dem Interessenten steht gegen??ber Hitzegrad Consulting das Recht zu, ??ber diese Empf??nger unterrichtet zu werden.</span><br>
            <span style="display: block;">8.2.6. Recht auf Daten??bertragbarkeit</span><br>
            <span style="display: block;">Der Interessent hat das Recht, von Hitzegrad Consulting die ihn betreffenden personenbezogenen Daten, die er K??uferprotal bereitgestellt habt, in einem strukturierten, g??ngigen, maschinenlesbaren Format nach Ma??gabe des Art. 20 DSGVO zu erhalten.</span><br>
            <span style="display: block;">8.2.7. Widerrufsrecht</span><br>
            <span style="display: block;">Der Interessent hat gem???? Art. 7 Abs. 3 DSGVO das Recht, seine einmal erteilte Einwilligung jederzeit gegen??ber K??uferprotal zu widerrufen. Dies hat zur Folge, dass die Datenverarbeitung, die auf dieser Einwilligung beruhte, f??r die Zukunft nicht mehr fortgef??hrt werden darf. Die Rechtm????igkeit der aufgrund der Einwilligung bis zum Widerruf erfolgten Verarbeitung wird durch den Widerruf der Einwilligung nicht ber??hrt.</span><br>
            <span style="display: block;">8.2.9. Beschwerderecht</span><br>
            <span style="display: block;">Der Interessent hat ferner das Recht, sich bei Beschwerden an die zust??ndige Aufsichtsbeh??rde zu wenden. Die zust??ndige Aufsichtsbeh??rde ist:<br>
              Berliner Beauftragte f??r Datenschutz und Informationsfreiheit<br>
              Maja Smoltczyk<br>
              Friedrichstr. 219<br>
              10969 Berlin<br>
              https://www.datenschutz-berlin.de/index.html<br>
              E-Mail: mailbox@datenschutz-berlin.de<br></span><br>
            <span style="display: block;">8.3. Falls der Interessent eines seiner Rechte geltend machen und/oder n??here Informationen hier??ber erhalten m??chte, kann er sich postalisch oder per E-Mail an die folgende Adresse wenden:</span><br>
            <span style="display: block;">E-Mail: info@pflegeauskunft24.de</span><br>
            <span style="display: block; font-size: 16px;" class="font-weight-bold">9. Schlussbestimmungen</span><br>
            <span style="display: block;">9.1. Gerichtstand und Erf??llungsort ist der Sitz von Hitzegrad Consulting, wenn der Kunde Kaufmann, juristische Person des ??ffentlichen Rechts oder ??ffentlich-rechtliches Sonderverm??gen ist.</span><br>
            <span style="display: block;">9.2. Es gilt das Recht der Bundesrepublik Deutschland, solange dem keine zwingenden Verbraucherschutzvorschriften entgegenstehen.</span>
          </p>
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Schlie??en</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Impressum</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body h-mode">
          Hitzegrad Consulting UG (haftungsbeschr??nkt)<br>
          Sonnenallee 114<br>
          12045 Berlin<br><br>

          Tel.: 030 ??? 257 967 80<br>
          Mail: info@pflegeauskunft24.de<br>
          Web: www.pflegeauskunft24.de<br><br>

          Ust. ID-Nummer: DE312546288<br>
          HRB: 187459 B<br>
          Amtsgericht Charlottenburg<br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Schlie??en</button>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>