$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
$(document).ready(function(){

    // jQuery methods go here...
 
    $(".user_c").click(function(){
        var getuser_id=$(this).attr('data-id');
        recver_id=getuser_id;
        console.log(recver_id);
        $('.message-area').html(" ");
        $(".user-info-header").hide();
        $(".message-area").show();
       
    });
  
  }); 
  $(document).ready(function(){

  $('#chat-form').submit(function(e){
    e.preventDefault();
 var massage=   $('.massage').val();
 console.log(massage);
 
 $.ajax({
    url  :"/saveuser",
    type: "post",
   
    data: {recver_id:recver_id,send_id:send_id ,massage:massage},
  
   
    success:function(res){
        if(res.sucess){
            let chat=res.data.massage;
            let html =`<div class="relative receive-chat flex justify-start">
                        <div class="px-5 mb-2 bg-violet-400 text-white py-2 text-sm max-w-[80%] rounded font-light">
                          <i class="fa fa-caret-up text-violet-400 -top-2 absolute" ></i>
                          <p>
                           `+chat+`
                          </p>
                        </div>
                      </div>`;
                      $('.message-area').append(html);

        }else{
            alert(res.error);
        }
    }
   })

});
}); 