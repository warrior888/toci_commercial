//Patryk Stulczewski - Idea Bank

var labelForName = CreateLabel("Nazwa odbiorcy:", "nazwa");
var labelForNumber = CreateLabel("Numer rachunku:", "numer");
var labelForTitle = CreateLabel("Tytul platnosci:", "tytul");
var labelForSum = CreateLabel("Kwota:", "kwota");


var inputForName = CreateInput("nazwa", "text");
var inputForNumber = CreateInput("numer", "text");
var inputForTitle = CreateInput("tytul", "text");
var inputForSum = CreateInput("kwota", "text");

inputForName.addEvents({
    'keypress': function (event) { Validate(event.key, new RegExp("[a-zA-Z ]")), function() {
        event.preventDefault();
        }
    },
    'keyup': function () {
        if (this.value.length == 1) {
            this.value = this.value.toLocaleUpperCase();
        }
    },
    'focus': function() { FocusAction(this); }   
});

inputForNumber.addEvents({
    'focus': function () { FocusAction(this); },
    'blur': function () { Validate(this.value, new RegExp("^[0-9]{18}$")), function() {
        console.log('niepoprawne dane');
        //this.setAttribute('class', 'badValue');
        }
    }
});

inputForTitle.addEvents({
    'keyup': function () {
        this.value = this.value.toLocaleUpperCase();
    },
    'focus': function () { FocusAction(this); }
});

inputForSum.addEvents({
    'keypress': function (event) { Validate(event.key, new RegExp("[0-9]"), function() {
        event.preventDefault();
    }); },
    'focus': function () { FocusAction(this); },
});

function Validate(value, regexp, failureAction) {
    if (!regexp.test(value)) {
        failureAction();
    }
}

function FocusAction(element) {
    element.setAttribute('placeholder', 'wprowadz dane');
    //element.setAttribute('class', 'input');
}

var LineForm = function(label, input, divClass) {
    this.label = label;
    this.input = input;
 
    var div = GenerateElement('div', '');
    if (divClass != undefined)
        div.setAttribute('class', divClass);

    function getLine() {
        AddHtmlNode(div, label);
        input.hang(div);
        return div;
    }

    return {
        getLine: getLine
    };
}


function GenerateLinesForm() {
    var lines = new Array();
    lines.push(new LineForm(labelForName, inputForName));
    lines.push(new LineForm(labelForNumber, inputForNumber));
    lines.push(new LineForm(labelForTitle, inputForTitle));
    lines.push(new LineForm(labelForSum, inputForSum));

    return lines;
}

function GenerateIdeaBankForm() {
    var form = CreateForm("nordeaForm", SendDataFromForm, "post");
    var linesForm = GenerateLinesForm();
    for (var line in linesForm) {
        AddHtmlNode(form, linesForm[line].getLine());
    }
    AddSubmitButton(form);
    return form;
}

function AddSubmitButton(parentNode) {
    var div = GenerateElement('div', '');
    div.setAttribute('class', 'button');
    var input = CreateInput('', 'submit', 'Wyslij');
    input.hang(div);
    AddHtmlNode(parentNode, div);
}

function CreateInput(id, type,value) {

    var input = GenerateElement('input', id);
    input.type = type;
    if (value != undefined)
        input.value = value;

    function addEvents(events) {
        for (event in events) {
            if (events.hasOwnProperty(event)) {
                input.addEventListener(event, events[event]);
            }
        }
    }
    function hang(parentNode) {
        AddHtmlNode(parentNode, input);
    }

    return {
        hang: hang,
        addEvents: addEvents,
    }
}

function CreateLabel(text, attrFor) {
    var label = GenerateElement("label", "");
    label.setAttribute("for", attrFor);
    label.textContent = text;
    return label;
}

function CreateForm(id, action, method) {
    var form = GenerateElement("form", id);
    form.addEventListener('submit', action);
    form.action = '#';
    form.method = method;
    return form;
}

function AddHtmlNode(parentNode, childNode) {
    parentNode.appendChild(childNode);
}

function GetNode(containerId) {
    return document.getElementById(containerId);
}

function GenerateElement(elementName, id) {
    var element = document.createElement(elementName);
    element.id = id;
    return element;
}

function SendDataFromForm() {
    var form = GetNode("nordeaForm");
    $.ajax({
        url: "",
        data: $(form).serialize(),
        success: function() {
            console.log("wyslano dane z formularza");
        }
    });
}


Bank.addBank('1950', function () {
    return GenerateIdeaBankForm();
});