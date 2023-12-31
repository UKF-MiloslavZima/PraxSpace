<div class="grid__item">
    <div class="product">
        <div class="tm-nav-link">
            <i class="fas fa-comments fa-3x tm-nav-icon"></i>
            <span class="tm-nav-text">Contact</span>
            <div class="product__bg"></div>
        </div>
        <div class="product__description">
            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                <div class="row mb-3">
                    <div class="col-12">
                        <h2 class="tm-page-title">Contact Us</h2>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <p>Lorem ipsum dolor site amet, consectetur adipiscing elit. Aliquam interdum, nisl sed faucibus tempor, massa velit laoreet ipsum, et faucibus sapien magna at enim. Suspendisse a dictum tortor, vel rhoncus libero.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('save-contact') }}" method="post" class="contact-form">
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 tm-col-email">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="contact_message" name="contact_message" class="form-control" rows="9" placeholder="Message" required></textarea>
                            </div>
                            {{ csrf_field() }}
                            <button type="submit" name="submit" class="btn btn-primary tm-btn-submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
