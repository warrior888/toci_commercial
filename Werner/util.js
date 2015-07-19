// getAccountNumber() -> accountNumber: string
function getAccountNumber() {}

// isValidAccountNumber(accountNumber: string) -> isValid: bool
// wiem, ze bieda i ifologia, ale na razie lepiej nie potrafie :P
function isValidAccountNumber(accountNumber) {
    if (accountNumber.length == 26){
      return "True";
    }
}

// getCrucialNumber(accountNumber: string) -> crucialNumber: string
function getCrucialNumber(accountNumber) {
    return accountNumber.substring(2, 4);
}

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
