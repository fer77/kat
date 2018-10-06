<!-- Modal -->
<div id="contactModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content -->
    <div class="modal-content">
        <form class="contact-form mt-4" method="POST" action="/register">
        {{!! csrf_field() !!}}
            <div class="row justify-content-md-center">
                <div class="col-md-5">
                    <input type="text" name="name" class="form-control-custom mb-4" placeholder="Name" value="Your name">
                </div>
                <div class="col-md-5">
                    <input type="text" name="email" class="form-control-custom mb-4" placeholder="Email address" value="Email address">
                </div>
                <br />
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <textarea class="form-control-custom mb-4" rows="3">Your Message</textarea><br />
                    <button type="submit" class="btn btn-primary btn-md pill-btn mb-4">Send Message</button>
                </div> 
            </div>
        </form>
    </div>
  </div>
</div>