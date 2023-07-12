<section>
  <div class="d-flex flex-column justify-content-center align-items-center p-5" style="background-image: url('{{ $post->thumbnail }}'); background-position: center;
    background-size: cover;">
    <strong id="hero-date" class="text-black"></strong>
    <h2 class="text-black mt-3 text-center">{{ $post->title }}</h2>
    <div class="d-flex flex-row justify-content-between align-items-center my-2">
      <img src="{{ $post->img}}" alt="Author Image" class="author-img">
      <div class="flex flex-col ms-5">
        <h6 class="text-black p-0 m-0">Author</h6>
        <h4 class=" text-black  p-0 m-0">{{ $post->name }}</h4>
      </div>
    </div>

  </div>





</section>

<script>
herodate();

function herodate() {
  // Date Conversion from Updated At
  // Time value from query builder
  const timeValue = JSON.parse('<?php echo json_encode( $post->updated_at ); ?>');

  // Convert the time value to a Date object
  const date = new Date(timeValue);

  // Format the date components
  const day = date.getDate().toString().padStart(2, "0");
  const month = (date.getMonth() + 1).toString().padStart(2, "0");
  const year = date.getFullYear().toString();
  const hours = date.getHours() % 12 || 12;
  const minutes = date.getMinutes().toString().padStart(2, "0");
  const amPm = date.getHours() < 12 ? "AM" : "PM";

  // Formatted date string
  const formattedDate = `${day}-${month}-${year}, ${hours}:${minutes}${amPm}`;

  // Use the formatted date in innerHTML
  document.getElementById('hero-date').innerHTML = formattedDate;


  // Date Conversion from Updated At Ends Here
}
</script>