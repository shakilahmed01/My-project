<!-- start Contact Section -->
<div class="contact py-5 m-5">
    <div class="text badge bg-dark text-wrap py-3 my-3">
        <i class="fa-regular fa-user fa-5x text-white"></i>
        <h1 class="text fw-bolder text-white">Contact Us</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-5 grad rounded contact_form py-3 m-5">
        <h1 class="fw-bolder text-white">Contact Form</h1>
            <form action="{{route('contact.submit')}}" method="post">
                @csrf
                <div class="form-group p-1 m-3">
                    <label for="name" class="text-white fw-bolder">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                </div>
                <div class="form-group p-1 m-3">
                    <label for="email" class="text-white fw-bolder">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email address">
                </div>
                <div class="form-group p-1 m-3">
                    <label for="name" class="text-white fw-bolder">Subject</label>
                    <input type="text" class="form-control" name="subject" placeholder="Enter your subject">
                </div>
                <div class="form-group p-1 m-3">
                    <label for="message" class="text-white fw-bolder">Message</label>
                    <textarea class="form-control" name="message" placeholder="Enter your Message" ></textarea>
                </div>
                <div class="form-group p-1 m-1">
                    <button type="submit" class="btn btn-outline-info text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>