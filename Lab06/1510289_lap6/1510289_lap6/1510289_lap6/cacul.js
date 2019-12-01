function mul(a, b) {
    return a * b;
}
function add(a, b) {
    return a + b;
}
function sub(a, b) {
    return a - b;
}
function division(a, b) {
    return a / b;
}
function square(a) {
    return a * a;
}
function sqrt(a) {
    return sqrt(a);
}
function div(a, b) {
    return a % b;
}
function btn_click() {
    var zero = document.getElementById("zero").innerHTML;
    var one = document.getElementById("one").innerHTML;
    var two = document.getElementById("two").innerHTML;
    var three = document.getElementById("three").innerHTML;
    var four = document.getElementById("four").innerHTML;
    var five = document.getElementById("five").innerHTML;
    var six = document.getElementById("six").innerHTML;
    var seven = document.getElementById("seven").innerHTML;
    var eight = document.getElementById("eight").innerHTML;
    var nine = document.getElementById("nine").innerHTML;
    return [zero, one, two, three, four, five, six, seven, eight, nine];
}
function show(x) {
    document.getElementById("exp").value += x;
}
function dete() {
    var x;
    x = document.getElementById("exp").value;
    x = x.slice(0, x.length - 1);
    document.getElementById("exp").value = x;
}

function calcutor() {
    str = document.getElementById("exp").value;
    var x, y;
    x = parseInt(str[0], 10);
    y = parseInt(str[2], 10);

    switch (str[1]) {
    case "+":
        return add(x, y);
        break;
    case "-":
        return sub(x, y);
        break;
    case "*":
        return mul(x, y);
        break;
    case "/":
        return division(x, y);

    }
}
function result() {
    x = calcutor();
    document.getElementById("result").value = x;
}
function ac_btn() {
    document.getElementById("exp").value = "";
    document.getElementById("result").value = "";

}
