

/* NOTE  Validate Wiki Entity*/
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