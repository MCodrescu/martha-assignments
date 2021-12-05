// The parameter should be an array of json objects,
// the columns to include (default is all),
// the column labels,
// and whether the numbers should be formatted as financial numbers.
function fillTable(
  tableData,
  tableHeadId = "#tableHead",
  tableBodyId = "#tableBody",
  colNames = Object.keys(tableData[0]),
  colLabels = Object.keys(tableData[0]),
  financial = [].fill(false, 0, colNames.length)
) {
  //Selects the table head and body from the DOM
  let tableHead = document.querySelector(tableHeadId);
  let tableBody = document.querySelector(tableBodyId);

  // Column names, number of rows, number of columns
  let nCol = colNames.length;
  let nRow = tableData.length;

  // Insert table head
  let firstrow = tableHead.insertRow();
  for (let index = 0; index < nCol; index++) {
    firstrow.insertCell(index).innerHTML = colLabels[index];
  }

  //Insert table data
  for (let index_r = 0; index_r < nRow; index_r++) {
    let row = tableBody.insertRow();
    for (let index_c = 0; index_c < nCol; index_c++) {
      let cell = row.insertCell(index_c);
      let value = tableData[index_r][colNames[index_c]];
      if (financial[index_c]) {
        if (typeof value === "number") {
          cell.innerHTML = formatter.format(value);
        } else {
          cell.innerHTML = tableData[index_r][colNames[index_c]];
        }
      } else {
        cell.innerHTML = tableData[index_r][colNames[index_c]];
      }
    }
  }
}

// Create our number formatter.
var formatter = new Intl.NumberFormat("en-US", {
  style: "currency",
  currency: "USD",
});
