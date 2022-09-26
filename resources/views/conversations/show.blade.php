@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('theme/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endsection

@section('content')

    <div class="container py-5 px-4">
        <!-- For demo purpose-->
        <header class="text-center">
            {{-- <h1 class="display-4 text-white">Bootstrap Chat</h1>
            <p class="text-white lead mb-0">An elegant chat widget compatible with Bootstrap 4</p>
            <p class="text-white lead mb-4">Snippet by
              <a href="https://bootstrapious.com" class="text-white">
                <u>Bootstrapious</u></a>
            </p> --}}
        </header>

        <div class="row rounded-lg overflow-hidden shadow">
            <!-- Users box-->
            <div class="col-5 px-0">
                <div class="bg-white">

                    <div class="bg-gray px-4 py-2 bg-light">
                        <p class="h5 mb-0 py-1">Recent</p>
                    </div>

                    <div class="messages-box">
                        <div class="list-group rounded-0">
                            {{ dd($conversations->messages)}}
                            <livewire:conversations.conversations-list :conversations="$conversations"/>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Chat Box-->
            <div class="col-7 px-0">
                <div class="px-4 py-5 chat-box bg-white">


                    <livewire:conversations.conversation-messages  :conversations="$conversation" :messages="$conversation->messages" />



                    <!-- Typing area -->
                    <livewire:conversations.conversation-reply   />


                </div>
            </div>
        </div>
@endsection
