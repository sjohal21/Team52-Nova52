<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Contact
    </x-slot:title>
    <div class="flex flex-col bg-base-300">
        <div class="text-center p-5">
            <h2 class="text-3xl font-bold">Contact Us</h2>
            <h3 class="text-2xl p-2">Have a question? Get in touch with the Nova52 team.</h3>
        </div>
        <div class="bg-base-100 p-5 text-center">
            <h2 class="text-3xl font-bold">Get in touch</h2>
            <div class="grid grid-cols-2 gap-4 p-5">
                <div class="card w-auto bg-base-300 p-3">
                    <div class="card-body">
                            <h2 class="text-2xl font-bold card-title">Address</h2>
                            <div class="text-xl text-left">
                                <p>Aston University</p>
                                <p>Birmingham</p>
                                <p>B4 7ET</p>
                                <p>United Kingdom</p>
                            </div>
                    </div>
                </div>
                <div class="card w-auto bg-base-300 p-3">
                    <div class="card-body">
                        <h2 class="text-2xl font-bold card-title">Email</h2>
                        <a href="mailto:nova52@example.com" class="text-xl underline text-left">nova52@example.com</a>
                    </div>
                </div>
                <div class="card w-auto bg-base-300 p-3">
                    <div class="card-body">
                        <h2 class="text-2xl font-bold card-title">Phone</h2>
                        <a class="text-xl text-left" href="tel:01213335689">0121 333 5689</a>
                    </div>
                </div>
                <div class="card w-auto bg-base-300 p-3">
                    <div class="card-body">
                        <h2 class="text-2xl font-bold card-title">Operating hours</h2>
                        <div class="text-xl text-left">
                            <p>Monday - Friday:</p>
                            <p>9:00 - 17:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-300 w-auto p-3">
                <div class="card-body items-center text-center">
                    <h2 class="card-title font-bold text-2xl">Send us a message</h2>
                    <p class="text-xl">Have a question or need support? Fill out the form below and we will get back to you as soon as possible.</p>
                    <form method="post">
                        @csrf
                        <div class="grid grid-cols-2 h-auto gap-5">
                            <input class="input rounded-box" type="text" placeholder="First name" id="first_name" name="first_name">
                            <input class="input rounded-box" type="text" placeholder="Surname" id="last_name" name="last_name">
                            <input class="input rounded-box" type="email" placeholder="Email address" id="email" name="email">
                            <input class="input rounded-box" type="text" placeholder="Subject" id="subject" name="subject">
                        </div>
                        <div class="justify-center p-5">
                            <textarea class="textarea h-auto" id="message" name="message"></textarea>
                            <button class="btn p-5 btn-neutral m-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
