var state_arr = new Array("Fruits", "Vegetables", "Food Grains");

var s_a = new Array();
s_a[0] = "";
s_a[1] =
  "Apple | Apricots | Avocados | Banana | Boysenberries | Blueberries | Bing Cherry | Cherry | Cantaloupe | Crab apples | Clementine | Cucumbers | Dragon Fruit | Elderberry | Eggfruit | Evergreen Huckleberry | Entawak | Fig | Farkleberry | Finger Lime | Grapefruit | Grapes | Gooseberries | Guava | Jackfruit | Java Apple | Jambolan | Kiwi | Kaffir Lime | Kumquat | Lime | Mango | Melon | Olive | Oranges | Papaya | Peach | Pomegranate | Pineapple | Raspberries | Strawberries | Tangerine | Tamarind | Tart Cherries | Watermelon ";
s_a[2] =
  "Asparagus | Avocado | BBQ vegies | Bean | Beetroot | Beetroot and potato salad | Bok choy, pak choy or Chinese chard | Broccoli | Brussels sprouts | Butternut pumpkin in orange | Cabbage | Capsicum | Carrot | Carrot and parsnip muffins | Cauliflower | Cauliflower and broccoli gratin | Celeriac | Celery | Chickpea and couscous salad | Chinese broccoli or gai lan | Chinese cabbage or wong bok | Citrus coleslaw | Corn or sweet corn | Crunchy Waldorf salad | Cucumber | Eggplant, aubergine or brinjal | Eggplant dip | Fennel | Greek salad | Guacamole | Honeyed greens | Italian pasta salad | Lettuce | Mexican corn and tomato salad | Mushroom | Mustard and honey corn on the cob | Onion | Parsnip | Peas | Potato | Potato caesar salad | Pumpkin | Radish | Ratatouille | Salsa | Sesame brussels sprouts | Spinach | Squash | Swede | Sweet potato or kumera | Tabbouleh | Thai beef salad | Thai noodle salad |Tomato";
s_a[3] =
  "Rice | Wheat | Soyabean | Jowar | Bajra | Moong dal | Tur Dal | Masoor dal";

function print_state(state_id) {
  // given the id of the <select> tag as function argument, it inserts <option> tags
  var option_str = document.getElementById(state_id);
  option_str.length = 0;
  option_str.options[0] = new Option("Select Product type ..", "");
  option_str.selectedIndex = 0;
  for (var i = 0; i < state_arr.length; i++) {
    option_str.options[option_str.length] = new Option(
      state_arr[i],
      state_arr[i]
    );
  }
}

function print_city(city_id, city_index) {
  var option_str = document.getElementById(city_id);
  option_str.length = 0;

  option_str.options[0] = new Option("Select Product..", "");
  option_str.selectedIndex = 0;
  var city_arr = s_a[city_index].split("|");
  for (var i = 0; i < city_arr.length; i++) {
    option_str.options[option_str.length] = new Option(
      city_arr[i],
      city_arr[i]
    );
  }
}
