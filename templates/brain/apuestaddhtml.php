<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Add Data</title>
</head>

<body>
    <form action="apuestadd" method="post" name="form1" enctype="multipart/form-data">
        <div class="form-group">
            <label>title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>team 1</label>
            <input type="text" class="form-control" name="team1">
        </div>
        <div>
            <label class="form-label">Imagen Team1</label>
            <input class="form-control" type="file" name="team1imagen" multiple /> 
        </div>
        <div class="form-group">
            <label>team 2</label>
            <input type="text" class="form-control" name="team2">
        </div>
        <div>
            <label class="form-label">Imagen Team2</label>
            <input class="form-control" type="file" name="team2imagen" multiple /> 
        </div>
        <div class="form-group">
            <label>date</label>
            <input type="date" class="form-control" name="date" value="2022-12-28">
        </div>
        <div class="form-group">
            <label>Profit</label>
            <input type="text" class="form-control" name="profit" maxlength="3">
        </div>


        <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>