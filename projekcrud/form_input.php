<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="card"></div>

    <div class="center">
      <form
        method="post"
        name="myForm"
        action="proses_input.php"
        onsubmit="return validateForm()"
      >
        <h3 style="margin-top: 1.5rem">Id</h3>
        <input
          name="id"
          class="text-align-left border-radius width-input padding"
          placeholder="Id"
          required
        />

        <h3>First Name</h3>
        <input
          name="fname"
          class="text-align-left border-radius width-input padding"
          placeholder="First Name"
          required
        />

        <h3>Last Name</h3>
        <input
          name="lname"
          class="border-radius width-input padding"
          type="text"
          placeholder="Last Name"
          required
        />

        <h3>Password</h3>
        <input
          name="password"
          class="border-radius width-input padding"
          type="password"
          id="id"
          required
        />

        <h3>Gender</h3>
        <input name="gender" class="padding" type="radio" required />
        <label class="white" name="gender" for="gender" value="laki-laki"
          >Man</label
        >

        <input name="gender" class="padding" type="radio" required />
        <label class="white" name="gender" for="gender" value="perempuan"
          >Woman</label
        >

        <h3>Alamat</h3>
        <input
          name="alamat"
          class="border-radius width-input padding"
          type="text"
          placeholder="Last Name"
          required
        />

        <input
          class="submit-button width-input border-radius padding-submit"
          type="submit"
        />
      </form>
    </div>
  </body>
  <script src="main.js"></script>
</html>
