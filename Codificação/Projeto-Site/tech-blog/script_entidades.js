// Used to populate different values for the various items
const exampleNames = [
    "AAABM (ATLÉTICA)",
    "BAJA MAUÁ",
    "BATERIA MAUÁ - CLUBE DA MANGA",
    "CENTRO ACADÊMICO MAUÁ",
    "COLETIVO MARIE CURIE MAUA",
    "CONCRETO MAUÁ",
    "DEV COMMUNITY MAUÁ",
    "DIVERSIDADE MAUA",
    "ECO MAUÁ",
    "ENACTUS MAUÁ",
    "GRAVITY RACING MAUÁ",
    "HAB MAUÁ",
    "IMT AERODESIGN",
    "INOVA MAUÁ",
    "KIMAUÁNISSO ROBOTICS TEAM",
    "MAUÁ COMPÓSITOS",
    "MAUÁ ESPORTS",
    "MAUÁ FINANCE GROUP",
    "MAUÁ JR.",
    "MAUÁ RACING",
    "MAUÁ RACING H2 TEAM",
    "MAUÁ SOCIAL",
    "MAUÁ3",
    "METAVERSO",
    "NAE MAUÁ",
    "NAWAT GAMES",
    "POCKETS MAUA",
  ];
  
  document.querySelectorAll(".card__price").forEach((price) => {
    let randomPrice = Math.floor(Math.random() * 100) + 1;
    price.textContent = `$${randomPrice}.99`;
  });
  
  document.querySelectorAll(".card__text").forEach((name, i) => {
    name.textContent = exampleNames[i % exampleNames.length];
  });