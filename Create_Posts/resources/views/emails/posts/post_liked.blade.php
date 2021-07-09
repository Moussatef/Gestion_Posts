@component('mail::message')
# Introduction

Who like your post.

Name : {{ $liker->name }} .


email : {{ $liker->email }}.

@component('mail::button', ['url' => route('posts.show', $post)])
View the post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
