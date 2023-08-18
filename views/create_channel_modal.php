<?php
require "header.php";


?>
<style>
  label {
    margin-bottom: 0rem;
  }

  .form-control {
    margin-bottom: 15px;
  }
</style>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">How you'll appear</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name"
          value="<?= $userObject->getFullName(); ?>">
        <label for="handle">Handle</label>
        <input type="text" class="form-control" id="handle" name="handle" value="@<?= $userObject->getUsername(); ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn " data-dismiss="modal">Cancel</button>
        <button type="button" class="btn" style="color: blue;">Create Channel</button>
      </div>
    </div>
  </div>
</div>