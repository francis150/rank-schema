/* NOTE Pre-load configs */
const MAIN_FORM = document.querySelector('.rank-main-wrapper .form-container .main-form')

if (CONFIG) {
    // NOTE SHOW Main Form
    document.querySelector('.rank-main-wrapper .get-started-container').style.display = 'none';
    document.querySelector('.rank-main-wrapper .form-container').style.display = 'inherit';

    // NOTE Load form data
    loadMainFormData()
}

/* NOTE  Validate Wiki Entity */
document.querySelector('.rank-main-wrapper .form-container .main-form .wiki-entity button').addEventListener('click', () => {
    const helpTip = document.querySelector('.rank-main-wrapper .form-container .main-form .wiki-entity small')
    const input = document.querySelector('.rank-main-wrapper .form-container .main-form .wiki-entity input')

    if (input.value) {

        helpTip.innerHTML = 'Validating...'
        helpTip.style.color = '#363636'

        const validateWikiEntity = new XMLHttpRequest()
        validateWikiEntity.open('POST', `***REMOVED***schema-generator/validateQuery?niche=${input.value}`, true)

        validateWikiEntity.onload = function () {
            if (this.status == 200) {
                if (JSON.parse(this.response)) {
                    helpTip.innerHTML = 'Wikipedia Entity Valid and Available in Wikipedia.'
                    helpTip.style.color = '#389D48'
                } else {
                    helpTip.innerHTML = 'Wikipedia Entity Invalid and Not Available in Wikipedia.'
                    helpTip.style.color = '#B50000'
                }
            } else {
                helpTip.innerHTML = 'Something went wrong while validating Wikipedia Entity.'
                helpTip.style.color = '#B50000'
            }
        }

        validateWikiEntity.send()


    } else {
        helpTip.innerHTML = 'Please input a Wikipedia Entity first.'
        helpTip.style.color = '#B50000'
        input.select()
    }
})

/* NOTE Wiki Entity Input reset hint text on value change */
document.querySelector('.rank-main-wrapper .form-container .main-form .wiki-entity input').addEventListener('keyup', () => {
    const helpTip = document.querySelector('.rank-main-wrapper .form-container .main-form .wiki-entity small')
    helpTip.innerHTML = 'Press validate to check if Wiki Entity is available.'
    helpTip.style.color = '#363636'
})

/* NOTE ADD FAQ Button Popup in input */
document.querySelector('.rank-main-wrapper .form-container .main-form .faq-url-input input').addEventListener('keyup', (e) => {
    const button = document.querySelector('.rank-main-wrapper .form-container .main-form .faq-url-input button')

    if (e.target.value) {
        button.style.transform = 'translateX(0)'
    } else {
        button.style.transform = 'translateX(-50px)'
    }
})

/* NOTE Add FAQ Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .faq-url-input button').addEventListener('click', () => {
    showFaqSubform()
})

/* NOTE Add About Page Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .add-about-page-btn').addEventListener('click', () => {
    showAboutPageSubform()
})

/* NOTE Add Contact Page Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .add-contact-page-btn').addEventListener('click', () => {
    showContactPageSubform()
})

/* NOTE Add Service Page Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .add-service-page-btn').addEventListener('click', () => {
    showServicePageSubform()
})

/* NOTE Add Service Area Page Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .add-service-area-page-btn').addEventListener('click', () => {
    showServiceAreaPageSubform()
})

/* NOTE Add Blog Post Page Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .add-blog-post-page-btn').addEventListener('click', () => {
    showBlogPostPageSubform()
})

/* NOTE CLOSE Any of the SubForms */
document.querySelectorAll('.rank-main-wrapper .form-container .overlay-wrapper .buttons .cancel-btn').forEach(button => {
    button.addEventListener('click', (e) => {
        e.target.parentNode.parentNode.reset()
        e.target.parentNode.parentNode.parentNode.style.display = 'none'
    })
})

/* NOTE SHOW FAQ Subform */
function showFaqSubform(data) {
    if (data) {
        // TODO LOAD Data
    }

    document.querySelector('.rank-main-wrapper .form-container .faq-overlay').style.display = 'flex'
}

/* NOTE SHOW About Page Subform */
function showAboutPageSubform(data) {
    if (data) {
        // TODO LOAD Data
    }

    document.querySelector('.rank-main-wrapper .form-container .about-page-overlay').style.display = 'flex'
}

/* NOTE SHOW Contact Page Subform */
function showContactPageSubform(data) {
    if (data) {
        // TODO Load Data
    }

    document.querySelector('.rank-main-wrapper .form-container .contact-page-overlay').style.display = 'flex'
}

/* NOTE SHOW Service Page Subform */
function showServicePageSubform(data) {
    if (data) {
        // TODO Load Data
    }

    document.querySelector('.rank-main-wrapper .form-container .services-overlay').style.display = 'flex'
}

/* NOTE SHOW Service Area Page Subform */
function showServiceAreaPageSubform(data) {
    if (data) {
        // TODO Load Data
    }

    document.querySelector('.rank-main-wrapper .form-container .service-areas-overlay').style.display = 'flex'
}

/* NOTE SHOW Blog Post Page Subform */
function showBlogPostPageSubform(data) {
    if (data) {
        // TODO Load Data
    }

    document.querySelector('.rank-main-wrapper .form-container .blog-posts-overlay').style.display = 'flex'
}

/* NOTE Load Main Form Data */
function loadMainFormData() {
    if (!CONFIG) return

    MAIN_FORM.schemaType.value = CONFIG.schemaType
    MAIN_FORM.businessName.value = CONFIG.businessName
    MAIN_FORM.ownersName.value = CONFIG.ownersName
    MAIN_FORM.imageURL.value = CONFIG.imageURL
    MAIN_FORM.slogan.value = CONFIG.slogan
    MAIN_FORM.description.innerHTML = CONFIG.description
    MAIN_FORM.disambiguatingDescription.value = CONFIG.disambiguatingDescription
    MAIN_FORM.streetAddress.value = CONFIG.streetAddress
    MAIN_FORM.cityTown.value = CONFIG.cityTown
    MAIN_FORM.state.value = CONFIG.state
    MAIN_FORM.zipCode.value = CONFIG.zipCode
    MAIN_FORM.country.value = CONFIG.country
    MAIN_FORM.phone.value = CONFIG.phone
    MAIN_FORM.email.value = CONFIG.email
    MAIN_FORM.query.value = CONFIG.query
    MAIN_FORM.privacyPolicyURL.value = CONFIG.privacyPolicyURL
    MAIN_FORM.keywords.value = CONFIG.keywords.join(', ')
    MAIN_FORM.backlinks.value = CONFIG.backlinks.join("\r\n")
    MAIN_FORM.faqURL.value = CONFIG.faqPage.url ?? ''

    // TODO Popup Add FAQ Button if CONFIG.faqPage is not defined
}