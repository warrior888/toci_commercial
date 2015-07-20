function AddHtmlNode(containerId, childNode) {
    var node = document.getElementById(containerId);
    node.appendChild(childNode);
}

function AddNodeToContainer(container, nodeType, nodeId) {
    var node = GenerateElement(nodeType);
    node.id = nodeId;
    container.appendChild(node);
    return node;
}

function GenerateElement(elementName) {
    return document.createElement(elementName);
}

function AddLabeledInput(container, id, inputType, size){
    var label = AddNodeToContainer(container, 'label', id);
    var input = AddNodeToContainer(container, 'input', id);

    input.id = id;
    input.name = id;
    label.setAttribute("for",id);
    input.setAttribute("type", inputType);
    input.setAttribute("size", size);
    label.innerHTML = id.concat(": ");

    input.style.display = "block";
}

function AddDiv(container, divId, align) {
    var div = AddNodeToContainer(container, 'div', divId);

    div.id = divId;
    div.setAttribute("align", align);

    return div;
}

function AddButton(container, id, type, value) {
    var input = AddNodeToContainer(container, 'input', id)
    input.type = type;
    input.value = value;
    input.name = id;
}

function AddFieldset(container, id, title, titleAlign) {
    var fieldset = AddNodeToContainer(container,'fieldset', id);
    var legend = AddNodeToContainer(fieldset, 'legend', title);

    legend.align = titleAlign;
    legend.innerHTML = title;

    return fieldset;
}

function AddImg(container, imgId, align, fileName) {
    var img = AddNodeToContainer(container, 'img', imgId);

    img.id = imgId;
    img.setAttribute("align", align);
    img.setAttribute("src", "images/"+fileName);
    img.setAttribute("alt", "banner Pekao SA");

    return img;
}