<div class="card mb-4">
    <div class="card-body">
        <form method="POST" action="todo">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea  class="form-control"name="description" cols="30" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-dark">Create Todo</button>
        </form>
        
    </div>
</div>