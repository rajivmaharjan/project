fetch("pratice.php")
  .then((response) => {
    if (!response.ok) {
      throw new Error("Something went wrong!");
    }

    return response.json();
  })
  .then((data) => {
    // This is where you handle what to do with the response.
    alert(data); // Will alert: 42
  })
  .catch((error) => {
    // This is where you handle errors.
  });
