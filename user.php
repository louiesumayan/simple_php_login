<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Page</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        color: #333;
        text-align: center;
      }
      .container {
        background: white;
        padding: 2rem 3rem;
        border-radius: 8px;
        box-shadow: 0 6px 15px rgb(0 0 0 / 0.1);
        max-width: 400px;
        width: 100%;
      }
      h1 {
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 0.2rem;
      }
      .highlight {
        color: #5a7ee3; /* blue-ish */
      }
      p {
        margin: 0.5rem 0 1.5rem;
        font-size: 1rem;
      }
      p a {
        color: #5a7ee3;
        text-decoration: none;
      }
      p a:hover {
        text-decoration: underline;
      }
      button {
        background-color: #5a7ee3;
        color: white;
        border: none;
        padding: 0.7rem 2rem;
        font-size: 1rem;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.25s ease;
      }
      button:hover {
        background-color: #4866c9;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Welcome, <span class="highlight">Halid Test</span></h1>
      <p>This is an <a href="#">user</a> page</p>
      <button>Logout</button>
    </div>
  </body>
</html>
