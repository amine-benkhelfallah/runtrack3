

function jsonValueKey(jsonString, key) {
    let jsonData = JSON.parse(jsonString);
    return jsonData[key];
  }

  

  let jsonString = '{"name": "La Plateforme_","address": "8 rue d\'hozier","city": "Marseille","nb_staff": "11","creation":"2019"}';
  let key = "city";
  console.log(jsonValueKey(jsonString, key));