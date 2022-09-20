@extends('layouts.app') 
@section('style')
<link rel="stylesheet" href="{{asset('theme/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

              <livewire:conversations.conversations-list :conversations="$conversations"> 


            
  
            </div>
          </div>
        </div>
      </div>
      <!-- Chat Box-->
      <div class="col-7 px-0">
        <div class="px-4 py-5 chat-box bg-white">
          <!-- Sender Message-->
          <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
            <div class="media-body ml-3">
              <div class="bg-light rounded py-2 px-3 mb-2">
                <p class="text-small mb-0 text-muted">Test which is a new approach all solutions</p>
              </div>
              <p class="small text-muted">12:00 PM | Aug 13</p>
            </div>
          </div>
  
          <!-- Reciever Message-->
          <div class="media w-50 ml-auto mb-3">
            <div class="media-body">
              <div class="bg-primary rounded py-2 px-3 mb-2">
                <p class="text-small mb-0 text-white">Test which is a new approach to have all solutions</p>
              </div>
              <p class="small text-muted">12:00 PM | Aug 13</p>
            </div>
          </div>
  
          <!-- Sender Message-->
          <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
            <div class="media-body ml-3">
              <div class="bg-light rounded py-2 px-3 mb-2">
                <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
              </div>
              <p class="small text-muted">12:00 PM | Aug 13</p>
            </div>
          </div>
  
          <!-- Reciever Message-->
          <div class="media w-50 ml-auto mb-3">
            <div class="media-body">
              <div class="bg-primary rounded py-2 px-3 mb-2">
                <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
              </div>
              <p class="small text-muted">12:00 PM | Aug 13</p>
            </div>
          </div>
  
          <!-- Sender Message-->
          <div class="media w-50 mb-3"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
            <div class="media-body ml-3">
              <div class="bg-light rounded py-2 px-3 mb-2">
                <p class="text-small mb-0 text-muted">Test, which is a new approach</p>
              </div>
              <p class="small text-muted">12:00 PM | Aug 13</p>
            </div>
          </div>
  
          <!-- Reciever Message-->
          <div class="media w-50 ml-auto mb-3">
            <div class="media-body">
              <div class="bg-primary rounded py-2 px-3 mb-2">
                <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
              </div>
              <p class="small text-muted">12:00 PM | Aug 13</p>
            </div>
          </div>
  
        </div>
  
        <!-- Typing area -->
        <form action="#" class="bg-light">
          <div class="input-group">
            <input type="text" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
            <div class="input-group-append">
              <button id="button-addon2" type="submit" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
            </div>
          </div>
        </form>
  
      </div>
    </div>
  </div>
@endsection