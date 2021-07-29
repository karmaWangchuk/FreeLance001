$('.fake').css('display','')

let queObj = {
    1: {
    type: "regular",
    question: "Für wen suchen Sie eine<span class= 'break'> 24 Stunden Pflege?</span>",
    name: "fuerwen",
    options: [
      {
        title: "Mich selbst",
        image_name: "q1_1.png",
        value: "selber",
        next: "2",
      },
      {
        title: "Angehörigen",
        image_name: "q1_2.png",
        value: "Angehörige(r)/Bekannte(r)",
        next: "2",
      },

    ],
    next: "2",
  },
  2: {
    type: "regular",
    question: "Wie viele Personen leben im Haushalt?",
    name: "haushaltspersonen",
    options: [
      {
        title: "Eine Person",
        image_name: "q14_2.png",
        value: "eine Person",
        next: "3",
      },
      {
        title: "Mehrere Personen",
        image_name: "q1_1.png",
        value: "mehrere Personen",
        next: "13",
      },
      {
        title: "Noch unklar",
        image_name: "q_questionmarck.png",
        value: "noch unklar",
        next: "3",
      },
    ],
    next: "3",
  },
  3: {
    type: "form",
    question: "Um was für einen Angehörigen handelt es sich?",
    name: "angehoeriger",
    inputs: [
      {
        title: "z.B. Verwandtschaftsverhältnis:",
        image_name: "zu-pflegende.png",
        value: "",
        next: "4",
      },
    ],
    next: "4",
  },
  4: {
    type: "form",
    question: "Wie alt ist Ihr zu pflegender Angehöriger?",
    name: "alterperson",
    inputs: [
      {
        title: "Alter oder Geburtsdatum:",
        image_name: "zu-pflegende.png",
        value: "",
        next: "5",
      },
    ],
    next: "5",
  },
  5: {
    type: "regular",
    question: "Ist ein Pflegegrad bereits vorhanden?",
    name: "pflegegrad",
    options: [
      {
        title: "Pflegegrad 1-2",
        image_name: "q2_11.png",
        value: "2",
        next: "6",
      },
      {
        title: "Pflegegrad 3",
        image_name: "q2_21.png",
        value: "3",
        next: "6",
      },
      {
        title: "Pflegegrad 4",
        image_name: "q2_31.png",
        value: "4",
        next: "6",
      },
      {
        title: "Pflegegrad 5",
        image_name: "q2_41.png",
        value: "5",
        next: "6",
      },
      {
        title: "Beantragt/Unklar",
        image_name: "q_questionmarck.png",
        value: "beantragt/noch unklar",
        next: "6",
      },
    ],
    next: "6",
  },
  6: {
    type: "regular",
    question: "Wie mobil ist die pflegebedürftige Person?",
    name: "mobilitaet",
    options: [
      {
        title: "Uneingeschränkt mobil",
        image_name: "q3_1.png",
        value: "keine Einschränkung",
        next: "7",
      },
      {
        title: "Leichte Einschränkung",
        image_name: "q3_2.png",
        value: "leichte Einschränkung",
        next: "7",
      },
      {
        title: "Rollstuhl erforderlich",
        image_name: "q3_3.png",
        value: "Rollstuhl erforderlich",
        next: "7",
      },
      {
        title: "Bettlägerig",
        image_name: "q_bett.png",
        value: "bettlägerig",
        next: "7",
      },
    ],
    next: "7",
  },
  7: {
    type: "regular",
    question: "Ist die pflegebedürftige Person dement?",
    name: "demenz",
    options: [
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "nein",
        next: "8",
      },
      {
        title: "Ja",
        image_name: "q_check.png",
        value: "ja",
        next: "8",
      },
      {
        title: "Ja, leichte Demenz",
        image_name: "q_check_klein.png",
        value: "ja, leichte Demenz",
        next: "8",
      },
      {
        title: "Unklar",
        image_name: "q_questionmarck.png",
        value: "noch unklar",
        next: "8",
      },
    ],
    next: "8",
  },
  8: {
    type: "regular",
    question: "Wird eine nächtliche Betreuung benötigt?",
    name: "nacht",
    options: [
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "nein",
        next: "9",
      },
      {
        title: "Ja, regelmäßig",
        image_name: "q_check.png",
        value: "ja, regelmäßig",
        next: "9",
      },
      {
        title: "Ja, gelegentlich",
        image_name: "q_check_klein.png",
        value: "ja, gelegentlich",
        next: "9",
      },
      {
        title: "Noch unklar",
        image_name: "q_questionmarck.png",
        value: "noch unklar",
        next: "9",
      },
    ],
    next: "9",
  },
  9: {
    type: "regular",
    question: "Welche Deutschkenntnisse soll Ihre Pflegekraft haben?",
    name: "sprache",
    options: [
      {
        title: "Grundkenntnisse",
        image_name: "q4_1.png",
        value: "Grundkenntnisse",
        next: "10",
      },
      {
        title: "<span class = 'm-size'>Mittlere Kenntnisse</span>",
        image_name: "q4_2.png",
        value: "mittlere Kenntnisse",
        next: "10",
      },
      {
        title: "Gute Kenntnisse",
        image_name: "q4_3.png",
        value: "gute Kenntnisse",
        next: "10",
      },
      {
        title: "Noch unklar",
        image_name: "q4_4.png",
        value: "noch unklar",
        next: "10",
      },
    ],
    next: "10",
  },
  10: {
    type: "regular",
    question: "Gibt es eine Möglichkeit zur Unterbringung der Pflegekraft?",
    name: "unterbringung",
    options: [
      {
        title: "Gästezimmer ",
        image_name: "q_bett.png",
        value: "Gästezimmer vorhanden ",
        next: "11",
      },
      {
        title: "Wohnung ",
        image_name: "q7_2.png",
        value: "Wohnung vorhanden ",
        next: "11",
      },
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "nein",
        next: "11",
      },
    ],
    next: "11",
  },
  11: {
    type: "regular",
    question: "Wie lange benötigen Sie die Betreuung?",
    name: "dauer",
    options: [
      {
        title: "<span class = 'x-size'>4-6 Wochen</span>",
        image_name: "q5_2.png",
        value: "4-6 Wochen",
        next: "12",
      },
      {
        title: "<span class = 'm-size'>Länger als 6 Wochen</span>",
        image_name: "q5_1.png",
        value: "länger als 6 Wochen",
        next: "12",
      },
      {
        title: "Weniger als 4 Wochen",
        image_name: "q8_1.png",
        value: "weniger als 4 Wochen",
        next: "12",
      },
    ],
    next: "12",
  },
  12: {
    type: "regular",
    question: "Wann soll die Betreuung beginnen?",
    name: "zeitpunkt",
    options: [
      {
        title: "Schnellstmöglich",
        image_name: "q5_1.png",
        value: "schnellstmöglich",
        next: "37",
      },
      {
        title: "In 2-3 Wochen",
        image_name: "q5_2.png",
        value: "in 2-3 Wochen",
        next: "37",
      },
      {
        title: "In 1-2 Monaten",
        image_name: "q5_3.png",
        value: "in 1-2 Monaten",
        next: "37",
      },
      {
        title: "<span class = 'm-size'>Später/Noch unklar</span>",
        image_name: "q5_4.png",
        value: "später/noch unklar",
        next: "37",
      },
    ],
    next: "13",
  },
  13: {
    type: "regular",
    question: "Soll mehr als eine Person im Haushalt gepflegt werden?",
    name: "betreuungspersonen",
    options: [
      {
        title: "Ja",
        image_name: "q_check.png",
        value: "zwei Personen",
        next: "24",
      },
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "eine Person",
        next: "14",
      },
      {
        title: "Noch Unklar",
        image_name: "q_questionmarck.png",
        value: "noch unklar",
        next: "14",
      },
    ],
    next: "14",
  },
  14: {
    type: "form",
    question: "Um was für einen Angehörigen handelt es sich?",
    name: "angehoerigerb",
    inputs: [
      {
        title: "z.B. Verwandtschaftsverhältnis:",
        image_name: "zu-pflegende.png",
        value: "",
        next: "15",
      },
    ],
    next: "15",
  },
  15: {
    type: "form",
    question: "Wie alt ist Ihr zu pflegender Angehöriger?",
    name: "alterpersonb",
    inputs: [
      {
        title: "Alter oder Geburtsdatum:",
        image_name: "zu-pflegende.png",
        value: "",
        next: "16",
      },
    ],
    next: "16",
  },
  16: {
    type: "regular",
    question: "Ist ein Pflegegrad bereits vorhanden?",
    name: "pflegegradb",
    options: [
      {
        title: "Pflegegrad 1-2",
        image_name: "q2_11.png",
        value: "2",
        next: "17",
      },
      {
        title: "Pflegegrad 3",
        image_name: "q2_21.png",
        value: "3",
        next: "17",
      },
      {
        title: "Pflegegrad 4",
        image_name: "q2_31.png",
        value: "4",
        next: "17",
      },
      {
        title: "Pflegegrad 5",
        image_name: "q2_41.png",
        value: "5",
        next: "17",
      },
      {
        title: "Beantragt/Unklar",
        image_name: "q_questionmarck.png",
        value: "beantragt/noch unklar",
        next: "17",
      },
    ],
    next: "17",
  },
  17: {
    type: "regular",
    question: "Wie mobil ist die pflegebedürftige Person?",
    name: "mobilitaetb",
    options: [
      {
        title: "Uneingeschränkt mobil",
        image_name: "q3_1.png",
        value: "keine Einschränkung",
        next: "18",
      },
      {
        title: "Leichte Einschränkung",
        image_name: "q3_2.png",
        value: "leichte Einschränkung",
        next: "18",
      },
      {
        title: "Rollstuhl erforderlich",
        image_name: "q3_3.png",
        value: "Rollstuhl erforderlich",
        next: "18",
      },
      {
        title: "Bettlägerig",
        image_name: "q_bett.png",
        value: "bettlägerig",
        next: "18",
      },
    ],
    next: "18",
  },
  18: {
    type: "regular",
    question: "Ist die pflegebedürftige Person dement?",
    name: "demenzb",
    options: [
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "nein",
        next: "19",
      },
      {
        title: "Ja",
        image_name: "q_check.png",
        value: "ja",
        next: "19",
      },
      {
        title: "Ja, leichte Demenz",
        image_name: "q_check_klein.png",
        value: "ja, leichte Demenz",
        next: "19",
      },
      {
        title: "Unklar",
        image_name: "q_questionmarck.png",
        value: "noch unklar",
        next: "19",
      },
    ],
    next: "19",
  },
  19: {
    type: "regular",
    question: "Wird eine nächtliche Betreuung benötigt?",
    name: "nachtb",
    options: [
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "nein",
        next: "20",
      },
      {
        title: "Ja, regelmäßig",
        image_name: "q_check.png",
        value: "ja, regelmäßig",
        next: "20",
      },
      {
        title: "Ja, gelegentlich",
        image_name: "q_check_klein.png",
        value: "ja, gelegentlich",
        next: "20",
      },
      {
        title: "Noch unklar",
        image_name: "q_questionmarck.png",
        value: "noch unklar",
        next: "20",
      },
      
    ],
    next: "20",
  },
  20: {
    type: "regular",
    question: "Welche Deutschkenntnisse soll Ihre Pflegekraft haben?",
    name: "spracheb",
    options: [
      {
        title: "Grundkenntnisse",
        image_name: "q4_1.png",
        value: "Grundkenntnisse",
        next: "21",
      },
      {
        title: "Mittlere Kenntnisse",
        image_name: "q4_2.png",
        value: "mittlere Kenntnisse",
        next: "21",
      },
      {
        title: "Gute Kenntnisse",
        image_name: "q4_3.png",
        value: "gute Kenntnisse",
        next: "21",
      },
      {
        title: "Unklar",
        image_name: "q4_4.png",
        value: "noch unklar",
        next: "21",
      },
    ],
    next: "21",
  },
  21: {
    type: "regular",
    question: "Gibt es eine Möglichkeit zur Unterbringung der Pflegekraft?",
    name: "unterbringungb",
    options: [
      {
        title: "Gästezimmer ",
        image_name: "q_bett.png",
        value: "Gästezimmer vorhanden",
        next: "22",
      },
      {
        title: "Wohnung ",
        image_name: "q7_2.png",
        value: "Wohnung vorhanden",
        next: "22",
      },
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "nein",
        next: "22",
      },
    ],
    next: "22",
  },
  22: {
    type: "regular",
    question: "Wie lange benötigen Sie die Betreuung?",
    name: "dauerb",
    options: [
      {
        title: "<span class = 'x-size'>4-6 Wochen<span>",
        image_name: "q5_2.png",
        value: "4-6 Wochen",
        next: "23",
      },
      {
        title: "<span class = 'm-size'>Länger als 6 Wochen</span>",
        image_name: "q5_1.png",
        value: "länger als 6 Wochen",
        next: "23",
      },
      {
        title: "Weniger als 4 Wochen",
        image_name: "q8_1.png",
        value: "weniger als 4 Wochen",
        next: "23",
      },
    ],
    next: "23",
  },
  23: {
    type: "regular",
    question: "Wann soll die Betreuung beginnen?",
    name: "zeitpunktb",
    options: [
      {
        title: "Schnellstmöglich",
        image_name: "q5_1.png",
        value: "schnellstmöglich",
        next: "37",
      },
      {
        title: "In 2-3 Wochen",
        image_name: "q5_2.png",
        value: "in 2-3 Wochen",
        next: "37",
      },
      {
        title: "In 1-2 Monaten",
        image_name: "q5_3.png",
        value: "in 1-2 Monaten",
        next: "37",
      },
      {
        title: "<span class = 'm-size'>Später/Noch unklar</span>",
        image_name: "q5_4.png",
        value: "später/noch unklar",
        next: "37",
      },
    ],
    next: "24",
  },
  24: {
    type: "form",
    question: "Wie alt ist Ihr <b>erster</b> pflegebedürftiger Angehöriger?",
    name: "alterpersonca",
    inputs: [
      {
        title: "Alter oder Geburtsdatum:",
        image_name: "zu-pflegende.png",
        value: "",
        next: "25",
      },
    ],
    next: "25",
  },
  25: {
    type: "form",
    question: "Wie alt ist Ihr <b>zweiter</b> pflegebedürftiger Angehöriger?",
    name: "alterpersoncb",
    inputs: [
      {
        title: "Alter oder Geburtsdatum:",
        image_name: "zu-pflegende.png",
        value: "",
        next: "26",
      },
    ],
    next: "26",
  },
  26: {
    type: "regular",
    question: "Hat Ihr <b>erster</b> Angehöriger bereits einen Pflegegrad?",
    name: "pflegegradca",
    options: [
      {
        title: "Pflegegrad 1-2",
        image_name: "q2_11.png",
        value: "2",
        next: "27",
      },
      {
        title: "Pflegegrad 3",
        image_name: "q2_21.png",
        value: "3",
        next: "27",
      },
      {
        title: "Pflegegrad 4",
        image_name: "q2_31.png",
        value: "4",
        next: "27",
      },
      {
        title: "Pflegegrad 5",
        image_name: "q2_41.png",
        value: "5",
        next: "27",
      },
      {
        title: "Beantragt/Unklar",
        image_name: "q_questionmarck.png",
        value: "beantragt/noch unklar",
        next: "27",
      },
    ],
    next: "27",
  },
   27: {
    type: "regular",
    question: "Hat Ihr <b>zweiter</b> Angehöriger bereits einen Pflegegrad?",
    name: "pflegegradcb",
    options: [
      {
        title: "Pflegegrad 1-2",
        image_name: "q2_11.png",
        value: "2",
        next: "28",
      },
      {
        title: "Pflegegrad 3",
        image_name: "q2_21.png",
        value: "3",
        next: "28",
      },
      {
        title: "Pflegegrad 4",
        image_name: "q2_31.png",
        value: "4",
        next: "28",
      },
      {
        title: "Pflegegrad 5",
        image_name: "q2_41.png",
        value: "5",
        next: "28",
      },
      {
        title: "Beantragt/Unklar",
        image_name: "q_questionmarck.png",
        value: "beantragt/noch unklar",
        next: "28",
      },
    ],
    next: "28",
  },
  28: {
    type: "regular",
    question: "Wie mobil ist Ihr <b>erster</b> pflegebedürftiger Angehöriger?",
    name: "mobilitaetca",
    options: [
      {
        title: "Uneingeschränkt mobil",
        image_name: "q3_1.png",
        value: "keine Einschränkung",
        next: "29",
      },
      {
        title: "Leichte Einschränkung",
        image_name: "q3_2.png",
        value: "leichte Einschränkung",
        next: "29",
      },
      {
        title: "Rollstuhl erforderlich",
        image_name: "q3_3.png",
        value: "Rollstuhl erforderlich",
        next: "29",
      },
      {
        title: "Bettlägerig",
        image_name: "q_bett.png",
        value: "bettlägerig",
        next: "29",
      },
    ],
    next: "29",
  },
  29: {
    type: "regular",
    question: "Wie mobil ist Ihr <b>zweiter</b> pflegebedürftiger Angehöriger?",
    name: "mobilitaetcb",
    options: [
      {
        title: "Uneingeschränkt mobil",
        image_name: "q3_1.png",
        value: "keine Einschränkung",
        next: "30",
      },
      {
        title: "Leichte Einschränkung",
        image_name: "q3_2.png",
        value: "leichte Einschränkung",
        next: "30",
      },
      {
        title: "Rollstuhl erforderlich",
        image_name: "q3_3.png",
        value: "Rollstuhl erforderlich",
        next: "30",
      },
      {
        title: "Bettlägerig",
        image_name: "q_bett.png",
        value: "bettlägerig",
        next: "30",
      },
    ],
    next: "30",
  },
  30: {
    type: "regular",
    question: "Ist Ihr <b>erster</b> pflegebedürftiger Angehöriger dement?",
    name: "demenzca",
    options: [
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "nein",
        next: "31",
      },
      {
        title: "Ja",
        image_name: "q_check.png",
        value: "ja",
        next: "31",
      },
      {
        title: "Ja, leichte Demenz",
        image_name: "q_check_klein.png",
        value: "ja, leichte Demenz",
        next: "31",
      },
      {
        title: "Unklar",
        image_name: "q_questionmarck.png",
        value: "noch unklar",
        next: "31",
      },
    ],
    next: "31",
  },
  31: {
    type: "regular",
    question: "Ist Ihr <b>zweiter</b> pflegebedürftiger Angehöriger dement?",
    name: "demenzcb",
    options: [
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "nein",
        next: "32",
      },
      {
        title: "Ja",
        image_name: "q_check.png",
        value: "ja",
        next: "32",
      },
      {
        title: "Ja, leichte Demenz",
        image_name: "q_check_klein.png",
        value: "ja, leichte Demenz",
        next: "32",
      },
      {
        title: "Unklar",
        image_name: "q_questionmarck.png",
        value: "noch unklar",
        next: "32",
      },
    ],
    next: "32",
  },
  32: {
    type: "regular",
    question: "Wird eine nächtliche Betreuung benötigt?",
    name: "nachtc",
    options: [
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "nein",
        next: "33",
      },
      {
        title: "Ja, regelmäßig",
        image_name: "q_check.png",
        value: "ja, regelmäßig",
        next: "33",
      },
      {
        title: "Ja, gelegentlich",
        image_name: "q_check_klein.png",
        value: "ja, gelegentlich",
        next: "33",
      },
      {
        title: "Noch unklar",
        image_name: "q_questionmarck.png",
        value: "noch unklar",
        next: "33",
      },
    ],
    next: "33",
  },
  33: {
    type: "regular",
    question: "Welche Deutschkenntnisse soll Ihre Pflegekraft haben?",
    name: "sprachec",
    options: [
      {
        title: "Grundkenntnisse",
        image_name: "q4_1.png",
        value: "Grundkenntnisse",
        next: "34",
      },
      {
        title: "Mittlere Kenntnisse",
        image_name: "q4_2.png",
        value: "mittlere Kenntnisse",
        next: "34",
      },
      {
        title: "Gute Kenntnisse",
        image_name: "q4_3.png",
        value: "gute Kenntnisse",
        next: "34",
      },
      {
        title: "Noch unklar",
        image_name: "q4_4.png",
        value: "noch unklar",
        next: "34",
      },
    ],
    next: "34",
  },
   34: {
    type: "regular",
    question: "Gibt es eine Möglichkeit zur Unterbringung der Pflegekraft?",
    name: "unterbringungc",
    options: [
      {
        title: "Gästezimmer  ",
        image_name: "q_bett.png",
        value: "Gästezimmer vorhanden",
        next: "35",
      },
      {
        title: "Wohnung ",
        image_name: "q7_2.png",
        value: "Wohnung vorhanden",
        next: "35",
      },
      {
        title: "Nein",
        image_name: "q_x.png",
        value: "nein",
        next: "35",
      },
    ],
    next: "35",
  },
   35: {
    type: "regular",
    question: "Wie lange benötigen Sie die Betreuung?",
    name: "dauerc",
    options: [
      {
        title: "<span class = 'x-size'>4-6 Wochen<span>  ",
        image_name: "q5_2.png",
        value: "4-6 Wochen",
        next: "36",
      },
      {
        title: "<span class = 'm-size'>Länger als 6 Wochen</span>",
        image_name: "q5_1.png",
        value: "länger als 6 Wochen",
        next: "36",
      },
      {
        title: "Weniger als 4 Wochen",
        image_name: "q8_1.png",
        value: "weniger als 4 Wochen",
        next: "36",
      },
    ],
    next: "36",
  },
  36: {
    type: "regular",
    question: "Wann soll die Betreuung beginnen?",
    name: "zeitpunktc",
    options: [
      {
        title: "Schnellstmöglich",
        image_name: "q5_1.png",
        value: "schnellstmöglich",
        next: "37",
      },
      {
        title: "In 2-3 Wochen",
        image_name: "q5_2.png",
        value: "in 2-3 Wochen",
        next: "37",
      },
      {
        title: "In 1-2 Monaten",
        image_name: "q5_3.png",
        value: "in 1-2 Monaten",
        next: "37",
      },
      {
        title: "<span class = 'm-size'>Später/Noch unklar</span>",
        image_name: "q5_4.png",
        value: "später/noch unklar",
        next: "37",
      },
    ],
    next: "37",
  },
  37: {
    type: "form-map",
    question: "In welcher Region suchen Sie die 24 Stunden Pflege?",
    name: "postcode",
    inputs: [
      {
        title: "Postleitzahl oder Wohnort:",
        image_name: "map_deutschland.gif",
        value: "",
        next: "38",
      },
    ],
    next: "38",
  },
  38: {
    type: "loading",
    question: "Bitte haben Sie einen Augenblick Geduld.",
    message: "Unser System sucht aus über 200 Anbietern die passenden für Ihren Pflegebedarf heraus.",
    image_name: "loading.gif",
    id: "wait-animation",
    next: "39",
  },
   39: {
    type: "wrapper",
    name:"send-form",
    question: "Nur noch ein Schritt zu Ihrem Anbietervergleich",
    colms: [
      {
        r1: "Frau",
        r2: "Herr",
        title: "Wer soll die Betreuungsangebote erhalten?",
        value: "",
        next: "",
      },
     
      
    ],
    next: "",
  },




  /* 8: {
    type: "form",
    question: "Field set 8",
    image_name: "q1_21.png",
    inputs: [
      {
        title: "Title for the input",
        placeholder: null,
      },
    ],
    buttons: [
      {
        value: "the value",
        next: "9",
      },
    ],
    finish: true,
  }, */
};

