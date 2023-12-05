<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Date Validation</title>
</head>
<body>

  <form id="dateForm">
    <label for="fromDate">From Date:</label>
    <input type="date" id="fromDate" name="fromDate" required>

    <label for="toDate">To Date:</label>
    <input type="date" id="toDate" name="toDate" required>

    <button type="button" onclick="validateDates()">Submit</button>
  </form>

  <script>
    function validateDates() {
      var fromDate = new Date(document.getElementById('fromDate').value);
      var toDate = new Date(document.getElementById('toDate').value);

      if (fromDate > toDate) {
        alert('Error: "From Date" must be before or equal to "To Date".');
      } else {
        alert('Dates are valid!');
        // You can proceed with further actions here
      }
    }
  </script>

</body>
</html>
