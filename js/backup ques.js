37: {
    type: "form",
    question: "Um was für einen Angehörigen handelt es sich?",
    name: "angehoerigerd",
    inputs: [
      {
        title: "z.B. Verwandtschaftsverhältnis:",
        image_name: "zu-pflegende.png",
        value: "",
        next: "38",
      },
    ],
    next: "38",
  },
  38: {
    type: "form",
    question: "Wie alt ist die zu betreuende Person?",
    name: "angehoerigerdb",
    inputs: [
      {
        title: "z.B. Verwandtschaftsverhältnis:",
        image_name: "zu-pflegende.png",
        value: "",
        next: "39",
      },
    ],
    next: "39",
  },
  39: {
    type: "form",
    question: "Wie alt ist die zu betreuende Person?",
    name: "alterpersondb",
    inputs: [
      {
        title: "Alter oder Geburtsdatum:",
        image_name: "zu-pflegende.png",
        value: "",
        next: "40",
      },
    ],
    next: "40",
  },
  40: {
    type: "regular",
    question: "Ist ein Pflegegrad bereits vorhanden?",
    name: "pflegegraddb",
    options: [
      {
        title: "Ja",
        image_name: "q_check.png",
        value: "ja",
        next: "41",
      },
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "nein",
        next: "41",
      },
      {
        title: "Beantragt",
        image_name: "q_check_klein.png",
        value: "beantragt",
        next: "41",
      },
      {
        title: "Noch unklar",
        image_name: "q_questionmarck.png",
        value: "noch unklar",
        next: "41",
      },
    ],
    next: "41",
  },
  41: {
    type: "regular",
    question: "Wie mobil ist die zu betreuende Person?",
    name: "mobilitaetdb",
    options: [
      {
        title: "Uneingeschränkt MOBIL",
        image_name: "q3_1.png",
        value: "keine Einschränkung",
        next: "42",
      },
      {
        title: "leichte Einschränkung",
        image_name: "q3_2.png",
        value: "Leichte Einschränkung",
        next: "42",
      },
      {
        title: "Rollstuhl erforderlich",
        image_name: "q3_3.png",
        value: "Rollstuhl erforderlich",
        next: "42",
      },
      {
        title: "Bettlägerig",
        image_name: "q_bett.png",
        value: "bettlägerig",
        next: "42",
      },
    ],
    next: "42",
  },
  42: {
    type: "regular",
    question: "Wird Unterstützung bei der Grundpflege benötigt?",
    name: "grundpflegedb",
    options: [
      {
        title: "Ja",
        image_name: "q_check.png",
        value: "ja",
        next: "43",
      },
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "nein",
        next: "43",
      },
      {
        title: "Noch Unklar",
        image_name: "q_questionmarck.png",
        value: "noch unklar",
        next: "43",
      },
    ],
    next: "43",
  },
  43: {
    type: "regular",
    question: "Welche Art der Betreuung wird benötigt?",
    name: "betreuungsartdb",
    options: [
      {
        title: "Gesellschaft/Begleitung",
        image_name: "q_company.png",
        value: "Gesellschaft, Begleitung",
        next: "44",
      },
      {
        title: "Haushaltshilfe",
        image_name: "q_household.png",
        value: "Haushaltshilfe",
        next: "44",
      },
      {
        title: "Beides",
        image_name: "q_both.png",
        value: "Gesellschaft, Begleitung &#038; Haushaltshilfe",
        next: "44",
      },
       {
        title: "Weitere/Noch unklar",
        image_name: "q_questionmarck.png",
        value: "noch unklar",
        next: "44",
      },

    ],
    next: "44",
  },
  44: {
    type: "regular",
    question: "Ist die zu betreuende Person dement?",
    name: "demenzdb",
    options: [
      {
        title: "Ja",
        image_name: "q_check.png",
        value: "ja",
        next: "45",
      },
      {
        title: "Ja, leichte Demenz",
        image_name: "q_check_klein.png",
        value: "ja, leichte Demenz",
        next: "45",
      },
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "nein",
        next: "45",
      },
       {
        title: "Unklar",
        image_name: "q_questionmarck.png",
        value: "unklar",
        next: "45",
      },

    ],
    next: "45",
  },
  45: {
    type: "regular",
    question: "Wie lange benötigen Sie die Betreuung?",
    name: "dauerdb",
    options: [
      {
        title: "4-6 Wochen",
        image_name: "q5_2.png",
        value: "4-6 Wochen",
        next: "46",
      },
      {
        title: "Länger als 6 Wochen",
        image_name: "q5_1.png",
        value: "länger als 6 Wochen",
        next: "46",
      },
      {
        title: "Weniger als 4 Wochen",
        image_name: "q8_1.png",
        value: "weniger als 4 Wochen",
        next: "46",
      },
    ],
    next: "46",
  },
  46: {
    type: "regular",
    question: "Wann soll die Betreuung beginnen?",
    name: "zeitpunktdb",
    options: [
      {
        title: "Schnellstmöglich",
        image_name: "q5_1.png",
        value: "schnellstmöglich",
        next: "47",
      },
      {
        title: "In 2-3 Wochen",
        image_name: "q5_2.png",
        value: "in 2-3 Wochen",
        next: "47",
      },
      {
        title: "In 1-2 Monaten",
        image_name: "q5_3.png",
        value: "in 1-2 Monaten",
        next: "47",
      },
      {
        title: "Später/Noch unklar",
        image_name: "q5_4.png",
        value: "später/noch unklar",
        next: "47",
      },
    ],
    next: "47",
  },
  47: {
    type: "form",
    question: "Wie alt ist Ihr erster zu betreuender Angehöriger?",
    name: "alterpersonea",
    inputs: [
      {
        title: "Alter oder Geburtsdatum:",
        image_name: "zu-pflegende.png",
        value: "",
        next: "48",
      },
    ],
    next: "48",
  },
  48: {
    type: "form",
    question: "Wie alt ist Ihr zweiter zu betreuender Angehöriger?",
    name: "alterpersoneb",
    inputs: [
      {
        title: "Alter oder Geburtsdatum:",
        image_name: "zu-pflegende.png",
        value: "",
        next: "49",
      },
    ],
    next: "49",
  },