let slideR = true;
let questionApp = document.querySelector("#questionApp");
let previousButton = document.querySelector("#previous");
let spanInfo = document.querySelector("#spanInfo");
let progressBar = document.getElementById("progress-contain");
let nextButton = document.querySelector("#next");
let previousKey;
let previousHistory = [];
// let previousNumber = [];
let qLength = Object.keys(queObj).length;
let maxProgressLength = 19;
let currentSlide = 1;
var stat = true

questionApp.style.width = qLength * 100 + "%";
//questionApp.style.height =  "350px";

function popFunc() {
  for (let s in queObj) {
    newElem = ``;
    let currentElement = queObj[s];
    
    if (currentElement.type) {

      newElem += `<div id="${
        Object.keys(queObj).indexOf(s) + 1
      }" class="fly-about ht-${
        Object.keys(queObj).indexOf(s) + 1
      } test" style="width: ${100 / qLength}%;">
          <div class="text-center question-title fieldset-title"><!--<span id="opt_${
            Object.keys(queObj).indexOf(s) + 1
          }"></span>--> ${currentElement.question}</div>`;

      if (currentElement.type == "regular") {
        if (currentElement.options && Array.isArray(currentElement.options)) {
          newElem += ` <div class="options responses-wrapper">`
          for (let cE in currentElement.options) {
            
            var cmpare = parseInt(cE) + 1
            newElem += `
            
          <div class="section_items option-responses  overflow-hidden" onclick="textShadowing(${s},${parseInt(cE) + 1})">
            <div class="option option${s}-${parseInt(cE) + 1} option-selector">
              <div class="option-response-tag">
              <br>
              <label class="cover" for="option${s}-${parseInt(cE) + 1}">
                <div>
                  <img src="img/${currentElement.options[cE].image_name}" class="option-img">
                </div>
                <div class="option-caption option-caption${s}-${parseInt(cE) + 1}">
                  <input type="radio" id="option${s}-${parseInt(cE) + 1}" data-next="${currentElement.options[cE].next}" name="${currentElement.name}" value="${currentElement.options[cE].value}"  class="d-none" onClick="loadNext()">
                  <div class="section_items_title option-text${s}-${parseInt(cE) + 1} option-text slide-text-d-view" >${currentElement.options[cE].title}</div>`
      // s is the que and cmpare is the card order number      
            if(cmpare == 1 && s == 6 || cmpare == 1 && s == 28 || cmpare == 1 && s == 17 || cmpare == 1 && s == 29 ){
              newElem += `<div class="section_items_title option-text${s}-${parseInt(cE) + 1} option-text slide-text-m-view ca-text" ><span style = 'font-size:16px;'>Uneingeschränkt<span></div>` 
            }
            else if(cmpare == 4 && s == 6 || cmpare == 4 && s == 28 || cmpare == 4 && s == 17 || cmpare == 4 && s == 29 ){
              newElem += `<div class="section_items_title option-text${s}-${parseInt(cE) + 1} option-text slide-text-m-view ca-text" ><span style = 'font-size:16px;'>Bettlägerig<span></div>` 
            }

            else{
              newElem += `<div class="section_items_title option-text${s}-${parseInt(cE) + 1} option-text slide-text-m-view ">${currentElement.options[cE].title}</div>` 
            }
              
              newElem +=`
              <div class="items-ab">
                    <div class="items-ab-bottom"></div>
                  </div>
                </div>
              </label>
              </div>
            </div>
          </div>`;
          }
          newElem += `</div>`;
        }
      } else if (currentElement.type == "form") {
        if (currentElement.inputs && Array.isArray(currentElement.inputs)) {
          newElem += `<div class="plz-container"><div class="plz-wrapper-angehoeriger">`;

          for (let cE in currentElement.inputs) {
            newElem += `
            <img class="angehoeriger-icon " src="img/${currentElement.inputs[cE].image_name}">

            <div class="plz-column-angehoeriger">
              <div class="plz plz-angehoeriger">
                <div class="angehoerigen-alter-title">
                  ${currentElement.inputs[cE].title}
                </div>
                <div class="angehoerigen-input">
                  <input type="text" name="${currentElement.name}" id="option${s}-${parseInt(cE) + 1}" value="${
              currentElement.inputs[cE].value || ""
            }"  class="inputNext">
                </div>
                <div class="plz-button-wrapper plz-button-wrapper-angehoeriger">
                  <div class="option-selector">
                      <a name="12" id="q131" onclick="changeLocation('#que${currentElement.inputs[cE].next}')" ><button name="button" type="button" class="button-design button plz-button next-button continue-button">weiter »</button></a>
                    </div>
                </div>
               </div>
               </div>
               </div>
            `;
          }

          for (let cE in currentElement.buttons) {
            newElem += `
          <button type="button" data-next="${currentElement.buttons[cE].next}"  class="col-md-5 mx-auto btn btn-primary btn-lg mt-3 bg-orange-active" onClick="loadNext()">${currentElement.buttons[cE].value}</button>`;
          }

          newElem += `</div></div>`;
        }
      } else if (currentElement.type == "form-map") {
        if (currentElement.inputs && Array.isArray(currentElement.inputs)) {
          newElem += `<div class="plz-container"><div class="plz-wrapper">`;

          for (let cE in currentElement.inputs) {
            newElem += `

            <div class="plz-column">
            <div class="plz">
            <div class="plz-title">
            <span class="mobile-van">Postleitzahl</span><span class="mobile-app">PLZ</span> oder Wohnort:
            <br>
            <div class="plz-input">
              <input type="text" name="${currentElement.name}" id="option${s}-${parseInt(cE) + 1}" value="${
              currentElement.inputs[cE].value || ""
            }"  class="inputNext">
            </div>
            </div>
            <div class="plz-button-wrapper mobile-van">
            <div class="">
            <a name="12" id="q131" onclick="changeLocation('#que${currentElement.inputs[cE].next}')" ><button name="button" type="button" class="button-design button plz-button next-button continue-button">weiter »</button></a></div>
            </div>
            
            </div>
            <div class="plz-button-wrapper mobile-app">
            <div class="">
            <a name="12" id="q131" onclick="changeLocation('#que${currentElement.inputs[cE].next}')"><button name="button" type="button" class="button-design button plz-button plz-lock button--postcode next-button continue-button">weiter »</button>
            </a></div>
            </div>
            </div>
            <div class="map-wrapper mobile-van">
            <img class="map-img" src="img/${currentElement.inputs[cE].image_name}">
            </div>
           </div>
            `;
          }

          for (let cE in currentElement.buttons) {
            newElem += `
          <button type="button" data-next="${currentElement.buttons[cE].next}"  class="col-md-5 mx-auto btn btn-primary btn-lg mt-3 bg-orange-active" onClick="loadNext()">${currentElement.buttons[cE].value}</button>`;
          }

          newElem += `</div></div>`;
        }
      }  else if (currentElement.type == "loading") {

          newElem += `
            <div class="fieldset-search-bottom-bar"></div>
            <div class="fieldset-subtitle-search">
            ${currentElement.message}
            </div>
            <div class="search-wrapper">
            <div class="search-box">
            <img class="wait-animation" src="img/${currentElement.image_name}">
            </div></div>`;


      } else if (currentElement.type == "wrapper") {
        if (currentElement.colms && Array.isArray(currentElement.colms)) {
          newElem += ``;

          for (let cE in currentElement.colms) {
            newElem += `
            
          <div class="participant-container">
          <div class="participant-wrapper">
<div class="participant-column-wrapper">
<div class="advantage-column">
<div class="advantage-wrapper">
<div class="advantage-box">
<div class="advantage-space">
<div class="advantage-header">
Erhalten Sie nun Ihre<br><span style="font-family: 'opensans-bold'";>individuellen</span> Angebote
</div>
<div class="advantage-bullet-wrapper">
<div class="advantage-bullet">
Geprüfte Anbieter
</div>
<div class="advantage-bullet">
Legale Betreuung
</div>
<div class="advantage-bullet">
Zeit- &amp; Geldersparnis
</div>
<p></p></div>
<p></p></div>
<p></p></div>
<div class="advantage-col-left">
Unser Service:<br>
• 100% kostenlos &amp; unverbindlich<br>
• keine Auftragspflicht<br>
• Bis zu 3 passende Angebote
</div>
<div class="advantage-col-right">
<div class="coop-img-wrapper"><img class="cooperation-img" src="img/erfolgsfaktor_familie.png"></div>
<div class="coop-img-wrapper cooperation-img-van"><img class="cooperation-img" src="img/charta_pflege.png"></div>
<p></p></div>
<p></p></div>
<p></p></div>
<div class="participant-column">
<div class="participant-box">
<div class="participant-row ">
<div class="participant-header"><label class=" size19" for="que${s}-opt${cE}">${
              currentElement.colms[cE].title
            }</label></div>
</div>
<div class="participant-row  ">
<div class="participant-inline "><input type="radio" name="gender" class="" value="Frau" id="sex-female" ></div>
<div class="participant-inline"><label for="sex-female" class="">Frau</label></div>
<div class="participant-inline"><input type="radio" name="gender" value="Herr" id="sex-male" class="valid"></div>
<div class="participant-inline"><label for="sex-male" class="">Herr</label></div>
</div>
<div class="participant-row">
<div class="participant-inline participant-col-left partnews"><input type="text" name="firstname" value="" id="first-name" placeholder="Vorname" required="required" data-required="true" data-remote-validate="false" class="input" x-autocompletetype="given-name" autocompletetype="given-name" aria-required="true" aria-invalid="true"></div>
<div class="participant-inline participant-col-right partnew"><input type="text" name="lastname" value="" id="last-name" placeholder="Nachname" required="required" data-required="true" data-remote-validate="false" class="input" x-autocompletetype="family-name" autocompletetype="family-name" aria-required="true" aria-invalid="true"></div>
</div>
<div class="participant-row">
<div class="participant-single"><input type="tel" name="phone" value="" id="phone"  placeholder="Telefon" class="input" required pattern="[0-9]+" ></div>
</div>
<div class="participant-row">
<div class="participant-single"><input type="email" name="email" value="" id="email" placeholder="E-Mail" required="required" data-required="true" data-remote-validate="false" class="input" x-autocompletetype="email" autocompletetype="email" aria-required="true" aria-invalid="true"></div>
</div>
<div class="participant-row">
<div class="participant-button">
<button name="button" type="submit" value="submit" id="form-submit-button" class="q361 submit-button button button-design" onclick = "validate()">Angebote erhalten »</button>
</div>
</div>
<div class="legal-check-two">
Hiermit stimme ich 
<span class="btn" data-toggle="modal" data-target="#myModal2"> AGB </span>
 und 
 <span class="btn " data-toggle="modal" data-target="#myModal3"> Datenschutz </span>
 zu.

</div>
<div class="advantage-col-left special-app">
Unser Service:<br>
• 100% kostenlos &amp; unverbindlich<br>
• keine Auftragspflicht<br>
• Bis zu 3 passende Angebote
</div>
<div class="advantage-col-right special-app">
<div class="coop-img-wrapper"><img class="cooperation-img" src="img/erfolgsfaktor_familie.png"></div>
<div class="coop-img-wrapper"><img class="cooperation-img" src="img/charta_pflege.png"></div>
</div>
</div>

           
            `;
          }

          for (let cE in currentElement.buttons) {
            newElem += `
          <button type="button" data-next="${currentElement.buttons[cE].next}"  class="col-md-5 mx-auto btn btn-primary btn-lg mt-3 bg-orange-active" onClick="loadNext()">${currentElement.buttons[cE].value}</button>`;
          }

          newElem += `</div></div>`;
        }
      }
      newElem += `</div>`;
    }
    questionApp.innerHTML += newElem;
    newElem = ``;
    var height = $('.ht-'+1).height();
    questionApp.style.height =  height+"px";
  }
  document.body.style.display = ''
}

