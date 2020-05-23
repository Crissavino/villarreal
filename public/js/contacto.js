function submitForm(form, event) {
  const contactTypes = form.querySelectorAll('.contactType');
  let noContactTypeChecked = true;
  contactTypes.forEach( (checkBox) => {
    if (checkBox.checked) {
      noContactTypeChecked = false;
    }
  })
  if (!form.name.value || !form.lastName.value || !form.email.value || !form.motivoConsulta.value || noContactTypeChecked || (!form.message.value || form.message.value.length < 10)) {
    if (form.message.value.length < 10) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El mensaje debe contener mas de 10 letras',
      })
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Tenes que completar todos los campos requeridos',
      })
    }
    event.preventDefault()

  } else {
    form.submit();
  }

}