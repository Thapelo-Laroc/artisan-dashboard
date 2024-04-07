<form method="post" action="">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title">
    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea>
    <label for="youtube_link">YouTube Link:</label>
    <input type="text" id="youtube_link" name="youtube_link">
    <button type="submit">Submit</button>
</form>