let GlobalcurrentKey = 1;

let moveOnly = false;
let queNumber = 0;

localStorage.setItem("scrollTop",document.documentElement.scrollTop)
window.onscroll = function (e) {  
  localStorage.setItem("scrollTop",document.documentElement.scrollTop)
} 

function hashChange(hash) {
  location.hash = "que" + hash + "#sli" + currentSlide;
  
  localStorage.setItem('hash',hash)

  // //remove border if in form que 39
  if (hash == 39){
    $('#questionApp').addClass('form-m-border')
    history.pushState(null, null, location.href);
    history.back();
    history.forward();
    window.onpopstate = function ()
    {
        history.go(1);
    };
  }

  setTimeout(function(){ 
    teee(hash)
    var height = $('.ht-'+hash).height();
    questionApp.style.height =  height+"px";
    }, 550);
  //console.log($('.ht-'+hash).height());
  //var height = $('.ht-'+hash).height();
  //questionApp.style.height =  height+"px";

  if (hash == 3 || hash == 13) {
    var queryString = $('#questionApp').serialize();

    var n = queryString.search("haushaltspersonen=eine");
    var k = queryString.search("haushaltspersonen=noch");

    if (n > 0 || k > 0) {
      maxProgressLength = 15;
    }

    console.log(maxProgressLength);
  }

  if (hash == 14 || hash == 24) {
    var queryString = $('#questionApp').serialize();

    console.log(queryString);

    var n = queryString.search("betreuungspersonen=eine%20Person");
    var k = queryString.search("betreuungspersonen=noch%20unklar")

    if (n > 0 || k > 0) {
      maxProgressLength = 16;
    }

    console.log(maxProgressLength);
  }

  if (hash == 38) {

    setTimeout(function(){ loadNext(); }, 5000);
    window.history.pushState(null, "", window.location.href);        
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
  }
  console.log(hash);
  


    /*if(hash==15){
      questionApp.style.height =  "450px";
    }else{
      questionApp.style.height =  "350px";

    }*/
}

