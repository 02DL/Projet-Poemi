  <section class="container text-center container-loisir" id="formulaire">
    <h2 class="display-4 font-weight-normal text-center">Sign Up</h2>
    <!--Le formulaire pour s'inscrire avec pseudo et mdp et image-->
    <form action="index.php?c=process_inscription" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <input type="text" class="form-control" name="usernameI" placeholder="Username">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" name="mdpI" placeholder="Password">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" name="mdpVerifI" placeholder="Confirm your password">
      </div>

      <label for="photoProfileI">Upload your profile picture (format : png)</label><br>
      <input type="file" name="photoProfileI">
      <input type="hidden" name="photoProfileI" value="20000" accept="image/png">

      <button type="submit" class="btn btn-info btn-block">Submit</button>
    </form>
 </section>
