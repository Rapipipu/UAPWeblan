<section>
    <div class="d-flex" style="position:fixed;top:10%;width:60%;left:30%;background:white;padding:50px;border-radius:20px;">
    <table class="table table-borderless table-responsive-xl">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Contact</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($pegawaii as $pegawai){
    ?>
    <tr>
      <th><?=$pegawai['id']?></th>
      <td><?=$pegawai['username']?></td>
      <td><?=$pegawai['umur']?></td>
      <td><?=$pegawai['telefon']?></td>
      <td class="btn-custom"><a href="#" >Edit</a><a href="#" >Delete</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
</section>
