// getAccountNumber() -> accountNumber: string
function getAccountNumber() {
  
  var accountNumber = document.getElementById("account").value.toString();
  return accountNumber;

}

// isValidAccountNumber(accountNumber: string) -> isValid: bool
function isValidAccountNumber(accountNumber) {
  var regularEx = /[0-9]{26}$/;

  if (regex.test(accountNumber)){
    
    console.log("validation input"+elementId, true);
    return true;
  }
  else{

    console.log("validation input"+elementId, false);
    return false;
  }


}

// getCrucialNumber(accountNumber: string) -> crucialNumber: string
function getCrucialNumber(accountNumber) {}

// renderForm(form: HTMLFormElement) -> undefined
function renderForm(form) {}

// createElement(tagName: string, attributes: { string: any }, fields: { string: any }) -> HTMLElement
// Helper do tworzenia elementów, przykład:
//   createElement('input', {
//     type:  'submit',
//   }, {
//     value: 'Zleć przelew'
//   });
function createElement(tagName, attributes, fields) {
  var element = document.createElement(tagName);

  // Taka atrapa domyślnych argumentów
  fields     = fields     || {};
  attributes = attributes || {};

  for (var attribute in attributes) {
    if (attributes.hasOwnProperty(attribute)) {
      element.setAttribute(attribute, attributes[attribute]);
    }
  }

  for (var field in fields) {
    if (fields.hasOwnProperty(field)) {
      element[field] = fields[field];
    }
  }

  return element;
}