/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;
// window.Echo = new Echo({
//     broadcaster: "pusher",
//     key: "1ada81d695c8e524a12b",
//     wsHost: window.location.hostname,
//     wsPort: 6001,
//     forceTLS: false,
//     disableStats: true,
//     cluster: "mt1",
// });
window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
    wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
    wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
    wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
    forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});
console.log(send_id+"khk");
window.Echo.join(`channel-name`)
    .here((users) => {
        console.log(users);
        for(let x=0;x< users.length;x++){
if(send_id !=users[x]['id']){
    $("#"+users[x]['id']+'-status').removeClass("offline-status");
    $("#"+users[x]['id']+'-status').addClass("online-status");
    $("#"+users[x]['id']+'-status').text("online ");

}
        }
        // console.log(users);
        // $.each(users, function (index, user) {
        //     $("#onlineAdmins").append($("<li>").text(user.name));
        // });
    })
    .joining((user) => {
        console.log("joining :");
        console.log(user);
        $("#"+user.id+'-status').removeClass("offline-status");
        $("#"+user.id+'-status').addClass("online-status");
        $("#"+user.id+'-status').text("online ");
        // $("#onlineAdmins").append($("<li>").text(user.name));
    })
    .leaving((user) => {
        console.log("leaving :");
        console.log(user);
        $("#"+user.id+'-status').addClass("offline-status");
        $("#"+user.id+'-status').removeClass("online-status");
        $("#"+user.id+'-status').text("offline ");
        // $("#onlineAdmins li:contains('" + user.name + "')").remove();
    });
    window.Echo.private("broadcasmassage")
    .listen(".getchatmassage",(data)=>{
        if(send_id==data.chat.reciver_id &&  recver_id==data.chat.sender_id){
            let html =`<div class="send-chat flex justify-end">
            <div class="px-5 mb-2 bg-violet-200 text-slate-500 py-2 text-sm max-w-[80%] rounded font-light">
              <p>
            `+data.chat.massage+`
              </p>
            </div>
          </div>`;
$('.message-area').append(html);
console.log(data);
        }
         
      
    })
   