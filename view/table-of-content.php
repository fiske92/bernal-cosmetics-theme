<div class="accordion my-2" id="table-of-content-bc">
  <div class="accordion-item ">
    <h2 class="accordion-header mb-0 border border-2 border-white">
      <button class="accordion-button bg-primary text-white px-3 py-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Sadržaj
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#table-of-content-bc">
        <div class="accordion-body">
        <?php 
            if (!empty($headings)) {
                echo '<ul class="m-0">';
                foreach ($headings as $heading) {
                    echo '<li class="lh-lg"><a href="#' . $heading['id'] . '">' . $heading['text'] . '</a></li>';
                }
                echo '</ul>';
            }
        ?>
        </div>
    </div>
  </div>
</div>