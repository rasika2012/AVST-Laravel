<div>
    <h1>New</h1>
    <form method="post" action="/add1">
        <div class="form-group">
            <label>Location</label>
            <input type="text"  placeholder="location" name="location">
        </div>
        <div class="form-group">
            <label>speed</label>
            <input type="text"  placeholder="speed" name="speed">
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file"  placeholder="Image"   name="image" >
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
