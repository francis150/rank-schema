
/* NOTE  Validate Wiki Entity */
document.querySelector('.rank-main-wrapper .form-container .main-form .wiki-entity button').addEventListener('click', () => {
    const helpTip = document.querySelector('.rank-main-wrapper .form-container .main-form .wiki-entity small')
    const input = document.querySelector('.rank-main-wrapper .form-container .main-form .wiki-entity input')

    if (input.value) {

        helpTip.innerHTML = 'Validating...'
        helpTip.style.color = '#363636'

        const validateWikiEntity = new XMLHttpRequest()
        validateWikiEntity.open('POST', `https://rank-schema-plugin-server.herokuapp.com/schema-generator/validateQuery?niche=${input.value}`, true)

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