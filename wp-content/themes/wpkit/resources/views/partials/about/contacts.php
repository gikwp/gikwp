<?php

/**
 * Displays section Contacts.
 */

?>
<div class="separated my-lg-5"></div>
<section id="contact" class="contact-me">
    <h3 class="display-3">
        Get in touch.
    </h3>
    <div class="row">
        <div class="col-5">
            <div class="contact-info d-flex flex-column bg-cinder p-4 h-100">
                <h5 class="mb-3">What’s your story? Get in touch</h5>
                <p>
                    Hello! I’m available for freelance work. If you have something that you need help with, feel free to
                    contact me at any time.
                </p>
                <p>
                    I believe that all interaction between our customers and me should be carried out
                    <strong>only by email</strong>. I don’t want to lose or smudge over telephone conversations. Short or
                    insignificant
                    moments can be solved through instant messengers or social networks.
                </p>

                <div class="contact-links mt-auto">
                    <label class="text-white fw-light mb-2">Contact Me:</label>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <i class="bi bi-envelope-fill text-emerald"></i>
                            <a href="mailto:support@gikwp.com" target="_blank">
                                Send me an email
                            </a>
                        </li>
                        <li>
                            <i class="bi bi-skype text-emerald"></i>
                            <a href="https://join.skype.com/invite/CAyTiWJ1Nd5q" target="_blank">
                                Send me a message
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="contact-form bg-cinder p-4 h-100">
                <h5 class="mb-3">Say Something</h5>
				<?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form"]' ); ?>
            </div>
        </div>
    </div>
</section>