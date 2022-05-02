let digit1Field = document.querySelector("#field1");
let digit2Field = document.querySelector("#field2");
let digit3Field = document.querySelector("#field3");
let digit4Field = document.querySelector("#field4");

digit1Field.addEventListener('input', function (event) {
    //put the focus on the next input field (when delete isn't pressed)
    if (event.inputType != "deleteContentBackward" && event.inputType != "deleteContentForward") {
        digit2Field.focus();
    }

});

digit2Field.addEventListener('input', function (event) {
    //put the focus on the next input field (when delete isn't pressed)
    if (event.inputType != "deleteContentBackward" && event.inputType != "deleteContentForward") {
        digit3Field.focus();
    }

});

digit3Field.addEventListener('input', function (event) {
    //put the focus on the next input field (when delete isn't pressed)
    if (event.inputType != "deleteContentBackward" && event.inputType != "deleteContentForward") {
        digit4Field.focus();
    }

});