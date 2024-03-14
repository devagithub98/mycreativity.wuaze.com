document.getElementById('userDataForm').addEventListener('submit', submitForm);

function submitForm(event) {
    event.preventDefault();
    
    let formData = new FormData(document.getElementById('userDataForm'));
    
    fetch('submit_data.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('response').innerHTML = data;
    })
    .catch(error => console.error('Error:', error));
}
