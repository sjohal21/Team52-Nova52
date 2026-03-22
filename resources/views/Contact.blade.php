<x-layout>
    <x-slot:title>
        Contact Us
    </x-slot:title>

    <section class="max-w-6xl mx-auto px-4 py-10 md:py-14 space-y-10">

<!--Beginning of page -->
        <section class="bg-base-200 rounded-[2rem] px-8 py-14 md:px-14 md:py-20 text-center">
            <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-4">
                Contact Nova52
            </p>
            <h1 class="text-4xl md:text-6xl font-semibold text-base-content leading-tight max-w-3xl mx-auto">
                We’re here to help.
            </h1>
            <p class="mt-6 text-base md:text-lg text-base-content/70 max-w-2xl mx-auto leading-relaxed">
                Have a question about your order, our products or your account? Get in touch and our team will be happy to assist.
            </p>
        </section>

<!--Contact section-->
        <section class="grid gap-6 lg:grid-cols-2">

            <!--Form-->

    <div class="bg-base-200 border border-base-300 rounded-[2rem] p-8 md:p-10">
         <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-3">
         Send a Message
         </p>
         <h2 class="text-2xl md:text-3xl font-semibold text-base-content mb-6">
         Contact us
         </h2>

     <form action="{{ URL::to('/contact') }}" method="POST" class="space-y-5">
          @csrf
 <!--Input Fields for contact information-->
        <div>
        <label class="block text-sm font-medium text-base-content mb-2">Full Name</label>
    <input>
     type="text"
      name="name"
      placeholder="Enter your name"
      class="input input-bordered w-full rounded-2xl bg-base-100"
                            
      </div>

      <div>
      <label class="block text-sm font-medium text-base-content mb-2">Email Address</label>
      <input>
        type="email"
        name="email"
        placeholder="Enter your email"
         class="input input-bordered w-full rounded-2xl bg-base-100"
                        
    </div>

         <div>
     <label class="block text-sm font-medium text-base-content mb-2">Subject</label>
          <input>
        type="text"
         name="subject"
         placeholder="What can we help with?"
         class="input input-bordered w-full rounded-2xl bg-base-100"
                      
      </div>
          <div>
          <label class="block text-sm font-medium text-base-content mb-2">Message</label>
      <textarea>
           name="message"
       rows="6"
       placeholder="Write your message here..."
        class="textarea textarea-bordered w-full rounded-2xl bg-base-100"
     </textarea>
    </div>

         <div class="pt-2">
         <button type="submit" class="btn btn-neutral rounded-full px-8">
     Send Message
    </button>
     </div>
</form>
    </div>

            <!--Information Details-->

        <div class="space-y-6">
     <div class="bg-base-200 border border-base-300 rounded-[2rem] p-8 md:p-10">
          <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-3">
        Contact Details
          </p>
    <h2 class="text-2xl md:text-3xl font-semibold text-base-content mb-6">
              Reach out directly
      </h2>

    <div class="space-y-5 text-base-content/80">
     <div>
     <p class="text-sm text-base-content/60 mb-1">Email</p>
        <p class="font-medium text-base-content">support@nova52.com</p>
      </div>

    <div>
      <p class="text-sm text-base-content/60 mb-1">Phone</p>
      <p class="font-medium text-base-content">+44 0121 000 0000</p>
    </div>

       <div>
     <p class="text-sm text-base-content/60 mb-1">Opening Hours</p>
  <p class="font-medium text-base-content">Mon – Fri, 9:00am – 5:00pm</p>
</div>
    </div>
</div>

<div class="bg-base-200 border border-base-300 rounded-[2rem] p-8">
  <p class="text-sm uppercase tracking-[0.2em] text-base-content/60 mb-3">
     Response Time
  </p>
      <p class="text-base-content/70 leading-relaxed">
     We aim to respond to all enquiries within 24–48 hours. For order-related questions, please include your order number for quicker support.
  </p>
</div>
     </div>

 </section>

    </section>
</x-layout>