<x-adminlayout>
    <x-slot:title>
        Contact requests
    </x-slot:title>
    <div class="m-5 p-5">
        @if(count($contacts))
            @foreach($contacts as $contact)
                <div class="card p-5">
                    <h2 class="card-title">{{$contact->first_name. " ".$contact->last_name}}</h2>
                    <div class="card-body">
                        <h3 class="text-lg font-bold">Email</h3>
                        <p>{{$contact->email}}</p>
                        <h3 class="text-lg font-bold">Subject</h3>
                        <p>{{$contact->subject}}</p>
                        <h3 class="text-lg font-bold">Message</h3>
                        <p>{{$contact->message}}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p>No contact requests</p>
        @endif
    </div>
</x-adminlayout>
