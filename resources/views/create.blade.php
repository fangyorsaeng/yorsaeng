<form action="/yorsaeng/store" method="post" enctype="multipart/form-data">
  @csrf
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-6">
          <label for="exampleInputname" class="form-label">ชื่อ</label>
          <input type="text" name="name" class="form-control" id="exampleInputname" placeholder="">
        </div>
        <div class="col-sm-6">
          <label for="exampleInputage" class="form-label">อายุ</label>
          <input type="number" name="age" class="form-control" id="exampleInputage" placeholder="">
        </div>
        <div class="col-sm-6">
          <label for="exampleInputnickname" class="form-label">ชื่อเล่น</label>
          <input type="text" name="nickname" class="form-control" id="exampleInputnickname" placeholder="">
        </div>
        <div class="col-sm-6">
          <label for="exampleInputphone" class="form-label">เบอร์โทร</label>
          <input type="text" name="phone"class="form-control" id="exampleInputphone" placeholder="">
        </div>
        <div class="col-sm-6">
          <label>รุปภาพ</label>
          <input class="form-control" type="file" name="photo" multiple>
        </div>
        <button type="submit"  class="btn btn-success">บันทึก</button>
      </div>
    </div>
  </div>
  </div>
</form>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>