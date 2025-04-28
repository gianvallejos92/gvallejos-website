<div id="contact-form">
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
        <input type="hidden" name="action" value="custom_contact_form" />
        <div class="fc-wrapper">
            <div class="fc-row">
                <div class="fc-left">
                    <label for="name" class="text-left m-bottom-xs">Full Name</label>
                    <input type="text" name="name" id="name" class="form-input input-border" required>
                </div>
                <div class="fc-right">
                <label for="email" class="text-left m-bottom-xs">Email</label>
                    <input type="email" name="email" id="email" class="form-input input-border" required>
                </div>
            </div>
            <div class="fc-row">
                <div class="fc-left">
                    <label for="company-name" class="text-left m-bottom-xs">Company Name</label>
                    <input type="text" name="company-name" id="company-name" class="form-input input-border">
                </div>
                <div class="fc-right">
                    <label for="brand-name" class="text-left m-bottom-xs">Brand Name</label>
                    <input type="text" name="brand-name" id="brand-name" class="form-input input-border">
                </div>
            </div>
            <div class="fc-row">
                <label for="content" class="text-left form-text-area-label m-bottom-xs">Tell me a bit about your project</label>
                <textarea name="content" id="content" class="form-text-area input-border" required></textarea>
            </div>
            <div class="fc-row-submit">
                <input type="submit" value="Submit" class="btn btn-blue">
            </div>
        </div>
    </form>
</div>