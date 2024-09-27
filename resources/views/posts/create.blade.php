<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div style="margin-bottom: 10px;">
        <label>Title: </label>
        <input type="text" name="name" required style="width: 100%;">
    </div>

    <div style="margin-bottom: 10px;">
        <label>Slug: </label>
        <input type="text" name="slug" required style="width: 100%;">
    </div>

    <div style="margin-bottom: 10px;">
        <label>Content: </label>
        <textarea name="content" required style="width: 100%;"></textarea>
    </div>

    <div style="margin-bottom: 10px;">
        <label>Category: </label>
        <input type="text" name="category" required style="width: 100%;">
    </div>

    <div style="margin-bottom: 10px;">
        <label>Featured Image: </label>
        <input type="file" name="featured_image" required style="width: 100%;">
    </div>

    <div style="margin-bottom: 10px;">
        <label>Publish Status: </label>
        <select name="publish_status" required style="width: 100%;">
            <option value="draft">Draft</option>
            <option value="published">Published</option>
        </select>
    </div>

    <div style="margin-bottom: 30px;">
        <label>Publish Date: </label>
        <input type="datetime-local" name="publish_date" required style="width: 100%;">
    </div>

    <button type="submit" style="width: 20%; background-color: #4CAF50; color: white; padding: 10px;">Create Post</button>
</form>