function loadQue(currentKey = null, moreOpts = null, moveTime = 500) {
  
  window.scrollTo({top:localStorage.getItem("scrollTop"), behavior: 'smooth'});

  if (slideR) {
    slideR = false;
    setTimeout(function () {
      if ((currentKey || moreOpts == "1") && currentKey in queObj) {
        // if (queObj[currentKey].finish) {
        //   questionApp.submit();
        //   return;
        // }
      }

      if (!currentKey) {
        if (moreOpts == "0") {
          currentKey = previousKey;

          console.log("yes ! Getting previous key.");
          console.log("the key", previousKey);
        }
      }

      if (!currentKey) {
        // get the first key of the object
        currentKey = Object.keys(queObj)[0];
      }

      console.log(Object.keys(queObj).indexOf(String(currentKey)));

      movePosition(currentKey);

      previousButton.style.display = currentKey <= 1 ? "none" : "";

      spanInfo.style.display = currentKey <= 1 ? "" : "none";

      nextButton.style.display = currentKey >= qLength ? "none" : "";

      if (moreOpts == "0") {
        queNumber = Math.min(Object.keys(queObj).length, queNumber - 1);
      }
      // fill in the question number
      else queNumber = Math.max(1, queNumber + 1);

      GlobalcurrentKey = currentKey;

      // add History
      if (!moveOnly && !previousHistory.includes(GlobalcurrentKey)) {
        previousHistory.push(GlobalcurrentKey);
      }

      // document.getElementById(`opt_${currentKey}`).innerText =
      previousHistory.length;
      console.log(currentKey)
      hashChange(GlobalcurrentKey);
      //teee(GlobalcurrentKey);
    }, moveTime);
    setTimeout(function () {
      slideR = true;
    }, 550);
    initiated = true;

  }
}

