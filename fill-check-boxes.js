// Select the checkbox form
const checkBoxesForm = document.querySelector("#check-boxes");

// Append checkboxes to the form
// Parameter should be an array of check-box elements
function appendBoxes(labels) {
  for (let index = 0; index < labels.length; index++) {
    let div = document.createElement("div");
    div.setAttribute("class", "form-check");

    let input = document.createElement("input");
    input.setAttribute("class", "form-check-input");
    input.setAttribute("type", "checkbox");
    input.setAttribute("id", `${labels[index]}`);
    input.setAttribute("name", `${labels[index]}`);
    input.setAttribute("value", `${labels[index]}`);
    div.appendChild(input);

    let label = document.createElement("label");
    label.setAttribute("class", "form-check-label");
    label.setAttribute("for", `${labels[index]}`);
    label.innerHTML = `${labels[index]}`;
    div.appendChild(label);

    checkBoxesForm.appendChild(div);
  }
}

let assignments = [];
tableData.forEach(function (currentValue) {
  assignments.push(currentValue.AssignmentName);
});

appendBoxes(assignments);
