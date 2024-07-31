
    @include('layouts.head')
<body>
    <body style="">
        <div class="messenger p-4 bg-white h-screen overflow-hidden">
            <div class="flex">
            
                <!-- Sidebar: start -->
                 <div class="basis-2/6 pt-3 bg-white border-r border-slate-100">
                     <div class="search-box">
                         <!-- Sidebar: Search part -->
                         <div class="search-box h-10 text-slate-300">
                            <div class="flex justify-between px-5 border-b border-slate-100 pb-4">
                              <form class="flex justify-center items-center">
                                <i class="fa fa-search pr-2"></i>
                                <input type="text" name="search" id="search" placeholder="Search" class="font-light focus:outline-none" />
                              </form>
                              <div>
                                <button class="relative">
                                  <i class="fa fa-message"></i>
                                  <i class="fa fa-plus absolute -top-2 text-sm"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                     </div>
                     <div class="user-list overflow-y-auto h-screen bg-white">
                         <!-- Sidebar: User list --> 
                          @if (count($user)>0)
                          @foreach ($user as $users)
                          <div class="flex hover:bg-slate-100 transition px-5 py-3 hover:cursor-pointer user_c" data-id="{{$users->id}}">
                            <div class="pr-4">
                                <img src="https://cdn-icons-png.flaticon.com/512/194/194938.png" width="50" />
                              </div>
                              <div>
                                <h3 class="text-violet-500 tex-md">{{$users->name}}</h3>
                                <p class="text-sm text-gray-400 font-light overflow-hidden h-5">I got two ticket to go see the awesome</p>
                                <b><sup id="{{$users->id}}-status" class="offline-status" >offline</sup></b>
                              </div>
                            </div>
                          @endforeach
                      <!-- Single user item -->
 
  {{-- <div class="flex hover:bg-slate-100 transition px-5 py-3 hover:cursor-pointer">
    <div class="pr-4">
      <img src="https://cdn-icons-png.flaticon.com/512/194/194938.png" width="50" />
    </div>
    <div>
      <h3 class="text-violet-500 tex-md">Lupe Fiasco</h3>
      <p class="text-sm text-gray-400 font-light overflow-hidden h-5">I got two ticket to go see the awesome</p>
    </div>
  </div> <!-- Single user item --> --}}

  {{-- <div class="flex hover:bg-slate-100 transition px-5 py-3 hover:cursor-pointer">
    <div class="pr-4">
      <img src="https://cdn-icons-png.flaticon.com/512/194/194938.png" width="50" />
    </div>
    <div>
      <h3 class="text-violet-500 tex-md">Lupe Fiasco</h3>
      <p class="text-sm text-gray-400 font-light overflow-hidden h-5">I got two ticket to go see the awesome</p>
    </div>
  </div> <!-- Single user item --> --}}
  {{-- <div class="flex hover:bg-slate-100 transition px-5 py-3 hover:cursor-pointer">
    <div class="pr-4">
      <img src="https://cdn-icons-png.flaticon.com/512/194/194938.png" width="50" />
    </div>
    <div>
      <h3 class="text-violet-500 tex-md">Lupe Fiasco</h3>
      <p class="text-sm text-gray-400 font-light overflow-hidden h-5">I got two ticket to go see the awesome</p>
    </div>
  </div> <!-- Single user item --> --}}
  @endif
           
                     </div>
                 </div> 
                 <!-- End sidebar -->
                 
                 <!-- Messeg area: start -->
                 <div class="basis-4/6">
                    <div class="">
                        <div class="bg-white user-info-header px-5 py-3 ">
                          <div class="flex justify-between">
                            <div class="flex items-center">
                              <img src="https://cdn-icons-png.flaticon.com/512/194/194938.png" width="40" />
                              <h3 class="text-gray-400 tex-md pl-4">Lupe Fiasco</h3>
                            </div>
                            <div>
                              <i class="fa fa-message text-violet-300"></i>
                              
                              <i class="fa fa-video text-gray-200 ml-3"></i>
                
                              <i class="fa fa-phone text-gray-200 ml-3"></i>
                            </div>
                          </div>
                        </div> <!-- End User info header -->
                
                        <div class="message-area mt-4 px-4 ">
                          <!-- Chats -->
                          {{-- <div class="relative receive-chat flex justify-start">
                            <div class="px-5 mb-2 bg-violet-400 text-white py-2 text-sm max-w-[80%] rounded font-light">
                              <i class="fa fa-caret-up text-violet-400 -top-2 absolute" ></i>
                              <p>
                                I got two tickets to go to see this awesome band called, Lorem ipsum dollar !! Do you want to come ?
                              </p>
                            </div>
                          </div> --}}
                         
                          {{-- <div class="send-chat flex justify-end">
                            <div class="px-5 mb-2 bg-violet-200 text-slate-500 py-2 text-sm max-w-[80%] rounded font-light">
                              <p>
                                I got two tickets to go to see this awesome band called, Lorem ipsum dollar !! Do you want to come ?
                              </p>
                            </div>
                          </div> --}}
                         
                          
                        </div> <!-- End message area -->
                       
                        <div class="bg-gray-100 fixed bottom-0 w-full pl-4">
                          <form  id="chat-form"  action="">
                            <input type="text" name="massage" class="massage">
                        
                          <input type="submit" value="startmassage" class="btn btn-primary">
                        </form>
                        </div>
                        
                         <!-- Footer message -->
                      </div>
                    </div>
                
                     
                     <!-- Footer Message: start -->
                     {{-- <div class="bg-gray-100 fixed bottom-0 w-full pl-4">
                       <textarea class="w-full bg-gray-100 pt-3 h-12 focus:outline-none font-light" placeholder="Write a message"></textarea>
                     </div>  --}}
                     <!-- Footer message end -->
                 </div>
                 <!-- Messeg area: end -->
                 
             </div> <!-- End flex -->
     </div>
    </body>
    
</body>
</html>