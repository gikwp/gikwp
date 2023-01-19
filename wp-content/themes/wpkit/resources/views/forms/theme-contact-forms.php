<div class="row row-forms">
    <div class="col-md-6 mb-3">
        <div class="form-floating wpcf7-form-control-wrap">
            [text* your-name id:yourName class:form-control autocomplete:name placeholder"Name *"]
            <label for="yourName">Name *</label>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="form-floating wpcf7-form-control-wrap">
            [email* your-email id:yourEmail class:form-control autocomplete:email placeholder"name@example.com"]
            <label for="yourEmail">Email address *</label>
        </div>
    </div>

    <div class="col-12 mb-3">
        <div class="form-floating wpcf7-form-control-wrap">
            [text* your-subject id:yourSubject class:form-control placeholder"Subject *"]
            <label for="yourSubject">Subject *</label>
        </div>
    </div>

    <div class="col-12 mb-3">
        <div class="form-floating wpcf7-form-control-wrap">
            [textarea* your-message id:yourMessage class:form-control placeholder"Your message *"]
            <label for="yourMessage">Your message *</label>
        </div>
    </div>
    <div class="col-12">[submit class:btn class:btn-theme "send message"]</div>
</div>