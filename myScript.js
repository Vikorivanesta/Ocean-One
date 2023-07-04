function takeAction() {
    alert("You're takng an Action!");
}

let text;

function edit(docId) {
    text = document.getElementById(docId).innerHTML;
    document.getElementById(docId).innerHTML = "<textarea id=\"edited-text\" class=\"form-control\" style=\"height: 100px\">" + text + "</textarea>";
    document.getElementById('btn-edit').style.display ="none";
    document.getElementById('btn-done').style.display ="inline";
}

function changeText(docId) {
    text = document.getElementById('edited-text').value;
    document.getElementById(docId).innerHTML = text;
    document.getElementById('btn-edit').style.display ="inline";
    document.getElementById('btn-done').style.display ="none";
}

function send() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;
    if (name != '' && email != '') {
        document.getElementById('form-response').innerHTML = '<p>Thanks for Your Response!</p><p>Hello, My name is <b>' + name + '</b></p><p>You can contact me at <b>' + email + '</b></p><p>' + message + '</p>';
    }
}