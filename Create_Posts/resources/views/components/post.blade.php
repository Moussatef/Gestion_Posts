@props([ 'pst' => $pst , 'sh' => $sh ])

<div class=" justify-center mt-5">
    @if ($sh != 'true')
        <a href="{{url()->previous()}}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                GO back
        </a>


      @endif
    <div class="p-4 sm:w-1/2 lg:w-3/6 justify-center mx-auto   ">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden ">
            @if ($pst->img != 'NULL')
            <img class="h-full ml-auto mr-auto  w-full object-cover object-center  "
            src="{{asset('uploads/'.$pst->img)}} " alt="{{$pst->img}}">
            @else
             <img class="lg:h-72 md:h-48 w-full object-cover object-center "
                src=" https://picsum.photos/id/1016/720/400" alt="blog">
            @endif

            <div class="p-6 hover:bg-gray-600 hover:text-white transition duration-300 ease-in">
                    <div class="mr-1 text-gray-400 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm ">
                        <h2 class="text-base font-medium text-indigo-300 mb-1  ml-auto">posted in : {{ $pst->created_at->diffForHumans() }}</h2>
                        @auth

                        @can('delete',$pst)
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm mr-4 pr-3 py-1 border-r-2 border-gray-200 ml-2">
                                <a href="{{route('post.edit', $pst->id)}}"><svg class="w-4 h-4 mr-1 " height="512pt" viewBox="0 0 512 511" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m405.332031 256.484375c-11.796875 0-21.332031 9.558594-21.332031 21.332031v170.667969c0 11.753906-9.558594 21.332031-21.332031 21.332031h-298.667969c-11.777344 0-21.332031-9.578125-21.332031-21.332031v-298.667969c0-11.753906 9.554687-21.332031 21.332031-21.332031h170.667969c11.796875 0 21.332031-9.558594 21.332031-21.332031 0-11.777344-9.535156-21.335938-21.332031-21.335938h-170.667969c-35.285156 0-64 28.714844-64 64v298.667969c0 35.285156 28.714844 64 64 64h298.667969c35.285156 0 64-28.714844 64-64v-170.667969c0-11.796875-9.539063-21.332031-21.335938-21.332031zm0 0"/><path d="m200.019531 237.050781c-1.492187 1.492188-2.496093 3.390625-2.921875 5.4375l-15.082031 75.4375c-.703125 3.496094.40625 7.101563 2.921875 9.640625 2.027344 2.027344 4.757812 3.113282 7.554688 3.113282.679687 0 1.386718-.0625 2.089843-.210938l75.414063-15.082031c2.089844-.429688 3.988281-1.429688 5.460937-2.925781l168.789063-168.789063-75.414063-75.410156zm0 0"/><path d="m496.382812 16.101562c-20.796874-20.800781-54.632812-20.800781-75.414062 0l-29.523438 29.523438 75.414063 75.414062 29.523437-29.527343c10.070313-10.046875 15.617188-23.445313 15.617188-37.695313s-5.546875-27.648437-15.617188-37.714844zm0 0"/></svg></a>
                            </span>

                            <span class="mr-1 text-gray-400 inline-flex items-center leading-none text-sm mr-4 pr-3 py-1 border-r-2 border-gray-200">
                                <form action="{{route('posts.destroy',$pst)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-blue-500"><svg class="w-4 h-4 mr-1 " id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path id="XMLID_1089_" d="m428.332 135.275-11.167-33.466c-2.248-6.736-8.552-11.278-15.653-11.278h-291.024c-7.101 0-13.405 4.543-15.653 11.278l-11.167 33.466c-2.53 7.582 3.113 15.414 11.106 15.414h322.451c7.994 0 13.637-7.832 11.107-15.414z"/><path id="XMLID_835_" d="m135.615 491.767c1.28 11.519 11.016 20.233 22.606 20.233h193.718c11.59 0 21.326-8.715 22.606-20.233l34.565-311.077h-308.06z"/><path id="XMLID_831_" d="m225.89 42.998c0-7.167 5.831-12.998 12.998-12.998h44.189c7.167 0 12.998 5.831 12.998 12.998v17.533h30v-17.533c0-23.709-19.289-42.998-42.998-42.998h-44.189c-23.709 0-42.998 19.289-42.998 42.998v17.533h30z"/></g></svg></button>
                                </form>
                            </span>
                        @endcan
                        @endauth
                    </div>

                <h1 class="text-2xl font-semibold mb-3"><a href="{{route('users.posts', $pst->user)}}" class="font-bold">{{ $pst->user->name }}</a></h1>
                <hr>
                <h3 class="text-2xl font-semibold mb-3">{{ $pst->title }}</h3>
                <p class="leading-relaxed mb-3"><p class="mb-2">{{$pst->description}}</p></p>
                <div class="flex items-center flex-wrap ">
                    @if ($sh != 'false')
                    <form action="{{route('posts.show', $pst )}}" method="get" >
                    @csrf
                        <button type="submit" class="text-indigo-300 inline-flex items-center md:mb-2 lg:mb-0 ">show post
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </form>
                     @endif
                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                        {{-- <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg> --}}
                        <div class="flex items-centee">
                        @auth
                        @if (!$pst->checkLike(auth()->user()))
                            <form action="{{route('posts.likes', $pst )}}" method="post" class="mr-1 ">
                                @csrf
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm mt-1">
                                      <button type="submit" class="text-gray-600 inline-flex items-center leading-none text-sm ">
                                        <svg version="1.1" class="w-4 h-4 mr-1 " id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                   <g> <g><path d="M407.815,0h-303.63c-21.38,0-41.736,6.707-58.87,19.394c-3.341,2.474-4.044,7.188-1.57,10.529s7.188,4.042,10.529,1.57
                                               c14.522-10.754,31.781-16.439,49.911-16.439h303.629c46.296,0,83.96,37.665,83.96,83.96v199.144
                                               c0,46.296-37.665,83.96-83.96,83.96H279.48c-3.101,0-6.097,1.296-8.217,3.553l-103.068,109.59
                                               c-2.225,2.364-4.805,1.693-5.81,1.296c-1.006-0.398-3.345-1.676-3.345-4.924V393.4c0-6.22-5.06-11.28-11.28-11.28h-43.575
                                               c-46.296,0-83.961-37.665-83.961-83.96V99.014c0-17.032,5.069-33.429,14.66-47.417c2.35-3.429,1.477-8.113-1.951-10.464
                                               c-3.427-2.351-8.114-1.476-10.464,1.951C11.153,59.59,5.171,78.93,5.171,99.014v199.144c0,54.596,44.418,99.014,99.015,99.014
                                               h39.801v94.461c0,8.398,5.044,15.824,12.851,18.918c2.461,0.975,5.017,1.449,7.543,1.449c5.489,0,10.84-2.237,14.78-6.425
                                               l101.95-108.402h126.704c54.596,0,99.014-44.418,99.014-99.014V99.014C506.829,44.418,462.412,0,407.815,0z"/>
                                       </g></g><g><g><path d="M364.119,120.935c-26.124-26.125-68.635-26.123-94.761,0l-13.119,13.12c-0.035,0.035-0.143,0.143-0.344,0.143
                                               c-0.2,0-0.307-0.106-0.342-0.143l-12.911-12.91c-26.125-26.125-68.635-26.124-94.76,0c-26.125,26.125-26.125,68.636,0,94.761
                                               l97.035,97.035c2.935,2.935,6.837,4.551,10.987,4.551s8.053-1.617,10.987-4.552l53.325-53.334c2.94-2.94,2.94-7.706-0.001-10.644
                                               c-2.94-2.939-7.707-2.94-10.644,0.001l-53.325,53.334c-0.035,0.035-0.143,0.141-0.342,0.141c-0.201,0-0.308-0.106-0.343-0.143
                                               l-97.035-97.035c-20.256-20.257-20.256-53.215,0-73.472s53.215-20.255,73.471,0l12.91,12.91c2.935,2.935,6.837,4.552,10.987,4.552
                                               c4.151,0,8.052-1.616,10.988-4.551l13.12-13.12c20.26-20.255,53.216-20.255,73.472,0c20.256,20.256,20.256,53.214,0,73.472
                                               l-22.472,22.477c-2.94,2.94-2.94,7.706,0.001,10.644c2.94,2.939,7.706,2.94,10.644-0.001l22.473-22.476
                                               C390.244,189.57,390.244,147.06,364.119,120.935z"/> </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                   </svg>
                                      </button>
                                  </span>

                            </form>
                        @else
                            <form action="{{route('posts.likes', $pst )}}" method="post" class="mr-1">
                                @csrf
                                @method('DELETE')
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm mt-1 ">
                                      <button type="submit" class="text-gray-600 inline-flex items-center leading-none text-sm ">
                                        <svg version="1.1" class="w-5 h-5 mr-1 " id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                   <path style="fill:#EC5569;" d="M407.252,8.241H103.623c-50.527,0-91.487,40.961-91.487,91.487v199.144
                                       c0,50.528,40.961,91.487,91.487,91.487h43.575c2.073,0,3.753,1.681,3.753,3.753v98.233c0,11.615,14.207,17.246,22.163,8.784
                                       l103.067-109.59c0.71-0.755,1.699-1.182,2.735-1.182h128.335c50.528,0,91.487-40.961,91.487-91.487V99.729
                                       C498.741,49.201,457.78,8.241,407.252,8.241z"/>
                                   <path style="fill:#E63950;" d="M189.442,356.215c0-2.183-1.627-3.952-3.634-3.952h-42.185c-48.915,0-88.569-43.133-88.569-96.341
                                       V46.215c0-9.003,1.139-17.716,3.263-25.983C30.731,35.988,12.135,65.686,12.135,99.729v199.144
                                       c0,50.527,40.961,91.487,91.487,91.487h43.575c2.073,0,3.753,1.681,3.753,3.753v98.233c0,11.615,14.207,17.246,22.163,8.784
                                       l16.325-17.359V356.215H189.442z"/>
                                   <path style="fill:#EC5569;" d="M358.235,126.972L358.235,126.972c-23.228-23.228-60.888-23.228-84.116,0l-13.121,13.121
                                       c-3.128,3.128-8.201,3.128-11.33,0l-12.911-12.911c-23.228-23.228-60.888-23.228-84.116,0l0,0
                                       c-23.228,23.228-23.228,60.888,0,84.116l97.035,97.035c3.128,3.128,8.201,3.128,11.33,0l97.229-97.245
                                       C381.463,187.86,381.463,150.2,358.235,126.972z"/>
                                   <path style="fill:#FFF5F5;" d="M358.235,126.972L358.235,126.972c-23.228-23.228-60.888-23.228-84.116,0l-13.121,13.121
                                       c-3.128,3.128-8.201,3.128-11.33,0l-12.911-12.911c-23.228-23.228-60.888-23.228-84.116,0l0,0
                                       c-23.228,23.228-23.228,60.888,0,84.116l97.035,97.035c3.128,3.128,8.201,3.128,11.33,0l97.229-97.245
                                       C381.463,187.86,381.463,150.2,358.235,126.972z"/>
                                   <path style="fill:#DCE6EB;" d="M183.755,211.298c-23.228-23.228-23.228-60.888,0-84.116l0,0
                                       c7.619-7.619,16.795-12.723,26.501-15.343c-19.884-5.369-42.006-0.266-57.614,15.343l0,0c-23.228,23.228-23.228,60.888,0,84.116
                                       l97.035,97.035c3.128,3.128,8.201,3.128,11.33,0l9.89-9.892L183.755,211.298z"/>
                                   <path d="M407.815,0h-303.63c-21.379,0-41.736,6.707-58.87,19.394c-3.341,2.474-4.043,7.188-1.57,10.529
                                       c2.474,3.341,7.188,4.042,10.529,1.57c14.522-10.754,31.781-16.439,49.911-16.439h303.629c46.296,0,83.96,37.665,83.96,83.96
                                       v199.144c0,46.296-37.665,83.96-83.96,83.96H279.48c-3.101,0-6.097,1.296-8.217,3.553l-103.068,109.59
                                       c-2.225,2.364-4.805,1.693-5.81,1.296c-1.006-0.398-3.345-1.676-3.345-4.924V393.4c0-6.22-5.06-11.28-11.28-11.28h-43.575
                                       c-46.296,0-83.961-37.665-83.961-83.96V99.014c0-17.032,5.069-33.429,14.66-47.417c2.35-3.429,1.477-8.113-1.951-10.464
                                       c-3.427-2.351-8.114-1.476-10.464,1.951C11.153,59.59,5.171,78.93,5.171,99.014v199.144c0,54.596,44.418,99.014,99.015,99.014
                                       h39.801v94.461c0,8.398,5.044,15.824,12.851,18.918c2.461,0.975,5.017,1.449,7.543,1.449c5.489,0,10.84-2.237,14.78-6.425
                                       l101.95-108.402h126.704c54.596,0,99.014-44.418,99.014-99.014V99.014C506.829,44.418,462.412,0,407.815,0z"/>
                                   <path d="M331.001,227.529c-2.94,2.94-2.94,7.706,0.001,10.644c2.94,2.939,7.706,2.94,10.644-0.001l22.473-22.476
                                       c26.124-26.125,26.124-68.636-0.001-94.761c-26.124-26.125-68.635-26.123-94.761,0l-13.119,13.12
                                       c-0.035,0.035-0.144,0.143-0.344,0.143c-0.2,0-0.307-0.106-0.342-0.143l-12.911-12.91c-26.125-26.125-68.635-26.124-94.76,0
                                       c-26.125,26.125-26.125,68.636,0,94.761l97.035,97.035c2.934,2.935,6.837,4.551,10.987,4.551c4.15,0,8.053-1.617,10.987-4.552
                                       l53.325-53.334c2.94-2.94,2.94-7.706-0.001-10.644c-2.94-2.939-7.707-2.94-10.644,0.001l-53.325,53.334
                                       c-0.035,0.035-0.143,0.142-0.342,0.142c-0.201,0-0.308-0.106-0.343-0.143l-97.035-97.035c-20.256-20.256-20.256-53.215,0-73.472
                                       s53.215-20.255,73.471,0l12.91,12.91c2.934,2.936,6.837,4.552,10.987,4.552c4.151,0,8.052-1.616,10.988-4.551l13.12-13.12
                                       c20.26-20.255,53.216-20.254,73.472,0c20.256,20.256,20.256,53.214,0,73.472L331.001,227.529z"/>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   </svg>
                                      </button>
                                  </span>
                            </form>
                        @endif
                    @endauth

                        <span class="text-gray-400 inline-flex items-center leading-none text-sm mx-1">{{$pst->likes->count()}} {{ Str::plural('like',$pst->likes->count())}}</span>
                    </span>
                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                        <svg class="w-4 h-4 mr-1 " stroke="currentColor" stroke-width="2" fill="none"
                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path
                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                            </path>
                        </svg>{{$pst->comments->count()}}
                    </span>
                    </div>




                </div>
                @if ($pst->hashtags->count())
                @foreach ( $pst->hashtags as $hashtag )
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $hashtag->hashtag }} </span>

                  </div>
                @endforeach
                @endif
                <hr>
                <br>
                <h4 class="text-indigo-300 inline-flex items-center md:mb-2 lg:mb-0 ml-4 ">Comments
                    <svg class="w-4 h-4 mr-2 ml-2" stroke="currentColor" stroke-width="2" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path
                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                        </path>
                    </svg>
                </h4>
                @auth
                <form action="{{route('posts.comment', $pst)}}" method="post" >
                @csrf
                    <div class="flex items-center mt-4">
                        <input type="hidden" name="id_post" value="{{$pst->id}}">
                        <input  type="text" name="comment_inp" id="comment_inp" class="@error('name') border-red-500 @enderror text-gray-700 form-input rounded-full  pr-4 pl-4 mt-1 focus:ring-indigo-300 focus:border-indigo-300 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Write comment..." />
                        <button type="submit" class="text-indigo-300 inline-flex items-center md:mb-2 lg:mb-0 ">
                            <svg height="512pt" class="w-4 h-4 mr-2 ml-2" viewBox="0 -16 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m512 239.601562-511.667969-239.601562 27.695313 197.558594-28.027344 42.042968 28.027344 42.039063-27.695313 197.558594zm-457.015625-28.332031 139.769531 28.332031-139.769531 28.328126-18.886719-28.328126zm386.191406 28.332031-403.40625 188.902344 18.242188-130.136718 289.929687-58.765626-289.929687-58.769531-18.242188-130.136719zm0 0"/></svg>
                        </button>
                    </div>
                </form>
                @endauth

                <br>
                <hr>

                    @if ($pst->comments->count())

                    @foreach ( $pst->comments as $comment )

                            <span class="inline-block w-full bg-gray-200 rounded-tl-lg rounded-br-lg px-3 py-1 text-sm font-semibold text-gray-700 mr-2 my-2">
                                <h3 class=" inline-flex text-base items-center md:mb-2 lg:mb-0 ml-4 border-b-2 border-gray-600 ">{{$comment->user->name}}</h3>
                                <p class="leading-relaxed md:mb-2 lg:mb-0 ml-4"> {{$comment->comment}} </p>
                                <p class="leading-relaxed text-xs text-gray-500 md:mb-2 lg:mb-0 ml-4"> {{ $comment->created_at->diffForHumans()}} </p>
                            </span>

                    @endforeach
                @endif


            </div>
        </div>
    </div>
    <hr>
    <hr>


</div>

