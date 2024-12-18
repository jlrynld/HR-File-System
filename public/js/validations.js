function onlyLettersAndSpaces(event) {
    var regex = /^[a-zA-Z\s\.\-ñÑ]*$/;
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
}

function onlyNumbers(event) {
    var inputField = event.target;
    var charCode = event.keyCode;

    if (charCode < 48 || charCode > 57) {
        event.preventDefault();
        return false;
    }

    if (inputField.value.length >= 11) {
        event.preventDefault();
        return false;
    }

    return true;

}

function removeExtraSpaces(input) {
    var inputField = input;
    inputField.value = inputField.value.trim().replace(/\s{2,}/g, ' '); // Replace two or more spaces with one
}

function handlePaste(event) {
    var pastedText = (event.clipboardData || window.clipboardData).getData('text');
    if (!/^[a-zA-Z\s\.\-ñÑ]*$/.test(pastedText)) {
        event.preventDefault();
    }
}
