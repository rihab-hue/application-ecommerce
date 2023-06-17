function getformvalue(formname) {
    var elements = document.forms[formname].elements;
    var obj = {};
    for (var i = 0; i < elements.length; i++) {
        var item = elements.item(i);
        if (!(item instanceof HTMLButtonElement)) {
            obj[item.name] = item.value;
        }

    }

    return obj;

}