function loadNext() {
  
  let nextKey = getNextKey();

  if (queObj[String(GlobalcurrentKey)].finish) {

    return questionApp.submit();
  }

  console.log("the next key:", nextKey);
  if (!nextKey) {
    return;
  }
  if (stat) currentSlide = parseInt(currentSlide + 1);
  stat = false
  location.hash = "que" + nextKey + "#sli" + currentSlide;
  console.log(location.hash);

  //hashChange(nextKey);
  // A $( document ).ready() block.
$( document ).ready(function() {
  setTimeout(function(){ $('#spanInfo').addClass("asa" ); }, 1000);


});

  //loadQue(nextKey, null, 500);
}

function changeLocation(nextKey) {
  console.log(nextKey);
  if (stat) currentSlide = parseInt(currentSlide + 1);
  stat = false
  location.hash = nextKey + "#sli" + currentSlide;
}

function loadPrevious() {

  // currentSlide = currentSlide - 1;
  
  previousHistory.pop();
  let nextKey;
  if (!previousHistory.length) {
    nextKey = Object.keys(queObj)[0];
  } else {
    nextKey = previousHistory[previousHistory.length - 1];
  }

  //hashChange(nextKey);

  
}

function getNextKey() {
  let selectedInput, theNext;
  if (event) {
    let et = event.target;
  }
  let currElem;
  moveOnly = false;

  // if (
  //   et.classList.contains("section_items") ||
  //   (et.closest.classList && et.closest.classList.contains("section_items"))
  // ) {
  //   if (et.classList.contains("section_items")) {
  //     currElem = et;
  //   } else {
  //     currElem = et.closest;
  //   }

  //   console.log('the current element:', currElem)
  //   selectedInput = currElem.querySelector(`#${currElem.getAttribute("for")}`);
  //   selectedInput.checked = true;
  //   theNext = selectedInput.dataset.next;
  // } else {
  let curr = document.getElementById(GlobalcurrentKey);
  selectedInput = curr.querySelector("input[type=radio]:checked");
  if (selectedInput) {
    theNext = selectedInput.dataset.next;
  } else {
    selectedInput = curr.querySelector("button");

    let theSelectedNext = queObj[GlobalcurrentKey].next;
    theNext = theSelectedNext;
    moveOnly = true;
    // if (selectedInput) {

    //   theNext = selectedInput.dataset.next;
    // } else {
    //   let theSelectedNext = queObj[GlobalcurrentKey].next;
    //   theNext = theSelectedNext;
    //   moveOnly = true;
    // }
  }
  // }

  return theNext;
}

