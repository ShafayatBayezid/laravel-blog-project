<section>
  <div class="container d-flex justify-center flex-column mt-5">
    <div class="col-md-8 m-auto">
      <p class="text-justify">{{ $post->content }}
      </p>
    </div>

    <div class="p-1">
      <strong class="text-secondary">Comments</strong>
      <div id="single-comment" class="text-black mt-3">

      </div>
    </div>



    {{-- form starts here --}}
    <div class="m-2">
      <h4 class="m-2">Comment Here</h4>

      <form id="commentForm" class="bg-white shadow-md rounded">

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Comments Here</label>
          <textarea class="form-control" id="comment" rows="3"></textarea>
        </div>
        <button class="btn btn-primary btn-lg" id="submitButton">Submit</button>

      </form>
    </div>


  </div>
</section>

<script>
// Comment Section
showcomments();
async function showcomments() {
  try {
    const response = JSON.parse('<?php echo json_encode( $comments ); ?>');
    response.forEach((element) => {


      document.getElementById('single-comment').innerHTML += (`
                <div  class="shadow-lg p-3 mb-2">
                <h4
                    class="text-black bold">
                    ${element.name}
                </h4>
                <p  class="mt-2 text-justify">${element.message}</p>
            </div>
            `)

    });
  } catch (error) {
    alert(error);
  }
}

// Form Posting Script
let commentForm = document.getElementById('commentForm');
commentForm.addEventListener('submit', async (event) => {
  // event.preventDefault();
  let name = document.getElementById('name').value;
  let comment = document.getElementById('comment').value;

  if (name.length === 0 || comment.length === 0) {
    alert('Please fill all the fields');

  } else {
    let formdata = {
      name: name,
      message: comment
    }
    const artid = JSON.parse('<?php echo json_encode( $post->id ); ?>');
    let URL = `/addcomment/${artid}`;
    let result = await axios.post(URL, formdata);

    if (result.status === 200) {
      // alert('Your comment has been added');

    } else {
      alert('Something went wrong');
    }
  }
})
</script>