var currentDish = 0;
var appFood = [
  "Falafel",
  "Brik Tunisien",
  "Crostini",
  "Avocado Toast",
  "Miso Ramen",
  "Mozarella Sticks",
];
var appPrice = ["10", "7", "6", "10", "12", "12"];
var appCount = ["0", "0", "0", "0", "0", "0"];
var saladFood = [
  "Caeser Salad",
  "Salad Caprese",
  "Olivier Salad",
  "Greek Salad",
  "Chinese Chicken Salad",
  "Cobb Salad",
];
var saladPrice = ["15", "14", "14", "15", "15", "16"];
var saladCount = ["0", "0", "0", "0", "0", "0"];
var mainFood = [
  "Pizza Margherita",
  "Cacio e Pepe",
  "Risotto",
  "Steak",
  "Fried Chicken",
  "Cheeseburger",
];
var mainPrice = ["20", "19", "18", "24", "17", "17"];
var mainCount = ["0", "0", "0", "0", "0", "0"];
var desertFood = [
  "Mousse au chocolat",
  "Tiramisù",
  "Soufflé",
  "Crème brûlée",
  "Molten Chocolate Cake",
  "Cheesecake",
];
var desertPrice = ["25", "25", "25", "27", "25", "24"];
var desertCount = ["0", "0", "0", "0", "0", "0"];
var drinkFood = ["Coffea", "Tea", "Juice", "Soda", "Mojito", "Cocktail"];
var drinkPrice = ["8", "7", "7", "7", "10", "12"];
var drinkCount = ["0", "0", "0", "0", "0", "0"];
var total = Number(0);

document.onkeydown = function (evt) {
  evt = evt || window.event;
  if (evt.keyCode == 27) {
    closeNav();
  }
};

function inputNumberValueReset(dish) {
  document.getElementById("number1").value = Number(dish[0]);
  document.getElementById("number2").value = Number(dish[1]);
  document.getElementById("number3").value = Number(dish[2]);
  document.getElementById("number4").value = Number(dish[3]);
  document.getElementById("number5").value = Number(dish[4]);
  document.getElementById("number6").value = Number(dish[5]);
}

function menuChange(dish) {
  if (currentDish == dish) {
  } else if (dish == 0) {
    currentDish = dish;
    document.getElementById("food1").textContent = appFood[0];
    document.getElementById("food2").textContent = appFood[1];
    document.getElementById("food3").textContent = appFood[2];
    document.getElementById("food4").textContent = appFood[3];
    document.getElementById("food5").textContent = appFood[4];
    document.getElementById("food6").textContent = appFood[5];
    document.getElementById("price1").textContent = appPrice[0] + "$";
    document.getElementById("price2").textContent = appPrice[1] + "$";
    document.getElementById("price3").textContent = appPrice[2] + "$";
    document.getElementById("price4").textContent = appPrice[3] + "$";
    document.getElementById("price5").textContent = appPrice[4] + "$";
    document.getElementById("price6").textContent = appPrice[5] + "$";
    inputNumberValueReset(appCount);
    document.getElementById("image").src =
      "/ESPREAT/View/Front/assets/imgs/app/image1.jpg";
  } else if (dish == 1) {
    currentDish = dish;
    document.getElementById("food1").textContent = saladFood[0];
    document.getElementById("food2").textContent = saladFood[1];
    document.getElementById("food3").textContent = saladFood[2];
    document.getElementById("food4").textContent = saladFood[3];
    document.getElementById("food5").textContent = saladFood[4];
    document.getElementById("food6").textContent = saladFood[5];
    document.getElementById("price1").textContent = saladPrice[0] + "$";
    document.getElementById("price2").textContent = saladPrice[1] + "$";
    document.getElementById("price3").textContent = saladPrice[2] + "$";
    document.getElementById("price4").textContent = saladPrice[3] + "$";
    document.getElementById("price5").textContent = saladPrice[4] + "$";
    document.getElementById("price6").textContent = saladPrice[5] + "$";
    inputNumberValueReset(saladCount);
    document.getElementById("image").src =
      "/ESPREAT/View/Front/assets/imgs/salad/image1.jpg";
  } else if (dish == 2) {
    currentDish = dish;
    document.getElementById("food1").textContent = mainFood[0];
    document.getElementById("food2").textContent = mainFood[1];
    document.getElementById("food3").textContent = mainFood[2];
    document.getElementById("food4").textContent = mainFood[3];
    document.getElementById("food5").textContent = mainFood[4];
    document.getElementById("food6").textContent = mainFood[5];
    document.getElementById("price1").textContent = mainPrice[0] + "$";
    document.getElementById("price2").textContent = mainPrice[1] + "$";
    document.getElementById("price3").textContent = mainPrice[2] + "$";
    document.getElementById("price4").textContent = mainPrice[3] + "$";
    document.getElementById("price5").textContent = mainPrice[4] + "$";
    document.getElementById("price6").textContent = mainPrice[5] + "$";
    inputNumberValueReset(mainCount);
    document.getElementById("image").src =
      "/ESPREAT/View/Front/assets/imgs/main/image1.jpg";
  } else if (dish == 3) {
    currentDish = dish;
    document.getElementById("food1").textContent = desertFood[0];
    document.getElementById("food2").textContent = desertFood[1];
    document.getElementById("food3").textContent = desertFood[2];
    document.getElementById("food4").textContent = desertFood[3];
    document.getElementById("food5").textContent = desertFood[4];
    document.getElementById("food6").textContent = desertFood[5];
    document.getElementById("price1").textContent = desertPrice[0] + "$";
    document.getElementById("price2").textContent = desertPrice[1] + "$";
    document.getElementById("price3").textContent = desertPrice[2] + "$";
    document.getElementById("price4").textContent = desertPrice[3] + "$";
    document.getElementById("price5").textContent = desertPrice[4] + "$";
    document.getElementById("price6").textContent = desertPrice[5] + "$";
    inputNumberValueReset(desertCount);
    document.getElementById("image").src =
      "/ESPREAT/View/Front/assets/imgs/desert/image1.jpg";
  } else if (dish == 4) {
    currentDish = dish;
    document.getElementById("food1").textContent = drinkFood[0];
    document.getElementById("food2").textContent = drinkFood[1];
    document.getElementById("food3").textContent = drinkFood[2];
    document.getElementById("food4").textContent = drinkFood[3];
    document.getElementById("food5").textContent = drinkFood[4];
    document.getElementById("food6").textContent = drinkFood[5];
    document.getElementById("price1").textContent = drinkPrice[0] + "$";
    document.getElementById("price2").textContent = drinkPrice[1] + "$";
    document.getElementById("price3").textContent = drinkPrice[2] + "$";
    document.getElementById("price4").textContent = drinkPrice[3] + "$";
    document.getElementById("price5").textContent = drinkPrice[4] + "$";
    document.getElementById("price6").textContent = drinkPrice[5] + "$";
    inputNumberValueReset(drinkCount);
    document.getElementById("image").src =
      "/ESPREAT/View/Front/assets/imgs/drink/image1.jpg";
  }
}

