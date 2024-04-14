<?php get_header(); ?>

<section class="about-section">
  <section class="about-title container-fluid col-12 p-5 pb-3">
    <h1>Learn More About Alex.</h1>
  </section>

  <section class="about-arrow-headings container-fluid p-5 pt-3">
    <div class="row">
      <div class="col-12 col-md-6">
        <h2 id="introduction-heading" class="py-3" data-target="#introduction-paragraph">
          <i class="material-icons arrow">keyboard_arrow_right</i>
          Who Am I?
        </h2>
        <h2 id="skills-heading" class="py-3" data-target="#skills-paragraph">
          <i class="material-icons arrow">keyboard_arrow_right</i>
          What Do I Do?
        </h2>
        <h2 id="miscelaneous-heading" class="py-3" data-target="#miscelaneous-paragraph">
          <i class="material-icons arrow">keyboard_arrow_right</i>
          Miscelaneous
        </h2>
      </div>

      <div class="col-12 col-md-6">
        <p id="introduction-paragraph" class="py-3 d-none">Howdy, I'm Alex I'm just a guy who likes to code sometimes.</p>
        <p id="skills-paragraph" class="py-3 d-none">I'm an avid user of HTML, CSS, JS as well as PHP. I mostly work with CMS platforms such as WordPress and Opencart.</p>
        <p id="miscelaneous-paragraph" class="py-3 d-none">Miscelaneous</p>
      </div>

    </div>
  </section>
</section>

<?php wp_footer(); ?>