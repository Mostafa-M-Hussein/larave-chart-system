<div>
    <!-- Sender Message-->

    @foreach($messages as $message)
        {{dd($messages)}}

        @if  ($messages->isOwn()  )
            <livewire:conversations.conversation-message-own  :message="$message" :key="$message->id"/>
        @else
            <livewire:conversations.conversation-message  :message="$message" :key="$message->id"/>


        @endif

    @endforeach


</div>
