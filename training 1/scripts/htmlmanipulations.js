

function AddHtmlNode(containerId, childNode) {

    //console.log('childNode', childNode);

    var node = document.getElementById(containerId);

    //alert(node);

    node.appendChild(childNode);

    //node.innerHTML = '<input />';

    //$("#nazwaid")
}

function GenerateElement(elementName) {
    return document.createElement(elementName);
}

