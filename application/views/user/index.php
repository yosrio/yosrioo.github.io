
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->

  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <a class="nav-link" href="<?= base_url('assets/img/profile/') . $user['image']; ?>"> <img src="<?= base_url('assets/img/profile/') .$user['image']; ?>" class="card-img" alt="..."> </a>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= $user['name'] ?></h5>
          <p class="card-text"><?= $user['email'] ?></p>
          <p class="card-text"><?= $role['role'] ?></p>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
            <!-- End of Main Content -->