function findRow(node) {
  var i = 2;
  while ((node = node.previousSibling)) i += node.nodeType ^ 3;
  return i >> 1;
}

let initiated = false;

// instantiate the loadQue
window.onload = function () {
  
  // $('.loadButton')
  popFunc();


  // var currentQue = location.hash.split('#');

  // let theKey = location.hash
  //   ? parseInt(currentQue[1].replace(/\D+/gim, ""))
  //   : Object.keys(queObj)[0];
  // loadQue(theKey, null, 0);

  // setCurrentSlide(parseInt(currentQue[2].replace(/\D+/gim, "")));

  loadQue(1, null, 0);

  setCurrentSlide(1);

  //console.log(theKey);
  inputEvent();
};
localStorage.setItem('i',1)

window.onhashchange = function (e) {
  e.preventDefault();
  console.log(location.hash);

  var currentQue = location.hash.split('#');
  console.log(currentQue);

  if (initiated) loadQue(parseInt(currentQue[1].replace(/\D+/gim, "")), null, 500);
  
  setCurrentSlide(parseInt(currentQue[2].replace(/\D+/gim, "")));

};

function setCurrentSlide(slide) {
  //var currentSli = parseInt(slide) 
  currentSlide = parseInt(slide);
    
  progressBar.style.width = currentSlide / maxProgressLength * 100 + "%"  
  
}



