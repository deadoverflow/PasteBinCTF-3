
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PasteBin - Admin Remote Access</title>
  <style>
    body {
      background-color: #f7f7f7;
      color: #333;
      font-family: Arial, sans-serif;
      line-height: 1.5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: calc(100vh - 100px);
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #0080ff;
    }
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    label {
      display: block;
      margin-bottom: 10px;
      font-size: 18px;
      color: #333;
      font-weight: bold;
    }
    input:focus {
      outline: none;
    }
    input[type="text"] {
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #f5f5f5;
      margin-bottom: 20px;
      width: 100%;
      max-width: 400px;
      box-sizing: border-box;
      font-size: 16px;
    }
    input[type="submit"] {
      background-color: #0080ff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #0066cc;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>PasteBin - Admin Remote Access</h1>
    <form method="POST" action="/create.php">
      <label for="key-input">Key:</label>
      <input type="text" id="key-input" name="key" placeholder="Enter key here">
      <label for="code-input">Code to execute:</label>
      <input type="text" id="code-input" name="code" placeholder="Enter code to execute here">
      <input type="submit" value="Execute">
    </form>
  </div>
</body>
</html>
