@props(['pst' => $pst ])

<div>
    <div class="mb-4">
        <a href="{{route('users.posts', $pst->user)}}" class="font-bold">{{ $pst->user->name }}</a> <span class="text-gray-600 text-sm">{{ $pst->created_at->diffForHumans() }}</span>
        <p class="mb-2">{{$pst->description}}</p>
        @auth
          @can('delete',$pst)

              <form action="{{route('posts.destroy',$pst)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-blue-500">Delete</button>
              </form>

          @endcan

        @endauth

        <div class="flex items-center">
            @auth
              @if (!$pst->checkLike(auth()->user()))
                  <form action="{{route('posts.likes', $pst )}}" method="post" class="mr-1">
                      @csrf
                      <button type="submit" class="text-blue-500">Like</button>
                  </form>
              @else
                  <form action="{{route('posts.likes', $pst )}}" method="post" class="mr-1">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="text-blue-500">Unlike</button>
                  </form>
              @endif
          @endauth
          @if ($pst->likes->count())
              <span>{{$pst->likes->count()}} {{ Str::plural('like',$pst->likes->count())}}</span>
          @endif


        </div>
    </div>
</div>
