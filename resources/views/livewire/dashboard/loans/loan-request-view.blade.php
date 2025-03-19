<div class="w-full">
    @if(!empty($loan_requests->toArray()))
    <div class="w-full">
        <div style="background-color: rgb(2, 3, 129)" class="flex items-center p-5 justtify-between text-warning">
            <h1 class="flex gap-4 text-[#db9326]">
                <span class="text-3xl font-bold">All Application</span>
            </h1>
        </div>

        <div class="">
            @include('livewire.dashboard.loans.__parts.list-loan-request')
        </div>
    </div>

    @else
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <!-- Card with glassmorphism effect -->
            <div class="card border-0 shadow-lg p-4 position-relative"
                 style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-radius: 20px; overflow: hidden;">

              <!-- Decorative gradient overlay -->
              {{--  --}}

              <!-- Content container -->
              <div class="card-body text-center position-relative" style="z-index: 2;">
                <!-- Image with hover scaling effect -->
                <div class="position-relative d-inline-block">
                  <div class="position-absolute top-50 start-50 translate-middle bg-gradient rounded-circle"
                       style="width: 120px; height: 120px; background: linear-gradient(to right, #ffaf40, #ff5e62); filter: blur(30px); opacity: 0.3;"></div>

                </div>

                @role('user')
                <!-- Title and description -->
                <h2 class="display-6 fw-bold text-[#6a11cb] mb-3">Ready for Financial Freedom?</h2>
                <p class="text-muted  mb-4">Complete our streamlined application process and receive your personalized offer in minutes.</p>

                <!-- Button with gradient background and hover animation -->
                <a href="{{ route('form') }}"
                   class="btn btn-lg fw-bold text-white shadow-sm px-5 py-3 d-flex align-items-center justify-content-center gap-2"
                   style="background: linear-gradient(to right, #ffaf40, #ff5e62); border-radius: 30px; transition: all 0.3s ease;">
                  <i class="bi bi-plus-circle"></i> Apply for a Loan
                </a>

                <!-- Footer link -->
                <div class="mt-5 pt-4 border-top border-light">
                  <p class="text-muted small opacity-75">
                    Need assistance?
                    <a href="{{ route('contact') }}"
                       class="text-warning text-decoration-none fw-bold d-flex align-items-center gap-1"
                       style="transition: color 0.3s ease;">
                      Contact our support team
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </p>
                </div>
                @endrole
                <div class="position-absolute" style="z-index: 1; opacity: 0.2;">
                    <div class="position-absolute top-0 start-0 bg-gradient rounded-circle"
                         style="width: 300px; height: 300px; background: linear-gradient(to right, #ffaf40, #ff5e62); filter: blur(80px);"></div>
                    <div class="position-absolute bottom-0 end-0 bg-gradient rounded-circle"
                         style="width: 250px; height: 250px; background: linear-gradient(to left, #6a11cb, #2575fc); filter: blur(80px);"></div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    @endif
</div>
