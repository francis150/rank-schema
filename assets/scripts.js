/* NOTE Pre-load configs */
const MAIN_FORM = document.querySelector('.rank-main-wrapper .form-container .main-form')

if (CONFIG) {
    // NOTE SHOW Main Form
    document.querySelector('.rank-main-wrapper .get-started-container').style.display = 'none';
    document.querySelector('.rank-main-wrapper .form-container').style.display = 'inherit';

    // NOTE Load form data
    loadMainFormData()
}

/* NOTE WIKI ENTITY Validate Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .wiki-entity button').addEventListener('click', () => {
    const helpTip = document.querySelector('.rank-main-wrapper .form-container .main-form .wiki-entity small')
    const input = document.querySelector('.rank-main-wrapper .form-container .main-form .wiki-entity input')

    if (input.value) {

        helpTip.innerHTML = 'Validating...'
        helpTip.style.color = '#363636'
        input.disabled = true

        const validateWikiEntity = new XMLHttpRequest()
        validateWikiEntity.open('POST', `https://rank-schema-plugin-server.herokuapp.com/schema-generator/validateQuery?niche=${input.value}`, true)

        validateWikiEntity.onload = function () {
            input.disabled = false

            if (this.status == 200) {
                if (JSON.parse(this.response)) {
                    helpTip.innerHTML = 'Wikipedia Entity Valid and Available.'
                    helpTip.style.color = '#389D48'
                } else {
                    helpTip.innerHTML = 'Wikipedia Entity Invalid and Not Available.'
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

/* NOTE WIKI ENTITY Reset Hint text on input change */
document.querySelector('.rank-main-wrapper .form-container .main-form .wiki-entity input').addEventListener('keyup', () => {
    const helpTip = document.querySelector('.rank-main-wrapper .form-container .main-form .wiki-entity small')
    helpTip.innerHTML = 'Press validate to check if Wiki Entity is available.'
    helpTip.style.color = '#363636'
})

/* NOTE FAQ Popup Add Button input keydown */
document.querySelector('.rank-main-wrapper .form-container .main-form .faq-url-input input').addEventListener('keyup', (e) => {
    const button = document.querySelector('.rank-main-wrapper .form-container .main-form .faq-url-input button')

    if (e.target.value) {
        button.style.transform = 'translateX(0)'
    } else {
        button.style.transform = 'translateX(-50px)'
    }
})

/* NOTE FAQ Add Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .faq-url-input button').addEventListener('click', () => {
    showFaqSubform()
})

/* NOTE FAQ Subform Submit */
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

/* NOTE FAQ Edit Buttons */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .faqs-container .faq .faq-edit-btn').forEach(button => {
    button.addEventListener('click', () => {
        showFaqSubform(button.parentNode.parentNode.dataset)
    })
})

/* NOTE FAQ Remove Buttons */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .faqs-container .faq .faq-remove-btn').forEach(button => {
    button.addEventListener('click', () => {

        if (confirm(`Are you sure you want to remove "${button.parentNode.parentNode.dataset.question}" as an FAQ?`)) {
            button.parentNode.parentNode.parentNode.removeChild(button.parentNode.parentNode)
        }
    })
})

/* NOTE ABOUT PAGE Add Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .add-about-page-btn').addEventListener('click', () => {
    showAboutPageSubform()
})

/* NOTE ABOUT PAGE Edit Buttons */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .about-pages-container .about-page .about-edit-btn').forEach(button => {
    button.addEventListener('click', () => {
        showAboutPageSubform(button.parentNode.dataset)
    })
})

/* NOTE ABOUT PAGE Remove Buttons */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .about-pages-container .about-page .about-remove-btn').forEach(button => {
    button.addEventListener('click', () => {
        if (confirm(`Are you sure you want to remove "${button.parentNode.dataset.url}" as an About Page?`)) {
            button.parentNode.parentNode.removeChild(button.parentNode)
        }
    })
})

/* NOTE ABOUT PAGE Subform Submit */
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

/* NOTE CONTACT PAGE Add Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .add-contact-page-btn').addEventListener('click', () => {
    showContactPageSubform()
})

/* NOTE CONTACT PAGE Edit Buttons */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .contact-pages-container .contact-page .contact-edit-btn').forEach(button => {
    button.addEventListener('click', () => {
        showContactPageSubform(button.parentNode.dataset)
    })
})

/* NOTE CONTACT PAGE Remove Buttons */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .contact-pages-container .contact-page .contact-remove-btn').forEach(button => {
    button.addEventListener('click', () => {
        if (confirm(`Are you sure you want to remove "${button.parentNode.dataset.url}" as a Contact Page?`)) {
            button.parentNode.parentNode.removeChild(button.parentNode)
        }
    })
})

