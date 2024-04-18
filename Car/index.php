<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* General styles */
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: linear-gradient(45deg, #091832, #24637a);
    }
    /* Container styles */
    .container {
      display: flex;
      flex-wrap: wrap;
      max-width: 900px;
      margin: 0 auto;
      border: 1px solid #ccc;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    /* Left section styles */
    .left {
      flex: 1;
      padding: 10px;
    }
    /* Right section styles */
    .right {
      flex: 1;
      padding: 10px;
      border-left: 1px solid #ccc;
    }
    /* Heading styles */
    h1 {
      text-align: center;
    }
    /* Table styles */
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th,
    td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: powderblue;
    }
    /* Input styles */
    input[type='text'],
    input[type='number'],
    input[type='email'] {
      width: 80%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    /* Button styles */
    button {
      padding: 10px 20px;
      background-color: orangered;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
  <title>Student Registration</title>
</head>
<body>
  <header>
    <h1>Student Registration</h1>
  </header>
  <main class="container">
    <section class="left">
      <form id="record-form">
        <input type="text" id="name" placeholder="Enter Name">
        <input type="number" id="age" placeholder="Enter Age">
        <input type="email" id="email" placeholder="Enter Email">
        <input type="hidden" id="edit-index" value="-1">
        <button type="submit">Add Record</button>
      </form>
    </section>
    <section class="right">
      <h2>Records</h2>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody id="record-list"></tbody>
      </table>
    </section>
  </main>
  <script>
    const recordForm = document.getElementById('record-form');
    const nameInput = document.getElementById('name');
    const ageInput = document.getElementById('age');
    const emailInput = document.getElementById('email');
    const recordList = document.getElementById('record-list');
    const editIndexInput = document.getElementById('edit-index');
    let records = JSON.parse(localStorage.getItem('records')) || [];
    
    function displayRecords() {
      recordList.innerHTML = '';
      records.forEach((record, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
          <td>${record.name}</td>
          <td>${record.age}</td>
          <td>${record.email}</td>
          <td><button onclick="editRecord(${index})">Edit</button></td>
          <td><button onclick="deleteRecord(${index})">Delete</button></td>
        `;
        recordList.appendChild(row);
      });
    }
    
    recordForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const name = nameInput.value;
      const age = ageInput.value;
      const email = emailInput.value;
      const editIndex = parseInt(editIndexInput.value);
      if (name && age && email) {
        if (editIndex === -1) {
          records.push({ name, age, email });
        } else {
          records[editIndex] = { name, age, email };
          editIndexInput.value = -1;
        }
        localStorage.setItem('records', JSON.stringify(records));
        nameInput.value = '';
        ageInput.value = '';
        emailInput.value = '';
        displayRecords();
      }
    });
    
    function editRecord(index) {
      const record = records[index];
      nameInput.value = record.name;
      ageInput.value = record.age;
      emailInput.value = record.email;
      editIndexInput.value = index;
    }
    
    function deleteRecord(index) {
      records.splice(index, 1);
      localStorage.setItem('records', JSON.stringify(records));
      displayRecords();
    }
    
    displayRecords();
  </script>
</body>
</html>