var add_button = document.getElementById('add1');
var add_buttons = document.getElementById('add2');
var create_dialog = document.getElementById('create-dialog');

function dialog_open(){
    create_dialog.style.display='block';
}

function dialog_close(){
    document.getElementById('idno').value="";
    document.getElementById('name').value="";
    document.getElementById('phone').value="";
    create_dialog.style.display='none';
}

add_button.addEventListener('click',()=>{
    dialog_open();
})

add_buttons.addEventListener('click',()=>{
    dialog_open();
})