/* NOTE CONTACT PAGE Subform Submit */
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

/* NOTE SERVICE PAGE Add Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .add-service-page-btn').addEventListener('click', () => {
    showServicePageSubform()
})

/* NOTE SERVICE AREA PAGE Add Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .add-service-area-page-btn').addEventListener('click', () => {
    showServiceAreaPageSubform()
})

/* NOTE SERVICE AREA PAGE Edit Buttons */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .service-area-page .service-area-edit-btn').forEach(button => {
    button.addEventListener('click', () => {
        showServiceAreaPageSubform({
            key: button.parentElement.dataset.key,
            url: button.parentElement.dataset.url,
            country: button.parentElement.dataset.country,
            state: button.parentElement.dataset.state,
            cityTown: button.parentElement.dataset.cityTown,
            zipCodes: button.parentElement.dataset.zipCodes,
            streetAddress: button.parentElement.dataset.streetAddress ?? undefined,
            email: button.parentElement.dataset.email ?? undefined,
            phone: button.parentElement.dataset.phone ?? undefined
        })
    })
})

/* NOTE SERVICE AREA PAGE Remove Buttons */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .service-area-page .service-area-remove-btn').forEach(button => {
    button.addEventListener('click', () => {
        if (confirm(`Are you sure you want to remove "${button.parentNode.dataset.cityTown}, ${button.parentNode.dataset.state}" as a Service Area Page?`)) {
            button.parentNode.parentNode.removeChild(button.parentNode)
        }
    })
})

/* NOTE SERVICE AREA Submit Subform */
document.querySelector('.rank-main-wrapper .form-container .service-areas-overlay form').addEventListener('submit', (e) => {
    e.preventDefault()
    const form = e.target

    const serviceAreaPageWrapper = document.createElement('div')
    serviceAreaPageWrapper.className = 'service-area-page'

    serviceAreaPageWrapper.dataset.key = form.url.value
    serviceAreaPageWrapper.dataset.url = form.url.value
    serviceAreaPageWrapper.dataset.country = form.country.value
    serviceAreaPageWrapper.dataset.state = form.state.value
    serviceAreaPageWrapper.dataset.cityTown = form.cityTown.value
    serviceAreaPageWrapper.dataset.zipCodes = form.zipCodes.value
    if (form.streetAddress.value) serviceAreaPageWrapper.dataset.streetAddress = form.streetAddress.value
    if (form.email.value) serviceAreaPageWrapper.dataset.email = form.email.value
    if (form.phone.value) serviceAreaPageWrapper.dataset.phone = form.phone.value

    const areaText = document.createElement('p')
    areaText.innerHTML = `<span>${form.cityTown.value}, ${form.state.value}</span> - ${form.url.value}`
    serviceAreaPageWrapper.appendChild(areaText)

    const editBtn = document.createElement('button')
    editBtn.className = 'service-area-edit-btn action-button'
    editBtn.type = 'button'
    editBtn.innerHTML = `<img src="${PLUGIN_DIR}assets/edit_icon.svg">`
    editBtn.addEventListener('click', () => {
        showServiceAreaPageSubform({
            key: serviceAreaPageWrapper.dataset.key,
            url: serviceAreaPageWrapper.dataset.url,
            country: serviceAreaPageWrapper.dataset.country,
            state: serviceAreaPageWrapper.dataset.state,
            cityTown: serviceAreaPageWrapper.dataset.cityTown,
            zipCodes: serviceAreaPageWrapper.dataset.zipCodes,
            streetAddress: serviceAreaPageWrapper.dataset.streetAddress ?? undefined,
            email: serviceAreaPageWrapper.dataset.email ?? undefined,
            phone: serviceAreaPageWrapper.dataset.phone ?? undefined
        })
    })
    serviceAreaPageWrapper.appendChild(editBtn)

    const removeBtn = document.createElement('button')
    removeBtn.className = 'service-area-remove-btn action-button'
    removeBtn.type = 'button'
    removeBtn.innerHTML = `<img src="${PLUGIN_DIR}assets/trash_icon.svg">`
    removeBtn.addEventListener('click', () => {
        if (confirm(`Are you sure you want to remove ${serviceAreaPageWrapper.dataset.cityTown}, ${serviceAreaPageWrapper.dataset.state} as a Service Area Page?`)) {
            document.querySelector('.rank-main-wrapper .form-container .main-form .service-area-pages-container').removeChild(serviceAreaPageWrapper)
        }
    })
    serviceAreaPageWrapper.appendChild(removeBtn)

    if (form.edit_key.value) {
        // NOTE Update Service Area PAge Element with key of edit_key.value
        document.querySelector('.rank-main-wrapper .form-container .main-form .service-area-pages-container').replaceChild(serviceAreaPageWrapper, document.querySelector(`.rank-main-wrapper .form-container .main-form .service-area-pages-container .service-area-page[data-key="${form.edit_key.value}"]`))
    } else {
        // NOTE Add as a new Service Area Page Element
        document.querySelector('.rank-main-wrapper .form-container .main-form .service-area-pages-container').appendChild(serviceAreaPageWrapper)
    }

    form.reset()
    form.parentNode.style.display = 'none'
})

