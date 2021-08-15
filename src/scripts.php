<!-- MAIN SCRIPTS -->
<script>
  // Get Starated button
  document.querySelector('.get-started-container form').addEventListener('submit', (e) => {
    e.preventDefault()

    // Build formData object.
    const jax = new XMLHttpRequest();
    jax.open('POST', '<?php echo esc_url( plugins_url( 'create-config.php', __FILE__ ) ) ?>', false)

    jax.onload = function() {
      if (this.status == 200) {
        document.querySelector('.get-started-container').style.display = 'none';
        document.querySelector('.form-container').style.display = 'grid';
      }
    }

    jax.send()
  })

  // Open add service form
  document.querySelector('.form-container form .open-add-service-form').addEventListener('click', () => {
    document.querySelector('.add-service-overlay').style.display = "flex";
  })

  // Add Service form cancel btn
  document.querySelector('.add-service-overlay form .call-to-actions input[name=cancel-service-btn]').addEventListener('click', () => {
    document.querySelector('.add-service-overlay form').reset()
    document.querySelector('.add-service-overlay').style.display = "none"
  })

  // Add service form submit
  document.querySelector('.add-service-overlay form').addEventListener('submit', (e) => {
    e.preventDefault()
    const form = e.target
    const serviceData = {
      name: form.serviceName.value,
      url: form.serviceUrl.value,
      description: form.serviceDescription.value
    }

    const serviceWrapper = document.createElement('div')
    serviceWrapper.className = 'service-wrapper top-level'

    serviceWrapper.dataset.name = serviceData.name
    serviceWrapper.dataset.url = serviceData.url
    serviceWrapper.dataset.description = serviceData.description

    const service = document.createElement('div')
    service.className = 'service'
    serviceWrapper.appendChild(service)

    const text = document.createElement('p')
    text.innerHTML = `<span class="name">${serviceData.name}</span> - ${serviceData.url}`
    service.appendChild(text)

    const addBtn = document.createElement('img')
    addBtn.className = 'add-btn'
    addBtn.src = '<?php echo $SERVER . 'images/add_icon_small.svg'; ?>'
    addBtn.addEventListener('click', () => {
      // Open SubService Form
      document.querySelector('.sub-service-overlay').style.display = 'flex'
      // Set sub-service form hidden input value
      document.querySelector('.sub-service-overlay form').key.value = serviceData.url
    })
    service.appendChild(addBtn)

    const editBtn = document.createElement('img')
    editBtn.className = 'edit-btn'
    editBtn.src = '<?php echo $SERVER . 'images/edit_icon.svg'; ?>'
    editBtn.addEventListener('click', () => {
      // TODO Open Edit form
    })
    service.appendChild(editBtn)

    const trashBtn = document.createElement('img')
    trashBtn.className = 'trash-btn'
    trashBtn.src = '<?php echo $SERVER . 'images/trash_icon.svg'; ?>'
    trashBtn.addEventListener('click', () => {
      // TODO Open Confirm Dialog to trash
    })
    service.appendChild(trashBtn)

    const subServicesContainer = document.createElement('div')
    subServicesContainer.className = 'sub-services'
    subServicesContainer.dataset.key = serviceData.url
    serviceWrapper.appendChild(subServicesContainer)

    document.querySelector('.form-container form .services-container').appendChild(serviceWrapper)

    // Reset and Hide Form
    form.reset()
    document.querySelector('.add-service-overlay').style.display = "none";
  })

  // Add Sub-service form submit btn
  document.querySelector('.sub-service-overlay form').addEventListener('submit', (e) => {
    e.preventDefault()
    let form = e.target

    document.querySelectorAll('.form-container form .services-container .service-wrapper .sub-services').forEach(subServicesCont => {
      if (subServicesCont.dataset.key === form.key.value) {
        
        const serviceData = {
          name: form.serviceName.value,
          url: form.serviceUrl.value,
          description: form.serviceDescription.value
        }

        const serviceWrapper = document.createElement('div')
        serviceWrapper.className = 'service-wrapper'

        serviceWrapper.dataset.name = serviceData.name
        serviceWrapper.dataset.url = serviceData.url
        serviceWrapper.dataset.description = serviceData.description

        const service = document.createElement('div')
        service.className = 'service'
        serviceWrapper.appendChild(service)

        const text = document.createElement('p')
        text.innerHTML = `<span class="name">${serviceData.name}</span> - ${serviceData.url}`
        service.appendChild(text)

        // If parent is not alreaedy a subservice show add btn
        if (!subServicesCont.dataset.isSubService) {

          const addBtn = document.createElement('img')
          addBtn.className = 'add-btn'
          addBtn.src = '<?php echo $SERVER . 'images/add_icon_small.svg'; ?>'
          addBtn.addEventListener('click', () => {

            // Open SubService Form
            document.querySelector('.sub-service-overlay').style.display = 'flex'
            // Set sub-service form hidden input value
            document.querySelector('.sub-service-overlay form').key.value = serviceData.url

          })
          service.appendChild(addBtn)

        }

        const editBtn = document.createElement('img')
        editBtn.className = 'edit-btn'
        editBtn.style.marginLeft = subServicesCont.dataset.isSubService ? 'auto' : '5px'
        editBtn.src = '<?php echo $SERVER . 'images/edit_icon.svg'; ?>'
        editBtn.addEventListener('click', () => {
          // TODO Open Edit form
        })
        service.appendChild(editBtn)

        const trashBtn = document.createElement('img')
        trashBtn.className = 'trash-btn'
        trashBtn.src = '<?php echo $SERVER . 'images/trash_icon.svg'; ?>'
        trashBtn.addEventListener('click', () => {
          // TODO Open Confirm Dialog to trash
        })
        service.appendChild(trashBtn)

        if (!subServicesCont.dataset.isSubService) {
          const subServicesContainer = document.createElement('div')
          subServicesContainer.className = 'sub-services'
          subServicesContainer.dataset.key = serviceData.url
          subServicesContainer.dataset.isSubService = true
          serviceWrapper.appendChild(subServicesContainer)
        }

        subServicesCont.appendChild(serviceWrapper)

        // Reset and Hide Form
        form.reset()
        document.querySelector('.sub-service-overlay').style.display = "none";

        return
      }
    })
  })

  // Add Sub-service form cancel btn
  document.querySelector('.sub-service-overlay form .cancel-sub-service-btn').addEventListener('click', () => {
    document.querySelector('.sub-service-overlay form').reset()
    document.querySelector('.sub-service-overlay').style.display = 'none'
  })

  // Open add service area form
  document.querySelector('.form-container form .open-add-service-area-form').addEventListener('click', () => {
    document.querySelector('.add-service-area-overlay').style.display = "flex";
  })

  // Add Service Area form cancel btn
  document.querySelector('.add-service-area-overlay form .call-to-actions input[name=cancel-service-area-btn]').addEventListener('click', () => {
    document.querySelector('.add-service-area-overlay form').reset()
    document.querySelector('.add-service-area-overlay').style.display = "none"
  })

  // Add Service Area form Submit Btn
  document.querySelector('.add-service-area-overlay form').addEventListener('submit', (e) => {
    e.preventDefault()
    let form = e.target
    let container = document.querySelector('.form-container .service-areas-container')

    let areaWrapper = document.createElement('div')
    areaWrapper.className = 'service-area-wrapper'

    areaWrapper.dataset.country = form.country.value
    areaWrapper.dataset.state = form.state.value
    areaWrapper.dataset.cityTown = form.cityTown.value
    areaWrapper.dataset.url = form.url.value
    areaWrapper.dataset.zipCodes = form.zipCodes.value

    let area = document.createElement('div')
    area.className = 'service-area'
    areaWrapper.appendChild(area)

    let text = document.createElement('p')
    text.innerHTML = `<p><span class="name">${form.country.value}</span> - ${form.state.value}</p>`
    area.appendChild(text)

    let editBtn = document.createElement('img')
    editBtn.className = 'edit-btn'
    editBtn.style.marginLeft = 'auto'
    editBtn.src = '<?php echo $SERVER; ?>images/edit_icon.svg'
    area.appendChild(editBtn)

    let trashBtn = document.createElement('img')
    trashBtn.className = 'trash-btn'
    trashBtn.src = '<?php echo $SERVER; ?>images/trash_icon.svg'
    area.appendChild(trashBtn)

    container.appendChild(areaWrapper)

    form.reset()
    document.querySelector('.add-service-area-overlay').style.display = "none";
  })

  function collectServicesData(callback) {
    let servicesData = []

    /* TOP LEVEL */
    document.querySelectorAll('.form-container form .services-container .top-level').forEach(topLvlService => {

      const topLvlServiceData = {
        serviceName: topLvlService.dataset.name,
        serviceUrl: topLvlService.dataset.url,
        serviceDescription: topLvlService.dataset.description
      }

      if (topLvlService.childNodes[1].hasChildNodes()) {
        topLvlServiceData.subServices = []

        /* MID LEVEL */
        topLvlService.childNodes[1].childNodes.forEach(midLvlService => {
          
          const midLvlServiceData = {
            serviceName: midLvlService.dataset.name,
            serviceUrl: midLvlService.dataset.url,
            serviceDescription: midLvlService.dataset.description
          }

          if (midLvlService.childNodes[1].hasChildNodes()) {
            midLvlServiceData.subServices = []

            /* LAST LEVEL */
            midLvlService.childNodes[1].childNodes.forEach(lastLvlService => {

              const lastLvlServiceData = {
                serviceName: lastLvlService.dataset.name,
                serviceUrl: lastLvlService.dataset.url,
                serviceDescription: lastLvlService.dataset.description
              }

              midLvlServiceData.subServices.push(lastLvlServiceData)
              
            })

          }

          topLvlServiceData.subServices.push(midLvlServiceData)
        })
      }
      
      servicesData.push(topLvlServiceData)

    })

    callback(servicesData)
  }
</script>