function totalCount() {
  total = 0;
  var i;
  for (i = 0; i < 6; i++) {
    total += Number(appCount[i]) * Number(appPrice[i]);
    total += Number(saladCount[i]) * Number(saladPrice[i]);
    total += Number(mainCount[i]) * Number(mainPrice[i]);
    total += Number(desertCount[i]) * Number(desertPrice[i]);
    total += Number(drinkCount[i]) * Number(drinkPrice[i]);
  }
}

function priceChange(food, number) {
  if (currentDish == 0) {
    appCount[food] = document.getElementById(number).value;
    totalCount();
    document.getElementById("total").textContent = total + "$";
  }
  if (currentDish == 1) {
    saladCount[food] = document.getElementById(number).value;
    totalCount();
    document.getElementById("total").textContent = total + "$";
  }
  if (currentDish == 2) {
    mainCount[food] = document.getElementById(number).value;
    totalCount();
    document.getElementById("total").textContent = total + "$";
  }
  if (currentDish == 3) {
    desertCount[food] = document.getElementById(number).value;
    totalCount();
    document.getElementById("total").textContent = total + "$";
  }
  if (currentDish == 4) {
    drinkCount[food] = document.getElementById(number).value;
    totalCount();
    document.getElementById("total").textContent = total + "$";
  }
  checkoutTotal();
}

function imageHover(image) {
  if (currentDish == 0) {
    var srcc = "/ESPREAT/View/Front/assets/imgs/app/" + image + ".jpg";
    document.getElementById("image").src = srcc;
  }
  if (currentDish == 1) {
    var srcc = "/ESPREAT/View/Front/assets/imgs/salad/" + image + ".jpg";
    document.getElementById("image").src = srcc;
  }
  if (currentDish == 2) {
    var srcc = "/ESPREAT/View/Front/assets/imgs/main/" + image + ".jpg";
    document.getElementById("image").src = srcc;
  }
  if (currentDish == 3) {
    var srcc = "/ESPREAT/View/Front/assets/imgs/desert/" + image + ".jpg";
    document.getElementById("image").src = srcc;
  }
  if (currentDish == 4) {
    var srcc = "/ESPREAT/View/Front/assets/imgs/drink/" + image + ".jpg";
    document.getElementById("image").src = srcc;
  }
}

function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  checkoutTotal();
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function checkoutTotal() {
  document.getElementById("checkout-p").textContent = "";
  var j = 0;
  for (j = 0; j < 6; j++) {
    if (appCount[j] > 0) {
      document.getElementById("checkout-p").innerHTML +=
        appCount[j] + "x" + appFood[j] + "<br>";
    }
  }
  for (j = 0; j < 6; j++) {
    if (saladCount[j] > 0) {
      document.getElementById("checkout-p").innerHTML +=
        saladCount[j] + "x" + saladFood[j] + "<br>";
    }
  }
  for (j = 0; j < 6; j++) {
    if (mainCount[j] > 0) {
      document.getElementById("checkout-p").innerHTML +=
        mainCount[j] + "x" + mainFood[j] + "<br>";
    }
  }
  for (j = 0; j < 6; j++) {
    if (desertCount[j] > 0) {
      document.getElementById("checkout-p").innerHTML +=
        desertCount[j] + "x" + desertFood[j] + "<br>";
    }
  }
  for (j = 0; j < 6; j++) {
    if (drinkCount[j] > 0) {
      document.getElementById("checkout-p").innerHTML +=
        drinkCount[j] + "x" + drinkFood[j] + "<br>";
    }
  }
  if (Number(total) > 0) {
    document.getElementById("checkout-p").innerHTML += total + "$";
  }
}

function confirmOrder() {
  if (Number(total) == 0) {
    document.getElementById("confirm-p").innerHTML =
      "Please select products before you checkout";
  } else {
    document.getElementById("confirm-p").innerHTML =
      "Checkout confirmed" +
      "<br>" +
      "Your food will be delivered to" +
      "<br>" +
      document.getElementById("adress-input").value +
      "<br>" +
      "Order will arrive in 45mins to 1hour";
  }
}