/* NOTE BLOG POST PAGE Add Button */
document.querySelector('.rank-main-wrapper .form-container .main-form .add-blog-post-page-btn').addEventListener('click', () => {
    showBlogPostPageSubform()
})

/* NOTE BLOG POST PAGE Edit Buttons */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .blog-post-pages-container .blog-post-page .blog-post-page-edit-btn').forEach(button => {
    button.addEventListener('click', () => {
        showBlogPostPageSubform({
            key: button.parentNode.parentNode.parentNode.dataset.key,
            headline: button.parentNode.parentNode.parentNode.dataset.headline,
            datePublished: button.parentNode.parentNode.parentNode.dataset.datePublished,
            articleBody: button.parentNode.parentNode.parentNode.dataset.articleBody,
            inLanguage: button.parentNode.parentNode.parentNode.dataset.inLanguage,
            isFamilyFriendly: button.parentNode.parentNode.parentNode.dataset.isFamilyFriendly,
            blogPostUrl: button.parentNode.parentNode.parentNode.dataset.blogPostUrl,
            author: button.parentNode.parentNode.parentNode.dataset.author ?? undefined,
            genre: button.parentNode.parentNode.parentNode.dataset.genre ?? undefined,
            thumbnailUrl: button.parentNode.parentNode.parentNode.dataset.thumbnailUrl ?? undefined
        })
    })
})

/* NOTE BLOG POST PAGE Remove Buttons */
document.querySelectorAll('.rank-main-wrapper .form-container .main-form .blog-post-pages-container .blog-post-page .blog-post-page-remove-btn').forEach(button => {
    button.addEventListener('click', () => {
        if (confirm(`Are you sure you want to remove "${button.parentNode.parentNode.parentNode.dataset.headline}" as a Blog Post Page?`)) {
            button.parentNode.parentNode.parentNode.parentNode.removeChild(button.parentNode.parentNode.parentNode)
        }
    })
})

