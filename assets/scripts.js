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

/* NOTE ADD FAQ Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .faq-url-input button').addEventListener('click', () => {
    showFaqSubform()
})

/* NOTE SUBMIT FAQ Subform */
document.querySelector('.rank-main-wrapper .form-container .faq-overlay form').addEventListener('submit', (e) => {
    e.preventDefault()
    const form = e.target

    const faqWrapper = document.createElement('div')
    faqWrapper.className = 'faq'

    faqWrapper.dataset.question = form.question.value
    faqWrapper.dataset.answer = form.answer.value
    faqWrapper.dataset.key = form.question.value

    const faqHeadWrapper = document.createElement('div')
    faqHeadWrapper.className = 'head'
    faqWrapper.appendChild(faqHeadWrapper)

    const questionText = document.createElement('h3')
    questionText.className = 'question'
    questionText.innerHTML = form.question.value
    faqHeadWrapper.appendChild(questionText)

    const editBtn = document.createElement('button')
    editBtn.className = 'faq-edit-btn action-button'
    editBtn.type = 'button'
    editBtn.innerHTML = `<img src="${PLUGIN_DIR}assets/edit_icon.svg">`
    editBtn.addEventListener('click', () => {
        showFaqSubform({
            key: faqWrapper.dataset.key,
            question: faqWrapper.dataset.question,
            answer: faqWrapper.dataset.answer
        })
    })
    faqHeadWrapper.appendChild(editBtn)

    const removeBtn = document.createElement('button')
    removeBtn.className = 'faq-remove-btn action-button'
    removeBtn.type = 'button'
    removeBtn.innerHTML = `<img src="${PLUGIN_DIR}assets/trash_icon.svg">`
    removeBtn.addEventListener('click', () => {
        if (confirm(`Are you sure you want to remove ${faqWrapper.dataset.question} as an FAQ?`)) {
            document.querySelector('.rank-main-wrapper .form-container .main-form .faqs-container').removeChild(faqWrapper)
        }
    })
    faqHeadWrapper.appendChild(removeBtn)

    const answerText = document.createElement('p')
    answerText.innerHTML = form.answer.value
    faqWrapper.appendChild(answerText)

    if (form.edit_key.value) {

        // NOTE Update FAQ Element with key of edit_key.value
        document.querySelector('.rank-main-wrapper .form-container .main-form .faqs-container').replaceChild(faqWrapper, document.querySelector(`.rank-main-wrapper .form-container .main-form .faqs-container .faq[data-key="${form.edit_key.value}"]`))
        
    } else {
        
        // NOTE Add as a new FAQ Element
        document.querySelector('.rank-main-wrapper .form-container .main-form .faqs-container').appendChild(faqWrapper)

    }

    form.reset()
    form.parentNode.style.display = 'none'
})

/* NOTE FAQ Edit Button */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .faqs-container .faq .faq-edit-btn').forEach(button => {
    button.addEventListener('click', () => {
        showFaqSubform(button.parentNode.parentNode.dataset)
    })
})

/* NOTE FAQ Remove Button */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .faqs-container .faq .faq-remove-btn').forEach(button => {
    button.addEventListener('click', () => {

        if (confirm(`Are you sure you want to remove ${button.parentNode.parentNode.dataset.question} as an FAQ?`)) {
            button.parentNode.parentNode.parentNode.removeChild(button.parentNode.parentNode)
        }
    })
})

/* NOTE Add About Page Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .add-about-page-btn').addEventListener('click', () => {
    showAboutPageSubform()
})

/* NOTE About Page Edit Button */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .about-pages-container .about-page .about-edit-btn').forEach(button => {
    button.addEventListener('click', () => {
        showAboutPageSubform(button.parentNode.dataset)
    })
})

/* NOTE About Page Remove Button */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .about-pages-container .about-page .about-remove-btn').forEach(button => {
    button.addEventListener('click', () => {
        if (confirm(`Are you sure you want to remove ${button.parentNode.dataset.url} as an About Page?`)) {
            button.parentNode.parentNode.removeChild(button.parentNode)
        }
    })
})

/* NOTE About Page SUBMIT Subform */
document.querySelector('.rank-main-wrapper .form-container .about-page-overlay form').addEventListener('submit', (e) => {
    e.preventDefault()
    const form = e.target

    const aboutPageWrapper = document.createElement('div')
    aboutPageWrapper.className = 'about-page'

    aboutPageWrapper.dataset.key = form.url.value
    aboutPageWrapper.dataset.url = form.url.value

    const urlText = document.createElement('p')
    urlText.innerHTML = form.url.value
    aboutPageWrapper.appendChild(urlText)

    const editBtn = document.createElement('button')
    editBtn.className = 'about-edit-btn action-button'
    editBtn.type = 'button'
    editBtn.innerHTML = `<img src="${PLUGIN_DIR}assets/edit_icon.svg">`
    editBtn.addEventListener('click', () => {
        showAboutPageSubform({
            key: aboutPageWrapper.dataset.url,
            url: aboutPageWrapper.dataset.url
        })
    })
    aboutPageWrapper.appendChild(editBtn)

    const removeBtn = document.createElement('button')
    removeBtn.className = 'about-remove-btn action-button'
    removeBtn.type = 'button'
    removeBtn.innerHTML = `<img src="${PLUGIN_DIR}assets/trash_icon.svg">`
    removeBtn.addEventListener('click', () => {
        if (confirm(`Are you sure you want to remove ${aboutPageWrapper.dataset.url} as an About Page?`)) {
            document.querySelector('.rank-main-wrapper .form-container .main-form .about-pages-container').removeChild(aboutPageWrapper)
        }
    })
    aboutPageWrapper.appendChild(removeBtn)

    if (form.edit_key.value) {
        // NOTE Update About Page Element with key of edit_key.value
        document.querySelector('.rank-main-wrapper .form-container .main-form .about-pages-container').replaceChild(aboutPageWrapper, document.querySelector(`.rank-main-wrapper .form-container .main-form .about-pages-container .about-page[data-key="${form.edit_key.value}"]`))
    } else {
        // NOTE Add as a new About Page Element
        document.querySelector('.rank-main-wrapper .form-container .main-form .about-pages-container').appendChild(aboutPageWrapper)
    }

    form.reset()
    form.parentNode.style.display = 'none'

})

