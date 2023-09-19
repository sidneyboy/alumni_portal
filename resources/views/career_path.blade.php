<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Career Path</title>
</head>

<body>

    <br />
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="{{ route('career_path_save') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h3>DCNHS ALUMNI CAREER PATH</h3>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select name="career" id="career" class="form-control" required>
                                        <option value="" default>Select Career Path</option>
                                        <option value="Working">Working</option>
                                        <option value="Tertiary Education">Tertiary Education</option>
                                        <option value="Business">Business</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <textarea name="description" required id="description" class="form-control" cols="30" rows="10"
                                        placeholder="Say something about your career"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="date" required name="from" id="from" class="form-control"
                                        autocomplete="off" placeholder="From" />
                                </div>
                                <div class="form-group">
                                    <label for="" style="color:blue;">*Upload an image of you and your career</label>
                                    <input accept="image/*" required class="form-control" type='file' id="imgInp" name="file" />
                                    <img id="blah" src="#" class="img img-thumbnail" alt="your image" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="form-group">
                            <input type="hidden" name="user_id" value="{{ $id }}">
                            <button type="submit" class="btn btn-sm float-right btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
    </script>
</body>

</html>
