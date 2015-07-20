/**
 * Created by Adam on 2015-07-16.
 */

function AddHtmlNode(containerId, childNode) {
    var node = document.getElementById(containerId);

    node.appendChild(childNode);

}

function GenerateElement(elementName) {
    return document.createElement(elementName);
}