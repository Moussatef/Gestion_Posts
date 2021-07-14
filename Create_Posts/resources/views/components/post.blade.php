@props([ 'pst' => $pst , 'sh' => $sh ])

<div class=" justify-center mt-5">
    @if ($sh != 'true')
        <a href="{{url()->previous()}}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                GO back
        </a>


      @endif

    <div class="p-4 sm:w-1/2 lg:w-3/6 justify-center mx-auto  ">
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
                        @auth('admin')
                        <span class="mx-4 mr-1 text-gray-400 inline-flex items-center leading-none text-sm mr-4 pr-3 py-1 border-r-2 border-gray-200">
                            <form action="{{route('posts.destroy',$pst)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-blue-500"><svg class="w-4 h-4 mr-1 " id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path id="XMLID_1089_" d="m428.332 135.275-11.167-33.466c-2.248-6.736-8.552-11.278-15.653-11.278h-291.024c-7.101 0-13.405 4.543-15.653 11.278l-11.167 33.466c-2.53 7.582 3.113 15.414 11.106 15.414h322.451c7.994 0 13.637-7.832 11.107-15.414z"/><path id="XMLID_835_" d="m135.615 491.767c1.28 11.519 11.016 20.233 22.606 20.233h193.718c11.59 0 21.326-8.715 22.606-20.233l34.565-311.077h-308.06z"/><path id="XMLID_831_" d="m225.89 42.998c0-7.167 5.831-12.998 12.998-12.998h44.189c7.167 0 12.998 5.831 12.998 12.998v17.533h30v-17.533c0-23.709-19.289-42.998-42.998-42.998h-44.189c-23.709 0-42.998 19.289-42.998 42.998v17.533h30z"/></g></svg></button>
                            </form>
                        </span>
                        @endauth
                        @auth('web')
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
                        @auth('web')
                        @if (!$pst->checkLike(auth()->user()))
                            <form action="{{route('posts.likes', $pst )}}" method="post" class="mr-1 ">
                                @csrf
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm mt-1">
                                      <button type="submit" class="text-gray-600 inline-flex items-center leading-none text-sm ">
                                <svg class="w-6 h-6 mx-2 " viewBox="0 0 511 511.99962" xmlns="http://www.w3.org/2000/svg"><path d="m512.445312 245.636719c-1.53125-66.976563-29.011718-129.394531-77.382812-175.75-48.300781-46.289063-111.726562-71.078125-178.589844-69.8437502-66.886718-1.2421878-130.285156 23.5585932-178.585937 69.8437502-48.371094 46.355469-75.851563 108.773437-77.382813 175.75l-.003906.210937v.210938c.351562 68.261718 29.574219 133.15625 80.320312 178.640625v61.886719c0 12.011718 8.386719 22.476562 19.941407 24.882812 1.710937.355469 3.433593.53125 5.144531.53125 4.652344 0 9.222656-1.300781 13.242188-3.8125l49.738281-31.070312c28.050781 9.820312 57.328125 14.796874 87.085937 14.796874h.367188c1.648437.03125 3.28125.046876 4.921875.046876 65.105469-.003907 126.65625-24.707032 173.800781-69.886719 48.371094-46.355469 75.851562-108.773438 77.382812-175.75l.007813-.34375zm-98.160156 154.757812c-42.59375 40.816407-98.546875 62.640625-157.515625 61.496094l-.324219-.003906c-.160156 0-.316406 0-.472656 0-27.53125 0-54.597656-4.808594-80.445312-14.289063-6.429688-2.359375-13.4375-1.640625-19.222656 1.972656l-45.457032 28.398438v-56.925781c0-6.347657-2.761718-12.390625-7.578125-16.578125-45.863281-39.871094-72.367187-97.578125-72.738281-158.351563 1.394531-58.898437 25.585938-113.773437 68.132812-154.542969 42.589844-40.820312 98.5625-62.632812 157.511719-61.496093l.296875.007812.296875-.007812c59.007813-1.160157 114.921875 20.675781 157.515625 61.496093 42.507813 40.738282 66.695313 95.566407 68.128906 154.414063-1.429687 58.84375-25.621093 113.671875-68.128906 154.410156zm0 0"/><path d="m307.714844 144.183594c-15.269532 0-29.234375 4.816406-41.511719 14.3125-3.4375 2.65625-6.6875 5.644531-9.730469 8.9375-3.042968-3.296875-6.289062-6.28125-9.726562-8.9375-12.28125-9.496094-26.246094-14.3125-41.511719-14.3125-20.257813 0-38.898437 8.121094-52.492187 22.867187-13.28125 14.40625-20.59375 33.988281-20.59375 55.136719 0 45.726562 35.054687 75.597656 83.574218 116.945312 7.96875 6.792969 17.003906 14.496094 26.363282 22.675782 3.980468 3.488281 9.089843 5.40625 14.386718 5.40625s10.40625-1.917969 14.382813-5.398438c9.433593-8.253906 18.433593-15.921875 26.375-22.6875 48.515625-41.34375 83.570312-71.214844 83.570312-116.941406 0-21.152344-7.316406-40.730469-20.597656-55.140625-13.59375-14.742187-32.234375-22.863281-52.488281-22.863281zm-29.960938 172.089844c-6.488281 5.53125-13.679687 11.660156-21.28125 18.246093-7.554687-6.550781-14.765625-12.695312-21.273437-18.242187-45.539063-38.804688-73.023438-62.226563-73.023438-94.089844 0-27.800781 18.109375-47.976562 43.058594-47.976562 8.578125 0 16.148437 2.628906 23.140625 8.035156 6.441406 4.984375 10.988281 11.382812 13.671875 15.878906 3.015625 5.054688 8.542969 8.191406 14.425781 8.191406 5.882813 0 11.414063-3.136718 14.429688-8.195312 2.683594-4.492188 7.230468-10.890625 13.671875-15.875 6.992187-5.40625 14.558593-8.035156 23.140625-8.035156 24.949218 0 43.058594 20.175781 43.058594 47.976562 0 31.863281-27.484376 55.285156-73.019532 94.085938zm0 0"/></svg>

                                      </button>
                                  </span>

                            </form>
                        @else
                            <form action="{{route('posts.likes', $pst )}}" method="post" class="mr-1">
                                @csrf
                                @method('DELETE')
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm mt-1 ">
                                      <button type="submit" class="text-gray-600 inline-flex items-center leading-none text-sm ">
                                        <svg class="w-6 h-6 mr-1 " id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="256" x2="256" y1="512" y2="0"><stop offset="0" stop-color="#fd3a84"/><stop offset="1" stop-color="#ffa68d"/></linearGradient><linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="256" x2="256" y1="421" y2="121"><stop offset="0" stop-color="#ffc2cc"/><stop offset="1" stop-color="#fff2f4"/></linearGradient><g><g><g><circle cx="256" cy="256" fill="url(#SVGID_1_)" r="256"/></g></g><g><g><path d="m331 121c-32.928 0-58.183 18.511-75 46.058-16.82-27.552-42.077-46.058-75-46.058-25.511 0-48.788 10.768-65.541 30.32-15.772 18.409-24.459 42.993-24.459 69.225 0 28.523 10.698 54.892 33.666 82.986 20.138 24.632 49.048 49.971 82.524 79.313 12.376 10.848 25.174 22.065 38.775 34.306 2.853 2.567 6.444 3.85 10.035 3.85s7.182-1.283 10.035-3.851c13.601-12.241 26.398-23.458 38.775-34.306 33.476-29.341 62.386-54.681 82.524-79.313 22.968-28.092 33.666-54.462 33.666-82.985 0-53.637-36.748-99.545-90-99.545z" fill="url(#SVGID_2_)"/></g></g></g></svg>

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
                @auth('web')
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

