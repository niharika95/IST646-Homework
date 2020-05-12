// Increasing and decreasing the Slider value
let slider = document.getElementById('myRange')
let value = document.querySelector('#value')
value.innerHTML = slider.value

slider.oninput = function() {
  value.innerHTML = this.value
}

let errors = []

const makeErrors = () => {
  if (errors.length > 0) {
    let h4 = document.createElement('h4')
    let b = document.createElement('b')
    b.appendChild(document.createTextNode(`You have ${errors.length} errors:`))
    h4.appendChild(b)
    let ul = document.createElement('ul')
    errors.forEach(error => {
      let li = document.createElement('li')
      li.appendChild(document.createTextNode(error))
      ul.appendChild(li)
    })
    let errorContainer = document.querySelector('.errorMessageContainer')
    while (errorContainer.firstChild) {
      errorContainer.removeChild(errorContainer.firstChild)
    }
    errorContainer.style.display = 'flex'
    errorContainer.appendChild(h4)
    errorContainer.appendChild(ul)
  } else {
    errorContainer.style.display = 'none'
    let errorContainer = document.querySelector('.errorMessageContainer')
    while (errorContainer.firstChild) {
      errorContainer.removeChild(errorContainer.firstChild)
    }
  }
}

// Validating form elements
function validateForm() {
  let formData = new FormData(document.querySelector('form'))
  errors = []

  // Validating the name field
  // let nameField = document.querySelector('.name')
  if (formData.get('name').length === 0) {
    errors.push('Please enter your name.')
  }

  // Accessing the number of people in the group
  // let numberOfPeople = formData.get('number')
  if (isNaN(formData.get('number'))) {
    errors.push(
      'Please enter a number if you wish to fill in the number of people in your group.'
    )
  }

  // Validating the date field
  let dateField = formData.get('date')
  let dateFieldFilled = false
  if (dateField === '') {
    errors.push('Please enter the date.')
  } else {
    dateFieldFilled = true
  }

  let today = new Date()
  let dd = today.getDate()
  let mm = today.getMonth() + 1
  let yyyy = today.getFullYear()

  if (dd < 10) {
    dd = '0' + dd
  }
  if (mm < 10) {
    mm = '0' + mm
  }

  let todaysDate = yyyy + '-' + mm + '-' + dd
  if (dateFieldFilled && dateField > todaysDate) {
    errors.push('Please enter a date that has occured.')
    document.querySelector('.date').value = 'yyyy-mm-dd'
  }

  // Validating place selection
  let selectedPlace = ''

  if (formData.get('place')) {
    selectedPlace = formData.get('place')
  } else {
    errors.push('Please select the place.')
  }

  // Accessing rating value
  let rating = formData.get('slider')

  // Displaying error message if any
  makeErrors()
  return errors.length === 0
}

// let submitButton = document.querySelector('button')
// submitButton.addEventListener('click', validateForm)
