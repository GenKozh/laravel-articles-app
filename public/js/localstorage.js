let formFields = [{}];
let saved = JSON.parse(localStorage.getItem('formFields'));

function getValues(id) {
    console.log(formFields);
    if (saved) {
      formFields = saved;
    }
    if (formFields[id]) {
        console.log(formFields);
        document.getElementById('author').value = formFields[id].name;
        document.getElementById('title').value = formFields[id].title;
        document.getElementById('text').value = formFields[id].text;
    }

}

function setValues(id){
    formFields[id] = {};
    formFields[id].name = document.getElementById('author').value;
    formFields[id].title = document.getElementById('title').value;
    formFields[id].text = document.getElementById('text').value;
    localStorage.setItem('formFields', JSON.stringify(formFields));
}