/* NOTE BLOG POST PAGE Submit subform */
document.querySelector('.rank-main-wrapper .form-container .blog-posts-overlay form').addEventListener('submit', (e) => {
    e.preventDefault()
    const form = e.target

    const blogPostWrapper = document.createElement('div')
    blogPostWrapper.className = 'blog-post-page'

    blogPostWrapper.dataset.key = form.url.value
    blogPostWrapper.dataset.headline = form.headline.value
    blogPostWrapper.dataset.datePublished = form.datePublished.value
    blogPostWrapper.dataset.articleBody = form.articleBody.value
    blogPostWrapper.dataset.inLanguage = form.inLanguage.value
    blogPostWrapper.dataset.isFamilyFriendly = form.isFamilyFriendly.checked
    blogPostWrapper.dataset.blogPostUrl = form.url.value
    if (form.author.value) blogPostWrapper.dataset.author = form.author.value
    if (form.genre.value) blogPostWrapper.dataset.genre = form.genre.value
    if (form.thumbnailUrl.value) blogPostWrapper.dataset.thumbnailUrl = form.thumbnailUrl.value

    const imageWrapper = document.createElement('div')
    imageWrapper.className = 'image-wrapper'
    imageWrapper.innerHTML = form.thumbnailUrl.value ? `<img src="${form.thumbnailUrl.value}">` : `<img src="${PLUGIN_DIR}assets/image_placeholder.svg">`
    blogPostWrapper.appendChild(imageWrapper)

    const contentWrapper = document.createElement('div')
    contentWrapper.className = 'content-wrapper'
    blogPostWrapper.appendChild(contentWrapper)

    const headWrapper = document.createElement('div')
    headWrapper.className = 'head'
    contentWrapper.appendChild(headWrapper)

    const headlineText = document.createElement('h3')
    headlineText.innerHTML = form.headline.value
    headWrapper.appendChild(headlineText)

    const editBtn = document.createElement('button')
    editBtn.className = 'blog-post-page-edit-btn action-button'
    editBtn.type = 'button'
    editBtn.innerHTML = `<img src="${PLUGIN_DIR}assets/edit_icon.svg">`
    editBtn.addEventListener('click', () => {
        showBlogPostPageSubform({
            key: blogPostWrapper.dataset.blogPostUrl,
            headline: blogPostWrapper.dataset.headline,
            datePublished: blogPostWrapper.dataset.datePublished,
            articleBody: blogPostWrapper.dataset.articleBody,
            inLanguage: blogPostWrapper.dataset.inLanguage,
            isFamilyFriendly: blogPostWrapper.dataset.isFamilyFriendly,
            blogPostUrl: blogPostWrapper.dataset.blogPostUrl,
            author: blogPostWrapper.dataset.author ?? undefined,
            genre: blogPostWrapper.dataset.genre ?? undefined,
            thumbnailUrl: blogPostWrapper.dataset.thumbnailUrl ?? undefined
        })
    })
    headWrapper.appendChild(editBtn)

    const removeBtn = document.createElement('button')
    removeBtn.className = 'blog-post-page-remove-btn action-button'
    removeBtn.type = 'button'
    removeBtn.innerHTML = `<img src="${PLUGIN_DIR}assets/trash_icon.svg">`
    removeBtn.addEventListener('click', () => {
        if (confirm(`Are you sure you want to remove "${blogPostWrapper.dataset.headline}" as a Blog Post Page?`)) {
            document.querySelector('.rank-main-wrapper .form-container .main-form .blog-post-pages-container').removeChild(blogPostWrapper)
        }
    })
    headWrapper.appendChild(removeBtn)

    const bodyText = document.createElement('p')
    bodyText.innerHTML = form.articleBody.value
    contentWrapper.appendChild(bodyText)

    if (form.edit_key.value) {
        document.querySelector('.rank-main-wrapper .form-container .main-form .blog-post-pages-container').replaceChild(blogPostWrapper, document.querySelector(`.rank-main-wrapper .form-container .main-form .blog-post-pages-container .blog-post-page[data-key="${form.edit_key.value}"]`))
    } else {
        document.querySelector('.rank-main-wrapper .form-container .main-form .blog-post-pages-container').appendChild(blogPostWrapper)
    }

    form.reset()
    form.parentNode.style.display = 'none'
})

/* NOTE CLOSE & RESET Any of the SubForms */
document.querySelectorAll('.rank-main-wrapper .form-container .overlay-wrapper .buttons .cancel-btn').forEach(button => {
    button.addEventListener('click', (e) => {
        e.target.parentNode.parentNode.reset()
        e.target.parentNode.parentNode.parentNode.style.display = 'none'
    })
})


/* NOTE FAQ Show Subform */
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

/* NOTE ABOUT PAGE Show Subform */
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

/* NOTE CONTACT PAGE Show Subform */
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

/* NOTE SERVICE PAGE Show Subform */
function showServicePageSubform(data) {
    if (data) {
        // TODO Load Data
    }

    document.querySelector('.rank-main-wrapper .form-container .services-overlay').style.display = 'flex'
}

/* NOTE SERVICE AREA PAGE Show Subform */
function showServiceAreaPageSubform(data) {
    const form = document.querySelector('.rank-main-wrapper .form-container .service-areas-overlay form')
    form.edit_key.value = ''

    if (data) {
        // NOTE Load Data
        form.edit_key.value = data.key
        form.url.value = data.url
        form.streetAddress.value = data.streetAddress ?? ''
        form.cityTown.value = data.cityTown
        form.state.value = data.state
        form.country.value = data.country
        form.phone.value = data.phone ?? ''
        form.email.value = data.email ?? ''
        form.zipCodes.value = data.zipCodes
    }

    document.querySelector('.rank-main-wrapper .form-container .service-areas-overlay').style.display = 'flex'
}

/* NOTE BLOG POST PAGE Show Subform */
function showBlogPostPageSubform(data) {
    const form = document.querySelector('.rank-main-wrapper .form-container .blog-posts-overlay form')
    form.edit_key.value = ''

    if (data) {
        // NOTE Load Data
        form.edit_key.value = data.key
        form.url.value = data.blogPostUrl
        form.datePublished.value = data.datePublished
        form.inLanguage.value = data.inLanguage
        form.headline.value = data.headline
        form.articleBody.value = data.articleBody
        form.isFamilyFriendly.checked = JSON.parse(data.isFamilyFriendly)
        form.author.value = data.author ?? ''
        form.genre.value = data.genre ?? ''
        form.thumbnailUrl.value = data.thumbnailUrl ?? ''
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