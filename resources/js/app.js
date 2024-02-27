import axios from 'axios';
import './bootstrap';

import Alpine from 'alpinejs';
import Echo from 'laravel-echo';

window.Alpine = Alpine;

Alpine.start();

const form =document.getElementById('form')
const inputMessage=document.getElementById('input-message');
const listmessage=document.getElementById('list-messages')
form.addEventListener('submit',function (event) {
 
    console.log('subscribed!');
    event.preventDefault();
    const userInput =inputMessage.value;
    axios.post('/chat-message',{
        message:userInput
    })


});
const channel=window.Echo.private('private.chat.1')
channel.subscribed(()=>{
    console.log('subscribed!');

}).listen('.chat-message',(event)=>{
console.log(event);
const message = event.message;
const li =document.createElement('li');
li.textContent=message;
listmessage.append(li);
 }
);