function formRender()
{
    var form = document.createElement("form");
    form.setAttribute("method","POST");
    form.setAttribute("action","#");
    
    var input = document.createElement("input");
    input.setAttribute("type","text");
    
    form.appendChild(input);
    return form;
}

function InsertForm(form,containerId)
{
    var container = document.getElementById(containerId);
    container.appendChild(form);
}