<div>


    @forelse ($conversations as $conversation )
        <a class="list-group-item list-group-item-action active text-white rounded-0">
            <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
            <div class="media-body ml-4">
                <div class="d-flex align-items-center justify-content-between mb-1">
                <h6 class="mb-0"> {{  }}  </h6><small class="small font-weight-bold">25 Dec</small>
                </div>
                <p class="font-italic mb-0 text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            </div>
        </a>
    @empty
        <p class="text-muted"> No conversation found </p>
        
    @endforelse
 

      {{-- <a href="#" class="list-group-item list-group-item-action list-group-item-light rounded-0">
        <div class="media"><img src="https://bootstrapious.com/i/snippets/sn-chat/avatar.svg" alt="user" width="50" class="rounded-circle">
          <div class="media-body ml-4">
            <div class="d-flex align-items-center justify-content-between mb-1">
              <h6 class="mb-0">Jason Doe</h6><small class="small font-weight-bold">14 Dec</small>
            </div>
            <p class="font-italic text-muted mb-0 text-small">Lorem ipsum dolor sit amet, consectetur. incididunt ut labore.</p>
          </div>
        </div>
      </a> --}}

</div>
