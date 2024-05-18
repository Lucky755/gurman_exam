// Добавим переменную, которая считает действия (открыть и закрыть)
var count = 0;
// Создадим функцию, которая будет выполняться при нажатии на кнопку
document.getElementById("myButton").onclick = function() {
    count++;
    // Проверка на четность
    if (count % 2 == 0) {
        // присвоет содержимомы тега с запрашиваемым Id пустое значение,
        // то есть уберет все доочерние теги
        document.getElementById("demo").innerHTML = "";
    } else {
        // Создаем новый элемент img
        var img = document.createElement("img");
        // Собственно, добавляем нашу картинку (источник изображения)
        img.src = "photo3.png";
        // Добавляем изображение в параграфф
        document.getElementById("demo").appendChild(img);
    }
}