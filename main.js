function showPwd() {
    var x = document.getElementById("myInput1");
    var y = document.getElementById("myInput2");
    var z = document.getElementById("myInput3");
    if (x.type === "password") {
        x.type = "text";
        y.type = "text";
        z.type = "text";
    } else {
        x.type = "password";
        y.type = "password";
        z.type = "password";
    }
}
