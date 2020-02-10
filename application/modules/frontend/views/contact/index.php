<section class="p-b-0">
    <div class="container">
      <div class="heading">
        <i class="fa fa-envelope-open-o"></i>
        <h2>Get in touch with us</h2>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p> -->
      </div>
    </div>
  </section>

  <section class="p-t-10">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx-auto">
          <?=$this->session->flashdata('info')?>
          <form method="post" action="<?=base_url()?>contact/add">
            <!-- <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              <b>Well done!</b> You successfully read this important alert message.
            </div> -->
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email" value="<?php echo set_value('email'); ?>">
              <?php echo form_error('email', '<small class="form-text text-danger">', '</small>'); ?>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Enter your name">
                  <?php echo form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <select id="subject" name="subjek" class="form-control select2">
    								<option value="general">General</option>
    								<option value="partnership">Partnership</option>
    								<!-- <option value="report bug">Report Bug</option> -->
    								<option value="support">Support</option>
                  </select>
                  <?php echo form_error('subjek', '<small class="form-text text-danger">', '</small>'); ?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" name="pesan" rows="6"></textarea>
              <?php echo form_error('pesan', '<small class="form-text text-danger">', '</small>'); ?>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-rounded btn-effect btn-shadow float-right" name="submitpesan">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
