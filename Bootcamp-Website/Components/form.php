     <form action="index.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
               <label for="first-name" class="col-form-label">
              First Name:
            </label>
            <input type="text" class="form-control" id="first-name" name="firstname">
            </div>
           
            <div class="mb-3">
               <label for="last-name" class="col-form-label">
              Last Name:
            </label>
            <input type="text" class="form-control" id="last-name" name="lastname">
            </div>
           
            <div class="mb-3">
               <label for="last-name" class="col-form-label">
              Profile Picture:
            </label>
            <input type="file" class="form-control" id="profile" name="profile" required>
            </div>
           
            <div class="mb-3">
                <label for="email" class="col-form-label">
              Email:
            </label>
            <input type="text" class="form-control" id="email" name="email">
            </div>
          
            <div class="mb-3">
                <label for="phone" class="col-form-label">
              Phone:
            </label>
            <input type="text" class="form-control" id="phone" name="phone">
            </div>

            
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
          </form>
        </div>
  