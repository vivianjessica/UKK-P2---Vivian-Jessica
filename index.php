<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kalkulator Sederhana</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f4f4f4;
    }

    .calculator {
      border: 1px solid #ccc;
      padding: 30px;
      border-radius: 8px;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    select, input[type="number"], button {
      margin-bottom: 10px;
      padding: 8px;
      font-size: 16px;
    }

    button {
      cursor: pointer;
      border: none;
      border-radius: 6px;
      transition: background-color 0.3s;
    }

    button.calculate {
      background-color: #4caf50;
      color: white;
      margin-right: 4px;
    }

    button.reset {
      background-color: #f44336;
      color: white;
    }

    button.calculate:hover {
      background-color: #45a049;
    }

    button.reset:hover {
      background-color: #cc291f;
    }
  </style>
</head>
<body>
  <div class="calculator">
    <input type="number" id="num1" placeholder="Masukkan angka pertama">
    <input type="number" id="num2" placeholder="Masukkan angka kedua">
    <select id="operator">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>
    <br>
    <button class="reset" onclick="resetCalculator()">Reset</button>
    <button class="calculate" onclick="calculate()">Hitung</button>
    <p>Hasil : <span id="result"></span></p>
  </div>

  <script>
    function calculate() {
      var operator = document.getElementById('operator').value;
      var num1 = parseFloat(document.getElementById('num1').value);
      var num2 = parseFloat(document.getElementById('num2').value);
      var result;

      switch (operator) {
        case 'add':
          result = num1 + num2;
          break;
        case 'subtract':
          result = num1 - num2;
          break;
        case 'multiply':
          result = num1 * num2;
          break;
        case 'divide':
          result = num2 !== 0 ? num1 / num2 : 'Tidak dapat dibagi oleh 0';
          break;
        default:
          result = 'Pilih operasi';
          break;
      }

      document.getElementById('result').innerText = result;
    }

    function resetCalculator() {
      document.getElementById('num1').value = '';
      document.getElementById('num2').value = '';
      document.getElementById('result').innerText = '';
      document.getElementById('operator').selectedIndex = 0;
    }
  </script>
</body>
</html>
