<main>

  <div class="container">
    <div id="featuredList" class="row">
      <div class=" bold text-black">
        Featured Posts
      </div>
    </div>
  </div>

</main>

<script>
featuredArticle();
async function featuredArticle() {
  let URL = "/featuredarticle";

  try {
    const response = await axios.get(URL);
    response.data.forEach((element) => {
      let artid = element.id

      // Date Conversion from Updated At
      // Time value from query builder
      const timeValue = element.updated_at;

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



      // Date Conversion from Updated At Ends Here

      document.getElementById('featuredList').innerHTML += (`

      <a href="/post/${artid}">
        <div class="card d-flex justify-content-between flex-row p-0 mb-2">
            <div class="col-md-2">
                <img class="post-thumbnail" src="${element['thumbnail']}" alt="blog img">
            </div>

            <div class="col-md-9 d-flex flex-column justify-content-center">
                <div class="title"><h2>${element['title']}</h2></div>
                <div class="author d-flex">
                    <h5 class="me-2 author">${element['name']} </h5>
                    <span class="date-time">${formattedDate}</span>
                </div>
                <div class="short-details">
                    <p>${element['content']}</p>
                </div>
            </div>
        </div>
    </a>

            `)

    });
  } catch (error) {
    alert(error);
  }
}
</script>