<form method="post" action="/contact">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <input type="text" name="name" class="form-control-custom mb-4" placeholder="Your Name"  required />
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control-custom mb-4" placeholder="Email address"  required />
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-md pill-btn mb-4" type="submit" name="btnSubmit" value="Send Message" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <textarea class="form-control-custom mb-4" name="message" placeholder="Your Message" style="width: 100%; height: 150px;" required></textarea>
            </div>
        </div>
    </div>
</form>