function movePosition(currentKey) {
  let theCurrentKey = 1;
  let theElement, currentPosition, theCurrentElement, theLeftPosition, theRow;
  // currentKey = parseInt(currentKey);

  if (GlobalcurrentKey) {
    theCurrentKey = parseInt(GlobalcurrentKey);
  }
  theElement = document.getElementById(theCurrentKey);
  theCurrentElement = document.getElementById(currentKey);
  theLeftPosition = parseInt(questionApp.style.left) || 0;

  console.log(
    "the current elements",
    theElement,
    theCurrentElement,
    theLeftPosition
  );

  theRow = findRow(theCurrentElement);

  currentPosition = 100 - theRow * 100;

  // currentPosition = (currentPosition / 100) * 620

  console.log("the current position", currentPosition);
  // questionApp.style.left = 0;
 

  if (parseInt(GlobalcurrentKey + 1) < currentKey) {
    questionApp.style.left = currentPosition + 100 + "%";
  } else if (GlobalcurrentKey > parseInt(currentKey + 1)) {
    questionApp.style.left = currentPosition - 100 + "%";
  }
  if (parseInt(currentPosition) != 0) {
    currentPosition += "%";
  }
  console.log(currentPosition + "%");
  $(questionApp).animate({ left: currentPosition });

  console.log("set the width");

  // console.log(Object.keys(queObj).indexOf(currentKey) / (qLength - 1));
  // progressBar.style.width =
  //   (Object.keys(queObj).indexOf(currentKey) / (qLength - 1)) * 100 + "%";


  //currentSlide = parseInt(currentSlide + 1);
  //progressBar.style.width = currentSlide / maxProgressLength * 100 + "%"
}