/* NOTE Contact Page Add Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .add-contact-page-btn').addEventListener('click', () => {
    showContactPageSubform()
})

/* NOTE Contact Page Edit Button */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .contact-pages-container .contact-page .contact-edit-btn').forEach(button => {
    button.addEventListener('click', () => {
        showContactPageSubform(button.parentNode.dataset)
    })
})

/* NOTE Contact Page Remove Button */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .contact-pages-container .contact-page .contact-remove-btn').forEach(button => {
    button.addEventListener('click', () => {
        if (confirm(`Are you sure you want to remove ${button.parentNode.dataset.url} as a Contact Page?`)) {
            button.parentNode.parentNode.removeChild(button.parentNode)
        }
    })
})

/* NOTE Contact Page Submit Subform */
document.querySelector('.rank-main-wrapper .form-container .contact-page-overlay form').addEventListener('submit', (e) => {
    e.preventDefault()
    const form = e.target

    const contactPageWrapper = document.createElement('div')
    contactPageWrapper.className = 'contact-page'

    contactPageWrapper.dataset.key = form.url.value
    contactPageWrapper.dataset.url = form.url.value

    const urlText = document.createElement('p')
    urlText.innerHTML = form.url.value
    contactPageWrapper.appendChild(urlText)

    const editBtn = document.createElement('button')
    editBtn.className = 'about-edit-btn action-button'
    editBtn.type = 'button'
    editBtn.innerHTML = `<img src="${PLUGIN_DIR}assets/edit_icon.svg">`
    editBtn.addEventListener('click', () => {
        showContactPageSubform({
            key: contactPageWrapper.dataset.key,
            url: contactPageWrapper.dataset.url
        })
    })
    contactPageWrapper.appendChild(editBtn)

    const removeBtn = document.createElement('button')
    removeBtn.className = 'about-remove-btn action-button'
    removeBtn.type = 'button'
    removeBtn.innerHTML = `<img src="${PLUGIN_DIR}assets/trash_icon.svg">`
    removeBtn.addEventListener('click', () => {
        if (confirm(`Are you sure you want to remove ${contactPageWrapper.dataset.url} as a Contact Page?`)) {
            document.querySelector('.rank-main-wrapper .form-container .main-form .contact-pages-container').removeChild(contactPageWrapper)
        }
    })
    contactPageWrapper.appendChild(removeBtn)

    if (form.edit_key.value) {
        // NOTE Update Contact Page Element with key of edit_key.value
        document.querySelector('.rank-main-wrapper .form-container .main-form .contact-pages-container').replaceChild(contactPageWrapper, document.querySelector(`.rank-main-wrapper .form-container .main-form .contact-pages-container .contact-page[data-key="${form.edit_key.value}"]`))
    } else {
        // NOTE Add as a new Contact Page Element
        document.querySelector('.rank-main-wrapper .form-container .main-form .contact-pages-container').appendChild(contactPageWrapper)
    }

    form.reset()
    form.parentNode.style.display = 'none'
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
    const form = document.querySelector('.rank-main-wrapper .form-container .faq-overlay form')
    form.edit_key.value = ''

    if (data) {

        // NOTE LOAD Data
        form.edit_key.value = data.key
        form.question.value = data.question
        form.answer.value = data.answer

    }

    document.querySelector('.rank-main-wrapper .form-container .faq-overlay').style.display = 'flex'
}

/* NOTE SHOW About Page Subform */
function showAboutPageSubform(data) {
    const form = document.querySelector('.rank-main-wrapper .form-container .about-page-overlay form')
    form.edit_key.value = ''

    if (data) {
        // NOTE LOAD Data
        form.edit_key.value = data.key
        form.url.value = data.url
    }

    document.querySelector('.rank-main-wrapper .form-container .about-page-overlay').style.display = 'flex'
}

/* NOTE SHOW Contact Page Subform */
function showContactPageSubform(data) {
    const form = document.querySelector('.rank-main-wrapper .form-container .contact-page-overlay form')
    form.edit_key.value = ''

    if (data) {
        // NOTE Load Data
        form.edit_key.value = data.key
        form.url.value = data.url
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

    // NOTE Popup Add FAQ Button if CONFIG.faqPage is not defined
    if (CONFIG.faqPage) {
        document.querySelector('.rank-main-wrapper .form-container .main-form .faq-url-input button').style.transform = 'translateX(0)'
    }
}