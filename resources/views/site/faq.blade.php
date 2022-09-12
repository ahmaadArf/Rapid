<!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <ul class="faq-list" data-aso="fade-up" data-aos-delay="100">
            @foreach ($questions as $question )
            <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq{{ $loop->index }}">
                    {{ $question->$questionn }}? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq{{ $loop->index }}" class="collapse" data-bs-parent=".faq-list">
                  <p>
                   {{ $question->$answer }}
                  </p>
                </div>
            </li>
            @endforeach
        </ul>

      </div>
    </section><!-- End F.A.Q Section -->