$(document).ready(function(){

  // Add smooth scrolling to all links
  $(".anchor-link").on('click', function(event) {
       event.preventDefault();
        // $(windinow).scrollTop(0,) ;
        window.scrollTo({ top: 80, left: 100, behavior: 'smooth' });
        $("html, body").animate({ scrollTop: 85 }, 1200);

  });

  //if (window.history && window.history.backward) {
    // window.onpushstate = function() {
    //   currentSlide = parseInt(currentSlide - 1);
    //   progressBar.style.width = currentSlide / maxProgressLength * 100 + "%"
    // }
  //}
    
});


function inputEvent() {

  $('.inputNext').each(function() {
        $(this).keypress(function(e) {
          if(e.which == 13) {
            loadNext()
          }
        });
    });

}

function teee(hash) {
    jQuery('.fly-about').each(function() {
      //console.log($(this).attr('id'))

      var itemId = $(this).attr('id');

      if (itemId == hash) {
        $(this).addClass("test");
      } 
      
      else {
          $(this).removeClass("test");
      }

      if (itemId == 39){
        $('.fake').remove()
        $('.fieldset-wrapper').css('opacity','1')
        stat = true
      }
      
  });
}

function textShadowing(s,p){
  $('.section_items_title').css('textShadow','0 -1px 13px #777')
  $('.option-text'+s+'-'+p).css('textShadow','none')
  
}

$(window).resize(function() {
  var questionApp = document.getElementById('questionApp');
  hash = localStorage.getItem('hash')
  var height = $('.ht-'+hash).height();
  questionApp.style.height =  height+"px";
});