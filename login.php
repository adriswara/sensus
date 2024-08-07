<?php include "template/header.php" ?>

<!-- Login -->
<form method="post" action="login_query.php">
  <div class="border-2 border-black w-auto items-center">
    <div class="mb-3 grid-cols-1">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <br>
      <input type="text" name="username" required class="form-control border-2 border-black" id="exampleInputEmail1"
        aria-describedby="emailHelp">
    </div>
    <div class="mb-3 grid-cols-1">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <br>
      <input type="password" name="password" id="pass" required class="form-control border-2 border-black"
        id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" onclick="show()" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Show Password</label>
    </div>
    <input type="submit" name="login" value="LOGIN">
    <input type="reset" name="reset" value="RESET">
  </form>
</div>
<script>
  function show() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
</body>

</html>